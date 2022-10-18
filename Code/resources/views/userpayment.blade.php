<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="/images/ehackathon_logo_1.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>User - Payment</title>
</head>
<body>
    <div id="image-pop-up-bg" class="bg-black bg-opacity-50 fixed h-screen w-screen top-0 z-40 hidden"></div>
    <nav class="flex z-50 flex-row bg-gradient-to-b fixed top-0 from-purple-600 bg-opacity-50 justify-between w-full">
    <a href="{{route('userdashboard')}}"> <img src="/images/ehackathon_logo_1.png" alt="" class="transform hover:scale-110 motion-reduce:transform-none ml-0 sm:ml-4 md:ml-8" height="100px" width="100px" /></a>
        <div class="bg-ocean flex flex-row justify-around p-2 rounded-bl-3xl w-60 xl:w-80 h-1/2">
            <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('home')}}"><img height="50px" width="50px" src="/images/svgs/nav-home.svg" alt="nav.svg"></a>
            <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="#"><img height="50px" width="50px" src="/images/svgs/nav-payment.svg" alt="nav.svg"></a>
            <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('hometimeline')}}"><img height="50px" width="50px" src="/images/svgs/nav-timeline.svg" alt="nav.svg"></a>
            <form action="{{route('logout')}}" method ="POST"> @csrf<button type="submit" class="focus:outline-none transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href=""><img height="50px" width="50px" src="/images/svgs/nav-admin-logout.svg" alt="nav.svg"></button></form>
        </div>
    </nav>
    <section class="min-h-screen bg-blacks py-32 px-8 sm:px-24">
        <h1 class="text-white tracking-widest font-bold text-center text-xl sm:text-2xl md:text-3xl">Payment</h1>
        <h1 class="text-white mt-4 font-semibold text-center text-xl sm:text-2xl md:text-3xl">Payment Method Instruction</h1>
        <!-- Time -->
        <div class="border text-red-700 px-3 py-2 text-center text-xl w-2/5 mx-auto my-8 border-gradient font-semibold" id="time"></div>
        <div class="w-full flex flex-col mt-10 justify-center items-center content-center">
            <div class="flex flex-col items-center justify-center">
                <button class="toggle-btn focus:outline-none w-full sm:w-2/3 lg:w-1/2 flex justify-center"><img class="w-full" src="/images/svgs/payment-1-a.svg" alt="payment.svg"></button>
                <img class="toggle-content hidden w-full sm:w-2/3 lg:w-1/2" src="/images/svgs/Group 163.svg" alt="payment.svg">
            </div>
            <div class="flex flex-col items-center justify-center">
                <button class="toggle-btn focus:outline-none w-full sm:w-2/3 lg:w-1/2 flex justify-center"><img class="w-full" src="/images/svgs/payment5.svg" alt="payment.svg"></button>
                <img class="toggle-content hidden w-full sm:w-2/3 lg:w-1/2" src="/images/svgs/adm-payment-2.svg" alt="payment.svg">
            </div>
            <div class="flex flex-col items-center justify-center">
                <button class="toggle-btn focus:outline-none w-full sm:w-2/3 lg:w-1/2 flex justify-center"><img class="w-full" src="/images/svgs/payment-3.svg" alt="payment.svg"></button>
                <img class="toggle-content hidden w-full sm:w-2/3 lg:w-1/2" src="/images/svgs/payment-6.svg" alt="payment.svg">
            </div>
            <div class="flex flex-col items-center justify-center">
                <button class="toggle-btn focus:outline-none w-full sm:w-2/3 lg:w-1/2 flex justify-center"><img class="w-full" src="/images/svgs/payment-7.svg" alt="payment.svg"></button>
                <img class="toggle-content hidden w-full sm:w-2/3 lg:w-1/2" src="/images/svgs/Group 163-2.svg" alt="payment.svg">
            </div>
        <!-- non binusian -->
        @if(Auth::user()->payment != NULL)
        
        <div class="w-11/12 sm:w-5/12 flex flex-col mt-10 justify-center items-center content-center bg-dust text-gray-200 mx-auto rounded-full">
            <div class="flex justify-center mt-4">
                <div class="flex flex-col text-center w-24 mx-6 h-16">
                    @if (Auth::user()->type == 'non-binusian')
                    <p class="border-b text-sm pb-1">Non-Binusian</p>
                    <p class="my-auto hidden" id="normal">Rp100.000</p>
                    <p class="my-auto " id="early-bird">Rp60.000</p>
                    @elseif (Auth::user()->type == 'binusian')
                    <p class="border-b text-sm pb-1">Binusian</p>
                    <p class="my-auto hidden" id="normal">Rp80.000</p>
                    <p class="my-auto " id="early-bird">Rp60.000</p>
                    @endif
                </div>
                <div class="flex flex-col text-center w-24 mx-6 h-16">
                    <p class="border-b">Status</p>
                    @if(Auth::user()->payment_confirmation == 'unverified')
                    <p class="text-white text-sm my-2">Verification on progress</p>
                    @elseif(Auth::user()->payment_confirmation == 'approved')
                    <p class="text-green-500 my-auto font-bold">Approved</p>
                    @elseif(Auth::user()->payment_confirmation == 'rejected')
                    <p class="text-red-500 my-auto font-bold">Rejected</p>
                    @endif
                </div>
            </div>
            <button class="image-btn transform hover:scale-110 motion-reduce:transform-none focus:outline-none bg-purple-800 w-1/3 sm:w-1/5 my-2 rounded-2xl">View</button>
            <!-- image pop up -->
            <div class="image-pop-up shadow-inner fixed sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-dust rounded-xl top-1/2 left-1/2 hidden">
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-center font-semibold text-3xl text-white tracking-widest">Payment</h1>
                    <hr class="w-2/3 my-6 mx-auto">
                    <img class="w-96 rounded-xl" src="{{asset('storage/payment/'.Auth::user()->payment)}}" alt="viewphoto.jpg">
                </div>
            </div>
        </div>
        @else
        <div class="w-11/12 sm:w-5/12 flex flex-col mt-10 justify-center items-center content-center bg-dust text-gray-200 mx-auto rounded-full">
        <div class="flex justify-center mt-4 items-center">
                <div class="flex flex-col text-center w-24 mx-6 h-16">
                    @if(Auth::user()->type == 'non-binusian')
                    <p class="border-b text-sm pb-1 font-semibold">Non-Binusian</p>
                    <p class="my-auto hidden" id="normal">Rp100.000</p>
                    <p class="my-auto" id="early-bird">Rp60.000</p>
                    @elseif (Auth::user()->type == 'binusian')
                    <p class="border-b text-lg pb-1 font-semibold">Binusian</p>
                    <p class="my-auto hidden" id="normal">Rp80.000</p>
                    <p class="my-auto" id="early-bird">Rp60.000</p>
                    @endif
                </div>
                <div class="flex flex-col">
                    <button class="transform hover:scale-110 motion-reduce:transform-none focus:outline-none bg-blue-500 w-11/12 sm:w-full mb-1.5 rounded-2xl flex flex-col">
                        <p class="ml-4 mt-2">Upload</p>
                        <form action="{{route('payment')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <!-- buat BE -->
                        <input type="text" name="early" value="early" id="buatBE" class="hidden"/>
                        <input type="file" id="card" name="payment" accept="image/png, image/jpeg, image/jpg, image/pdf" class="w-11/12 sm:w-4/6 sm:h-1/2 text-xs ml-3 mb-2 rounded-full w-full"/>
                    </button>
                    <div class="flex w-9/12 flex-col">
                        <button type="submit" class="transform hover:scale-110 motion-reduce:transform-none focus:outline-none bg-purple-800 w-11/12 sm:w-8/12 mb-1.5 rounded-2xl" value="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div> 
        @endif
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/scriptPayment.js') }}"></script>
    <script>
            var countDownDate = new Date("Sep 15, 2021 23:59:59").getTime();
            var x = setInterval(function () {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                document.getElementById("time").innerHTML = "Time Remaining: " + days + "d " + hours + "h " + minutes + "m " + seconds + "s" ;
                                                            

                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("time").innerHTML = "Early Bird Has Expired";
                    document.getElementById("normal").style.display = "block";
                    document.getElementById("early-bird").style.display = "none";
                    document.getElementById("buatBE").value = "";  
                }
            }, 1000);
    </script>
</body>
</html>