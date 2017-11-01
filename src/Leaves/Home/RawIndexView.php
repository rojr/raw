<?php

namespace Raw\Leaves\Home;

use SuperCMS\Leaves\IndexView;
use SuperCMS\Models\Product\Product;

class RawIndexView extends IndexView
{
    protected function printViewContent()
    {
        print '<div class="c-product-container">';
        foreach (Product::find() as $product) {
            print $this->getProductHtml($product);
        }
        print '</div>';
    }

    public function getProductHtml(Product $product)
    {
        $variation = $product->getDefaultProductVariation();

        $imageHtml = '';
        if (isset($variation->Images[0])) {
            $imageHtml .= "<div class='c-product-image __first' style='background-image: url({$variation->Images[0]->ImagePath});'></div>";
        }

        if (isset($variation->Images[1])) {
            $imageHtml .= "<div class='c-product-image __second' style='background-image: url({$variation->Images[1]->ImagePath});'></div>";
        }

        return <<<HTML
<a href="{$product->getPublicUrl()}">
    <div class="c-product">
        <div class="c-product-images">
            {$imageHtml}
        </div>
    </div>        
</a>
        
HTML;
    }
}
