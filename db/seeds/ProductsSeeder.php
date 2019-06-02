<?php


use Phinx\Seed\AbstractSeed;

class ProductsSeeder extends AbstractSeed
{
    public function run()
    {

      $faker = Faker\Factory::create();
      $data = [];
      for ($i = 0; $i < 100; $i++){
        $data[] = [
          "name"        => $faker->numerify('Produto ###'),
          "quant"       => $faker->randomDigit,
          "un"          => $faker->randomElements($array = array("FSC", "CX", "L"), $count = 1)[0],
          "category_id" => $faker->randomElements($array = array(1,2), $count = 1)[0],
          'created'     => date('Y-m-d H:i:s'),
        ];
      }
      $products = $this->table("products");
      $products->insert($data)->save();
    }
}
