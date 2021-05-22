<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="md:flex bg-gray-100 rounded-xl p-8 md:p-0">
            <img class="h-32 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto md:mx-0"
                 src="{{ asset('img/digimon.jpg') }}"
            />

            <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                <blockquote>
                    <p class="text-lg font-semibold">
                        “Tailwind CSS is the only framework that I've seen scale
                        on large teams. It’s easy to customize, adapts to any design,
                        and the build size is tiny.”
                    </p>
                </blockquote>

                <figcaption class="font-medium">
                    <div class="text-cyan-600">
                        Sarah Dayan
                    </div>

                    <div class="text-gray-500">
                        Staff Engineer, Algolia
                    </div>
                </figcaption>
            </div>
        </div>
    </body>
</html>
