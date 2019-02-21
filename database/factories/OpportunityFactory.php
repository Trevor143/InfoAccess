<?php

use Faker\Generator as Faker;

$factory->define(App\Opportunity::class, function (Faker $faker) {
    return [
        //
        'Oppo_type'=> $faker->randomElement(['Export','Not Applicable']),
        'Pdt_Required' => $faker->text('8'),
        'poster_id'=> $faker->numberBetween($min = 1, $max = 10),
        'Importing_Country' =>$faker->randomElement([$faker->country,'Not Applicable']),
        'Qty_req' => $faker->numberBetween(50000,100000),
        'MinQty_req'=>$faker->numberBetween(1000,3000),
        'PdtCertification'=> $faker->randomElement(['UNBS', 'HALAAL','Meat Authority','UBOS']),
        'TradeAgree' => $faker->randomElement(['COMESA', 'EAC', 'UNDP'])
    ];
});
