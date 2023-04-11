<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/design.css">
    <title>Login</title>
</head>
<body>
    <div class="login-box">
        <h1>Login</h1>
        <form method="post" action="/login">
            @csrf
            <label>Username</label>
            <input type="text" name="username">
            <label>Password</label>
            <input type="password" name="password">
            <button type="submit">Login</button>
        </form>
        @if(isset($message))
            <p class="success">{{ $message }}</p>
        @endif
    </div>
</body>
</html>
