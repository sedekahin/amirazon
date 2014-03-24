=== Bulk Delete ===
Contributors: sudar  
Tags: post, comment, delete, bulk, mass, draft, revision, page  
Requires at least: 2.0  
Tested up to: 3.5.1  
Donate Link: http://sudarmuthu.com/if-you-wanna-thank-me  
Stable tag: 3.3  

Bulk delete posts from selected categories, tags, custom taxonomies or by post type like drafts, scheduled posts, revisions etc.

== Description ==

Bulk Delete is a WordPress Plugin which can be used to delete posts in bulk from selected categories, tags or custom taxonomies. This Plugin can also delete all drafts, post revisions, scheduled posts or pages.

### Features

#### Deleting posts

This Plugin supports the following bulk delete options for deleting posts

- Delete posts by category
- Delete posts by tags
- Delete posts by custom taxonomies
- Delete posts by url
- Delete all draft posts
- Delete all pending posts
- Delete all private posts
- Delete all scheduled posts

All the above options support the following filters

- Post date greater than X days
- Post date less than X days
- Only public posts
- Only private posts
- Restrict to first N posts
- Delete permanently or just move to trash
- Schedule deletion of posts automatically (Available as a [Pro addon](http://sudarmuthu.com/wordpress/bulk-delete/pro-addons))

#### Deleting pages

- Delete all published pages
- Delete all draft pages
- Delete all pending pages
- Delete all private pages
- Delete all scheduled pages

Like posts, all the above options support the following filters as well

- Post date greater than X days
- Post date less than X days
- Only public posts
- Only private posts
- Restrict to first N posts
- Delete permanently or just move to trash
- Schedule deletion of posts automatically (Available as a [Pro addon](http://sudarmuthu.com/wordpress/bulk-delete/pro-addons))

#### Deleting post revisions

- Delete all post revisions

#### Deleting by custom post types and by content

Coming soon :)


As you can see, the Plugin provide comprehensive options and filters to perform bulk deletion.

If you looking for just moving posts, instead of deleting, then use [Bulk Move Plugin][2] instead.

### Pro Addons

The following are the list of pro addons that are currently available for purchase to add more features to the Plugin.

- **Bulk Delete Schedule Categories** - Adds the ability to schedule auto delete of posts based on categories. [More details](http://sudarmuthu.com/wordpress/bulk-delete/pro-addons#bulk-delete-schedule-categories). [Buy now](http://sudarmuthu.com/out/buy-bulk-delete-category-addon)
- **Bulk Delete Schedule Tags** - Adds the ability to schedule auto delete of posts based on tags. [More details](http://sudarmuthu.com/wordpress/bulk-delete/pro-addons#bulk-delete-schedule-tags). [Buy now](http://sudarmuthu.com/out/buy-bulk-delete-tags-addon)
- **Bulk Delete Schedule Custom Taxonomies** - Adds the ability to schedule auto delete of posts based on custom taxonomies. [More details](http://sudarmuthu.com/wordpress/bulk-delete/pro-addons#bulk-delete-schedule-taxonomy). [Buy now](http://sudarmuthu.com/out/buy-bulk-delete-taxonomy-addon)
- **Bulk Delete Schedule Pages** - Adds the ability to schedule auto delete of pages. [More details](http://sudarmuthu.com/wordpress/bulk-delete/pro-addons#bulk-delete-schedule-pages). [Buy now](http://sudarmuthu.com/out/buy-bulk-delete-pages-addon)
- **Bulk Delete Schedule by Post Status** - Adds the ability to schedule auto delete of posts based on post status like drafts, pending posts, scheduled posts etc. [More details](http://sudarmuthu.com/wordpress/bulk-delete/pro-addons#bulk-delete-schedule-post-status). [Buy now](http://sudarmuthu.com/out/buy-bulk-delete-post-status-addon)

### Development

The development of the Plugin happens over at [github][6]. If you want to contribute to the Plugin, fork the [project at github][6] and send me a pull request.

If you are not familiar with either git or Github then refer to this [guide to see how fork and send pull request](http://sudarmuthu.com/blog/contributing-to-project-hosted-in-github).

If you are looking for ideas, then you can start with one of the following TODO items :)

### TODO

The following are the features that I am thinking of adding to the Plugin, when I get some free time. If you have any feature request or want to increase the priority of a particular feature, then let me know.

- Ability to choose the different sections that should be loaded
- Bulk Delete by custom post types
- Bulk Delete posts based on page views
- Bulk Delete sticky posts
- Bulk delete based on the presence/absence of a word
- Bulk Delete empty posts
- Bulk Delete posts based on users
- Bulk delete comments
- Delete images that are used by the posts that are being deleted
- <del>Change the message based on the option the user has chosen</del> - Added in v3.3
- <del>Expandable/collapsible taxonomies</del> - Added in v3.3

### Support

- If you have found a bug/issue or have a feature request, then post them in [github issues][7]
- If you have a question about usage or need help to troubleshoot, then post in WordPress forums or leave a comment in [Plugins's home page][1]
- If you like the Plugin, then kindly leave a review/feedback at [WordPress repo page][8].
- If you find this Plugin useful or and wanted to say thank you, then there are ways to [make me happy](http://sudarmuthu.com/if-you-wanna-thank-me) :) and I would really appreciate if you can do one of those.
- If anything else, then contact me in [twitter][3].

 [1]: http://sudarmuthu.com/wordpress/bulk-delete
 [2]: http://sudarmuthu.com/wordpress/bulk-move
 [3]: http://twitter.com/sudarmuthu
 [4]: http://sudarmuthu.com/blog
 [5]: http://sudarmuthu.com/wordpress
 [6]: https://github.com/sudar/bulk-delete
 [7]: https://github.com/sudar/bulk-delete/issues
 [8]: http://wordpress.org/extend/plugins/bulk-delete/

== Translation ==

The Plugin currently has translations for the following languages.

*   Dutch (Thanks Rene of [WordPress WPwebshop][14])
*   Brazilian Portuguese (Thanks Marcelo of [Criacao de Sites em Ribeirao Preto][15])
*   German (Thanks Jenny Beelens of [professionaltranslation.com][16])
*   Turkish Portuguese (Thanks [Bahadir Yildiz][17])
*   Spanish (Thanks Brian Flores of [InMotion Hosting][10])
*   Italian (Thanks Paolo Gabrielli)
*   Bulgarian (Thanks Nikolay Nikolov of [Skype Fan Blog][11])
*   Russian (Thanks Maxim Pesteev, [Weblancer.net profile][12])
*   Lithuanian (Thanks Vincent G from [http://www.host1free.com][13])
*   Hindi (Thanks Love Chandel)
*   Serbian (Thanks Diana)

The pot file is available with the Plugin. If you are willing to do translation for the Plugin, use the pot file to create the .po files for your language and let me know. I will add it to the Plugin after giving credit to you.

 [10]: http://www.inmotionhosting.com/
 [11]: http://en.chat4o.com/ 
 [12]: http://www.weblancer.net/users/Kirky/
 [13]: http://www.host1free.com
 [14]: http://wpwebshop.com/premium-wordpress-plugins/
 [15]: http://www.techload.com.br/
 [16]: http://www.professionaltranslation.com
 [17]: http://www.matematik.us

== Credits ==

Thanks <a href="http://www.martincapodici.com">Martin Capodici</a> for providing the code to implement the "delete specific page" feature.

Thanks to [Time picker addon](http://trentrichardson.com/examples/timepicker/) JavaScript library, which the Plugin uses.

== Installation ==

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.

== Frequently Asked Questions ==

= After installing the Plugin, I just see a blank page. =

This can happen if you have huge number of posts and your server is very underpowered. Check your PHP error log to see if there are any errors and correct them. The most common problems are script timeout or running out of memory. Change your PHP.ini file and increase the script timeout and/or amount of memory used by PHP process.

In particular try to change the following settings

*   `max_execution_time = 600` - Maximum execution time of each script, in seconds
*   `max_input_time = 30` - Maximum amount of time each script may spend parsing request data
*   `memory_limit = 256M` - Maximum amount of memory a script may consume

= How do I know what are the current values for these options configured in my server? =

Scroll down to the button of the Plugin page and you can see the current values of these options printed for your reference under the “Debug Information” heading

= Is it possible to restore the posts that I have deleted through the Plugin?  =

If you choose the option "Move to trash" then you can find them from trash. But if you choose "Delete permanently", then it is not possible to retrieve the posts. So be **very careful**.

= Is it possible to schedule deletion of posts =

The ability to schedule deletion of posts is available as a pro addon.

== Screenshots ==

1. The above screenshot shows how you can delete Posts by post status. You can choose between drafts, pending posts, scheduled posts, privates posts.

2. The above screenshot shows how you can delete posts by category. 

3. The above screenshot shows how you can delete posts by tags.

4. The above screenshot shows how you can delete posts by custom taxonomies.

5. The above screenshot shows how you can delete pages by post status. You can choose between draft pages, pending pages, scheduled pages and privates pages.

6. The above screenshot shows how you can schedule auto delete of posts. Note that this feature is available only when you buy [pro addons](http://sudarmuthu.com/wordpress/bulk-delete/pro-addons).

7. The above screenshot shows the scheduled auto delete jobs will be displayed. Note that this feature is available only when you buy [pro addons](http://sudarmuthu.com/wordpress/bulk-delete/pro-addons).

== Changelog ==

= 2013-05-11 - v3.3 - (Dev time: 10 hours) =
* Enhanced the deletion of posts using custom taxonomies
* Added the ability to schedule auto delete of taxonomies by date
* Cleaned up all messages that are shown to the user
* Added on screen help tab

= 2013-05-04 - v3.2 - (Dev time: 20 hours) =
* Added support for scheduling auto delete of pages
* Added support for scheduling auto delete of drafts
* Fixed issue in deleting post revisions
* Move post revisions to a separate section
* Better handling of post count to improve performance
* Moved pages to a separate section
* Added ability to delete pages in different status
* Added the option to schedule auto delete of tags by date
* Fixed a bug which was not allowing categories to be deleted based on date

= 2013-04-28 - v3.1 - (Dev time: 5 hours) =
* Added separate delete by sections for pages, drafts and urls
* Added the option to delete by date for drafts, revisions, future posts etc
* Added the option to delete by date for pages

= 2013-04-27 - v3.0 - (Dev time: 10 hours) =
* Added support for pro addons
* Added GUI to see cron jobs

= v2.2.2 (2012-12-20) (Dev time: 0.5 hour) =
* Removed unused wpdb->prepare() function calls

= v2.2.1 (2012-10-28) (Dev time: 0.5 hour) =
* Added Serbian translations

= v2.2 (2012-07-11) (Dev time: 0.5 hour) =
*   Added Hindi translations
*   Added checks to see if elements are present in the array before accessing them.

= v2.1 (2012-04-07) Dev Time:  1 hour =
*   Fixed CSS issues in IE
*   Added Lithuanian translations

= v2.0 (2012-04-01) Dev Time:  10 hours =
*   Fixed a major issue in how dates were handled.
*   Major UI revamp
*   Added debug information and support urls

= v1.9 (2012-03-16) =
*   Added support for deleting by permalink. Credit Martin Capodici
*   Fixed issues with translations
*   Added Russian translations

= v1.8 (2012-01-31) =
*   Added roles and capabilities for menu

= v1.7 (2012-01-12) =
*   Added Bulgarian translations

= v1.6 (2011-11-28) =
*   Added Italian translations

= v1.5 (2011-11-13) =
*   Added Spanish translations

= v1.4 (2011-08-25) =
*   Added Turkish translations

= v1.3 (2011-05-11) =
*   Added German translations

= v1.2 (2011-02-06) =
*   Added some optimization to handle huge number of posts in underpowered servers

= v1.1 (2011-01-22) =
*   Added support to delete posts by custom taxonomies
*   Added Dutch Translation
*   Added Brazilian Portuguese Translation

= v1.0 (2010-06-19) =
*   Proper handling of limits.

= v0.8 (2010-03-17) =
*   Added support for private posts.

= v0.7 (2010-02-21) =
*   Added an option to delete posts directly or send them to trash.
*   Added support for translation.

= v0.6 (2009-07-22) =
*   Added option to delete all scheduled posts.

= v0.5 (2009-07-21) =
*   Added option to delete all pending posts.

= v0.4 (2009-07-05) =
*   Added option to delete by date.

= v0.3 (2009-04-05) =
*   Prevented drafts from deleted when only posts are selected

= v0.2 (2009-02-03) =
*   Fixed issues with paging

= v0.1 (2009-02-02) =
*   First version

== Upgrade Notice ==

= 3.3 =
Fixed issues in deleting posts using custom taxonomy

= 3.2 =

Fixed bugs in handling post revisions and dates in categories. Added more options to delete pages.

= 3.1 =

Added the option to delete by date for pages, drafts, revisions, future posts etc

== Readme Generator ==

This Readme file was generated using <a href = 'http://sudarmuthu.com/wordpress/wp-readme'>wp-readme</a>, which generates readme files for WordPress Plugins.
