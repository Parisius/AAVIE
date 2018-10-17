<?php 
	$file = 'json/products.json';
	$data = file_get_contents($file); 
	$products = json_decode($data);
	$ids = 0;
	$idList = array();
	
	if (isset($_GET['id'])) 
	{
		$ids=$_GET['id'];
		foreach ($products as $product) :
			array_push($idList, $product->id );
		endforeach;
		if(!in_array ($ids, $idList))
		{
			header('Location: 404.php');
		}
	}
	else 
	{
		header('Location: prodind.php');
	}

;?>