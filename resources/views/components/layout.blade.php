<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <nav>
        <x-nav-link href="/">home</x-nav-link>
        <x-nav-link href="/about">about</x-nav-link>
        <x-nav-link href="/contact">contact</x-nav-link>

        <x-nav-link>Get Started</x-nav-link>
    </nav>
    <main>
        {{-- <?php echo $slot; ?> --}}

        {{ $slot }}
    </main>
</body>

</html>
