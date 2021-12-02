<?php
/**
 * Builder plugin for Craft CMS 3.x
 *
 * An advanced grid like builder field for Craft CMS that uses self created and existing fields.
 *
 * @link      https://www.wefuse.com
 * @copyright Copyright (c) 2021 WeFuse B.V
 */

namespace wefuse\builder\assetbundles\builder;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * BuilderAsset AssetBundle
 *
 * AssetBundle represents a collection of asset files, such as CSS, JS, images.
 *
 * Each asset bundle has a unique name that globally identifies it among all asset bundles used in an application.
 * The name is the [fully qualified class name](http://php.net/manual/en/language.namespaces.rules.php)
 * of the class representing it.
 *
 * An asset bundle can depend on other asset bundles. When registering an asset bundle
 * with a view, all its dependent asset bundles will be automatically registered.
 *
 * http://www.yiiframework.com/doc-2.0/guide-structure-assets.html
 *
 * @author    WeFuse B.V
 * @package   Builder
 * @since     0.0.1
 */
class BuilderAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@wefuse/builder/assetbundles/builder/dist";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/Builder.js',
        ];

        $this->css = [
            'css/Builder.css',
        ];

        parent::init();
    }
}
