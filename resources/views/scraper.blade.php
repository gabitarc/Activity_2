<!DOCTYPE html>
<html lang="en">
<style>
    .wrapper > .card:first-child .card-header {
        background-color:  #ecc97e;
        color: white;
    }
    .wrapper > .card:nth-child(2) .card-header {
        background-color:  #f89280;
        color: white;
    }
    .wrapper > .card:nth-child(3) .card-header {
        background-color:  #7fb3da;
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
	<div class="row">
		<h3 align="center">Banco de Datos Actualizado </h3>
		<h3 align="center">Coranavirus a nivel Mundial</h3>
		<div class="col-md-6 offset-md-3 mt-5 wrapper">
			@foreach($data as $key => $value)
				<div class="card text-center">
				@switch($key)
				    @case('Coronavirus Cases:')
				        <h4 class="card-header">Casos Confirmados de Coronavirus</h4>
				        @break
				    @case('Deaths:')
				        <h4 class="card-header">Fallecidos</h4>
				        @break
				 
				    @default
				        <h4 class="card-header">Recuperados</h4>
				@endswitch
				<h4 class="card-body">
					<p class="card-text">{{ $value }}</p>
				</h4>
			</div>

			@endforeach

		</div>
	</div>
</body>
</html>