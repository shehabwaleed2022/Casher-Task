<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casher System</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">

    @include('components.nav')

    {{ $slot }}
</body>

</html>
