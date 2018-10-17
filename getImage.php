<?php 

/*$filenameArray = array();

$handle = opendir(dirname(realpath(__FILE__)).'/../images/');
        while($file = readdir($handle)){
            if($file !== '.' && $file !== '..'){
                array_push($filenameArray, "$file");
            }
        }


$list =  array_values($filenameArray);

echo json_encode($filenameArray);*/

$taille = 0;
//foreach(glob("{images/,images/*/*}*.{jpg,jpeg,JPG,JPEG,png,PNG, gif,GIF, ICO,ico}", GLOB_BRACE) as $image)
//foreach(glob("{/}*.{php,js,json,html}", GLOB_BRACE) as $image)
//foreach(glob("{css/}*.{css}", GLOB_BRACE) as $image)
foreach(glob("{json/}*.{json}", GLOB_BRACE) as $image)
{

    echo json_encode($image)."<br>";
 
$taille++;
}
echo $taille;
?>
