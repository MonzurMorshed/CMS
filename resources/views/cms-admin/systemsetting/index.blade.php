@extends('cms-admin.layouts.app')

@section('content')
    @php $service = null ; @endphp
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold mb-4">
            {{-- <i data-lucide="users" class="w-5 h-5"></i> --}}
            <span>{{ \Illuminate\Support\Str::headline(strtoupper($heading)) }}</span>
        </h1>
        {{-- Add Button --}}
        <button onclick="openModal('addSettingsModal')" class="bg-blue-600 text-white px-4 py-2 rounded flex items-center">
            <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add New System Settings
        </button>
    </div>

    <div class="bg-white p-6 rounded shadow">
        Welcome to your admin panel.
        @php//print_r($data)
                        @endphp

        {{-- Services Table --}}
        <table class="w-full bg-white shadow rounded text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="text-left p-2">#</th>
                    <th class="text-left p-2">Title</th>
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
                        <button onclick="openModal('editSettingsModal{{ $service?->id }}')"
                            class="text-blue-600 hover:underline">Edit</button>

                        <!-- Delete Form -->
                        <form action="{{ url('cms-admin/service/delete/' . $service?->id) }}" method="POST" class="inline"
                            onsubmit="return confirm('Delete this service?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                <!-- Edit Modal -->
                <div id="editSettingsModal{{ $service?->id }}" class="modal hidden">
                    <div class="modal-box">
                        <h2 class="text-lg font-semibold mb-4">Edit Service</h2>
                        <form action="{{ url('cms-admin/service/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="title" value="{{ $service?->title }}"
                                class="w-full border p-2 mb-2" placeholder="Service Title" required>
                            <input type="text" name="description" value="{{ $service?->description }}"
                                class="w-full border p-2 mb-2" placeholder="Service Description" required>
                            <input type="file" name="image" value="{{ $service?->image }}"
                                class="w-full border p-2 mb-2" required>
                            <div class="text-right space-x-2">
                                <button type="button" onclick="closeModal('editSettingsModal{{ $service?->id }}')"
                                    class="px-3 py-1 border rounded">Cancel</button>
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
    <div id="addSettingsModal" class="modal hidden">
        <div class="modal-box h-[500px] overflow-x-auto">

            <div class="flex justify-center items-center relative">
                <h2 class="text-lg font-semibold mb-4">Site Settings</h2>
                <button type="button" onclick="closeModal('addSettingsModal')"
                                class="px-3 py-1 border rounded absolute right-[10px]">X</button>
            </div>

            <form action="{{ url('cms-admin/systemsetting/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex items-center justify-between">
                    <div class="w-1/2">
                        <label for="logo_file" class="block text-sm">Logo</label>
                        <input id="logo_file" type="file" name="logo_file" class="w-full border p-2 mb-2" required />
                    </div>
                    <div class="w-1/2">
                        <label for="favicon_file" class="block text-sm">Favicon</label>
                        <input id="favicon_file" type="file" name="favicon_file" class="w-full border p-2 mb-2"
                            required />
                    </div>
                </div>
                <div class="w-full">
                    <label for="site_name" class="block text-sm">Site Name</label>
                    <input id="site_name" type="text" name="site_name" class="w-full border p-2 mb-2" required />
                </div>
                <div class="flex items-center justify-between">
                    <div class="w-1/2">
                        <label for="phone" class="block text-sm">Phone</label>
                        <input id="phone" type="tel" name="phone" class="w-full border p-2 mb-2" required />
                    </div>
                    <div class="w-1/2">
                        <label for="email" class="block text-sm">Email</label>
                        <input id="email" type="email" name="email" class="w-full border p-2 mb-2" required />
                    </div>
                </div>
                <div class="w-full">
                    <label for="address" class="block text-sm">Address</label>
                    <textarea id="address" name="address" class="w-full border p-2 mb-2" required></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <div class="w-1/2">
                        <label for="social_link_facebook" class="block text-sm">Facebook Link</label>
                        <input id="social_link_facebook" type="text" name="social_link_facebook"
                            class="w-full border p-2 mb-2" required />
                    </div>
                    <div class="w-1/2">
                        <label for="social_link_twitter" class="block text-sm">Twitter Link</label>
                        <input id="social_link_twitter" type="text" name="social_link_twitter"
                            class="w-full border p-2 mb-2" required />
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="w-1/2">
                        <label for="social_link_google" class="block text-sm">Google Link</label>
                        <input id="social_link_google" type="text" name="social_link_google"
                            class="w-full border p-2 mb-2" required />
                    </div>
                    <div class="w-1/2">
                        <label for="social_link_pinterest" class="block text-sm">Pinterest Link</label>
                        <input id="social_link_pinterest" type="text" name="social_link_pinterest"
                            class="w-full border p-2 mb-2" required />
                    </div>
                </div>
                <div class="w-full">
                    <label for="footer_file" class="block text-sm">Footer Logo</label>
                    <input id="footer_file" type="file" name="footer_file" class="w-full border p-2 mb-2" required />
                </div>
                <div class="w-full">
                    <label for="footer_text" class="block text-sm">Copyright Text</label>
                    <input id="footer_text" type="text" name="footer_text" class="w-full border p-2 mb-4" required />
                </div>
                <div class="text-right space-x-2">
                    <button type="button" onclick="closeModal('addSettingsModal')"
                        class="px-3 py-1 border rounded">Cancel</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded">Add</button>
                </div>
            </form>

        </div>

    </div>
@endsection
