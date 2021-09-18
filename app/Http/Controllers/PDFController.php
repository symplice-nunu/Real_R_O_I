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
        
        $products = DB::table('products')->get();
          
        $pdf = PDF::loadView('myPDF', $data, compact('products'));
    
        return $pdf->download('Houseslist.pdf');
    }
    public function generatePayment()
    {
        $data = [
            'title' => 'List of Payments',
            'company' => 'Real Construction',
            'date' => date('m/d/Y'),
            'location' => 'KK 705 St, Kigali',
            'email' => 'info@real.rw',
            'contact' => '+250 788306817',
            'contact1' => '+250 788314255',
        ];
        
        $stripe = DB::table('stripe')->get();
          
        $pdf = PDF::loadView('myPayments', $data, compact('stripe'));
    
        return $pdf->download('Paymentlist.pdf');
    }
    public function generateUsers()
    {
        $data = [
            'title' => 'List of Users',
            'company' => 'Real Construction',
            'date' => date('m/d/Y'),
            'location' => 'KK 705 St, Kigali',
            'email' => 'info@real.rw',
            'contact' => '+250 788306817',
            'contact1' => '+250 788314255',
        ];
        
        $users = DB::table('users')->get();
          
        $pdf = PDF::loadView('myUsers', $data, compact('users'));
    
        return $pdf->download('Userslist.pdf');
    }
    
    public function generateContract()
    {
        $data = [
            'title' => 'List of Purchase Agreement',
            'company' => 'Real Construction',
            'date' => date('m/d/Y'),
            'location' => 'KK 705 St, Kigali',
            'email' => 'info@real.rw',
            'contact' => '+250 788306817',
            'contact1' => '+250 788314255',
        ];
        
        $contract = DB::table('contract')->get();
          
        $pdf = PDF::loadView('myContract', $data, compact('contract'));
    
        return $pdf->download('Contractlist.pdf');
    }
}