<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function GuzzleHttp\json_decode;
use Illuminate\Support\Facades\Http;

class SummaryController extends Controller
{
    public function getSummaryData(Request $request)
    {
        $token =   $_GET['token'];
        $span =   $_GET['days'];
        $curl =  $ch = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.demo.reja.ai/analytics/summary?client_id=3&span=" . $span,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer " . $token,
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        // $responseencoded = json_encode($response);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // $JsonAgencies =   $response->getBody()->getContents();
            return  $response;
        }



        // $client = new \GuzzleHttp\Client();
        // $response =   $client->request('GET', 'https://api.demo.reja.ai/analytics/summary', [
        //     'json' => ["client_id" => "3", "span" => "30days"],
        //     'headers' => ['Authorisation' => 'Bearer ' . $token, "Content-Type" => "application/json"]

        // ]);


        // $response = Http::withHeaders([
        //     'Authorization' => 'Bearer ' . $token
        // ])->get('https://api.demo.reja.ai/analytics/summary', [
        //     "client_id" => "3",
        //     "span" => "30days"
        // ]);

    }
}
