<html>
<head></head>

<link rel="stylesheet" href={{ URL::asset('css/myFont.css')}}>
<body>
	<p style="font-family:Arial">Hello How are you</p>

	{{$email}}<br>
	{{bcrypt($password)}}

</body>
</html>
