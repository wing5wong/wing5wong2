@layout('layouts.whs')


@section('page_title')
	WHS Staff Portal
@endsection
	
	@section('content')
			
			
			
		<section class="content-section">
		<header>Login!</header>
			<section class="content-area">
				<fieldset style="width:50%;margin:0 auto;">
				<legend>Login Details</legend>
				{{ Form::open('login','POST') }}
					@if (Session::has('login_errors' ))
						<p><span class="error">Username or password incorrect</span></p>
					@endif
					
					{{ Form::label('username','Username') }} <br />
					{{ Form::text('username') }} <br />
					
					{{ Form::label('password','Password') }} <br />
					{{ Form::password('password') }} <br />

					{{ Form::label('remember','Remember') }} <br />
					{{ Form::checkbox('remember') }} <br />
					
					{{ Form::submit('Login') }}
					
				{{ Form::close() }}
				</fieldset>
			</section>
				
		</section>
	@endsection
						