<?php

set_time_limit(0);

// // // // // // // // // // // // // // // // // // // // // // // // // // // 
// //                                                                      // // 
// //                              NOTICE:                                 // // 
// //                                                                      // // 
// //                  THIS IS NOT AN OPTIMISED SCRIPT!                    // // 
// //                  THIS IS NOT AN OPTIMISED SCRIPT!                    // // 
// //                  THIS IS NOT AN OPTIMISED SCRIPT!                    // // 
// //                  THIS IS NOT AN OPTIMISED SCRIPT!                    // // 
// //                                                                      // // 
// //                                                                      // // 
// //             THIS SCRIPT IS JUST FOR EDUCATIONAL PURPOSES             // // 
// //                                                                      // // 
// //               CLASSES AND FUNCTIONS BY : TadavomnisT                 // // 
// //                                                                      // // 
// //                                                                      // // 
// //                    GitHub gist for this script:                      // // 
// // https://gist.github.com/TadavomnisT/d9fc6ba06dcb775b5ee8cf8baaa94588 // // 
// //                                                                      // // 
// //                 GitHub repositpry for this script:                   // // 
// // https://github.com/TadavomnisT/My_gists/tree/main/php_back_tracking  // // 
// //                                                                      // // 
// // // // // // // // // // // // // // // // // // // // // // // // // // //

n_rooks( 4 );

n_rooks( 4 , true ); //distinguish between rooks

// // -----------------------------------------------------

n_queens( 4 );

n_queens( 4 , true ); //distinguish between queens

// =============================================================================
// =============================================================================
// FUNCTIONS====================================================================
// =============================================================================
// =============================================================================

function n_rooks( int $size , bool $distinguish = false )
{
    echo PHP_EOL . "** $size ROOKS **" . (($distinguish)? " (distinguishing between rooks)" : " (no distinguish between rooks)") . PHP_EOL . "Building empty matrix..." . PHP_EOL;
    $matrix = [];
    for ($i = 0; $i < $size; $i++) // build empty matrix
        for ($j=0; $j <$size ; $j++)
            $matrix[$i][$j] = 0;
    echo "Building decision tree..." . PHP_EOL;
    $tree = new Tree;
    $tree->createNode( "root" );
    for ($i = 0; $i < $size ; $i++) {
        foreach ($tree->getAllNodesOfDepth($i) as $KeyOfNode) {
            $tempNode = $tree->getNode( $KeyOfNode );
            $forbiddenRows = [];
            $forbiddenColumns = [];
            while (!$tempNode->isRoot()) {
                $forbiddenRows[] = $tempNode->getValue()[0]; 
                $forbiddenColumns[] = $tempNode->getValue()[1];
                $tempNode = $tree->getNode( $tempNode->getParent() );
            }
            for ($j = 0; $j < $size  ; $j++) { 
                for ($k = 0; $k < $size  ; $k++) { 
                    if ( !in_array( $j , $forbiddenRows ) && !in_array( $k , $forbiddenColumns ) ) $tree->createChild( [$j , $k] , $KeyOfNode );
                }
            }
        }
    }
    echo "Printing decision tree :" . PHP_EOL;
    $tree->printTree();
    echo PHP_EOL . "Printing all possible solutions :" . PHP_EOL;
    $printedMatrixes = [];
    $answerCounter = 0;
    if (!$distinguish) $symmetricCounter = 0;
    foreach ($tree->getAllNodesOfDepth($size) as $KeyOfNode) {
        $tempMatrix = $matrix;
        $tempNode = $tree->getNode( $KeyOfNode );
        $counter = $size;
        while (!$tempNode->isRoot()) {
            $coordinate = $tempNode->getValue(); 
            $tempMatrix[ $coordinate[0] ][ $coordinate[1] ] = ($distinguish) ? $counter : 1 ;
            $tempNode = $tree->getNode( $tempNode->getParent() );
            --$counter;
        }
        if (!$distinguish) {
            if ( !in_array( $tempMatrix , $printedMatrixes  ) ) {
                if(is_symmetric($tempMatrix , $size)){
                    echo "**symmetric**" . PHP_EOL;
                    ++$symmetricCounter;
                } 
                for ($i=0; $i < $size; $i++) { // print matrix
                    for ($j=0; $j <$size ; $j++) { 
                        echo $tempMatrix[$i][$j] . " ";
                    }
                    echo PHP_EOL;
                }
                echo str_repeat("_" , $size * 2 - 1) . PHP_EOL;
                ++ $answerCounter;
            }
            $printedMatrixes[] = $tempMatrix;
        }
        else{
            for ($i=0; $i < $size; $i++) { // print matrix
                for ($j=0; $j <$size ; $j++) { 
                    echo $tempMatrix[$i][$j] . " ";
                }
                echo PHP_EOL;
            }
            echo str_repeat("_" , $size * 2 - 1) . PHP_EOL;
            ++ $answerCounter;
        }
    }
    echo "Number of answers : " . $answerCounter . PHP_EOL;
    if (!$distinguish) echo "Number of symmetric answers : " . $symmetricCounter . PHP_EOL;
    echo "___________________________________" .PHP_EOL;
}

