<?php
session_start();
$enc_session=session_encode();
session_decode($enc_session);
print "<pre>";
print_r($_SESSION);
print "</pre>";
?>