@extends('_master')

@section('css')
	<link href="../css/bootstrap.css" rel="stylesheet">
@stop

@section('Users')

	<br>
	<a href="http://p3.dennisstevens.me">Return to Main Page</a>
	<br>

	<h3>Enter the number of Users you need to generate and press the button. It's that easy!!</h3>

	<form method = 'POST'>
		    <input type="number" name="uLength" placeholder="1-20" min="0" max="20" required id = 'uLength'>
		    <input type = 'submit' value = 'Generate'>	
	</form>
	<br>

	<?php
		
		$uLength = 0;
		if(isset($_POST['uLength'])){ $uLength = $_POST['uLength']; }

		for ($i = 0; $i < $uLength; $i++)
		{
			// use the factory to create a Faker\Generator instance
			$faker = Faker\Factory::create();

			// generate data by accessing properties
			echo 'Name: '.$faker->name;
			echo '<br>';
			echo 'Address: '.$faker->address;
			echo '<br>';
			echo 'Phone: '.$faker->phoneNumber;
			echo '<br>';
			echo 'Email: '.$faker->email;
			echo '<br>';
			echo '<br>';
		}
	?>

@stop