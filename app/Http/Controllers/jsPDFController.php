<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class jsPDFController extends Controller
{
    public function downloadInvoice()
    {
        return view('jsinvoice');
    }

    public function invoicehtml()
    {
        date();
        $data = [
            'vendor' => "hola",
            'user','email' => "rogermelich@gmail.com",
            'user','name' => "rogermelich@gmail.com",
            'invoice' => "Factura 1",
            //date('2016'),
 //            'header' => 'Factura',
//            'street' => 'Carrer 1',
//            'location' => 'Tortosa',
//            'phone' => '668668666',
//            'url' => 'http://locahost',
//            'product' => 'Producte1',
//            'id' => '1',
//            'vat' => '2225325',
//            'subscription' => 'subcriptcio',
//            'invoice' => 'Factura1',
//            'date' => '25-12-2016',
//            'email' => 'rogermelich@gmail.com',
//            'description' => 'Descripció 1',
//            'invoiceItems' => 'Hola 1'
        ];
        return view('invoice', $data);
    }
}
