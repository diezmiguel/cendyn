<?php

namespace App\Services;

class FakerService
{
    public function __contruct()
    {
    }

    public static function generatePersonCollection($limit = 10): ?array
    {
        $faker = \Faker\Factory::create();
        $personCollection = [];
        for ($i = 1; $i <= $limit; ++$i) {
            $data['id'] = $i;
            $data['first_name'] = $faker->firstName;
            $data['last_name'] = $faker->lastName;
            $data['city'] = $faker->city;
            $data['state'] = $faker->state;
            $data['job_title'] = $faker->jobTitle;
            $personCollection[] = $data;
        }

        return $personCollection;
    }
}
