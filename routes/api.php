<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\PlayResult;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->post('/progress/{gameId}/complete', function (Request $request, $gameId) {
    $userId = auth()->id();
    $level = $request->level;
    $score = $request->score;
    $numOfCorrect = $request->num_of_correct;
    $time = $request->time;

    // Get the latest level completed by this user for this game
    $latestLevel = PlayResult::where('user_id', $userId)
        ->where('game_id', $gameId)
        ->max('level') ?? 0;

    // Enforce sequential play
    if ($level > $latestLevel + 1) {
        return response()->json([
            'success' => false,
            'error' => 'Level locked. You must complete previous levels first.'
        ], 403);
    }

    // Save the new play result
    $playResult = PlayResult::updateOrCreate(
        [
            'user_id' => $userId,
            'quest_id' => $gameId,
        ],
        [
            'level' => $level,
            'score' => $score,
            'num_of_correct' => $numOfCorrect,
            'time' => $time
        ]
    );

    return response()->json([
        'success' => true,
        'next_level' => $level + 1
    ]);
});
