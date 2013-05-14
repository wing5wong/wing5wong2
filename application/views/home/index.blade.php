@layout('layouts.whs')


@section('page_title')
WHS Staff Portal
@endsection

@section('content')

<section id="news-content">
	
	<header>News <a href="news" id="news-all-link">see all news</a></header>
	
	
	
	@foreach($news as $news_post)
	<section class="news-wrapper">
		<article class="news-article @if($news_post->important == 1)important@endif">
			<hgroup>
				<header>
					{{ $news_post->title }}
				</header>
				<section class="news-date">
					{{ $news_post->created_at }}
				</section>
			</hgroup>
			
			<section class="news-content">
				{{ $news_post->body }}
			</section>
		</article>
		
	</section>
	@endforeach
	
	
	
</section><!-- #news-content -->

<section id="left-content">
	@foreach($contentSections as $contentSection)
	<section class="content-section">
		<header>{{$contentSection->header}}</header>{{$contentSection->content}}
	</section>
	@endforeach
	
	
	<section id="quote" class="content-section">
		<header>Quote</header>
		<blockquote>
			<p>{{ $quote->quote }}</p>
			<cite>{{ $quote->author }}</cite>
		</blockquote>
	</section>
	
</section>



<section id="right-content">
	@foreach($contentSectionsRight as $contentSection)
	<section class="content-section">
		<header>{{$contentSection->header}}</header>{{$contentSection->content}}
	</section>
	@endforeach
	
	<section id="library" class="content-section">
		<header>Latest books and reviews</header>
		
		<div id="w2a5f13868d568eddd0fc38ccee4cabe7"></div>
		
	</section>
</section>


@endsection


@section('footer')
@parent
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

$( function() {
	equalHeight($(".news-article"));
});
</script>


@endsection

@section('scripts')
@parent
<script type="text/javascript" charset="UTF-8" src="http://www.librarything.com/widget_get.php?userid=plan01&theID=w2a5f13868d568eddd0fc38ccee4cabe7"></script>
<script type="text/javascript">

$(document).ready( function(){
	var ul = $('.content-section ul').each(function(){
		var $this = $(this);

		$this.addClass('icons');
	});
	var li = $('.content-section li').each(function(){
		var $this = $(this);

		$('<i></i>', {
			class: 'icon-double-angle-right'
		}).prependTo($this.closest('li'));
	});
	var bq = $('blockquote').each(function(){
		var $this = $(this);

		$('<i></i>', {
			class: 'icon-quote-left'
		}).prependTo($this.closest('blockquote'));

		$('<i></i>', {
			class: 'icon-quote-right'
		}).appendTo($this.closest('blockquote'));
	});
});
</script>
@endsection
