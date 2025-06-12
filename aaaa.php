<?php 
exec("gcc -o executable.out C-code.c",$output1,$returnvalue1); 
exec("./executable.out",$output2,$returnvalue2); 
echo "<b> output :</b>"+$output2; 
?>