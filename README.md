# shaarli-plugin-hashover-comments
Embedd php based commenting engine in your Shaarli permalinks

**Alpha version, use at your own risk!**

Include Hashover-Next (https://github.com/jacobwb/hashover-next) comments into your Shaarli page (permalink view). Based on Shaarli Isso plugin, but can run on any server with php, not like Isso which requires Python. Also supports Markdown, which is nice :)

Because of a php7.1 related bug in Hashover-Next use my quick fork instead ( https://github.com/poVoq/hashover-next ) if your server uses php 7.1 or newer. Thanks @leem32 for writing this fix. See details here: https://github.com/jacobwb/hashover-next/issues/186#issuecomment-337907829

**Install:** 
1. Downoad and install Hashover-Next on your server. Configure by editing the /scripts/settings.php file.
2. Download this plugin and place the "hashover2" folder into your Shaarli "plugins" directory. 
3. Enable via the Shaarli tools menu & set the URL where you installed Hashover-Next.

**Known issues:**
- "Likes" are not working on my server (can be disabled in Hashover-Next's /scripts/settings.php though)
- Hashover-Next CSS theme needs to fit better to the Shaarli theme (pull-requests welcome)
- The original Isso plugin has some better way to loading .css files I guess?
- Email notifications on replies not working?
- No idea how to change Avatars :(

Tested with Shaarli 0.9.4 and Shaarli Material theme
