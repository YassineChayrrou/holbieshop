<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
	public function showUsers()
	{
		$users = DB::table('users')->get();
		$usersList = [];
		foreach ($users as $val) {
			$usersList[] = $val;
		}
		
		return view('admin.dashboard', ['users' => $usersList]);
	}
    public function addUsers(/*Request $r*/)
    {
    	return view('admin.dashboard');
    }
}

