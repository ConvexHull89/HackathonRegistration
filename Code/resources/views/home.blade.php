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
    <title>User - Home</title>
</head>
<body>
    <div id="image-pop-up-bg" class="bg-black bg-opacity-50 fixed h-screen w-screen top-0 z-40 hidden"></div>
    <nav class="flex z-50 flex-row bg-gradient-to-b fixed top-0 from-purple-600 bg-opacity-50 justify-between w-full">
       <a href="{{route('userdashboard')}}"> <img src="/images/ehackathon_logo_1.png" alt="" class="transform hover:scale-110 motion-reduce:transform-none ml-0 sm:ml-4 md:ml-8" height="100px" width="100px" /></a>
        <div class="bg-ocean flex flex-row justify-around p-2 rounded-bl-3xl w-60 xl:w-80 h-1/2">
            <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="#"><img height="50px" width="50px" src="/images/svgs/nav-home.svg" alt="nav.svg"></a>
            <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('homepayment')}}"><img height="50px" width="50px" src="/images/svgs/nav-payment.svg" alt="nav.svg"></a>
            <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('hometimeline')}}"><img height="50px" width="50px" src="/images/svgs/nav-timeline.svg" alt="nav.svg"></a>
            <form action="{{route('logout')}}" method ="POST"> @csrf<button type="submit" class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href=""><img height="50px" width="50px" src="/images/svgs/nav-admin-logout.svg" alt="nav.svg"></button></form>
        </div>
    </nav>
    <section class="min-h-screen bg-blacks px-8 py-32 sm:px-24">
    <div class="flex flex-col text-gray-200 text-center uppercase tracking-widest my-4">
            <h1 class="text-2xl font-bold sm:text-3xl">Welcome</h1>
            <h1 class="text-4xl font-bold sm:text-6xl">Team {{Auth::user()->team_name}}</h1>
        </div>
        <div class="flex flex-col justify-center items-center">
            <!-- Container Leader -->
            <div class="flex flex-col mb-16 rounded-xl w-full w-full md:w-3/5 lg:w-1/2 bg-dust px-8 lg:px-16 2xl:px-32 py-12">
                <h1 class="text-white text-center font-semibold text-3xl">Leader Information</h1>
                <hr class="w-full h-4 mt-6">
                <div class="flex flex-col mt-8">
                    <form class="flex flex-col justify-center items-center content-center">
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Full Name</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="  {{Auth::user()->fullname}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Email</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="  {{Auth::user()->email_leader}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Whatsapp Number</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="  {{Auth::user()->wa_num}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Line ID</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="  {{Auth::user()->line_id}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">GitHub or Gitlub ID</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8 " readonly value="  {{Auth::user()->github}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Place</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="  {{Auth::user()->birth_place}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Date</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="  {{Auth::user()->birth_day}}"></input>
                        </div>
                        <div class="w-full flex flex-col">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">View CV</label>
                            <div class="w-full flex flex-row">
                                <input class="w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8" readonly value="  {{Auth::user()->cv}}"></input>
                                <button class="image-btn ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                                <!-- image CV -->
                                <div class="image-pop-up shadow-inner fixed sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-dust rounded-xl top-1/2 left-1/2 hidden">
                                    <div class="flex flex-col py-6 justify-center items-center">
                                        <img class="w-96 rounded-xl" src="{{asset('storage/cv/'.Auth::user()->cv)}}" alt="viewphoto.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex flex-col">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">View ID Card</label>
                            <div class="w-full flex flex-row">
                                <input class="w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8" readonly value="  {{Auth::user()->card}}"></input>
                                <button class="image-btn ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                                <!-- image ID -->
                                <div class="image-pop-up shadow-inner fixed sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-dust rounded-xl top-1/2 left-1/2 hidden">
                                    <div class="flex flex-col py-6 justify-center items-center">
                                        <img class="w-96 rounded-xl" src="{{asset('storage/card/'.Auth::user()->card)}}" alt="viewphoto.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <button type="submit" class="w-40 sm:w-60 bg-purples transform hover:scale-110 motion-reduce:transform-none focus:outline-none mt-6 rounded-lg text-white text-xl py-1 text-semibold">Add Member</button> -->
                    </form>
                </div>
            </div>
            <!-- Container Member -->
            
            @foreach($user->members as $member)
            <div class="flex flex-col mb-16 rounded-xl w-full w-full md:w-3/5 lg:w-1/2 bg-dust px-8 lg:px-16 2xl:px-32 py-12">
                <h1 class="text-white text-center font-semibold text-3xl">Member Information</h1>
                <hr class="w-full h-4 mt-6">
                <div class="flex flex-col mt-8">
                    <form class="flex flex-col justify-center items-center content-center">
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Full Name</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="  {{$member->fullname}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Email</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="  {{$member->email_member}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Whatsapp Number</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="  {{$member->wa_num}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Line ID</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="  {{$member->line_id}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">GitHub or Gitlub ID</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="  {{$member->github}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Place</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="  {{$member->birth_place}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Date</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="  {{$member->birth_day}}"></input>
                        </div>
                        <div class="w-full flex flex-col">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">View CV</label>
                            <div class="w-full flex flex-row">
                                <input class="w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8" readonly value="  {{$member->cv}}"></input>
                                <button class="image-btn ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                                <!-- image CV -->
                                <div class="image-pop-up shadow-inner fixed sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-dust rounded-xl top-1/2 left-1/2 hidden">
                                    <div class="flex flex-col py-6 justify-center items-center">
                                        <img class="w-96 rounded-xl" src="{{asset('storage/membercv/'.$member->cv)}}" alt="viewphoto.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex flex-col">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">View ID Card</label>
                            <div class="w-full flex flex-row">
                                <input class="w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8" readonly value="  {{$member->card}}"></input>
                                <button class="image-btn ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                                <!-- image ID -->
                                <div class="image-pop-up shadow-inner fixed sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-dust rounded-xl top-1/2 left-1/2 hidden">
                                    <div class="flex flex-col py-6 justify-center items-center">
                                        <img class="w-96 rounded-xl" src="{{asset('storage/membercard/'.$member->card)}}" alt="viewphoto.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <button type="submit" class="w-40 sm:w-60 bg-purples transform hover:scale-110 motion-reduce:transform-none focus:outline-none mt-6 rounded-lg text-white text-xl py-1 text-semibold">Add Member</button> -->
                    </form>
                </div>
            </div>
        @endforeach
            <!-- Member Add -->
        @if($user->members->count() < 3)
            <div class="flex flex-col mb-16 rounded-xl w-full w-full md:w-3/5 lg:w-1/2 bg-dust px-8 lg:px-16 2xl:px-32 py-12">
                <h1 class="text-white text-center font-semibold text-3xl">Member Information</h1>
                <hr class="w-full h-4 mt-6">
                <div class="flex flex-col mt-8">
                    <form class="flex flex-col justify-center items-center content-center" action="{{route('store')}}" method="POST"  enctype = "multipart/form-data">
                    @csrf
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Full Name</label>
                            <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="fullname"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Email</label>
                            <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="email_member"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Whatsapp Number</label>
                            <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="wa_num"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Line ID</label>
                            <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8"name="line_id"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">GitHub or Gitlub ID</label>
                            <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="github"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Place</label>
                            <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="birth_place"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Date</label>
                            <input type="date" class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="birth_day"></input>
                        </div>
                        <div class="w-full flex flex-col">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Upload CV</label>
                            <div class="w-full flex flex-row">
                                <input type="file" accept="image/png, image/jpeg, image/jpg, image/pdf" class="w-full text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8" name="cv" ></input>
                            </div>
                        </div>
                        <div class="w-full flex flex-col">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Upload ID Card</label>
                            <div class="w-full flex flex-row">
                                <input type="file" accept="image/png, image/jpeg, image/jpg, image/pdf" class="w-full text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8" name="card"></input>
                            </div>
                        </div>
                        <button type="submit" class="w-40 sm:w-60 bg-purples transform hover:scale-110 motion-reduce:transform-none focus:outline-none mt-6 rounded-lg text-white text-xl py-1 text-semibold">Add Member</button>
                    </form>
                </div>
            </div>
            <div class="flex flex-col mb-16 rounded-xl w-full w-full md:w-3/5 lg:w-1/2 bg-dust px-8 lg:px-16 2xl:px-32 py-12 text-gray-200">
                <p class="text-center text-2xl">Notes : You can add {{3-$user->members->count()}} more members</p>
            </div>
        @else
            <div class="flex flex-col mb-16 rounded-xl w-full w-full md:w-3/5 lg:w-1/2 bg-dust px-8 lg:px-16 2xl:px-32 py-12 text-gray-200">
                <p class="text-center text-2xl">You cannot add any more member</p>
            </div>
        @endif
        </div>
    </section>

    <div class="w-full purples bg-opacity-50 text-gray-200">
        <h1 class="flex justify-center pt-8">Jika ada informasi yang ingin diubah, silahkan hubungi Contact Person berikut:</h1>
        <div class="flex mx-auto ">
            <div class="flex flex-col my-10 w-1/12 ml-auto">
                <h1 class="text-center font-bold">Nama</h1>
                <div class="flex ">
                    <img src="/images/svgs/linelogo.svg" alt="" class="w-8">
                        <p class="mx-2 text-xs my-auto">@ID LINE</p>
                </div>
            </div>
            <div class="flex flex-col my-10 w-1/12 mr-auto ml-10">
                <h1 class="text-center font-bold">Nama</h1>
                <div class="flex ">
                    <img src="/images/svgs/linelogo.svg" alt="" class="w-8">
                        <p class="mx-2 text-xs my-auto">@ID LINE</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/scriptHome.js')}}"></script>
</body>
</html