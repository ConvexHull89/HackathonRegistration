<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="/images/ehackathon_logo_1.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Nav for web -->
    <nav class="hidden lg:flex bg-gradient-to-b from-black bg-opacity-50 fixed top-0 w-screen">
        <div class="container mx-auto">
            <div class="sm:flex justify-between mx-10">
                <!-- Left Side -->
                <a href="#" class="transform hover:scale-110 motion-reduce:transform-none p-3"><img src="/images/ehackathon_logo_1.png" alt="logo-brand.jpg" height="   75px" width="75px"></a>
                <!-- Right Side -->
                <ul class="text-white sm:self-center text-xl sm:border-none">
                    <li class="sm:inline-block"><a href="/#home-section" class="p-3 hover:text-red-500">Home</a></li>
                    <li class="sm:inline-block"><a href="/#champion-section" class="p-3 hover:text-red-500">Champion</a></li>
                    <li class="sm:inline-block"><a href="/#aboutus-section" class="p-3 hover:text-red-500">About Us</a></li>
                    <li class="sm:inline-block"><a href="/#faq-section" class="p-3 hover:text-red-500">FaQ</a></li>
                    <li class="sm:inline-block"><a href="/#timeline-section" class="p-3 hover:text-red-500">Timeline</a></li>
                    <li class="sm:inline-block"><a href="{{route('login')}}" class="my-2 px-3 py-1 hover:text-red-500 rounded-md border-2 border-gradient">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav for mob -->
    <nav class="flex lg:hidden bg-gradient-to-b from-black bg-opacity-50 fixed top-0 w-screen">
        <div class="container mx-auto">
            <div class="flex justify-between mx-10">
                <!-- Left Side -->
                <a href="#" class="transform hover:scale-110 motion-reduce:transform-none p-3"><img src="/images/ehackathon_logo_1.png" alt="logo-brand.jpg" height="75px" width="75px"></a>
                <!-- Right Side -->
                <button type="button" class="m-0" id="options-menu" aria-haspopup="true" aria-expanded="true" onclick="show()"><svg viewBox="0 0 448 512" width="20" title="align-right" fill="gray" ><path d="M16 224h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16zm416 192H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm3.17-384H172.83A12.82 12.82 0 0 0 160 44.83v38.34A12.82 12.82 0 0 0 172.83 96h262.34A12.82 12.82 0 0 0 448 83.17V44.83A12.82 12.82 0 0 0 435.17 32zm0 256H172.83A12.82 12.82 0 0 0 160 300.83v38.34A12.82 12.82 0 0 0 172.83 352h262.34A12.82 12.82 0 0 0 448 339.17v-38.34A12.82 12.82 0 0 0 435.17 288z" /></svg></button>
            </div>
            <ul class="text-white self-center text-xl sm:border-none bg-black bg-opacity-90 flex flex-col" id="dropdown" style="display: none">
                <li class="inline-block w-full flex justify-center"><a href="../index.html#home-section" class="text-center p-3 hover:text-red-500">Home</a></li>
                <li class="inline-block w-full flex justify-center"><a href="../index.html#champion-section" class="text-center p-3 hover:text-red-500">Champion</a></li>
                <li class="inline-block w-full flex justify-center"><a href="../index.html#aboutus-section" class="text-center p-3 hover:text-red-500">About Us</a></li>
                <li class="inline-block w-full flex justify-center"><a href="../index.html#faq-section" class="text-center p-3 hover:text-red-500">FaQ</a></li>
                <li class="inline-block w-full flex justify-center"><a href="../index.html#timeline-section" class="text-center p-3 hover:text-red-500">Timeline</a></li>
                <li class="inline-block w-full flex justify-center"><a href="../pages/login.html" class="my-2 px-3 py-1 hover:text-red-500 bg-black bg-opacity-50 rounded-md border-2 border-gradient">Login</a></li>
            </ul>
        </div>
    </nav>
    <!-- Section Login -->
    <section id="login-section" class="h-screen bg-login bg-center top-0 flex flex-col justify-center items-center mx-auto">
        <div class="border-2 border-gradient bg-black bg-opacity-50 w-3/4 sm:w-2/3 md:w-1/2 lg:w-1/3 2xl:w-1/4 mx-8 flex flex-col justify-center mx-auto p-6 my-auto h-auto">
            <div class="mx-auto space-y-4" id="login-form">
                <h1 class="font-bold tracking-widest text-3xl text-center text-white m-0">LOGIN</h1>
                <form action="{{route('login')}}" class=" space-y-4" method="POST">
                    @csrf
                    <input type="text" name="team_name" placeholder="Team Name" class="bg-transparent rounded-md px-1 text-white border-2 border-white w-full @error('team_name') is-invalid @enderror" required>
                    <input type="password" name="password" placeholder="Password" class="bg-transparent rounded-md px-1 text-white border-2 border-white w-full @error('password') is-invalid @enderror" required>
                    <div class="space-x-2 pl-2 flex flex-row items-center">
                        <input type="checkbox" class="checked:bg-blue-600 checked:border-transparent" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember-me" class="text-white">Remember Me</label>
                    </div>
                    @if (session('error'))
                        <div class="alert alert-danger text-red-400">{{ session('error') }}</div>
                    @endif
                    <p class="text-white">Not yet have an account? <a href="{{route('register')}}" class="text-yellow-200">Click here</a></p>
                    <div class="flex justify-center">
                        <button type="submit" class="focus:outline-none w-2/3 sm:w-1/2 h-9 bg-ocean active:bg-blue-700 text-white rounded-md mx-auto">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="{{asset('js/scriptlogin.js') }}"></script>
</body>
</html