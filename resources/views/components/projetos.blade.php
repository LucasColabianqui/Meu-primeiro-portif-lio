@props(['limit' => null, 'mode' => 'full'])
@php
    $projetos = [
        [
            'titulo' => 'Site Pessoal',
            'descricao' => 'Minha página pessoal construída com Laravel e CSS moderno.',
            'imagem' => 'images/Captura de tela 2025-09-09 142540.png',
            'link' => 'https://github.com/LucasColabianqui/Meu-primeiro-portif-lio'
        ],
        [
            'titulo' => 'Hamburgueria',
            'descricao' => 'Página de compra de hamburguer feita com html, tailwindcss e javascript.',
            'imagem' => 'images/Captura de tela 2025-09-09 143530.png',
            'link' => 'https://hamburgueria-wine.vercel.app/'
        ],
        [
            'titulo' => 'Landing Page sobre bebidas',
            'descricao' => 'Meu primeiro projeto.',
            'imagem' => 'images/Captura de tela 2025-09-09 143614.png',
            'link' => 'https://landing-page-sobre-bebidas.vercel.app/'
        ]
    ];

    if ($limit) {
        $projetos = array_slice($projetos, 0, $limit);
    }
@endphp

    @foreach($projetos as $projeto)
        @if($mode === 'simple')
            
            <x-card 
                :titulo="$projeto['titulo']" 
                :descricao="$projeto['descricao']" 
            />
        @else
           
            <x-card 
                :titulo="$projeto['titulo']" 
                :descricao="$projeto['descricao']" 
                :imagem="$projeto['imagem']" 
                :link="$projeto['link']"
            />
        @endif
    @endforeach

