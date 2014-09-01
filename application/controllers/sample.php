<?php
$audio_duration = 1; // put correct audio_duration here
$audio_format = 'wav';
$filename = 'sample.wav';
$file = 'sample.wav';
$callback = urlencode('http:ruby.byte7.com/result.php');
$post_url = "https://mycaption-speech.p.mashape.com/asr?audio_duration=$audio_duration&callback=$callback&audio_format=$audio_format";
$post_str = file_get_contents($file);
$headers = array('Content-Type:application/octet-stream', 'Expect: ', 'X-Mashape-Authorization:00AdZcXVzbqheo1LcxTQhRYJkysSpQZk');
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_URL, $post_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_str);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch,CURLOPT_VERBOSE,true); 
//curl_setopt($ch, CURLOPT_STDERR, fopen("/path/to/your/headers.txt", "w+"));//if you want log headers.
$http_body = curl_exec($ch);
if ($http_body === false)
$http_body = array('Curl error: '. curl_error($ch));
echo htmlentities(print_r($http_body, true), null, 'UTF-8');
?>