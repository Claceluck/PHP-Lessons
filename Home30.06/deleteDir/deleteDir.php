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


// Эта пока не работает, но я вернусь) 
// function delDir($dir){
//   if(is_dir($dir)){
//     if(($dh=opendir($dir))!==false){
//       while(($file=readdir($dh))!==false){
//         if(is_file($file)){ 
//           unlink($file);
//         }else {
//           delDir($file);
//         }  
//       }
//     }
//     closedir($dh);
//     rmdir($dir);
//   }
// }
// delDir('deldir1');