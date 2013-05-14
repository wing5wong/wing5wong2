@layout('layouts.whs')


@section('page_title')
	WHS Staff Portal
@endsection

	@section('content')
	
		{{ Asset::container('ckeditor')->scripts(); }}
		
			
		<section class="content-section">
			<header>Edit Page</header>
			<section class="content-area">
				{{ Form::open('page/edit','POST') }}
					{{ Form::hidden( 'id',$page->id ) }}
					
					<div class="post-body-wrapper">
					<fieldset class="post-body">
					<legend>Page Body</legend>
					<?php
					$ckeditor = new CKEditor();
					$ckeditor->editor('body',$page->body);
					?>
					</fieldset>
					</div>
					
					<section class="post-settings">
						<div class="post-setting-wrapper">
						<fieldset id="post-details">
						<legend>Post Details</legend>
							{{ Form::label('title','Title') }} <br />
							{{ Form::text( 'title',$page->title ) }} <br />
							
							<br />
							{{ Form::label('slug','Slug') }} <br />
							{{ Form::text( 'slug', '/page/view/' . $page->slug,array('class'=>'slug-link') ) }} <br />
							
						</fieldset>
						</div>
					</section>
					
					
						
					{{ Form::submit('Update Page Item') }}
					
				{{ Form::close() }}
			
			</section>	
		</section>
			
	@endsection   
	
