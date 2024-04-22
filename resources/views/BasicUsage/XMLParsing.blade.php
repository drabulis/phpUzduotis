<things>
    @foreach ($things as $thing)
        <thing>
            <id>{{ $thing['id'] }}</id>
            <name>{{ $thing['name'] }}</name>
        </thing>
    @endforeach
</things>
