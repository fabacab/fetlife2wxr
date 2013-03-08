<!DOCTYPE html>
<html lang="en">
<head>
<title>FetLife to WordPress eXtended RSS (WXR) Generator</title>
</head>
<body>
<h1>FetLife to WordPress eXtended RSS (WXR) Generator</h1>
<p>This tool creates a <a href="https://wordpress.org/">WordPress</a> export file from a <a href="https://en.wikipedia.org/wiki/FetLife">FetLife</a> user account. In other words, it exports your FetLife content in a format that makes other computers believe you were blogging with WordPress rather than FetLife. That's really useful because it offers an easy way to import your FetLife Writings and Pictures to any WordPress blog, such as a free one hosted at <a href="https://wordpress.com/">WordPress.com</a>. It also makes things easier if you want to import your content from FetLife to a different blogging platform, because you can easily <a href="http://wordpress2blogger.appspot.com/">convert a WordPress export file to another format, like a Blogger BlogSpot export file</a>, too.</p>
<form id="fetlife2wxr-form" method="post" action="<?php echo dirname($_SERVER['PHP_SELF']) . '/fetlife2wxr.php';?>">
    <fieldset><legend>Enter your FetLife connetion details and I&rsquo;ll make a WordPress import file for you.</legend>
        <p>
            <label for="fl_nickname">FetLife nickname</label>
            <input id="fl_nickname" name="fl_nickname" placeholder="Enter your FetLife nickname" />
        </p>
        <p>
            <label for="fl_password">FetLife password</label>
            <input type="password" id="fl_password" name="fl_password" placeholder="Enter your FetLife password" />
        </p>
    </fieldset>
    <fieldset><legend>If you need to use a proxy to connect to FetLife, enter its URL here. Otherwise, leave this blank to make a direct connection.</legend>
        <p>
            <label for="fl_proxyurl">Proxy URL</label>
            <input id="fl_proxyurl" name="fl_proxyurl" placeholder="http://proxy.example.com:8080" />
        </p>
    </fieldset>
    <input type="submit" name="submit" value="Connect to FetLife and make my WXR file" />
<script type="text/javascript">
// Be nice to the new users.
var theform = document.getElementById('fetlife2wxr-form');
theform.addEventListener('submit', function () {
    var btn = theform.querySelector('[type="submit"]');
    btn.setAttribute('disabled', 'disabled');
    btn.value = 'Working.... Please be patient!';
});
</script>
</form>
</body>
</html>
