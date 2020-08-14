<?php
/**
 *
 * Precise Similar Topics
 *
 * @copyright (c) 2014 Matt Friedman
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace vse\similartopics\tests\functional;

/**
 * @group functional
 */
class similar_topics_ucp_test extends similar_topics_base
{
	public function test_ucp_pages()
	{
		$this->add_lang_ext('vse/similartopics', 'similar_topics');

		$this->login();

		$crawler = self::request('GET', 'ucp.php?i=ucp_prefs&mode=view&sid=' . $this->sid);
		self::assertStringContainsString($this->lang('DISPLAY_SIMILAR_TOPICS'), $crawler->filter('#cp-main')->text());
	}
}
