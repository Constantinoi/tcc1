<?php

use Illuminate\Database\Seeder;
use App\Produto;
class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prod1 = Produto::firstOrCreate([
            'nome' => 'Suco de Laranja',
            'descricao' => 'Jarra de 750ml',
            'valor' => 8.50,
<<<<<<< HEAD
            'tipo_produto_id' => 2,
            'produto_status_id' => 1
=======
            'imagem' => 'imagem/vazio.jpg',
            'tipo_id' => 2,
>>>>>>> 9d4011a2d1b60fdc78a37a40decb005338127570
        ]);


        $prod = Produto::firstOrCreate([
            'nome' => 'Lasanha',
            'descricao' => 'Bolonhesa',
            'valor' => 30.50,
<<<<<<< HEAD
            'tipo_produto_id' => 1,
            'produto_status_id' => 1
=======
            'imagem' => 'imagem/vazio.jpg',
            'tipo_id' => 1,
>>>>>>> 9d4011a2d1b60fdc78a37a40decb005338127570
        ]);

        $prod2 = Produto::firstOrCreate([
            'nome' => 'Batata-Frita',
            'descricao' => 'Porção Grande',
            'valor' => 12.50,
<<<<<<< HEAD
            'tipo_produto_id' => 1,
            'produto_status_id' => 1
        ]);

        $prod3 = Produto::firstOrCreate([
            'nome' => 'Coca Cola',
            'descricao' => '2litros',
            'valor' => 5.50,
            'tipo_produto_id' => 2,
            'produto_status_id' => 2
=======
            'imagem' => 'imagem/vazio.jpg',
            'tipo_id' => 1,
>>>>>>> 9d4011a2d1b60fdc78a37a40decb005338127570
        ]);
    }
}
