SALT=$(curl -s https://api.wordpress.org/secret-key/1.1/salt/ 2>&1)
echo -e "<?php\n$SALT" > wp-salt.php