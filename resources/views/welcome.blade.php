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
    <div class="justify-between flex  ml-5 mt-5 mr-5">
        <h1 class="text-2xl">Products List</h1>
        <form action="products/export-excel" method="POST" target="__blank">
            @csrf
            <button type="submit" class="bg-green-800 rounded px-3 py-2 hover:bg-green-500">Export Excel</button>
        </form>
    </div>
    <div class="relative overflow-x-auto m-5 rounded">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Product name</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$p->name}}</td>
                    <td class="px-6 py-4">{{$p->description}}</td>
                    <td class="px-6 py-4">{{$p->price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
