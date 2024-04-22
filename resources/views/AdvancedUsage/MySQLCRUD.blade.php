<html>

<body>
    <h1>Things</h1>
    <div>
        <form method="post" action="{{ route('MySQLCRUD.store') }}">
            @csrf
            <input type="text" name="name">
            <button type="submit">Add new thing</button>
        </form>
    </div>
    <div>
        <ul>
            @foreach ($things as $thing)
                <li><div>
                    {{ $thing->id }}
                    {{ $thing->name }}
                    <a href="{{ route('MySQLCRUD.show', $thing->id) }}">View</a>
                    <form method="post" action="{{ route('MySQLCRUD.destroy', $thing->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
                </li>
            @endforeach
        </ul>
        {{ $things->links() }}
    </div>
</body>

</html>
