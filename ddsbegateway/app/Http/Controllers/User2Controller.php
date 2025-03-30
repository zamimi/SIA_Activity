<?php
    // AAAAAAAAAAAAA
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use App\Traits\ApiResponser;
    use DB;
    use App\Services\User2Services;

    Class User2Controller extends Controller {
        use ApiResponser;

        /**
         * The service to consume the User2 Microservice
         * @var User2Services

         */
        public $user2Services;
        /**
        * Create a new controller instance
        * @return void
        */
        public function __construct(User2Services $user2Services){
            $this->User2Services = $user2Services;
        }

        public function index(){
            return $this->successResponse($this->User2Services->obtainUsers2()); 
        }

        public function add(Request $request){
            return $this->successResponse($this->User2Services->createUser2($request->all(), Response::HTTP_CREATED));
        }

        public function show($id){
            return $this->successResponse($this->User2Services->obtainUser2($id));

        }
        
        public function update(Request $request,$id) {
            return $this->successResponse($this->User2Services->editUser2($request->all(), $id));
        }
        
        public function delete($id){
            return $this->successResponse($this->User2Services->deleteUser2($id));
        }

    }