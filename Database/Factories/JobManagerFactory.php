<?php

declare(strict_types=1);

namespace Modules\Job\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use Modules\Job\Models\JobManager;

class JobManagerFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = JobManager::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {


        return [
            
        ];
    }
}