function n_queens( int $size , $distinguish = false )
{
    echo PHP_EOL  . "** $size QUEENS **" . (($distinguish)? " (distinguishing between queens)" : " (no distinguish between queens)") . PHP_EOL .  "Building empty matrix..." . PHP_EOL;
    $matrix = [];
    for ($i = 0; $i < $size; $i++) // build empty matrix
        for ($j=0; $j <$size ; $j++)
            $matrix[$i][$j] = 0;
    echo "Building decision tree..." . PHP_EOL;
    $tree = new Tree;
    $tree->createNode( "root" );
    for ($i = 0; $i < $size ; $i++) {
        foreach ($tree->getAllNodesOfDepth($i) as $KeyOfNode) {
            $tempNode = $tree->getNode( $KeyOfNode );
            $forbiddenRows = [];
            $forbiddenColumns = [];
            $forbiddenSums = [];
            $forbiddenSubs = [];
            while (!$tempNode->isRoot()) {
                $forbiddenRows[] = $tempNode->getValue()[0]; 
                $forbiddenColumns[] = $tempNode->getValue()[1];
                $forbiddenSums[] = $tempNode->getValue()[1] + $tempNode->getValue()[0];
                $forbiddenSubs[] = $tempNode->getValue()[1] - $tempNode->getValue()[0];
                $tempNode = $tree->getNode( $tempNode->getParent() );
            }
            for ($j = 0; $j < $size  ; $j++) { 
                for ($k = 0; $k < $size  ; $k++) { 
                    if ( !in_array( $j , $forbiddenRows ) && 
                        !in_array( $k , $forbiddenColumns) &&
                        !in_array( $k + $j , $forbiddenSums) &&
                        !in_array( $k - $j , $forbiddenSubs)
                        ){
                            $tree->createChild( [$j , $k] , $KeyOfNode );
                        }
                }
            }
        }
    }
    echo "Printing decision tree :" . PHP_EOL;
    $tree->printTree();
    echo PHP_EOL . "Printing all possible solutions :" . PHP_EOL;
    $printedMatrixes = [];
    $answerCounter = 0;
    if (!$distinguish) $symmetricCounter = 0;
    foreach ($tree->getAllNodesOfDepth($size) as $KeyOfNode) {
        $tempMatrix = $matrix;
        $tempNode = $tree->getNode( $KeyOfNode );
        $counter = $size;
        while (!$tempNode->isRoot()) {
            $coordinate = $tempNode->getValue(); 
            $tempMatrix[ $coordinate[0] ][ $coordinate[1] ] = ($distinguish) ? $counter : 1 ;
            $tempNode = $tree->getNode( $tempNode->getParent() );
            --$counter;
        }
        if (!$distinguish) {
            if ( !in_array( $tempMatrix , $printedMatrixes  ) ) {
                if(is_symmetric($tempMatrix , $size)){
                    echo "**symmetric**" . PHP_EOL;
                    ++$symmetricCounter;
                } 
                for ($i=0; $i < $size; $i++) { // print matrix
                    for ($j=0; $j <$size ; $j++) { 
                        echo $tempMatrix[$i][$j] . " ";
                    }
                    echo PHP_EOL;
                }
                echo str_repeat("_" , $size * 2 - 1) . PHP_EOL;
                ++ $answerCounter;
            }
            $printedMatrixes[] = $tempMatrix;
        }
        else{
            for ($i=0; $i < $size; $i++) { // print matrix
                for ($j=0; $j <$size ; $j++) { 
                    echo $tempMatrix[$i][$j] . " ";
                }
                echo PHP_EOL;
            }
            echo str_repeat("_" , $size * 2 - 1) . PHP_EOL;
            ++ $answerCounter;
        }
    }
    echo "Number of answers : " . $answerCounter . PHP_EOL;
    if (!$distinguish) echo "Number of symmetric answers : " . $symmetricCounter . PHP_EOL;
    echo "___________________________________" .PHP_EOL;
}

