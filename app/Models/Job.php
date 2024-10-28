<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
{
        return [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => 12000,
        ],
        [
            'id' => 2,
            'title' => 'PHP Developer',
            'salary' => 1200,
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => 4000,
        ]
    ];

}

public static function find (int $id): array

{
   $job = Arr::first(static::all(), fn($job): bool => $job['id'] == $id);

   if(!$job) {
       abort(404);
   }

   return $job;
}

}
