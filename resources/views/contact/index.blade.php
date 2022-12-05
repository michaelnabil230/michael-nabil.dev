<x-app-layout title="Contact">
    <div class="flex-1 flex items-center justify-center">
        <div class="w-full max-w-3xl px-4 py-12">
            <div class="mt-8 max-w-none">
                <h1 class="uppercase tracking-wide font-bold dark:text-white">Contact</h1>
                <form method="POST" action="{{ route('contact.store') }}" class="mt-6">
                    @csrf
                    <div>
                        <label for="name" @class([
                            'block mb-2 text-sm font-medium',
                            'text-gray-900 dark:text-gray-400' => !$errors->has('name'),
                            'text-red-700' => $errors->has('name'),
                        ])>
                            Name
                        </label>

                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            placeholder="Name" @class([
                                'border bg-gray-50 text-sm rounded-lg dark:bg-gray-900 block w-full p-2.5',
                                'border-gray-300 text-gray-900 dark:text-white dark:border-gray-800 focus:ring-blue-500 focus:border-blue-500' => !$errors->has(
                                    'name'
                                ),
                                'border-red-500 focus:ring-red-500 focus:border-red-500 text-red-900 placeholder-red-700' => $errors->has(
                                    'name'
                                ),
                            ])>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="phone" @class([
                            'block mb-2 text-sm font-medium',
                            'text-gray-900 dark:text-gray-400' => !$errors->has('phone'),
                            'text-red-700' => $errors->has('phone'),
                        ])>
                            Phone
                        </label>

                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                            placeholder="Phone" @class([
                                'border bg-gray-50 text-sm rounded-lg dark:bg-gray-900 block w-full p-2.5',
                                'border-gray-300 text-gray-900 dark:text-white dark:border-gray-800 focus:ring-blue-500 focus:border-blue-500' => !$errors->has(
                                    'phone'
                                ),
                                'border-red-500 focus:ring-red-500 focus:border-red-500 text-red-900 placeholder-red-700' => $errors->has(
                                    'phone'
                                ),
                            ])>
                        @error('phone')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="email" @class([
                            'block mb-2 text-sm font-medium',
                            'text-gray-900 dark:text-gray-400' => !$errors->has('email'),
                            'text-red-700' => $errors->has('email'),
                        ])>
                            Email
                        </label>

                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            placeholder="example@email.com" @class([
                                'border bg-gray-50 text-sm rounded-lg dark:bg-gray-900 block w-full p-2.5',
                                'border-gray-300 text-gray-900 dark:text-white dark:border-gray-800 focus:ring-blue-500 focus:border-blue-500' => !$errors->has(
                                    'email'
                                ),
                                'border-red-500 focus:ring-red-500 focus:border-red-500 text-red-900 placeholder-red-700' => $errors->has(
                                    'email'
                                ),
                            ])>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="message" @class([
                            'block mb-2 text-sm font-medium',
                            'text-gray-900 dark:text-gray-400' => !$errors->has('message'),
                            'text-red-700' => $errors->has('message'),
                        ])>
                            Message
                        </label>

                        <textarea id="message" name="message" rows="4" placeholder="Your message..." @class([
                            'border bg-gray-50 text-sm rounded-lg dark:bg-gray-900 block w-full p-2.5',
                            'border-gray-300 text-gray-900 dark:text-white dark:border-gray-800 focus:ring-blue-500 focus:border-blue-500' => !$errors->has(
                                'message'
                            ),
                            'border-red-500 focus:ring-red-500 focus:border-red-500 text-red-900 placeholder-red-700' => $errors->has(
                                'message'
                            ),
                        ])>{{ old('message') }}</textarea>

                        @error('message')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="mt-6 text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
