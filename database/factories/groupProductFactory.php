<?php

namespace Database\Factories;

use App\Models\groupProduct;
use App\Models\supplier as ModelsSupplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class groupProductFactory extends Factory
{
    protected $model= groupProduct::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->word,
            'slug' => $this->faker->unique()->slug,
            'discreption' =>$this->faker->sentences(3,true),
            'photo' =>$this->faker->imageUrl(100,100),
            'status'=>$this->faker->randomElement(['active','inactive']),
            'showx'=>$this->faker->randomElement(['showin','notshow']),

            'Caturl' => $this->faker->url(),
            'sdate'=> $this->faker->dateTimeThisYear,
            'edate'=> $this->faker->dateTimeThisYear,
            'stock'=>$this->faker->randomNumber(4),
            'price'=>$this->faker->randomFloat(1,100,500),
            'showPrice'=>$this->faker->randomFloat(1,100,500),
            'periodID'=>$this->faker->randomNumber(4),
            //supplier
            'supplier' => $this->faker->name(),
            'supplier_id' =>$this->faker->randomElement(ModelsSupplier::pluck('id')->toArray()),




        ];
    }
}
