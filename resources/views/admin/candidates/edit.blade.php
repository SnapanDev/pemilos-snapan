@extends('admin.layouts.main')

@section('title')
  <title>Edit Kandidat</title>
@endsection

@section('content')
  <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Edit Kandidat
  </h2>

  <form action="{{ route('admin.candidates.update', ['candidate' => $candidate->id]) }}" method="POST"
    enctype="multipart/form-data" class="p-6 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    @csrf
    @method('PUT')

    <label for="name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">Nama</label>
    <input
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
      name="name" type="text" id="name" value="{{ old('name') ?? $candidate->name }}" readonly>
    @error('name')
      <span class="text-xs text-red-600 dark:text-red-400">
        {{ $message }}
      </span>
    @enderror

    <div class="mt-4 text-sm">
      <span class="text-gray-700 dark:text-gray-400">
        Label
      </span>
      <div class="mt-2">
        <label class="inline-flex items-center mx-3 text-gray-600 dark:text-gray-400">
          <input type="radio" name="label" value="MPK" readonly
            @if (old('label') === 'MPK') {{ 'checked' }} @elseif($candidate->label === 'MPK') {{ 'checked' }} @endif />
          <span class="ml-2">MPK</span>
        </label>
        <label class="inline-flex items-center mx-3 text-gray-600 dark:text-gray-400">
          <input type="radio" name="label" value="OSIS" readonly
            @if (old('label') === 'OSIS') {{ 'checked' }} @elseif($candidate->label === 'OSIS') {{ 'checked' }} @endif />
          <span class="ml-2">OSIS</span>
        </label>
      </div>
      @error('label')
        <span class="text-xs text-red-600 dark:text-red-400">
          {{ $message }}
        </span>
      @enderror
    </div>

    <label for="number" class="block mb-2 mt-4 text-sm font-medium text-gray-700 dark:text-gray-400">Nomor Urut</label>
    <input min="1"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
      name="number" type="number" id="number" value="{{ old('number') ?? $candidate->number }}">
    @error('number')
      <span class="text-xs text-red-600 dark:text-red-400">
        {{ $message }}
      </span>
    @enderror

    <label for="image" class="block mb-2 mt-4 text-sm font-medium text-gray-700 dark:text-gray-400">Gambar</label>
    <input
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
      type="file" id="image" name="image">
    @error('image')
      <span class="flex mt-2 text-xs text-red-600 dark:text-red-400">
        {{ $message }}
      </span>
    @enderror

    <div style="margin-top: 24px;" class="flex justify-center">
      <img id="candidateImage" class="rounded-md w-[300px]" src="{{ asset('storage/' . $candidate->image) }}"
        alt="{{ $candidate->name }}">
    </div>

    <button type="submit" onclick="return window.confirm('Yakin ingin mengedit kandidat ini?')"
      class="mt-6 mr-4 text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Submit</button>

    <a href="{{ route('admin.candidates.index') }}"
      class="mt-6 text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Kembali</a>
  </form>

  <script>
    document.querySelector("#image").addEventListener("change", event => {
      if (event.target.files[0]) {
        document.querySelector("#candidateImage").src = URL.createObjectURL(event.target.files[0]);
      }
    });
  </script>
@endsection
