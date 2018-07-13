<?php
include('constants.php');
function save_basket($basket_store, $login, $basket)
{
	if (!file_exists($basket_store))
		file_put_contents($basket_store, "");
	$baskets = unserialize(file_get_contents($basket_store));
	$baskets[] = array($login => $basket);
	file_put_contents($basket_store, serialize($baskets));
}

function get_basket($basket_store, $login)
{
	$baskets = unserialize(file_get_contents($basket_store));
	if (!$baskets)
		return ;
	foreach ($baskets as $basket)
	{
		if ($basket['login'] === $login)
			return $basket;
	}
}

function add_category($category_store, $category_name, $products)
{
	$categories = unserialize(file_get_contents($category_store));
	$categories[] = array('category_name' => $category_name, 'products' => $products);
	file_put_contents($category_store, serialize($categories));
}

function del_category($category_store, $product_store, $category_name)
{
	$categories = unserialize(file_get_contents($category_store));
	foreach ($categories as $key => &$category)
	{
		if ($category['category_name'] === $category_name)
			unset($categories[$key]);
	}
	unset($category);
	file_put_contents($category_store, serialize($categories));
	delete_product_associations($product_store, $category_name);
}

function list_categories($category_store)
{
	$categories = unserialize(file_get_contents($category_store));
	if (!$categories)
		return ;
	foreach ($categories as $category)
	{
		echo $category['category_name']."<br />";
		foreach ($category['products'] as $prod)
		{
			echo $prod." / ";
		}
		echo "<br /><br />";
	}
}

function get_products_by_category($category_name)
{
	// return value of this funciton will be an array of products
	/*
	$products = get_products_by_category('applicanes');
	foreach($products as $key => $product)
	{
		//access by
		//$product['product_name'];
		//(product_name, image_url, description, price, categories_array)
	}
	*/
}

function delete_product_associations($product_store, $category_name)
{
	$products = unserialize(file_get_contents($product_store));
	foreach ($products as $key => &$product)
	{
		$products[$key]['categories'] = delete_category_reference($products[$key]['categories'], $category_name);
	}
	file_put_contents($product_store, serialize($products));
}

function delete_category_reference($categories, $category_name)
{
	$new_categories = array();
	foreach ($categories as $cat)
	{
		if ($cat != $category_name)
			$new_categories[] = $cat;
	}
	return $new_categories;
}

?>

?>