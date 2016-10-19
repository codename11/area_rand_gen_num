<!DOCTYPE html>
<html>
<head>
<title>Random number generation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="padding-top:20px">
<form method="post" class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	<div class="form-group">
		<label for="br1">No.1:</label> <input type="number" class="form-control" name="br1" value="<?php echo (isset($_POST['br1']) ? $_POST['br1'] : ''); ?>">
    </div>
	
	<div class="form-group">
		<label for="br2">No.2:</label> <input type="number" class="form-control" name="br2" value="<?php echo (isset($_POST['br2']) ? $_POST['br2'] : ''); ?>">
	</div>

  <button type="submit" class="btn btn-info" name="submit" value="Submit"><span class="glyphicon glyphicon-cog"></span> Generate</button>  
</form>

<?php
	function gen($br1,$br2){

	$br1=(int)$br1;
	$br2=(int)$br2;
	
    $Q=rand($br1,$br2);
	
	return $Q;
	
}

if(isset($_POST['br1']) && isset($_POST['br2'])){
	
	if($_POST['br1']==0 && $_POST['br2']==0){
		$_POST['br1']=0;
		$_POST['br2']=0;
	}
	
	echo "<p class='text-info'>"."This is random generated number from ".$_POST["br1"]. " to ".$_POST["br2"].": ".gen($_POST['br1'],$_POST["br2"])."<br>"."</p>";
}

?>

</div>
</body>
</html>

