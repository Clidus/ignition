<?php  echo '<?xml version="1.0" encoding="' . $encoding . '"?>' . "\n"; ?>
<rss version="2.0"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
    xmlns:admin="http://webns.net/mvcb/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:content="http://purl.org/rss/1.0/modules/content/"
    xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title><?php echo $feed_name; ?></title>
        <link><?php echo $feed_url; ?></link>
        <description><?php echo $page_description; ?></description>
        <dc:language><?php echo $page_language; ?></dc:language>
        <dc:rights>Copyright <?php echo gmdate("Y", time()); ?></dc:rights>
        <atom:link href="<?php echo $feed_url ?>" rel="self" type="application/rss+xml" />
        <admin:generatorAgent rdf:resource="http://www.codeigniter.com/" />
<?php foreach($posts as $post): ?>
        <item>
            <title><?php echo xml_convert($post->Title); ?></title>
            <link><?php echo site_url('blog/' . $post->URL) ?></link>
            <guid><?php echo site_url('blog/' . $post->URL) ?></guid>
            <description><![CDATA[ <?php if($post->Image != null) echo "<img src='" . site_url($post->Image) . "' />" ?> <?php echo $post->Post ?> ]]></description>
            <pubDate><?php echo date_format(date_create($post->Date . " " . $post->Time), 'D, d M Y H:i:s O') ?></pubDate>
        </item>
<?php endforeach; ?>
    </channel>
</rss>