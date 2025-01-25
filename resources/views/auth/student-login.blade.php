<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
</head>
<body>
    <h1>Student Login</h1>
    <form method="POST" action="{{ route('student.login') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
