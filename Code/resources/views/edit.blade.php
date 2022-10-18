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
    <title>Admin Panel - Edit Data</title>
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
                <button type="submit" class="mt-2"><img height="50px" width="50px" src="/images/svgs/nav-admin-logout.svg" alt="nav.svg"></button>
            </form>
        </div>
    </nav>
    <section class="min-h-screen bg-blacks px-8 py-32 sm:px-24">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-white font-bold text-center text-3xl sm:text-4xl md:text-5xl">Dashboard</h1>
            <hr class="bg-white w-4/5 lg:w-1/2 my-8">
            <!-- Container Leader -->
            <form method="POST" action="{{route('admin-update', $user->id)}}" class="flex flex-col justify-center mb-16 rounded-xl w-full w-full md:w-3/5 lg:w-1/2 bg-dust px-8 lg:px-16 2xl:px-32 py-12">
                @csrf
                @method('patch')
                <h1 class="text-white text-center font-semibold text-3xl">Edit Data - Leader</h1>
                <hr class="w-full h-4 mt-6">
                <div class="flex flex-col mt-8">
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Full Name</label>
                        <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="full_name" value="{{$user->fullname}}"></input>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Email</label>
                        <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8 @error("email_leader") is-invalid @enderror" name="email_leader" value="{{$user->email_leader}}"></input>
                        @error('email_leader')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Whatsapp Number</label>
                        <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8 @error("wa_num") is-invalid @enderror" name="wa_num" value="{{$user->wa_num}}"></input>
                        @error('wa_num')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Line ID</label>
                        <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8 @error("line_id") is-invalid @enderror" name="line_id" value="{{$user->line_id}}"></input>
                        @error('line_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">GitHub or Gitlub ID</label>
                        <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="github" value="{{$user->github}}"></input>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Place</label>
                        <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="birth_place" value="{{$user->birth_place}}"></input>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Date</label>
                        <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="birth_day" value="{{$user->birth_day}}"></input>
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Upload CV</label>
                        <div class="w-full flex flex-row">
                            <input class="pl-2 w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8" readonly value="{{$user->cv}}"></input>
                            <button class="image-btn ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                            <!-- View ID -->
                            <div class="image-pop-up hidden shadow-inner fixed sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-purples rounded-xl top-1/2 left-1/2">
                                <div class="flex flex-col justify-center items-center">
                                    <h1 class="text-center font-semibold text-3xl text-white tracking-widest">CV</h1>
                                    <hr class="w-2/3 my-6 mx-auto">
                                    <img class="max-w-96 rounded-xl" src="{{asset('storage/cv/'.$user->cv)}}" alt="viewphoto.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Upload ID Card</label>
                        <div class="w-full flex flex-row">
                            <input class="pl-2 w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8" readonly value="{{$user->card}}"></input>
                            <button class="image-btn ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
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
                    <button type="submit" class="mx-auto w-40 sm:w-60 bg-purples transform hover:scale-110 motion-reduce:transform-none focus:outline-none mt-6 rounded-lg text-white text-xl py-1 text-semibold">Update</button>
                </div>
            </form>
            <!-- Container Member -->
            @foreach ($user->members as $member)
                <form method="POST" action="{{route('admin-updatemember', $member->id)}}" class="flex flex-col mb-16 rounded-xl w-full w-full md:w-3/5 lg:w-1/2 bg-dust px-8 lg:px-16 2xl:px-32 py-12">
                    @csrf
                    @method('patch')
                    <h1 class="text-white text-center font-semibold text-3xl">Edit Data - Member</h1>
                    <hr class="w-full h-4 mt-6">
                    <div class="flex flex-col mt-8">
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Full Name</label>
                            <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="full_name" value="{{$member->fullname}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Email</label>
                            <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="email" value="{{$member->email_member}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Whatsapp Number</label>
                            <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="wa_num" value="{{$member->wa_num}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Line ID</label>
                            <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="line_id" value="{{$member->line_id}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">GitHub or Gitlub ID</label>
                            <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="github" value="{{$member->github}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Place</label>
                            <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="birth_place" value="{{$member->birth_place}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Date</label>
                            <input class="pl-2 w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" name="birth_day" value="{{$member->birth_day}}"></input>
                        </div>
                        <div class="w-full flex flex-col">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Upload CV</label>
                            <div class="w-full flex flex-row">
                                <input class="pl-2 w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8" readonly value="{{$member->cv}}"></input>
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
                                <input class="pl-2 w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8" readonly value="{{$member->card}}"></input>
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
                        <button type="submit" class="mx-auto pl-2 w-40 sm:w-60 bg-purples transform hover:scale-110 motion-reduce:transform-none focus:outline-none mt-6 rounded-lg text-white text-xl py-1 text-semibold">Update</button>
                    </div>
                </form>
            @endforeach
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/scriptViewData.js') }}"></script>
</body>
</html>