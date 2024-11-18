<!DOCTYPE html>
<html>
<head>
    <title>Додати підприємство</title>
</head>
<body>
<h1>Додати нове підприємство</h1>
<form action="{{ route('enterprises.store') }}" method="POST">
    @csrf
    <label for="code">Код:</label>
    <input type="text" name="code" required>
    <br>
    <label for="title">Назва:</label>
    <input type="text" name="title" required>
    <br>
    <label for="employees">Робочі:</label>
    <input type="number" name="employees" required>
    <br>
    <label for="industry">Галузь:</label>
    <input type="text" name="industry" required>
    <br>
    <label for="address">Адреса:</label>
    <input type="text" name="address" required>
    <br>
    <button type="submit">Додати</button>
</form>
<a href="{{ route('enterprises.index') }}">Назад до списку</a>
</body>
</html>
