@if($bottommenu)
<div class="bottom">
	<div class="row column box-title">
		<h3>More Categories</h3>
	</div>
	<div class="row small-up-2 medium-up-3 large-up-4">
		@foreach($bottommenu as $key => $value)
		<div class="column">
			<div class="bottom-item hide-for-small-only">
				<a href="{{ url($value->url) }}">
					<img src="{{ $value->image }}" alt="{!! $value->name !!}" title="{!! $value->name !!}">
					<span>{!! $value->name !!}</span>
				</a>
			</div>
			<div class="bottom-item-mobile show-for-small-only">
				<a href="{{ url($value->url) }}"><i class="fa fa-angle-right" aria-hidden="true"></i> {!! $value->name !!}</a>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endif
<footer>
	<div class="row column">
		<p class="copy">© MMXVI <a href="/" target="_blank">a2zgame.net</a> - <span class="made-with-love">Made with ❤ in Paradise</span></p>
	</div>
</footer>