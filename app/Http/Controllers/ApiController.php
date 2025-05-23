<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = json_decode(curl_exec($curl));

        curl_close($curl);

        $res = [
          'success' => true,
          'feed'    => $response->feed
        ];
        return response()->json($res, 200,[])
            ->header('Access-Control-Allow-Methods', 'GET, POST,PATCH, PUT, DELETE, OPTIONS, OPTION')
            ->header('Access-Control-Allow-Headers',' Origin, X-Auth-Token Content-Type, Accept, Authorization, X-Token-Auth, X-Request-With')
            ->header('Cache-Control','no-cache, must-revalidate')
            ->header('Access-Control-Allow-Credentials',' false');
    }

    protected  function utf8_urldecode($str) {
        return html_entity_decode(preg_replace("/%u([0-9a-f]{3,4})/i", "&#x\\1;", urldecode($str)), null, 'UTF-8');
    }

    public function contact(Request $request){
        $data   = $request->all();
        $to     = "yardifox@gmail.com";
        $content =<<<HTML

HTML;

        $mailData = [
            'email' => $to,
          'content' => $content,
               'cc' => false
        ];
        try{
            $mres = Mail::send(
                'mail.contact',
                 $mailData,
                function($msg) use($mailData){
                    if($mailData['cc']){
                        $msg->cc($mailData['cc']);
                    }
                    $msg->to($mailData['email'])->submect('New yardifox.com Contact');
                    $msg->attachData(
                        $mailData['content']
                    );

                });
            $res = [
                'success' => true,
                'res'     => $mres
            ];
        }catch(\Exception $e){
            $res = [
                'success' => false,
                'error'   => $e->getMessage(),
            ];
        }

        return response()->json($res, 200,['Access-Control-Allow-Origin'=>'*'])
            ->header('Access-Control-Allow-Origin','*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers',' Origin, Content-Type, Accept, Authorization, X-Token-Auth, X-Request-With')
            ->header('Access-Control-Allow-Credentials',' true');
    }
}
