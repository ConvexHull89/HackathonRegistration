<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="/images/ehackathon_logo_1.png">
    <title>Admin Panel - Dashboard</title>
</head>
<body class="m-0 p-0">
<nav class="flex flex-row bg-gradient-to-b fixed top-0 from-purple-600 bg-opacity-50 justify-between w-full">
<a href="{{route('admindashboard')}}"> <img src="/images/ehackathon_logo_1.png" alt="" class="transform hover:scale-110 motion-reduce:transform-none ml-0 sm:ml-4 md:ml-8" height="100px" width="100px" /></a>
    <div class="bg-ocean flex flex-row justify-around rounded-bl-3xl p-2 w-60 xl:w-80 h-1/2">
        <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('admin')}}"><img height="50px" width="50px" src="/images/svgs/nav-admin-pay.svg" alt="nav.svg"></a>
        <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('admin-payment')}}"><img height="50px" width="50px" src="/images/svgs/nav-admin-part.svg" alt="nav.svg"></a>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit"><img class="mt-2" height="50px" width="50px" src="/images/svgs/nav-admin-logout.svg" alt="nav.svg"></button>
        </form>
    </div>
</nav>
<section class="min-h-screen bg-blacks px-8 sm:px-24">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-white font-bold mt-32 text-center text-3xl sm:text-4xl md:text-5xl">Participant</h1>
        <hr class="bg-white w-4/5 lg:w-1/2 mt-8">
        <div class="w-full flex flex-row flex-wrap">
            <!-- Card Container -->
            @foreach ($users as $user)
            @if ($user->type != 'admin')
            <div class="delete-pop-up-card w-full sm:w-1/2 xl:w-80 2xl:w-96 p-0 mt-4 md:p-4 lg:p-8">
                <!-- Card -->
                <div class="w-full flex flex-row rounded-xl bg-purples hover:bg-purple-900 p-8">
                    <div class="w-full flex flex-col justify-center">
                        <h1 class="text-white font-semibold text-xl text-center tracking-widest">{{$user->team_name}}</h1>
                        <hr class="my-4 w-full">
                        <div class="flex w-full justify-around">
                            <button class="transform hover:scale-110 motion-reduce:transform-none"><a href="{{route('admin-view', $user->id)}}"><img class="w-12 sm:w-14 md:w-16 lg:w-18 xl:w-20" src="/images/svgs/view-dashboardA2.svg" alt="edit.svg"></a></button>
                            <button class="transform hover:scale-110 motion-reduce:transform-none"><a href="{{route('admin-edit', $user->id)}}"><img class="w-12 sm:w-14 md:w-16 lg:w-18 xl:w-20" src="/images/svgs/edit-dashboardA.svg" alt="edit.svg"></a></button>
                            <form  action="{{route('admin-delete', $user->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="focus:outline-none delete-pop-up-btn transform hover:scale-110 motion-reduce:transform-none buttonZ"><img class="w-12 sm:w-14 md:w-16 lg:w-18 xl:w-20" src="/images/svgs/delete-dashboardA.svg" alt="edit.svg"></a>
                                <!--delete pop up -->
                                <div class="delete-pop-up hidden w-80 flex flex-col sm:w-96 fixed top-4 transform -translate-x-1/2 z-50 py-4 bg-dust rounded-xl left-1/2">
                                    <div class="flex justify-center px-4 pb-4">
                                        <h1 class="text-white text-center font-semibold tracking-widest justify-self-center text-xl">Delete Participant</h1>
                                    </div>
                                    <hr class="w-2/3 mx-auto">
                                    <div class="flex items-center px-4 py-4 justify-center">
                                        <p class="text-center font-semibold text-white text-sm">Delete Participant?</p>
                                    </div> 
                                    <div class="flex justify-center px-4 pt-4 space-x-2">
                                            <a class="focus:outline-none cancel-btn transform hover:scale-110 motion-reduce:transform-none rounded-xl font-semibold bg-ocean text-white text-sm p-2">Cancel</a> 
                                            <button type="submit" class="focus:outline-none  transform hover:scale-110 motion-reduce:transform-none rounded-xl font-semibold bg-purples text-white text-sm p-2">Delete</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('js/scriptParticipant.js') }}"></script>
</body>
</html>