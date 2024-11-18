<!DOCTYPE html>
<html>
<head>
    <title>Список підприємств</title>
</head>
<body>
<h1>Список підприємств</h1>
@if (session('success'))
    <div>{{ session('success') }}</div>
@endif
<a href="{{ route('enterprises.create') }}">Додати нове підприємство</a>
<table border="1">
    <thead>
    <tr>
        <th>Код</th>
        <th>Назва</th>
        <th>Робочі</th>
        <th>Галузь</th>
        <th>Адреса</th>
        <th>Дії</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($enterprises as $enterprise)
        <tr>
            <td>{{ $enterprise->code }}</td>
            <td>{{ $enterprise->title }}</td>
            <td>{{ $enterprise->employees }}</td>
            <td>{{ $enterprise->industry }}</td>
            <td>{{ $enterprise->address }}</td>
            <td>
                <a href="{{ route('enterprises.show', $enterprise->id) }}">Переглянути</a>
                <a href="{{ route('enterprises.edit', $enterprise->id) }}">Редагувати</a>
                <form action="{{ route('enterprises.destroy', $enterprise->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Видалити</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
