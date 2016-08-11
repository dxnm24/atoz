<?php 
	$extendData = array(
			'is404' => true,
			'meta_title' => '',
			'meta_keyword' => '',
			'meta_description' => '',
			'meta_image' => '',
		);
?>
@extends('site.layouts.master', $extendData)

@section('title', PAGENOTFOUND)

@section('content')
<div class="box">
	<div class="row column box-title">
		<h1>{{ PAGENOTFOUND }}</h1>
	</div>
	<div class="row column">
		<p>The requested URL was not found on this server. Please play more games at <a href="/"><strong>here</strong></a></p>
	</div>
</div>
@endsection