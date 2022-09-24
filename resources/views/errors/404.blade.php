<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Error 404</title>
        <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        <link rel="icon" type="image/x-icon" href="{{ asset('storage/favicon.ico') }}">
        @vite('resources/css/app.css')

    </head>
    <body>

        <section class="flex items-center h-screen p-16 dark:bg-gray-900 dark:text-gray-100">
            <div class="container flex flex-col justify-items-center items-center justify-center px-5 mx-auto my-8">
                <div class="max-w-md text-center">
                    <h2 class="mb-8 font-extrabold text-9xl dark:text-gray-600">
                        <span class="sr-only">Error</span>404
                    </h2>
                    <p class="text-2xl font-semibold md:text-3xl">Lo siento, no hemos podido encontrar lo que buscas.</p>
                    <p class="mt-4 mb-8 dark:text-gray-400">No te preocupes, puedes buscar otras cosas interesantes.</p>
                    <a href="{{ route('products.index') }}" class="px-8 py-3 text-white rounded bg-blue-500 dark:bg-violet-400 dark:text-gray-900">Volver al inicio</a>
                </div>
            </div>
        </section>


    </body>
</html>
