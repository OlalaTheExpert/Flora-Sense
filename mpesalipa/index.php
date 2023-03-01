<?php
 require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/picker.css">
    <link rel="stylesheet" href="css/styles.css">
    <html>

  <link rel="stylesheet" href="css/sweetalert2.css">
  <script type="text/javascript" src="js/sweetalert2.js"></script>
  <script type="text/javascript" src="js/sweetalert2.all.js"></script>

    <title>Flora-Sense :: Payments</title>
</head>

<body>

    <section class="py-5 header">
        <div class="container py-4">



            <div class="row justify-content-center">
                <div class="col-md-3">
                    <!-- Tabs nav -->
                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="fa fa-star mr-2"></i>
                            <span class="font-weight-bold small text-uppercase"><img src="imgs/mpesa1.png" width="100"></span></a>

                        <!-- <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="fa fa-star mr-2"></i>
                            <span class="font-weight-bold small text-uppercase"><img src="imgs/airtel1.png" width="120"></span></a>

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <i class="fa fa-star mr-2"></i>
                            <span class="font-weight-bold small text-uppercase"><img src="imgs/Equitel.png" width="190"></span></a>-->

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="fa fa-star mr-2"></i>
                            <span class="font-weight-bold small text-uppercase"><img src="imgs/PayPal2.png" width="195"></span></a>
                        <!--<a class="nav-link mb-3 p-3 shadow" id="v-pills-visa-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-visa" aria-selected="false">
                            <i class="fa fa-star mr-2"></i>
                            <span class="font-weight-bold small text-uppercase"><img src="imgs/visa2.png" width="200"></span></a>-->
                    </div>
                </div>


                <div class="col-md-6">
                    <!-- Tabs content -->
                    <div class="tab-content " id="v-pills-tabContent">
                        <div class="tab-pane fade shadow rounded bg-white show active p-5 justify-content-center" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <h4 class="font-italic mb-4"></h4>
                            <span class="font-weight-bold small text-uppercase"><img src="imgs/mpesa1.png" width="100"></span></a>
                            <p class="font-italic text-muted mb-2">

                            </p>
                            <form method="POST" action="">
                                
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Amount (KES) </label>
                                     <input type="number" name="amount" id="amount" class="form-control" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" placeholder="Enter Amount" required>
                                    </div>
                                

                                <!--<div class="value">50</div>
                                <div class="pb-5">
                                    <input type="range" min="0" max="10000" step="50" value="400" name="amount">
                                    <script>
                                        var elem = document.querySelector('input[type="range"]');

                                        var rangeValue = function() {
                                            var newValue = elem.value;
                                            var target = document.querySelector('.value');
                                            target.innerHTML = newValue;
                                        }

                                        elem.addEventListener("input", rangeValue);
                                    </script>
                                </div>-->

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone Number</label>
                                    <input type="number" class="form-control" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" name="phone" id="exampleInputPassword1" placeholder="0 7 * * *  * * * * *" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Account Number</label>
                                    <input type="text" class="form-control" name="account" id="exampleInputPassword1" placeholder="*** Enter Account Number ***" required>
                                </div>

                                <button type="submit" name="stk" class="btn btn-warning btn-lg btn-block donate">Send</button>
                            </form>
                        </div>

                        <!-- <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <h4 class="font-italic mb-4">Airtel</h4>
                            <p class="font-italic text-muted mb-2">  </div>

                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <h4 class="font-italic mb-4">Telkom</h4>
                            <p class="font-italic text-muted mb-2">
                         </div> -->

                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                            <!-- <img src="imgs/visa2.png" width="200"> -->
                            <img src="imgs/PayPal2.png" width="200">
                            <div id="smart-button-container">
                                <div style="text-align: center"><label for="description"> </label><input type="hidden" name="descriptionInput" id="description" maxlength="127" value="Treasure Foundation Donations"></div>
                                <p id="descriptionError" style="visibility: hidden; color:red; text-align: center;">Please enter a description</p>


                                <!-- <div class="input-group-prepend">
                                        <div class="input-group-text">Amount(USD):</div>
                                    </div>
                                    <input type="number" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Amount in USD" name="amountInput" type="number" id="amount" value=""> -->
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Amount (USD) </label>
                                    <input type="number" name="amountInput" id="amount" value="" class="form-control" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" placeholder="Enter Amount in USD" placeholder="Enter Amount in USD" required>
                                </div>

                                <p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Please enter a price</p>
                                <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value=""></div>
                                <p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>
                                <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
                            </div>
                            <script src="https://www.paypal.com/sdk/js?client-id=AQScFTrdl0neXo-GDwhqt-cMONGG7p4D91ia8VCSRP4X1wmY4xlpEjIdCR4-WOM_F0gsBj0X2dcU6d0A&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
                            <script>
                                function initPayPalButton() {
                                    var description = document.querySelector('#smart-button-container #description');
                                    var amount = document.querySelector('#smart-button-container #amount');
                                    var descriptionError = document.querySelector('#smart-button-container #descriptionError');
                                    var priceError = document.querySelector('#smart-button-container #priceLabelError');
                                    var invoiceid = document.querySelector('#smart-button-container #invoiceid');
                                    var invoiceidError = document.querySelector('#smart-button-container #invoiceidError');
                                    var invoiceidDiv = document.querySelector('#smart-button-container #invoiceidDiv');

                                    var elArr = [description, amount];

                                    if (invoiceidDiv.firstChild.innerHTML.length > 1) {
                                        invoiceidDiv.style.display = "block";
                                    }

                                    var purchase_units = [{
                                        "amount": {
                                            "currency_code": "USD",
                                            "value": 1,
                                            "breakdown": {
                                                "item_total": {
                                                    "currency_code": "USD",
                                                    "value": 1
                                                }
                                            }
                                        },
                                        "items": [{
                                            "name": "item name",
                                            "unit_amount": {
                                                "currency_code": "USD",
                                                "value": 1
                                            },
                                            "quantity": "1",
                                            "category": "DONATION"
                                        }]
                                    }]

                                    function validate(event) {
                                        return event.value.length > 0;
                                    }

                                    paypal.Buttons({
                                        style: {
                                            color: 'gold',
                                            shape: 'pill',
                                            label: 'donate',
                                            layout: 'vertical',

                                        },

                                        onInit: function(data, actions) {
                                            actions.disable();

                                            if (invoiceidDiv.style.display === "block") {
                                                elArr.push(invoiceid);
                                            }

                                            elArr.forEach(function(item) {
                                                item.addEventListener('keyup', function(event) {
                                                    var result = elArr.every(validate);
                                                    if (result) {
                                                        actions.enable();
                                                    } else {
                                                        actions.disable();
                                                    }
                                                });
                                            });
                                        },

                                        onClick: function() {
                                            if (description.value.length < 1) {
                                                descriptionError.style.visibility = "visible";
                                            } else {
                                                descriptionError.style.visibility = "hidden";
                                            }

                                            if (amount.value.length < 1) {
                                                priceError.style.visibility = "visible";
                                            } else {
                                                priceError.style.visibility = "hidden";
                                            }

                                            if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {
                                                invoiceidError.style.visibility = "visible";
                                            } else {
                                                invoiceidError.style.visibility = "hidden";
                                            }

                                            purchase_units[0].description = description.value;
                                            purchase_units[0].amount.value = amount.value;
                                            purchase_units[0].amount.breakdown.item_total.value = amount.value;
                                            purchase_units[0].items[0].unit_amount.value = amount.value;

                                            if (invoiceid.value !== '') {
                                                purchase_units[0].invoice_id = invoiceid.value;
                                            }
                                        },

                                        createOrder: function(data, actions) {
                                            return actions.order.create({
                                                purchase_units: purchase_units,
                                            });
                                        },

                                        onApprove: function(data, actions) {
                                            return actions.order.capture().then(function(orderData) {

                                                // Full available details
                                                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                                                // Show a success message within this page, e.g.
                                                const element = document.getElementById('paypal-button-container');
                                                element.innerHTML = '';
                                                element.innerHTML = '<h3>Thank you for your payment!</h3>';

                                                // Or go to another URL:  actions.redirect('thank_you.html');

                                            });
                                        },

                                        onError: function(err) {
                                            console.log(err);
                                        }
                                    }).render('#paypal-button-container');
                                }
                                initPayPalButton();
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
<?php

