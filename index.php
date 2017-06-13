<?php 
/*function tweet ($pseudo, $msg, $pictprof, $date, $retweet, $like) {
echo $pictprof.' ';
echo $pseudo . ' a écrit : ' . $msg.' ';
echo '<br>'.$date;
echo ' '.$retweet.' retweets et '.$like. ' likes';
}
 * 
 * Réécrire avec les différents autres appels;
*/
include_once './Cercle.php';
include_once './Carre.php';
/*$instanceTweet = new Tweet();
$data = [
   ['pseudo' => 'Eduardo',
   'msg' => 'Issou',
   'pictprof' => 'dindon.jpg',
   'date' =>'03/05/17',
   'retweet' => 15,
   'like' => 27
   ], 
   ['pseudo' => 'Eduardo',
   'msg' => 'Hello',
   'pictprof' => 'dindon.jpg',
   'date' =>'03/05/17',
   'retweet' => 1,
   'like' => 2
   ],
   ['pseudo' => 'Eduardo',
   'msg' => 'Je découvre twitter',
   'pictprof' => 'dindon.jpg',
   'date' =>'03/05/17',
   'retweet' => 5,
   'like' => 8
   ],
   ['pseudo' => 'Nicolas Sarkozy',
   'msg' => 'Vive la France',
   'pictprof' => 'sarko.jpg',
   'date' =>'03/05/17',
   'retweet' => 158,
   'like' => 276
   ],
]
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twitter</title>
</head>
<style>
img {
    height : 50px;
    width : 75px;
}
section {
    border : 2px solid black;
    margin-bottom : 2px;
}
.top {
    border : 2px solid red;
}
h2 {
    color : royalblue;
    text-decoration :underline;
}
</style>
<body>
<h2>Timeline </h2>
<?php 
foreach($data as $tweet) {
if ($tweet['pseudo'] !=="Nicolas Sarkozy") { ?>
<?php
    echo '<section><img src="' . $tweet['pictprof']. '"/>';
    echo ' ' . $tweet['pseudo'] . ' a écrit : ' . $tweet['msg'];
    echo '<br/>'. $tweet['date']. ' ' . $tweet['retweet'] . ' retweets et ' . $tweet['like'].' likes.</p></section>';
    } else {
?>    
<h2>Top trending</h2>
<?php
    echo '<section class="top"><img src="' . $tweet['pictprof']. '"/>';
    echo ' ' . $tweet['pseudo'] . ' a écrit : ' . $tweet['msg'];
    echo '<br/>'. $tweet['date']. ' ' . $tweet['retweet'] . ' retweets et ' . $tweet['like'].' likes.</p></section>';
    }
}?>
<!--<h2>Timeline</h2>
    
<h2>Top trending</h2>    
    <div class="top"><p><?php tweet('Nicolas Sarkozy', 'Vive la France', '<img src="sarko.jpg">', '03/05/17', 115, 523); ?></p></div>
-->
</body>
</html>
