<?php
function auth($login, $passwd)
{
	$hash = hash('ripemd160', $passwd);
	$accounts = unserialize(file_get_contents("./db/passwd"));
	foreach ($accounts as $account)
	{
		if ($login === $account['login'] && $hash === $account['passwd'])
			return (1);
	}
	return (0);
}
?>
