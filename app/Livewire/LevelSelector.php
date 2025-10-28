<?php

namespace App\Livewire;

use Livewire\Component;

class LevelSelector extends Component
{
    public $levels = [];
    public $selectedLevel = null;
    public $game;

    public function mount($game)
    {
        $this->game = $game;

        // ✅ 25 levels, all unlocked, no scoring
        $this->levels = collect(range(1, 25))->map(function ($i) {
            return [
                'id' => $i,
                'unlocked' => true,
                'score' => null,
            ];
        })->toArray();
    }

    public function selectLevel($id)
    {
        $this->selectedLevel = collect($this->levels)->firstWhere('id', $id);
    }

    public function getLatestUnlockedProperty()
    {
        return collect($this->levels)->last(); // all unlocked, so last is level 25
    }

    public function go()
    {
        $target = $this->selectedLevel ?? $this->latestUnlocked;

        $gameUrl = env('GAME_URL');
        return redirect()->away("{$gameUrl}/games/{$this->game}/{$target['id']}");
    }

    public function render()
    {
        return view('livewire.level-selector');
    }
}
