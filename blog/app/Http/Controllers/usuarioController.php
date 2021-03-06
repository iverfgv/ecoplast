<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Session;
use DB;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class usuarioController extends Controller
{
    public function index()
	{	
		$users = User::paginate(20);
		return view('usuario.index',compact('users'));
	}

    public function create()
    {
    	return view('usuario.create');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('usuario/create')->with('user',$user);
    }
    
    public function store(Request $request)
    {
    	User::create([
    		'name'=>$request['name'],
            'lastName'=>$request['lastName'],
    		'email'=>$request['email'],
    		'password'=>bcrypt($request['password']),
    	]);

    	return Redirect::to("usuario");
    }

    public function update($id,Request $request){
        $user = User::find($id);
        $user->fill($request->all());      
        $user->save();
            
        return Redirect::to("usuario");
    }


}
