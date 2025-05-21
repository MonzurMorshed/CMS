<div class="max-w-md mx-auto mt-10 bg-white p-10 rounded-sm shadow-lg">
    <div class="max-w-md mx-auto mt-5 table">
        <h2 class="mx-auto">Login to CMS</h2>
    </div>
    <div class="max-w-md mx-auto mt-5">
        <input type="email" wire:model="email" class="w-full p-2 border border-green-700 mb-2 rounded-md" placeholder="Email">
        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        <input type="password" wire:model="password" class="w-full p-2 border border-green-700 mb-2 rounded-md" placeholder="Password">
        <button wire:click="login" class="w-full bg-green-700 hover:shadow-lg shadow-green-500/50 text-white py-2 rounded hover:bg-green-700 text-white px-4 py-2 cursor-pointer">Login</button>
    </div>
    <p class="text-sm mt-4">
        Don't have an account?
        <a href="{{ route('register') }}" class="text-blue-500">Register here</a>
    </p>
</div>
