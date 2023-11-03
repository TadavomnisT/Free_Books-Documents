<?php


function printTree( array $tree , string $key = "." , string $stack = "" , $first = TRUE , $firstPadding = NULL )
{
    if ( gettype($tree) == "array" )
    {
        if($firstPadding === NULL) $firstPadding = ( count($tree)>1 ) ? "│ " : " " ;
        echo $key . PHP_EOL ;
        foreach ($tree as $key => $value) {
            if ($key === array_key_last($tree)){
                echo (($first) ? "" : $firstPadding ) . $stack . "└── ";
                $padding = " ";
                if($first) $firstPadding = " ";
            }
            else {
                echo (($first) ? "" : "$firstPadding" ) . $stack . "├── ";
                $padding = "│ ";
            }
            if( is_array($value) )printTree( $value , $key , $stack . (($first) ? "" : $padding ) , FALSE , $firstPadding );
            else echo $key . " -> " . $value . PHP_EOL;
        }
    }
    else echo $tree . PHP_EOL;
}


die;

$limit = 350;

$files = explode( PHP_EOL,

"/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/1chess.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/1tree.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/2chess.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/2tree.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/2_1.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/2_2.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/2_3.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/2_chess1.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/2_tree1.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/2_chess2.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/2_tree2.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/2_chess3.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/2_tree3.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/2_chess4.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/2_tree4.png
/home/user/Desktop/Articles/5-backtracking-Pr/baxkkk/2_chess5.png"

);

foreach ($files as $file) {
    $image = imagecreatefrompng($file);
    $x = imagesx($image);
    $y = imagesy($image);
    $r = $x / $y;
    while ($x > $limit || $y > $limit) {
        --$x;
        $y = $x / $r;
    }
    $image = imagescale( $image, $x, $y );
    imagepng( $image , "./resize/" . explode( "/" , $file)[7] );
}

?>