<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Hotel Ébano - {{ $title ?? ''}}</title>
	@vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body style="padding-top: 70px;">
    {{ $slot }}
</body>
</html>