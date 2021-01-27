
    <div class="px-6 py-4 my-2 w-full bg-blue-50 overflow-hidden lg:w-full xl:w-1/2 rounded-xl shadow">
        <form action="{{ route('send-mail') }}" method="post">
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <input name="name" id="text" class="input block mt-1 w-full" type="text" value="">
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <input name="email" id="email" class="input block mt-1 w-full" type="email" value="">
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Phone') }}" />
                <input name="tel" id="phone" class="input block mt-1 w-full" type="tel" value="">
            </div>

            <div class="mt-4">
                <x-jet-label for="Messagge" value="{{ __('Message') }}" />
                <textarea name="message" id="message" class="input block mt-1 w-full" rows="7"></textarea>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                    {{ __('Send') }}
                </button>
            </div>
        </form>
    </div>

