<?php

namespace App\Http\Controllers;

use DOMPDF;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;
use View;

class PDFController extends Controller
{
    private $user;

    public function invoicehtml()
    {
        $data = [
            'vendor' => 'hola',
            'user' => 'Roger',
            'header' => 'Factura',
            'street' => 'Carrer 1',
            'location' => 'Tortosa',
            'phone' => '668668666',
            'url' => 'http://locahost',
            'product' => 'Producte1',
            'id' => '1',
            'vat' => '2225325',
            'subscription' => 'subcriptcio',
            'invoice' => 'Factura1',
            'date' => '25-12-2016',
            'email' => 'rogermelich@gmail.com',
            'description' => 'Descripció 1',
            'invoiceItems' => 'Hola 1'
        ];
            return view('invoice', $data);
    }

    public function downloadInvoice()
    {
        if (!defined('DOMPDF_ENABLE_AUTOLOAD')){
            define('DOMPDF_ENABLE_AUTOLOAD', false);
        }
        if (file_exists($configpath = base_path().'/vendor/dompdf/dompdf/dompdf_config.inc.php')){
            require_once $configpath;
        }
        $dompdf = new Dompdf;
        //$data = array();
        //$dompdf->load_html($this->view($data)->render());
        $dompdf->load_html('<h1>hol</h1>');
        $dompdf->render();
        return $this->download($dompdf->output());
    }

    /**
     * Create an invoice download response.
     *
     * @param  array   $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function download($pdf)
    {
        //$filename = 'Invoice_'.$this->date()->month.'_'.$this->date()->year.'.pdf';
        $filename = 'hola.pdf';
        return new Response($pdf, 200, [
            'Content-Description' => 'File Transfer',
            'Content-Disposition' => 'attachment; filename="'.$filename.'"',
            'Content-Transfer-Encoding' => 'binary',
            'Content-Type' => 'application/pdf',
        ]);
    }

    /**
     * Get the View instance for the invoice.
     *
     * @param  array  $data
     * @return \Illuminate\View\View
     */
    public function view(array $data)
    {
        return View::make('cashier::receipt', array_merge(
            $data, ['invoice' => $this, 'user' => $this->user]
        ));
    }
}
