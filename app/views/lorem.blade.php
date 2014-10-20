@extends('_master')

@section('css')
	<link href="../css/bootstrap.css" rel="stylesheet">
@stop

@section('Lorem')

	<br>
	<a href="http://p3.dennisstevens.me">Return to Main Page</a>
	<br>

	<h3>Enter the number of paragraphs you need to generate and press the button. It's that easy!!</h3>

	<form method = 'POST'>
		    <input type="number" name="pLength" placeholder="1-20" min="0" max="20" required id = 'pLength'>
		    <input type = 'submit' value = 'Generate'>	
	</form>
	<br>

	<?php
		$pLength = 0;
		if(isset($_POST['pLength'])){ $pLength = $_POST['pLength']; }
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($pLength);
		echo '<p>'.implode('<p>', $paragraphs).'<br>';
	?>
@stop