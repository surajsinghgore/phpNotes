<?php
echo "<h1>Array Built In Function</h1>";
$colors=array('red','blue','green');

echo "The elements of original array : ";
foreach($colors as $val){
    echo " $val ";
}
// slice
$sub_arr=array_slice($colors,1,3);
echo "<br> Array_Slice() = ";
foreach($sub_arr as $val){
    echo " $val ";
}

// merge
$merge=array_merge($colors,$sub_arr);
echo "<br> Array_Merge() = ";
foreach($merge as $val){
    echo " $val ";
}
// unique
$unique=array_unique($merge);
echo "<br> Array_Unique() = ";
foreach($unique as $val){
    echo " $val ";
}

// reverse
$reverse=array_reverse($unique);
echo "<br> Array_Reverse() = ";
foreach($reverse as $val){
    echo " $val ";
}
// sort
sort($reverse);
echo "<br> sort() = ";
foreach($reverse as $val){
    echo " $val ";
}

// array_push
array_push($reverse,"cyan","magenta","yellow");
echo "<br> Array_Push() = ";
foreach($reverse as $val){
    echo " $val ";
}
// array_pop
array_pop($reverse);
echo "<br> Array_Pop() = ";
foreach($reverse as $val){
    echo " $val ";
}
// search
echo "<br> Array_Search() = ".array_search("cyan",$reverse);

?>