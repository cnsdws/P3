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
		    your use. One paragraph is provided here: 
		    </section>
		    <br>
		    <section>
			<?php
				$generator = new Badcow\LoremIpsum\Generator();
				$paragraphs = $generator->getParagraphs(1);
				echo '<p>'.implode('<p>', $paragraphs).'<br>';
			?>
			</section>
			<section>
		    If you want more, simply type in the URI <h5>http://P3.dennisstevens.me/lorem/# </h5> where # is 
		    the number of paragraphs you want in total. That way you can just use the URI like a 
		    utility and don't have to come back to the main page.
			</section>

			
@stop

@section('Users')

		<h3>User Generator</h3>
		    <p>This website will generate paragraphs of filler text in pseudo-Latin for your use.an be added as options.

@stop