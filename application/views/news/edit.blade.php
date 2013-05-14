@layout('layouts.whs')


@section('page_title')
WHS Staff Portal
@endsection

@section('content')

{{ Asset::container('ckeditor')->scripts(); }}


<section class="content-section">
	<header>Edit News Item</header>
	<section class="content-area">
		{{ Form::open('news/edit','POST') }}
		{{ Form::hidden( 'id',$news->id ) }}
		
		<div class="post-body-wrapper">
			<fieldset class="post-body">
				<legend>News Body</legend>
				<?php
				$ckeditor = new CKEditor();
				$ckeditor->editor('body',$news->body);
				?>
			</fieldset>
		</div>
		
		<section class="post-settings">
			<div class="post-setting-wrapper">
				<fieldset id="post-details">
					<legend>Post Details</legend>
					{{ Form::label('title','Title') }}
					{{ Form::text( 'title',$news->title ) }} <br />
					
					
					{{ Form::label('author','Author') }}
					{{ Form::text('author',$news->author) }} <br />
					
					{{ Form::label('slug','Slug') }}
					{{ Form::text( 'slug', '/news/view/' . $news->slug,array('class'=>'slug-link') ) }} <br />
				</fieldset>
			</div>
			
			<div class="post-setting-wrapper">
				<fieldset id="post-visibility">
					<legend>Post Visibility</legend>
					
					
					<label class="checkbox" for='important'>
						<input type="checkbox" name='important' id='important' checked="$news->important">Important
					</label>

					<label class="checkbox" for='show_students'>
						<input type="checkbox" name='show_students' id='show_students' checked="$news->show_students">Show Students
					</label>

					<label class="checkbox" for='show_staff'>
						<input type="checkbox" name='show_staff' id='show_staff' checked="$news->show_staff">Show Staff
					</label>
				</fieldset>
				{{ Form::submit('Update News Item',array('class'=>'btn btn-success')) }}
			</div>
		</section>
		
		
		
		<br />
		
		{{ Form::close() }}
		
	</section>	
</section>

@endsection   

