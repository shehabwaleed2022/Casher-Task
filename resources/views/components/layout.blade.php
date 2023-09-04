<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casher System</title>
    <script src="{{ asset('tailwind.js') }}"></script>
</head>

<body class="bg-gray-100">

    @include('components.nav')

    @if (Session::has('success'))
        <div class="bg-green-200 p-4 text-green-800" id="flash-message">
            {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::has('failed'))
        <div class="bg-red-200 p-4 text-black-800" id="flash-message">
            {{ Session::get('failed') }}
        </div>
    @endif

    {{ $slot }}

    <script>
        setTimeout(function() {
            document.getElementById('flash-message').style.display = 'none';
        }, 2000);
    </script>

</body>

</html>
