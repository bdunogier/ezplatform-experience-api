<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzPlatform\ExperienceAPI\Symfony;

use EzSystems\EzPlatformQueryFieldType\Symfony\DependencyInjection\Compiler;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class EzPlatformExperienceAPIBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
    }
}
