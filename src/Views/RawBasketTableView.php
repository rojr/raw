<?php

namespace Raw\Views;

use SuperCMS\Leaves\Site\Basket\BasketTableView;
use SuperCMS\Models\Shopping\BasketItem;

class RawBasketTableView extends BasketTableView
{
    /**
     * @param BasketItem $basketProduct
     *
     * @return string
     */
    public function getRowHTML($basketProduct)
    {
        $variation = $basketProduct->ProductVariation;
        $imageHtml = '';
        if (isset($variation->Images[0])) {
            $imageHtml .= "<div class='c-product-image __first' style='background-image: url({$variation->Images[0]->ImagePath});'></div>";
        }

        if (isset($variation->Images[1])) {
            $imageHtml .= "<div class='c-product-image __second' style='background-image: url({$variation->Images[1]->ImagePath});'></div>";
        }

        return <<<HTML
<div class="c-search-product--row row marginless">
    <a href="#" class="c-remove-button js-remove-product" data-id="{$basketProduct->UniqueIdentifier}"><i class="fa fa-times-circle fa-3" aria-hidden="true"></i></a>
    <div class="col-sm-3">
        <div class="c-product-images">
            {$imageHtml}
        </div>
    </div>
    <div class="col-sm-6 c-product-description">
        <p class="product-title">{$variation->Name}</p>
        <p class="c-description">{$variation->Product->Description}</p>
    </div>
    <div class="col-sm-3 product-price">
        <div class="pull-right">
            <span class="c-product-action-element">
                <label for="quantity">Quantity:&nbsp;</label><input data-id="{$basketProduct->UniqueIdentifier}" id="quantity" name="quantity" size="5" type="text" value="{$basketProduct->Quantity}" class="js-quantitypicker c-input-center"><br>
            </span>
            <span class="c-product-action-element">
                <p class="product-cost">{$basketProduct->getTotalCost()}</p>
            </span>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
HTML;
    }
}
