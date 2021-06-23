<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form method="POST">
        <label>Email</label>
        <input type="text" name="email"><br>
        <label>password</label>
        <input type="text" name="password"><br>
        <input type="submit" name="submit">
    </form>
@foreach ( $errors->all() as $er)
    <p>{{ $er }}</p><br>
@endforeach
<p>{{ session("err") }}</p>
</body>
</html>
