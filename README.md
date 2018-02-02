# shaarli-plugin-hashover-comments
Embedd php based commenting engine in your Shaarli permalinks

**Alpha version, use at your own risk!**

Include Hashover-Next (https://github.com/jacobwb/hashover-next) comments into your Shaarli page (permalink view). Based on Shaarli Isso plugin, but can run on any server with php, not like Isso which requires Python. Also supports Markdown, which is nice :)

Because of a php7.1 related bug in Hashover-Next use my quick fork instead ( https://github.com/poVoq/hashover-next ) if your server uses php 7.1 or newer. Thanks @leem32 for writing this fix. See details here: https://github.com/jacobwb/hashover-next/issues/186#issuecomment-337907829

**Install:** 
1. Download and install Hashover-Next on your server; Configure by editing the /scripts/settings.php file.
2. Download this plugin and place the "hashover2" folder into your Shaarli "plugins" directory. 
3. Enable via the Shaarli tools menu & set the URL where you installed Hashover-Next.

**Known issues:**
- "Likes" are not working unless you use apply the fix found in my Hashover-Next fork.
- With the default theme comments fill the full width of the browser window (looks much nicer with the material theme)
- No obvious indication in the main list view that you can comment in the permalink view
-- Make an optional second plugin that should make a link, probably also works with Isso? Based on Archive.org plugin
- Hashover-Next CSS theme needs to fit better to the Shaarli theme (pull-requests welcome)
- The original Isso plugin has some better way to loading .css files I guess?
- Email notifications on replies not working?
- No idea how to change Avatars :(
- Users can't seem to delete their own posts through the edit menu (permissions error)
- Admin users can delete posts (successfull message comes)... but it seems to take a few reloads to register

Tested with Shaarli 0.9.4 and Shaarli Material theme

Commentlink icon image from Google Material Icons under Apache License Version 2.0
