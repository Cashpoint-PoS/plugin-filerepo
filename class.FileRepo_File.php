<?
class FileRepo_File extends DBObj {
  protected static $__table="filerepo_files";
  public static $mod="filerepo";
  public static $sub="files";
  
  public static $elements=array(
  "filerepo_directories_id"=>array("title"=>"","mode"=>"string","dbkey"=>"filerepo_directories_id"),
"filestore_relpath"=>array("title"=>"","mode"=>"string","dbkey"=>"filestore_relpath"),
"filename"=>array("title"=>"","mode"=>"string","dbkey"=>"filename"),
"checksum"=>array("title"=>"","mode"=>"string","dbkey"=>"checksum"),

  );
  public static $link_elements=array(
  );
  public static $list_elements=array(
  "filerepo_directories_id",
"filestore_relpath",
"filename",
"checksum",

  );
  public static $detail_elements=array(
  "filerepo_directories_id",
"filestore_relpath",
"filename",
"checksum",

  );
  public static $edit_elements=array(
  "filerepo_directories_id",
"filestore_relpath",
"filename",
"checksum",

  );
  public static $links=array(
  );
  public function processProperty($key) {
    $ret=NULL;
    switch($key) {
    }
    return $ret;
  }
  public function commit() {
  	print_r($_GET);
  	print_r($_FILES);
  	throw new Exception();
  }
}

plugins_register_backend_handler($plugin,"files","list",array("FileRepo_File","listView"));
plugins_register_backend_handler($plugin,"files","edit",array("FileRepo_File","editView"));
plugins_register_backend_handler($plugin,"files","view",array("FileRepo_File","detailView"));
plugins_register_backend_handler($plugin,"files","submit",array("FileRepo_File","processSubmit"));
