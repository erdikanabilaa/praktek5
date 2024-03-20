@extends('layouts.app')

@section('title', 'Halaman 1')

@section('content')
<h1 class="text-3x1 font-bold text-blue-500">
    Halaman 1
</h1>

<br>

<a href="{{ url('/halaman2') }}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Halaman 2</button>

</a>
@endsection
