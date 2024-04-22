<html>

<body>
    <h1>Thing</h1>
    {{ $id->id }}
    @if ($editing ?? false)
        <form action="{{ route('MySQLCRUD.update', $id->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="thing_id" value="{{ $id->id }}">
            <input type="text" name="name_update" value="{{ $id->name }}">
            <input type="submit" value="Update">
        </form>
    @else
        {{ $id->name }}
        <a href="{{ route('MySQLCRUD.edit', $id->id) }}">Edit</a>
    @endif
    <a href="{{ route('MySQLCRUD.index') }}">Back</a>
</body>

</html>
