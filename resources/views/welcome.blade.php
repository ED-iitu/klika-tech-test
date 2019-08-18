<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .container{
                margin-left: 15px;
            }
            .content{
                margin-left: 25px;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <h3>API</h3>
        <hr>
        <h5>List of all Tracks</h5>
        <p>GET</p>
        <div class="content">
            <a href="{{route('tracks')}}">/track</a>
            <h5>Params</h5>
            <p>Example</p>
            <code>
                author:1
                genre:1
                year:2019
                sort:year
                paginateBy:3
            </code>
        </div>
        <h5>List of all Authors</h5>
        <p>Get</p>
        <div class="content">
            <a href="{{route('authors')}}">/authors</a>
        </div>
        <h5>List of all Genres</h5>
        <p>Get</p>
        <div class="content">
            <a href="{{route('genres')}}">/genres</a>
        </div>
        <h5>List of all Years</h5>
        <p>Get</p>
        <div class="content">
            <a href="{{route('years')}}">/years</a>
        </div>
    </div>

    </body>
</html>
