<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use IanLChapman\PigLatinTranslator\Parser;
use App\Book;

class PracticeController extends Controller
{
    //
    public function index()
    {
        //return App::environment();
        return 'Here are all the books...';
    }



    public function practiceX()
    {
        $result = Book::where('author', '=', 'J.K. Rowling')->delete();
        dump($result);
    }

}