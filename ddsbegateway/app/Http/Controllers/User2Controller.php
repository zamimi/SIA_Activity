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
         * The service to consume the User1 Microservice
         * @var User2Service
         */

        public $user2Servicess
;

        /**
         * Create a new controller instance
         * @return void
         */
        public function __construct(User2Service $user2Servicess){
            $this->User2Services = $user2Servicess;
        }
        
        public function getUsers(){
            
        }

        public function index(){
            
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