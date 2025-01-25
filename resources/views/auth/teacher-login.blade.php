<!DOCTYPE html>
<html>
<head>
    <title>Teacher Login</title>
</head>
<body>
    <h1>Teacher Login</h1>
    <form method="POST" action="{{ route('teacher.login') }}">
        @csrf
        <input type="email" name="teacher_email" placeholder="Email" required>
        <input type="password" name="teacher_email_password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
