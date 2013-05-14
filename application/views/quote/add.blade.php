@layout('layouts.whs')


@section('page_title')
	WHS Staff Portal
@endsection

	@section('content')
	
		   {{ Asset::container('ckeditor')->scripts(); }}
	
	
			<section class="content-section">
				
			<header>Add Quote</header>
					<section class="content-area">
{{ Form::open('quote/add','POST') }}
		
		{{ Form::label('author','Author') }}
		{{ $errors->has('author') ? '<span class="error"> - Invalid author. Required, between 2-255 characters</span>' :''}}
		<br />
		{{ Form::text('author',Input::old('author')) }} 
		
	
		<br />{{ Form::label('quote','Quote') }} {{ $errors->has('quote') ? '<span class="error"> - Invalid quote. Required, between 10-255 characters(including html structure)</span>' :''}}
		<br />
		<?php
		$ckeditor = new CKEditor();
		$ckeditor->editor('quote',Input::old('quote'));
		?>
		{{ Form::submit('Add News Item') }}
		
	
	{{ Form::close() }}
		
			</section>
					
			</section>
			
			
		@endsection