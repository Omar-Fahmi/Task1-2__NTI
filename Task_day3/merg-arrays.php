<?php
$emptyarray= [];

$array = [
    0 => [0=>'a' , 1=>'b' ,  2=>'c' ] ,
   1 => [0=>'x' , 1=>'b' , 2=>'a'],
   2 => [0=>'z' , 1=>'z' , 2=>'v']
  ];
  
foreach ($array as $key => $index) {

    
        foreach ($index as $key => $subindex) {

            if(!in_array($subindex, $emptyarray)){
                $emptyarray[]= $subindex;
            }
            
    }   

  
}
print_r($emptyarray);
?>