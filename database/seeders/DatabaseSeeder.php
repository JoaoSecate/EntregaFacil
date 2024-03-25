<?php

namespace Database\Seeders;

use App\Models\Pedido;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UsuarioSeeder::class,
            RestauranteSeeder::class,
            ProdutoSeeder::class,
            PedidoSeeder::class,
            ItemPedidoSeeder::class,
        ]);
    }
}