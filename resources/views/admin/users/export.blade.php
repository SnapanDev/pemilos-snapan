@extends('admin.layouts.main')

@section('title')
  <title>Ekspor User</title>
@endsection

@section('content')
  <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Ekspor User
  </h2>

  <form x-data="{ isStudentRadio: {{ old('role_id') !== App\Models\User::STUDENT ? 'false' : 'true' }} }"
        action="{{ route('admin.users.export') }}" method="POST"
        class="p-6 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    @csrf

    <div class="mt-4 text-sm">
      <span class="text-gray-700 dark:text-gray-400">
        Role
      </span>
      <div class="mt-2">
        <label class="inline-flex items-center mx-3 text-gray-600 dark:text-gray-400">
          <input @click="isStudentRadio = true" type="radio" name="role_id"
                 value="{{ \App\Models\User::STUDENT  }}" {{ old('role_id') === \App\Models\User::STUDENT ? 'checked' : '' }} />
          <span class="ml-2 pr-2">Murid</span>
          <input @click="isStudentRadio = false" type="radio" name="role_id"
                 value="{{ \App\Models\User::STUDENT - 1 }}" {{ old('role_id') < \App\Models\User::STUDENT && old('role_id') > \App\Models\User::ADMIN ? 'checked' : '' }} />
          <span class="ml-2">Guru & Staff</span>
        </label>
      </div>
    </div>

    <div>
      <label x-show.transition="isStudentRadio" for="class"
             class="block mt-4 mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">Kelas</label>
      <select x-show.transition="isStudentRadio" name="class" id="class"
              class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
        @foreach($classes as $class)
          <option value="{{ $class->class }}">{{ $class->class }}</option>
        @endforeach
      </select>
      @error('class')
      <span x-show.transition="isStudentRadio" class="text-xs text-red-600 dark:text-red-400">
          {{ $message }}
        </span>
      @enderror
    </div>

    <button type="submit"
            class="mt-6 mr-4 text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
      Export
    </button>

    <a href="{{ route('admin.users.index') }}"
       class="mt-6 text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Kembali</a>
  </form>
@endsection
