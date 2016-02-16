# GovRight Corpus Widgets Helper

A plugin to help you to embed GovRight Corpus widgets such as list of discussions, articles, comments, etc, into your site.

##Quick start

1. Download `GovRight Corpus Widgets`.
2. Upload the `'wp-corpus-widgets'` directory to your `'/wp-content/plugins/'` directory, using your favorite method (ftp, sftp, scp, etc...)
3. Activate plugin from your Plugins page.
4. Go to `"GovRight" > "Corpus Widgets"` in the admin and check plugin page.
5. Insert the shortcode where you want to see the app.

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

## Customization
It is possible for you to customize the look and feel of the widgets by customizing their HTML and CSS. You can do this via the Wordpress Admin panel under the menu section titled *"GovRight" > "Corpus Widgets"* where is listed available variables and displayed default templates for HTML  nd CSS.

## Contributors

- <a href="https://github.com/ScarletSnail" target="_blank">Anzhela Petrovska</a>
- <a href="https://github.com/miletsky" target = "_blank">Victor Miletsky</a>
- <a href="https://github.com/doublemarked" target="_blank">Heath Morrison</a>

## License

wp-corpus-widgets uses the MIT license. See [LICENSE](https://github.com/GovRight/wp-corpus-widgets/blob/master/LICENSE) for more details. 
