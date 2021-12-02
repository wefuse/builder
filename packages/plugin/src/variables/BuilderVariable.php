<?php
/**
 * Builder plugin for Craft CMS 3.x
 *
 * An advanced grid like builder field for Craft CMS that uses self created and existing fields.
 *
 * @link      https://www.wefuse.com
 * @copyright Copyright (c) 2021 WeFuse B.V
 */

namespace wefuse\builder\variables;

use wefuse\builder\Builder;

use Craft;

/**
 * Builder Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.builder }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    WeFuse B.V
 * @package   Builder
 * @since     0.0.1
 */
class BuilderVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.builder.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.builder.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
