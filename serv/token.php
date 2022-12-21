
<?php
final public static string OAuthProvider::generateToken ( int $size [, bool $strong = false ] );

$p = new OAuthProvider();

$t = $p->generateToken(4);

echo strlen($t),  PHP_EOL;
echo bin2hex($t), PHP_EOL;

?>
