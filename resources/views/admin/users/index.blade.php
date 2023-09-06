@extends('admin.layouts.main')

@section('title')
  <title>List User</title>
@endsection

@section('search')
  <div class="flex justify-center flex-1 lg:mr-32">
    <form action="{{ route('admin.users.index') }}" method="GET"
          class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
      <button type="submit" class="absolute inset-y-0 flex items-center pl-2">
        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"></path>
        </svg>
      </button>
      <input
        class="w-full h-8 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
        type="text" name="search" placeholder="Search" value="{{ request()->query('search') }}" aria-label="Search"/>
    </form>
  </div>
@endsection

@section('content')
  <div class="flex justify-between">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      User
    </h2>

    <wrap class="flex items-center space-x-4">
      <a href="{{ route('admin.users.export') }}"
         class="h-fit text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Ekspor (Excel)</a>
      <a href="{{ route('admin.users.csv') }}"
         class="h-fit text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah
        (CSV)</a>
      <a href="{{ route('admin.users.create') }}"
         class="h-fit text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah</a>
    </wrap>
  </div>

  <div class="flex justify-center gap-4 rounded-lg py-3 my-4 bg-gray-800 text-gray-400">
    <span class="text-sm font-bold">Jumlah Siswa: {{ $studentCount }}</span>
    <span class="text-sm font-bold">Jumlah Guru/Karyawan: {{ $nonStudentCount }}</span>
  </div>

  <div class="w-full overflow-hidden rounded-lg shadow-xs mb-8">
    @error('errors')
    <span class="text-lg py-8 text-red-600 dark:text-red-400">
        {{ $message }}
      </span>
    @enderror
    @if (session()->has('success'))
      <div id="toast-success"
           class="flex items-center p-4 mb-4 w-full text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
           role="alert">
        <div
          class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
               xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
          </svg>
        </div>
        <span class="ml-5 text-sm font-normal">{!! session()->get('success') !!}</span>
      </div>
    @endif
    <div class="w-full overflow-x-auto">
      <table class="w-full whitespace-no-wrap">
        <thead>
        <tr
          class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <th class="px-4 py-3">Nama</th>
          <th class="px-4 py-3">UUID</th>
          <th class="px-4 py-3">Username</th>
          <th class="px-4 py-3">Role</th>
          <th class="px-4 py-3">Actions</th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
        @forelse ($users as $user)
          <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-4 py-3">
              <div class="flex items-center text-sm">
                <div>
                  <p class="font-semibold">{{ $user->name }}</p>
                  <p class="text-xs text-gray-600 dark:text-gray-400">{{ $user->class ?? '' }}</p>
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-sm">{{ $user->uuid }}</td>
            <td class="px-4 py-3 text-sm">{{ $user->username }}</td>
            <td class="px-4 py-3 text-xs">
              @switch($user->role_id)
                @case(App\Models\User::SUPER_ADMIN)
                  @php
                    $badgeClasses = 'text-gray-700 bg-gray-100 dark:text-gray-100 dark:bg-gray-700';
                    $role = 'Super Admin';
                  @endphp
                  @break

                @case(App\Models\User::ADMIN)
                  @php
                    $badgeClasses = 'text-red-700 bg-red-100 dark:text-red-100 dark:bg-red-700';
                    $role = 'Administrator';
                  @endphp
                  @break

                @case(App\Models\User::STUDENT)
                  @php
                    $badgeClasses = 'text-blue-700 bg-blue-100 dark:text-blue-100 dark:bg-blue-700';
                    $role = 'Murid';
                  @endphp
                  @break

                @case(App\Models\User::TEACHER)
                  @php
                    $badgeClasses = 'text-emerald-700 bg-emerald-100 dark:text-emerald-100 dark:bg-emerald-700';
                    $role = 'Guru';
                  @endphp
                  @break

                @case(App\Models\User::STAFF)
                  @php
                    $badgeClasses = 'text-orange-700 bg-orange-100 dark:text-white dark:bg-orange-600';
                    $role = 'Staff';
                  @endphp
                  @break
              @endswitch
              <span
                class="px-2 py-1 font-semibold leading-tight rounded-full {{ $badgeClasses }}">{{ $role }}</span>
            </td>
            <td class="px-4 py-3">
              <div class="flex items-center space-x-4 text-sm">
                @if ($user->role_id !== App\Models\User::SUPER_ADMIN)
                  <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}"
                     class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                     aria-label="Edit">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                      </path>
                    </svg>
                  </a>
                  <form action="{{ route('admin.users.destroy', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return window.confirm('Anda yakin ingin menghapus user ini?')"
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Delete">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                              clip-rule="evenodd"></path>
                      </svg>
                    </button>
                  </form>
                @endif
              </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5" class="text-center text-white py-3">
              <h1 class="font-bold text-lg">Tidak ada data</h1>
            </td>
          </tr>
        @endforelse
        </tbody>
      </table>
    </div>
    <div
      class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 border-t dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
      {{ $users->appends([
              'search' => request()->query('search'),
          ])->links('admin.layouts.paginator') }}
    </div>
  </div>
@endsection
