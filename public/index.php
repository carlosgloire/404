<?php
$uri = $_SERVER['REQUEST_URI'];
if($uri ==='/nous-contacter'){
    require_once('../templates/contact.php');
}
elseif($uri === '/apropos'){
    require_once('../templates/apropos.php');
}
elseif($uri === '/'){
    require_once('../templates/home.php');
}
else{
    require_once('../templates/notfound.php');
}
require_once('../partials/footer.php');
