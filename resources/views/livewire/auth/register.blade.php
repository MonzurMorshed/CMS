<div class="max-w-md mx-auto mt-10 bg-white p-10 rounded-sm shadow-lg">
    <div class="max-w-md mx-auto mt-5 table">
        <h2 class="mx-auto">Register to CMS</h2>
    </div>
    <div class="max-w-md mx-auto mt-5">
        <input type="text" wire:model="name" placeholder="Name" class="w-full border border-green-700 p-2 mb-3 rounded" />

        <input type="email" wire:model="email" placeholder="Email" class="w-full border border-green-700 p-2 mb-3 rounded" />

        <input type="password" wire:model="password" placeholder="Password" class="w-full border border-green-700 border-green-700 p-2 mb-3 rounded" />

        <button wire:click="register" class="w-full bg-green-700 hover:shadow-lg shadow-green-500/50 text-white py-2 rounded hover:bg-green-700">
            Register
        </button>

        <div class="mt-4 text-center">
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline text-sm">
                Already have an account? Login
            </a>
        </div>
    </div>
</div>
