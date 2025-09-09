<x-layout title="Home">
    
    <section class="hero">
        <div class="hero-content">
            <h1>Lucas Colabianqui</h1>
            <h2>Estudante de Sistemas de Informação & Desenvolvedor Full Stack</h2>
            <p>Transformando ideias em projetos web com Laravel, PHP, Java e JavaScript.</p>
            <x-botao texto="Ver Portfólio" onclick="window.location='{{ route('portifolio') }}'" />
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/ca76b2f2-62d1-4f71-a80f-36d6593b7d9c.jpg') }}" alt="Lucas Colabianqui">
        </div>
    </section>

    <section class="sobre">
        <h2>Sobre mim</h2>
        <p>Sou estudante de Sistemas de Informação, apaixonado por desenvolvimento web e tecnologias modernas. Tenho experiência em PHP, Laravel, JavaScript, Java e desenvolvimento de CRUDS e de interfaces responsivas.</p>

        <h3>Habilidades</h3>
        <x-lista />
    </section>

    <section class="portifolio-destaque">
    <div class="portifolio-destaque-divider">
        <h2>Projetos Recentes</h2>
    </div>
    <x-projetos limit="3" mode="simple" />
</section>


    <section class="contato-rapido">
        <h2>Contato</h2>
        <p>Entre em contato comigo através do formulário ou pelas redes sociais abaixo.</p>
        <x-botao texto="Ir para Contato" onclick="window.location='{{ route('contato') }}'" />
    </section>
</x-layout>