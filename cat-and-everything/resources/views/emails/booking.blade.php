<!DOCTYPE html>
<html>
<head>
    <title>Booking Request</title>
</head>
<body>
    <p>Booking Request Details:</p>
    <ul>
        <li>Name: {{ $data['fullName'] }}</li>
        <li>Email: {{ $data['emailAddress'] }}</li>
        <li>Contact Number: {{ $data['contactNumber'] }}</li>
        <li>Address: {{ $data['address'] }}</li>
    </ul>
</body>
</html>
