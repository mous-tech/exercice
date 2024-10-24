<?php
$i = 0;
while($i<=99){
    echo sprintf('%02d' ,$i);//le d veut dire que la valeur va etre traiter comme un entier
    $i++;
    echo ", ";
    
}