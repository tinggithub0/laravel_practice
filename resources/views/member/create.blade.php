<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div style="width: 900px;" class="container max-w-full max-auto pt-4">
    <h1 class="text-4x1 font-bold mb-4">新增</h1>

    <form method="post" action="/member">
        @csrf

        <div class="mb-4">
            <label class="font-bold text-gray-800" for="title">Name: </label>
            <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
            text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="name"
                   name="name" maxlength="20">
        </div>
        <div class="mb-4">
            <label class="font-bold text-gray-800" for="content">Email: </label>
            <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
            text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="email"
                   name="email" maxlength="40">
        </div>
        <div class="mb-4">
            <label class="font-bold text-gray-800" for="content">Password: </label>
            <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
            text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="password"
                   name="password" maxlength="40">
        </div>
        <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
        rounded hover:shadow">新增</button>
        <a href="/member" class="bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
        rounded hover:shadow">取消</a>
    </form>

</div>
</body>
</html>
