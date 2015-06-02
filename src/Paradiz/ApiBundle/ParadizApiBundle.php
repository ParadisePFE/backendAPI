<?php

namespace Paradiz\ApiBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ParadizApiBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }
}
