<?php
/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */

namespace EzPlatform\ExperienceAPI\Renderer;

use eZ\Publish\API\Repository\Values\Content\Content;
use eZ\Publish\Core\MVC\Symfony\Templating\Twig\Extension\FieldRenderingExtension;

/**
 * Renders a field using the configured field templates.
 */
class FieldTemplateRenderer
{
    /** @var string */
    private $text;

    /** @var \eZ\Publish\Core\MVC\Symfony\Templating\Twig\Extension\FieldRenderingExtension */
    private FieldRenderingExtension $fieldRenderingExtension;

    /** @var \eZ\Publish\API\Repository\Values\Content\Content */
    private Content $content;

    /** @var string */
    private string $fieldIdentifier;

    public function __construct(FieldRenderingExtension $fieldRenderingExtension, Content $content, string $fieldIdentifier)
    {
        $this->fieldRenderingExtension = $fieldRenderingExtension;
        $this->content = $content;
        $this->fieldIdentifier = $fieldIdentifier;
    }

    public function __toString(): string
    {
        return $this->fieldRenderingExtension->renderField($this->content, $this->fieldIdentifier, []);
    }
}