if(!isset($_POST['stk'])){
    echo"<script>
    Swal.fire({
      title: 'Alert!',
      text: 'Enter Phone Number, Amount & Account Number to complete the payment',
      icon: 'warning',      
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Okay'
    })
      </script>";;
    exit();
    } else{

stkPush($_POST['amount']);
$phone = '254'.(int)($_POST['phone']);
$account = $_POST['account'];

}
function lipaNaMpesaPassword()
{
    //timestamp
    $timestamp = Carbon::rawParse('now')->format('YmdHms');
    //passkey
   // $passKey ="146d7f37e3d970bb86c2a688ff88188cf18f8899fd6eec00d58edc933d99285f";
   // $businessShortCOde=7360076;
    $passKey ="c9696991aea3a9776c276c8e8a4ad40c0a2e3427c2f64a811ced319ca07781dd";
    $businessShortCOde =4075143;
    //generate password
    $mpesaPassword = base64_encode($businessShortCOde.$passKey.$timestamp);

    return $mpesaPassword;
}
    

   function newAccessToken()
   {
       // $consumer_key="V3iTCot3nLrlb2lRSPFsaQTwZBgijGqo";
       //$consumer_secret="9Y1LvjKuCeFCvKEy";
       $consumer_key="BhzTERDBffApjKWXiMKCvgdNqHBDI1bu";
       $consumer_secret="mn6B64XU271PYJ6X";
       $credentials = base64_encode($consumer_key.":".$consumer_secret);
       $url = "https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";

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



   function stkPush($amount)
   {
      

       $url = 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
       $curl_post_data = [
            'BusinessShortCode' =>4075143,
            //'BusinessShortCode' =>7360076,
            'Password' => lipaNaMpesaPassword(),
            'Timestamp' => Carbon::rawParse('now')->format('YmdHms'),
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $amount,
            'PartyA' =>'254'.(int)($_POST['phone']),
            'PartyB' => 4075143,
            //'PartyB' => 7360076,
            'PhoneNumber' => '254'.(int)($_POST['phone']),
            'CallBackURL' => 'https://nexpay.co.ke/mpesalipa/callback.php',
           //'CallBackURL' => 'http://nexpay.co.ke/mpesa/single.php',
           //'ConfirmationURL'=>'https://nexpay.co.ke/mpesalipa/confirmation_url.php',
           
            'AccountReference' => $_POST['account'],
            
            'TransactionDesc' => 'Nexpay Purchases',
        ];

      $phonenumber='254'.(int)($_POST['phone']);
      $account=$_POST['account'];
       $data_string = json_encode($curl_post_data);


       $curl = curl_init();
       curl_setopt($curl, CURLOPT_URL, $url);
       curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.newAccessToken()));
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($curl, CURLOPT_POST, true);
       curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
       $curl_response = curl_exec($curl);

       
echo"<script>
Swal.fire({
  title: 'Success!',
  text: 'Enter Your Mpesa Pin to Complete the Payment',
  icon: 'success',      
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ok!'
})
  </script>";;
exit();
    
   }

  
    


 ?>
