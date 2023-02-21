<?php
// Funzione che genera la password
function createPsw($charsnum, $huge_array){
    $repetition = $_GET['repetition'];
    if($repetition == 'false'){
        $repetition = false;
        if($charsnum > 10 && count($huge_array) == 10){
        $charsnum = 10;
        }
        $my_temp_array = [];
        while(count($my_temp_array) <= $charsnum){
        $my_var=array_rand(array_flip($huge_array), 1);
        if(!in_array($my_var, $my_temp_array)){
            $my_temp_array[] = $my_var;
        }
    }$password=implode($my_temp_array);
    } else{
        $password=(str_shuffle(implode(array_rand(array_flip($huge_array), $charsnum))));
    }
    return $password;  
}
?>