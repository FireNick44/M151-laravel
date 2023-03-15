<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/github.min.css">
<style>
    .example {
        -webkit-box-shadow: none;
        background-color: #FFF;
        border-color: #DDD;
        border-radius: 4px 4px 0 0;
        border-style: solid;
        border-width: 1px;
        box-shadow: 0 0 15px rgba(0, 0, 0, .1);
        margin: 0 -15px 15px;
        padding: 15px;
        position: relative;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    input[type="datetime"],
    input[type="datetime-local"],
    input[type="search"],
    input[type="password"],
    input[type="time"],
    input[type="month"],
    select {
        border: 1px solid #aaa;
        border-radius: 2px;
        min-width: 250px;
        padding: 5px;
    }

    select {
        background: #fff;
    }

    input[type="time"],
    input[type="month"],
    input[type="date"] {
        padding: 0;
    }

    .example.bad {
        box-shadow: 0 0 20px rgba(255, 23, 23, .3);
    }

    .example.good {
        box-shadow: 0 0 20px rgba(0, 120, 60, .3);
    }

    .code {
        background-color: #F7F7F9;
        border: 1px solid #E1E1E8;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
        border-width: 1px;
        margin: -16px -15px 15px;
        padding: 9px 14px;
    }

    .code pre {
        background-color: rgba(0, 0, 0, 0);
        border: 0;
        margin-bottom: 0;
        margin-top: 0;
        padding: 0;
        white-space: nowrap;
        word-break: normal;
    }

    pre code {
        white-space: normal;
    }

    h2 {
        margin-top: 80px;
    }

    .page-header+h2 {
        margin-top: 20px;
    }

    h3 {
        margin: 40px 0 20px;
    }

    kbd .hljs-string,
    kbd .hljs-value {
        color: #E8FFB9 !important;
    }

    kbd .hljs-attribute {
        color: #77FDFD !important;
    }

    kbd .hljs-tag {
        color: #fff !important;
    }

    .example h4,
    .example h5 {
        margin-bottom: 20px;
    }

    hr {
        margin-top: 60px;
    }

    h1 {
        border-bottom: 1px solid #aaa;
        font-size: 40px;
    }
</style>

<form action="/form" method="post">
    @csrf
    <input type="text" name="firstname" id="firstName" placeholder="First Name"><br>
    <input type="text" name="lastname" id="lastName" placeholder="Last Name"><br>
    <input type="email" name="email" id="email" placeholder="Email address"><br>
    <input type="text" name="notes" id="notes" placeholder="Notes"><br>

    <input type="radio" value="yes" name="answer" id="yes">
    <label for="yes">dabei</label>
    <input type="radio" value="no" name="answer" id="no">
    <label for="no">nicht dabei</label>

    <button type="submit">schicken</button>
</form>

<a href="event/applications"></a>
