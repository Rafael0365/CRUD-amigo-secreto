<div id="formParticipar" style="display: none;">
    <form action="{{ route('participantes.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" required>

        <label for="presente">Presente:</label>
        <input type="text" name="presente" required>

        <button type="submit">Salvar Participação</button>
    </form>
</div>