<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dados de exemplo para popular a tabela de clientes
        $clientes = [
            [
                'cpf' => '12345678900',
                'nome' => 'João Silva',
                'data_nascimento' => '1990-01-01',
                'sexo' => 'Masculino',
                'endereco' => 'Rua A, 123',
                'estado' => 'SP',
                'cidade' => 'São Paulo',
            ],
            [
                'cpf' => '98765432100',
                'nome' => 'Maria Souza',
                'data_nascimento' => '1992-05-10',
                'sexo' => 'Feminino',
                'endereco' => 'Av. B, 456',
                'estado' => 'RJ',
                'cidade' => 'Rio de Janeiro',
            ],
            [
                'cpf' => '11122233344',
                'nome' => 'Carlos Oliveira',
                'data_nascimento' => '1985-09-15',
                'sexo' => 'Masculino',
                'endereco' => 'Rua C, 789',
                'estado' => 'MG',
                'cidade' => 'Belo Horizonte',
            ],
            [
                'cpf' => '55566677788',
                'nome' => 'Ana Santos',
                'data_nascimento' => '1998-07-20',
                'sexo' => 'Feminino',
                'endereco' => 'Av. D, 987',
                'estado' => 'BA',
                'cidade' => 'Salvador',
            ],
            [
                'cpf' => '99900011122',
                'nome' => 'Pedro Pereira',
                'data_nascimento' => '1994-03-05',
                'sexo' => 'Masculino',
                'endereco' => 'Rua E, 456',
                'estado' => 'RS',
                'cidade' => 'Porto Alegre',
            ],
        ];

        // Insere os clientes na tabela
        foreach ($clientes as $clienteData) {
            Cliente::create($clienteData);
        }
    }
}
