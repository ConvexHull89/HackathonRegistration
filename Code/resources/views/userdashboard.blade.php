<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="/images/ehackathon_logo_1.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Technoscape - Dashboard</title>
</head>
<body>
    <!-- Nav for web -->
    <nav class="z-40 hidden lg:flex bg-gradient-to-b from-black fixed top-0 w-screen">
        <div class="container mx-auto">
            <div class="sm:flex justify-between mx-10">
                <!-- Left Side -->
                <a href="#" class="transform hover:scale-110 motion-reduce:transform-none p-3"><img src="/images/ehackathon_logo_1.png" alt="logo-brand.jpg" height="   75px" width="75px"></a>
                <!-- Right Side -->
                <ul class="text-white sm:self-center text-xl sm:border-none">
                    <li class="sm:inline-block"><a href="#home-section" class="p-3 hover:text-red-500">Home</a></li>
                    <li class="sm:inline-block"><a href="#champion-section" class="p-3 hover:text-red-500">Champion</a></li>
                    <li class="sm:inline-block"><a href="#aboutus-section" class="p-3 hover:text-red-500">About Us</a></li>
                    <li class="sm:inline-block"><a href="#faq-section" class="p-3 hover:text-red-500">FaQ</a></li>
                    <li class="sm:inline-block"><a href="#timeline-section" class="p-3 hover:text-red-500">Timeline</a></li>
                    <li class="sm:inline-block rounded-full "><a href="{{route('home')}}" class="my-2 px-3 py-1 hover:text-red-500">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav for mob -->
    <nav class="z-40 flex lg:hidden bg-black bg-opacity-70 fixed top-0 w-screen">
        <div class="container mx-auto">
            <div class="flex justify-between mx-10">
                <!-- Left Side -->
                <a href="#" class="transform hover:scale-110 motion-reduce:transform-none p-3"><img src="/images/ehackathon_logo_1.png" alt="logo-brand.jpg" height="75px" width="75px"></a>
                <!-- Right Side -->
                <button type="button" class="m-0" id="options-menu" aria-haspopup="true" aria-expanded="true" onclick="show()"><svg viewBox="0 0 448 512" width="20" title="align-right" fill="gray" ><path d="M16 224h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16zm416 192H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm3.17-384H172.83A12.82 12.82 0 0 0 160 44.83v38.34A12.82 12.82 0 0 0 172.83 96h262.34A12.82 12.82 0 0 0 448 83.17V44.83A12.82 12.82 0 0 0 435.17 32zm0 256H172.83A12.82 12.82 0 0 0 160 300.83v38.34A12.82 12.82 0 0 0 172.83 352h262.34A12.82 12.82 0 0 0 448 339.17v-38.34A12.82 12.82 0 0 0 435.17 288z" /></svg></button>
            </div>
            <ul class="text-white self-center text-xl sm:border-none bg-black bg-opacity-90 flex flex-col" id="dropdown" style="display: none">
                <li class="inline-block w-full flex justify-center"><a href="#home-section" class="text-center p-3 hover:text-red-500">Home</a></li>
                <li class="inline-block w-full flex justify-center"><a href="#champion-section" class="text-center p-3 hover:text-red-500">Champion</a></li>
                <li class="inline-block w-full flex justify-center"><a href="#aboutus-section" class="text-center p-3 hover:text-red-500">About Us</a></li>
                <li class="inline-block w-full flex justify-center"><a href="#faq-section" class="text-center p-3 hover:text-red-500">FaQ</a></li>
                <li class="inline-block w-full flex justify-center"><a href="#timeline-section" class="text-center p-3 hover:text-red-500">Timeline</a></li>
                <li class="inline-block w-full flex justify-center"><a href="{{route('userdashboard')}}" class="my-2 px-3 py-1 hover:text-red-500 bg-black bg-opacity-50 rounded-2xl border-2 border-gradient">Dashboard</a></li>
            </ul>
        </div>
    </nav>
    <!-- Home -->
    <section id="home-section" class="h-screen bg-home bg-center bg-cover flex flex-col justify-center px-8 sm:px-24">
        <div class="flex flex-col md:flex-row justify-between md:justify-center">
            <div class="w-full md:w-2/4 flex justify-center">
                <div class="w-full md:w-3/4 flex flex-col justify-center">
                    <h3 class="text-white text-2xl sm:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl font-bold">HACKATHON 4.0</h3>
                    <h1 class="text-white py-6 text-4xl sm:text-5xl lg:text-6xl xl:text-7xl 2xl:text-7xl font-bold">Transform Ideas, Code Your Solution</h1>
                </div>
            </div>
            <div class="focus:outline-none w-full md:w-2/4 flex flex-col justify-center">
                <div class="focus:outline-none inline-flex">
                    <div class="focus:outline-none multiple-items3 flex flex-row justify-evenly mx-auto w-full my-8">
                        <div class="focus:outline-none">
                            <p class="text-center text-3xl tracking-widest mb-6 text-white font-bold ">Hackathon 1.0</p>
                            <img src="/images/Hackathon-1.0.jpg" alt="" class="focus:outline-none border-4 w-full h-80 w-full border-gray-200 rounded"/>
                        </div>
                        <div class="focus:outline-none">
                            <p class="text-center text-3xl tracking-widest mb-6 text-white font-bold ">Hackathon 2.0</p>
                            <img src="/images/Hackathon-2.0.jpg" alt="" class="focus:outline-none border-4 w-full h-80 w-full border-gray-200 rounded"/>
                        </div>
                        <div class="focus:outline-none">
                            <p class="text-center text-3xl tracking-widest mb-6 text-white font-bold ">Hackathon 3.0</p>
                            <img src="/images/Hackathon-3.0.png" alt="" class="focus:outline-none border-4 w-full h-80 w-full border-gray-200 rounded"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Champion Section -->
    <section id="champion-section" class="min-h-screen bg-champ bg-cover flex bg-center flex-col justify-center items-center px-8 sm:px-24">
        <h1 class="text-white text-center mb-8 text-4xl sm:text-6xl tracking-widest font-bold">Champion</h1>
        <div class="w-full sm:w-full lg:w-2/3 h-2/3 flex flex-col items-center justify-center">
            <div class="flex flex-col w-full sm:flex-row items-center justify-center md:justify-around">
                <div class="w-2/3 my-8 flex justify-center"><img class="w-full sm:w-4/5" src="/images/svgs/champion-1.svg" alt="first.svg"></div>
                <div class="w-2/3 my-8 flex justify-center"><img class="w-full sm:w-4/5" src="/images/svgs/champion-2.svg" alt="second.svg"></div>
                <div class="w-2/3 my-8 flex justify-center"><img class="w-full sm:w-4/5" src="/images/svgs/Champion-3.svg" alt="third.svg"></div>
            </div>
        </div>
    </section>
    <!-- About us Section -->
    <section id="aboutus-section" class="min-h-screen bg-about bg-cover bg-center flex flex-col justify-center px-8 sm:px-24">
        <div class="flex justify-center lg:justify-end h-1/2">
            <div class="lg:ml-auto w-full lg:w-2/3 xl:w-1/2">
                <div class="flex flex-col">
                    <p class="text-white text-4xl font-bold sm:text-6xl">About BNCC Hackathon</p>
                    <p class="text-white py-6 text-xl sm:text-2xl">Hackathon merupakan lomba coding selama 48 jam di mana setiap tim ditantang memberikan solusi atas suatu permasalahan dengan menghasilkan produk berupa aplikasi ataupun website.</p>
                </div>
                <div class="flex flex-col sm:flex-row ">
                    <div class="flex flex-col hidden">
                        <p class="py-3 sm:py-6 text-white font-semibold text-2xl ">Register Here!</p>
                        <div class="w-48 focus:outline-none transform hover:scale-110 motion-reduce:transform-none bg-orange rounded-md text-white text-center text-xl md:text-2xl px-8 py-4 font-bold flex flex-col justify-center"><a href="{{route('register')}}">Register</a></div>
                    </div>
                    <div class="flex flex-col font-semibold text-2xl">
                        <p class="py-3 sm:py-6 text-white">Download guide book</p>
                        <a class="w-64" href="/download">
                            <div class="w-full focus:outline-none transform hover:scale-110 motion-reduce:transform-none bg-ocean rounded-md text-white text-center text-xl md:text-2xl px-8 py-4 font-bold flex flex-col justify-center">Download</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section -->
    <section class="min-h-screen bg-faq bg-cover bg-center text-white flex flex-col justify-center items-center px-8 sm:px-24 my-auto" id="faq-section">
        <div class="border-2 border-colorful rounded-lg bg-black bg-opacity-30 text-white w-full md:w-3/5 flex flex-col justify-center p-8 sm:p-16">
            <h1 class="text-6xl text-center font-bold mb-8">FaQ</h1>
            <!-- Q1 -->
            <button class="focus:outline-none transform hover:scale-110 motion-reduce:transform-none"><div class="border-t-2 border-gradient-right flex text-left" onclick="showz()">
                <h1 class="ml-4 my-2">Apa itu Hackathon 4.0?</h1>
                <div class="mt-3 ml-auto mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" /></svg></div>
            </div></button>
            <p class="pt-4 mx-6 sm:mx-10 mb-4" style="display: none;" id="zxcv">Hackathon 4.0 adalah event Hackathon ke-4 yang akan diadakan oleh BNCC. Di event ini, peserta akan ditantang untuk menyelesaikan case-case yang berhubungan dengan dunia IT dalam waktu 48 jam dalam bentuk website atau aplikasi.</p>
            <!-- Q2 -->
            <button class="focus:outline-none transform hover:scale-110 motion-reduce:transform-none"><div class="border-t-2 border-gradient-right flex text-left" onclick="show1()">
                <h1 class="mx-4 my-2">Apakah Hackathon 4.0 akan diadakan secara online?</h1>
                <div class="mt-3 ml-auto mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" /></svg></div>
            </div></button>
            <p class="pt-4 mx-6 sm:mx-10 mb-4" style="display: none;" id="asdf">Ya, Hackathon 4.0 ini akan diadakan full secara online.</p>
            <!-- Q3 -->
            <button class="focus:outline-none transform hover:scale-110 motion-reduce:transform-none"><div class="border-t-2 border-gradient-right flex text-left" onclick="show2()">
                <h1 class="mx-4 my-2">Apakah Hackathon 4.0 dipungut biaya?</h1>
                <div class="mt-3 ml-auto mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" /></svg></div>
            </div></button>
            <div class="pt-4 mx-6 sm:mx-10 mb-4" style="display: none;" id="long0">
                <p>Event Hackathon 4.0 ini dipungut biaya dan memiliki 3 paket:</p>
                <ul>
                    <li class="pl-2">A. Paket 1: Early Bird (24 September - 15 September 2020) dikenakan biaya Rp 60.000/ tim</li>
                    <li class="pl-2">B. Paket 2: Normal Price Binusian (16 September - 3 Oktober 2020) dikenakan biaya Rp 80.000/ tim</li>
                    <li class="pl-2">C. Paket 3: Normal Price Umum (16 September - 3 Oktober 2020) dikenakan biaya Rp. 100.000/ tim</li>
                </ul>
            </div>
            <!-- Q4 -->
            <button class="focus:outline-none transform hover:scale-110 motion-reduce:transform-none"><div class="border-t-2 border-gradient-right flex text-left" onclick="show3()">
                <h1 class="mx-4 my-2">Apa saja hal yang diperlukan untuk mendaftar sebagai peserta?</h1>
                <div class="mt-3 ml-auto mr-2"><svg  xmlns="http://www.w3.org/2000/svg"  width="18"  height="18"  viewBox="0 0 24 24"  fill="white"" ><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" /></svg></div>
            </div></button>
            <p class="pt-4 mx-6 sm:mx-10 mb-4" style="display: none;" id="text0">Peserta harus melakukan registrasi tim di website hackathon.bncc.net, lalu mensubmit dokumen dokumen yang diperlukan seperti KTP, CV, dan Kartu Tanda Mahasiswa(Khusus untuk Binusian).</p>
            <!-- Q5 -->
            <button class="focus:outline-none transform hover:scale-110 motion-reduce:transform-none"><div class="border-t-2 border-gradient-right flex text-left" onclick="show4()">
                <h1 class="mx-4 my-2">Apa yang dapat saya dapatkan jika memenangkan kompetisi ini?</h1>
                <div class="mt-3 ml-auto mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" /></svg></div>
            </div></button>
            <div class="pt-4 mx-6 sm:mx-10 mb-4" style="display: none;" id="long1">
                <p>Bila memenangkan kompetisi ini akan mendapatkan uang dan sertifikat dengan rincian:
                    <ul>
                        <li class="pl-2">A. Juara 1 mendapat uang senilai Rp 10.000.000 + Sertifikat</li>
                        <li class="pl-2">B. Juara 2 mendapat uang senilai Rp 8.000.000 + Sertifikat</li>
                        <li class="pl-2">C. Juara 3 mendapat uang senilai Rp 5.000.000 + Sertifikat</li>
                    </ul>
                </p>
            </div>
            <!-- Q6 -->
            <button class="focus:outline-none transform hover:scale-110 motion-reduce:transform-none"><div class="border-t-2 border-gradient-right flex text-left" onclick="show5()">
                <h1 class="mx-4 my-2">Apa saja persyaratan untuk menjadi peserta dalam Hackathon 4.0 ini?</h1>
                <div class="mt-3 ml-auto mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" /></svg></div>
            </div></button>
            <p class="pt-4 mx-6 sm:mx-10 mb-4" style="display: none;" id="text1">Untuk mengikuti Hackathon 4.0 ini, peserta dapat tim yang maksimal terdiri dari 3-4 orang dengan rentang usia 18-25 tahun. Setiap peserta diwajibkan untuk mengirimkan CV pada dashboard masing-masing tim. Setiap tim juga diwajibkan sudah melakukan pembayaran biaya lomba bila berminat mengikuti Hackathon 4.0 ini.</p>
            <!-- Q7 -->
            <button class="focus:outline-none transform hover:scale-110 motion-reduce:transform-none"><div class="border-t-2 border-gradient-right flex text-left" onclick="show6()">
                <h1 class="mx-4 my-2">Apakah peserta diwajibkan untuk membentuk tim saat mengikuti Hackathon 4.0?</h1>
                <div class="mt-3 ml-auto mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" /></svg></div>
            </div></button>
            <p class="pt-4 mx-6 sm:mx-10 mb-4" style="display: none;" id="text2">Peserta tidak diwajibkan untuk membentuk tim dan diperbolehkan untuk mengikuti event ini secara individu bila berminat.</p>
            <!-- Q8 -->
            <button class="focus:outline-none transform hover:scale-110 motion-reduce:transform-none"><div class="border-t-2 border-gradient-right flex text-left" onclick="show7()">
                <h1 class="mx-4 my-2">Apakah peserta diperbolehkan untuk terdaftar di 2 tim?</h1>
                <div class="mt-3 ml-auto mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" /></svg></div>
            </div></button>
            <p class="pt-4 mx-6 sm:mx-10 mb-4" style="display: none;" id="text3">Peserta tidak diperbolehkan mendaftar di lebih dari satu tim.</p>
            <!-- Q9 -->
            <button class="focus:outline-none transform hover:scale-110 motion-reduce:transform-none"><div class="border-t-2 border-gradient-right flex text-left" onclick="show8()">
                <h1 class="mx-4 my-2">Bagaimana jika saat event ini berlangsung, saya ada kepentingan lain yang harus dilakukan?</h1>
                <div class="mt-3 ml-auto mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" /></svg></div>
            </div></button>
            <p class="pt-4 mx-6 sm:mx-10 mb-4" style="display: none;" id="text4">Bila ada kepentingan lain saat event ini berlangsung, maka peserta wajib untuk memberikan info kepada panitia minimal H-2 dari event.</p>
            <!-- Q10 -->
            <button class="focus:outline-none transform hover:scale-110 motion-reduce:transform-none"><div class="border-t-2 border-gradient-right flex text-left" onclick="show9()">
                <h1 class="mx-4 my-2">Kapan pendaftaran ditutup?</h1>
                <div class="mt-3 ml-auto mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" /></svg></div>
            </div></button>
            <p class="pt-4 mx-6 sm:mx-10 mb-4" style="display: none;" id="text5">Pendaftaran ditutup pada 3 Oktober 2021, jam 21:00 WIB.</p>
            <!-- Q11 -->
            <button class="focus:outline-none transform hover:scale-110 motion-reduce:transform-none"><div class="border-t-2 border-gradient-right flex text-left" onclick="show10()">
                <h1 class="mx-4 my-2">Bagaimana jika peserta sudah menyiapkan sebagian source code sebelum event dimulai?</h1>
                <div class="mt-3 ml-auto mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white" ><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg></div>
            </div></button>
            <p class="pt-4 mx-6 sm:mx-10 mb-4" style="display: none;" id="text6">Menyiapkan source code sebelum event dimulai, melanjutkan dan melombakan lagi project yang pernah dibuat merupakan pelanggaran. Apabila peserta terbukti melakukan pelanggaran maka akan didiskualifikasi.</p>
            <!-- Q12 -->
            <button class="focus:outline-none transform hover:scale-110 motion-reduce:transform-none"><div class="border-t-2 border-gradient-right flex  text-left" onclick="show11()">
                <h1 class="mx-4 my-2">Bila saya tidak memiliki basic coding maupun design, apakah saya masih boleh ikut?</h1>
                <div class="mt-3 ml-auto mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white"> <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/> </svg></div>
            </div></button>
            <p class="pt-4 mx-6 sm:mx-10 mb-4" style="display: none;" id="text7">Peserta yang tidak memiliki basic coding tetap diperbolehkan mengikuti Hackathon 4.0. Namun, nantinya akan ada seleksi untuk menentukan tim mana yang bisa berpartisipasi di hari H Hackathon.</p>
        </div>
    </section>
    <!-- Why Join Section -->
    <section class="min-h-screen bg-blacks bg-cover flex flex-col justify-center items-center px-8 sm:px-24">
        <h1 class="text-white text-center mt-10 sm:mt-0 text-4xl sm:text-5xl font-bold">Why Join Us?</h1>
        <div class="w-full sm:w-full lg:w-2/3 h-2/3 flex flex-col items-center justify-center">
            <div class="flex flex-col items-center sm:flex-row w-full my-8">
                <div class="w-4/5 sm:w-1/2">
                    <img src="/images/svgs/network-text.svg" alt="wjslogo.svg" id="wjs1" class="justify-self-center" style="display: flex;">
                    <img src="/images/svgs/job-text.svg" alt="wjs2" id="wjs2" class="justify-self-center" style="display: none;">
                    <img src="/images/svgs/mentoring-text.svg" alt="wjs2" id="wjs3" class="justify-self-center" style="display: none;">
                </div>
                <div class="w-4/5 sm:w-1/2 flex flex-col justify-center items-center outline-none">
                    <button class="w-full transform hover:scale-110 motion-reduce:transform-none sm:w-4/5 my-4 outline-none focus:outline-none" onclick="wsja()"><img src="/images/svgs/networking1.svg" alt="wjsbutton1" class="outline-none w-full"></button>
                    <button class="w-full transform hover:scale-110 motion-reduce:transform-none sm:w-4/5 my-4 outline-none focus:outline-none" onclick="wsjb()"><img src="/images/svgs/job2.svg" alt="wjsbutton2" class="outline-none w-full"></button>
                    <button class="w-full transform hover:scale-110 motion-reduce:transform-none sm:w-4/5 my-4 outline-none focus:outline-none" onclick="wsjc()"><img src="/images/svgs/Mentoring3.svg" alt="wjsbutton3" class="outline-none w-full"></button>
                </div>
            </div>
        </div>
    </section>
    <!-- Timeline Section -->
    <section class="min-h-screen bg-timeline bg-blacks flex flex-col justify-center px-8 sm:px-24" id="timeline-section">
        <h1 class="text-center text-white my-10 text-5xl sm:text-6xl font-bold tracking-widest uppercase">TIMELINE</h1>
        <div class="flex flex-col items-center justify-evenly md:flex-row w-full">
            <img class="w-4/5 my-4 md:mr-4 md:w-1/2 lg:w-1/4" src="/images/svgs/Group 164.svg" alt="timeline.svg">
            <img class="w-4/5 my-4 md:mr-4 md:w-1/2 lg:w-1/4" src="/images/svgs/Group 165.svg" alt="timeline.svg">
        </div>
        <div class="flex flex-col items-center justify-evenly md:flex-row w-full">
            <img class="w-4/5 my-4 md:ml-4 md:w-1/2 lg:w-1/4" src="/images/svgs/Group 156.svg" alt="timeline.svg">
            <img class="w-4/5 my-4 md:ml-4 md:w-1/2 lg:w-1/4" src="/images/svgs/Group 157.svg" alt="timeline.svg">
        </div>
    </section>
    <!-- Sponsor Section -->
    <section class="min-h-screen bg-blacks bg-cover bg-center flex flex-col justify-center items-center px-8 sm:px-24">
        <div class="flex flex-col justify-center w-full text-white">
            <h1 class="text-center mt-10 text-5xl sm:text-6xl font-bold tracking-widest uppercase">Sponsor</h1>
            <h3 class="text-center font-bold text-5xl mt-10 font-medium">Platinum</h3>
            <img src="/images/sponsor/platinum.png" alt="" class="mx-auto w-1/2 mt-8" />
            <!-- Gold -->
            <div class="flex flex-col md:flex-row mt-10">
                <h1 class="text-center my-auto mx-auto font-bold text-4xl">Gold</h1>
                <div class="multiple-items mx-auto w-5/6 my-8">
                    <div class="focus:outline-none mx-2"><img src="/images/sponsor/gold1.png" alt="" class="" /></div>
                    <div class="focus:outline-none mx-2"><img src="/images/sponsor/gold2.png" alt="" class="" /></div>
                    <div class="focus:outline-none mx-2"><img src="/images/sponsor/gold3.png" alt="" class="" /></div>
                    <div class="focus:outline-none mx-2"><img src="/images/sponsor/gold4.png" alt="" class="" /></div>
                </div>
            </div>
            <!-- Silver -->
            <div class="flex flex-col md:flex-row mt-10">
                <h1 class="text-center my-auto mx-auto font-bold text-3xl">Silver</h1>
                <div class="multiple-items2 mx-auto w-5/6 my-8">
                    <div class="focus:outline-none mx-2"><img src="/images/sponsor/silver1.png" alt="" class="" /></div>
                    <div class="focus:outline-none mx-2"><img src="/images/sponsor/silver2.png" alt="" class="" /></div>
                    <div class="focus:outline-none mx-2"><img src="/images/sponsor/silver3.png" alt="" class="" /></div>
                    <div class="focus:outline-none mx-2"><img src="/images/sponsor/silver4.png" alt="" class="" /></div>
                    <div class="focus:outline-none mx-2"><img src="/images/sponsor/silver5.png" alt="" class="" /></div>
                    <div class="focus:outline-none mx-2"><img src="/images/sponsor/silver6.png" alt="" class="" /></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Media Partner -->
    <section class="h-100 bg-blacks bg-cover bg-center flex flex-col justify-center items-center p-8 sm:p-24">
        <h1 class="text-center text-white font-bold text-3xl sm:text-5xl tracking-widest">MEDIA PARTNER</h1>
        <div class="flex flex-col justify-center mt-10 border-gradient border-4 w-full lg:w-1/2 mx-auto">
            <div class="multiple-items2 mx-auto mt-auto h-1/2 w-full my-auto p-8">
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp1.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp2.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp3.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp7.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp8.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp9.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp14.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp15.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp16.png" alt="mediapartner.png"/></div>
            </div>
            <div class="multiple-items2 mx-auto my-0 w-full my-auto p-8">
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp4.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp5.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp6.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp10.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp11.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp12.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp13.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp17.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp18.png" alt="mediapartner.png"/></div>
                <div class="focus:outline-none w-1/3 h-1/2 mx-2 flex flex-col justify-center"><img class="focus:outline-none w-full h-full flex self-center" src="/images/mediapartner/mp19.png" alt="mediapartner.png"/></div>
            </div>
        </div>
    </section>
    <!-- Other Events -->
    <section class="min-h-screen bg-champ bg-cover bg-center flex flex-col justify-center items-center px-8 sm:px-24 ">
        <div class="w-full flex flex-col w-full lg:w-2/3 justify-around">
            <h1 class="text-white font-bold text-3xl sm:text-5xl tracking-widest text-center">OTHER EVENT</h1>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="bg-ocean w-full md:w-2/5 md:mx-6 lg:mx-8 flex flex-col justify-center p-8 rounded-xl mt-8">
                    <img src="/images/aboutpage.png" alt="" class="w-full">
                    <!-- <h1 class="text-white text-xs sm:text-xl text-left pt-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur minus voluptatum maiores dignissimos facilis expedita? Consectetur et exercitationem dignissimos mollitia eaque sapiente voluptas vero iusto! Impedit dolorem eos repellat laboriosam?</h1> -->
                    <div class="h-60"></div>
                </div>
                <div class="bg-ocean w-full md:w-2/5 md:mx-6 lg:mx-8 flex flex-col justify-center p-8 rounded-xl mt-8">
                    <img src="/images/aboutpage.png" alt="" class="w-full">
                    <!-- <h1 class="text-white text-xs sm:text-xl text-left pt-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur minus voluptatum maiores dignissimos facilis expedita? Consectetur et exercitationem dignissimos mollitia eaque sapiente voluptas vero iusto! Impedit dolorem eos repellat laboriosam?</h1> -->
                    <div class="h-60"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us -->
    <section class="h-100 bg-blacks bg-cover bg-center flex flex-col justify-center items-center px-8 sm:px-24 focus:outline-none">
        <div class="w-full my-10 flex flex-col md:flex-row-reverse">
            <div class="flex flex-col md:w-2/3">
                <h1 class="text-2xl sm:text-4xl md:text-3xl lg:text-5xl text-center tracking-widest text-white font-bold">We’d love to hear from you!</h1>
                <img class="hidden md:flex w-full" src="/images/contactpng.png" alt="contact-png">
            </div>
            <div class="mt-8 bg-darkpurple w-full md:w-1/3 md:mr-6 lg:mr-8 flex flex-col justify-evenly py-8 md:py-0 px-8 rounded-xl o">
                <h1 class="text-center text-white text-2xl lg:text-3xl xl:text-4xl font-bold">Contact Us</h1>
                <form method="post" action="{{route('send')}}"class="flex flex-col items-center justify-center content-between space-y-6 md:space-y-8">
                    @csrf
                    <input class="text-white focus:outline-none w-full placeholder-white bg-transparent border-white border-b-2" type="text" name="name" placeholder="Name" required>
                    <input class="text-white focus:outline-none w-full placeholder-white bg-transparent border-white border-b-2" type="email" name="email" placeholder="Email" required>
                    <input class="text-white focus:outline-none w-full placeholder-white bg-transparent border-white border-b-2" type="text" name="subject" placeholder="Subject" required>
                    <input class="text-white focus:outline-none w-full placeholder-white bg-transparent border-white border-b-2" type="text" name="message" placeholder="Message" required>
                    <button class="sm:2/3 lg:w-1/2 bg-orange focus:outline-none hover:bg-red-700 text-center text-white font-bold text-xl p-2 rounded-lg" type="submit" name="send" value="Send">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Pop Up Download -->
    <section id="popUpDownload" class="w-full z-50 bg-blacks bg-opacity-50 items-center h-12 rounded-t-2xl fixed bottom-0 flex flex-col-reverse sm:flex-row justify-between px-8 sm:px-24">
        <h1 class="my-4 text-white text-md md:text-xl">Download Guid Book Here</h1>
        <a href="/download" class="my-4"><button class="p-2 focus:outline-none transform hover:scale-110 motion-reduce:transform-none animate-bounce sm:p-1 s m:w-48 md:w-64 rounded-xl bg-purples text-white text-md md:text-xl">Download Here</button></a>
    </section>
    <!-- Footer -->
    <footer class="bg-champ bg-cover bg-center flex flex-col p-8 sm:px-24">
        <div class="w-full">
            <!-- Top -->
            <div class="w-full flex flex-col lg:flex-row">
                <div class="w-full sm:w-1/2 lg:w-1/3 flex lg:justify-center items-center">
                    <a target="_blank" href="https://www.instagram.com/technoscapebncc/" class="transform hover:scale-110 motion-reduce:transform-none mr-2" id="instagram-footer"><img src="/images/svgs/Instagram.svg" alt="" width="50px" height="50px"></a>
                    <a target="_blank" href="https://www.instagram.com/technoscapebncc/" class="text-white text-center">@technoscapebncc</a>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/3 flex lg:justify-center items-center">
                    <a  href="mailto:technoscape@bncc.net" class="transform hover:scale-110 motion-reduce:transform-none mr-2" id="email-footer"><img src="/images/svgs/email.svg" alt="" width="50px" height="50px"></a>
                    <a  href="mailto:technoscape@bncc.net" class="text-white text-center">technoscape@bncc.net</a>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/3 flex lg:justify-center items-center">
                    <a target="_blank" href="https://www.linkedin.com/company/bina-nusantara-computer-club/" class="transform hover:scale-110 motion-reduce:transform-none mr-2" id="footer-linkedin"><img src="/images/svgs/Linkedin.svg" alt="" width="50px" height="50px"></a>
                    <a target="_blank" href="https://www.linkedin.com/company/bina-nusantara-computer-club/" class="text-white text-center">Bina Nusantara Computer Club</a>
                </div>
            </div>
            <!-- bottom -->
            <div class="w-full flex flex-col lg:flex-row">
                <div class="w-full sm:w-1/2 flex lg:justify-center items-center">
                    <a target="_blank" href="https://web.facebook.com/bina.nusantara.computer.club/" class="transform hover:scale-110 motion-reduce:transform-none mr-2" id="facebook-footer"><img src="/images/svgs/Facebook.svg" alt="" width="50px" height="50px"></a>
                    <a target="_blank" href="https://web.facebook.com/bina.nusantara.computer.club/" class="text-white text-center">Bina Nusantara Computer Club</a>
                </div>
                <div class="w-full sm:w-1/2 flex lg:justify-center items-center">
                    <a target="_blank" href="https://twitter.com/bncc_binus/" class="transform hover:scale-110 motion-reduce:transform-none mr-2" id="twitter-footer"><img src="/images/svgs/Twitter.svg" alt="" width="50px" height="50px"></a>
                    <a target="_blank" href="https://twitter.com/bncc_binus/" class="text-white text-center">@BNCC_Binus</a>
                </div>
            </div>
        </div>
        <!-- Bottom -->
        <div class="flex flex-row justify-end">
            <div class="w-1/3 flex flex-col justify-end">
                <div class="flex flex-col sm:flex-row justify-evenly items-center">
                    <p class="text-white">Powered By:</p>
                    <img src="/images/Logo-Binus-University.png" alt="" class="w-full sm:w-1/2 lg:w-1/3">
                </div>
                <hr class="w-full mt-4">
                <p class="text-left text-xs text-white">&copy 2020, Bina Nusantara Computer Club, All Right Reserved</p>
            </div>
            <div class="w-1/3 flex flex-col items-center justify-center">
                <a href="#"><img class="transform hover:scale-110 motion-reduce:transform-none" src="/images/ehackathon_logo_1.png" alt="" width="100px" height="100px"></a>
                <a href="#home-section" class="text-center hover:text-red-400 text-white">Home</a>
                <a href="#champion-section" class="text-center hover:text-red-400 text-white">Champion</a>
                <a href="#aboutus-section" class="text-center hover:text-red-400 text-white">About Us</a>
                <a href="#faq-section" class="text-center hover:text-red-400 text-white">FaQ</a>
                <a href="#timeline-section" class="text-center hover:text-red-400 text-white">Timeline</a>
                <a class="transform hover:scale-110 motion-reduce:transform-none animate-bounce my-2"href="#"><img src="/images/svgs/arrow-up.svg" alt="" width="25px" height="25px"></a>
                <a href="#" class="text-center hover:text-red-400 text-white ">To the Top</a>
            </div>
            <div class="w-1/3 flex flex-col justify-end">
                <div>
                    <div class="flex flex-col sm:flex-row justify-evenly items-center">
                        <p class="text-white">Organized By:</p>
                        <img src="/images/BNCC_T.png" alt="" class="w-full sm:w-1/2 lg:w-1/3">
                    </div>
                    <hr class="w-full mt-4">
                    <div class="w-full">
                        <p class="text-white text-xs flex flex-row justify-around"><span></span>Term of Service</span> <span>Privacy Policy</span></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="{{asset('js/scriptindex.js')}}"></script>
</body>
</html>
