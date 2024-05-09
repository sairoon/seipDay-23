<?php

require_once 'vendor/autoload.php';
//    echo "hello world";

/*class hidude{
    public function hidude(){
        echo 'Hi Dude!! Its sleeping Time';
    }
}
$hidude = new hidude();
$hidude-> hidude();*/

//require_once 'app/classes/HelloWorld.php';
use App\classes\HelloWorld;

$hellowoeld = new HelloWorld();
$hellowoeld->index();