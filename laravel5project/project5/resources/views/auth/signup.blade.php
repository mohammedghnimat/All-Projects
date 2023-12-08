<!-- resources/views/auth/signup.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
</head>
<body>

    <h2>Signup Form</h2>

    <form method="POST" action="{{ route('signup') }}">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
        <input type="hidden" name="user-type" value="2">
        <button type="submit">Signup</button>
    </form>

</body>
</html>
