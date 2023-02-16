<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fhsinchy\Inspire;

class InspirationController extends Controller
{
    public function invoke(Inspire $inspire) 
    {
        $quote = $inspire->justDoIt();

        return $quote;

        // return view('inspire::index', compact('quote'));
    }
}
