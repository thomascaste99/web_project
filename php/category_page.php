<?php
require_once("db/include.php");

$templateParams["nome"] = "article_list.php";

$idcategoria = -1;
if(isset($_GET["type"])){
    $idcategoria = $_GET["type"];
}
$templateParams["articoli"] = $dbh->getPostByCategory($idcategoria);

require("template/base.php");
?>
