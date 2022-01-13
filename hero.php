<script src="https://cdn.tailwindcss.com"></script>

<?php

    $stories = [
        [
        'user_id' => 1,
        'title' => 'Boas festas do Agrupamento de Escolas n.º 1 de Gondomar',
        'summary' => '«Olá a todos! O Agrupamento de Escolas n.º 1 de Gondomar está aqui para vos abraçar, para desejar a todos um feliz Natal, um santo Natal, junto de todos que mais amam. Esperamos sinceramente que neste Natal sejam muito felizes.Em 2022, logo no início, cá estaremos para vos receber e novamente nos abraçarmos! Até lá!»',
        'date' => '23-12-2021',
        'url' => 'https://www.youtube.com/watch?v=Bm9azRgtj80',
        'highlight' => true,
        'image' => '8.png',
        'type' => 'youtube'],
        [
            'user_id' => 1,
            'title' => 'Boas festas do Agrupamento de Escolas n.º 1 de Gondomar',
            'summary' => '«Olá a todos! O Agrupamento de Escolas n.º 1 de Gondomar está aqui para vos abraçar, para desejar a todos um feliz Natal, um santo Natal, junto de todos que mais amam. Esperamos sinceramente que neste Natal sejam muito felizes.Em 2022, logo no início, cá estaremos para vos receber e novamente nos abraçarmos! Até lá!»',
            'date' => '23-12-2021',
            'url' => 'https://www.youtube.com/watch?v=Bm9azRgtj80',
            'highlight' => true,
            'image' => '8.png',
            'type' => 'youtube'],
            [
                'user_id' => 1,
                'title' => 'Boas festas do Agrupamento de Escolas n.º 1 de Gondomar',
                'summary' => '«Olá a todos! O Agrupamento de Escolas n.º 1 de Gondomar está aqui para vos abraçar, para desejar a todos um feliz Natal, um santo Natal, junto de todos que mais amam. Esperamos sinceramente que neste Natal sejam muito felizes.Em 2022, logo no início, cá estaremos para vos receber e novamente nos abraçarmos! Até lá!»',
                'date' => '23-12-2021',
                'url' => 'https://www.youtube.com/watch?v=Bm9azRgtj80',
                'highlight' => true,
                'image' => '8.png',
                'type' => 'youtube'],
        [
            'user_id' => 1,
            'title' => 'Boas festas do Agrupamento de Escolas n.º 1 de Gondomar',
            'summary' => '«Olá a todos! O Agrupamento de Escolas n.º 1 de Gondomar está aqui para vos abraçar, para desejar a todos um feliz Natal, um santo Natal, junto de todos que mais amam. Esperamos sinceramente que neste Natal sejam muito felizes.Em 2022, logo no início, cá estaremos para vos receber e novamente nos abraçarmos! Até lá!»',
            'date' => '23-12-2021',
            'url' => 'https://www.google.pt',
            'highlight' => true,
            'image' => '8.png',
            'type' => 'youtube']
    ];
?>

