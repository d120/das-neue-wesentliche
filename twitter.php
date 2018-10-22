<?php
/**
* Filtert Twitter-RSS-Feed für Weitergabe an RSS Graffiti (auf Facebook).
* Es werden nur Items weitergegeben, die bestimmte Keywords *nicht* enthalten.
* @author benedikt
*/

// Einschalten zum Debuggen
/*error_reporting(E_ALL);
ini_set("display_errors", 1);*/

/** RSS-Feed zum Filtern */
$feed = 'https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=d120de';

/** Keywords die rausgefiltert werden */
$keywords = array('#dw');

function has_keyword($haystack, $wordlist)
{
  foreach ($wordlist as $w)
    if (stripos($haystack, $w) !== false)
      return true;
  return false;
}

$rss = simplexml_load_file($feed);
$news = array();
foreach ($rss->channel->item as $i)
{
  if (!has_keyword($i->title, $keywords))
  {
    $news[] = array(
        "title" => mb_substr($i->title, 8),
        //"description" => $i->description,
        "link" => $i->link,
        "pubdate" => $i->pubDate
    );
  }
}

header('Content-Type: application/rss+xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';?>

<rss version="2.0">
<channel>
<title>Twitter / d120de</title>
<description>Twitter updates from FS Informatik TUD / d120de.</description>
<link>https://twitter.com/d120de</link>
<?php

foreach ($news as $n) {

?>  <item>
    <title><?php echo $n['title']; ?></title>
    <description><?php echo $n['title']; ?></description>
    <pubDate><?php echo $n['pubdate']; ?></pubDate>
    <link><?php echo $n['link']; ?></link>
  </item>
<?php

}

?></channel>
</rss>
