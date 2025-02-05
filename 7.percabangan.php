<?php
    $total_belanja = 50000;
     echo "Total belanja anda Rp 50.000,00 <br>";
    if($total_belanja >= 100000){
        echo "Selamat anda mendapat cashback 20% <br>";
        echo "Balik lagi kesini yah <br> <hr>";
    }   
    else if($total_belanja >= 80000){
        echo "Datang kembali dengan belanja seharga Rp 100.000,00 maka kamu akan mendapat cashback! <br>";
        echo "Terimakasih telah belanja disini <br> <hr>";
    }
    else {
        echo "Terimakasih telah belanja disini <br> <hr>";
    }




    $umur= 12;
    echo "Umur anda 12 tahun <br>";
    switch ($umur) {
        case 20:
            echo "anda beranjak dewasa";
            break;    
        case 70:
            echo "bertaubatlah anda akan menuju ke alam berikutnya";
             break;
        default:
            echo "Selamat anda mencapai usia remaja";
            break;
    }
?>