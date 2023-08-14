<?php
include "../database_connection.php";

///////////////////////// This code works for callback inline api which is Get method //////////////////////////////
/*
$status = $_GET['status'];
$tx_ref = $_GET['tx_ref'];
$transaction_id = $_GET['transaction_id'];

   ///////////////////////////// After getting get response use transaction id to Verifing transactions from api //////////////////////

if($status == "successful"){

 $url = "https://api.flutterwave.com/v3/transactions/".$transaction_id."/verify"; /////// The URL given in the documentation without parameters ///
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "$url");
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //return as a variable
 $headers = [
    'Authorization: Bearer FLWSECK_TEST-5be64f0145ecb95f81333c0d22527685-X'

  ];
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 $response1 = curl_exec($ch);
 curl_close($ch);

 //decode response to get transaction_id,network,phone_number,amount,status and balance
 $array = json_decode($response1, true); //decode the JSON response
 $payment_status1 = $array['data']['status'];
 $payment_amount1 = $array['data']['amount'];
 $pay_email1 = $array['data']['customer']['email'];
 $pay_name1 = $array['data']['customer']['name'];
 $transaction_ref1 = $array['data']['tx_ref'];


 $sql = "UPDATE register_info SET wallet = wallet + '$payment_amount1' WHERE email = '$pay_email1'";
 $res = mysqli_query($data_connection, $sql);


if($res){

   $payment_date = date("Y/m/d h:I:sa");

$sql_statement = "INSERT INTO payment_history (name, amount, status, transaction_ref, date) 
VALUES ('$pay_name1', '$payment_amount1', '$payment_status1', '$transaction_ref1', '$payment_date')";
$sql_query = mysqli_query($data_connection, $sql_statement);

header("location: index.php");


}else{
   
       echo "<script>
       alert('Transaction not successful, kindly cotact your bank suport if you have been debited');
       window.location.href = 'index.php'
       </script>";
       //header("location: index.php");
   
   

       header("location: fund_wallet.php");
   
   }
}
 //echo $response1;

*/
//////////////////////////////// The callback inline api code ends here ///////////////////////////////////////////////////////////////////////


 ////////////////////////This code decode response of api standard to get transaction_id,network,phone_number,amount,status and balance/////////////


 $status2 = $_GET['status'];
 $tx_ref2 = $_GET['tx_ref'];
 $transaction_id2 = $_GET['transaction_id'];

    ///////////////////////////// After getting get response use transaction id to Verifing transactions from api //////////////////////

if($status2 == "successful"){

$url2 = "https://api.flutterwave.com/v3/transactions/".$transaction_id2."/verify"; /////// The URL given in the documentation without parameters ///
 $ch2 = curl_init();
 curl_setopt($ch2, CURLOPT_URL, "$url2");
 curl_setopt($ch2, CURLOPT_CONNECTTIMEOUT, 10);
 curl_setopt($ch2, CURLOPT_RETURNTRANSFER,1); //return as a variable
 $headers2 = [
    'Authorization: Bearer FLWSECK_TEST-5be64f0145ecb95f81333c0d22527685-X'

  ];
  curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers2);
 $response2 = curl_exec($ch2);
 curl_close($ch2);
 //echo $response2;
///////////////////////////////////////////////// decode the JSON response ///////////////////////////////////////////////////////

 $array2 = json_decode($response2, true);              
 $payment_status2 = $array2['data']['status'];
 $payment_amount2 = $array2['data']['amount'];
 $pay_email2 = $array2['data']['customer']['email'];
 $pay_name2 = $array2['data']['customer']['name'];
 $transaction_ref2 = $array2['data']['tx_ref'];

 ////////////////////////////////////////////// Update and credit the customer wallet ///////////////////////////////////////

    //$sql2 = "UPDATE payment_history SET wallet = wallet + '$payment_amount2' WHERE name_email = '$pay_email2'";
    //$res2 = mysqli_query($data_connection, $sql2);

    
$sql2 = "UPDATE register_info SET wallet = wallet + '$payment_amount2' WHERE email = '$pay_email2'";
$res2 = mysqli_query($data_connection, $sql2);

if($res2){

   $payment_date2 = date("Y/m/d h:I:sa");

   $sql3 = "SELECT SUM(amount) as before_pay FROM transaction_history";
   $con3 = mysqli_query($data_connection, $sql3);
   $assoc = mysqli_fetch_assoc($con3);
   $before = $assoc['before_pay'];

   $after = $before + $payment_amount2;

   $sql_statement2 = "INSERT INTO transaction_history (user_name, amount, before_transaction, after, category, status, transaction_id, date) 
   VALUES ('$pay_email2', '$payment_amount2', '$before', '$after', 'CREDIT', '$payment_status2', '$transaction_ref2', '$payment_date2')";
   $sql_query2 = mysqli_query($data_connection, $sql_statement2);


    header("location: index.php");

 }else{

    echo "<script>
    alert('Transaction not successful, kindly cotact your bank suport if you have been debited');
    window.location.href = 'index.php'
    </script>";
    header("location: index.php");

    header("location: fund_wallet.php");

}

}







/*
\Web_designing\xampp\htdocs\clone_training
\Web_designing\xampp\htdocs\Admin_side
\Web_designing\xampp\htdocs\forex
/Users/Elegante/.ssh/id_rsa.pub




// initial to github 

echo "# VTU_docoment" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/abdulquadri2023/Php-vtu.git
git push -u origin main


// push to github

git remote add origin https://github.com/abdulquadri2023/VTU_docoment.git
git branch -M main
git push -u origin main


// url link to vtu document 

https://github.com/abdulquadri2023/VTU_docoment.git
*/ //Bola2508

?>