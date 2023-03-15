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
<div class="centered" >
    <h1>Alle Events</h1>
</div>


<table class="tableWrapper">
    @foreach($events as $event)
    <tr class="tableWrapper">
        <td>
            <a href="/event/{{$event->id}}">
                <h2>
                {{ $event -> title }}
                </h2>
            </a>
            <small>
            {{ $event -> date }}
            </small>
        </td>
        <td>
            <small>
                {{ $event -> description }}
            </small>
        </td>
    </tr>
    @endforeach
</table>

</body>
<style>
    .centered{
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .tableWrapper{
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }
    .tableWrapper{
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
        max-width: 500px;
    }
</style>
</html>
