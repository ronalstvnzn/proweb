<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    <div class=" bg-slate-200 max-w-2xl h-96 mx-auto mt-40 flex relative rounded-md shadow-md">
        <div class="bg-gradient-to-b from-yellow-400 to-yellow-700 w-80 h-96 rounded-l-md">
            <h1 class=" font-semibold text-center mt-36 text-white text-2xl">Welcome Back</h1>
            <div class="h-1 w-10 bg-white rounded-md mx-auto"></div>
            <h1 class=" text-center text-white text-sm mt-3"> Nice to meet you again </h1>

        </div>
        <form action="/login/test" method="post">
            @csrf
            <div>
                <h1 class="mt-24 ml-5 text-lg ">Username</h1>
                <input type="text" name="name" id="name" value="{{ Session::get('name') }}"
                    class=" rounded-md w-80 mx-5 @error('name.required') is-invalid @enderror "
                    placeholder="Input Username">
                @error('name')
                    <div class="ml-5 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <h1 class="mt-2 ml-5 text-lg">Password</h1>
                <input type="password" name="password" id="password"
                    class=" rounded-md w-80 mx-5 @error('password.required') is-invalid @enderror "
                    placeholder="Input Password">
                @error('password')
                    <div class="ml-5 text-sm text-red-500 mb-4">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" name="submit"
                class="bg-green-400 hover:bg-green-600 text-white p-2 ml-5 rounded-md mb-6 mt-4">Login</button>

            <a href="/home" class="ml-5 mt-4 bg-red-400 hover:bg-red-600 p-2 rounded-md text-white ">Back</a>
        </form>
    </div>
</body>

</html>
