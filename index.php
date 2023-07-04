
<?php
$array_matches = [
    [
        'match' => 'lakers - Nuggets',
        'results' => '102 - 99'
    ],
    [
        'match' => 'Magic - Celtics',
        'results' => '100 - 115'
    ],
    [
        'match' => 'Trail Blazers - Warriors',
        'results' => '100 - 107'
    ],
    [
        'match' => 'Cavaliers - Knicks',
        'results' => '102 - 94'
    ],
    [
        'match' => 'Suns - Spurs',
        'results' => '130 - 99'
    ],
    [
        'match' => 'Bucks - Bulls',
        'results' => '102 - 99'
    ],
];

//Snack 2 //
$flag_name = false;
$flag_eta = false;
$flag_email = false;


if(isset($_GET['nome']) && isset($_GET['eta']) && isset($_GET['email'])){
    if(strlen($_GET['nome']) > 3){
        $flag_name = true;
    }

    if(str_contains($_GET['email'], '0') && str_contains($_GET['email'],'.')){
        $flag_email = true;
    }

    if(is_numeric($_GET['eta'])){
        $flag_eta = true;
    }
}

//snack 3 //
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Snack 1</h1>
    <ul>
        <?php foreach($array_matches as $items){ ?>
            <li><?php echo $items['match'].' | '.$items['results']; ?></li>
        <?php } ?>
    </ul>
    <hr>
    <h1>Snack 2 </h1>
    <form action="index.php" method="GET">
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="eta" placeholder="eta" >
        <button type="submit">invia</button>
    </form>
    <?php if(isset($_GET['nome']) && isset($_GET['eta']) && isset($_GET['email'])){ ?>
        <?php if($flag_email && $flag_eta && $flag_name){
            echo 'accesso riuscito';
        }
        else{
            echo 'accesso negato';
        }
        ?>
    <?php } ?>
    <hr>
    <h1>snack 3</h1>
        <ul>
            <?php foreach ($posts as $key=>$post){ ?>
                <li>
                    <?php echo $key; ?>
                    
                </li>
            <?php } ?>
        </ul>
</body>
</html>