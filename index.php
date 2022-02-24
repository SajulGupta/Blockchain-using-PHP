<?php
    require './blockchain.php';
    
    //header('Content-Type: application/json; charset=utf-8');
    
    //const HTTP_PORT = process.env.HTTP_PORT || 3001;
    
if(!session_id()){
    session_start();
    $_SESSION['bc'] = new Blockchain();
}

//     app.get('/blocks', (req, res) => {
//         res.json($bc->chain);
//     });

//    app.listen(HTTP_PORT, () => console.log(`Listening on port: ${HTTP_PORT}`));


if(isset($_GET['blocks'])){
    print_r ($_SESSION['bc']->chain);
}

if(isset($_GET['data'])){
    $block = $_SESSION['bc']->addBlock($_GET['data']);
    //header('Location: ./index.php?blocks');
}
print_r ($_SESSION['bc']->chain);
//session_destroy();

?>
