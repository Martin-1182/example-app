<div class="px-6 py-4 my-2 w-full bg-gray-50 overflow-hidden lg:w-full xl:w-1/2 rounded-xl shadow">
    @if ($successMessage)
        <div
            class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
            <div slot="avatar">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-check-circle w-5 h-5 mx-2">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
            </div>
            <div class="text-xl font-normal  max-w-full flex-initial">
                {{ $successMessage }}
            </div>
            <div class="flex flex-auto flex-row-reverse">
                <div>
                    <svg wire:click="$set('successMessage', null)" xmlns="http://www.w3.org/2000/svg" width="100%"
                        height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x cursor-pointer hover:text-green-400 rounded-full w-5 h-5 ml-2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </div>
            </div>
        </div>
    @endif

    <form wire:submit.prevent='submitForm' action="/contact" method="POST">
        @csrf
        <div>
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <input wire:model="name" name="name" id="text"
                class="@error('name') border border-red-500 @enderror input block mt-1 w-full" type="text">
            @error('name')
                <span class="text-red-500 mt-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <input wire:model="email" name="email" id="email"
                class="@error('email') border border-red-500 @enderror input block mt-1 w-full" type="email">
            @error('email')
                <span class="text-red-500 mt-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="phone" value="{{ __('Phone') }}" />
            <input wire:model="phone" name="phone" id="phone"
                class="@error('phone') border border-red-500 @enderror input block mt-1 w-full" type="tel">
            @error('phone')
                <span class="text-red-500 mt-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="Messagge" value="{{ __('Message') }}" />
            <textarea wire:model="message" name="message" id="message"
                class="@error('message') border border-red-500 @enderror input block mt-1 w-full" rows="7"></textarea>
            @error('message')
                <span class="text-red-500 mt-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                {{ __('Send') }}
            </button>
        </div>
    </form>
</div>
