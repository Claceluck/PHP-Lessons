<?php

function deleteDir($name_dir){
    if ($objs = glob($name_dir."/*")) {
        foreach($objs as $obj) {
          is_dir($obj) ? deleteDir($obj) : unlink($obj);
        }
     }
     rmdir($name_dir);}
//  работает, но состаавил не сам нашёл на формуме...


// deleteDir('dir1');

function delDir($name_dir){
    if(is_dir($name_dir)){
        // сам пока не смог составить функцию 
    }
}