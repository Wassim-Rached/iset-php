<form method="POST">
	<label for="mail">mail :</label>
	<input type="text" name="mail" id="mail"/>
	<input type="submit" name="submit" value="submit"/>
</form>

<?php
if(isset($_POST['submit'])){
	$expr="/^[a-zA-Z][a-zA-Z0-9]*[-.]?[a-zA-Z0-9]+@[a-zA-Z]{2,}\.[a-zA-Z]{2,4}$/";
	echo preg_match($expr,$_POST['mail']) ? "<p>valid</p>" : "<p>non valid</p>";
}
?>

