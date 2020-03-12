<?php
/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */

namespace EzPlatform\ExperienceAPI\Symfony\DependencyInjection\Configurator;

use App\XPI\Types;
use Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator;
use Twig\Environment;
use Twig\Extension\EscaperExtension;

class TwigEnvironmentConfigurator
{
    /**
     * @var \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator
     */
    private EnvironmentConfigurator $innerConfigurator;

    public function __construct(EnvironmentConfigurator $innerConfigurator)
    {
        $this->innerConfigurator = $innerConfigurator;
    }

    public function configure(Environment $environment)
    {
        $this->innerConfigurator->configure($environment);

        $safeClasses = [
            Types\Content\Gallery\Gallery::class,
            Types\Content\Gallery\GalleryRenderer::class,
            Types\Content\Folder\Folder::class,
            Types\Content\Folder\Fields\ShortDescription::class,
            Types\Content\Folder\Fields\ShortDescriptionRenderer::class,
            Types\Content\Folder\Fields\Description::class,
            Types\Content\Folder\Fields\DescriptionRenderer::class,
            \App\XPI\Core\Renderer\TitleRenderer::class,
            //Types\Content\FolderRenderer::class,
        ];

        $escaper = $environment->getExtension(EscaperExtension::class);
        foreach($safeClasses as $safeClass) {
            $escaper->addSafeClass($safeClass, ['html']);
        }
    }
}
