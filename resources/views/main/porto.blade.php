@include('layout.nav')
<div class="container w-full h-20 mb-5"></div>

<div class="mx-auto rounded-sm  container max-w-5xl bg-slate-40">
    <h1 class=" text-center bg-slate-700 p-2 rounded-t-md mx-auto text-white text-2xl mb-2 font-bold">
        Portofolio</h1>

    <div class="flex">
        @foreach ($about as $a)
            <img src="{{ asset('poto/' . $a->poto) }}" alt="" class="rounded-md w-52 mx-5">
            <div class=" flex-none">
                <h1 class="w-20 rounded-md text-center bg-yellow-400 text-white text-lg">{{ $a->title }}</h1>
                <h1 class="max-w-3xl">{{ $a->isi }}</h1>
            </div>
        @endforeach
    </div>

    <h1 class=" text-center  p-2 rounded-t-md mx-auto text-yellow-400 italic text-2xl mb-2 font-bold mt-5">
        "Why Pacific Indo Packing?"</h1>
    <div class="container mx-auto px-5 flex flex-wrap gap-5 sm:justify-center grid-rows-3 bg-slate-200">
        @foreach ($porto as $p)
            <div class=" mb-10 sm:mb-0 sm:w-60 md:w-72">
                <div>
                    <h1 class="font-semibold text-2xl text-center mt-3">{{ $p->title }}</h1>
                    <div class="w-10 h-1 bg-yellow-300 mx-auto my-2"></div>
                    <h1 class="text-md text-center mb-3">{{ $p->isi }}</h1>
                </div>
            </div>
        @endforeach
    </div>
    <h1 class=" text-center  p-2 rounded-t-md mx-auto text-yellow-400 text-2xl mb-2 font-bold mt-5">Our Sales</h1>

    <div class="container mx-auto px-5 flex flex-wrap sm:gap-5 sm:justify-center grid-rows-3">
        @foreach ($product as $pr)
            <div class=" mb-2 w-96 rounded-md shadow-md bg-white">
                <img src="{{ asset('poto/' . $pr->poto) }}" alt="" class=" w-full my-5 mx-auto">
                <h1 class=" text-slate-700 font-bold mt-2 text-2xl ml-3">{{ $pr->title }}</h1>
                <h1 class="text-sm text-slate-500 ml-3 mb-5">{{ $pr->isi }}</h1>
            </div>
        @endforeach
    </div>
    <div class="container bg-slate-600 mt-5">
        <div class="mt-2">
            <h1 class="text-yellow-300 text-center text-2xl font-bold"> Our Advantage</h1>
        </div>
        <div class="flex flex-wrap gap-5 grid-rows-3 justify-center mb-5">
            @foreach ($advent as $ad)
                <div class="w-64 text-center ">
                    <h1 class="mt-2 text-white text-lg">{{ $ad->isi }}
                    </h1>
                </div>
            @endforeach
        </div>
    </div>
</div>
@include('layout.footer')
