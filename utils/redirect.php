<?php
// watch out for accepting request_uri input without validation/sanitation!
$request=$_SERVER['REQUEST_URI'];
echo $request;
$arrMoved=array("127.0.0.1/web/prodind.php/","127.0.0.1/web/product.php");
           
if(array_key_exists($request,$arrMoved)) {
    
}
else {
    header('Location: ../web/404.php');
}    
?>