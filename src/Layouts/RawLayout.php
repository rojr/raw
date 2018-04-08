<?php

namespace Raw\Layouts;

use Rhubarb\Crown\Html\ResourceLoader;
use Rhubarb\Crown\Settings\HtmlPageSettings;
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
        return 'Riga Alar Wear | ' . parent::getTitle();
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
