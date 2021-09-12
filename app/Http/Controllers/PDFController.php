<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use DB;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = [
            'title' => 'List of Houses',
            'company' => 'Real Construction',
            'date' => date('m/d/Y'),
            'location' => 'KK 705 St, Kigali',
            'email' => 'info@real.rw',
            'contact' => '+250 788306817',
            'contact1' => '+250 788314255',
        ];
        
        $house = DB::table('houses')->get();
          
        $pdf = PDF::loadView('myPDF', $data, compact('house'));
    
        return $pdf->download('Houseslist.pdf');
    }
}