<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-4"
        style="background-image: url('{{ asset('assets/img/login-bg.jpg') }}'); background-size: cover; background-position: center;">

        <div class="bg-white bg-opacity-10 backdrop-blur-md rounded-xl shadow-lg max-w-md w-full p-8 text-black">
            <h2 class="text-3xl font-bold mb-6 text-center">Register</h2>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <x-input id="name" type="text" name="name" :value="old('name')" maxlength="50" required
                        autofocus placeholder="Name"
                        class="w-full rounded-full pl-4 pr-4 py-2 bg-white bg-opacity-20 placeholder-black placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-purple-400" />
                </div>

                <div class="mb-4">
                    <x-input id="email" type="email" name="email" :value="old('email')" maxlength="50" required
                        placeholder="Email"
                        class="w-full rounded-full pl-4 pr-4 py-2 bg-white bg-opacity-20 placeholder-black placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-purple-400" />
                </div>

                <div class="mb-4">
                    <x-input id="phone" type="tel" name="phone" :value="old('phone')" minlength="9"
                        maxlength="11" pattern="[0-9]{9,11}" inputmode="numeric" required placeholder="Phone"
                        class="w-full rounded-full pl-4 pr-4 py-2 bg-white bg-opacity-20 placeholder-black placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-purple-400" />
                </div>

                <div class="mb-4">
                    <x-input id="address" type="text" name="address" :value="old('address')" maxlength="50" required
                        placeholder="Address"
                        class="w-full rounded-full pl-4 pr-4 py-2 bg-white bg-opacity-20 placeholder-black placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-purple-400" />
                </div>

                <div class="mb-4">
                    <x-input id="password" type="password" name="password" minlength="8" maxlength="50" required
                        placeholder="Password"
                        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,50}$"
                        title="Password must be 8-50 characters long, include at least one uppercase letter, one lowercase letter, one number, and one special character."
                        class="w-full rounded-full pl-4 pr-4 py-2 bg-white bg-opacity-20 placeholder-black placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-purple-400" />
                </div>

                <div class="mb-4">
                    <x-input id="password_confirmation" type="password" name="password_confirmation" minlength="8"
                        maxlength="50" required placeholder="Confirm Password"
                        class="w-full rounded-full pl-4 pr-4 py-2 bg-white bg-opacity-20 placeholder-black placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-purple-400" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="flex items-center text-sm mb-4">
                        <x-checkbox id="terms" name="terms" required />
                        <label for="terms" class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' =>
                                    '<a target="_blank" href="' .
                                    route('terms.show') .
                                    '" class="underline text-black hover:text-black-300">' .
                                    __('Terms of Service') .
                                    '</a>',
                                'privacy_policy' =>
                                    '<a target="_blank" href="' .
                                    route('policy.show') .
                                    '" class="underline text-black hover:text-black-300">' .
                                    __('Privacy Policy') .
                                    '</a>',
                            ]) !!}
                        </label>
                    </div>
                @endif
                <x-button
                    class="w-full flex justify-center items-center rounded-full bg-transparent border border-white text-black
                    hover:bg-white hover:text-black-700
                    focus:outline-none focus:ring-0
                    active:bg-white active:text-black-700 transition">
                    {{ __('Register') }}
                </x-button>


                <p class="mt-6 text-center text-sm">
                    Already registered?
                    <a href="{{ route('login') }}" class="underline hover:text-black-300 font-semibold">
                        Login
                    </a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>
