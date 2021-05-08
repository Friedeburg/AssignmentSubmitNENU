<?php
$allowedExts = array("rar", "zip", "7z", "tar");

$num = $_POST['StudentID'];
$username = $_POST['StudentName'];
$FileX =array();
$arr = $_FILES['file'];

$FileX['name'] = $arr['name'];
$FileX['type'] = $arr['type'];
$FileX['tmp_name'] = $arr['tmp_name'];
$FileX['error'] = $arr['error'];
$FileX['size'] = $arr['size'];

$temp = explode(".", $_FILES["file"]["name"]);

echo "会话ID: ";
echo ($_FILES["file"]["size"]*233);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "application/x-rar")
|| ($_FILES["file"]["type"] == "application/x-zip")
|| ($_FILES["file"]["type"] == "application/x-7z")
|| ($_FILES["file"]["type"] == "application/zip")
|| ($_FILES["file"]["type"] == "application/7z")
|| ($_FILES["file"]["type"] == "application/tar")
|| ($_FILES["file"]["type"] == "application/x-zip-compressed")
|| ($_FILES["file"]["type"] == "application/octet-stream")
|| ($_FILES["file"]["type"] == "application/rar"))
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "<br>"."错误：: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		echo "<br>" . "上传顺利结束啦～ 下面是文件信息". "<br>";
		echo  "上传文件名: " . $_FILES["file"]["name"] . "<br>";
		echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
		echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		if (file_exists("uploads/" . $_FILES["file"]["name"]))
		{
			echo $_FILES["file"]["name"] . " 文件已经存在。 ";
		}
		else
		{
			$destination = "uploads/" . $num . $username . substr($FileX['name'], strpos($FileX['name'], ".")) ;
			move_uploaded_file($_FILES["file"]["tmp_name"], $destination);
			echo "文件存储在: " . "uploads/" . $_FILES["file"]["name"];
		}
	}
}
else
{
	echo "<br>" . "格式不对！！！！重新打包以后再上传吧！！";
}
?>
