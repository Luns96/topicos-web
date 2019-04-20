<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Personal;
use App\schedule;
use App\Section;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreValidation;
use App\Http\Requests\UpdateValidation;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $users= User::all();
        $find = $request->find;
        if ($find != null){
            $find = User::all()->where('name','=', $find );
            if ($find->isEmpty()){
                $find = null;
            }
            // $user = User::where('name', 'LIKE', "%$name%");
            // $find = '';
        }
        
        $users = User::orderBy('id','asc')->paginate(4);
        return view('user.index', compact('users', 'find'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        $roles = Role::all()->pluck('name', 'id');
        return view('user.create', compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreValidation $request)
    {
        //Store in User
        $usuario = new User;
        $usuario->name = $request->nickname;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->save();
        $id = $usuario->id;

        //Store in Personal
        $user = new Personal;
        $user->ci = $request->ci;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->age = $request->age;
        $user->number = $request->number;
        $user->ocupation = $request->rol;
        $user->address = $request->address;
        $user->user_id = $id;
        $user->save();

        //Asign rol
        if ($usuario->save()){
            $usuario->assignRole($request->rol);

            return redirect('/user/index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::findOrFail($id);
        $personal = $usuario->personal;
        $roles = Role::all()->pluck('name', 'id');
        return view('user.show', compact('usuario','roles','personal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        $personal = $usuario->personal;
        $roles = Role::all()->pluck('name', 'id');
        return view('user.edit', compact('usuario','roles','personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateValidation $request, $id)
    {
        //update user
        $usuario = User::findOrFail($id);
        $usuario->name = $request->nickname;
        $usuario->email = $request->email;
        if ($request->password != null){
            $usuario->password = bcrypt($request->password);
        }
        $usuario->save();

        //update personal
        $user = $usuario->personal;
        $user->ci = $request->ci;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->age = $request->age;
        $user->number = $request->number;
        $user->ocupation = $request->rol;
        $user->address = $request->address;
        $user->save();

  
        $usuario->syncRoles($request->rol);
        $usuario->save();
        return redirect('/user/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);

        #Eliminar el role
        $usuario->removeRole($usuario->roles->implode('name',','));
        #Eliminar usuario
        if ($usuario->delete()){
            return redirect('/user/index');
        }
        else{
            return response()->json([
                'message' => 'Error al eliminar el usuario'
            ]);
        }

    }

    public function class($id)
    {
        $class = schedule::all()->where('personal_id','=', $id);
        return view('class', compact('class'));
    }


}
