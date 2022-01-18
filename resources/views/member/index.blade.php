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
        }
    </style>
</head>
<body>
    <div class="container max-w-full max-auto pt-4">
        <h1 class="text-4x1 font-bold mb-4">Member List</h1>
        <div class="mb-4" style="text-align: center;">
            <table class="table-ori" width="100%">
                <thead>
                <tr class="table-head">
                    <th class="table-one">id</th>
                    <th class="table-one">name</th>
                    <th class="table-one">email</th>
                    <th class="table-one">password</th>
                    <th class="table-one">created at</th>
                    <th class="table-one">updated</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                    <tr class="table-body">
                        <td class="table-two"><a href="/member/{{ $member->id }}/edit">{{$member->id}}</a></td>
                        <td class="table-two">{{$member->name}}</td>
                        <td class="table-two">{{$member->email}}</td>
                        <td class="table-two">{{$member->password}}</td>
                        <td class="table-two">{{$member->created_at}}</td>
                        <td class="table-two">{{$member->updated_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <a href="/member/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
        rounded hover:shadow">新增</a>
    </div>
</body>
</html>
