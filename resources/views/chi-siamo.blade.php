<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Chi-siamo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        .button-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: dodgerblue;
            color: white;
            text-decoration: none;
            font-size: 12px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 600;
            border-radius: 10px;
            transition: background-color 0.3s ease-in-out;
        }

        .button-link:hover {
            background-color: deepskyblue;
        }
    </style>

</head>


<body>
    <h1>La nostra azienda è composta da :</h1>
    <ul>
        @foreach ($family as $family_member)
        <li>{{ $family_member }}</li>
        @endforeach
    </ul>

    <a href="http://127.0.0.1:8001/" class="button-link">Torna alla Home Page</a>

</body>

</html>