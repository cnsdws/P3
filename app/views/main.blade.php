@extends('_master')

@section('css')
<link href="../css/bootstrap.css" rel="stylesheet">
@stop

@section('Lorem')

<h1 class="media-heading">Project 3 - Lorem Ipsum and Faux User Generator</h1>
    <!-- Main page section for the Lorem text generator -->
   	<h3>Lorem Ipsum Generator</h3>
	    <p>
	   	This tool will generate paragraphs of filler text in pseudo-Latin (Lorem Ipsum) for 
	   	your use. 
	    </p>
	
	    <h4> <a href="http://p3.dennisstevens.me/lorem">Generate Lorem</a> </h4>
	    	
	    <p>
	   	Here's a sample:
		        
			<?php
				$generator = new Badcow\LoremIpsum\Generator();
				$paragraphs = $generator->getParagraphs(1);
				echo '<p>'.implode('<p>', $paragraphs).'<br>';
			?> 
		</p>
			
@stop

@section('Users')
	<!-- Main page section for the user generator -->
	<h3>User Generator</h3>
	    <p>
	    	This tool will generate pseudo user information so you can populate databases or whatever.
	    </p>
		    
	   	<h4> <a href="http://p3.dennisstevens.me/users">Generate Users</a> </h4>
		    
	    <p>
	    	Here's an example:
			<br>

		   	<?php
				
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
			?>
		</p>

@stop