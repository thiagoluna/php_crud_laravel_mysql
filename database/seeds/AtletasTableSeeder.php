<?php

use Illuminate\Database\Seeder;
use App\Models\Atleta;

class AtletasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Atleta::create([
            'name' => 'José da Silva',
            'email' => 'jose@jose.com',
            'senha' => bcrypt('123456'),
            'endereco' => 'Rua Jose da Silva, 171',
            'bairro' => 'Silve',
            'cidade' => 'Rio de Janeiro',
            'cep' => '21021-021',
            'created_at' => '2019-09-28',
            'updated_at' => '2019-09-28'
        ]);

        Atleta::create([
            'name' => 'Maria dos Santos',
            'email' => 'maria@maria.com',
            'senha' => bcrypt('123456'),
            'endereco' => 'Rua Maria da Silva, 214',
            'bairro' => 'Santos',
            'cidade' => 'São Paulo',
            'cep' => '11021-011',
            'created_at' => '2019-09-28',
            'updated_at' => '2019-09-28'
        ]);
        Atleta::create([
            'name' => 'Pedro Alcantara',
            'email' => 'pedro@pedro.com',
            'senha' => bcrypt('123456'),
            'endereco' => 'Rua Pedro Alcantara, 171',
            'bairro' => 'Alcantara',
            'cidade' => 'Minas Gerais',
            'cep' => '35021-035',
            'created_at' => '2019-09-28',
            'updated_at' => '2019-09-28'
        ]);
        Atleta::create([
            'name' => 'Diego Maradona',
            'email' => 'maradona@maradona.com',
            'senha' => bcrypt('123456'),
            'endereco' => 'Rua Diego Maradona, 171',
            'bairro' => 'Camenito',
            'cidade' => 'Buenos Aires',
            'cep' => '98021-098',
            'created_at' => '2019-09-28',
            'updated_at' => '2019-09-28'
        ]);
        Atleta::create([
            'name' => 'Pelé Santana',
            'email' => 'pele@pele.com',
            'senha' => bcrypt('123456'),
            'endereco' => 'Rua Pele Santata, 999',
            'bairro' => 'Santana',
            'cidade' => 'Três Corações',
            'cep' => '50021-050',
            'created_at' => '2019-09-28',
            'updated_at' => '2019-09-28'
        ]);
    }
}
