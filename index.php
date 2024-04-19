<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Gmailga xabar</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
   <div class="wrapper">
   	  <form method="post" action="index.php">
   	 	<h2> Gmail ga xabar yuborish</h2>
   	 	Elektron pochta :<br>
   	 	<input type="text" name="email"><br>
   	 	Mavzu :<br>
   	 	<input type="text" name="mavzu"><br>
   	 	Matn: <br>
   	 	<textarea name="matn"> </textarea><br>
   	 	<input type="submit" value="YUBORISH" name="submid">
   	   </form>
   	   <?php /*
   	 if(isset($_POST['submid'])){
   	 	$url="https://script.google.com/macros/s/AKfycbwhsoQQilpSIV77RT39PvA3LMIqeKGhamvX6_4qOhWnrc1n6fqtSFj_YHA9MagVQSac/exec";
   	 	$ch=curl_init($url);
   	 	curl_setopt_array($ch,[
          CURLOPT_RETURNTRENSFER => 1,
          CURLOPT_FOLLOWLOCATION =>true,
          CURLOPT_POSTFIELDS => http_build_query([
           "recipient" => $_POST['email'],
           "mavzu" =>$_POST['mavzu'],
           "matn" =>$_POST['matn']
          ])
   	 	 ]);
   	 	$result=curl_exec($ch);
   	 	echo $result;
   	 }*/
   	 ?>
 <?php 
if(isset($_POST['submit'])){
    $url="https://script.google.com/macros/s/AKfycbwhsoQQilpSIV77RT39PvA3LMIqeKGhamvX6_4qOhWnrc1n6fqtSFj_YHA9MagVQSac/exec";
    $ch=curl_init($url);
    curl_setopt_array($ch,[
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_POSTFIELDS => http_build_query([
            "recipient" => $_POST['email'],
            "mavzu" => $_POST['mavzu'],
            "matn" => $_POST['matn']
        ])
    ]);
    $result=curl_exec($ch);
    echo $result;
}
?>
   	 </div>

</body>
</html>