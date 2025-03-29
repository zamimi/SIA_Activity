<?php
    // AAAAAAAAAAAAA
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use App\Models\User;
    use App\Traits\ApiResponser;
    use DB;

    Class User1Controller extends Controller {
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

        public function add(Request $request){
            $rules = [
                'username' => 'required|max:20',
                'passwords' => 'required|max:20',
            ];

            $this->validate($request, $rules);
            $user = User::create($request->all());
            return $this->successResponse($user, Response::HTTP_CREATED);
        }

        public function show($id){
            $user = User::findOrFail($id);
            return $this->successResponse($user);

            /* old code pf show; contains error response
            $user = User::where('userid', $id)->first();
            if($user){
                return $this->successResponse($user);
            }
            {
                return $this->errorResponse('User ID does not exist', Response::HTTP_NOT_FOUND);
            }*/
        }
        
        public function update(Request $request,$id) {
            $rules = [
                'username' => 'max:20',
                'passwords' => 'max:20',
            ];

            $this->validate($request, $rules);
            $user = User::findOrFail($id);
            $user->fill($request->all());
            
            // if no changes happen
            if ($user->isClean()) {
                return $this->errorResponse('At least one value must change', Response::HTTP_UNPROCESSABLE_ENTITY);
            }

            $user->save();
            return $this->successResponse($user);
        }
        
        public function delete($id){
            /* old code of delete; contains error response only
            $user = User::findOrFail($id);
            $user->delete();
            return $this->errorResponse('User ID does not exist', Response::HTTP_NOT_FOUND);
            */

            $user = User::where('userid', $id)->first();
            if($user){
                $user->delete();
                return $this->successResponse('Succesfully deleted', Response::HTTP_OK);
            }
            {
                return $this->errorResponse('User ID Does Not Exists', Response::HTTP_NOT_FOUND);
            }
        }

    }