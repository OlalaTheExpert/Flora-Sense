<?php
require __DIR__ . '/mpesalipa/vendor/autoload.php';

use Carbon\Carbon;
if(isset($_POST['ok'])){
// stkPush($_POST['amount']);
$phone = '254'.(int)($_POST['phone']);


}
function lipaNaMpesaPassword()
{
    //timestamp
    $timestamp = Carbon::rawParse('now')->format('YmdHms');
    //passkey
   // $passKey ="146d7f37e3d970bb86c2a688ff88188cf18f8899fd6eec00d58edc933d99285f";
   // $businessShortCOde=7360076;
    $passKey ="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
    $businessShortCOde =174379;
    //generate password
    $mpesaPassword = base64_encode($businessShortCOde.$passKey.$timestamp);

    return $mpesaPassword;
}
    

   function newAccessToken()
   {
       // $consumer_key="V3iTCot3nLrlb2lRSPFsaQTwZBgijGqo";
       //$consumer_secret="9Y1LvjKuCeFCvKEy";
       $consumer_key="2Qbw1dJnkqTJXDHmpgOtR22B03jACTCd";
       $consumer_secret="tFw8jJd01cFH6vdU";
       $credentials = base64_encode($consumer_key.":".$consumer_secret);
       $url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";

       $curl = curl_init();
       curl_setopt($curl, CURLOPT_URL, $url);
       curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Basic ".$credentials,"Content-Type:application/json"));
       curl_setopt($curl, CURLOPT_HEADER, false);
       curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       $curl_response = curl_exec($curl);
       $access_token=json_decode($curl_response);
       curl_close($curl);
       
       return $access_token->access_token;
   }
