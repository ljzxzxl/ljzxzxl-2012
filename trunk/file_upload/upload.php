<html><head>
<title>上载文件表单</title></head> 
<body> 
<form enctype="multipart/form-data" action="upload.php" method="post"> 
请选择文件： <br>
<input name="upload_file" type="file"><br>
<input type="submit" value="上传文件"> 
</form> 
</body>
</html> 

<?
$upload_file=$_FILES['upload_file']['tmp_name'];
$upload_file_name=$_FILES['upload_file']['name'];

if($upload_file){
$file_size_max = 1000*1000;// 1M限制文件上传最大容量(bytes)
$store_dir = "d:/";// 上传文件的储存位置
$accept_overwrite = 1;//是否允许覆盖相同文件
// 检查文件大小
if ($upload_file_size > $file_size_max) {
echo "对不起，你的文件容量大于规定";
exit;
}

// 检查读写文件
if (file_exists($store_dir . $upload_file_name) && !$accept_overwrite) {
Echo  "存在相同文件名的文件";
exit;
}

//复制文件到指定目录
if (!move_uploaded_file($upload_file,$store_dir.$upload_file_name)) {
echo "复制文件失败";
exit;
}

}

if($_FILES['upload_file']['name']){
Echo  "<p>你上传了文件:";
echo $_FILES['upload_file']['name'];
echo "<br>";
//客户端机器文件的原名称。 
}

if($_FILES['upload_file']['type']){
Echo  "文件的 MIME 类型为:";
echo $_FILES['upload_file']['type'];
//文件的 MIME 类型，需要浏览器提供该信息的支持，例如“image/gif”。 
echo "<br>";
}

if($_FILES['upload_file']['size']){
Echo  "上传文件大小:";
echo $_FILES['upload_file']['size'];
//已上传文件的大小，单位为字节。 
echo "<br>";
}

if($_FILES['upload_file']['tmp_name']){
Echo  "文件上传后被临时储存为:";
echo $_FILES['upload_file']['tmp_name'];
//文件被上传后在服务端储存的临时文件名。 
echo "<br>";
}


$Erroe=$_FILES['upload_file']['error'];
switch($Erroe){
    case 0:
      if($_FILES['upload_file']['name']){
      Echo  "上传成功，文件位置:".$store_dir.$upload_file_name; break;}
    case 1:
      if($_FILES['upload_file']['name']){
      Echo  "上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值."; break;}
    case 2:
      if($_FILES['upload_file']['name']){
      Echo  "上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。";  break;}
    case 3:
      if($_FILES['upload_file']['name']){
      Echo  "文件只有部分被上传";break;}
    case 4:
      if($_FILES['upload_file']['name']){
      Echo  "没有文件被上传";break;}
}
?>