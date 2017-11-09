<?php

namespace Raw\Views;

use Rhubarb\Crown\Settings\HtmlPageSettings;
use SuperCMS\Leaves\Site\Product\ProductItemView;
use SuperCMS\Models\Product\Product;

class RawProductItemView extends ProductItemView
{
    protected function printViewContent()
    {
        $product = $this->model->restModel;
        $settings = HtmlPageSettings::singleton();
        $settings->pageTitle = $product->Name . ' - ' . $this->model->selectedVariation->Name;

        $this->printBreadcrumbs();
        ?>
        <div class="row product-page">
            <div class="col-sm-9 c-product-image-section">
                <?php $this->printProductImages($product); ?>
                <div class="clearfix"></div>
            </div>
            <div class="col-sm-3">
                <div class="c-product-title">
                    <?php $this->printProductTitle($product); ?>
                </div>
                <div class="c-product-description">
                    <?php $this->printProductDescription($product); ?>
                </div>
                <div>
                    <?= $this->leaves['Variations'] ?>
                </div>
                <div class="c-product-add-to-cart">
                    <?php $this->printAddToCartButton($product) ?>
                </div>
            </div>
        </div>
        <?php
    }

    protected function printProductImages(Product $product)
    {
        $imagePath = $this->model->selectedVariation->getPrimaryImage();
        ?>
        <div class="c-main-product-image-outer">
            <a href="<?= $imagePath ?>" class="product-image-view"><img class="c-main-product-image" src="<?= $imagePath ?>"></a>
        </div>
        <?php
        print $this->getVariationThumbnails($this->model->selectedVariation);
    }

    public function getDeploymentPackage()
    {
        $package = parent::getDeploymentPackage();

        $package->resourcesToDeploy[] = __DIR__ . '/RawProductItemViewBridge.js';

        return $package;
    }

    protected function getViewBridgeName()
    {
        return 'RawProductItemViewBridge';
    }


}
