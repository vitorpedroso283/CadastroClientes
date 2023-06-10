<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Resources\ClienteResource;
use App\Http\Requests\ClienteRequest;
use Symfony\Component\HttpFoundation\Response;

class ClienteController extends Controller
{
    /**
     * Exibe uma lista de clientes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Buscar todos os clientes
        $clientes = Cliente::all();

        // Retornar a coleção de clientes como um recurso com código de status 200 (OK)
        return response()->json(ClienteResource::collection($clientes), Response::HTTP_OK);
    }

    /**
     * Armazena um novo recurso.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        // Validar os dados recebidos no request
        $validatedData = $request->validated();

        // Criar um novo cliente com os dados validados
        $cliente = Cliente::create($validatedData);

        // Retornar o cliente criado como um recurso com código de status 201 (Created)
        return response()->json(new ClienteResource($cliente), Response::HTTP_CREATED);
    }

    /**
     * Exibe um recurso específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        // Buscar o cliente pelo ID
        $cliente = Cliente::findOrFail($id);

        // Retornar o cliente como um recurso com código de status 200 (OK)
        return response()->json(new ClienteResource($cliente), Response::HTTP_OK);
    }

    /**
     * Atualiza um recurso específico.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, int $id)
    {
        // Validar os dados recebidos no request
        $validatedData = $request->validated();

        // Buscar o cliente pelo ID
        $cliente = Cliente::findOrFail($id);

        // Atualizar os dados do cliente com os dados validados
        $cliente->update($validatedData);

        // Retornar o cliente atualizado como um recurso com código de status 200 (OK)
        return response()->json(new ClienteResource($cliente), Response::HTTP_OK);
    }

    /**
     * Remove um recurso específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        // Buscar o cliente pelo ID
        $cliente = Cliente::findOrFail($id);

        // Remover o cliente do banco de dados
        $cliente->delete();

        // Retornar uma resposta vazia com código de status 204 (No Content)
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
