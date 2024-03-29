<?php

namespace App\Services;

use App\Models\Anime;

class CreateAnime {
    public function createAnime(
        string $nameAnime, 
        int $qtdSeasons, 
        int $episodes_season,
        ?string $picture
    ): Anime {
        $anime = Anime::create(['name' => $nameAnime, 'picture' => $picture]);
        for ($i = 1; $i <= $qtdSeasons; $i++) {
            $season = $anime->seasons()->create(['number' => $i]);

            for ($j = 1; $j <= $episodes_season; $j++) {
                $season->episodes()->create(['number' => $j]);
            }
        }

        return $anime;
    }
}