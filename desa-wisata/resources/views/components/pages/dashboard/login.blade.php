<x-layouts.auth>
    <x-slot:title>Login | </x-slot:title>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" 
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                    class="text-primary-600">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg>
            </div>
            <h2 class="mt-6 text-center text-3xl font-bold leading-9 tracking-tight text-gray-900">Login</h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Access your Sulawesi Tengah Tourism dashboard
            </p>
        </div>

        <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="">
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="username" required
                                autofocus
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                        </div>
                        <x-partials.dashboard.input-error :messages="$errors->get('email')" />
                    </div>
                    <div>
                        <div class="flex items-center justify-between mt-2">
                            <label for="password"
                                class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">

                        </div>
                        <x-partials.dashboard.input-error :messages="$errors->get('password')" />
                    </div>
                </div>
                <div class="flex items-center">
                    <input class="border rounded" type="checkbox" name="remember" id="remember_me">
                    <label class="ml-2 block text-sm text-gray-900" for="remember_me">Remember me</label>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-primary-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-primary-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600 transition-all duration-300">Login</button>
                </div>
            </form>


            <div class="mt-4">
                <a href="/"
                    class="flex w-full justify-center rounded-md border border-primary-600 px-3 py-1.5 text-sm font-semibold leading-6 text-primary-600 shadow-sm hover:bg-primary-50 transition-all duration-300">Back to Home</a>
            </div>
        </div>
</x-layouts.auth>
