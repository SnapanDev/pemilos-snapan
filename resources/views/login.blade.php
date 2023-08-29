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
  <div class="h-screen flex">
    <div class="flex w-full lg:w-[40%] items-center bg-white space-y-8 mx-auto">
      <div class="w-full px-8 md:px-32 lg:px-24">
        <form class="bg-white rounded-md shadow-2xl p-5" method="post" action="{{ route('login') }}">
          @csrf
          <h1 class="text-gray-800 font-bold text-2xl text-center mb-8">Pemilos 2022</h1>
          @error('auth_failed')
            <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
              <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                  clip-rule="evenodd"></path>
              </svg>
              <div>
                {{ $message }}
              </div>
            </div>
          @enderror
          <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
            </svg>
            <input id="username" class=" pl-2 w-full outline-none border-none" type="text" name="username"
              placeholder="Username" value="{{ old('username') }}" />
          </div>
          <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
              fill="currentColor">
              <path fillRule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clipRule="evenodd" />
            </svg>
            <input class="pl-2 w-full outline-none border-none" type="password" name="password" id="password"
              placeholder="Password" />
          </div>
          <button type="submit"
            class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Login</button>

        </form>
      </div>

    </div>
  </div>
</body>

</html>
