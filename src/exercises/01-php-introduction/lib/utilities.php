<?php

function truncate($text, $length) {
    if($length > 0){
        return substr($text, 0, $length);
    } else {
        echo "error";
    }

}

function formatPrice($amount) {
    return "€" . number_format($amount, 2, "." , "," );
}

function getCurrentYear() {
    echo  "The year is: " . date("Y"); 
}   
?>