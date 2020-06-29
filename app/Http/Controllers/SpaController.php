<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SpaController extends Controller
{
    public function index()
    {
        return view('spa');
    }

    public function users(){

    	$users = User::all();
    	return response()->json($users);

    }


}
