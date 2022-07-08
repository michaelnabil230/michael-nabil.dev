@title('Contact')

@extends('_layouts.app')

@section('main')
    <h1 class="uppercase tracking-wide font-bold text-gray-600">Contact</h1>

    <form method="POST" action="{{ route('contact.store') }}" class="mt-6">
        @csrf
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900" for="name">
                Your Name
            </label>

            <input type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Name">
        </div>

        <div class="mt-6">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="phone">
                Phone Number
            </label>

            <input type="tel" id="phone" name="phone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Phone">
        </div>

        <div class="mt-6">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="email">
                Email Address
            </label>

            <input type="email" id="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="name@flowbite.com">
        </div>

        <div class="mt-6">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="message">
                Message
            </label>

            <textarea id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Your message..."></textarea>
        </div>

        <button type="submit"
            class="mt-6 text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
            Send Message
        </button>
    </form>
@endsection
