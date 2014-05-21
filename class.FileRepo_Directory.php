<?
class FileRepo_Directory extends DBObj {
  protected static $__table="filerepo_directories";
  public static $mod="filerepo";
  public static $sub="directories";
  
  public static $elements=array(
  "parent_id"=>array("title"=>"","mode"=>"string","dbkey"=>"parent_id"),
"name"=>array("title"=>"","mode"=>"string","dbkey"=>"name"),

  );
  public static $link_elements=array(
  );
  public static $list_elements=array(
  "parent_id",
"name",

  );
  public static $detail_elements=array(
  "parent_id",
"name",

  );
  public static $edit_elements=array(
  "parent_id",
"name",

  );
  public static $links=array(
  );
  public function processProperty($key) {
    $ret=NULL;
    switch($key) {
    }
    return $ret;
  }
}

plugins_register_backend_handler($plugin,"directories","list",array("FileRepo_Directory","listView"));
plugins_register_backend_handler($plugin,"directories","edit",array("FileRepo_Directory","editView"));
plugins_register_backend_handler($plugin,"directories","view",array("FileRepo_Directory","detailView"));
plugins_register_backend_handler($plugin,"directories","submit",array("FileRepo_Directory","processSubmit"));
