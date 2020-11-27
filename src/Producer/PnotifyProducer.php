<?php

namespace Notify\Pnotify\Producer;

use Notify\Producer\AbstractProducer;

final class PnotifyProducer extends AbstractProducer
{
    /**
     * @inheritDoc
     */
    public function getRenderer()
    {
        return 'pnotify';
    }
}
