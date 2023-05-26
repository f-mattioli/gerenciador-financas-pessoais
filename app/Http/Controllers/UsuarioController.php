<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Repositories\Interfaces\UsuarioRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UsuarioController extends Controller
{
    private UsuarioRepositoryInterface $usuarioRepository;

    public function __construct(UsuarioRepositoryInterface $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }

    public function index(): View
    {
        $usuarios = $this->usuarioRepository->index();
        return view('usuarios/index', compact('usuarios'));
    }

    public function create(): View
    {
        return view('usuarios/create');
    }

    public function store(UsuarioRequest $usuarioRequest): RedirectResponse
    {
        $validInputData = $usuarioRequest->validated();
        $credentials = [
            'login' => $validInputData['login'],
            'password' => $validInputData['password'],
        ];

        if (!$credentials) {
            return redirect('usuarios')->with('message', 'Credenciais Inválidas!');
        }

        $this->usuarioRepository->store($credentials);
        return redirect('usuarios')->with('message', 'Usuario criado com sucesso!');
    }

    public function show(string $id): View
    {
        $usuario = $this->usuarioRepository->show($id);
        return view('usuarios/show', compact('usuario'));
    }

    public function edit(string $id): View
    {
        $usuario = $this->usuarioRepository->edit($id);
        return view('usuarios/edit', compact('usuario'));
    }



    public function destroy(string $id)
    {
        $usuario = $this->usuarioRepository->destroy($id);
 
        return redirect('usuarios');
    }

    
    public function update(UsuarioRequest $usuarioRequest, string $id)
    {
        $validInputData = $usuarioRequest->validated();
        $credentials = [
            'login' => $validInputData['login'],
            'password' => $validInputData['password'],
        ];

        if (!$credentials) {
            return redirect()->route('usuarios/index')->with('message', 'Credenciais Inválidas!');
        }

        $this->usuarioRepository->update($credentials, $id);
        return redirect()->route('usuarios/index')->with('message', 'Usuario atualizado com sucesso!');
    }

}
