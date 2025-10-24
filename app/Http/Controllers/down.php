<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class down extends Controller
{
    public function down($file)
    {
        return Pdf::loadView('pdf.'.$file)->download($file.'.pdf');
    }
}
