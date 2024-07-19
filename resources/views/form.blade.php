<!DOCTYPE html>
<html>
<head>
    <title>Submission Form</title>
</head>
<body>
<form action="/form" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required><br>
    <button type="submit">Submit</button>
</form>
</body>
</html>
