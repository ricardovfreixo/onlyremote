<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Only Remote Life</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<section class="hero is-dark">
	  <div class="hero-body">
	    <div class="container">
	      <h1 class="title">
	        Only<span class="has-text-grey-lighter">Remote</span>Life
	      </h1>
	    </div>
	    <div class="columns">
	    	<div class="column is-half"></div>
	    	<div class="column is-half has-text-right">
	    		<a href="/">Home</a>
	    		| <a href="/blog">Blog</a>
	    		| <a href="/jobs">Jobs</a>
	    		@if(Auth::guest())
	    			| <a href="/login">Login</a>
	    		@else
	    			| <a href="/logout">Logout</a>
	    		@endif
	    	</div>
	    </div>
	  </div>
	</section>
	@yield('content')
	<footer class="footer">
	  <div class="container">
	    <div class="content has-text-centered">
	      <p>
	        <strong>OnlyRemoteLife</strong> by the <em>Laravel UK Community</em>.
	      </p>
	    </div>
	  </div>
	</footer>
</body>
</html>