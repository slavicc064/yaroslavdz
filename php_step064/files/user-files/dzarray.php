<?php
    $arr = ["test", "index", "test-index", "thumbnail"];
   function test($param) {
       foreach($param as $value){
           $valueMax = 0;
           if(strlen($value) > strlen($valueMax)){
               $valueMax = $value;
               echo strlen($valueMax);
           }
       }
   }
   test($arr);
?>
