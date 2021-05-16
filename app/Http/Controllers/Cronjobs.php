<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Cronjobs extends Controller
{
    public function erate()
    {
        $usd = $this->file_get_contents_curl("https://free.currencyconverterapi.com/api/v6/convert?q=USD_ILS&compact=y&apiKey=39798085e8b463ef02f7");
        $json_usd = json_decode($usd);
        $usda = $json_usd->USD_ILS->val;
        $usdb = $json_usd->USD_ILS->val;

        $egp = $this->file_get_contents_curl("https://free.currencyconverterapi.com/api/v6/convert?q=EGP_ILS&compact=y&apiKey=39798085e8b463ef02f7");
        $json_egp = json_decode($egp);
        $egpa = $json_egp->EGP_ILS->val;
        $egpb = $json_egp->EGP_ILS->val;

        $jod = $this->file_get_contents_curl("https://free.currencyconverterapi.com/api/v6/convert?q=JOD_ILS&compact=y&apiKey=39798085e8b463ef02f7");
        $json_jod = json_decode($jod);
        $joda = $json_jod->JOD_ILS->val;
        $jodb = $json_jod->JOD_ILS->val;

        $EUR = $this->file_get_contents_curl("https://free.currencyconverterapi.com/api/v6/convert?q=EUR_ILS&compact=y&apiKey=39798085e8b463ef02f7");
        $json_EUR = json_decode($EUR);
        $eura = $json_EUR->EUR_ILS->val;
        $eurb = $json_EUR->EUR_ILS->val;
echo "0";
        if ($usda != '' && $usda != null  && $usda != ''  && $usdb != null  && $usdb != ''  && $eura != null  && $eura != ''  && $eurb != null  && $eurb != ''  && $eurb != null  && $joda != ''  && $joda != null  && $jodb != ''  && $jodb != null  && $egpa != ''  && $egpa != null  && $egpb != ''  && $egpb != null) {
            //sending data to erates.php file
            // $my_file = asset("extra/");
            echo "1";
            $my_file = Storage::disk('cronjobs')->path('erates.php');
            $handle = fopen($my_file, 'w') or die('Cannot open file:  ' . $my_file);
            $data = '
            <?php 
            $usda = ' . $usda . ';
            $usdb = ' . $usdb . ';
            $eura = ' . $eura . ';
            $eurb = ' . $eurb . ';
            $joda = ' . $joda . ';
            $jodb = ' . $jodb . ';
            $egpa = ' . $egpa . ';
            $egpb = ' . $egpb . ';
            ?>
            ';

            fwrite($handle, $data);
            echo "3";
        }
    }



    protected function file_get_contents_curl($url, $retries = 5)
    {
        // TODO(fahjan): try to remove this
        // $ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.82 Safari/537.36';
        if (extension_loaded('curl') === true) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url); // The URL to fetch. This can also be set when initializing a session with curl_init().
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); // The number of seconds to wait while trying to connect.
            //curl_setopt($ch, CURLOPT_USERAGENT, $ua); // The contents of the "User-Agent: " header to be used in a HTTP request.
            curl_setopt($ch, CURLOPT_FAILONERROR, TRUE); // To fail silently if the HTTP code returned is greater than or equal to 400.
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); // To follow any "Location: " header that the server sends as part of the HTTP header.
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE); // To automatically set the Referer: field in requests where it follows a Location: redirect.
            curl_setopt($ch, CURLOPT_TIMEOUT, 10); // The maximum number of seconds to allow cURL functions to execute.
            curl_setopt($ch, CURLOPT_MAXREDIRS, 5); // The maximum number of redirects
            //curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, 'POST');
            $result = curl_exec($ch);
            curl_close($ch);
        } else {
            // remove this
            // $result = file_get_contents($url);
        }
        // TODO(fahjan): remove this
        // if (empty($result) === true) {
        //     $result = false;
        //     if ($retries >= 1) {
        //         sleep(1);
        //         return $this->file_get_contents_curl($url, --$retries);
        //     }
        // }
        return $result;
    }
}
