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
<<<<<<< HEAD
//execPrint("cd ~/var/www/6chester9/www/insib.su");

execPrint("pwd");
=======
execPrint("cd /var/www/6chester9/www/insib.su");
>>>>>>> cd208430ff0ca433078abbc90cc642bd7028e479
execPrint("git init");
//////execPrint("git remote add origin git@github.com:IvanPjlynin/insib.git");
execPrint("git pull https://github.com/IvanPjlynin/insib.su.git master");
execPrint("git status");
