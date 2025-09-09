<div class="p-4 pt-0 text-center">
    <!-- Level Selector (Scrollable) -->
    <div class="mt-3 overflow-x-auto">
        <div class="flex gap-2 w-max px-2">
            @foreach ($levels as $level)
                <button
                    wire:click="selectLevel({{ $level['id'] }})"
                    class="w-12 h-12 rounded-full flex items-center justify-center font-bold transition shrink-0
                            {{ $level['unlocked'] 
                                ? ($selectedLevel && $selectedLevel['id'] === $level['id'] 
                                    ? 'bg-blue-600 text-white ring-2 ring-blue-400' 
                                    : 'bg-blue-400 hover:bg-blue-500 text-white')
                                : 'bg-gray-300 cursor-not-allowed text-gray-600' }}"
                    {{ $level['unlocked'] ? '' : 'disabled' }}
                >
                    @if ($level['unlocked'])
                        {{ $level['id'] }}
                    @else
                        <i class="fa-solid fa-lock"></i>
                    @endif
                </button>
            @endforeach
        </div>
    </div>

    <!-- Score Display -->
    @if ($selectedLevel && $selectedLevel['score'] !== null)
        <div class="mt-2 text-sm text-gray-600">
            Highscore: {{ $selectedLevel['score'] }}
        </div>
    @endif

    <!-- GO Button -->
    <button
        wire:click="go"
        class="mt-3 w-3/4 mx-auto bg-[#53C2F0] text-white font-semibold py-2 rounded-full hover:bg-[#3aabd8] transition block">
        GO
    </button>
</div>
