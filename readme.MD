How to run the source

1. install Xampp or Wampp, etc... I'm using Xampp to run the source on my local
2. After you installed successfully, using Git to clone this source into htdocs folder (for Xampp)
3. Import DB on ```DB/eve-test.sql``` to phpmyadmin.
4. Config wp-config.php with variables same as your local
```
define( 'DB_NAME', 'eve-test' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
```
5. Well done!