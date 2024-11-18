<!DOCTYPE html>
<html>
<head>
    <title>Перегляд підприємства</title>
</head>
<body>
<h1>Перегляд підприємства</h1>
<p><strong>Код:</strong> {{ $enterprise->code }}</p>
<p><strong>Назва:</strong> {{ $enterprise->title }}</p>
<p><strong>Робочі:</strong> {{ $enterprise->employees }}</p>
<p><strong>Галузь:</strong> {{ $enterprise->industry }}</p>
<p><strong>Адреса:</strong> {{ $enterprise->address }}</p>
<a href="{{ route('enterprises.index') }}">Назад до списку</a>
</body>
</html>
