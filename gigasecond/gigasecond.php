<?php

function from( $inputDate ) {
    return $inputDate->add(new DateInterval( 'PT1000000000S' ));
}

