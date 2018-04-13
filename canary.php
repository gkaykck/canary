<?php

/*
* Authored by Gokay Kucuk.
* This file is mostly going to be a simple "router". Which will take cake of the communication between
* browsers and the application. 
*
*
*


*/

   require 'flight/Flight.php';

   Flight::route('/', function(){
       echo 'hello world!';
   });
   
   Flight::start(); 
?>