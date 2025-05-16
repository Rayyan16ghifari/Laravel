<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Genres</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-6 text-center text-indigo-700">Genre List</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-md">
                <thead class="bg-indigo-600 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Genre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($genres as $genre)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-6">{{ $genre->id }}</td>
                        <td class="py-3 px-6">{{ $genre->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
