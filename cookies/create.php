<?php
//cookie parameters default values
// setcookie(
//     string $name,
//     string $value = "",
//     int $expires_or_options = 0,
//     string $path = "",
//     string $domain = "",
//     bool $secure = false,
//     bool $httponly = false
// )
// ! generated cookie for  1 day with secure as parameter so that javascript not access it
setcookie("message","hello from cookies",time()+86400,"/","localhost",true);
echo "<h1>Cookie Generated Successfully</h1>";

?>