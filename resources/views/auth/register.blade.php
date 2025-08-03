<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-4"
        style="background-image: url('{{ asset('assets/img/login-bg.jpg') }}'); background-size: cover; background-position: center;">

        <div class="bg-white bg-opacity-10 backdrop-blur-md rounded-xl shadow-lg max-w-md w-full p-8 text-white">
            <h2 class="text-3xl font-bold mb-6 text-center">Register</h2>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <x-input id="name" type="text" name="name" :value="old('name')" required autofocus
                        placeholder="Name"
                        class="w-full rounded-full pl-4 pr-4 py-2 bg-white bg-opacity-20 placeholder-white placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-purple-400" />
                </div>

                <div class="mb-4">
                    <x-input id="email" type="email" name="email" :value="old('email')" required
                        placeholder="Email"
                        class="w-full rounded-full pl-4 pr-4 py-2 bg-white bg-opacity-20 placeholder-white placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-purple-400" />
                </div>

                <div class="mb-4">
                    <x-input id="phone" type="text" name="phone" :value="old('phone')" required
                        placeholder="Phone"
                        class="w-full rounded-full pl-4 pr-4 py-2 bg-white bg-opacity-20 placeholder-white placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-purple-400" />
                </div>

                <div class="mb-4">
                    <x-input id="address" type="text" name="address" :value="old('address')" required
                        placeholder="Address"
                        class="w-full rounded-full pl-4 pr-4 py-2 bg-white bg-opacity-20 placeholder-white placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-purple-400" />
                </div>

                <div class="mb-4">
                    <x-input id="password" type="password" name="password" required
                        placeholder="Password"
                        class="w-full rounded-full pl-4 pr-4 py-2 bg-white bg-opacity-20 placeholder-white placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-purple-400" />
                </div>

                <div class="mb-4">
                    <x-input id="password_confirmation" type="password" name="password_confirmation" required
                        placeholder="Confirm Password"
                        class="w-full rounded-full pl-4 pr-4 py-2 bg-white bg-opacity-20 placeholder-white placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-purple-400" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="flex items-center text-sm mb-4">
                        <x-checkbox id="terms" name="terms" required />
                        <label for="terms" class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-white hover:text-purple-300">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-white hover:text-purple-300">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </label>
                    </div>
                @endif
<x-button class="w-full justify-center rounded-full bg-transparent border border-white text-white hover:bg-white hover:text-purple-700 focus:outline-none focus:ring-0 active:bg-white active:text-purple-700 transition">
    {{ __('Register') }}
</x-button>


                <p class="mt-6 text-center text-sm">
                    Already registered?
                    <a href="{{ route('login') }}" class="underline hover:text-purple-300 font-semibold">
                        Login
                    </a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>
