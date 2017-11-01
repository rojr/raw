<?php

namespace Raw\Layouts;

use Rhubarb\Crown\Html\ResourceLoader;
use SuperCMS\Layouts\SuperCMSDefaultLayout;

class RawLayout extends SuperCMSDefaultLayout
{
    public function __construct()
    {
        parent::__construct();

        ResourceLoader::loadResource("/static/css/main.css");


    }

    protected function printTop()
    {
        ?>
        <h1 class="c-main-title">Raw.lv</h1>
        <?php
    }
}
