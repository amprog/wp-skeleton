echo -e "<?php\n$(curl -s https://api.wordpress.org/secret-key/1.1/salt/ 2>&1)" > wp-salt.php
chmod 664 wp-salt.php