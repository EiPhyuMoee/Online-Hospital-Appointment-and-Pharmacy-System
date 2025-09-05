<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-4"
        style="background-image: url('{{ asset('assets/img/login-bg.jpg') }}'); background-size: cover; background-position: center;">
        <div
            class="bg-white bg-opacity-20 backdrop-blur-md rounded-xl shadow-lg max-w-md w-full p-8 text-black flex flex-col justify-center items-center">
            <h2 class="text-3xl font-bold mb-6 text-center">Login</h2>

            <form method="POST" action="{{ route('login') }}" class="w-full">
                @csrf

                <div class="mb-4 relative">
                    <x-input id="email" type="email" name="email" :value="old('email')" required autofocus
                        placeholder="Username"
                        class="w-full rounded-full pl-10 pr-4 py-2 bg-white bg-opacity-20 placeholder-black placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-purple-400" />
                    <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none text-black opacity-70">
                        <!-- User icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.121 17.804A9 9 0 1118.879 6.196 9 9 0 015.12 17.804z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    @error('email')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4 relative">
                    <x-input id="password" type="password" name="password" required placeholder="Password"
                        class="w-full rounded-full pl-10 pr-4 py-2 bg-white bg-opacity-20 placeholder-black placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-purple-400" />
                    <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none text-black opacity-70">
                        <!-- Lock icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 11V7a5 5 0 0110 0v4" />
                        </svg>
                    </div>
                    @error('password')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mb-6 text-sm">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" class="text-purple-600" />
                        <span class="ml-2">Remember me</span>
                    </label>

                    {{-- @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="underline hover:text-purple-300">
                            Forgot password?
                        </a>
                    @endif --}}
                </div>

                <x-button
                    class="w-full flex justify-center items-center rounded-full bg-transparent border border-white text-black
                    hover:bg-white hover:text-purple-700
                    focus:outline-none focus:ring-0
                    active:bg-white active:text-purple-700 transition">
                    {{ __('Login') }}
                </x-button>


                <p class="mt-6 text-center text-sm">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="underline hover:text-purple-300 font-semibold">
                        Register
                    </a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>
