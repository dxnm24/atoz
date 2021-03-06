<div class="row small-up-2 medium-up-4 large-up-5">
	@foreach($data as $key => $value)
	<?php 
		// if(isset($value->seri) && $value->seri == ACTIVE) {
		if(isset($data->seri) && $data->seri == ACTIVE) {
			$checkSeri = true;
			$seriClass = ' class=seri';
			$url = url($type->slug.'/'.$value->slug);
		} else {
			$checkSeri = false;
			$seriClass = '';
			$url = url($value->slug);
		}
	?>
	<div class="column">
		<div class="callout item">
			<!-- 400x370 -->
			<a href="{{ $url }}" title="{!! $value->name !!}"{{ $seriClass }}>
				@if($checkSeri == true)
				<span><img alt="{!! $value->name !!}" title="{!! $value->name !!}" data-src="{{ url($value->image) }}" class="lazyload"></span>
				@else
				<img alt="{!! $value->name !!}" title="{!! $value->name !!}" data-src="{{ url($value->image) }}" class="lazyload">
				@endif
			</a>
			<h2><a href="{{ $url }}" title="{!! $value->name !!}">{!! $value->name !!}</a></h2>
		</div>
	</div>
	@endforeach
</div>