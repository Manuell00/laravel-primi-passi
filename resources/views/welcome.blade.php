<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Homepage</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        header {
            background-color: dodgerblue;
            height: 150px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        ul {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            list-style-type: none;
        }

        li {
            font-size: 16px;
            font-weight: 600;
            transition: transform 0.7s ease-in-out;

        }

        a {
            text-decoration: none;
            color: white;
        }

        li:hover {
            transform: scale(1.2);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
    </style>

</head>


<body>
    <header class="container">
        <ul>
            <li><a href="http://127.0.0.1:8001/user">User</a></li>
            <li><a href="http://127.0.0.1:8001/chi-siamo">Chi siamo</a></li>
        </ul>

    </header>

</body>

</html>