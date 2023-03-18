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
    .form-group {
        margin-bottom: 20px;
        width: 600px;
    }
    .answer-group{
        display: flex;
        justify-content: space-evenly;
        align-items: flex-start;
        width: 300px;
    }
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="radio"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    input[type="radio"] {
        width: auto;
        margin-right: 10px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn:hover {
        background-color: #0069d9;
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }


</style>

<a href="{{$id}}/applications">applicationsdons</a>


<form action="?" method="post">
    @csrf

    <div class="form-group">
        <label for="firstName">First Name:</label>
        <input type="text" name="firstname" id="firstName" placeholder="Enter your first name" class="@error('firstname') is-invalid @enderror" value="{{ old('firstname') }}">
        @error('firstname')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastname" id="lastName" placeholder="Enter your last name" class="@error('lastname') is-invalid @enderror" value="{{ old('lastname') }}">
        @error('lastname')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" name="email" id="email" placeholder="Enter your email address" class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="notes">Notes:</label>
        <input type="text" name="notes" id="notes" placeholder="Enter your notes" class="@error('notes') is-invalid @enderror" value="{{ old('notes') }}">
        @error('notes')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group answer-group">
        <label>Are you coming?</label>
        <input type="radio" value="yes" name="answer" id="yes" class="@error('answer') is-invalid @enderror" @if(old('answer') == 'yes') checked @endif>
        <label for="yes">Yes</label>
        <input type="radio" value="no" name="answer" id="no" class="@error('answer') is-invalid @enderror" @if(old('answer') == 'no') checked @endif>
        <label for="no">No</label>
        @error('answer')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


