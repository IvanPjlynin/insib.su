<?php 

function execPrint($command) {
    $result = array();
    exec($command, $result);
    print("<pre>");
    foreach ($result as $line) {
        print($line . "\n");
    }
    print("</pre>");
}
// Print the exec output inside of a pre element
execPrint("git init");
//execPrint("git remote add origin git@github.com:IvanPjlynin/insib.git");
execPrint("git pull https://github.com/IvanPjlynin/insib.git master");
execPrint("git status");