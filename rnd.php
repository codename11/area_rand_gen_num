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