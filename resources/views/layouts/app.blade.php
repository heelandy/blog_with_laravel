<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/app.css') }} ">
    <title>Posty</title>
</head>

<body class="bg-gray-300">
    <ul>
        <nav class="p-6 bg-white flex justify-between">
            <ul class="flex items-center">
                <li>
                    <a href=""class="p-3"> Home</a>
                </li>
                <li><a href=""class="p-3">Dashboard </a>
                </li>
                <li> <a href=""class="p-3"> Post</a>
                </li>
            </ul>

            <ul class="flex items-center">
                <li>
                    <a href=""class="p-3">Heel</a>
                </li>
                <li><a href=""class="p-3">Login </a>
                </li>
                <li> <a href=""class="p-3">Register</a>
                </li>
                <li> <a href=""class="p-3">Logout</a>
                </li>
            </ul>
        </nav>
    </ul>
    @yield('content')

</body>

</html>