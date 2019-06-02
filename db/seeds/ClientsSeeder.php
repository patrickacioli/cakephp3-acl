<?php


use Phinx\Seed\AbstractSeed;

class ClientsSeeder extends AbstractSeed
{
  public function run()
  {

    $faker = Faker\Factory::create();
    $data = [];
    for ($i = 0; $i < 100; $i++){
      $data[] = [
        "cpf"         => $faker->numerify('###########'),
        "name"        => $faker->name(),
        "phone"       => $faker->numerify('###########'),
        "email"       => $faker->email,
        "label"       => $faker->randomElements($array = array("funcionario", "cidadao", "outro"), $count = 1)[0],
        'created'     => date('Y-m-d H:i:s'),
      ];
    }
    $clients = $this->table("clients");
    $clients->insert($data)->save();
  }
}
