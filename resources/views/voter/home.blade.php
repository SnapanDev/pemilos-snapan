<!DOCTYPE html>
<html class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Voting SMK Negeri 8 Semarang</title>
    @vite('resources/css/app.css')
    @vite('resources/js/data.ts')
</head>

<body>
    <!-- @if (in_array(auth()->user()->role_id, [App\Models\User::ADMIN, App\Models\User::SUPER_ADMIN]))
<div class="px-8 py-4 flex flex-col sm:flex-row gap-4 sm:gap-0 justify-between items-center bg-gray-700 text-white">
      <span>Anda adalah <strong>ADMIN</strong></span>
      <a href="{{ route('admin.dashboard') }}" class="bg-blue-700 px-4 py-2 rounded-lg">Go to Dashboard &nbsp; &rarr;</a>
    </div>
@endif -->
    <!-- Section 1# -->
    <main class="justify-center z-[99] px-8">
        <div class="w-full mx-auto min-h-screen justify-center items-center flex">
            <img class="h-72 absolute -z-[99] opacity-[0.25] md:hidden mx-auto left-16 sm:mx-0"
                src="/img/maskot_pemilos_2023.png" alt="" />

            <div class="flex flex-wrap">
                <div class="flex-auto w-2/6 p-12">
                    <img class="max-w-[300px]" src="/img/logo.png" alt="" srcset="" />

                    <div class="w-full mt-16 space-y-8">
                        <h1 class="text-[38px] leading-10 font-extrabold">
                            Demokrasi Milenial IDOLA!
                        </h1>
                        <p>
                            Ayo, jangan lewatkan kesempatan ini untuk berkontribusi. Pilihanmu adalah langkah awal
                            menuju masa depan yang lebih baik untuk SMK Negeri 8 Semarang. Suara Anda memiliki dampak
                            besar, dan bersama-sama kita dapat menciptakan perubahan yang berarti.
                        </p>
                        <button onclick="location.href='#introduction';"
                            class="block uppercase rounded-[28px] shadow bg-blue-800 hover:bg-blue-700 focus:shadow-outline focus:outline-none text-white text-base font-bold py-4 px-12">
                            Ayo Mulai!
                        </button>
                    </div>
                </div>
                <div class="hidden md:flex flex-auto w-2/12">
                    <img class="ml-auto h-[85%]" src="/img/maskot_pemilos_2023.png" alt="" />
                </div>
            </div>
        </div>
    </main>
    <!-- End Section 1# -->

    <section id="introduction" class="w-full max-w-5xl mx-auto px-8 md:py-0">
        <div class="flex flew-wrap flex-col sm:flex-row">
            <div class="flex-auto w-full p-7 sm:w-3/4">
                <img src="/img/all_paslon.png" alt="" />
            </div>

            <div class="flex-auto self-center p-4 sm:p-0">
                <h4 class="text-[30px] font-extrabold">Ayo kenalan dulu!</h4>
                <div class="flex self-center gap-5">
                    <span class="h-12 bg-blue-700 p-[1.5px] rounded-3xl self-center"></span>
                    <p>
                        Untuk memilih calon ketua OSIS dan paslon ketua & wakil MPK, kamu
                        bisa terus gulir halaman ini kebawah
                    </p>
                </div>
            </div>
        </div>
    </section>

    <img class="h-24 w-full mt-24" src="/img/grafis_1.png" alt="" />
    <section class="w-full bg-[#f0f5ff] mb-0 px-8 md:py-0">
        <div class="max-w-5xl mx-auto w-full p-4 sm:w-[1024px]">
            <h1 class="text-3xl text-[#3063af] font-bold sm:text-4xl text-center">
                Calon Ketua OSIS
            </h1>
        </div>

        <!-- CALON -->
        <div class="max-w-5xl my-1 mx-auto w-full sm:my-16 sm:w-[1024px]">
            <div class="flex flex-wrap p-4 flex-col sm:flex-row gap-11">
                <div class="flex-auto">
                    <!--  w-52 sm:w-[5%] -->
                    <img src="/img/foto_osis_01.png" class="w-52 sm:w-72 max-w-full h-auto mx-auto" alt="Calon" />
                </div>
                <div class="flex-auto text-slate-800 w-full sm:w-[45%]">
                    <div class="mb-8 space-y-1">
                        <h1 class="text-sm font-semibold text-[#3063af] text-center sm:text-start">Caketos 1</h1>
                        <h2 class="text-3xl font-bold text-center sm:text-start">Rafif Ali Fahrezi</h2>
                        <h1 class="text-sm text-center sm:text-start">SNAPAN KEMBALI JAYA</h1>
                    </div>

                    <div class="flex flex-wrap flex-col sm:flex-row">
                        <div class="flex-auto text-sm w-full ">
                            <p class="font-semibold text-[#3063af] my-4">Visi</p>
                            <p id="#visiCaketos1" class="text-justify">
                              <!-- Injected By Javascript -->
                            </p>
                        </div>
                        <!-- List -->
                        <div id="#misiCaketos1" class="flex flex-col w-full text-sm ">
                            <p class="font-semibold text-[#3063af] my-4">Misi</p>
                            <!-- Injected By Javascript -->
                        </div>
                            <!-- List -->
                            <div id="#prokerCaketos1" class="flex flex-col w-full text-sm ">
                                <p class="font-semibold text-[#3063af] my-4">Program Kerja</p>
                                 <!-- Injected By Javascript -->
                            </div>
                    </div>
                </div>
            </div>
            <div class="block rounded-3xl bg-[#3063af] text-red-500 w-32 h-1 mx-auto my-20"></div>
        </div>

        <div class="max-w-5xl my-1 mx-auto w-full sm:my-16 sm:w-[1024px]">
            <div class="flex flex-wrap p-4 flex-col sm:flex-row gap-11">
                <div class="flex-auto w-52 sm:w-[5%]">
                    <img src="/img/foto_osis_02.png" class="max-w-full h-auto" alt="Calon" />
                </div>
                <div class="flex-auto text-slate-800 w-full sm:w-[45%]">
                    <div class="mb-8">
                        <span class="text-sm font-semibold text-[#3063af]">Caketos 2</span>
                        <h2 class="text-3xl font-bold">Yeski Kristiawan</h2>
                        <span class="text-sm">MAJU BERSAMA DUA</span>
                    </div>

                    <div class="flex flex-wrap flex-col sm:flex-row">
                        <div class="flex-auto pr-7 text-sm w-full sm:w-1/3">
                            <p class="font-semibold text-[#3063af] my-4">Visi</p>
                            <span>
                                Menjadikan OSIS yang selalu berorientasi ke depan dengan landasan Pancasila untuk
                                memajukan SMKN 8
                                Semarang.
                            </span>
                        </div>

                        <div class="flex-auto pr-7 w-full text-sm sm:w-1/3">
                            <p class="font-semibold text-[#3063af] my-4">Misi</p>
                            <ul class="list-inside border-box">
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Menjadikan OSIS sebagai wadah kreatifitas dan aspirasi.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Menciptakan lingkungan sekolah yang nyaman.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Menjalin kekeluargaan warga SMKN 8 Semarang.
                                </li>
                            </ul>
                        </div>

                        <div class="flex-auto pr-7 text-sm">
                            <p class="font-semibold text-[#3063af] my-4">Program kerja</p>
                            <ul class="list-inside">
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Mengadakan kegiatan yang mengembangkan minat dan bakat siswa.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block rounded-3xl bg-[#3063af] text-red-500 w-32 h-1 mx-auto my-20"></div>
        </div>
        <!-- #CALOND -->
        <img class="h-4 w-full sm:h-24" src="/img/grafis_4.png" alt="" />
    </section>
    <img class="h-24 w-full" src="/img/grafis_4.png" alt="" />

    <img class="h-24 w-full mt-0" src="/img/grafis_3_yellow.png" alt="" />
    <section class="w-full bg-[#fffbe0] mb-0">
        <div class="max-w-5xl mx-auto w-full p-4 sm:w-[1024px]">
            <h1 class="text-3xl text-[#3063af] font-bold sm:text-4xl text-center">
                Paslon Ketua & Wakil MPK
            </h1>
        </div>

        <!-- CALON -->
        <div class="max-w-5xl my-1 mx-auto w-full sm:my-16 sm:w-[1024px]">
            <div class="flex flex-wrap p-4 flex-col sm:flex-row gap-11">
                <div class="flex-auto w-52 sm:w-[5%]">
                    <img src="/img/foto_mpk_01.png" class="max-w-full h-auto" alt="Calon" />
                </div>
                <div class="flex-auto text-slate-800 w-full sm:w-[45%]">
                    <div class="mb-8">
                        <span class="text-sm font-semibold text-[#3063af]">Paslon 1</span>
                        <h2 class="text-3xl font-bold">Mayda Susanti & Cheril Keiza Anzella</h2>
                    </div>

                    <div class="flex flex-wrap flex-col sm:flex-row">
                        <div class="flex-auto pr-7 text-sm w-full sm:w-1/3">
                            <p class="font-semibold text-[#3063af] my-4">Visi</p>
                            <span>
                                Mewujudkan MPK SMKN 8 SEMARANG sebagai majelis yang menjunjung tinggi rasa tanggung
                                jawab dan
                                kedisiplinan serta
                                berakhlak mulia demi mewujudkan generasi muda yang berkualitas.
                            </span>
                        </div>

                        <div class="flex-auto pr-7 w-full text-sm sm:w-1/3">
                            <p class="font-semibold text-[#3063af] my-4">Misi</p>
                            <ul class="list-inside border-box">
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Meningkatkan pengawasan terhadap pengurus OSIS.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Mengoptimalkan kinerja MPK SMKN 8 Semarang sebagai wadah menyebarkan apresiasi siswa
                                    dalam mendukung
                                    keterbukaan informasi di lingkungan sekolah.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Membentuk karakter MPK yang baik dan bertanggung jawab kepada OSIS, Guru, dan semua
                                    warga SMKN 8
                                    Semarang.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Meningkatkan etos kerja serta perfesionalitas dalam berorganisasi.
                                </li>
                            </ul>
                        </div>

                        <div class="flex-auto pr-7 text-sm">
                            <p class="font-semibold text-[#3063af] my-4">Program kerja</p>
                            <ul class="list-inside">
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Melakukan pemilihan ketua osis.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Mematangkan proker-proker MPK yang belum terjalani dari angkatan sebelumnya.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Mengadakan rapat WAJIB anggota MPK dan OSIS guna keterbukaannya kepada aspirasi
                                    siswa serta
                                    meningkatkan keharmonisan dan solidaritas sesama anggota.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Bekerja sama dengan pengurus OSIS unuk mengadakan event guna mengembangkan bakat
                                    siswa siswi SMKN 8
                                    SEMARANG.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block rounded-3xl bg-[#3063af] text-red-500 w-32 h-1 mx-auto my-20"></div>
        </div>

        <div class="max-w-5xl my-1 mx-auto w-full sm:my-16 sm:w-[1024px]">
            <div class="flex flex-wrap p-4 flex-col sm:flex-row gap-11">
                <div class="flex-auto w-52 sm:w-[5%]">
                    <img src="/img/foto_mpk_02.png" class="max-w-full h-auto" alt="Calon" />
                </div>
                <div class="flex-auto text-slate-800 w-full sm:w-[45%]">
                    <div class="mb-8">
                        <span class="text-sm font-semibold text-[#3063af]">Paslon 2</span>
                        <h2 class="text-3xl font-bold">Diyah Putri Saraswati & Emmania Putri Islamadina</h2>
                    </div>

                    <div class="flex flex-wrap flex-col sm:flex-row">
                        <div class="flex-auto pr-7 text-sm w-full sm:w-1/3">
                            <p class="font-semibold text-[#3063af] my-4">Visi</p>
                            <span>
                                Menjadikan MPK SMKN 8 SEMARANG sebagai organisasi legislatif yang TTPB (Terbuka,
                                Terpercaya,
                                Professional & Bertanggung jawab) serta mengoptimalkan fungsi organisasi untuk
                                kepentingan bersama yang
                                dilandasi iman & takwa dengan didukung oleh IPTEK yang unggul untuk mencapai tujuan
                                bersama.
                            </span>
                        </div>

                        <div class="flex-auto pr-7 w-full text-sm sm:w-1/3">
                            <p class="font-semibold text-[#3063af] my-4">Misi</p>
                            <ul class="list-inside border-box">
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Menggali informasi yang faktual guna terciptanya lingkungan SMKN 8 Semarang yang
                                    aman dan nyaman.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Menciptakan ruang aspirasi sebagai wadah untuk memberi kritik dan saran yang
                                    membangun.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Mengelola aspirasi siswa siswi guna mewujudkan SMKN 8 Semarang menjadi lebih baik
                                    dan berkembang.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Mengintegrasikan hubungan MPK dengan OSIS serta mendukung secara moril dan materil
                                    kegiatan OSIS
                                    dengan mengedepankan asas kekeluargaan.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Meningkatkan profesionalitas kinerja dalam mengevaluasi seluruh kegiatan yang telah
                                    terlaksanakan oleh
                                    OSIS.
                                </li>
                            </ul>
                        </div>

                        <div class="flex-auto pr-7 text-sm">
                            <p class="font-semibold text-[#3063af] my-4">Program kerja</p>
                            <ul class="list-inside">
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Mengadakan SUMPS (Sidang Umum Majelis Perwakilan Siswa) dan STT (Sidang Tengah
                                    Tahun).
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Pembuatan Buku Aspirasi Idola Generasi - Z untuk disalurkan kepada pihak sekolah
                                    terkait kritik dan
                                    saran siswa siswi SMKN 8 Semarang.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Mengadakan KMT (Konferensi Meja Terbuka) secara rutin sekurang-kurangnya setiap
                                    minggunya.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Mengadakan suatu event yang membangun daya dan minat kreativitas untuk bisa
                                    diaplikasikan ke ranah
                                    yang
                                    lebih luas.
                                </li>
                                <li class="flex items-center my-3">
                                    <svg class="w-4 h-4 mr-1.5 text-[#3063af]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>

                                    Mengadakan orasi serta pemilihan ketua MPK dan OSIS periode selanjutnya.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block rounded-3xl bg-[#3063af] text-red-500 w-32 h-1 mx-auto my-20"></div>
        </div>
        <!-- #CALOND -->

        <img class="h-24 w-full" src="/img/grafis_4.png" alt="" />
    </section>

    <img class="h-24 w-full" src="/img/grafis_5.png" alt="" />
    <section class="p-14 text-white"
        style="
        background: linear-gradient(
            180deg,
            rgba(8, 56, 127, 1) 0%,
            rgba(11, 77, 175, 1) 100%
          )
          no-repeat;
      ">
        <div class="flex flex-wrap flex-col gap-20 sm:flex-row sm:gap-60 w-[90%] mx-auto">
            <div class="flex-auto w-full sm:w-[10%]">
                <h1 class="text-4xl font-bold w-full my-7 sm:w-96">
                    Sudah siap untuk memilih pilihanmu?
                </h1>
                <span class="w-96">Jika kamu sudah memiliki pilihan, tekan tombol dibawah ini untuk
                    memilih paslon.
                </span>
            </div>

            <div class="flex-auto sm:self-center">
                <img class="sm:w-[50%]mt-8" src="/img/grafis_6.svg" alt="" />
            </div>
        </div>
        <div class="w-[90%] mx-auto">
            <a class="block w-52 font-semibold rounded-full bg-[#08387f] text-white py-4 px-12 mt-12 hover:bg-[#083e90]"
                href="{{ route('vote') }}">Pilih Sekarang</a>
        </div>
    </section>
</body>

</html>
