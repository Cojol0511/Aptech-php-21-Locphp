<?php
    $a = "<h1>fb.com</h1>";
    var_dump($a);
    echo $a;

    //tinh tong
    function tinhTong($a, $b){
        return $a + $b;
    }

    //xet tuoi
    function xetTuoi($tuoi){
        if($tuoi >= 19){
            echo "Du roi";
        } else{
            echo "Chua du";
        }
    }

    $H = [
        $e = 10,
        $ds = 9
    ]
    echo $H[].$e;

    xetTuoi(19);