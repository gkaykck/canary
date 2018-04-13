<?php


/*
*
*
* Authored by Gokay Kucuk.
* This class is modifying the filesystem to create some access control.
*
*
*
*
*/

class SystemApache{
    
    public static function AddAuthForFile($file,$auth_username,$auth_password){
        //This function adds an auth line to access file. After the line is added,
        // the expected behaviour is to directly get auth structure applied. If it's not
        // working like this, then it's not an acceptable solution. Otherwise this function
        // is also going to put an expiration time on auth info. (~1 hour.)
    }
    public static function RemoveAuthForFiles(){
        // This function is only going to be called in every minute once only. It's job is to 
        // remove auth stuff when they are expired.
        
    }
}