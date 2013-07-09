<?php
/**
 * Converting a OhLife Export to DayOne
 *
 * Requires dayone CLI to be installed <http://dayoneapp.com/tools/>
 */

// Full Path to the file
$file = __DIR__.'/ohlife.txt';

// Path to the Dropbox sync folder
$journalPath = '~/Dropbox/Apps/Day One/Journal.dayone';

// Time for the entries
$time = '8:00PM';

$read = file($file);
$currentContents = $currentDate = '';

foreach ($read as $line_num => $line) :
    if (preg_match('/(\d{4}-\d{2}-\d{2})/', $line))
    {
        if ($currentContents !== '')
        {
            $currentContents = trim($currentContents);

            // Add the old entry
            $command = sprintf('echo "%s" | dayone -d="%s" -j="%s" new', $currentContents, $currentDate, $journalPath);
            $execute = shell_exec ($command);
            var_dump($execute);
        }

        // Setup the entry
        $currentContents = '';
        $currentDate = trim($line) .' '.$time;
    }
    else
    {
        $currentContents .= addslashes($line);
    }
endforeach;
