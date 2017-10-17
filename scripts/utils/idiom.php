<?PHP 

    include ''.dirname(__FILE__).'/functions.php';
    
    if($_GET["idiom"]=="es"){

        include ''.dirname(__FILE__).'/../../idioms/spanish.php';

    } else if($_GET["idiom"]=="en"){

        include ''.dirname(__FILE__).'/../../idioms/english.php';

    } else {
        include ''.dirname(__FILE__).'/../../idioms/english.php';

    }

?>