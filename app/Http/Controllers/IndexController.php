<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function render()
    {
        $pdf = App::make('dompdf.wrapper');

        $html = file_get_contents(getcwd() .'/../resources/views/template.blade.php');
        $pdf->loadHTML($html);

        return $pdf->stream();
    }
}
