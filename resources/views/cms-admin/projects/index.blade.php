@extends('cms-admin.layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
    <div class="bg-white p-6 rounded shadow">
        Welcome to your admin panel.
        @php print_r($data) @endphp
    </div>
@endsection
