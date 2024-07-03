<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Excel</title>
</head>
<body>
    <div class="bg-green-700 text-white p-5">
        <a href="/" class="bg-red-500 px-5 py-2 rounded">Home</a>
        <a href="/products" class="bg-yellow-500 px-5 py-2 rounded">Products</a>
    </div>
    <div>
        @yield('content')
    </div>
</body>
</html>
