<html>

<body>
    <h1>Things</h1>

    <ul>
        @foreach ($things as $thing)
            <li>{{ $thing->id }} {{ $thing->name }}</li>
        @endforeach
    </ul>
</body>

</html>
