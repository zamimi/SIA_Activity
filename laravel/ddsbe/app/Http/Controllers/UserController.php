<?php
    // AAAAAAAAAAAAA
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    // use Illuminate\Http\Response;
    use App\Models\User;
    use App\Traits\ApiResponser;
    use DB;

    Class UserController extends Controller {
        use ApiResponser;
        private $request;
        public function __construct(Request $request){
            $this->request = $request;
        }
        
        public function getUsers(){
            // $users = User::all();
            // return response()->json(['data', $users], 200);

            $users = DB::connection('mysql')
            ->select("Select * from tbluser");
            return $this->successResponse($users);
        }

        public function index(){
            $users = User::all();
            return $this->successResponse($users);
        }
    }