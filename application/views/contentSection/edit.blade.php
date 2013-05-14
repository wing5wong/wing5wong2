@layout('layouts.whs')


@section('page_title')
WHS Staff Portal
@endsection

@section('content')

{{ Asset::container('ckeditor')->scripts(); }}

<section class="content-section">
	
	<header>Edit contentsection Item</header>
	<section class="content-area">
		
		{{ Form::open('contentsection/edit','POST') }}
		{{ Form::hidden( 'id',$contentSection->id ) }}
		
		
		<div class="post-body-wrapper">
			<fieldset class="post-body">
				<legend>Content Section Body</legend>
				<?php
				$ckeditor = new CKEditor();
				$ckeditor->editor('content',$contentSection->content);
				?>
			</fieldset>
		</div>
		
		
		<section class="post-settings">
			
			<div class="post-setting-wrapper">
				<fieldset id="post-details">
					<legend>Content Section Details</legend>
					
					{{ Form::label('header','Header') }}
					{{ Form::text('header',$contentSection->header) }}
					
				</fieldset>
			</div>

			<div class="post-setting-wrapper">
						<fieldset id="post-visibility">
							<legend>Order Options</legend>
							
							{{ Form::label('order_by','Sort Order') }}
							{{ Form::select('order_by', ContentSection::$order_opts, $contentSection->order_by) }}
							
						</fieldset>
					</div>
			
			<div class="post-setting-wrapper">
				<fieldset id="post-visibility">
					<legend>Content Section Visibility</legend>
					<?php
					$checked = $contentSection->show_students == 1 ? true : false;
					?>
					{{ Form::checkbox('show_students',1, $checked ) }} 
					{{ Form::label('show_students','Show for students:') }}
					<br />
					
					<?php
					$checked = $contentSection->show_staff == 1 ? true : false;
					?>
					{{ Form::checkbox('show_staff',1, $checked ) }} 
					{{ Form::label('show_staff','Show for staff:') }}

					<br /><br />
					{{ Form::radio('side','left',$contentSection->side == 'left',array('id'=>'left','checked')) }}{{ Form::label('left','left side') }}
					<br />
					{{ Form::radio('side','right',$contentSection->side == 'right',array('id'=>'right')) }}{{ Form::label('right','right side') }}
					
				</fieldset>
			</div>
		</section>
		
		
		
		
		{{ Form::submit('Update content section Item') }}
		
		{{ Form::close() }}
	</section>
</section><!-- #news-content -->


@endsection   

