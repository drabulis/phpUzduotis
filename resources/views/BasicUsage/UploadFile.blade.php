<html>

<body>
    <h1>Upload File</h1>
    <form action="{{ route('UploadFile.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <input type="submit">
    </form>
</body>

</html>
