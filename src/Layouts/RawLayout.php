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
        <div class="c-video">
            <video src="/static/video/leaves.mp4" autoplay loop id="background-video"></video>
            <script type="text/javascript">
                var video = document.querySelector('#background-video');
                video.playbackRate = 0.25;
            </script>
        </div>
        <div class="c-page-body">
            <div class="c-page-body--inner">
                <h1 class="c-main-title">Rigas Alar Watches</h1>
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
        <?php
    }
}
