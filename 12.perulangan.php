<?php
   $level = 0;
   $levelMaks = 15;
   

   //while 
   echo "Mengggunakan While <br>";
   while ($level < $levelMaks) {
    $level = $level + 1;
    echo "Level karakter: " .$level;
    echo "<br>";
   }

   echo "<hr>";

   //for

   echo "Menggunakan For <br>";
   for ($level=0; $level <= $levelMaks; $level++) { 
    echo "Level Hero:" .$level . "<br>";
   }


   //do

// $level2 = 3;

//    do{
//     echo "Level Karakter:" .$level2. "<br>";
//    } while ($level2 <= $levelMaks);
?>