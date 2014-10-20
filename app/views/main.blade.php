@extends('_master')

@section('css')
<link href="../css/bootstrap.css" rel="stylesheet">
@stop

@section('Lorem')

<h1 class="media-heading">Project 3 - Lorem Ipsum and Faux User Generator</h1>
    <h2>Project 3</h2>
   		<h3>Lorem Ipsum Generator</h3>
		    <section>
		    This website will generate paragraphs of filler text in pseudo-Latin (Lorem Ipsum) for 
		    your use. 
		    <br>
		    <a href="http://p3.dennisstevens.me/lorem">Generate Lorem</a>
		    </section>
		    <br>
		    <section>
		    Here's a sample:
		  
			<?php
				$generator = new Badcow\LoremIpsum\Generator();
				$paragraphs = $generator->getParagraphs(1);
				echo '<p>'.implode('<p>', $paragraphs).'<br>';
			?> 
			</section>
			
@stop

@section('Users')

		<h3>User Generator</h3>
		    <p>This website will also generate pseudo user information so you can populate databases or whatever.</p>

		    <p>Here's an example:</p>

		    	<?php
								// use the factory to create a Faker\Generator instance
				$faker = Faker\Factory::create();

				// generate data by accessing properties
				echo 'Name: '.$faker->name;
				  // 'Lucy Cechtelar';
				echo '<br>';
				echo 'Address: '.$faker->address;
				  // "426 Jordy Lodge
				  // Cartwrightshire, SC 88120-6700"
				
				?>

@stop