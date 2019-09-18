<?php

define('LH_LIB_ROOT', '/Users/user/MyData/phplib');
require_once LH_LIB_ROOT . '/lhChatterBoxDataProviders/classes/lhAIML.php';
require_once LH_LIB_ROOT . '/lhChatterBoxDataProviders/classes/lhCSML.php';
require_once LH_LIB_ROOT . '/lhChatterBoxDataProviders/classes/lhSessionFile.php';
require_once LH_LIB_ROOT . '/lhRuNames/classes/lhRuNames.php';
require_once LH_LIB_ROOT . '/lhChatterBox20/classes/lhChatterBox.php';

define('LH_SESSION_DIR', '/Users/user/MyData/lhsessiondata/');


echo "Проверка класса lhVikaBot\n";
require_once __DIR__ . '/lhVikaBot/classes/lhVikaBot.php';

$vika = new lhChatterBox(
        $session = new lhSessionFile(), 
        $ai = new lhAIML('aiml.xml'), 
        $cs = new lhCSML('csml.xml')
);

$session->set('status', 'babbler');
print_r($vika->process('/stent'));