<div class="max-w-4xl m-auto grid grid-cols-3 bg-blue-200">
    <?php foreach ($stories as $story) { ?>
        <div class="bg-blue-400 w-72 border mt-8 rounded-xl hover:shadow-xl">
            <div class="relative">
                <img class="w-64 m-auto mt-4" src="hero/<?= $story['image'] ?>">
                <svg class="absolute top-0 left-6 w-24" xmlns="http://www.w3.org/2000/svg" viewBox="-35.20005 -41.33325 305.0671 247.9995"><path d="M229.763 25.817c-2.699-10.162-10.65-18.165-20.748-20.881C190.716 0 117.333 0 117.333 0S43.951 0 25.651 4.936C15.553 7.652 7.6 15.655 4.903 25.817 0 44.236 0 82.667 0 82.667s0 38.429 4.903 56.85C7.6 149.68 15.553 157.681 25.65 160.4c18.3 4.934 91.682 4.934 91.682 4.934s73.383 0 91.682-4.934c10.098-2.718 18.049-10.72 20.748-20.882 4.904-18.421 4.904-56.85 4.904-56.85s0-38.431-4.904-56.85" fill="red"/><path d="M93.333 117.559l61.333-34.89-61.333-34.894z" fill="#fff"/></svg>
            </div>
            <div class="p-4">
                <p class="text-3xl  text-white leading-8"><?= $story['title'] ?></p>
                <p class="text-xl text-justify leading-6"><?= $story['summary'] ?></p>
                <div class="my-2" >
                    <a class="text-white" href="<?= $story['url'] ?>">Ver mais</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>


<!-- m-auto h-48 w-full object-cover -->

<!-- 
    <div class="border m-auto rounded my-4 shadow hover:shadow-md flex flex-col py-1 px-2">
        <div class="relative">        
            <img class="m-auto h-48 w-full object-cover" src="hero/<?= $story['image'] ?>">
            <?php if ($story['type'] == 'facebook') { ?>        
                    <svg class="w-16 bottom-2 right-4 absolute transition hover:scale-105" xmlns="http://www.w3.org/2000/svg" viewBox="-35.20005 -41.33325 305.0671 247.9995"><path d="M229.763 25.817c-2.699-10.162-10.65-18.165-20.748-20.881C190.716 0 117.333 0 117.333 0S43.951 0 25.651 4.936C15.553 7.652 7.6 15.655 4.903 25.817 0 44.236 0 82.667 0 82.667s0 38.429 4.903 56.85C7.6 149.68 15.553 157.681 25.65 160.4c18.3 4.934 91.682 4.934 91.682 4.934s73.383 0 91.682-4.934c10.098-2.718 18.049-10.72 20.748-20.882 4.904-18.421 4.904-56.85 4.904-56.85s0-38.431-4.904-56.85" fill="red"/><path d="M93.333 117.559l61.333-34.89-61.333-34.894z" fill="#fff"/></svg>
                <?php } elseif ($story['type'] == 'youtube') { ?>
                    <img class="w-12 bottom-2 right-4 absolute transition hover:scale-105"  src="img/icons/facebook_2021.svg">
                <?php } ?>
        </div>
    </div>

 -->
<!-- 
<div class="border m-auto rounded my-4 shadow hover:shadow-md flex flex-col py-1 px-2">
    
    <div class="relative">        
        <img class="m-auto h-48 w-full object-cover" src="<?= $story->image ?>">                        
            <?php if ($story->type == 'facebook') { ?>        
                <svg class="w-16 bottom-2 right-4 absolute transition hover:scale-105" xmlns="http://www.w3.org/2000/svg" viewBox="-35.20005 -41.33325 305.0671 247.9995"><path d="M229.763 25.817c-2.699-10.162-10.65-18.165-20.748-20.881C190.716 0 117.333 0 117.333 0S43.951 0 25.651 4.936C15.553 7.652 7.6 15.655 4.903 25.817 0 44.236 0 82.667 0 82.667s0 38.429 4.903 56.85C7.6 149.68 15.553 157.681 25.65 160.4c18.3 4.934 91.682 4.934 91.682 4.934s73.383 0 91.682-4.934c10.098-2.718 18.049-10.72 20.748-20.882 4.904-18.421 4.904-56.85 4.904-56.85s0-38.431-4.904-56.85" fill="red"/><path d="M93.333 117.559l61.333-34.89-61.333-34.894z" fill="#fff"/></svg>
            <?php } elseif ($story->type == 'youtube') { ?>
                <img class="w-12 bottom-2 right-4 absolute transition hover:scale-105"  src="img/icons/facebook_2021.svg">
            <?php } ?>
    </div>


    <div class="flex flex-col h-full mt-2 px-2">
        
            <div class=" bg-white w-full text-xs font-semibold text-justify">{{ $story->date ?></div>
        <div class="uppercase leading-tight font-bold"><?= $story->title ?></div>
        @if ($story->subtitle)
            <div class="uppercase leading-tight font-semibold"><?= $story->subtitle ?></div>
        @endif
        <div class="max-h-52">
            <p class="mt-2 h-full  overflow-hidden  w-full text-sm text-justify"><?= $story->summary ?></p>
        </div>
        
        <div class="flex flex-col justify-end h-full">
            @if ($story->categories)
                <div class="flex my-2">
                    @foreach ($story->categories as $category)
                        <x-category :category="$category"/>
                    @endforeach
                </div>
            @endif
            <div class="mt-1 justify-end ">            
                <a class="font-semibold" href="/noticias/<?= $story->id ?>">Ler mais</a>
                @if ($story->url)
                    <a class="font-semibold m-4" href="<?= $story->url ?>">Ir direto</a>
                @endif
            </div>
        </div>        
    </div>
</div> -->

