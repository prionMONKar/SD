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
        <h1>Service</h1>
        <p>Following services are here.</p>
        <ul>
            @foreach($services as $d)
            <li>{{ $d }}</li>
            @endforeach
        </ul>
        <p>What services you want : {{ $type }}</p>
    </div>
</body>
</html>