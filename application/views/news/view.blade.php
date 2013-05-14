@layout('layouts.whs')


@section('page_title')
	WHS Staff Portal
@endsection

	@section('content')
			
				<section class="content-section">
				<header>
					{{ $news->title }} - {{ $news->author }}
				</header>
				
					<section class="content-area">
						{{ $news->body }}
						
						
						@if(Auth::check())
						<div class="view-options">
							{{ HTML::link("news/edit/$news->id", ' Edit',array('class'=>'button')) }}
							{{ HTML::link("news/delete/$news->id", 'Delete',array('class'=>'delete button')) }}
							
						</div>
						@endif
					</section>
					
			</section>
			
	
	@endsection   
	
