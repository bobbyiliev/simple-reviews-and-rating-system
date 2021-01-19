<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rating system</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles

</head>

<body class="antialiased">
    <div
        class="relative flex justify-center min-h-screen bg-gray-100 items-top dark:bg-gray-700 sm:items-center sm:pt-0">

        <div class="mt-8 overflow-hidden bg-white shadow dark:bg-gray-200 sm:rounded-lg">
            <div class="fixed inset-0 z-10 overflow-y-auto bg-white">
                <div class="flex items-center justify-center min-h-screen text-center">
                    <div class="inline-block px-2 py-6 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg w-full"
                        role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                        <div class="pb-2 bg-white">
                            <div class="flex-col items-center sm:flex">
                                <div
                                    class="flex items-center justify-center flex-shrink-0 w-12 h-12 p-4 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-16 sm:w-16">
                                    <svg class="w-full h-full text-red-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <line x1="19" y1="5" x2="5" y2="19"></line>
                                        <circle cx="6.5" cy="6.5" r="2.5"></circle>
                                        <circle cx="17.5" cy="17.5" r="2.5"></circle>
                                    </svg>
                                </div>
                                <div class="mt-3 mb-1 text-center sm:ml-4 sm:text-left">
                                    <h3 class="pt-1 text-3xl font-black leading-6 text-gray-900" id="modal-headline">
                                        {{ $product->title }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-full text-base text-center text-gray-600">
                            {{ $product->description }}
                        </div>

                        <div
                            class="justify-center w-full px-4 mt-2 font-sans text-xs leading-6 text-center text-gray-500">
                            <a href="#_">Terms and conditions apply</a>
                        </div>
                        @livewire('product-ratings', ['product' => $product], key($product->id))

                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    @livewireScripts

</body>

</html>
