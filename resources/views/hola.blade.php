<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to My Website</h1>
    <p>This is a simple example of a Laravel view.</p>
    <x-button>
    <x-slot name="but"> Click me
    </x-slot>   
    <x-slot name="cardTitle">
        lujain Card Title
    </x-slot>
    <x-slot name="cardContent">
        This is the content of my card.
    </x-slot>
    </x-button>
</body>
</html>