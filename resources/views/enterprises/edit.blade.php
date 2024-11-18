<!DOCTYPE html>
<html>
<head>
    <title>Редагувати підприємство</title>
</head>
<body>
<h1>Редагувати підприємство</h1>
<form action="{{ route('enterprises.update', $enterprise->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="code">Код:</label>
    <input type="text" name="code" value="{{ $enterprise->code }}" required>
    <br>
    <label for="title">Назва:</label>
    <input type="text" name="title" value="{{ $enterprise->title }}" required>
    <br>
    <label for="employees">Робочі:</label>
    <input type="number" name="employees" value="{{ $enterprise->employees }}" required>
    <br>
    <label for="industry">Галузь:</label>
    <input type="text" name="industry" value="{{ $enterprise->industry }}" required>
    <br>
    <label for="address">Адреса:</label>
    <input type="text" name="address" value="{{ $enterprise->address }}" required>
    <br>
    <button type="submit">Оновити</button>
</form>
<a href="{{ route('enterprises.index') }}">Назад до списку</a>
</body>
</html>
