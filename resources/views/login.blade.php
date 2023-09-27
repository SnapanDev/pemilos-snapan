<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
{{--  <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('build/assets/app.9c91aa94.css') }}">--}}
  <title>Selamat Datang - Login</title>
</head>

<body>
  <div class="flex h-screen">
    <div class="flex w-full lg:w-[40%] items-center bg-white space-y-8 mx-auto">
      <div class="w-full px-8 md:px-32 lg:px-24">
        <form class="p-5 bg-white rounded-md shadow-2xl" method="post" action="{{ route('login') }}">
          @csrf
          <h1 class="mb-8 text-2xl font-bold text-center text-gray-800">Pemilos 2023</h1>
          @error('auth_failed')
            <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
              <svg class="inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                  clip-rule="evenodd"></path>
              </svg>
              <div>
                {{ $message }}
              </div>
            </div>
          @enderror
          <div class="flex items-center px-3 py-2 mb-8 border-2 rounded-2xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
            </svg>
            <input autocomplete="off" id="username" class="w-full pl-2 border-none outline-none " type="text" name="username"
              placeholder="Username" value="{{ old('username') }}" />
          </div>
          <div class="flex items-center px-3 py-2 mb-8 border-2 rounded-2xl ">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20"
              fill="currentColor">
              <path fillRule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clipRule="evenodd" />
            </svg>
            <input class="w-full pl-2 border-none outline-none" type="password" name="password" id="password"
              placeholder="Password" />
          </div>
          <button type="submit"
            class="block w-full py-2 mt-5 mb-2 font-semibold text-white transition-all duration-500 bg-indigo-600 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1">Login</button>

        </form>
      </div>

    </div>
  </div>

    <div class="absolute flex flex-col items-center w-full mx-auto text-center bottom-24 ">Made With ❤️ By <img class="h-14" src="/img/snapandev.png" alt=""> </div>
  </body>

</html>
