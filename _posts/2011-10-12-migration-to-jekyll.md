---
layout: post
title: Migration to Jekyll
published: false
---

I have migrated to [Jekyll](http://jekyllrb.com/) from WordPress. Jekyll is a static html generator for blogging. The following is an explanation of why I changed platforms.

## Wordpress is Overkill 

For my purposes. I do not need tags and I am not ambitious. To be honest, this site will never host more than 50 posts, sorry to disappoint my fans out there \**crickets making noises in the dark*\*. 

WordPress is built to scale somewhat. This is why WordPress requires MySQL to store posts, tags, categories, pages, and users. Using MySQL allows WordPress to handle multiple users editing multiple posts simultaneously in addition to many hundreds of posts, tags, categories, etc.

Jekyll does not use databases. It stores content as plaintext.

## WordPress is Wasteful

Without a cache plugin, a typical request to a WordPress-enabled server generates a brand new html document. This includes querying the database for posts, stitching the templates together, and pasting the content into the final template. 

In one go, Jekyll takes a set of files and generates every page your blog site will ever need, including lists of posts, single posts, and pages. It does templating, too. The static html can be hosted virtually anywhere (even virtually).

## The Editor Sucks

I still do not understand the default WordPress editor. In raw mode (not wysiwyg) it will try to **clean** up my html. It does this by deleting some elements I have written in the editor, after I save, and without telling me. This behavior is erratic and not well-documented. This destroys my workflow. Blogging should be easy. Things should look the way they look. If funny things happen, an error should be thrown. The platform should not try to be sneaky. 

The editor makes writing certain types of posts difficult. Such as when I want to post code snippets. Or when I want to break my post up with headers. For example, the post source in Wordpress look like this..

{% highlight html %}
<h2>The Editor Sucks<h2>
<p>I still do not understand the default..
</p>
{% endhighlight %}

In Markdown, the source looks like this..

{% highlight html %}
## The Editor Sucks

I still do not understand the default..
{% endhighlight %}

In WordPress, I have to remember to keep track of xml tags. 

Jekyll is more flexible. It allows me to use whatever format I want: Markdown, Textile, or html. For example, I write most posts in Markdown, but the about page is written in html. Markdown is great when all you want is to write an entry, because Markdown's syntax is limited in such a way as to encourage simple content: paragraphs, lists, headers, emphasis, italics, etc. And html is great when you want something more complex, like the table I use in the **about me** page.



