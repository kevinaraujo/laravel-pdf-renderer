<?php

namespace App\Http\Controllers;

use PDF;

class IndexController extends Controller
{
    public function render()
    {
        $path = public_path() . '/../resources/views/template.blade.php';
        $pdf = PDF::loadFile($path);

        return $pdf->stream('contrato-aluno-4106698796.pdf');
    }
}
