<!DOCTYPE html>
<html>
<head>
	<title>Snippet</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.2/css/bulma.css">
</head>
<body>
	<section class="hero is-medium is-primary is-bold">
		<div class="hero-body">
			<div class="container">
				<h1 class="title">
					<a href="/">Snippets</a>
				</h1>

				<h2 class="subtitle">
					A tutorial from the friendly folk at Laracasts.com.
				</h2>

				<p>
					<a href="/snippets/create" class="button">Create Snippet</a>
				</p>
			</div>
		</div>
	</section>
	
	<section class="section">
		<div class="container">
			{{ $slot }}
		</div>
	</section>

</body>
</html>