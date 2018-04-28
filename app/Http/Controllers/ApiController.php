<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Config;
use Response;
Use DB;
use Illuminate\Support\Facades\Redirect;


class ApiController extends Controller
{
    public function btcusd()
    {
        $client = new Client();
        $btcusd = $client->get(env("BITSTAMP_TICKER_URI").'btcusd');
        $ethusd = $client->get(env("BITSTAMP_TICKER_URI").'ethusd');
        $ltcusd = $client->get(env("BITSTAMP_TICKER_URI").'ltcusd');
        $bchusd = $client->get(env("BITSTAMP_TICKER_URI").'bchusd');
        $xrpusd = $client->get(env("BITSTAMP_TICKER_URI").'xrpusd');

        $xlmusd = $client->post(env("KRAKEN_TICKER_URI"), array(
            'form_params' => array(
                'pair' => 'XXLMZUSD'
            )
        ));

        $btcusd = json_decode($btcusd->getBody());
        $ethusd = json_decode($ethusd->getBody());
        $ltcusd = json_decode($ltcusd->getBody());
        $bchusd = json_decode($bchusd->getBody());
        $xrpusd = json_decode($xrpusd->getBody());
        $xlmusd = json_decode($xlmusd->getBody());

        //dd($xlmusd);

        return view('customer.home', compact('btcusd','ethusd','ltcusd','bchusd','xrpusd','xlmusd'));
    }
}
