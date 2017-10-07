<?php
if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] === "OK")
{
	$account = unserialize(file_get_contents('../private/passwd'));
	$flag = false;
	$i = 0;
	foreach ($account as $elem)
	{
		if ($elem['login'] === $_POST['login'] && $elem['passwd'] === hash('whirlpool', $_POST['oldpw']))
		{
			$flag = true;
			$account[$i]['passwd'] = hash('whirlpool', $_POST['newpw']);
			file_put_contents('../private/passwd', serialize($account));
			echo "OK\n";
			}
			$i++;
		}
		if ($flag === false)
			echo "ERROR\n";
}
else
	echo "ERROR\n";
?>
