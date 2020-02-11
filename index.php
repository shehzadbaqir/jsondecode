<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>Untitled 3</title>
</head>

<body>

<?php if(isset($_POST['json'])){  
   $php_array=json_decode($_POST['json']);
   print_r($php_array);
}  ?>
<form>
  <input type="text" name="json" />
  <input type="submit" />
</form>
</body>
</html>
