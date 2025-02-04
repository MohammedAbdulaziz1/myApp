<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        
        $allPosts=[
            ['id' => 1,'title' => 'php','posted_by' => 'ahmed','created_at' => '2024-10-07 06:30:30'],
            ['id' => 2,'title' => 'html','posted_by' => 'khaled','created_at' => '2023-10-07 06:30:30'],
            ['id' => 3,'title' => 'javascript','posted_by' => 'mohammed','created_at' => '2022-10-07 06:30:30'],
            ['id' => 4,'title' => 'css','posted_by' => 'omar','created_at' => '2021-10-07 06:30:30'],

        ];
        return view('posts.index', ['posts' => $allPosts]);
    }

    public function show(){
       
       $singlePosts=[
        'id' => 1,'title' => 'PHP','Discription' => 'this is discription','posted_by' => 'ahmed','created_at' => '2024-10-07 06:30:30',

       ];
       
       
        return view('posts.show',['post'=> $singlePosts]);
    }
}
