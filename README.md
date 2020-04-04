# Instagram Links Plugin for Wordpress

**Summary**
This plugin emulates online services like linktr.ee that allow Instagrammers to
create a list of frequently-updated links that are specifically relevant to
their IG followers.

## Installation
To install this plugin in your instance of Wordpress:

1. Copy the `instagram-links` folder into your /plugins/ folder
2. Install the Custom Fields plugin
3. Add a custom field to the Instagram Link post type with the name `url`.

## Usage
With the plugin installed and activated:

1. Create a new Page for your public-facing link list page, specifying the Page Template to be "Instagram Link Template"
2. Create new Instagram Link using the new Instagram Links option on the left in the Wordpress Admin

## Future Work

1. Add Images to public-facing link list template
2. Add `url` custom field to the post type in this plugin, rather than rely on the Custom Fields plugin

**Caveats**
Tested in Wordpress version 5.4. May fail in Wordpress < 4.7