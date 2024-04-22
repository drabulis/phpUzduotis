<html>

<body>
    <h1>Edit Thing</h1>
    <form method="post" action="{{ route('MySQLCRUD.update', $thing->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ $thing->name }}">
        </div>
        <button type="submit">Update Thing</button>
    </form>
</body>

</html>
