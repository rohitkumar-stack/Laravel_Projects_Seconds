<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_customer;
use Illuminate\Support\Facades\DB;
use PDF;

class DynamicPDFController extends Controller
{
    function index()
    {
     $customer_data = $this->get_customer_data();
     return view('dynamic_pdf')->with('customer_data', $customer_data);
    }

    function get_customer_data()
    {
     $customer_data = DB::table('tbl_customer')
         ->limit(10)
         ->get();
   
     return $customer_data;
    
    }

    function pdf()
    {
     $pdf = tbl_customer::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html());
     return $pdf->stream();
    }

    function convert_customer_data_to_html()
    {
     $customer_data = $this->get_customer_data();
     $output = '
     <h3 align="center">Customer Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Address</th>
    <th style="border: 1px solid; padding:12px;" width="15%">City</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Postal Code</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Country</th>
   </tr>
     ';  
     foreach($customer_data as $customer)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$customer->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->address.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->city.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->postal_code.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->country.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
