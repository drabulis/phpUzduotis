<!DOCTYPE html>
<html>

<head>
    <title>Uzduotis</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered table-striped">
        <tr>
            <th>Basic usage</th>
            <th>Advanced usage</th>
            <th>Other</th>
        </tr>
        <tr>
            <td>
                <a href="{{ route('GetForm') }}">Get form</a>
            </td>
            <td>
                <a href="{{ route('LaravelPagination') }}">Laravel pagination</a>
            </td>
            <td>
                <a>Livewire: passing value from one component to another</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('PostForm.index') }}">POST form</a>
            </td>
            <td>
                <a href="{{ route('MySQLCRUD.index') }}">MySQL CRUD</a>
            </td>
            <td>
                <a>Broadcasting using Laravel
                    Echo and Pusher.com</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('JSONParsing') }}">Remote JSON parsing</a>
            </td>
            <td>
                <a href="{{ route('RegistrationAuthorization') }}">Registration and authorization</a>
            </td>
            <td>
                <a>Job queues management</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('XMLParsing') }}">Remote XML parsing</a>
            </td>
            <td>
                <a href="{{ route('AuthorizationMultipleGuards') }}">Authorization using multiple guards</a>
            </td>
            <td>
                <a>Creating and using basic service providers</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('UploadFile.index') }}">Local file upload</a>
            </td>
            <td>
                <a href="{{ route('CustomMiddleware') }}">Custom middleware</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('SendingEmail') }}">Sending emails using MailJet</a>
            </td>
            <td>
                <a href="{{ route('ViteAssetCompilation') }}">Setting up Vite asset compilation</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('CSRFProtection') }}">Implementing CSRF protection in forms</a>
            </td>
            <td>
                <a href="{{ route('RequestValidation') }}">Request validation</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('FormValidation') }}">Form validation</a>
            </td>
            <td>
                <a href="{{ route('BasicUnitTest') }}">Basic use of Unit Tests</a>
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <a href="{{ route('BasicFeatureTest') }}">Basic use of Feature Tests</a>
            </td>
    </table>
</body>

</html>
