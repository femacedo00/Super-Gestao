<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Instanciando o objeto
        $fornecedor = new Fornecedor;
        $fornecedor->nome = 'Fornecedor 1';
        $fornecedor->site = 'fornecedor1.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor1.com.br';
        $fornecedor->save();

        // Método create (Necessário o atributo fillable na class de Fornecedor)
        Fornecedor::create([
            'nome' => 'Fornecedor 2',
            'site' => 'fornecedor2.com.br',
            'uf' => 'RS',
            'email' => 'contato@fornecedor2.com.br',
        ]);

        // Insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 3',
            'site' => 'fornecedor3.com.br',
            'uf' => 'RS',
            'email' => 'contato@fornecedor3.com.br',
        ]);
    }
}
