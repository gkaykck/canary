<?php


/*
 * Authored by Gokay Kucuk
 *
 * User controller handles everything around user. From creating to login.
 * 
 *
 */


 class UserController{
     public static function Login($username,$password){
         // This function handles the login process and set a cookie.
     }
     public static function Create($email, $username, $password, $password_again){
        // This function creates a new user with given parameters.
     }
     public static function Delete($user_id){
         // This function deletes the given user.
     }
     public static function GetProfile($user_id){
        // This function gets a user's profile. If it's a public profile
        // then it's visible or it must be user's own profile if it's private.
     }
     public static function UpdateProfile($username,$password,$email){
        // This function updates user's profile information.
     }
 }


?>