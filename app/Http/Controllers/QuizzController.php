<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quizz;

use App\Http\Controllers\Controller;


class QuizzController extends Controller  
{
public function test()
    {
        
        $quizz = Quizz::all();
        return view('test', compact('quizz'));
    }
}