function is_symmetric( array $matrix , int $size )
{
    for ($i=0; $i < $size; $i++) 
        for ($j=0; $j <$size ; $j++) 
            if( $matrix[$i][$j] !== $matrix[$j][$i] ) return false ;
    return true;
}

function n_rooks_optimised( int $size ) //Try to directly print solutions instead of storing them in tree.
{
    # code...
}

function n_queens_optimised( int $size ) //Try to directly print solutions instead of storing them in tree.
{
    # code...
}

// =============================================================================
// =============================================================================
// CLASSES======================================================================
// =============================================================================
// =============================================================================

class Tree
{
    private $nodes = [];

    public function __construct( ) {
        #-------constructor? maybe later:))
    }
    public function setValue( int $nodeNumber , $value )
    {
        $this->nodes[$nodeNumber]->setValue($value); 
        return [
            "key" => $nodeNumber,
            "node" => $this->nodes[$nodeNumber]
        ];
    }
    public function deleteNode(int $nodeNumber) //NOT IMPLEMENTED YET
    {
        # code...
    }
    public function breadthFirst() //NOT IMPLEMENTED YET
    {
        # code...
    }
    public function depthFirst() //NOT IMPLEMENTED YET
    {
        # code...
    }
    public function getAllNodes()
    {
        return $this->nodes;
    }
    public function getAllNodesOfDepth( int $depth )
    {
        $return = [];
        foreach ($this->nodes as $key => $node) {
            if( $this->getNodeDepth( $key ) == $depth ) $return[] = $key;
        }
        return $return;
    }
    public function createNode( $value = null , int $parent = null , array $children = [])
    {
        $this->nodes[] = new Node ( $value , $parent , $children );
        return [
            "key" => (count( $this->nodes ) -1),
            "node" => $this->nodes[(count( $this->nodes ) -1)]
        ];
    }
    public function createChild(  $value = null ,  int $parent = null  )
    {
        $this->nodes[] = new Node ( $value , $parent , [] );
        $this->nodes[$parent]->addChildren( (count( $this->nodes ) -1) );
        return [
            "key" => (count( $this->nodes ) -1),
            "node" => $this->nodes[(count( $this->nodes ) -1)]
        ];
    }
    public function getChildren( $nodeNumber )
    {
        return $this->nodes[ $nodeNumber ]->getChildren;
    }
    public function getNode( $nodeNumber )
    {
        return $this->nodes[ $nodeNumber ];
    }
    public function getRoot()
    {
        foreach ($this->nodes as $key => $node) {
            if ($node->getParent() === null) return ["key" => $key , "node" => $node];
        }
        return false;
    }
    public function getTreeDepth()
    {
        if( count($this->nodes) === 0 ) return 0;
        $tempNode = $this->getRoot()['node'];
        $depth = 0;
        do {
            $tempNode= $this->nodes[$tempNode->children[0]];
            $depth++;
        }while (!($tempNode->isLeafe()));
        return $depth;
    }
    public function getNodeDepth( $nodeNumber )
    {
        if( count($this->nodes) === 0 ) return 0;
        $tempNode = $this->nodes[ $nodeNumber ];
        $depth = 0;
        while (!($tempNode->isRoot())){
            $tempNode = $this->nodes[$tempNode->getParent()];
            $depth++;
        }
        return $depth;
    }
    private function convertToArray( $processNode = NULL )
    {
        if($processNode == NULL) $processNode = $this->getRoot()['node'];
        if ( count( $processNode->getChildren() ) > 0 )
        foreach ($processNode->getChildren() as $node) {
            if ( count( $this->nodes[$node]->getChildren() ) == 0 )
            $return[ json_encode($processNode->getValue()) ][] = $this->convertToArray( $this->nodes[$node] )  ;
            else $return[ json_encode($processNode->getValue()) ] = ((isset($return)) ? $return[ json_encode($processNode->getValue()) ] : []) + $this->convertToArray( $this->nodes[$node] )  ;
        }
        else $return = json_encode($processNode->getValue());
        return $return; 
    }
    private function printArray( array $tree , string $key = "." , string $stack = "" , $first = TRUE , $firstPadding = NULL )
    {
        if ( gettype($tree) == "array" )
        {
            if($firstPadding === NULL) $firstPadding = ( count($tree)>1 ) ? "│   " : "    " ;
            echo   $key . PHP_EOL ;
            foreach ($tree as $key => $value) {
                if ($key === array_key_last($tree)){
                    echo (($first) ? "" : $firstPadding ) . $stack . "└── ";
                    $padding = "    ";
                    if($first) $firstPadding = "    ";
                }
                else {
                    echo (($first) ? "" : $firstPadding ) . $stack . "├── ";
                    $padding = "│   ";
                }
                if( is_array($value) )$this->printArray( $value , $key ,   $stack . (($first) ? "" : $padding ) , FALSE , $firstPadding );
                else echo $key . " -> " . $value . PHP_EOL;
            }
        }
        else echo $tree . PHP_EOL;
    }
    public function printTree()
    {
        if( count($this->nodes) < 1 ) echo "EMPTY TREE" . PHP_EOL;
        else if( count($this->nodes) == 1 ) echo $this->getRoot()["node"]->getValue() . PHP_EOL;
        else $this->printArray( $this->convertToArray() );
        return true;
    }
}

