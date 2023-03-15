<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dabeii</title>
</head>
<body>
    <h1>dabeii sind:</h1>

    <ul>
        @foreach($applications as $application)
            <li>{{ $application -> firstname }} {{ $application -> lastname }}</li>
       @endforeach
    </ul>

    <p>Anzahl der Personen die nich dabeii; {{$declinedapplications}}</p>
</body>
</html>
