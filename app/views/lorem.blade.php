@extends('_master')

@section('css')
<link href="../css/bootstrap.css" rel="stylesheet">
@stop

@section('Lorem')

<br>
<a href="http://p3.dennisstevens.me">Return to Main Page</a>

<?php
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($pLength);
	echo '<p>'.implode('<p>', $paragraphs).'<br>';
?>


@stop