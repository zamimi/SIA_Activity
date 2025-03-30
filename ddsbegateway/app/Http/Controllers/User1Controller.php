<?php
    // AAAAAAAAAAAAA
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use App\Traits\ApiResponser;
    use DB;
    use App\Services\User1Services;

    Class User1Controller extends Controller {
        use ApiResponser;

        /**
         * The service to consume the User1 Microservice
         * @var User1Services

         */
        public $user1Services;
        /**
        * Create a new controller instance
        * @return void
        */
        public function __construct(User1Services $user1Services){
            $this->User1Services = $user1Services;
        }

        public function index(){
            return $this->successResponse($this->User1Services->obtainUsers1()); 
        }

        public function add(Request $request){
            return $this->successResponse($this->User1Services->createUser1($request->all(), Response::HTTP_CREATED));
        }

        public function show($id){
            return $this->successResponse($this->User1Services->obtainUser1($id));

        }
        
        public function update(Request $request,$id) {
            return $this->successResponse($this->User1Services->editUser1($request->all(), $id));
        }
        
        public function delete($id){
            return $this->successResponse($this->User1Services->deleteUser1($id));
        }

    }