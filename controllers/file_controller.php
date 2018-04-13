<?php

/*
 * Authored by Gokay Kucuk
 *
 * File controller is the part of the application where file based operations are done.
 * Whenever the subject is path, it's the path relative to root folder.
 *
 */

class FileController{
    public static function CreateFolder($path){
        // This function simply creates folders recursively.

    }
    public static function DeleteFile($file_path){
        // This function deletes a file.
    }

    public static function MoveFile($current_path,$new_path){
        // This function moves a file.
    }

    public static function GetContentsOfDirecory($path){
        // This function lists contents of a directory.
    }
    public static function ProcessFiles($path){
        // This function should process files in folder.
    }
}



?>