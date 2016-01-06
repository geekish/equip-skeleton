<?php

namespace Equip\Skeleton\Domain;

use Equip\Adr\DomainInterface;
use Equip\Adr\PayloadInterface;

class Home implements DomainInterface
{
    /**
     * @var PayloadInterface
     */
    private $payload;

    /**
     * @param PayloadInterface $payload
     */
    public function __construct(PayloadInterface $payload)
    {
        $this->payload = $payload;
    }

    /**
     * @inheritDoc
     */
    public function __invoke(array $input)
    {
        return $this->payload
            ->withStatus(PayloadInterface::OK)
            ->withOutput([
                'template' => 'default'
            ]);
    }
}
