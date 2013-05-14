@layout('layouts.whs')


@section('page_title')
	WHS Staff Portal
@endsection
	
	@section('content')
				<section class="content-section">
				
					<header>Quotes list</header>
					
					<section class="content-area">
					
					<table class="table">
						<thead>
							<tr>
								<th width="60%">Quote</th>
								<th width="20%">Author</th>
								<th width="20%">Options</th>
							</tr>
						</thead>
					@foreach($quotes as $quote)
					<tr>
						<td>
							<?php if( (strlen($quote->quote)) <=80 ){
								echo htmlentities($quote->quote);
							}
							else{
								echo htmlentities(substr($quote->quote,0,79)) . "...";}
								?>
								</td>
						<td>{{$quote->author}}</td>
						
						
						<td class="options">
						{{ HTML::link("quote/view/$quote->id",'View',array('class'=>'options-view')) }}
						@if(Auth::check())
							|
							{{ HTML::link("quote/edit/$quote->id",'Edit',array('class'=>'options-edit')) }}
							|
							{{ HTML::link("quote/delete/$quote->id",'Delete',array('class'=>'options-delete')) }}
						@endif
							</td>
							
					</tr>	
					@endforeach
					</table>
					
					@if(Auth::check())
					{{ HTML::link('quote/add', 'Add quote',array('class'=>'button')) }}
					@endif
					
					</section>
				</section><!--content -->@endsection