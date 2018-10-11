<?php

namespace Raw\Leaves\Home;

use Rhubarb\Crown\Settings\HtmlPageSettings;
use SuperCMS\Leaves\IndexView;

class RawIndexView extends IndexView
{
    protected function createSubLeaves()
    {
        parent::createSubLeaves();

        $htmlSettings = HtmlPageSettings::singleton();
        $htmlSettings->pageTitle = 'Home';
    }

    protected function printViewContent()
    {
    }
}
