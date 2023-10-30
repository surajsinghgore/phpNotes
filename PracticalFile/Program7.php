<?php
$purchase_amount=7500;
echo "<h1>If-Else Branching Statement</h1>";
if($purchase_amount>5000){
    $discount=$purchase_amount*0.10;
}else{
    $discount=$purchase_amount*0.5;

}
$final=$purchase_amount-$discount;
echo "<b>Purchase Amount : </b> ₹ $purchase_amount <br>";
echo "<b>Discount : </b> ₹ $discount <br>";
echo "<b>Bill Payment : </b> ₹ $final";
?>