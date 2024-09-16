<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        return view('dashboard.profile.index');
    }

    public function name_update(Request $request) {
       $request->validate([
        'name' => 'required',
       ]);
       return $request->name;
    }

}

