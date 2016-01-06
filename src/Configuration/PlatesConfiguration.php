<?php

namespace Equip\Skeleton\Configuration;

use Auryn\Injector;
use League\Plates\Engine;
use League\Plates\Extension\Asset;
use Equip\Env;
use Equip\Configuration\ConfigurationInterface;
use Equip\Formatter\PlatesFormatter;
use Equip\Responder\FormattedResponder;

class PlatesConfiguration implements ConfigurationInterface
{
    /** @var string */
    protected $templatePath;

    /** @var string */
    protected $templateExt;

    /** @var string */
    protected $assetPath;

    public function __construct(Env $env)
    {
        $this->templatePath = $env['PATH_TEMPLATES'] ?: null;
        $this->templateExt = $env['TEMPLATE_EXT'] ?: 'php';
        $this->assetPath = $env['PATH_ASSETS'] ?: null;
    }

    /**
     * @inheritdoc
     */
    public function apply(Injector $injector)
    {
        $injector->define(Asset::class, [
            ':path' => $this->assetPath
        ]);

        $injector->define(Engine::class, [
            ':directory' => $this->templatePath,
            ':fileExtension' => $this->templateExt
        ]);

        $injector->prepare(Engine::class, function (Engine $engine, $injector) {
            $engine->loadExtension($injector->make(Asset::class));
            return $engine;
        });

        $injector->prepare(FormattedResponder::class, function (FormattedResponder $responder) {
            return $responder->withValue(PlatesFormatter::class, 1.0);
        });
    }
}
