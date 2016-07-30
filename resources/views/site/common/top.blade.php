<header>
	<div class="topbar show-for-medium">
		<div class="row column">
			<div class="logo center">
				<a href="/"><img src="/img/logo.png" alt="" /></a>
				<button onclick="searchhide()" class="search-icon"></button>
			</div>
		</div>
	</div>
	<div class="topnav">
		<div class="row column menu-centered">
			@if($topmenu)
			<ul class="menu show-for-medium menu-pc">
				@foreach($topmenu as $key => $value)
					<li {{ checkCurrent(url($value->url)) }}><a href="{{ CommonUrl::getUrl($value->url) }}">{!! $value->name !!}</a></li>
				@endforeach
			</ul>
			@endif
		</div>
	</div>
</header>
<div class="search" id="search">
	<div class="row">
		<div class="small-12 medium-6 small-centered columns">
			<form action="{{ route('site.search') }}" method="GET">
				<div class="input-group">
					<input name="name" type="text" value="" class="input-group-field" placeholder="Enter Game Name">
					<div class="input-group-button">
						<a class="button" onclick="$('.search-form').submit()"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
					</div>
				</div>
	        </form>
		</div>
	</div>
</div>