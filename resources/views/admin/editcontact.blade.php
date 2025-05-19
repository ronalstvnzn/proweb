@extends('layout.main')
@section('halaman')
    <div class="flex justify-center mt-5">
        <form id="contact" name="contact" action="/contact/{{ $contact->id }}" method="POST">
            @csrf
            @method('put')
            <div class="flex justify-around mt-5">
                <input class="mr-2" style="width: 25rem;" type="text" id="pt_name" name="pt_name"
                    placeholder="Company Name" value="{{ $contact->pt_name }}" required>
                <input class="ms-2" style="width: 25rem;" type="text" id="name" name="name"
                    placeholder="Your Name" value="{{ $contact->name }}" required>
            </div>
            <div class="flex justify-around mt-3">
                <input class="mr-2" style="width: 25rem;" type="email" id="email" name="email"
                    placeholder="example@email.com" value="{{ $contact->email }}" required>
                <input class="ms-2" style="width: 25rem;" type="tel" id="phone" name="phone"
                    placeholder="Phone Number" value="{{ $contact->phone }}" required>
            </div>
            <div class="flex justify-center mt-3">
                <textarea placeholder="Message" style="width: 25rem;" name="message" id="message" required>{{ $contact->message }}</textarea>
            </div>
            <div class="flex justify-center mt-5">
                <button type="submit" name="submit" value="save"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Submit</button>
            </div>
        </form>
    </div>
@endsection
