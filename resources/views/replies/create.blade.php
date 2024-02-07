<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="post" action="{{ route('replies.store') }}">
            @csrf
            <div class="mb-4">
                <label for="body" class="block text-sm font-medium text-gray-700">Your Reply:</label>
                <textarea name="body" id="body" rows="4" class="form-input mt-1 block w-full" placeholder="Enter your reply..."></textarea>
            </div>
            <x-button>{{ __('Submit Reply') }}</x-button>
        </form>
    </div>
</x-app-layout>
