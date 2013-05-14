@layout('layouts.whs')


@section('page_title')
	WHS Staff Portal
@endsection

	@section('content')
	
			{{ Asset::container('ckeditor')->scripts(); }}
		   
	
			<section class="content-section">
			<header>Add Page</header>
				<section class="content-area">	

			
					{{ Form::open('page/add','POST') }}
					
					
					<div class="post-body-wrapper">
					
						<fieldset class="post-body">
						<legend>Page Body</legend>
							{{ $errors->has('body') ? '<span class="error"> - Invalid body. Required, between 10-255 characters(including html structure)</span>' :''}}
						
						<?php
						$ckeditor = new CKEditor();
						$ckeditor->editor('body',Input::old('body'));
						?>
						</fieldset>
					
					</div>
					
					
					<section class="post-settings">
						<div class="post-setting-wrapper">
							<fieldset id="post-details">
								<legend>Page Details</legend>
								
								{{ Form::label('title','Title') }}
									{{ $errors->has('title') ? '<span class="error"> - Invalid title. Required, between 2-255 characters</span>' :''}}
								
								{{ Form::text('title',Input::old('title')) }} 
								
							</fieldset>
						</div>
						
						
					{{ Form::submit('Add Page') }}
					</section>
					
							
							
							
							
							<br />
						{{ Form::close() }}
		
				</section>
			</section>
			
			
		@endsection