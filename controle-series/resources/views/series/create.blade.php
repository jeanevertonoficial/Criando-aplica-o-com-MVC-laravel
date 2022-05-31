<x-layout title="Nova Série">
    <form action="/series/salvar" method="post">
        @csrf
        <div class="mb-03">
            <label class="form-label" for="nome">Nome</label>
            <input class="form-control" type="text" name="nome" id="nome">
        </div>

        <button class="btn btn-primary mt-3">Adicionar</button>
    </form>
</x-layout>
