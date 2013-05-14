@layout('layouts.whs')


@section('page_title')
	WHS Staff Portal
@endsection

	@section('content')
	
		<div id="container">
			<header id="page-header">
				<hgroup>
					<h1>Wanganui High School</h1>
					<h2>Staff Portal</h2>
				
				</hgroup>
			
			</header>
			
			
			
			
			
			
			<section id="page-content">
			
			<nav id="page-nav" class="content-section">
				<ul>
					@foreach($links as $link)
					<li><a href="{{$link->src}}">{{$link->text}}</a></li>
					@endforeach
				</ul>
			</nav>
			
			<section class="content-section">
				@if (Session::has('errors'))
<div class="error">
        u got errors
		</div>
@endif

{{ Form::open('links/add','POST') }}
		
		{{ Form::label('src','Source') }} <br />
		{{ Form::text('src') }} <br />
		
		{{ Form::label('text','Link Text') }} <br />
		{{ Form::text('text') }} <br />
		
		{{ Form::label('title','Link Alternate text') }} <br />
		{{ Form::text('title') }} <br />
		
		
		{{ Form::submit('Add Link') }}
		
	{{ Form::close() }}
			
			</section>
					
			</section>
			
			
			<footer id="page-footer">
				&copy; Sean Anderson 2012
			
			</footer>
		
		
		
		
		</div>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
		function equalHeight(group) {
	var tallest = 0;
	group.each(function() {
		var thisHeight = $(this).height();
		if(thisHeight > tallest) {
			tallest = thisHeight;
		}
	});
	group.height(tallest);
}




$(document).ready(function() {
	equalHeight($(".news-article"));
});
		</script>
		
@endsection