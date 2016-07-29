@if($breadcrumb)
<nav aria-label="You are here:" role="navigation">
	<ul class="breadcrumbs">
		<li><a href="{{ url('/') }}">A2ZGAME Homepage</a></li>
		@foreach($breadcrumb as $value)
			@if($value['link'])
				<li>
					<a href="{{ $value['link'] }}">{!! $value['name'] !!}</a>
				</li>
			@else
				<li>
					<span class="show-for-sr">Current: </span> {!! $value['name'] !!}
				</li>
			@endif
		@endforeach
	</ul>
</nav>
@endif