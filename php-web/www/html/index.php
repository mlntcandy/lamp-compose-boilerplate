<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello, World!</title>
    <style>
        :root {
            background-color: #333;
            color: #eee;
            text-align: center;
            font-family: sans-serif;
        }
        ul {
            text-align: left;
            max-width: 40em;
            margin: 1em auto;
        }
        a {
            color: #f8d;
        }
    </style>
</head>
<body>
    <h1>lamp-compose-boilerplate - It worked!</h1>
    <h2>PHP version: <?php echo phpversion() ?></h2>
    <p>You can edit this file at <code>./php-web/www/html/index.php</code>.</p>

    <h3>Working with the provided database</h3>
    <ul>
        <li>
            You can use <a href="http://localhost:8080/">phpMyAdmin</a> to manage the DB.
            The default credentials are below.
        </li>
        <li>
            The default credentials for the database are <code>root:toor</code> for the root user,
            but you don't have to provide these
            credentials when using <code>mysqli_connect()</code>, as root credentials are set as
            defaults in <code>./php-web/php.ini</code>.
            <br>
            <b>Example:</b>
            <?php 
                if (mysqli_connect($database = "") != false) {
                    echo "Connection successful!"; 
                } else {
                    echo "Error connecting to MySQL DB"; 
                }
            ?> (see <code>index.php</code>)
        </li>
    </ul>
</body>
</html>
