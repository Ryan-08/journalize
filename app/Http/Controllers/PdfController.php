<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PdfController extends Controller
{
    public function index() {
        return view('layout.pdf');
    }
    public function exportPdf() {
        $pdf = PDF::loadView('layout.pdf'); // <--- load your view into theDOM wrapper;
        $path = public_path('pdf_docs'); // <--- folder to store the pdf documents into the server;
        $fileName =  time().'.'. 'pdf' ; // <--giving the random filename,
        $pdf->save($path . '/' . $fileName);
        $generated_pdf_link = url('pdf_docs/'.$fileName);
        return response()->json($generated_pdf_link);        
        // return $pdf->stream();
    }
}
