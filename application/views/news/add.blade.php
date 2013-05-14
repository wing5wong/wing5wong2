@layout('layouts.whs')


@section('page_title')
WHS Staff Portal
@endsection

@section('content')

{{ Asset::container('ckeditor')->scripts(); }}


<section class="content-section">
	<header>Add News Post</header>
	<section class="content-area">	

		{{ Form::open('news/add','POST') }}

		<div class="post-body-wrapper">
			<fieldset class="post-body">
				<legend>News Body</legend>
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
					<legend>Post Details</legend>

					{{ Form::label('title','Title') }}
					{{ $errors->has('title') ? '<span class="error"> - Invalid title. Required, between 2-255 characters</span>' :''}}

					{{ Form::text('title',Input::old('title')) }} 



					{{ Form::label('author','Author') }} 
					{{ $errors->has('author') ? '<span class="error"> - Invalid author. Required, between 2-255 characters</span>' :''}}

					{{ Form::text('author',Input::old('author')) }} 
				</fieldset>
			</div>

			<div class="post-setting-wrapper">
				<fieldset id="post-visibility">
					<legend>Post Visibility</legend>
					<label class="checkbox" for='important'>
						<input type="checkbox" name='important' id='important'>Important
					</label>

					<label class="checkbox" for='show_students'>
						<input type="checkbox" name='show_students' id='show_students' checked>Show Students
					</label>

					<label class="checkbox" for='show_staff'>
						<input type="checkbox" name='show_staff' id='show_staff' checked>Show Staff
					</label>

				</fieldset>

			{{ Form::submit('Add News Item',array('class'=>'btn btn-success')) }}
			</div>
		</section>






		<br />
		{{ Form::close() }}
		
	</section>
</section>


@endsection