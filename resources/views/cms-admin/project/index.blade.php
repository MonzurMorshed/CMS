@extends('cms-admin.layouts.app')

@section('content')
    @php $project = null ; @endphp
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold mb-4">
            {{-- <i data-lucide="users" class="w-5 h-5"></i> --}}
            <span>{{ \Illuminate\Support\Str::headline(strtoupper($heading)) }}</span>
        </h1>
        {{-- Add Button --}}
        <button onclick="openModal('addProjectModal')" class="bg-blue-600 text-white px-4 py-2 rounded flex items-center">
            <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Project
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
                    <th class="text-left p-2">Description</th>
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
                            <button onclick="openModal('editProjectModal{{ $project?->id }}')" class="text-blue-600 hover:underline">Edit</button>

                            <!-- Delete Form -->
                            <form action="{{ url('cms-admin/project/delete/'. $project?->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this service?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <!-- Edit Modal -->
                    <div id="editProjectModal{{ $project?->id }}" class="modal hidden">
                        <div class="modal-box">
                            <h2 class="text-lg font-semibold mb-4">Edit Project</h2>
                            <form action="{{url('cms-admin/project/update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="title" value="{{ $project?->title }}" class="w-full border p-2 mb-2" placeholder="Project Title" required>
                                <input type="text" name="description"  value="{{ $project?->description }}" class="w-full border p-2 mb-2" placeholder="Project Description" required>
                                <input type="file" name="image" value="{{ $project?->image }}" class="w-full border p-2 mb-2" required>
                                <div class="text-right space-x-2">
                                    <button type="button" onclick="closeModal('editProjectModal{{ $project?->id }}')" class="px-3 py-1 border rounded">Cancel</button>
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
    <div id="addProjectModal" class="modal hidden">
        <div class="modal-box">
            <h2 class="text-lg font-semibold mb-4">Add Project</h2>
            <form action="{{url('cms-admin/project/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" class="w-full border p-2 mb-2" placeholder="Project Title" required>
                <input type="text" name="description" class="w-full border p-2 mb-2" placeholder="Project Description" required>
                <input type="file" name="image" class="w-full border p-2 mb-2" placeholder="Project Image" required>
                <div class="text-right space-x-2">
                    <button type="button" onclick="closeModal('addProjectModal')" class="px-3 py-1 border rounded">Cancel</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
