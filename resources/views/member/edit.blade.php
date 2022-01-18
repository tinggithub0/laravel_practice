<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .table-ori {
            border:3px solid #0b0b0b;
        }
        .table-ori .table-head {
            border:2px solid #0b0b0b;
        }
        .table-ori .table-body {
            border:1px solid #7c7979;
        }
        .table-ori .table-one {
            border-right:2px solid #0b0b0b;
        }
        .table-ori .table-two {
            border-right:2px solid #7c7979;
            height: 33px;
        }
    </style>
</head>
<body>
<div class="container max-w-full max-auto pt-4">
    <h1 class="text-4x1 font-bold mb-4">Edit</h1>
    <form method="POST" action="/member/{{ $member->id }}">
        @method('PUT')
        @csrf

        <div class="mb-4" style="text-align: center;">
            <table class="table-ori" width="100%">
                <thead class="table-head">
                <tr>
                    <th class="table-one"></th>
                    <th class="table-one">name</th>
                    <th class="table-one">email</th>
                    <th class="table-one">password</th>
                </tr>
                </thead>
                <tbody>
                <tr class="table-body">
                    <td class="table-two">old</td>
                    <td class="table-two">{{$member->name}}</td>
                    <td class="table-two">{{$member->email}}</td>
                    <td class="table-two">{{$member->password}}</td>
                </tr>
                <tr class="table-body">
                    <td class="table-two">new</td>
                    <td class="table-two">
                        <input  class="h-5 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
                        text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                            id="name" name="name">
                    </td>
                    <td class="table-two">
                        <input class="h-5 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
                        text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                            id="email" name="email">
                    </td>
                    <td class="table-two">
                        <input class="h-5 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
                        text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                            id="password" name="password">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
        rounded hover:shadow">修改</button>
        <a href="/member" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
        rounded hover:shadow">取消</a>

        <form action="/member/{{ $member->id }}">
            @method('DELETE')
            @csrf
            <button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
            rounded hover:shadow">刪除</button>
        </form>
    </form>



</div>
</body>
</html>
