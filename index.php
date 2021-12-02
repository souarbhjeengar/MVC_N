<php
$helperfiles=glob("helper/*.php");
array_map(function($filename){
  include_once $filename;
},$helperfiles);
spl_autoload_register();
  print_r($_GET);  require_once "apps/libs/Autoload.php"
  $obj=new Autoload();

?>