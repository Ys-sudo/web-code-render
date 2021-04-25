<?php
if(!empty($_POST['datax'])){
$data = $_POST['datax'];
$fname = date(DATE_ATOM, mktime()) . ".html";//generates random name

$file = fopen("/" .$fname, 'w');//creates new file
fwrite($file, $data);
fclose($file);
}
?>
