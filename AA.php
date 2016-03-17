
<?php
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));
?>

<?php
include_once("setting/database_setting.php");

$con = connect_db();
$xx = mysql_query("select instock from product where id = '1'") ;
$p = mysql_fetch_array($xx);
mysql_close($con);
$BB = $p[instock] - 5;
echo "$BB";
?>
