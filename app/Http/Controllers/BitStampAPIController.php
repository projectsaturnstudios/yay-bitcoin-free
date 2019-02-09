<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class BitStampAPIController extends Controller
{
    public function get_bitstamp_rates(Request $request)
    {
        $results = [];

        $data = $request->all();

        if(array_key_exists('exchangeType', $data))
        {
            $response = Curl::to('https://www.bitstamp.net/api/v2/ticker/'.$data['exchangeType'])
                ->asJson()
                ->get();

            if(array_key_exists('last', $response))
            {
                $results = (array)$response;
            }
        }


        return $results;
    }

}
