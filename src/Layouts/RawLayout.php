<?php

namespace Raw\Layouts;

use Rhubarb\Crown\Html\ResourceLoader;
use SuperCMS\Layouts\SuperCMSDefaultLayout;

class RawLayout extends SuperCMSDefaultLayout
{
    public function __construct()
    {
        parent::__construct();

        ResourceLoader::loadResource("/static/css/site.css");
    }

    protected function printPageHeading()
    {
    }

    protected function printHead()
    {
        parent::printHead();

        ?>
        <?php
    }

    protected function printLayout($content)
    {
        print '<!DOCTYPE html>';
        parent::printLayout($content);
    }

    protected function printTop()
    {
        ?>
        <div class="c-page-body">
            <div class="c-page-body--inner">
                <h1 class="c-main-title">Raw.lv</h1>

        <?php
    }

    protected function printContent($content)
    {
        ?>
                <?= $content ?>
            </div>
        </div>
        <?php
    }
}
