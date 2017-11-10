<?php

namespace Raw;

use Raw\Layouts\RawLayout;
use Raw\Leaves\Home\RawIndexView;
use Raw\Leaves\Style\Main;
use Raw\Views\RawBasketTableView;
use Raw\Views\RawProductItemView;
use Rhubarb\Crown\Application;
use Rhubarb\Crown\Layout\LayoutModule;
use Rhubarb\Crown\UrlHandlers\ClassMappedUrlHandler;
use Rhubarb\Custard\SassC\CompileScssModule;
use Rhubarb\Stem\Repositories\MySql\MySql;
use Rhubarb\Stem\Repositories\Repository;
use SuperCMS\Leaves\Index;
use SuperCMS\Leaves\IndexView;
use SuperCMS\Leaves\Site\Basket\BasketTableView;
use SuperCMS\Leaves\Site\Product\ProductItemView;
use SuperCMS\SuperCMS;

class RawApplication extends Application
{
    protected function initialise()
    {
        parent::initialise();

        parent::initialise();

        if (file_exists(APPLICATION_ROOT_DIR . "/settings/site.config.php")) {
            include_once(APPLICATION_ROOT_DIR . "/settings/site.config.php");
        }

        $this->developerMode = true;

        Repository::setDefaultRepositoryClassName(MySql::class);

        LayoutModule::setLayoutClassName(RawLayout::class);

        $register = [
            IndexView::class => RawIndexView::class,
            ProductItemView::class => RawProductItemView::class,

            BasketTableView::class => RawBasketTableView::class,
        ];

        foreach ($register as $from => $to) {
            $this->container()->registerClass($from, $to);
        }
    }

    protected function getModules()
    {
        return [
            new CompileScssModule(),
            new SuperCMS($this->container()),
        ];
    }
}
