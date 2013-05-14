@layout('layouts.whs')


@section('page_title')
	WHS Staff Portal
@endsection

	@section('content')
			
		<section class="content-section">
		<header>Edit Link Item</header>
			<section class="content-area">
			
				
				{{ Form::open('link/edit','POST') }}
					{{ Form::hidden( 'id',$link->id ) }}
					
					<div class="post-body-wrapper">
						<fieldset class="post-body">
							<legend>Link Details</legend>
							{{ Form::label('src','Source') }} <br />
							{{ Form::text( 'src',$link->src ) }} <br />
							
							
							{{ Form::label('text','Link Text') }} <br />
							{{ Form::text('text',$link->text) }} <br />
							
							{{ Form::label('title','Link Title') }} <br />
							{{ Form::text('title',$link->title) }} <br />
						
						</fieldset>
					</div>
					
					<div class="post-setting-wrapper">
						<fieldset id="post-visibility">
							<legend>Link Options</legend>
							
							{{ Form::label('order_by','Sort Order') }}
							{{ Form::select('order_by', Link::$order_opts, $link->order_by) }}
							
						</fieldset>
					</div>
					<div class="post-setting-wrapper">
						<fieldset id="post-visibility">
						<legend>Post Visibility</legend>
							
							<?php
								$checked = $link->show_students == 1 ? true : false;
							?>
							{{ Form::checkbox('show_students',1, $checked ) }} 
							{{ Form::label('show_students','Show for students:') }}
							<br />
							
							
							
							<?php
								$checked = $link->show_staff == 1 ? true : false;
							?>
							{{ Form::checkbox('show_staff',1, $checked ) }} 
							{{ Form::label('show_staff','Show for staff:') }}
							<br />
						</fieldset>
					</div>
					
					{{ Form::submit('Update Link') }}
					
				{{ Form::close() }}
				
			</section>
			
				
		</section>
			
	@endsection   
	
