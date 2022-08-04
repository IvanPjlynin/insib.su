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
execPrint("cd /var/www/6chester9/www/insib.su");
execPrint("eval `ssh-agent`");
execPrint("ssh-add ./.ssh/id_rsa");
execPrint("git pull https://github.com/IvanPjlynin/insib.su.git master");
execPrint("git status");