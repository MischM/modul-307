<?php

$input = [
    'Neue Aktionen von Ihrem Computerteile-Händler.',
    'Vergrössern Sie jetzt ihr SPAM mit SPAM.',
    'SPAM kann ihnen dabei helfen wieder ruhig zu schlafen.',
    'Kennen Sie Justin Bieber? Finden Sie andere Singles in Ihrer Nähe.',
    'Wenn spam zum Problem wird, haben Sie ein Problem.'
];

foreach($input as $nr => $satz) {
    if(stripos($satz, 'SPAM') !== false || stripos($satz, 'Singles') !== false) {
        echo "Satz {$nr} ist SPAM\n";
    } else {
        echo "Satz {$nr} ist OK\n";
    }
}