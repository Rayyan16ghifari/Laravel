<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authors</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-6 text-center text-emerald-700">Author List</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-md">
                <thead class="bg-emerald-600 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Author</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $author)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-6">{{ $author->id }}</td>
                        <td class="py-3 px-6">{{ $author->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
