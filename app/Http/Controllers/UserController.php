<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserInfoRequest;
use App\Http\Requests\UpdateUserPasswordRequest;
use App\Http\Resources\UserResource;
use App\Models\Succursale;
use App\Models\Employee;
use App\Models\Etat;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\FlareClient\Http\Response as HttpResponse;

class UserController extends Controller{
    public function index(){
        // if(Auth::user()->role_id==4){           

        $users = User::select('users.id',
        'users.name as username'
        ,  'etats.name as etat',
        'employees.name', 'employees.lname',
        'roles.name as role',
        'succursales.name as succursale'
        )
        ->join('employees', 'employees.id','=','users.id')
        ->join('roles', 'roles.id','=','role')
        ->join('etats', 'etats.id','=','users.etat')
        ->join('succursales', 'succursales.id','=','succursale')
        ->get(); 


        $succursales = Succursale::all();            
        $roles = Role::all();            
        $etats = Etat::all();            

        return inertia(
            "Users/Index", 
            [
                'users'=>$users, 
                'succursales'=>$succursales, 
                 'etats'=>$etats, 
                'roles'=>$roles
            ]
        );
    }

    public function destroy(User $user){        
        // if(Auth::user()->role_id==4){           
        $user->delete();
        return redirect('users');
}


public function store(StoreUserRequest $request){
    // if(Auth::user()->role_id==4){          
    $data = $request->validated();
    /** @var \App\Models\User $user */

    $user = User::create([
        'id' => $data['id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make((123456)),
            'succursale'=>$data['succursale'],   
            'role'=>$data['role'],                   
            'etat'=>1   
    ]);

    $token = $user->createToken('main')->plainTextToken;

    return redirect('users');

    
}
}
