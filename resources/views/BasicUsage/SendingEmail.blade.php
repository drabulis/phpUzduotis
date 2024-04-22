<html>

<head>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <title>Send Email</title>
</head>

<body>
    <h2>Send Email</h2>
    <form action="{{ route('SendingEmail.sendEmail') }}" method="POST">
        @csrf
        <label for="sender_email">Sender's Email:</label><br>
        <input type="email" id="sender_email" name="sender_email" required><br><br>

        <label for="receiver_email">Receiver's Email:</label><br>
        <input type="email" id="receiver_email" name="receiver_email" required><br><br>

        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="4" required></textarea><br><br>

        <button type="submit">Send Email</button>
    </form>
</body>

</html>
