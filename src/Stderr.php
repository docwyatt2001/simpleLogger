<?php

declare(strict_types=1);

namespace Firehed\SimpleLogger;

/**
 * Stderr logger
 *
 * @package SimpleLogger
 * @author  Frédéric Guillot
 */
class Stderr extends File
{
    public function __construct()
    {
        parent::__construct('php://stderr');
    }
}
