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
		return '0.2.0';
	}

	public function getDeveloper()
	{
		return 'Matt Stauffer';
	}

	public function getDeveloperUrl()
	{
		return 'http://tighten.co/';
	}
}

foreach (glob(__DIR__ . "/helpers/*.php") as $filename) {
    include_once $filename;
}
