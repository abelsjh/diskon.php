<?php
    
    $totalbelanja = 400000;
    $member = "NonMember";
    $member1 = 0.10; //Diskon untuk total bayar di bawah 1 Juta
    $member2 = 0.15; //Diskon untuk total bayar di atas 1 Juta
    $nonmember1 = 0.05;
    $nonmember2 = 0.10;

    function diskonMem1($member1,$totalbelanja){    //Perhitungan Diskon Member 15%
        return $totalbelanja - $member1 * $totalbelanja;
    }
    function diskonMem2($member2,$totalbelanja){    //Perhitungan Diskon Member 10%
        return $totalbelanja - $member2 * $totalbelanja;
    }

    function diskonNon1($nonmember1,$totalbelanja){ //Perhitungan Diskon NonMember 10%
        return $totalbelanja - $nonmember1 * $totalbelanja;
    }
    function diskonNon2($nonmember2,$totalbelanja){ //Perhitungan Diskon NonMember 5%
        return $totalbelanja - $nonmember2 * $totalbelanja;
    }

    echo "</br>Tipe Customer = " . $member;
    echo "</br>Total Belanja = " . $totalbelanja;


     switch ($member) {
        case 'Member':
            if ($totalbelanja >= 1000000) {
                echo "</br>Anda Mendapatkan Diskon 15%";
                echo "</br>Total Bayar menjadi RP. " . diskonMem2($member2, $totalbelanja) . ",00";
                
            } else if ($totalbelanja < 1000000) {
                echo "</br>Anda Mendapatkan Diskon 10%";
                echo "</br>Total Bayar menjadi RP. " . diskonMem1($member1, $totalbelanja) . ",00";
            }
            break;
        case 'NonMember':
            if ($totalbelanja >= 1000000) {
                echo "</br>Anda Mendapatkan Diskon 10%";
                echo "</br>Total Bayar menjadi RP. " . diskonNon2($nonmember2, $totalbelanja) . ",00";
            }
            if ($totalbelanja < 1000000 && $totalbelanja >= 500000) {
                echo "</br>Anda Mendapatkan Diskon 5%";
                echo "</br>Total Bayar menjadi RP. " . diskonNon1($nonmember1, $totalbelanja) . ",00";
            }
            if ($totalbelanja < 500000) {
                echo "</br>Anda Mendapatkan Diskon 0%";
                echo "</br>Total Bayar menjadi RP. " . $totalbelanja . ",00";
            }
            break;
        default:
            # code...
            break;
     }





?>
