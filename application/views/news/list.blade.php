@layout('layouts.whs')


@section('page_title')
	WHS Staff Portal
@endsection
	
	@section('content')
				<section class="content-section">
				
					<header>News</header>
					<section class="content-area">
					
					@if($news->total > 0)
						<table class="table table-striped">
							<thead>
								<tr>
									<th width="40%">Title</th>
									<th width="15%">Author</th>
									<th width="15%">Created</th>
									<th width="15%">Updated</th>
									<th width="15%">Options</th>
								</tr>
							</thead>
							
						
							@foreach($news->results as $news_post)
							<tr @if($news_post->important == 1)class="warning" @endif>
									<td>{{ $news_post->title }}</td>
									<td>{{ $news_post->author }}</td>
									<td>{{ $news_post->created_at }}</td>
									<td>{{ $news_post->updated_at }}</td>
								
								
								<td class="options">
								{{ HTML::link("news/view/$news_post->slug",'View',array('class'=>'options-view')) }}
								@if(Auth::check())
									|
									{{ HTML::link("news/edit/$news_post->id",'Edit',array('class'=>'options-edit')) }}
									|
									{{ HTML::link("news/delete/$news_post->id",'Delete',array('class'=>'options-delete')) }}
								@endif
								</td>
								
							</tr>
							@endforeach
						
						
						</table>
						<?php echo $news->links(); ?>
						<?php echo "<div class='record-total btn'>records: " . $news->total . "</div>";?>
						
						@else
						<p>No entries found</p>
						@endif
						@if(Auth::check())
					{{ HTML::link('news/add', 'Add news item',array("class"=>"btn btn-success pull-right")) }}
					@endif
					
					
					</section>
					
				</section><!-- #news-content -->
				
				
				@endsection
