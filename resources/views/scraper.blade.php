<!DOCTYPE html>
<html lang="en">
<style>
    .wrapper > .card:first-child .card-header {
        background-color: yellow;
        color: white;
    }
    .wrapper > .card:nth-child(2) .card-header {
        background-color: red;
        color: white;
    }
    .wrapper > .card:nth-child(3) .card-header {
        background-color: blue;
        color: white;
    }
</style>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<title>Laravel Scraper</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3 mt-5 wrapper">
				@foreach($data as $key => $value)
					<div class="card text-center">
					<h4 class="card-header">{{ $key }}</h4>
					<h4 class="card-body">
						<p class="card-text">{{ $value }}</p>
					</h4>
				</div>

				@endforeach

			</div>
		</div>
	</div>
</body>
</html>