<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Ups!</title>
</head>

<body class="h-[100vh]">
  @if (in_array(auth()->user()->role_id, [App\Models\User::ADMIN, App\Models\User::SUPER_ADMIN]))
    <div class="px-8 py-4 flex flex-col sm:flex-row gap-4 sm:gap-0 justify-between items-center bg-gray-700 text-white">
      <div class="flex flex-col text-center sm:text-left">
        <span>Anda adalah <strong>ADMIN</strong></span>
      </div>
      <a href="{{ route('admin.dashboard') }}" class="bg-blue-700 px-4 py-2 rounded-lg">Go to Dashboard &nbsp; &rarr;</a>
    </div>
  @endif

  <img class="absolute left-0 -z-30 block sm:hidden" src="{{ asset('img/Grafis_8_S.svg') }}" />
  <img class="absolute h-full right-0 -z-30 hidden sm:block" src="{{ asset('img/Grafis_8_L.svg') }}" />

  <div class="max-w-lg h-full flex flex-col justify-center items-center mx-auto text-center">
    <h1 class="text-5xl sm:text-7xl font-bold mb-8">Terima Kasih</h1>
    <p class="text-lg sm:text-xl font-light">
      Voting sudah selesai
    </p>
    <p class="text-lg sm:text-xl font-light">
      Terimakasih sudah mengikuti pemilihan ketua OSIS dan MPK tahun 2023
    </p>

    <a href="{{ route('home') }}"
      class="max-w-lg w-[80%] mx-4 fixed bottom-5 text-center bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
      Kembali
    </a>
  </div>
</body>

</html>
