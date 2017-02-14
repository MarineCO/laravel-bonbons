<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sweets shop</title>
</head>
<body>
	<h1>Sweets shop</h1>
	<div>
		<ul>

		@foreach ($sweets as $sweet)

			<li>{{ $sweet->name }}</li>

		@endforeach

		</ul>

		<button id="more">+</button>
		<button id="less">-</button>
	</div>

	<script  type="text/javascript" src="{{mix('/js/app.js')}}"></script>
</body>
</html>