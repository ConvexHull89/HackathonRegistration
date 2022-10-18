<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Technoscape</title>
</head>
<body class="text-gray-100">
    <!-- Nav for web -->
    <nav class="hidden lg:flex bg-gradient-to-b from-black bg-opacity-50 fixed top-0 w-screen">
        <div class="container mx-auto">
            <div class="sm:flex justify-between mx-10">
                <!-- Left Side -->
                <a href="#" class="p-3"><img src="../photos/ehackathon_logo_1.png" alt="logo-brand.jpg" height="   75px" width="75px"></a>
                <!-- Right Side -->
                <ul class="text-white sm:self-center text-xl sm:border-none">
                    <li class="sm:inline-block"><a href="../index.html#home-section" class="p-3 hover:text-red-500">Home</a></li>
                    <li class="sm:inline-block"><a href="../index.html#champion-section" class="p-3 hover:text-red-500">Champion</a></li>
                    <li class="sm:inline-block"><a href="../index.html#aboutus-section" class="p-3 hover:text-red-500">About Us</a></li>
                    <li class="sm:inline-block"><a href="../index.html#faq-section" class="p-3 hover:text-red-500">FaQ</a></li>
                    <li class="sm:inline-block"><a href="../index.html#timeline-section" class="p-3 hover:text-red-500">Timeline</a></li>
                    <li class="sm:inline-block"><a href="../pages/login.html" class="my-2 px-3 py-1 hover:text-red-500 rounded-md border-2 border-gradient">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav for mob -->
    <nav class="flex lg:hidden bg-gradient-to-b from-black bg-opacity-50 fixed top-0 w-screen">
        <div class="container mx-auto">
            <div class="flex justify-between mx-10">
                <!-- Left Side -->
                <a href="#" class="p-3"><img src="../photos/ehackathon_logo_1.png" alt="logo-brand.jpg" height="75px" width="75px"></a>
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
    <section id="register-section" class="min-h-screen bg-regis top-0 flex flex-col justify-center items-center mx-auto">
        <div class="register bg-black bg-opacity-50 border-2 border-gradient w-3/4 sm:w-2/3 md:w-1/2 lg:w-1/3 2xl:w-1/4 mx-8 flex flex-col justify-center mx-auto p-6 my-32 h-auto">
            <div class="space-y-4" id="register-form"> <!-- Mx auto-->
                <h1 class="text-xl text-center text-white m-0">REGISTER</h1>
                <!-- buttons buat switch -->
                <div class="flex justify-center">
                    <button class="border-1 border-white text-white text-xs w-24 h-7 rounded-full" style="background-color: purple" id="team-btn" onclick="showTab()">Team</button>
                    <button class="border-1 border-white text-white text-xs w-24 h-7 rounded-full" id="lead-btn" onclick="showTab()">Leader</button>
                </div>
                <!-- button buat switch -->
                <form action="" name="form-register" id="register-forms">
                    <div id="team" class="space-y-4 mx-auto flex flex-col">
                        <input type="text" name="team_name" placeholder="Group Name" class="bg-transparent rounded-md px-1 text-white border-2 border-white w-full" required/>
                        <input type="password" name="password" placeholder="Password" class="bg-transparent rounded-md px-1 text-white border-2 border-white w-full" required/>
                        <input type="password" name="confirm-password" placeholder="Confirmation Password" class="bg-transparent rounded-md px-1 text-white border-2 border-white w-full" required/>
                        <div class="flex flex-row justify-around">
                            <div>
                                <input type="radio" id="binusian" name="status" value="binusian" id="choose" onclick="myFunction()" class="mt-1.5 mr-1.5"/>
                                <label for="binusian">Binusian</label>
                            </div>
                            <div>
                                <input type="radio" id="non-binusian" name="status" value="non-binusian" id="choose" onclick="myFunction()" class="mt-1.5 mr-1.5"/>
                                <label for="non-binusian">Non Binusian</label>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <button class="w-1/2 h-9 bg-blue-700 text-white rounded-md px-1" id="next-btn" onclick="showTab()">Next</button>
                        </div>
                    </div>
                    <div id="leader" class="space-y-4 hidden">
                        <input type="text" name="full_name" placeholder="Full Name" class="bg-transparent rounded-md px-1 text-white border-2 border-white w-full" required/>
                        <input type="email" name="email" placeholder="Email" class="bg-transparent rounded-md px-1 text-white border-2 border-white w-full" required/>
                        <input type="text" name="wa_num" placeholder="Whatsapp Number" class="bg-transparent rounded-md px-1 text-white border-2 border-white w-full" required/>
                        <input type="text" name="lineID" placeholder="LINE ID" class="bg-transparent rounded-md px-1 text-white border-2 border-white w-full" required/>
                        <input type="text" name="github" placeholder="Github or Gitlab ID" class="bg-transparent rounded-md px-1 text-white border-2 border-white w-full" required/>
                        <input type="text" name="birthplace" placeholder="Birth Place" class="bg-transparent rounded-md px-1 text-white border-2 border-white w-full" required/>
                        <input type="date" name="dob" placeholder="Birth Date" class="bg-transparent fill-current stroke-current rounded-md px-1 text-gray-400 border-2 border-white w-full" required/>
                        <div class="bg-transparent rounded-md px-1 text-gray-400 border-2 border-white w-full">
                        <div id="choose" class="text-gray-400">Upload ID Card</div><input type="file" id="card" name="card" accept="image/png, image/jpeg, image/jpg, image/pdf" class="idCard text-gray-400 flex justify-center mb-2"/></div>
                        <div class="bg-transparent rounded-md px-1 text-white border-2 border-white w-full">
                            <label for="idcard" id="cv" class="flex text-gray-400">Upload CV</label>
                        <input type="file" id="cv" name="cv" accept="image/png, image/jpeg, image/jpg, image/pdf" class="mb-2 text-gray-400"/>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" class="w-1/2 h-9 bg-blue-700 active:bg-blue-700 text-white rounded-md" value="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="{{asset('js/scriptregister.js') }}"></script>
</body>
</html>