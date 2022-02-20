<?php

use Carbon\Carbon;

function user()
{
    return auth()->user();
}

function getTextDay($date)
{
    $day = Carbon::parse($date)->format('l');

    switch ($day) {
        case 'Sunday' :
            return 'الأحد';
        case 'Monday' :
            return 'الإثنين';
        case 'Tuesday' :
            return 'الثلاثاء';
        case 'Wednesday' :
            return 'الأربعاء';
        case 'Thursday' :
            return 'الخميس';
        case 'Friday' :
            return 'الجمعة';
        case 'Saturday' :
            return 'السبت';
        default:
            return '';
    }
}

function num_2_str($number, $lang = 'ar') {
//dd("test");
    $f = new \NumberFormatter($lang, \NumberFormatter::SPELLOUT);

    $f->setTextAttribute(\NumberFormatter::DEFAULT_RULESET, "%spellout-numbering-verbose");

    return $f->format($number);
}

function sendSMS($to, $from, $text)
 {
    try {
            $api_key = env("NEXMO_KEY");
            $api_secret = env("NEXMO_SECRET");
        //dd($api_key . ' / ' . $api_secret);

            $params = [
                "api_key" => $api_key,
                "api_secret" => $api_secret,
                "from" => $from,
                "text" => $text,
                "to" => $to
            ];

            $url = "https://rest.nexmo.com/sms/json";
            $params = json_encode($params);

        //dd($params);
            $ch = curl_init(); // Initialize cURL
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($params),
                'accept:application/json'
            ));
            $response = curl_exec($ch);
            curl_close($ch);

            //dd($response);
            return $response;
        
        } catch (\Exception $e) {
                dd($e);
        }
        
}