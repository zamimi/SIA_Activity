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
        public $user1Servicess
;
        /**
        * Create a new controller instance
        * @return void
        */
        public function __construct(User1Services $user1Servicess){
            $this->User1Services = $user1Servicess;
        }
        
        public function index(){
            return $this->successResponse($this->User1Services->obtainUsers1()); 
        }

        public function add(Request $request){
            
        }

        public function show($id){
            
        }
        
        public function update(Request $request,$id) {
            
        }
        
        public function delete($id){
            
        }

    }