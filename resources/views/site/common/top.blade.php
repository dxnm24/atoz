<header class="show-for-medium">
	<div class="row column">
		<!-- <a href="/" class="logo"><img src="/img/logo.png" alt="" /></a> -->
		<a href="/" class="logo">A2ZGame</a>
		<form action="{{ route('site.search') }}" method="GET" class="search-form">
			<div class="input-group">
				<input name="name" type="text" value="" class="input-group-field" id="searchtext" placeholder="Enter Game Name">
				<div class="input-group-button">
					<a class="button" onclick="$('.search-form').submit()"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
				</div>
			</div>
        </form>
	</div>
</header>
<div class="topnav show-for-medium">
	<div class="row column">
		<ul class="menu">
			<li {{ checkCurrent(url('/'), 1) }}><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
			@if($topmenu)
				@foreach($topmenu as $key => $value)
					<li {{ checkCurrent(url($value->url)) }}><a href="{{ CommonUrl::getUrl($value->url) }}">{!! $value->name !!}</a></li>
				@endforeach
			@endif
		</ul>
	</div>
</div>