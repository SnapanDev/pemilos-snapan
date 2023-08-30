@extends('admin.layouts.main')

@section('title')
  <title>List Vote</title>
@endsection

@section('search')
  <div class="flex justify-center flex-1 lg:mr-32">
    <form action="{{ route('admin.votes.index') }}" method="GET"
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
        type="text" name="search" placeholder="Search" value="{{ request()->query('search') }}" aria-label="Search" />
    </form>
  </div>
@endsection

@section('content')
  <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Vote
  </h2>

  <div class="flex justify-center gap-4 rounded-lg py-3 my-4 bg-gray-800 text-gray-400">
    <span class="text-sm font-bold">Jumlah Suara (Murid): {{ $votesStudents ?? 0 }}</span>
    <span class="text-sm font-bold">Jumlah Suara (Staff): {{ $votesTeachers ?? 0 }}</span>
    <span class="text-sm font-bold">Jumlah Suara (Guru): {{ $votesStaffs ?? 0 }}</span>
  </div>

  <div class="w-full overflow-hidden rounded-lg shadow-xs mb-8">
    <div class="w-full overflow-x-auto">
      <table class="w-full whitespace-no-wrap">
        <thead>
          <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <th class="px-4 py-3">Id User</th>
            <th class="px-4 py-3">Username</th>
            <th class="px-4 py-3">Role</th>
            <th class="px-4 py-3">Vote</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
          @forelse ($users as $user)
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <div>
                    <p class="font-semibold">{{ $user->uuid }}</p>
{{--                    <p class="text-xs text-gray-600 dark:text-gray-400">{{ $user->class ?? '' }}</p>--}}
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm">{{ $user->username }}</td>
              <td class="px-4 py-3 text-xs">
                @switch($user->role_id)
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
              <td class="px-4 py-3 text-xs">
                @forelse ($user->votes as $vote)
                  @switch($vote->label)
                    @case('MPK')
                      <span
                        class="px-2 py-1 font-semibold leading-tight rounded-full text-gray-700 bg-gray-100 dark:text-white dark:bg-gray-700">MPK</span>
                    @break

                    @case('OSIS')
                      <span
                        class="px-2 py-1 font-semibold leading-tight rounded-full text-blue-700 bg-blue-100 dark:text-white dark:bg-blue-700">OSIS</span>
                    @break
                  @endswitch
                  @empty
                    <span
                      class="px-2 py-1 font-semibold leading-tight rounded-full text-red-700 bg-red-100 dark:text-white dark:bg-red-700">Belum
                      Memilih</span>
                  @endforelse
                </td>
              </tr>
              @empty
                <tr>
                  <td colspan="4" class="text-center text-white py-3">
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
