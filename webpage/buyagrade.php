<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Buy Your Way to a Better Education!</title>
	<link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Buy Your Way to a Better Education!</h1>

<p>
	The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
</p>

<hr />
<form action="sucker.php" method="post">
	<h2>Give Us Your Money</h2>
	<dl>
		<dt>Name</dt>
		<dd>
			<?php
                $studentName = "";
                $section = "";
                $credit_card = "";
                $card = "";
                if(isset($_POST['studentName']))
                {
                    $studentName = $_POST['studentName'];
                }
                else if(isset($_POST['section']))
                {
                    $section = $_POST['section'];
                }
                else if (isset($_POST['credit_card']))
                {
                    $credit_card = $_POST['credit_card'];
                }
                else if (isset($_POST['card']))
                {
                    $card = $_POST['card'];
                }

                ?>
			<input type="text" id="studentName" name="studentName" value="<?= $studentName;?>">
		</dd>

		<dt>Section</dt>
		<dd>
			<select name="section" value="<?= $section?>">
				<option value="" disabled selected>(Select a section)</option>
				<option value="#001">#001</option>
				<option value="#002">#002</option>
				<option value="#003">#003</option>
			</select>
		</dd>

		<dt>Credit Card</dt>
		<dd>
			<input type="text" name="credit_card" value="<?= $credit_card?>">
			<p><input type="radio" name="card" value="<?= $card?>">Visa </p>
			<p><input type="radio" name="card" value="<?= $card ?>">Master Card</p>
		</dd>
	</dl>

	<div>
		<input type="submit" value="I am a giant sucker.">
	</div>
</form>

</body>
</html>