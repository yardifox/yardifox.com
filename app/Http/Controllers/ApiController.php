<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use Illuminate\Http;

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
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
        ]);

        if (!data_get($response->json(), 'success')) {
            return response()->json([
                'success' => false,
                'error' => 'reCAPTCHA verification failed.',
            ], 422);
        }

        $data   = $request->all();
        $to     = "yardifox@gmail.com";
        $name  = $data['name'];
        $email = $data['email'];
        $msg   = $data['message'];
        $content =<<<HTML
        <div>$name</div>
        <div>$email</div>
        <div>$msg</div>
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
                    /* @var $msg \Illuminate\Mail\Message */
                    if($mailData['cc']){
                        $msg->cc($mailData['cc']);
                    }
                    $msg->to($mailData['email'])->subject('New yardifox.com Contact');
                    $msg->html($mailData['content']);
//                    $msg->attachData(
//                        $mailData['content'] // Incorrect: this is used to attach binary data attachment with the second param the name of attachment
//                    );

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
