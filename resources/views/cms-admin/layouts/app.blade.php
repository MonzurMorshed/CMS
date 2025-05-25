<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        .modal {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 50;
        }

        .modal.hidden {
            display: none;
        }

        .modal-box {
            background: white;
            padding: 1.5rem;
            border-radius: 0.5rem;
            width: 100%;
            max-width: 500px;
        }
    </style>
</head>
<body class="bg-gray-100 flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md">
        <div class="p-4 text-xl font-bold border-b">Admin</div>
        <nav class="p-4 space-y-2">
            <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
                <i data-lucide="home" class="w-5 h-5"></i>
                <span>Dashboard</span>
            </a>
            {{-- <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
                <i data-lucide="users" class="w-5 h-5"></i>
                <span>Users</span>
            </a> --}}
            <a href="{{url('cms-admin/project/index')}}" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
                <i data-lucide="folder-open" class="w-5 h-5"></i>
                <span>Projects</span>
            </a>
            <a href="{{url('cms-admin/service/index')}}" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
                <i data-lucide="briefcase" class="w-5 h-5"></i>
                <span>Services</span>
            </a>
            <a href="{{url('cms-admin/ourteam/index')}}" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
                <i data-lucide="users" class="w-5 h-5"></i>
                <span>Our Team</span>
            </a>
            <a href="{{url('cms-admin/setting/index')}}" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
                <i data-lucide="settings" class="w-5 h-5"></i>
                <span>Settings</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>
    <script>
        // lucide.createIcons();
    </script>
    {{-- Modal Styles & Script --}}

    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }
        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }
        lucide.createIcons();
    </script>
</body>
</html>
