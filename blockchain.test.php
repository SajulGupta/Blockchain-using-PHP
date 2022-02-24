<?php
    require './blockchain.php';

    $bc = new Blockchain();

//    echo $bc->chain[0]->toString(); // equal
//    echo Block::genesis()->toString();

     $data = 'foo';
     $bc->addBlock($data);
//     echo $bc->chain[count($bc->chain)-1]->data; //equal
//     echo $data;

    echo $bc->chain[1]->toString(); // equal
     
//    $bc = new Blockchain();
//    $bc2 = new Blockchain();
    
    
//    $bc2->addBlock('foo');
//    echo $bc->isValidChain($bc2->chain);

//    $bc2->chain[0]->data = 'Bad data';
//    echo $bc->isValidChain($bc2->chain);

//    $bc2->addBlock('foo');
//    $bc2->chain[1]->data = 'Not foo';
//    echo $bc->isValidChain($bc2->chain);
    
    
    
    
    
//    $bc2->addBlock('goo');
//    $bc->replaceChain($bc2->chain);
//    echo $bc->chain;
//    echo $bc2->chain;

//    $bc->addBlock('foo');
//    $bc->replaceChain($bc2->chain);

//    echo $bc->chain;
//    echo $bc2->chain;
    
     
?> 
