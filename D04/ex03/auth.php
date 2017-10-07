<?php
function auth($login, $passwd)
{
	$account = unserialize(file_get_contents('../private/passwd'));
	foreach ($account as $elem)
	{
		if ($elem['login'] === $login && $elem['passwd'] === hash('whirlpool', $passwd))
			return (TRUE);
	}
	return (FALSE);
}
?>
