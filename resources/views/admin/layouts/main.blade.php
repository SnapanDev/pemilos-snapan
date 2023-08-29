<!DOCTYPE html>
<html class="dark" x-data="data()" lang="id">

<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  @yield('title')

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>

  <link rel="stylesheet" href="{{ asset('/build/assets/app.9c91aa94.css') }}">

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="{{ asset('js/init-alpine.js') }}"></script>
  @yield('assets')
</head>

<body>
<div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
  <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
      <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="{{ route('home') }}">
        Pemilos Admin
      </a>
      <ul class="mt-6">
        <li class="relative px-6 py-3">
          @if (request()->routeIs('admin.dashboard'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true"></span>
          @endif
          <a
            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ request()->routeIs('admin.dashboard') ? 'text-gray-800  dark:text-gray-100' : '' }}"
            href="{{ route('admin.dashboard') }}">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                 stroke-linejoin="round"
                 stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
              </path>
            </svg>
            <span class="ml-4">Dashboard</span>
          </a>
        </li>

        @if (auth()->user()->role_id === App\Models\User::SUPER_ADMIN)
          <li class="relative px-6 py-3">
            @if (request()->routeIs('admin.users.*'))
              <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
            @endif
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ request()->routeIs('admin.users.*') ? 'text-gray-800  dark:text-gray-100' : '' }}"
              href="{{ route('admin.users.index') }}">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                   stroke-linejoin="round"
                   stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
              </svg>
              <span class="ml-4">User</span>
            </a>
          </li>

          <li class="relative px-6 py-3">
            @if (request()->routeIs('admin.settings.*'))
              <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
            @endif
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ request()->routeIs('admin.settings.*') ? 'text-gray-800  dark:text-gray-100' : '' }}"
              href="{{ route('admin.settings.index') }}">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                   stroke-linejoin="round"
                   stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"/>
                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>

              <span class="ml-4">Settings</span>
            </a>
          </li>
        @endif

        <li class="relative px-6 py-3">
          @if (request()->routeIs('admin.candidates.*'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true"></span>
          @endif
          <a
            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ request()->routeIs('admin.candidates.*') ? 'text-gray-800  dark:text-gray-100' : '' }}"
            href="{{ route('admin.candidates.index') }}">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                 stroke-linejoin="round"
                 stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
            </svg>

            <span class="ml-4">Kandidat</span>
          </a>
        </li>

        <li class="relative px-6 py-3">
          @if (request()->routeIs('admin.votes.*'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true"></span>
          @endif
          <a
            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ request()->routeIs('admin.votes.*') ? 'text-gray-800  dark:text-gray-100' : '' }}"
            href="{{ route('admin.votes.index') }}">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                 stroke-linejoin="round"
                 stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
            </svg>

            <span class="ml-4">Suara</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- Mobile sidebar -->
  <!-- Backdrop -->
  <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
       x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
       x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
       x-transition:leave-end="opacity-0"
       class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>

  <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
         x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
         x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
         @keydown.escape="closeSideMenu">
    <div class="py-4 text-gray-500 dark:text-gray-400">
      <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
        Pemilos 2022
      </a>
      <ul class="mt-6">
        <li class="relative px-6 py-3">
          @if (request()->url() === route('admin.dashboard'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true"></span>
          @endif
          <a
            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ request()->url() === route('admin.dashboard') ? 'text-gray-800  dark:text-gray-100' : '' }}"
            href="{{ route('admin.dashboard') }}">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                 stroke-linejoin="round"
                 stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
              </path>
            </svg>
            <span class="ml-4">Dashboard</span>
          </a>
        </li>

        @if (auth()->user()->role_id === App\Models\User::SUPER_ADMIN)
          <li class="relative px-6 py-3">
            @if (str_contains(request()->url(), route('admin.users.index')))
              <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
            @endif
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ str_contains(request()->url(), route('admin.users.index')) ? 'text-gray-800  dark:text-gray-100' : '' }}"
              href="{{ route('admin.users.index') }}">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                   stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
              </svg>
              <span class="ml-4">User</span>
            </a>
          </li>

          <li class="relative px-6 py-3">
            @if (str_contains(request()->url(), route('admin.candidates.index')))
              <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
            @endif
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ str_contains(request()->url(), route('admin.settings.index')) ? 'text-gray-800  dark:text-gray-100' : '' }}"
              href="{{ route('admin.settings.index') }}">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                   stroke-linejoin="round"
                   stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"/>
                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>

              <span class="ml-4">Settings</span>
            </a>
          </li>

          <li class="relative px-6 py-3">
            @if (str_contains(request()->url(), route('admin.candidates.index')))
              <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
            @endif
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ str_contains(request()->url(), route('admin.candidates.index')) ? 'text-gray-800  dark:text-gray-100' : '' }}"
              href="{{ route('admin.candidates.index') }}">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                   stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
              </svg>

              <span class="ml-4">Kandidat</span>
            </a>
          </li>
        @endif

        <li class="relative px-6 py-3">
          @if (str_contains(request()->url(), route('admin.votes.index')))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true"></span>
          @endif
          <a
            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ str_contains(request()->url(), route('admin.votes.index')) ? 'text-gray-800  dark:text-gray-100' : '' }}"
            href="{{ route('admin.votes.index') }}">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                 stroke-linejoin="round"
                 stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
            </svg>

            <span class="ml-4">Suara</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <div class="flex flex-col flex-1 w-full">
    <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
      <div
        class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
        <!-- Mobile hamburger -->
        <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                @click="toggleSideMenu" aria-label="Menu">
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"></path>
          </svg>
        </button>

        @yield('search')

        <ul class="flex items-center flex-shrink-0 space-x-6" style="margin-left: auto">
          <li class="flex">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              @method('DELETE')
              <button onclick="return window.confirm('Apakah anda yakin untuk keluar?')" type="submit"
                      class="rounded-md focus:outline-none focus:shadow-outline-purple"
                      aria-label="Logout">
                <svg fill="none" viewBox="0 0 20 20" stroke-width="1.5" stroke="currentColor"
                     class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"/>
                </svg>
              </button>
            </form>
          </li>
        </ul>
      </div>
    </header>

    <main class="h-full overflow-y-auto">
      <div class="container px-6 mx-auto grid">
        @yield('content')
      </div>
    </main>
  </div>
</div>
</body>

</html>
