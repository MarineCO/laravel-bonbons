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
					<th>Name</th>
					<th>Quantity</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th id="name"></th>
					<th id="qty"></th>
				</tr>
			</tbody>
		</table>

	</div>

	<script> window.Laravel = { 
		csrfToken : "{{csrf_token()}}"
	}; 
</script>
<script  type="text/javascript" src="{{mix('/js/app.js')}}"></script>
</body>
</html>