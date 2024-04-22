<html>

<body>
    <form action="{{ route('PostForm.create') }}" method="POST">
        @csrf
        <div>
            <label for="name">Thing</label><br/>
            <input type="text" id="name" name="name"><br/>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>
