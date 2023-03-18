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
    /* Reset styles */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    /* Set body styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        margin: 0;
    }

    /* Set h1 styles */
    h1 {
        font-size: 36px;
        color: #2e2e2e;
        text-align: center;
        margin-top: 50px;
    }

    /* Set ul styles */
    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    /* Set li styles */
    li {
        font-size: 24px;
        color: #2e2e2e;
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    /* Set p styles */
    p {
        font-size: 18px;
        color: #2e2e2e;
        margin-top: 20px;
        text-align: center;
    }


</style>
</html>
