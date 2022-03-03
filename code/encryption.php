<?php

$ori_txt_to_encrypt = $_POST['encrypt'];
$ori_txt_to_decrypt = $_POST['decrypt'];
date_default_timezone_set('Asia/Kolkata');
$time=date("dmYHis");



echo "Text to encrypt: $ori_txt_to_encrypt<br><br>";
echo "Text to decrypt: $ori_txt_to_decrypt<br><br>";

//echo ord("a")."<br>";
//echo chr(97)."<br>";
$ori_txt_to_encrypt_len = strlen($ori_txt_to_encrypt);
echo "Length of encrypt string: ".$ori_txt_to_encrypt_len."<br>";
echo"Now converting to ASCII string:<br>";
for($i=0;$i<$ori_txt_to_encrypt_len;$i++){
    echo ord("$ori_txt_to_encrypt[$i]")." is $ori_txt_to_encrypt[$i]<br>";
}

echo"Current time and date as key: $time <br>";
$time_len = strlen($time);
echo"Length of time key is $time_len <br>";
$word_count = str_word_count($ori_txt_to_encrypt);
echo "Numbers in Words in the String: $word_count<br>";

$each_word_from_ori = explode(" ",$ori_txt_to_encrypt);


for($m=0;$m<$word_count;$m++){

word_encrypt("$each_word_from_ori[$m]",$time_len,$time);

}
/* 
write a function which will accept a word and then find the length of the word , convert in the ASCII and Add numbers to it depending on the length of the string. each number from date and time for one ASCII Number of the text. 

*/


function word_encrypt($word,$time_len,$time){
    $word_len=strlen($word);
    //echo"$word len is $word_len <br>";
    echo" <br><br><br>method 2 <br><br> $word";
    for($i=0;$i<$time_len;$i++){
        
        $j=$word_len;
        if($i%$j==0){
            echo"<br>";
         }
        echo"$time[$i]";
        
    }
    
}


?>