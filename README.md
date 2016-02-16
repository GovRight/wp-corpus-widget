# GovRight Corpus Widgets Helper

A plugin to help you to embed GovRight Corpus widgets such as list of discussions, articles, comments, etc, into your site.

##Quick start

0. Install and activate the plugin
1. Go to "GovRight" > "Corpus Widgets" in the admin
2. Create your own or use default templates for layout and styles
3. Insert the shortcode where you want to see the app

## Available shortcodes
* `[corpus-discussion]` - widget provides information about discussion(law): title, description, statistics
* `[corpus-discussions]` - widget shows all discussions(laws) that belongs to specific user
* `[corpus-recent-comments]` - widget provides info about recent discussion(law) comments: discussion title, comment author, comment date, truncated comment text
* `[corpus-articles]` - widget provides info about sorted by certain criteria articles.

## Shortcode attributes
### General attributes
* `locale` - locale code like `en`, `ru`, etc, to set initial app locale
* `slug` - obligatory parameter, discussion(law) slug

### Specific `[corpus-articles]` attribures
1. `sort`- optional parameter, defines type of sorting. Default value `sort="top-commented"`. 
   Available sorting parameters:
    * `sort="top-voted"` - most up voted articles
    * `sort="top-commented"` - most commented articles
    * `sort="votesDown DESC"` - most down voted articles
    * `sort="comments ASC"` - less commented articles
    * `sort="votes DESC"`- biggest total number of votes (up votes + down votes)

2.`limit` - optional parameter, defines limit of displayed articles. Default value `limit="10"`

### Specific `[corpus-discussions]` attributes
`user` - obligatoy parameter, defines user id

## Examples
  * `[corpus-discussion slug="test-law-slug:default"]`
  * `[corpus-discussion locale="fr" slug="test-law-slug:default"]`
  * `[corpus-discussions locale="en" user="555a5028495918dc4500f77e"]`
  * `[corpus-recent-comments slug="test-law-slug:default"]`
  * `[corpus-articles slug="test-law-slug:default" sort="top-voted"]`
  * `[corpus-articles slug="test-law-slug:default" sort="votesDown DESC" limit="3"]`
