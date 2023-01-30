<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>This is about business</h1>
        <p>Following business here</p>
        <ul>
            @foreach($businesses as $b)
                <li>{{ $b }}</li>
            @endforeach
        </ul>
        <p>You are currently viewing : {{ $type }}</p>
    </div>
</body>
</html>