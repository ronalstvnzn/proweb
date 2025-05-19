@extends('layout.main')
@section('halaman')
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        NO
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Company Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Message
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $c)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $c->pt_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $c->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $c->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $c->phone }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $c->message }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('contact.edit', $c->id) }}"
                                class="text-white bg-yellow-400 hover:bg-yellow-500 text-xs px-2 py-1 rounded-md">EDIT</a>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/dashboard/{{ $c->id }}"
                                class="inline-block" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-white bg-red-700 hover:bg-red-800 text-xs px-2 py-1 rounded-md">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
