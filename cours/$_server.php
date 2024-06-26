<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <h1>Information de la globale $_SERVER </h1>

        <p>My name is <?php echo "John Doe"; ?></p>
        <p>Today is <?php echo date('l jS \of F Y h:i:s A'); ?></p>
        <p>My IP address is <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
        <p>My browser is <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
        <p>My server name is <?php echo $_SERVER['SERVER_NAME']; ?></p>
        <p>My server IP address is <?php echo $_SERVER['SERVER_ADDR']; ?></p>
        <p>My server software is <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
        <p>My server protocol is <?php echo $_SERVER['SERVER_PROTOCOL']; ?></p>
        <p>My server port is <?php echo $_SERVER['SERVER_PORT']; ?></p>
        <p>My server method is <?php echo $_SERVER['REQUEST_METHOD']; ?></p>
        <p>My server query string is <?php echo $_SERVER['QUERY_STRING']; ?></p>
        <p>My server request URI is <?php echo $_SERVER['REQUEST_URI']; ?></p>
        <p>My server script name is <?php echo $_SERVER['SCRIPT_NAME']; ?></p>
        <p>My server request time is <?php echo $_SERVER['REQUEST_TIME']; ?></p>
        <p>My server document root is <?php echo $_SERVER['DOCUMENT_ROOT']; ?></p>
        <p>My server HTTP accept is <?php echo $_SERVER['HTTP_ACCEPT']; ?></p>
        <p>My server HTTP accept encoding is <?php echo $_SERVER['HTTP_ACCEPT_ENCODING']; ?></p>
        <p>My server HTTP accept language is <?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?></p>
        <p>My server HTTP connection is <?php echo $_SERVER['HTTP_CONNECTION']; ?></p>
        <p>My server HTTP host is <?php echo $_SERVER['HTTP_HOST']; ?></p>
        <p>My server HTTP referer is <?php echo $_SERVER['HTTP_REFERER']; ?></p>
        <p>My server HTTP user agent is <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
        <p>My server HTTPS is <?php echo $_SERVER['HTTPS']; ?></p>
        <p>My server
            
    
</body>
</html>