@layout('layouts.whs')


@section('page_title')
	WHS Staff Portal
@endsection
	
	@section('content')
				<section class="content-section">
				
					<header>Page List</header>
					<section class="content-area">
					
					
						
						<table class="table">
							<thead>
								<tr>
									<th width="55%">Title</th>
									<th width="15%">Created</th>
									<th width="15%">Updated</th>
									<th width="15%">Options</th>
								</tr>
							</thead>
							
						@foreach($pages->results as $page)
						<tr>
								<td>{{ $page->title }}</td>
								<td>{{ $page->created_at }}</td>
								<td>{{ $page->updated_at }}</td>
							
							
							<td class="options">
							{{ HTML::link("page/view/$page->slug",'View',array('class'=>'options-view')) }}
							@if(Auth::check())
								|
								{{ HTML::link("page/edit/$page->id",'Edit',array('class'=>'options-edit')) }}
								|
								{{ HTML::link("page/delete/$page->id",'Delete',array('class'=>'options-delete')) }}
							@endif
							</td>
							
						</tr>
						@endforeach
						</table>
						<?php echo $pages->links(); ?>
						<?php echo "<div class='record-total'>records: " . $pages->total . "</div>";?>
						@if(Auth::check())
					{{ HTML::link('page/add', 'Add Page item',array("class"=>"button")) }}
					@endif
					
					
					</section>
					
				</section><!-- #news-content -->
				
				
				@endsection
