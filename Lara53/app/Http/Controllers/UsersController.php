<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    public function Index()
    {
        $users = [
            '0' => [
                'first_name' => 'Victor',
                'last_name' => 'Angelo',
                'location' => 'Brasil'
            ],
            '1' => [
                'first_name' => 'Paloma',
                'last_name' => 'Alves',
                'location' => 'Brasil'
            ]
        ];

        return view('admin.users.index', compact('users'));
    }

    public function Create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return 'success';
        return $requst->all;
    }
}
