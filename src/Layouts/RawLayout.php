<?php

namespace Raw\Layouts;

use Rhubarb\Crown\Html\ResourceLoader;
use Rhubarb\Crown\LoginProviders\Exceptions\NotLoggedInException;
use SuperCMS\Layouts\SuperCMSDefaultLayout;
use SuperCMS\LoginProviders\SCmsLoginProvider;
use SuperCMS\Models\Shopping\Basket;

use Rhubarb\Crown\Layout\LayoutModule;

class RawLayout extends SuperCMSDefaultLayout
{
    public function __construct()
    {
        ResourceLoader::loadResource("/files/js/jquery.js");
        ResourceLoader::loadResource("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js");
        ResourceLoader::loadResource("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
        ResourceLoader::loadResource("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
        ResourceLoader::loadResource("/files/css/general.css");
        ResourceLoader::loadResource("/static/css/site.css");
    }

    protected function printHead()
    {
        parent::printHead();

        ?>
        <link rel="apple-touch-icon" sizes="57x57" href="/static/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/static/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/static/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/static/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/static/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/static/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/static/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/static/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/static/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/static/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/static/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/static/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/static/favicon/favicon-16x16.png">
        <link rel="manifest" href="/static/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <?php
    }

    protected function getTitle()
    {
        return parent::getTitle();
    }

    protected function printLayout($content)
    {
        print '<!DOCTYPE html>';
        ?>
        <html>
        <head>
            <title><?= $this->getTitle(); ?></title>
            <?= ResourceLoader::getResourceInjectionHtml(); ?>

            <?= LayoutModule::getHeadItemsAsHtml(); ?>

            <?php $this->printHead(); ?>
        </head>
        <body>

        <div class="c-page-body">
            <h1 class="hold-tight-please"><?php foreach(str_split('Hold tight...') as $l) { print "<span class='tight'>{$l}</span>"; } ?></h1>
            <script type="text/javascript">
                let dots = document.querySelectorAll('.tight');

                setInterval(function() {
                    for (let d = 0, end = dots.length; d < end; d++) {
                        dots[d].style.color = '#'+Math.floor(Math.random()*16777215).toString(16);
                    }
                }, 1200)
            </script>
        </div>
        </body>
        </html>
        <?php
    }

    protected function printContent($content)
    {
        //<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/solid.js" integrity="sha384-P4tSluxIpPk9wNy8WSD8wJDvA8YZIkC6AQ+BfAFLXcUZIPQGu4Ifv4Kqq+i2XzrM" crossorigin="anonymous"></script>
        //<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/fontawesome.js" integrity="sha384-2IUdwouOFWauLdwTuAyHeMMRFfeyy4vqYNjodih+28v2ReC+8j+sLF9cK339k5hY" crossorigin="anonymous"></script>

    }
}
