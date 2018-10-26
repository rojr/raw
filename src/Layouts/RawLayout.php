<?php

namespace Raw\Layouts;

use Rhubarb\Crown\Html\ResourceLoader;
use SuperCMS\Layouts\SuperCMSDefaultLayout;

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
        <link rel="icon" type="image/png" sizes="192x192" href="/static/favicon/android-icon-192x192.png">
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
        parent::printLayout($content);
    }

    protected function printTop()
    {
        ?>
        <div class="c-page-body">
        <div class="c-nav">
            <div class="c-global-title">
                <p>raw</p>
            </div>
            <div class="c-nav--items">
                <ul>
                    <?php
                    $navs = [
                        'Shop' => '/',
                        'Blog' => 'blog.raw.lv',
                        'Info' => '/info/',
                    ];

                    foreach ($navs as $name => $href) {
                        print "<li><a href='$href'>$name</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <?php
    }

    protected function printContent($content)
    {
        print $content;
    }

    protected function printTail()
    {
        ?>
        </div>
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/solid.js"
            integrity="sha384-P4tSluxIpPk9wNy8WSD8wJDvA8YZIkC6AQ+BfAFLXcUZIPQGu4Ifv4Kqq+i2XzrM"
            crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/fontawesome.js"
            integrity="sha384-2IUdwouOFWauLdwTuAyHeMMRFfeyy4vqYNjodih+28v2ReC+8j+sLF9cK339k5hY"
            crossorigin="anonymous"></script>
        <?php
    }
}
