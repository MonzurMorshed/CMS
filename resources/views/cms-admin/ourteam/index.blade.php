@extends('cms-admin.layouts.app')

@section('content')
    @php $member = null ; @endphp
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold mb-4">
            {{-- <i data-lucide="users" class="w-5 h-5"></i> --}}
            <span>{{ \Illuminate\Support\Str::headline(strtoupper($heading)) }}</span>
        </h1>
        {{-- Add Button --}}
        <button onclick="openModal('addMemberModal')" class="bg-blue-600 text-white px-4 py-2 rounded flex items-center">
            <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Member
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
                            <button onclick="openModal('editMemberModal{{ $member?->id }}')" class="text-blue-600 hover:underline">Edit</button>

                            <!-- Delete Form -->
                            <form action="{{ url('cms-admin/ourteam/delete/'. $member?->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this service?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <!-- Edit Modal -->
                    <div id="editMemberModal{{ $member?->id }}" class="modal hidden">
                        <div class="modal-box">
                            <h2 class="text-lg font-semibold mb-4">Edit Member</h2>
                            <form action="{{url('cms-admin/ourteam/update')}}" method="POST">
                                @csrf
                                <input type="text" name="name" value="{{ $member?->name }}" class="w-full border p-2 mb-2" placeholder="Member Name" required>
                                <input type="text" name="designation"  value="{{ $member?->description }}" class="w-full border p-2 mb-2" placeholder="Member Designation" required>
                                <input type="email" name="email"  value="{{ $member?->email }}" class="w-full border p-2 mb-2" placeholder="Member Email" required>
                                <input type="text" name="phone"  value="{{ $member?->phone }}" class="w-full border p-2 mb-2" placeholder="Member Phone" required>
                                <input type="url" name="social_link_facebook"  value="{{ $member?->social_link_facebook }}" class="w-full border p-2 mb-2" placeholder="Facebook Url">
                                <input type="url" name="social_link_twitter"  value="{{ $member?->social_link_twitter }}" class="w-full border p-2 mb-2" placeholder="Twitter Url">
                                <input type="url" name="social_link_pinterest"  value="{{ $member?->social_link_pinterest }}" class="w-full border p-2 mb-2" placeholder="Pinterest Url">
                                <div class="text-right space-x-2">
                                    <button type="button" onclick="closeModal('editMemberModal{{ $member?->id }}')" class="px-3 py-1 border rounded">Cancel</button>
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
    <div id="addMemberModal" class="modal hidden">
        <div class="modal-box">
            <h2 class="text-lg font-semibold mb-4">Add Team Members</h2>
            <form action="{{url('cms-admin/ourteam/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="profile-image" class="w-full border p-2 mb-2" required>
                <input type="text" name="name" class="w-full border p-2 mb-2" placeholder="Member Name" required>
                <input type="text" name="designation" class="w-full border p-2 mb-2" placeholder="Member Designation" required>
                <input type="email" name="email" class="w-full border p-2 mb-2" placeholder="Member Email" required>
                <input type="text" name="phone" class="w-full border p-2 mb-2" placeholder="Member Phone" required>
                <input type="url" name="social_link_facebook" class="w-full border p-2 mb-2" placeholder="Facebook Url">
                <input type="url" name="social_link_twitter" class="w-full border p-2 mb-2" placeholder="Twitter Url">
                <input type="url" name="social_link_pinterest" class="w-full border p-2 mb-2" placeholder="Pinterest Url">
                {{-- <textarea name="description" class="w-full border p-2 mb-2" placeholder="Description"></textarea> --}}
                <div class="text-right space-x-2">
                    <button type="button" onclick="closeModal('addMemberModal')" class="px-3 py-1 border rounded">Cancel</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
