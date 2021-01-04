<?php
require_once("db/include.php");
require_once("utils/functions.php");

sec_session_start();
if(login_check($dbh->getDb()) == true){
  $templateParams["nome"] = "wishlist_template.php";
  $userEmail = $_SESSION['user_id'];
  $itemsInWishList = $dbh->getItemsFromWish($userEmail);
  
  $items = array();
  foreach($itemsInWishList as $item){
    array_push($items, $dbh->getArticleById($item["Prodotto"]));
  }
  
  $remove = false;
  $articleToRemove = -1;
  if(isset($_GET["remove"])){
    $remove = $_GET["remove"];
  }
  if(isset($_GET["id"])){
    $articleToRemove = $_GET["id"];
  }
  if($remove == true){
    $dbh->removeItemFromWish($userEmail, $articleToRemove);
  }
}
else{
  $templateParams["nome"] = "wishlist_template.php";  
}


require("template/base.php");
?>