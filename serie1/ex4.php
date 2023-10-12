<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $birthdate = $_POST['date'];

    if (!empty($birthdate)) {

		$birthdate_year = explode('-',$birthdate)[0];

		$current_year = date('Y');

		echo "your age is " . $current_year - $birthdate_year;
	} else {
        echo "Please enter a valid date.";
    }
}
?>

<form method="POST">
    <label for="date">Date of Birth:</label>
    <input type="date" name="date" />
    <button type="submit" value="SUBMIT">Submit</button>
</form>
