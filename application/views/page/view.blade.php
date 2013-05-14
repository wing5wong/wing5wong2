@layout('layouts.whs')


@section('page_title')
	WHS Staff Portal
@endsection

	@section('content')
			
				<section class="content-section">
				<header>{{ $page->title }}
				
				</header>
					<section class="content-area">
						{{ $page->body }}
					</section>
					
			</section>
			
	
	@endsection   
	
