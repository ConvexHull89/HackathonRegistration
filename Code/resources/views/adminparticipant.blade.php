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
    <!-- background pop up -->
<div id="image-pop-up-bg" class="bg-black bg-opacity-50 fixed h-screen w-screen top-0 z-40 hidden"></div>
<div id="payment-status-pop-up-bg" class="bg-black bg-opacity-50 fixed h-screen w-screen top-0 z-40 hidden"></div>

<nav class="flex flex-row bg-gradient-to-b fixed top-0 from-purple-600 bg-opacity-50 justify-between w-full">
<a href="{{route('admindashboard')}}"> <img src="/images/ehackathon_logo_1.png" alt="" class="transform hover:scale-110 motion-reduce:transform-none ml-0 sm:ml-4 md:ml-8" height="100px" width="100px" /></a>
    <div class="bg-ocean flex flex-row justify-around rounded-bl-3xl p-2 w-60 xl:w-80 h-1/2">
        <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('admin')}}"><img height="50px" width="50px" src="/images/svgs/nav-admin-pay.svg" alt="nav.svg"></a>
        <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('admin-payment')}}"><img height="50px" width="50px" src="/images/svgs/nav-admin-part.svg" alt="nav.svg"></a>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit"><img class="mt-2"height="50px" width="50px" src="/images/svgs/nav-admin-logout.svg" alt="nav.svg"></button>
        </form>
    </div>
</nav>
<section class="min-h-screen bg-blacks px-8 sm:px-24">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-white font-bold mt-32 text-center text-3xl sm:text-4xl md:text-5xl">Dashboard</h1>
        <hr class="bg-white w-4/5 lg:w-1/2 mt-8">
        <h1 class="text-white font-bold mt-4 text-center text-3xl sm:text-4xl md:text-5xl">Payment Confirmation</h1>
        <div class="w-full flex flex-row mx-auto flex-wrap">
            <!-- Card Container -->
            @foreach ($users as $user)
            @if ($user->type != 'admin' && $user->payment != NULL)
            <div class="w-full mr-4 md:w-1/2 xl:w-80 2xl:w-96 p-0 mt-2 md:py-2 lg:py-4">
                <div class="payment-status-content w-full flex flex-row rounded-xl bg-purples hover:bg-purple-900 p-8">
                    <div class="w-3/4 mr-4 flex flex-col justify-center">
                        <h1 class="text-white font-semibold text-xl text-center tracking-widest">{{$user->team_name}}</h1>
                        <hr class="mt-2 w-full">
                        <div class="flex flex-row mt-2">
                            <div class="text-white text-base font-semibold text-left w-14">Price</div>
                            <div class="text-white text-base mr-1 font-semibold text-left ">:</div>
                            @if($user->type == 'binusian' && $user->early == NULL)
                            <div class="text-white text-base font-semibold text-left w-24">Rp.80.000,00</div>
                            @elseif($user->type == 'non-binusian' && $user->early == NULL)
                            <div class="text-white text-base font-semibold text-left w-24">Rp.100.000,00</div>
                            @elseif($user->early == 'early')
                            <div class="text-white text-base font-semibold text-left w-24">Rp.60.000,00</div>
                            @endif
                        </div>
                        <div class="flex flex-row mt-1">
                            <div class="text-white text-base font-semibold text-left w-14">Status</div>
                            <div class="text-white text-base mr-1 font-semibold text-left ">:</div>
                            @if($user->payment_confirmation == 'unverified')
                            <div class="payment-status-text text-white text-base font-semibold text-left w-24">Unverified</div>
                            @elseif($user->payment_confirmation == 'rejected')
                            <div class="text-red-500 payment-status-text text-base font-semibold text-left w-24">Rejected</div>
                            @elseif($user->payment_confirmation == 'approved')
                            <div class="text-green-500 payment-status-text text-base font-semibold text-left w-24">Approved</div>
                            @endif
                        </div>
                    </div>
                    <div class="w-1/4 flex flex-col justify-around">
                        <button class="payment-status-btn transform hover:scale-110 motion-reduce:transform-none focus:outline-none"><img src="/images/svgs/status-dashboard.svg" height="80px" width="80px" alt=""></button>
                        <!-- image pop up -->
                        <div class="image-pop-up shadow-inner fixed sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-dust rounded-xl top-1/2 left-1/2 hidden">
                            <div class="flex flex-col justify-center items-center">
                                <h1 class="text-center font-semibold text-3xl text-white tracking-widest">Payment</h1>
                                <hr class="w-2/3 my-6 mx-auto">
                                <img class="w-96 rounded-xl" src="{{asset('storage/payment/'.$user->payment)}}" alt="viewphoto.jpg">
                            </div>
                        </div>
                        <button class="mt-2 image-btn transform hover:scale-110 motion-reduce:transform-none focus:outline-none"><img src="/images/svgs/view-dashboardA2.svg" height="80px" width="80px" alt=""></button>
                        <!-- payment status pop up -->
                        <div class="payment-status-pop-up hidden w-80 flex flex-col sm:w-96 fixed top-4 transform -translate-x-1/2 z-50 py-4 bg-dust rounded-xl left-1/2">
                            <button class="close-btn transform hover:scale-110 motion-reduce:transform-none text-white inline-block self-end text-right mr-4"><img height="24px" width="24px" src="/images/svgs/close.svg" alt=""></button>
                            <div class="flex justify-center px-4 pb-4">
                                <h1 class="text-white text-center font-semibold tracking-widest justify-self-center text-xl">Verify Payment</h1>
                            </div>
                            <hr class="w-2/3 mx-auto">
                            <div class="flex items-center px-4 py-4 justify-center">
                                <p class="text-center font-semibold text-white text-sm">Verify payment for {{$user->team_name}}</p>
                            </div>
                            <div class="flex justify-center px-4 pt-4 space-x-2">
                                <form action="{{route('admin-approve', $user->id)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="mr-2 focus:ring-4 focus:ring-purple-500 focus:outline-none transform hover:scale-110 motion-reduce:transform-none rounded-xl font-semibold bg-purples text-white text-sm p-2">Approve</button>
                                </form>
                                <form action="{{route('admin-reject', $user->id)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="ml-2 focus:ring-4 focus:ring-blue-300 focus:outline-none transform hover:scale-110 motion-reduce:transform-none rounded-xl font-semibold bg-ocean text-white text-sm p-2">Reject</button>
                                </form>
                            </div>
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
<script type="text/javascript" src="{{asset('js/scriptAdmin.js') }}"></script>
</body>
</html>