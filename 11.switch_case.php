<?php
$level = 4;

switch($level){
    case 1:
        echo "Pelajari HTML";
        break;
    case 2:
        echo "Pelajari CSS";
        break;
    case 3:
        echo "Pelajari Javascript";
        break;
    case 4:
        echo "Pelajari PHP";
        break;
    default:
        echo "Kamu bukan programmer!";
}

echo "<br> <br>";


$day = date ("D");

switch ($day) {
    case 'Sun' : 
        $hari = "Minggu"; 
    break;
    case 'Mon' : 
        $hari = "Senin"; 
    break;
    case 'Tue' :
         $hari = "Selasa";
    break;
    case 'Wed' : 
        $hari = "Rabu"; 
    break;
    case 'Thu' : 
        $hari = "Kamis"; 
    break;
    case 'Fri' : 
        $hari = "Jum'at"; 
    break;
    case 'Sat' : 
        $hari = "Sabtu"; 
    break;
    default : 
        $hari = "Kiamat";
}

echo "Hari ini hari <b>$hari</b>";
echo "<p><b> Hari menyesuaikan dengan hari saat ini "



?>