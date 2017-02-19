<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sweets shop</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<div class="ui center aligned container">
		<h1 class="ui pink block header"><i class="shop icon"></i>Sweets shop</h1>
	</div>
	<div>
		<table class="ui unstackable table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Sell</th>
					<th>Quantity</th>
					<th>Restock</th>
				</tr>
			</thead>
			<tbody>
					@foreach ($sweets as $sweet)
				<tr>
					<td id="id">{{ $sweet->id }}</td>
					<td id="name">{{ $sweet->name }}</td>


					<td>
						<button data-id="{{ $sweet->id }}" class="morebtn ui teal button">+</button>
					</td>
					<td>
						<span class="qty ui left aligned container">{{ $sweet->qty }} sweets</span>
					</td>
					<td>
						<button data-id="{{ $sweet->id }}" class="lessbtn ui yellow button">-</button>
					</td>
				</tr>
					@endforeach
			</tbody>
		</table>

	</div>

	<script> 
		window.Laravel = { 
			csrfToken : "{{csrf_token()}}"
		}; 
	</script>
	<script  type="text/javascript" src="{{mix('/js/app.js')}}"></script>
</body>
</html>