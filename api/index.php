<?php

header('Access-Control-Allow-Origin: *');

$data = [

    [
        'image'=>'https://blog.dankicode.com/wp-content/uploads/2022/03/5.jpg',
        'conteudo'=>'Desenvolva aplicações web e APIs usando NodeJS e conectando
         suas funções ao banco de dados com MongoDB.
        Portanto, entenda como operar com maestria no NodeJS. Aprenda do básico ao 
        avançado e domine ainda mais a linguagem mais popular, o Java Script.'
    ],
    [
        'image'=>'https://blog.dankicode.com/wp-content/uploads/2022/03/6.jpg',
        'conteudo'=>'Desenvolva aplicações web e APIs usando NodeJS e conectando
         suas funções ao banco de dados com MongoDB.
        Portanto, entenda como operar com maestria no NodeJS. Aprenda do básico ao 
        avançado e domine ainda mais a linguagem mais popular, o Java Script.'
    ],
    [
        'image'=>'https://blog.dankicode.com/wp-content/uploads/2022/03/4.jpg',
        'conteudo'=>'Desenvolva aplicações web e APIs usando NodeJS e conectando
         suas funções ao banco de dados com MongoDB.
        Portanto, entenda como operar com maestria no NodeJS. Aprenda do básico ao 
        avançado e domine ainda mais a linguagem mais popular, o Java Script.'
    ]
];

die(json_encode($data));