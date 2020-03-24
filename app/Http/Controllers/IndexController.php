<?php

namespace App\Http\Controllers;

use PDF;

class IndexController extends Controller
{
    public function render()
    {
        Mail
        $data = [
            'foo' => 'bar'
        ];
        $pdf = Pdf(public_path() . '/../storage/app/template.blade.php', $data);
        return $pdf->stream('document.pdf');
    }
}
