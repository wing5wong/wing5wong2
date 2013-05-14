@layout('layouts.whs')


@section('page_title')
WHS Staff Portal
@endsection

@section('content')

<section class="content-section">

	<header>Links</header>

	@if(Auth::check())
	<section class="content-area">
		@if (Session::has('errors'))
		<div class="error">
			u got errors
		</div>
		@endif


		{{ Form::open('link/add','POST', array('class'=>'form-inline')) }}
		<fieldset>
			<legend>New Link:</legend>
			{{ Form::label('src','Source') }}
			{{ Form::text('src') }}
			{{ Form::label('text','Text') }}
			{{ Form::text('text') }}
			{{ Form::label('title','Alt Text') }}
			{{ Form::text('title') }}

			{{ Form::submit('Add Link',array('class'=>'btn btn-success')) }}
		</fieldset>
		{{ Form::close() }}


	</section>
	@endif

	<section class="content-area">

		<table class="table">

			<thead>
				<tr>
					<th width="40%">Src</th>
					<th width="20%">Text</th>
					<th width="20%">Title</th>
					<th width="20%">Options</th>
				</tr>
			</thead>
			@foreach($link_list->results as $link)
			<tr>

				<td>{{ HTML::link("$link->src","$link->src") }}</td>

				<td>{{ $link->text }}</td>




				<td>{{ $link->title }}</td>

				<td class="options">
					@if(Auth::check())
					{{ HTML::link("link/edit/$link->id",'Edit',array('class'=>'options-edit')) }}
					|
					{{ HTML::link("link/delete/$link->id",'Delete',array('class'=>'options-delete')) }}
					@endif
				</td>
			</tr>
			@endforeach
		</table>
		<?php echo $link_list->links(); ?>
		<?php echo "<div class='record-total'>records: " . $link_list->total . "</div>";?>


	</section>


</section>	

@endsection
