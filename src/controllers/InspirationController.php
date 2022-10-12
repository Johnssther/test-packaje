<?php
namespace Fhsinchy\Inspire\Controllers;

use Illuminate\Http\Request;
use Fhsinchy\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();
        return view('inspire::inspire.index', compact('quote'));
    }
}