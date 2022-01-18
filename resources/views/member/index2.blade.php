<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
</head>
<body>
    <div class="container max-w-full max-auto pt-4">
        <h1 class="text-4x1 font-bold mb-4">Member List</h1>
        <div class="mb-4" style="text-align: center;">
            <table style="border:3px solid #0b0b0b" width="100%">
                <thead style="border:2px solid #0b0b0b">
                <tr>
                    <th style="border-right:2px solid #0b0b0b">id</th>
                    <th style="border-right:2px solid #0b0b0b">name</th>
                    <th style="border-right:2px solid #0b0b0b">email</th>
                    <th style="border-right:2px solid #0b0b0b">password</th>
                    <th style="border-right:2px solid #0b0b0b">created at</th>
                    <th style="border-right:2px solid #0b0b0b">updated</th>
                </tr>
                </thead>
                @foreach($members as $member)
                    <tbody>
                    <tr style="border:1px solid #7c7979">
                        <td style="border-right:2px solid #7c7979"><a href="/member/{{ $member->id }}/edit">{{$member->id}}</a></td>
                        <td style="border-right:2px solid #7c7979">{{$member->name}}</td>
                        <td style="border-right:2px solid #7c7979">{{$member->email}}</td>
                        <td style="border-right:2px solid #7c7979">{{$member->password}}</td>
                        <td style="border-right:2px solid #7c7979">{{$member->created_at}}</td>
                        <td style="border-right:2px solid #7c7979">{{$member->updated_at}}</td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>

        <a href="/member/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
        rounded hover:shadow">新增</a>
    </div>
</body>
</html>
