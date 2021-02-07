<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->authorize('isAdmin');

        if(\Gate::allows('isAdmin') || \Gate::allows('isAuthor'))
        {
            return User::orderBy('id','DESC')->paginate(10);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required|string|max:191',
            //'email' => 'required|string|email|max:191|unique:users',
            'cedula' => 'required|unique:users',
            'telefono' => 'required|unique:users',
            'cargo' => 'required|string|max:30',
            'type' => 'required',
            //'password' => 'required|string|min:5'
        ]);

        //return ['message' => 'I have your data'];
        return User::create([
            'name'  => $request['name'],
            'cedula'  => $request['cedula'],
            'telefono'  => $request['telefono'],
            'email'  => $request['email'],
            'type'  => $request['type'],
            'bio'  => $request['bio'],
            //'cargo'  => $request['cargo'],
            //'photo'  => $request['photo'],
            'password'  => Hash::make($request['cedula'])
        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateProfile(Request $request)
    {
        $user = auth('api')->user();

        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
            'password' => 'sometimes|required|min:5'
        ]);


        $currentPhoto = $user->photo;

        if( $request->photo != $currentPhoto )
        {
            $name = time().'.'.explode('/',explode(':',substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];

            \Image::make($request->photo)->save(public_path('img/profile/').$name);

            $request->merge(['photo' => $name]);

            $userPhoto = public_path('img/profile/').$currentPhoto;
            if( file_exists($userPhoto) )
            {
                @unlink($userPhoto);
            }

        }


        if(!empty($request->password))
        {
            $request->merge(['password' => Hash::make($request['password'])]);
        }


        $user->update($request->all());

        return ['message'=> "Success"];
    }

    public function profile()
    {
        return auth('api')->user();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return ['message' => 'Actualizar la información del usuario'];
        $user = User::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
            'password' => 'sometimes|min:5'
        ]);

        $user->update($request->all());

        return ['message' => 'Actualizar la información del usuario'];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('isAdmin');

        $user = User::findOrFail($id);

        $user->delete();

        return  ['message' => 'Usuario eliminado'];

    }

    public function search()
    {
        if($search = \Request::get('q')){
            $users = User::where(function($query) use ($search){
                $query->where('name','LIKE',"%$search%")
                        ->orWhere('email','LIKE',"%$search%")
                        ->orWhere('type','LIKE',"%$search%");
            })->paginate(20);
        }else{
            $users =  User::orderBy('id','DESC')->paginate(2);
        }

        return $users;
    }
}
