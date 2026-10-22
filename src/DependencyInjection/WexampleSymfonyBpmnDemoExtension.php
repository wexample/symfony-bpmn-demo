<?php

namespace Wexample\SymfonyBpmnDemo\DependencyInjection;

use ReflectionClass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Wexample\PhpBpmn\Class\Xml\BpmnXmlReader;
use Wexample\SymfonyHelpers\DependencyInjection\AbstractWexampleSymfonyExtension;

class WexampleSymfonyBpmnDemoExtension extends AbstractWexampleSymfonyExtension
{
    /**
     * The examples of php-bpmn added to the registry, so that installing the
     * bundle is all an application does: a rental agency, an advisory firm,
     * and the article review played on the teams of symfony-user-demo — its
     * lanes already say the grant each takes.
     */
    public function prepend(ContainerBuilder $container): void
    {
        parent::prepend($container);

        $examples = dirname((string) (new ReflectionClass(BpmnXmlReader::class))->getFileName(), 4) . '/examples';

        $container->prependExtensionConfig('wexample_symfony_bpmn', ['paths' => [$examples]]);
    }

    public function load(
        array $configs,
        ContainerBuilder $container
    ): void {
        $this->loadConfig(
            __DIR__,
            $container
        );
    }
}
