<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function getStars()
    {
        $fullStars = floor($this->vote / 2);
        $halfStar = ($this->vote % 2 == 1) ? 1 : 0;
        $remainingStars = 5 - $fullStars - $halfStar;
        $fullStars = min($fullStars, 5);

        $voteInStars = [
            'filled' => $fullStars,
            'half' => $halfStar,
            'empty' => max($remainingStars, 0)
        ];

        return $voteInStars;
    }

    public function getReleaseYear()
    {
        return explode('-', $this->date)[0];
    }
}
