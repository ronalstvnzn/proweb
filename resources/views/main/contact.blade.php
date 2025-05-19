@include('layout.nav')

<div class="container w-full mb-0 p-4 border-t-4 border-slate-800">

    <div class="container mx-auto px-5 flex flex-wrap sm:gap-5 justify-center grid-rows-3 mt-20 ">

        <div class=" mb-2 w-80 rounded-md shadow-md bg-white hover:bg-slate-100">
            <img src="./img/loc.png" alt="" class=" w-20 my-5">
            <h1 class="  text-slate-700 font-bold mt-2 text-2xl ml-3">Location</h1>
            <h1 class="text-sm text-slate-500 ml-3 mb-5">Jl. Mayjend Sutoyo No.E-99, Klandasan Ilir, Kec. Balikpapan
                Kota, Kota Balikpapan Kalimantan Timur 76114</h1>
        </div>
        <div class=" mb-2 w-80 rounded-md shadow-md bg-white hover:bg-slate-100">
            <img src="./img/hp.png" alt="" class=" w-20 my-5">
            <h1 class=" text-slate-700 font-bold mt-2 text-2xl ml-3">Phone</h1>
            <h1 class="text-sm text-slate-500 ml-3 mb-5"><a href="https://wa.me/6287819023708"> 087819023708</h1>
        </div>
        <div class=" mb-2 w-80 rounded-md shadow-md bg-white hover:bg-slate-100">
            <img src="./img/mail.png" alt="" class=" w-20 my-5">
            <h1 class=" text-slate-700 font-bold mt-2 text-2xl ml-3">Email</h1>
            <h1 class="text-sm text-slate-500 ml-3 mb-5"><a href="mailto:ronaldstevensen73@gmail.com">
                    ronaldstevensen73@gmail.com</a></h1>
        </div>
    </div>
    <div class="flex justify-center mt-5">
        <h1 class="text-2xl font-bold">Send A Message</h1>
    </div>
    @if (Session::has('success'))
        <div class=" flex justify-center mx-auto mt-5 p-4 mb-4 text-white text-lg rounded-lg bg-green-700 dark:bg-gray-800 dark:text-green-400 max-w-xl"
            role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="flex justify-center mt-5">
        <form id="contact" name="contact" action="contact/test" method="post">
            @csrf
            <div class="flex justify-around mt-5">
                <input class="mr-2" style="width: 25rem;" type="text" id="pt_name" name="pt_name"
                    placeholder="Company Name" required oninvalid="this.setCustomValidity('Please Input Company Name!')"
                    oninput="this.setCustomValidity('')">
                <input class="ms-2" style="width: 25rem;" type="text" id="name" name="name"
                    placeholder="Your Name" required oninvalid="this.setCustomValidity('Plase Input Your Name!')"
                    oninput="this.setCustomValidity('')">
            </div>
            <div class="flex justify-around mt-3">
                <input class="mr-2" style="width: 25rem;" type="email" id="email" name="email"
                    placeholder="example@email.com" required
                    oninvalid="this.setCustomValidity('Plase Input Your Email!')" oninput="this.setCustomValidity('')">
                <input class="ms-2" style="width: 25rem;" type="tel" id="phone" name="phone"
                    placeholder="Phone Number" required
                    oninvalid="this.setCustomValidity('Plase Input Your Phone Number!')"
                    oninput="this.setCustomValidity('')">
            </div>
            <div class="flex justify-center mt-3">
                <textarea placeholder="Message" style="width: 25rem;" name="message" id="message" required
                    oninvalid="this.setCustomValidity('Plase Send Me Your Message!')" oninput="this.setCustomValidity('')"></textarea>
            </div>
            <div class="flex justify-center mt-5">
                <button type="submit" name="submit" value="save"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Submit</button>
            </div>
        </form>
    </div>

</div>
@include('layout.footer')
