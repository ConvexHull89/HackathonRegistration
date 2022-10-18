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
    <title>Admin Panel - ViewData</title>
</head>
<body class="m-0 p-0">
    <div id="image-pop-up-bg" class="bg-black bg-opacity-50 fixed h-screen w-screen top-0 z-40 hidden"></div>
    <nav class="flex flex-row z-50 bg-gradient-to-b fixed top-0 from-purple-600 bg-opacity-50 justify-between w-full">
        <img src="/images/ehackathon_logo_1.png" alt="" class="transform hover:scale-110 motion-reduce:transform-none ml-0 sm:ml-4 md:ml-8" height="100px" width="100px"/>
        <div class="bg-ocean flex flex-row justify-around rounded-bl-3xl p-2 w-60 xl:w-80 h-1/2">
            <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('admin')}}"><img height="50px" width="50px" src="/images/svgs/nav-admin-pay.svg" alt="nav.svg"></a>
            <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('admin-payment')}}"><img height="50px" width="50px" src="/images/svgs/nav-admin-part.svg" alt="nav.svg"></a>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="mt-2"><img height="50px" width="50px" src="/images/svgs/nav-admin-logout.svg"  alt="nav.svg"></button>
            </form>
        </div>
    </nav>
    <section class="min-h-screen bg-blacks px-8 py-32 sm:px-24">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-white font-bold text-center text-3xl sm:text-4xl md:text-5xl">Dashboard</h1>
            <hr class="bg-white w-4/5 lg:w-1/2 my-8">
            <!-- Container Leader -->
            <div class="flex flex-col mb-16 rounded-xl w-full w-full md:w-3/5 lg:w-1/2 bg-dust px-8 lg:px-16 2xl:px-32 py-12">
                <h1 class="text-white text-center font-semibold text-3xl">View Data - Leader</h1>
                <hr class="w-full h-4 mt-6">
                <div class="flex flex-col mt-8">
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Full Name</h5>
                    <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$user->fullname}}</p>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Email</h5>
                    <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$user->email_leader}}</p>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Whatsapp Number</h5>
                    <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$user->wa_num}}</p>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Line ID</h5>
                    <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$user->line_id}}</p>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">GitHub or Gitlub ID</h5>
                    <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$user->github}}</p>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Place</h5>
                    <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$user->birth_place}}</p>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Date</h5>
                    <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$user->birth_day}}</p>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Upload CV</h5>
                    <div class="w-full h-8 flex flex-row">
                        <div class="w-4/5 rounded-lg border-white flex justify-between bg-transparent border-2 h-8">
                            <p class="text-white text-base font-light ml-2">{{$user->cv}}</p>
                        </div>
                        <button class="image-btn w-1/5 transform hover:scale-110 motion-reduce:transform-none focus:outline-none flex justify-center"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                        <!-- View ID -->
                        <div class="image-pop-up hidden shadow-inner fixed sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-purples rounded-xl top-1/2 left-1/2">
                            <div class="flex flex-col justify-center items-center">
                                <h1 class="text-center font-semibold text-3xl text-white tracking-widest">CV</h1>
                                <hr class="w-2/3 my-6 mx-auto">
                                <img class="max-w-96 rounded-xl" src="{{asset('storage/cv/'.$user->cv)}}" alt="viewphoto.jpg">
                            </div>
                        </div>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Upload ID Card</h5>
                    <div class="w-full h-8 flex flex-row">
                        <div class="w-4/5 rounded-lg border-white flex justify-between bg-transparent border-2 h-8">
                            <p class="text-white text-base font-light ml-2">{{$user->card}}</p>
                        </div>
                        <button class="image-btn w-1/5 transform hover:scale-110 motion-reduce:transform-none focus:outline-none flex justify-center"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                        <!-- View ID -->
                        <div class="image-pop-up hidden shadow-inner fixed sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-purples rounded-xl top-1/2 left-1/2">
                            <div class="flex flex-col justify-center items-center">
                                <h1 class="text-center font-semibold text-3xl text-white tracking-widest">ID Card</h1>
                                <hr class="w-2/3 my-6 mx-auto">
                                <img class="max-w-96 rounded-xl" src="{{asset('storage/card/'.$user->card)}}" alt="viewphoto.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container Member -->
            @foreach ($user->members as $member)
            <div class="flex flex-col mb-16 rounded-xl w-full w-full md:w-3/5 lg:w-1/2 bg-dust px-8 lg:px-16 2xl:px-32 py-12">
                <h1 class="text-white text-center font-semibold text-3xl">View Data - Member</h1>
                <hr class="w-full h-4 mt-6">
                <div class="flex flex-col mt-8">
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Full Name</label>
                        <p class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8">{{$member->fullname}}</p>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Email</label>
                        <p class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8">{{$member->email_member}}</p>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Whatsapp Number</label>
                        <p class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8">{{$member->wa_num}}</p>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Line ID</label>
                        <p class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8">{{$member->line_id}}</p>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">GitHub or Gitlub ID</label>
                        <p class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8">{{$member->github}}</p>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Place</label>
                        <p class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8">{{$member->birth_place}}</p>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Date</label>
                        <p class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8">{{$member->birth_day}}</p>
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Upload CV</label>
                        <div class="w-full flex flex-row">
                            <p class="pl-2 w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8">{{$member->cv}}</p>
                            <button class="image-btn ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                            <!-- View ID -->
                            <div class="image-pop-up hidden shadow-inner fixed sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-purples rounded-xl top-1/2 left-1/2">
                                <div class="flex flex-col justify-center items-center">
                                    <h1 class="text-center font-semibold text-3xl text-white tracking-widest">CV</h1>
                                    <hr class="w-2/3 my-6 mx-auto">
                                    <img class="max-w-96 rounded-xl" src="{{asset('storage/membercv/'.$member->cv)}}" alt="viewphoto.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Upload ID Card</label>
                        <div class="w-full flex flex-row">
                            <p class="pl-2 w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8">{{$member->card}}</p>
                            <button class="image-btn ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                            <!-- View ID -->
                            <div class="image-pop-up hidden shadow-inner fixed sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-purples rounded-xl top-1/2 left-1/2">
                                <div class="flex flex-col justify-center items-center">
                                    <h1 class="text-center font-semibold text-3xl text-white tracking-widest">ID Card</h1>
                                    <hr class="w-2/3 my-6 mx-auto">
                                    <img class="max-w-96 rounded-xl" src="{{asset('storage/membercard/'.$member->card)}}" alt="viewphoto.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/scriptViewData.js') }}"></script>
</body>
</html>