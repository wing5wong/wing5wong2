@layout('layouts.whs')


@section('page_title')
WHS Staff Portal
@endsection

@section('content')

{{ Asset::container('ckeditor')->scripts(); }}


<section class="content-section">
	<section class="content-area">
		{{ Form::open('contentsection/add','POST') }}
		
		
		<div class="post-body-wrapper">
			<fieldset class="post-body">
				<legend>Content Section Body</legend>
				<?php
				$ckeditor = new CKEditor();
				$ckeditor->editor('content',Input::old('content'));
				?>
			</fieldset>
		</div>
		
		
		
		
		
		
		<section class="post-settings">
			<div class="post-setting-wrapper">
				<fieldset id="post-details">
					<legend>Content Section Details</legend>
					{{ Form::label('header','Header') }}
					{{ Form::text('header',Input::old('header')) }} 
				</fieldset>
			</div>
			
			<div class="post-setting-wrapper">
				<fieldset id="post-visibility">
					<legend>Content Section Visibility</legend>

					{{-- Show for students --}}
					{{ Form::checkbox('show_students',1 ) }}
					{{ Form::label('show_students','Show for students:') }}
					<br />

					{{-- Show for staff --}}
					{{ Form::checkbox('show_staff',1 ) }}
					{{ Form::label('show_staff','Show for staff:') }} 
					<br />

					<br /><br />
					{{ Form::radio('side','left',true,array('id'=>'left')) }}{{ Form::label('left','left side') }}
					<br />
					{{ Form::radio('side','right',false,array('id'=>'right')) }}{{ Form::label('right','right side') }}
				</fieldset>
			</div>
		</section>

		{{ Form::submit('Add Content Section') }}
		

		{{ Form::close() }}
		
	</section>

</section>


@endsection