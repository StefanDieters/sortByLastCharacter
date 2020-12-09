<?php
    function sortByLastCharacter($inStr){
        $result = array();
        $rawArr = explode(" ", $inStr);
        // foreach($rawArr as $item){
        //     if(array_key_exists($item[-1], $result))    /*+itteration count aan key name toevoegen*/;
        //     else                                        $result[$item[-1]] = $item;
        // }
        for($i = 0; $i < sizeof($rawArr); $i++){
            if(array_key_exists($rawArr[$i][-1], $result))  $result[$rawArr[$i][-1].$i] = $rawArr[$i];
            else                                            $result[$rawArr[$i][-1]] = $rawArr[$i];
        }
        ksort($result);
        return($result);
    }

    $input = "qwertyC qwertycB qwertyaB qwertyA qwertybB";
    print("input is: ".$input)."<hr>";
    print_r(sortByLastCharacter($input));
?>