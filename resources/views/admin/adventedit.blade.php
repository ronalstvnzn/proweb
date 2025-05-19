@extends('layout.main')
@section('halaman')
    <div class="relative overflow-x-auto">
        <form id="advent" name="advent" action="/editad/{{ $advent->id }}" method="post">
            @csrf
            @method('put')
            <div class="flex justify-center mt-5">
                <div class="flex justify-center mt-3">
                    <textarea placeholder="Isi" style="width: 25rem;" name="isi" id="isi" required
                        oninvalid="this.setCustomValidity('Plase Input Your Isi!')" oninput="this.setCustomValidity('')">{{ $advent->isi }}</textarea>
                </div>
                <div class="flex justify-center mt-5">
                    <button type="submit" name="submit" value="save"
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
