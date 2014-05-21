<?
plugins_register_backend($plugin,array("icon"=>"icon-user","sub"=>array("directories"=>"Ordner","files"=>"Dateien")));
require("class.FileRepo_Directory.php");
require("class.FileRepo_File.php");
