<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use App\Models\Permissions;
use App\Models\model_has_permissions;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function listar_usuarios() {
        
        $usuario     = User::all();
        $permissions = Permissions::all();
        
            return view('usuarios.listar_usuarios', [
            'usuario'     => $usuario, 
            'permissions' => $permissions
                    
            ]);
        }

    public function form_usuarios() {

        $perfil = \Spatie\Permission\Models\Permission::all();
    
        return view('usuarios.form_usuarios', [
            'perfil' => $perfil 
        ]); 

    }
    
    public function perfil_usuarios() {

        return view('usuarios.perfil_usuarios'    
    );}
    
    public function atribuir_perfil_usuarios() {

        $usuario     = User::all();
      //  $permissions = Permissions::all();



        return view('usuarios.atribuir_perfil_usuarios', [
            'usuario'     => $usuario, 
         //   'permissions' => $permissions,
                    
            ]); 
    }

    // public function atribuir_perfil_usuarios_store(Request $request) {

    //     $perfil = new model_has_permissions;

    //     $perfil->permission_id = $request->permission_id;
    //     $perfil->model_id = $request->model_id;
    //     $perfil->model_type = 'App\Models\User';
    //     $perfil-> save();

    //     return view ('usuarios.atribuir_perfil');
    // }

    public function store_usuarios(Request $request) {

        $usuario           =     new User;
        $usuario->name     =     $request->name;
        $usuario->email    =     $request->email;
        $usuario->password =     bcrypt($request->password);

        $usuario -> givePermissionTo ($request->perfil);
        
        $usuario-> save();
        
  //      $permission ->givePermissionTo($request->input($permission));
        

      //  $role = Role::create(['name' => $request->input('name')]);

//        $role->syncPermissions($request->input('permission'));


                return view ('usuarios.form_usuarios');
    }
}