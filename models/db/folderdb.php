<?php

/*
*
* Authored by Gokay Kucuk
* 
* Folderdb is just an incredibly simple NoSQL database replacement that works just by showing it a folder.
* It uses "paths" as id's of a json based information. Batching the files into folders gives it some sort of 
* structure too.
* Every entries path variable just gets hashed and used as filename.
* 
*
*
*/

class FolderDB{

    public function new($folderPath){
        // This function initializes database files if required.
    }

    public function GetData($path, $data){
        // The path variable here is used as id too.
    }

    public function ModifyData($path, $data){
        // The path variable here is used as id. 
    }

}