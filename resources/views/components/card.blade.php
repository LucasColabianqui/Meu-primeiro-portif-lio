@props(['titulo', 'descricao', 'imagem', 'link'])

<div class="card">
    @if(isset($imagem) && $imagem != '')
        <img src="{{ $imagem }}" alt="{{ $titulo }}" class="card-img">
    @endif

    <h3>{{ $titulo }}</h3>
    <p>{{ $descricao }}</p>

    @if(isset($link) && $link != '')
        <a href="{{ $link }}" target="_blank" class="btn">Ver Projeto</a>
    @endif
</div>
