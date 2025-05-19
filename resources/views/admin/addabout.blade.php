@extends('layout.main')
@section('halaman')
    <div class="relative overflow-x-auto">
        <form id="about" name="about" action="/add/test" enctype="multipart/form-data" method="post">
            @csrf
            <div class=" mt-5">
                <input
                    class="block w-15 mb-3 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="user_avatar_help" id="nama" name="nama" type="text">
                <input class="mr-2" class="w-96" type="text" id="jenis" name="jenis" placeholder="Jenis Barang"
                    required oninvalid="this.setCustomValidity('Please Input The Title!')"
                    oninput="this.setCustomValidity('')">
                <div class="mt-3">
                    <textarea placeholder="Isi" class="w-96 h-52 " name="isi" id="isi" required
                        oninvalid="this.setCustomValidity('Plase Input Your Isi!')" oninput="this.setCustomValidity('')"></textarea>
                </div>
                <div class="flex justify-center mt-5">
                    <button type="submit" name="submit" value="save"
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
