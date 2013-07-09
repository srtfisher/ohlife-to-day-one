ohlife-to-day-one
=================

Converting OhLife to Day One. Please backup your Day One archive before you attempt to use this script. Although it works for me, I don't guarantee anything!
We're assuming that you have Dropbox setup to sync your Day One. I mean, who wouldn't?

### Usage
0. Download the OhLife export at <https://ohlife.com/export>.
1. Download Command Line Interface found at <http://dayoneapp.com/tools/>
2. Clone this package or click [here](https://github.com/srtfisher/ohlife-to-day-one/archive/master.zip) to download the ZIP. Extract the zip.
3. Change the path of the `$file` variable inside of `oh_life_to_dayone.php` to the path/to/the/TXT file that you downloaded from OhLife. You should also change the Journal Path (where you sync your Day One) if your Dropbox is in a different folder.
4. Run `php ohlife_to_dayone.php`

You should be seeing success messages from Day One confirming the import of your posts.
