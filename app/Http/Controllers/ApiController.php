<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function search(Request $request){

        echo "working";
        die();
        $queue = $request->get('studentname');
        // $student = DB::table('students')->where('name', 'LIKE', '%'.$queue. '%')->get();
        // $student = DB::table('students')->where('name', 'LIKE', '%'. $queue . '%')->paginate(2);
        // return view('index', ['students' => $student]);
        // dd($student);
        

    }
}
