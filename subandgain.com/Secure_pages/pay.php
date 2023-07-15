<?php
include "../database_connection.php";
$payment_date = date("Y/m/d h:I:sa");

// This is for callback code for inline api which is Get method
$status = $_GET['status'];
$tx_ref = $_GET['tx_ref'];
$transaction_id = $_GET['transaction_id'];


if($status == "successful"){

 $url = "https://api.flutterwave.com/v3/transactions/".$transaction_id."/verify"; //The URL given in the documentation without parameters
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


 $sql = "UPDATE register_info SET wallet = wallet + $payment_amount1 WHERE email = '$pay_email1'";
 $res = mysqli_query($data_connection, $sql);



   $sql_statement = "INSERT INTO payment_history (name, amount, status, transaction_ref, date,) 
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
 echo $response1;

//It ends here

/*
 //decode response to get transaction_id,network,phone_number,amount,status and balance
 $array = json_decode($response, true); //decode the JSON response
 $payment_status = $array['data']['status'];
 $payment_amount = $array['data']['amount'];
 $pay_email = $array['data']['customer']['email'];

 echo $response;

 if($payment_status == "successful"){

    $sql = "UPDATE register_info SET wallet = wallet + $payment_amount WHERE email = '$pay_email'";
    $res = mysqli_query($data_connection, $sql);



    //header("location: index.php");

 }else{
/*
    echo "<script>
    alert('Transaction not successful, kindly cotact your bank suport if you have been debited');
    window.location.href = 'index.php'
    </script>";
    //header("location: index.php");

 }else{
    header("location: fund_wallet.php");

}

}
*/
?>

// initial to github 

echo "# VTU_docoment" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/abdulquadri2023/VTU_docoment.git
git push -u origin main


// push to github

git remote add origin https://github.com/abdulquadri2023/VTU_docoment.git
git branch -M main
git push -u origin main


// url link to vtu document 

https://github.com/abdulquadri2023/VTU_docoment.git
