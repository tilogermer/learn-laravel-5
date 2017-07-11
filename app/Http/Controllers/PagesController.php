<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
    	$name = 'Tilo Germer';
    	$first = 'Tilo';
    	$last = 'Germer';

    	//1
    	//return view ('pages.about')->with('name', $name);

    	//2
    	//more variables better with array
    	/*return view('pages.about')->with([
    		'first' => 'Tilo',
    		'last' => 'Germer'
    		]);*/
    	//3
    	return view ('pages.about', compact ('first', 'last'));
    	//4

    }
}
