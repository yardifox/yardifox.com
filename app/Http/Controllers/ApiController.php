<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getBSFeed(Request $request){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://public.api.bsky.app/xrpc/app.bsky.feed.getAuthorFeed?actor=did%3Aplc%3Aibd4guvg7xvvv5fea7epvpek&filter=posts_and_author_threads&includePins=true&limit=10',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $res = [
          'success' => true,
          'feed'    => $response
        ];
        return response()->json($res, 200,[])
            ->header('Access-Control-Allow-Methods', 'GET, POST,PATCH, PUT, DELETE, OPTIONS, OPTION')
            ->header('Access-Control-Allow-Headers',' Origin, X-Auth-Token Content-Type, Accept, Authorization, X-Token-Auth, X-Request-With')
            ->header('Cache-Control','no-cache, must-revalidate')
            ->header('Access-Control-Allow-Credentials',' false');
    }
}
