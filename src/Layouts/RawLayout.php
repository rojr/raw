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
            <div class="c-title-box">
                <div class="c-title--background">
                </div>
                <img class="c-title-box--logo" src="/static/images/logo/mainlogo.png">
            </div>
            <div class="c-page-body--inner">
                <div class="c-content">
        <?php
    }

    protected function printContent($content)
    {
        ?>
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
