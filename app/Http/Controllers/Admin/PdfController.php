<?php

namespace App\Http\Controllers\Admin;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Pelago\Emogrifier;
use Barryvdh\DomPDF\PDF;

class PdfController extends Controller
{
    public function index()
    {
        $html = file_get_contents(resource_path('views/pdf/html.blade.php'));
        $css = file_get_contents(resource_path('views/pdf/style.css'));
        $emogrifier = new Emogrifier($html, $css);
        $convertedHtmlCss = $emogrifier->emogrify();
        $asd = new Dompdf();
        $asd->loadHtml($convertedHtmlCss);
        $asd->setPaper('A4');
        $asd->render();
        $asd->stream('asd');//file name
    }
}
