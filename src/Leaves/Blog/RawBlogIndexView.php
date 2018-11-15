<?php

namespace Raw\Leaves\Blog;

use Rhubarb\Leaf\Views\View;
use SuperCMS\Models\Blog\BlogPost;

class RawBlogIndexView extends View
{
    protected function printViewContent()
    {
        print '<div class="c-blog-list">';

        foreach (BlogPost::find() as $blog) {
            $coverImage = $blog->CoverImage ? $blog->CoverImage->getImageUrl() : '';
            print <<<HTML
<div class="c-blog-post" style="flex-grow: {$blog->Weight}">
    <div class="c-blog-post--image" style="background-image: url('{$coverImage}');"></div>
    <div class="c-blog-post--title">
        {$blog->Title}    
    </div>
    <a class="c-blog-post--link" href="{$blog->getPostUrl()}"></a>
</div>
HTML;
        }

        print '</div>';
    }
}
