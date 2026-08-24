<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PlayResult;

class LevelSelector extends Component
{
    public $levels = [];
    public $selectedLevel = null;
    public $game;

    public function mount($game, $userId)
    {
        $this->game = $game;
        $latestLevel = PlayResult::where('user_id', $userId)
            ->where('quest_id', $game)
            ->max('level');

        logger('Latest level:', ['user_id' => $userId, 'quest_id' => $game, 'latestLevel' => $latestLevel]);        // If no level played yet, set latestLevel to 0
        $latestLevel = $latestLevel ?? 0;

        $this->levels = collect(range(1, 25))->map(function ($i) use ($latestLevel) {
            return [
                'id' => $i,
                'unlocked' => $i <= $latestLevel + 1, // unlock levels <= last + 1
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
