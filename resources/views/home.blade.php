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
			<li>Name</li>
			<li>Quantity</li>
			<button id="more">+</button>
			<button id="less">-</button>
		</ul>

	</div>

	<script> window.Laravel = { 
		csrfToken : "{{csrf_token()}}"
		}; 
	</script>
	<script  type="text/javascript" src="{{mix('/js/app.js')}}"></script>
</body>
</html>