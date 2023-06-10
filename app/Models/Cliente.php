<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    /**
     * Atributos que podem ser preenchidos em massa.
     *
     * @var array
     */
    protected $fillable = ['cpf', 'nome', 'data_nascimento', 'sexo', 'endereco', 'estado', 'cidade'];

    /**
     * Salvar um novo cliente.
     *
     * @param array $dados
     * @return Cliente
     */
    public static function salvarCliente(array $dados)
    {
        return self::create($dados);
    }

    /**
     * Atualizar um cliente existente.
     *
     * @param int $id
     * @param array $dados
     * @return Cliente
     */
    public static function atualizarCliente(int $id, array $dados)
    {
        $cliente = self::findOrFail($id);
        $cliente->fill($dados);
        $cliente->save();

        return $cliente;
    }
}
