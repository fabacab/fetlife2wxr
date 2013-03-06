<!DOCTYPE html>
<html lang="en">
<head>
<title>FetLife to WordPress eXtended RSS (WXR) Generator</title>
</head>
<body>
<h1>FetLife to WordPress eXtended RSS (WXR) Generator</h1>
<p>This tool creates a single file from your FetLife Writings, which you can then use to <a href="https://support.wordpress.com/import/">import your content to any WordPress blog</a>, such as a free one from WordPress.com.</p>
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
</form>
</body>
</html>
