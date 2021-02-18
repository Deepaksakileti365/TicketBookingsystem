<?php
include('Instamojo.php');
 $Trainname= $_POST['train_name'];
 $cost= $_POST['cost'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];

 $api = new Instamojo\Instamojo(test_bf70441f6601313577eeaaab813,
test_408f0546c93063c626da0b7391d, 'https://test.instamojo.com/api/1.1/');
 try {
 $response = $api->paymentRequestCreate(array(
 "purpose" => $Trainname,
 "amount" => $cost,
 "send_email" => true,
 "email" => $email,
 "buyer_name"=> $name,
 "phone"=>$phone,
 "send_sms"=> true,
 "allow_repeated_payments"=>false,
 "redirect_url" => "http://localhost/project/thankyou.php"
 //"webhook"=>
 ));
 //print_r($response);
 $pay_url=$response['longurl'];
 header("location:$pay_url");
}
catch (Exception $e) {
 print('Error: ' . $e->getMessage());
}
?>