<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sweets shop</title>
</head>
<body>
	<h1>Sweets shop</h1>
	<div>
		<table>
			<tr>
				<td>Name</td>
				<td>Quantity</td>
			</tr>
			<tr>
				<td id="name"></td>
				<td id="qty"></td>
			</tr>
		</table>

	</div>

	<script> window.Laravel = { 
		csrfToken : "{{csrf_token()}}"
	}; 
</script>
<script  type="text/javascript" src="{{mix('/js/app.js')}}"></script>
</body>
</html>