@layout('layouts.whs')


@section('page_title')
	WHS Staff Portal
@endsection

	@section('content')
	
				<section class="content-section">
				
					<header>{{ $quote->author }}</header>
						<section class="content-area">
						
						{{ $quote->quote }}
						</section>
						
				</section><!-- #news-content -->
				
				
		@endsection   
	
