<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Message:</strong> {{ $Emailmessage }}</p>
    <p><strong>Media:</strong> <a href="{{ asset($media_path) }}">Download Media</a></p>
</body>
</html>
