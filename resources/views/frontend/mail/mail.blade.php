<!-- resources/views/frontend/mail/mail.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Global Tech Digital Contact Enquiry</title>
</head>
<body>

    <h1>Name: {{ $details['name'] }}</h1>
    <p>Email: {{ $details['email'] }}</p>
    <p>Phone: {{ $details['phone'] }}</p>
    <p>Message: {{ $details['message'] }}</p>
    
    <p>Thank you</p>
</body>
</html>
