<?php

 function validate_login(string $login) {
     global $mysql;
     $login = preg_replace('#[^a-zA-Z\-_0-9]+#', '', $login);
     return mysqli_real_escape_string($mysql, $login);
 }
$var=validate_login( "hfhfhhFdJD");
 var_dump($var);
// fhuehfeiuhfeWUHIu

function validate_name(string $name)
{
    global $mysql;
    $name = preg_replace('#[^a-zA-Z\-_0-9\-{6,20}]+#', '', $name);
    return  mysqli_real_escape_string($mysql, $name);
}
$var1=validate_name( "hfhfhvsshFdJD");
var_dump($var1);

function validate_pass(string $pass)
{
    global $mysql;
    $pass = preg_replace('#[^a-zA-Z\-_0-9\-{6,20}]+#', '', $pass);
    return  mysqli_real_escape_string($mysql, $pass);
}
$var2=validate_pass( "hfhfhgrgarhFdJD");
var_dump($var2);


//todo