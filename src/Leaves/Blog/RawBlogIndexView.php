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
            print <<<HTML
<div class="c-blog-post" style="background-image: url('https://images.pexels.com/photos/814499/pexels-photo-814499.jpeg?auto=compress&cs=tinysrgb&h=350'); flex-grow: {$blog->Weight}">
    <div class="c-blog-post--title">
        {$blog->Title}    
    </div>
    <a class="c-blog-post--link" href="//todo"></a>
</div>
HTML;
        }

        print '</div>';
    }
}
