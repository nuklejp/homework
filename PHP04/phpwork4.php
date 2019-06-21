<?php
    //課題1
    function double($number){
        return $number*2;
    }
    
    //課題２
    function f($a,$b){
        return $a + $b;
    }
    
    //課題３
    function multiply($arr){
        $result = 1;
        foreach($arr as $number){
        $result *=$number;
        }
        return $result;
    }
    $arr = array(1,3,5,7,9);
    echo multiply($arr);
    echo "\n";
    
    //課題４
    function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
     $max_number = $arr[0];
     foreach($arr as $a){
     if($max_number <= $a){
         $max_number = $a;
        }
     }
     return $max_number;
     }
     $arr = array(1,3,5,7,9);
     echo max_array($arr);
     echo "\n";
     
    //課題５
    //strip_tags
    $str = '<strong>yahoo</strong>';
    echo strip_tags($str);
    echo "\n";
    
    //array_push
    $teams = array("eagles", "hawks");
    array_push($teams, "fighters", "lions");
    print_r($teams);
    echo "\n";
    
    //array_merge
    $pteams = array("eagles", "hawks");
    $cteams = array("carp", "giants");
    $allTeams = array_merge($pteams, $cteams);
    print_r($allTeams);
    echo "\n";
    
    //time,mktime
    $lastweek = time()-(7*24*60*60);
    echo date('y-m-d',$lastweek)."\n";
    
    echo 'My birthday is on '.date('l',mktime(0,0,0,17,3,1982))."\n";
    
    //date
    echo "Mr.Justin will come on ".date('y-m-d');
    
?>