<?php
$str = "string";
$number = 5;
function encrypt_base64_layers($str,$number){
   for($i=0;  $i<$number; $i++){
      $str = base64_encode($str);
      
         if ($i == $number-1){
            print $str."<br>";
         }

      
   }
}
function encrypt_hex_bin_layers($str,$number){
   for($i=0;  $i<$number; $i++){
      $str = bin2hex($str);
      
         if ($i == $number-1){
            print $str."<br>";
         }

      
   }
}

function decrypt_base64_layers($str,$number){
   for($i=0;  $i<$number; $i++){
      $str = base64_decode($str);
      
         if ($i == $number-1){
            print $str."<br>";
         }

      
   }
}

function decrypt_bin_hex_layers($str,$number){
   for($i=0;  $i<$number; $i++){
      $str = hex2bin($str);
      
         if ($i == $number-1){
            print $str."<br>";
         }

      
   }
}


?>
<body style="background-color: black; color: firebrick; font-family: monospace; font-size: 15px;">
   
</body>
