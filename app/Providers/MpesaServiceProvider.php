<?php

namespace App\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class MpesaServiceProvider extends ServiceProvider
{
    public const Mpesa = 'App\Providers\MpesaServiceProvider';
    /**
     * Register services.
     */
    public function register(): void
    {
        $loader = AliasLoader::getInstance();

        // Add your aliases
        //$loader->alias('Setting', \App\Facades\Setting::class);
        //$loader->alias('HelperMethods', \App\Facades\HelperMethods::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    /*public function STKPushSimulation(
        $BusinessShortCode, 
        $LipaNaMpesaPasskey, 
        $TransactionType, 
        $Amount, 
        $PartyA, 
        $PartyB, 
        $PhoneNumber, 
        $CallBackURL, 
        $AccountReference, 
        $TransactionDesc, 
        $Remarks)
    {
        $mpesa = new MpesaServiceProvider();
        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$mpesa->generateAccessToken()));
        $curl_post_data = [
            'BusinessShortCode' => $BusinessShortCode,
            'Password' => base64_encode($BusinessShortCode.$LipaNaMpesaPasskey.date('YmdHis')),
            'Timestamp' => date('YmdHis'),
            'TransactionType' => $TransactionType,
            'Amount' => $Amount,
            'PartyA' => $PartyA,
            'PartyB' => $PartyB,
            'PhoneNumber' => $PhoneNumber,
            'CallBackURL' => $CallBackURL,
            'AccountReference' => $AccountReference,
            'TransactionDesc' => $TransactionDesc,
            'Remarks' => $Remarks,
        ];
        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);
        return $curl_response;
    }*/
}
