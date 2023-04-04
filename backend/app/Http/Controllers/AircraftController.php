<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AircraftController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @param Request $request
     * @param Client $client
     * @return String
     * @throws GuzzleException
     */
    public function getAircraftFeed(Request $request, \GuzzleHttp\Client $client): String
    {
        try {
            $response = $client->request(
                'POST',
                'https://contributors.360radar.co.uk/VirtualRadar/AircraftList.json?ldv=638161116247816615&stm=1680597670405&lat=51.47&lng=-0.6000000000000227&selAc=4442302&fNBnd=53.61532092575061&fEBnd=0.660552978515625&fSBnd=53.14924122467589&fWBnd=-1.9857788085937502&trFmt=fa',
                ['headers' => ['Authorization' => 'Basic asei1mYXdjZXR0Oip1cmZuczU1']],
            );
        } catch (GuzzleHttp\Exception\ClientException $err) {
            $response = $err->getResponse();
            throw new \Exception('Error, feeds not loaded', 500);
        }

        return $response->getBody()->getContents();
    }
}
