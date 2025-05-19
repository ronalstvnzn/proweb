<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class=" bg-slate-800 p-3 fixed w-full drop-shadow-md">
        <div class="flex flex-wrap items-center justify-between">
            <div class="flex">
                <img src="./img/logo.png" alt="logo" class=" ml-5 w-14  rounded-full"><span
                    class="self-center ml-3 text-2xl text-yellow-300 font-bold ">PIP</span><span
                    class="self-center ml-1 text-2xl text-white font-bold ">Pacific Indo Packing</span>
            </div>

            <div class="text-white font-semibold p-3 flex gap-5 items-center">
                <ul class="flex gap-10">

                    <li>
                        <a href="/home" class=" text-white hover:text-yellow-300">Home</a>
                    </li>
                    <li>
                        <a href="/service" class=" text-white hover:text-yellow-300">Service</a>
                    </li>
                    <li>
                        <a href="/product" class=" text-white hover:text-yellow-300">Product</a>
                    </li>
                    <li>
                        <a href="/porto" class=" text-white hover:text-yellow-300">Portofolio</a>
                    </li>
                    <li>
                        <a href="/login"
                            class=" text-white hover:text-yellow-300 bg-yellow-400 hover:bg-yellow-600 p-2 rounded-md">Login</a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

</body>

</html>
