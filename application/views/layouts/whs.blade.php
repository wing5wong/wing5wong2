<!DOCTYPE html>
<html>
<head>
	<title>
		@section('page_title')
		WHS Staff Portal
		
		@yield_section
	</title>
	
	
	@section('styles')
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	{{ Asset::styles() }}
	<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
  <![endif]-->
  @yield_section

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

</head>

<body class="gradient">
	
	
	<header id="page-header">
		<img src="/img/Picture1.png" />
		<hgroup>
			<h1>Wanganui High School</h1>
			<h2>Staff Portal</h2>
		</hgroup>
		<div class="search" style="position:absolute;top:50%;margin-top:-15px;right:16px;">
			<form method="GET" action="http://www.google.co.nz/search">
				<input id='inp' TYPE=text name=q size=40 maxlength=255 placeholder="Google Search" style="background:#F3F6F3;float:left;display:inline-block;width:auto;border-radius:8px 0 0 8px;border:1px solid #ccc;border-right:0;height: 30px;background:#fff;padding:4px 8px;outline:none;"/>
				<input type=submit value="" style="width:100px;float:left;display:inline-block;color:#fff;background:#38352A;border-radius:0 8px 8px 0;background:url('/img/google.png');height: 30px;border:1px solid #ccc;background-position: center center;background-repeat: no-repeat;background-color: #fff;"/>
			</form>
		</div>
	</header>
	@if(Auth::check())
	<nav id="admin-nav">
		<ul>
			<li>{{HTML::link('news','Manage News')}}</li>
			<li>{{HTML::link('link','Manage Links')}}</li>
			<li>{{HTML::link('contentsection','Manage Content')}}</li>
			<li>{{HTML::link('quote','Manage Quotes')}}</li>
			<li>{{HTML::link('page','Manage Pages')}}</li>
		</ul>
	</nav>
	@endif
	<nav id="page-nav">
		
		<ul>
			@foreach($links as $link)
			<li>
				{{ HTML::Link($link->src,$link->text,array('title'=>$link->title, 'data-toggle'=>"tooltip") ) }}
			</li>
			@endforeach
		</ul>
	</nav>	
	<div id="container" class="gradient"> 
		
		
		<section id="page-content">
			
			
			
			
			@section('content')
			@yield_section
			
		</section>

		<footer id="page-footer">
			@section('footer')
			<div class="contact"><a href="mailto:goldsbury.s@wanganuihigh.school.nz"><i class="icon-envelope"></i> Web portal manager - Sue Goldsbury</a></div>
			@yield_section
			@if( Auth::guest() )
			{{ Form::open('login','POST',array('class'=>'form form-inline')) }}
			<div id="open-form"><i class="icon-circle-arrow-left"></i></div>
			@if (Session::has('login_errors' ))
			<p><span class="error">Username or password incorrect</span></p>
			@endif
			
			{{ Form::text('username','',array('class'=>'input-small','placeholder'=>'username')) }}
			
			{{ Form::password('password',array('class'=>'input-small','placeholder'=>'password')) }}

			<label class="checkbox" for='remember'>
				<input type="checkbox" name='remember' id='remember'> Remember
			</label>
			
			{{ Form::submit('Login',array('class'=>'btn btn-success btn-small')) }}
			
			{{ Form::close() }}
			@else
			{{HTML::link('logout','Logout',array('style'=>'float:right;'))}}
			@endif
		</footer>
		
	</div>
	
	@section('scripts')
	<script type="text/javascript">
	$(document).ready(function(){
		var $el = $("#page-footer form");
		var $pf = $('footer');
		$pf_padding = parseInt($pf.css('padding-right'));
		$el.animate({
			marginRight: 
			parseInt(-1 * ($el.outerWidth() + $pf_padding -18))
		},150,"swing");
		$('#open-form').click( function(){
			var $el = $("#page-footer form")
			$el.animate({
				marginRight: 
				parseInt($el.css('marginRight'),10) == (0-$pf_padding) ? -1 * ($el.outerWidth() + $pf_padding -18 ) : 0 - $pf_padding
			},350,"swing");
		});


		$('a').tooltip({
			track: true,
			delay: 0,
			showURL: false,
			showBody: " - ",
			fade: 350
		});
	});

	</script>
	{{ Asset::scripts() }}
	<script type="text/javascript">
	$('a').tooltip({
		'placement': 'bottom'
	});
	</script>
	@yield_section
	
</body>
</html>

