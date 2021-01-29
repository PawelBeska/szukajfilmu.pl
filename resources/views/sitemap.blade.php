<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url><loc>http://szukajfilmu.pl/</loc><lastmod>2019-04-05T13:57:13+00:00</lastmod><priority>1.00</priority></url>
    <url><loc>http://szukajfilmu.pl/help</loc><lastmod>2019-04-05T13:57:13+00:00</lastmod><priority>0.80</priority></url>
    <url><loc>http://szukajfilmu.pl/contact</loc><lastmod>2019-04-05T13:57:13+00:00</lastmod><priority>0.80</priority></url>
    <url><loc>http://szukajfilmu.pl/login</loc><lastmod>2019-04-05T13:57:13+00:00</lastmod><priority>0.80</priority></url>
    <url><loc>http://szukajfilmu.pl/register</loc><lastmod>2019-04-05T13:57:13+00:00</lastmod><priority>0.80</priority></url>
    @foreach($files as $file)
        <url>
            <loc>http://szukajfilmu.pl/file/{{urlencode(str_replace(' ','_',$file->name)).'/'.$file->token}}</loc>
            <lastmod>{{date("Y-m-d\TH:i:sP")}}</lastmod>
            <changefreq>never</changefreq>
            <priority>0.5</priority>
        </url>
    @endforeach
</urlset>