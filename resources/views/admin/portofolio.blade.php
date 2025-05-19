@extends('layout.main')
@section('halaman')
    <div class="relative overflow-x-auto">
        <h1 class="text-xl font-semibold">Why Choose Us</h1>
        <div class="relative mt-5">
            <a href="/porto/tambah"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 mr-2 mb-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Tambah Data</a>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-3">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Isi
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($porto as $p)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $p->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $p->isi }}
                            </td>
                            <td class="px-6 py-4 flex">
                                <a href="/porto/{{ $p->id }}"
                                    class="text-white bg-yellow-400 hover:bg-yellow-500 text-xs px-2 py-1 rounded-md">EDIT</a>
                                @if (Session::has('success'))
                                    <div class=" flex justify-center mx-auto mt-5 p-4 mb-4 text-white text-lg rounded-lg bg-green-700 dark:bg-gray-800 dark:text-green-400 max-w-xl"
                                        role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                <form onsubmit="return confirm('Apakah Anda Yakin?!');" class="inline-block"
                                    action="/phapus/{{ $p->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-white ml-1 bg-red-600 hover:bg-red-800 text-xs px-2 py-1 rounded-md">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="relative mt-5">
            <h1 class="text-xl font-semibold mb-5">About</h1>
            <a href="/add/about"
                class="text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Tambah Data</a>
            <h1 class="text-red-500 text-sm mt-2">Tambah data hanya sekali</h1>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-3">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            IMG
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            ISi
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($about as $a)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                <img src="{{ asset('poto/' . $a->poto) }}">
                            </td>
                            <td class="px-6 py-4">
                                {{ $a->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $a->isi }}
                            </td>
                            <td class="px-6 py-4">
                                @if (Session::has('success'))
                                    <div class=" flex justify-center mx-auto mt-5 p-4 mb-4 text-white text-lg rounded-lg bg-green-700 dark:bg-gray-800 dark:text-green-400 max-w-xl"
                                        role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                <form onsubmit="return confirm('Apakah Anda Yakin?!');" class="inline-block"
                                    action="/hapusabout/{{ $a->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-white bg-red-600 hover:bg-red-800 text-xs px-2 py-1 rounded-md">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="relative mt-5">
            <h1 class="text-xl font-semibold mb-5">Our Sales</h1>

            <a href="/add/product"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 mr-2 mb-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Tambah Data</a>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-3">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            IMG
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            ISi
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $pr)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                <img src="{{ asset('poto/' . $pr->poto) }}">
                            </td>
                            <td class="px-6 py-4">
                                {{ $pr->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pr->isi }}
                            </td>
                            <td class="px-6 py-4">
                                @if (Session::has('success'))
                                    <div class=" flex justify-center mx-auto mt-5 p-4 mb-4 text-white text-lg rounded-lg bg-green-700 dark:bg-gray-800 dark:text-green-400 max-w-xl"
                                        role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                <form onsubmit="return confirm('Apakah Anda Yakin?!');" class="inline-block"
                                    action="/hapusproduct/{{ $pr->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-white bg-red-600 hover:bg-red-800 text-xs px-2 py-1 rounded-md">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="relative mt-5">
            <h1 class="text-xl font-semibold mb-5">Our Advantage</h1>

            <a href="/add/advent"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 mr-2 mb-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Tambah Data</a>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-3">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            ISi
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($advent as $ad)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $ad->isi }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="/aedit/{{ $ad->id }}"
                                    class="text-white bg-yellow-400 hover:bg-yellow-500 text-xs px-2 py-1 rounded-md">EDIT</a>
                                @if (Session::has('success'))
                                    <div class=" flex justify-center mx-auto mt-5 p-4 mb-4 text-white text-lg rounded-lg bg-green-700 dark:bg-gray-800 dark:text-green-400 max-w-xl"
                                        role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                <form onsubmit="return confirm('Apakah Anda Yakin?!');" class="inline-block"
                                    action="/hapusadvent/{{ $ad->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-white bg-red-600 hover:bg-red-800 text-xs px-2 py-1 rounded-md">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
