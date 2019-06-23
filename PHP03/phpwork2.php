<?php
    //課題１
    $name = "Daisuke";
    if($name == "Daisuke"){
        echo "私は{$name}です";
    }else{
        echo "{$name}ではありません";
    }
    echo "\n";
    
    //課題２
    $total = 0;
    for($i = 1; $i <= 10000; $i++ ){
        $total += $i;
    }
    echo $total."\n";
    
    //課題３
    $fruits = ["apple","banana","grape","orange","cherry"];
    foreach($fruits as $value){
        echo $value;
        echo "\n";
    }
    
    //課題４
    /* for文の始めの値を定義する */
    $start = 1;
    /* for文の終わりの値を定義する */
    $end = 100;
    
    for($i = $start; $i <= $end; $i++){
    
      // 5で割り切れたら{}内を実行する
      if($i % 5 == 0){
        echo $i;
        echo "\n";
      }
    }
?>
