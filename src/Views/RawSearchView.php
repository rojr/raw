<?php

namespace Raw\Views;

use SuperCMS\Controls\Search\SearchView;

class RawSearchView extends SearchView
{
    protected function createSubLeaves()
    {
        parent::createSubLeaves();

        $this->leaves['Query']->addCssClassNames('--full');
    }

    protected function printViewContent()
    {
        ?>

        <div class="row search-group">
            <div class="col-xs-10 search-input">
                <?= $this->leaves['Query']; ?>
                <div class="c-result-section">
                    <div class="c-suggested-items">
                    </div>
                    <div class="c-result-section-inner">
                        <ul class="search-response"></ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-2">
                <?= $this->leaves['Search']; ?>
            </div>
        </div>

        <?php
    }
}
