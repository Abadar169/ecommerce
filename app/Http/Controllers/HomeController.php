<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $blogs = [
            [
                'title' => 'Blog Title 1',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'status' => 'active'
            ],
            [
                'title' => 'Blog Title 2',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'status' => 'completed'
            ],
            [
                'title' => 'Blog Title 3',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'status' => 'active'
            ]
        ];

        return view('home', compact('blogs'));
    }
}