class Node 
{
    private $value;
    private $parent = null;
    private $children = [];

    public function __construct( $value = null , int $parent = null , array $children = []) {        
        $this->value = $value;
        $this->parent = $parent;
        $this->children = $children;
    }
    public function getValue()
    {
        return $this->value;
    }
    public function getParent()
    {
        return $this->parent;
    }
    public function getChildren()
    {
        return $this->children;
    }
    public function setValue( $newValue )
    {
        $this->value = $newValue;
        return $this->value;
    }
    public function setParent( $newParent )
    {
        $this->parent = $newParent;
        return $this->parent;
    }
    public function setChildren( $newChildren = [] )
    {
        $this->children = $newChildren;
        return $this->children;
    }
    public function addChildren( $newChild )
    {
        $this->children[] = $newChild;
        return $this->children;
    }
    public function delParent()
    {
        $this->parent = null;
        return true;
    }
    public function delChildren( $index )
    {
        unset($this->children[$index]);
        return $this->children;
    }
    public function delAllChildren()
    {
        $this->children = [];
        return $this->children;
    }
    public function isLeafe()
    {
        if( count($this->children) === 0 ) return true;
        return false;
    }
    public function isRoot()
    {
        if( $this->parent === NULL ) return true;
        return false;
    }
}

// =============================================================================
// =============================================================================
// EXAMPLES=====================================================================
// =============================================================================
// =============================================================================


// // AN EXAMPLE TO SHOW HOW TO USE TREE CLASS==================================
// $tree = new Tree;
// $root = $tree->createNode( "root" );
// $firstDepthChild1 = $tree->createChild( [1,2] , $root["key"] );
// $firstDepthChild2 = $tree->createChild( [0,1] , $root["key"] );
// $firstDepthChild3 = $tree->createChild( [1,1] , $root["key"] );
// $secondDepthChild1 = $tree->createChild( [0,0] , $firstDepthChild3["key"] );
// $secondDepthChild2 = $tree->createChild( [2,0] , $firstDepthChild3["key"] );
// $secondDepthChild3 = $tree->createChild( [3,3] , $secondDepthChild2["key"] );
// $tree->printTree();
// var_dump($tree->getAllNodesOfDepth(4));
// // ==========================================================================


?>
