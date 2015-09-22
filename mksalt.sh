echo -e "<?php\n$(curl -s https://api.wordpress.org/secret-key/1.1/salt/ 2>&1)" > wp-salt.php
chmod 440 wp-salt.php
sudo chown nginx.nginx wp-salt.php