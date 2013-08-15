<?php
/**
*
* info_acp_similiar_topics [Serbian]
* 
* @package Precise Similar Topics II
* @version $Id$
* @copyright (c) 2010 Matt Friedman
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'PST_TITLE_ACP'		=> 'Slične teme',
	'PST_TITLE'			=> 'Precise Similar Topics II',
	'PST_LEGEND1'		=> 'Generalna podešavanja',
	'PST_ENABLE'		=> 'Uključi Similar Topics',
	'PST_LEGEND2'		=> 'Učitaj podešavanja',
	'PST_LIMIT'			=> 'Broj sličnih tema koje će biti prikazane',
	'PST_LIMIT_EXPLAIN'	=> 'Ovde možete odrediti koliko sličnih tema će biti prikazano. Podrazumevana vrednost je 5.',
	'PST_TIME'			=> 'Period pretrage',
	'PST_TIME_EXPLAIN'	=> 'Ova opcija vam omogućava da podesite koliki period pretrage će da koristi Similar Topics. Na primer ako podesite na 5 dana sistem će da prikazuje samo slične teme iz perioda od tih 5 dana. Podrazumevana vrednost je jedna godina.',	
	'PST_YEARS'			=> 'Godina',
	'PST_MONTHS'		=> 'Meseci',
	'PST_WEEKS'			=> 'Nedelja',
	'PST_DAYS'			=> 'Dana',
	'PST_CACHE'			=> 'Dužina keša za Similar Topics',
	'PST_CACHE_EXPLAIN'	=> 'Keširane slične teme će da nestanu nakon toliko vremena u sekunadma. Podesite vrednost na 0 ukoliko želite da isključite ovu opciju.',
	'PST_LEGEND3'		=> 'Podešavanja foruma',
	'PST_NOSHOW_LIST'	=> 'Ne prikazuj u',
	'PST_NOSHOW_TITLE'	=> 'Ne prikazuj slične teme u',
	'PST_IGNORE_SEARCH'	=> 'Ne pretražuj',
	'PST_IGNORE_TITLE'	=> 'Nemoj da pretražuješ slične teme u',
	'PST_ADVANCED'		=> 'Napredna podešavanja',
	'PST_ADVANCED_TITLE'=> 'Kliknite ukoliko želite da odredite napredna podešavanja za',
	'PST_ADVANCED_EXP'	=> 'Ovde možete odrediti specifične forume iz kojih želite da se pretražuju slične teme. Jedino slične teme koje budu pronađene u forumu će biti prikazane u <strong>%s</strong>.<br /><br />Nemojte da selektujete nijedan forum ukoliko želite da se prikazuju slične teme iz svih foruma u kojima je uključena opcija Similar Topics.',
	'PST_DESELECT_ALL'	=> 'Deselektuj sve',
	'PST_LEGEND4'		=> 'Opciona podešavanja',
	'PST_WORDS'			=> 'Specialne reči za ignorisanje',
	'PST_WORDS_EXPLAIN'	=> 'Dodajte specijalne reči koje su unikatne za vaš forum koje bi trebalo da budu ignorisane kada se pretražuju slične teme. (Napomena: reči koje se inače smatraju za ustaljene će ionako biti ignorisane prilikom pretrage.) Reči razdvojte razmakom. Case insensitive. Maksimalno 255 karaktera.',
	'PST_SAVED'			=> 'Podešavanja za Similar Topics su ažurirana',
	'PST_FORUM_INFO'	=> '"Ne prikazuj u": Neće prikazati slične teme u izabranim forumima.<br />"Ne pretražuj u": Neće pretraživati slične teme u izabranim forumima.',
	'PST_WARNING'		=> 'Similar Topics ne funkcioniše sa vašim forumom. Similar Topics zahteva MySQL 4 ili MySQL 5 bazu podataka.',
	'PST_LOG_MSG'		=> '<strong>Izmenjena podešavanja sa Similar Topics</strong>',

	//For UMIL Installer
	'PST_FULLTEXT_ADD'	=> 'Dodaje FULLTEXT index: topic_title',
	'PST_FULLTEXT_DROP'	=> 'Dropped FULLTEXT index: topic_title',
	'PST_FULLTEXT_PASS'	=> 'Vaša baza podataka je kompatibilna sa ovim MOD-om. Uživajte :-)',
	'PST_FULLTEXT_FAIL'	=> '<span class="error"><strong>UPOZORENJE:</strong> Nebi trebalo da instalirate ovaj MOD! Vaša baza podataka ne podržava FULLTEXT indekse. Ovo najverovatnije znači da vaša tabela sa temama ne koristi MyISAM endžin za pohranjivanje podataka koji je neophodan za funkcionisanje ovog MOD-a. <a href="http://www.phpbb.com/customise/db/mod/precise_similar_topics_ii/faq/f_737" onclick="window.open(this.href);return false;">Više informacija</a>.</span>',
	'PST_DATABASE_FAIL'	=> '<span class="error"><strong>UPOZORENJE:</strong> Nebi trebalo da instalirate ovaj MOD! Vaša baza podataka nije MySQL što je neophodno za funkcionisanje ovog MOD-a.</span>',
));

// For permissions
$lang = array_merge($lang, array(
	'acl_u_similar_topics'	=> array('lang' => 'Možete videti slične teme', 'cat' => 'misc'),
));

?>