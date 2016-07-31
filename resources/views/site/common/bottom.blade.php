@if($bottommenu)
<div class="bottom">
	<div class="row small-up-2 medium-up-6 large-up-7">
		@foreach($bottommenu as $key => $value)
		<div class="column">
			<div class="bottom-item">
				<a href="{{ CommonUrl::getUrl($value->url) }}"><i class="fa fa-angle-right" aria-hidden="true"></i> {!! $value->name !!}</a>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endif
<footer>
	<div class="row column">
		<div class="footer">
			<p class="copy">© MMXVI <a href="/" target="_blank">a2zgame.net</a></p>
			<p class="made-with-love">Made with ❤ in Hanoi</p>	
		</div>
	</div>
</footer>