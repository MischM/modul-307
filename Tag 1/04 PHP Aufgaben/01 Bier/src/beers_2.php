<?php
for ($beers = 99; $beers > 0; $beers--) {

    $oneLess = $beers - 1;
    $bottles = $beers === 1 ? 'bottle' : 'bottles';

    echo "${beers} ${bottles} of beer on the wall, ${beers} ${bottles} of beer.\n"
       . "Take one down and pass it around, ${oneLess} bottles of beer on the wall.\n\n";

}
