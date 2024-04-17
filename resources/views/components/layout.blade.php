<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <nav>
        <a href="/">home</a>
        <a href="/about">about</a>
        <a href="/contact">contact</a>
    </nav>
    <main>
        {{-- <?php echo $slot; ?> --}}

        {{ $slot }}
    </main>
</body>

</html>
