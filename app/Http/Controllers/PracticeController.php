<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use IanLChapman\PigLatinTranslator\Parser;

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
        $translator = new Parser();
        $translation = $translator->translate('Hello world!');
        dump($translation);
    }

}