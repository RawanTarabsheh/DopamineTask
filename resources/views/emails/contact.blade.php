<!-- resources/views/emails/contact.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Contact Message</title>
</head>
<body>
    <h1>Contact Message from {{ $name }}</h1>
    <p>Email: {{ $email }}</p>
    <p>Message:</p>
    <p>{!! $messageContent !!}</p>
</body>
</html>
