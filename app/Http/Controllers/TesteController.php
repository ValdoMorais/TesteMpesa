<?php

namespace App\Http\Controllers;

use Explicador\E2PaymentsPhpSdk\Mpesa;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    //
    public function Teste(){

        $mpesa= new Mpesa();
        $mpesa ->setClientId('97987d6b-52f3-4964-b325-2159e19b1b8e');
        $mpesa ->setClientSecret('96Kyz1r4LE9c4mWaEIcnVNh9WngpwPpiCe5h77zV');
        $mpesa -> setWalletId('343482');

        $phone_number = $_POST["phone"];
        $amount = $_POST["amount"];
        $reference = 'MozTopUp';

        $result = $mpesa -> c2b($phone_number, $amount, $reference);

        //dd($result);
        return view('RecMpesa');
    }
}

