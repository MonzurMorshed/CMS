@extends('cms-admin.layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold mb-4">
            {{-- <i data-lucide="users" class="w-5 h-5"></i> --}}
            <span>{{ \Illuminate\Support\Str::headline(strtoupper($heading)) }}</span>
        </h1>
        {{-- Add Button --}}
        <button onclick="openModal('addServiceModal')" class="bg-blue-600 text-white px-4 py-2 rounded flex items-center">
            <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Service
        </button>
    </div>

    <div class="bg-white p-6 rounded shadow">
        Welcome to your admin panel.
        @php //print_r($data)
        @endphp

        {{-- Services Table --}}
        <table class="w-full bg-white shadow rounded text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="text-left p-2">#</th>
                    <th class="text-left p-2">Name</th>
                    <th class="text-left p-2">Designation</th>
                    <th class="text-left p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($services as $service) --}}
                    <tr class="border-t">
                        {{-- <td class="p-2">{{ $loop->iteration }}</td> --}}
                        <td class="p-2">#1</td>
                        <td class="p-2">John Doe</td>
                        <td class="p-2">Programmer</td>
                        <td class="p-2 flex space-x-2">
                             <!-- Edit Button -->
                            <button onclick="openModal('editServiceModal{{ $service->id }}')" class="text-blue-600 hover:underline">Edit</button>

                            <!-- Delete Form -->
                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="inline" onsubmit="return confirm('Delete this service?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <!-- Edit Modal -->
                    <div id="editServiceModal{{ $service->id }}" class="modal hidden">
                        <div class="modal-box">
                            <h2 class="text-lg font-semibold mb-4">Edit Service</h2>
                            <form action="{{ route('admin.services.update', $service) }}" method="POST">
                                @csrf @method('PUT')
                                <input type="text" name="name" value="{{ $service->name }}" class="w-full border p-2 mb-2" required>
                                <textarea name="description" class="w-full border p-2 mb-2">{{ $service->description }}</textarea>
                                <div class="text-right space-x-2">
                                    <button type="button" onclick="closeModal('editServiceModal{{ $service->id }}')" class="px-3 py-1 border rounded">Cancel</button>
                                    <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>

    <!-- Add Modal -->
    <div id="addServiceModal" class="modal hidden">
        <div class="modal-box">
            <h2 class="text-lg font-semibold mb-4">Add Team Members</h2>
            <form action="#" method="POST">
                @csrf
                <input type="text" name="name" class="w-full border p-2 mb-2" placeholder="Service name" required>
                <textarea name="description" class="w-full border p-2 mb-2" placeholder="Description"></textarea>
                <div class="text-right space-x-2">
                    <button type="button" onclick="closeModal('addServiceModal')" class="px-3 py-1 border rounded">Cancel</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
