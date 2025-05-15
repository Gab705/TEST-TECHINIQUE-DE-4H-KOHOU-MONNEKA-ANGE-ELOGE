<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/portefeuille (1).png">
    <title>Fer-Transfert</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Balance</h2>
<form method="POST" action="{{ route('storeBalance') }}">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700">Montant Balance</label>
        <input type="text" name="balance" value="" id="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>
    <button type="submit" class="w-full text-white py-2 px-4 rounded-lg bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        Enregister
    </button>
</form>

    </div>
</body>
</html>
