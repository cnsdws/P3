@extends('_master')

@section('css')
	<link href="../css/bootstrap.css" rel="stylesheet">
@stop

@section('Users')

	<br>
	<a href="http://p3.dennisstevens.me">Return to Main Page</a>
	<br>

	<h3>Enter the number of Users you need to generate and press the button. It's that easy!!</h3>

	<!-- This section sets up the parameters for the user generation -->
	<form method = 'POST'>
		    Number of users: <input type="number" name="uLength" placeholder="1-20" min="0" max="20" required id = 'uLength'> <br>
		    Include: <br>
		    <input type="checkbox" name="uName" value='uName' checked />  Name<br>
		    <input type="checkbox" name="uAddress" value='uAddress' checked />  Address<br>
		    <input type="checkbox" name="uPhone" value='uPhone' checked />  Phone Number<br>
		    <input type="checkbox" name="uMail" value='uMail' checked />  Email<br><br>
		    <input type = 'submit' value = 'Generate'>	
	</form>
	<br>

	<!-- This section generates the users -->
	<?php
		
		$uLength = 0;
		if(isset($_POST['uLength'])){ $uLength = $_POST['uLength']; }

		for ($i = 0; $i < $uLength; $i++)
		{
			// use the factory to create a Faker\Generator instance
			$faker = Faker\Factory::create();

			// generate data by accessing properties
			if(isset($_POST['uName'])){ echo 'Name: '.$faker->name;
				echo '<br>'; }

			if(isset($_POST['uAddress'])){ echo 'Address: '.$faker->address;
			echo '<br>'; }

			if(isset($_POST['uPhone'])){ echo 'Phone: '.$faker->phoneNumber;
			echo '<br>'; }

			if(isset($_POST['uMail'])){ echo 'Email: '.$faker->email;
			echo '<br>'; }

			echo '<br>';
		}
	?>

@stop