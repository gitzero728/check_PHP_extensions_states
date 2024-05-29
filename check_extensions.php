<?php
$extensions = array('ctype', 'iconv', 'pcre', 'session', 'simplexml', 'tokenizer');

foreach ($extensions as $extension) {
    if (extension_loaded($extension)) {
        echo $extension . " extension is installed and enabled. <hr>";
    } else {
        echo $extension . " extension is not installed or enabled. <hr>";
    }
}
?>
