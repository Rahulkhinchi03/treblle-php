<?php

declare(strict_types=1);

namespace Treblle\Contract;

use Treblle\Model\Server;

interface ServerDataProvider
{
    public function getServer(): Server;
}
