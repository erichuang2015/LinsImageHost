<html>
<head>
<meta name="author" content="Lin's ImageHost" />
<meta charset="utf-8" />
<meta name="language" content="pt-br" />
<meta name="robots" content="index, follow" />
<meta name="description" content="" />
<meta  name="keywords" content=" image, host, upload, images, free, image, hosting, png, gif, jpg, download, site" />
<link rel='index' title='Lins ImageHost' href='http://k6usluta4do5t44fcm4kuh2srn5eyljy5cp7roq4xydlsixwy6xjfgid.onion/' />
<link rel="shortcut icon" href="imagehosticon.png" />
<title>Lins ImageHost</title>
<style>
.realupload {
      position: relative;
      float: right;
      top: -21px;
      right: 3px;
      opacity:0;
      -moz-opacity:0;
      filter:alpha(opacity:0);
	  z-index: 1;
}
.fakeupload {
      width:450px;
      background: url("select.png") no-repeat 99% 51%;
      cursor: default;
      background-color: #FFFFFF;
	  z-index: 2;
}
input {
      background-color: #FFFFFF;
      border: 1px solid #bebebe;
      letter-spacing: 1px;
      font-size: 11px;
      color: #333;
      padding-left: 5px;
      padding-top: 5px;
      padding-bottom: 5px;
      margin-left: 5px;
      height: 30px;
      vertical-align: middle;
}
div#filestyle {
	margin: 0 auto;
	width: 450px;
}
body {
	background-color: #f7f7f7;
}
label {
	font-size: 11px;
	font-family: Verdana;
	padding: 10px;
}
#submit{
margin-left:9px;
margin-top:-23px;
 width: 455px;
 color:black;
 background-image:url(bg.png);
}
img{
text-decoration:none;
border:none;
}
table tr td#text{
text-align:center;
color:white;
background-color:#BEBEBE;
}
table tr td#code{
text-align:center;
color:#AEAEAE;
}
table{
margin-top:20px;
}

table tr td{
padding-left:10px;
padding-right:10px;
}
#copyright{
color:#BEBEBE;
}
a{
text-ecoration:none;
color:#AEAEAE
}
</style>
</head>
<body>
<center>
<br/><br/><br/>
<a href="index.php">Lin's ImageHost</a>
<br/>
<pre>
<font class="ascii">
  ***********
      ***** ***********
   ** ****** *** ********
  ****  ******  ** *******
  ***     ******* ** ******
  ***       **        *  **
   *|/------  -------\ ** *
    |       |=|       :===**
     |  O  |   | O   |  }|*
      |---- |   ----  |  |*
      |    |___       |\/
      |              |
      \   -----     |
       \           |
         -__ -- -/
</font>
</pre>
<br/>
<form name="newad" method="post" enctype="multipart/form-data"  action="">
 <table>
 	<tr><td>

	<div id="filestyle">
	 <input id="fakeupload" name="fakeupload" class="fakeupload"  type="text" />
	<input id="file" name="image" class="realupload" type="file" onChange="this.form.fakeupload.value = this.value;" />
</div>
<input name="Submit" type="submit" id="submit" value="Upload">
</td></tr>
</table>
</form>
<img src="hr.png">
<br/>

<?php
 define ("MAX_SIZE","1024");
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
$txt = "http://k6usluta4do5t44fcm4kuh2srn5eyljy5cp7roq4xydlsixwy6xjfgid.onion/";
$errors=0;
 if(isset($_POST['Submit']))
 {

 	$image=$_FILES['image']['name'];

 	if ($image)
 	{
 	//get the original name of the file from the clients machine
 		$filename = stripslashes($_FILES['image']['name']);
 	//get the extension of the file in a lower case format
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
 	//if it is not a known extension, we will suppose it is an error and will not  upload the file,
	//otherwise we will do more tests
 if (

 ($extension != "jpg")
 && ($extension != "jpeg")
 && ($extension != "png")
 && ($extension != "gif")
 && ($extension != "bmp")
 && ($extension != "pdf")
 && ($extension != "rar")
 && ($extension != "zip")
 && ($extension != "txt")
 && ($extension != "doc")
 && ($extension != "docx")
 && ($extension != "ppt")
 && ($extension != "pptx")
 && ($extension != "xls")
 && ($extension != "avi")
 && ($extension != "3gp")
 && ($extension != "mp3")
 && ($extension != "mp4")
 && ($extension != "flv")
 && ($extension != "html")
 && ($extension != "css")
 && ($extension != "js")
 )
 		{
		//print error message
 			echo '<h1>Extension not allowed! <img src="no.png"> </h1>';
 			$errors=1;
 		}
 		else
 		{
//get the size of the image in bytes
//$_FILES['image']['tmp_name'] is the temporary filename of the file
//in which the uploaded file was stored on the server
$size=filesize($_FILES['image']['tmp_name']);
//compare the size with the maxim size we defined and print error if bigger
if ($size > MAX_SIZE*1024)
{
	echo '<h1>Image size is max 1MB <img src="no.png"> <br/>
	<small><small>(1Mb)</small></small></h1>';
	$errors=1;
}
//we will give an unique name, for example the time in unix time format
$image_name = md5(time()).'.'.$extension;
//the new name will be containing the full path where will be stored (images folder)
$newname="images/".$image_name;
//we verify if the image has been uploaded, and print error instead
$copied = copy($_FILES['image']['tmp_name'], $newname);
if (!$copied)
{
	echo '<h1>Error file upload <img src="no.png"> </h1>';
	$errors=1;
}
}}}
//If no errors registred, print the success message
 if(isset($_POST['Submit']) && !$errors)
 {
 	echo "

	<h1>Upload is finished <img src=\"ok.png\"> </h1>

	<img src=".$newname." width=\"300px\" id=\"uploaded\">

	<table>
	<tr><td id=\"text\">URL</td></tr>
	<tr><td id=\"code\"><a href=\"".$txt.$newname."\"><xmp>".$txt.$newname."</xmp></a></td></tr>

	<tr><td id=\"text\">html link</td></tr>
	<tr><td id=\"code\"><xmp><img src=\"".$txt.$newname."\"></xmp></td></tr>

	<tr><td id=\"text\">image name</td></tr>
	<tr><td id=\"code\"><xmp>".$image_name."</xmp></td></tr>

	</table>

	<img src=\"hr.png\">

	";

	 }

 ?>
<br/>
</br></br>
<div id="copyright"><a href="mailto:lin@ommmmmmiq65cbweoseups4pndieajosfgk7jzwraotrn6sxhqy6ik6qd.onion">Mail to Lin</a> - copyright(c)2020 - Lin's ImageHost</div>
</body>
</html>
</center>
