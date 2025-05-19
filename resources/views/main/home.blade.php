<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('layout.nav')


    <div class="container">
        <div class="bg-slate-500 w-full h-96 shadow-md">
            <img src="./img/comp.jpg" alt="company" class="w-full h-full object-cover">
        </div>
    </div>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
                <h2
                    class="mb-4 text-4xl tracking-tight font-bold dark:text-white bg-slate-800 w-44 text-white rounded-md text-center p-2">
                    About us</h2>
                <p class="mb-4 font-medium">PT.PACIFIC INDO PACKING was founded in 2004, in Jakarta. In the following
                    year we expanded to several major cities in Indonesia to anticipate market developments throughout
                    the country.</p>
                <div class="mb-1 font-bold">
                    <p>Visi Company</p>
                </div>
                <div class="font-medium">
                    <p>Become the partner of choice in creating a business space for a better life.</p>
                </div>
                <div class="mt-4 font-bold">
                    <p>Misi Company</p>
                </div>
                <ul class="mt-1 font-medium">
                    <li> - Quality Products & Services </li>
                    <li> - Care About Occupational Health & Safety </li>
                    <li> - Innovation To Enchance Growth And Value Creation </li>
                    <li> - Corporate Governance And Ethical Business Practices </li>
                </ul>
            </div>
        </div>
    </section>

    <div>
        <h2
            class="ml-36 mb-4 text-4xl tracking-tight font-bold dark:text-white bg-slate-800 w-64 text-white rounded-md text-center p-2">
            Our Service</h2>

        <div class=" ml-36 w-96 rounded-md flex mb-10">
            <img src="./img/store.jpg" alt="" class=" rounded-l-lg bg-cover">
            <div>
                <h1 class=" text-slate-700 font-bold mt-2 text-2xl ml-3">Dedicated Production Facility</h1>
                <h1 class="text-sm text-slate-500 ml-3 mb-5">At PIP, we never compromise quality. We always invest in
                    state-of-the-art technology and facilities to meet our productivity and efficiency.</h1>
                <a href="/service" class="ml-3 text-blue-500 hover:text-blue-700 ">More Service></a>
            </div>
        </div>


    </div>

    @include('layout.Footer')
</body>

</html>
