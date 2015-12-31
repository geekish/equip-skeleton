<?php

namespace Spark\Skeleton\Domain;

use Spark\Adr\DomainInterface;
use Spark\Adr\PayloadInterface;

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
