@extends('templates.app')

@section('content')


@include('templates.nav')

<!-- Slider -->
<section id="home-slider">

	<!-- Slider -->
	<div class="slider">
		<ul class="slides">
			<li>
				<img src="{{ URL::to('images/nature1.jpg') }}"> <!-- random image -->
				
			</li>
			<li>
				<img src="{{ URL::to('images/nature2.jpg') }}"> <!-- random image -->
				
			</li>
			<li>
				<img src="{{ URL::to('images/nature3.jpg') }}"> <!-- random image -->
				
			</li>
			<li>
				<img src="{{ URL::to('images/nature4.png') }}"> <!-- random image -->
				
			</li>
		</ul>
	</div>
</section>



																				
@endsection																						
