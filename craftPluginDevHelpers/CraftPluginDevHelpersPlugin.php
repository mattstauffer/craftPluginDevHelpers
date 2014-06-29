<?php

namespace Craft;

class CraftPluginDevHelpersPlugin extends BasePlugin
{
	public function getName()
	{
		 return Craft::t('CraftPluginDevHelpers');
	}

	public function getVersion()
	{
		return '0.1.0';
	}

	public function getDeveloper()
	{
		return 'ninetwelve (Matt Stauffer)';
	}

	public function getDeveloperUrl()
	{
		return 'http://ninetwelve.co/';
	}
}
