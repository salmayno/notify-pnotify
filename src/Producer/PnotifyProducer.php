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

    /**
     * @inheritDoc
     */
    public function warning($message, $title = '', $context = array(), array $stamps = array())
    {
        return $this->render('notice', $message, $title, $context, $stamps);
    }
}
