<?php

namespace Equip\Skeleton\Domain;

use Equip\Adr\DomainInterface;
use Equip\Adr\PayloadInterface;

class Hello implements DomainInterface
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
        $name = !empty($input['name']) ? $input['name'] : 'world';

        return $this->payload
            ->withStatus(PayloadInterface::OK)
            ->withOutput([
                'name' => ucfirst($name),
                'template' => 'hello'
            ]);
    }
}
