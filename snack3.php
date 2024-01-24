<?php

$posts = [

    '10/01/2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Gianfranco',
            'text' => ' exercitationem recusandae.'
        ],
    ],
    '10/02/2022' => [
        [
            'title' => 'Post 3',
            'author' => 'Luigi',
            'text' => ' Debitis cupiditate reprehenderit ex eligendi'
        ]
    ],
    '15/05/2023' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => ' molestiae ullam voluptates'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Matteo',
            'text' => ' Repellendus quia suscipit facere'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => ' similique enim dolorum qui reiciendis, suscipit blanditiis consectetur.'
        ]
    ],
];

foreach ($posts as $key => $date){
    echo $key.'<br>';
    foreach ($date as $post ){
        echo $post['title'].'<br>';
        echo $post['author'].'<br>';
        echo $post['text'].'<br>';

    }
}
?>
