<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class BookController extends Controller
{
    //
    public function index()
    {
        //return App::environment();
        return 'Here are all the books...';
    }

   public function show($title = null)
    {
        dump($title);
        return view('books.show')->with(['title' => $title]);
    }
}
