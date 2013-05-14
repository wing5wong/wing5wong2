@layout('layouts.whs')


@section('page_title')
	WHS Staff Portal
@endsection

	@section('content')
			<section class="content-section">
				<header>
					Administration Index
				</header>
				<section class="content-area">
				
					<section class="admin-menu-wrapper">
					
						{{ HTML::link('news','Edit News') }}
					
					</section>
					<section  class="admin-menu-wrapper">
					
						{{ HTML::link('contentsection','Edit Content') }}
					
					</section>
					<section class="admin-menu-wrapper">
					
						{{ HTML::link('quote','Edit Quotes') }}
					
					</section>
					<section class="admin-menu-wrapper">
					
						{{ HTML::link('link','Edit Links') }}
					
					</section>
				
				</section>
				
				
			</section>
		@endsection