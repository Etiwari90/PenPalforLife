<?php
	
if (isset($_GET['q'])) {
    download();
  }
function download(){
$file = 'abc.xlsx';

if (file_exists($file)) {
	 header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
}


if(isset($_GET['p'])){
	upload_files();
}
	
	
function upload_files()
{
$target_dir = "store/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

if(isset($_POST["submit"])) {
	$file_parts = pathinfo($target_file);

switch($file_parts['extension'])
{
    case "xlsx":
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ;  
    break;
	
	default:
	echo"file should be .xlsx";
}
  

}
}


?>