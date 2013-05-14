@layout('layouts.whs')


@section('page_title')
	WHS Staff Portal
@endsection

	@section('content')
	
		{{ Asset::container('ckeditor')->scripts(); }}
			
				<section class="content-section">
				
					<header>Edit Quote Item</header>
					<section class="content-area">
					{{ Form::open('quote/edit','POST') }}
						{{ Form::hidden( 'id',$quote->id ) }}
						
						{{ Form::label('author','Author') }} <br />
						{{ Form::text('author',$quote->author) }} <br />
						
						{{ Form::label('quote','Quote') }} <br />
						<?php
						$ckeditor = new CKEditor();
						$ckeditor->editor('quote',$quote->quote);
						
						?>
						
		
						{{ Form::submit('Update quote Item') }}
						
					{{ Form::close() }}
				
				</section>
				</section>
				
		@endsection   
	
