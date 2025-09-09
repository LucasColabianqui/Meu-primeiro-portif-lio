<form action="{{ route('contato.enviar') }}" method="POST">
    @csrf

    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" id="mensagem" required></textarea>
    </div>

    <div>
        <x-botao texto="Enviar" />
    </div>
</form>

@if(session('success'))
    <p style="color: green; margin-top: 10px;">{{ session('success') }}</p>
@endif
