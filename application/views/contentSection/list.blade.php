@layout('layouts.whs')


@section('page_title')
WHS Staff Portal
@endsection

@section('content')
<section class="content-section">
	
	<header>Content section list</header>
	
	<section class="content-area">
		<table class="table">
			<thead>
				<tr>
					<th width="20%">Heading</th>
					<th width="60%">Content</th>
					<th width="20%">Options</th>
				</tr>
			</thead>
			@foreach($contentSections as $contentSection)
			<tr>
				<td>
					{{$contentSection->header}}
					<td>{{$contentSection->content}}</td>
					
					
					
					<td class="options">
						@if(Auth::check())
						{{ HTML::link("contentsection/edit/$contentSection->id",'Edit',array('class'=>'options-edit')) }}
						|
						{{ HTML::link("contentsection/delete/$contentSection->id",'Delete',array('class'=>'options-delete')) }}
						@endif
					</td>
					
				</tr>	
				@endforeach
			</table>
			
			
			@if(Auth::check())
			{{ HTML::link('contentsection/add', 'Add content section',array('class'=>'button')) }}
			
			@endif
			
			
		</section>
	</section><!--content -->@endsection