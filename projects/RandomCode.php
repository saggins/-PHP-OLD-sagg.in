<?php
    function RandomCode($max){
        $chars = " a b c d e f g h i j k l m n o p q r s t u v w y x z A B C D E F G H I J K L M O P Q R S T U V W Y X Z ";
        $code= "";
        for($i=0;$i<=10;$i++){
            $possiblechar = explode($chars, " ");
            $code += $possiblechar[rand(0,$max)];
        }
        return $code;
    }
?>