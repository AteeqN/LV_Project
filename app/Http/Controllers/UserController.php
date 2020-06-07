<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\model\User;
use Validator;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function main(){

    	// echo "working";

    	return view('/main');
    }

    public function store(Request $request){


    	// $validateData = $request->validate([
     //        'fname' => 'required|min:3|max:40',
     //        'lname' => 'required|min:3|max:40',
     //        'email' => 'required|email|unique:users',
     //        'pno' => 'required|max:11',
     //        'addressdetail' => 'required|max:50',
     //        'pwd' => 'required|max:50',
     //        'conpwd' => 'required|max:50'
     //    ]);
    	
    	$validatedData = $request->validate([
        	'fname' => 'required|min:3|max:40',
        	'lname' => 'required|min:3|max:40',
    	]);

        $user = new User();
        
        
        $user->first_name = $request->input('fname');
        $user->last_name = $request->input('lname');
        $user->email = $request->input('email');
        $user->password = $request->input('pwd');
        $user->confirm_password = $request->input('conpwd');
        // echo $user;
        // die();
        // echo $user->fname;
        // echo $user->lname;
        // // print_r($user);
        // die();
        $user->save();

        DB::table('new_matas')->insert([

            'user_id' => '1',
            'key' => 'phone',
            'value' => $request->input('conpwd')

        ]);

        return redirect('/main')->with("User Register Successfully!");

    }
    public function create(){

    	// echo "working";
    	return view('create');
    }

    public function searchPage(){

        echo "working";

        return view('/search');
    }
}
