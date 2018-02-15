<!DOCTYPE html>
<html>
<head>
	<title>{{$title or 'Central de Processos Digitais'}}</title>
</head>
<body>

	@yield('content')

	@stack('scripts')
</body>
</html>