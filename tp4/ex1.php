<form method="POST">
	<label for="age">age :</label>
	<input type="number" name="age" id="age"/>
	<input type="submit" name="submit" value="submit"/>
</form>
<?php 

	if(isset($_POST['submit'])){
		$expr="/^[0-9]{0,2}$/";
		echo preg_match($expr,$_POST['age']) ? "<p>valid</p>" : "<p>non valid</p>";
	}

?>

