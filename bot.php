<?php 
 $update = file_get_contents('php://input');
 file_put_contents ('bot.txt', $update); 
$update = json_decode($update, TRUE); 
 $message = $update ['Message']['text']; 
$chatID = $update ['Message']['from']['id'];
 $token = '7882198041:AAHYwYyCvrc4qfMzvzoVc_JftdY4-PtfsJc';
   function sendMessage ($chatid, $text)
{ 	
$url = 'https://api.telegram.org/bot7882198041:AAHYwYyCvrc4qfMzvzoVc_JftdY4-PtfsJc/sendMessage?chatid='.$chatid."&text=".$text;
file_get_contents($url);
 }
  
if($message == '/start') 
{ 	
sendMessage($chatID, 'Hi'); 
} 
    
?>
