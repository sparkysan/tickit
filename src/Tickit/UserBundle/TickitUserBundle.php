<?php

namespace Tickit\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TickitUserBundle extends Bundle
{

    /**
     * Gets the bundle's parent bundle name
     *
     * @return string
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
