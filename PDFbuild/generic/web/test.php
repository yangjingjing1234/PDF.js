<?php
     //$url='http://123.124.21.142:8081/h5/compressed.tracemonkey-pldi-09.pdf';
     $path = @$_GET['pdf_url'];
     var_dump($path);

     //$url='http://123.124.21.142:8081/h5/sign/web/test.pdf';
     $url=$path;
     $contents = file_get_contents($url);
     echo $contents;
?>