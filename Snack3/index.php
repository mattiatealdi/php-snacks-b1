<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

//var_dump(array_keys($posts));

foreach($posts as $date => $dateposts){
    echo $date;
    foreach($dateposts as $post){
        echo $post['title'];
        echo $post['author'];
        echo $post['text'];
    }
}


/* <ul>
    <?php foreach($posts as $date => $dateposts){?>
        <h1><?php echo $date?></h1>
        <?php foreach($dateposts as $post){?>
            <li><?php echo echo $post['title']?> - <?php echo echo $post['author']?> - <?php echo echo $post['text']?> </li>
        <?php } ?>
    <?php } ?> 
</ul>
 */

?>


<ul>
    <?php foreach ($posts as $date => $dateposts){?>
        <h1><?php echo $date ?></h1>
        <?php foreach($dateposts as $post){ ?>
            <li><?php echo $post['title'] ?> - <?php echo $post['author'] ?> - <?php echo $post['text'] ?></li>
        <?php } ?>
    <?php } ?>
</ul>

 



</body>
</html>