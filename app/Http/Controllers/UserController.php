<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
     public function index()
    {
		
		$user = User::all();
        return view('users.lista', compact('user'));
    }
	
	 public function destroy($id)
    {
         $user = User::findOrFail($id);
		
         $user->delete();

        return redirect('/usuarios')->with('completed', 'Student has been deleted');
    }
	
	
	public function edit($id)
    {
         $user = User::findOrFail($id);
         return view('editar.usuarios', compact('user'));
    }
	
	
	 public function update(Request $request, $id)
    {
        $user = $request->except(['_token', '_method']);
		
		User::whereid($id)->update($user);
        return redirect('/usuarios');
    }
}
