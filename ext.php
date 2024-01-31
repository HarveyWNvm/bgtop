<?php
//appunlockstoryplay // visit www.appunlockstoryplay.top/
namespace hrvy\bgtop;


class ext extends \phpbb\extension\base
{

	public function is_enableable()
	{
		$config = $this->container->get('config');
		return version_compare($config['version'], '3.3.11', '>=');
	}
}
