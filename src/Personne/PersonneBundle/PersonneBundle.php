<?php

namespace Personne\PersonneBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PersonneBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle'; 
    }
}
