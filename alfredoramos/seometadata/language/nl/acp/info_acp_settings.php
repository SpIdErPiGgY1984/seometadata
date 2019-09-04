<?php

/**
 * SEO Metadata extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2018 Alfredo Ramos
 * @license GNU GPL-2.0-only
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_SEO_METADATA' => 'SEO Metadata',
	'ACP_SEO_METADATA_EXPLAIN' => 'Wijzigingen in de volgende waarden worden alleen toegepast op nieuwe onderwerpen. Als u wilt dat deze ook op oude onderwerpen wordt toegepast, moet u de cache opschonen.',

	'ACP_SEO_METADATA_META_DESCRIPTION' => 'Beschrijving inschakelen',
	'ACP_SEO_METADATA_META_DESCRIPTION_EXPLAIN' => 'Beschrijving metatag.',

	'ACP_SEO_METADATA_DESC_LENGTH' => 'Beschrijving lengte',
	'ACP_SEO_METADATA_DESC_LENGTH_EXPLAIN' => 'Maximum lengte voor een beschrijving die wordt gebruikt in metatags, zoals <samp>og:description</samp>. Het heeft een vaste limiet van <samp>og:description</samp> karakters.',
	'ACP_SEO_METADATA_DESC_STRATEGY' => 'Beschrijving strategie',
	'ACP_SEO_METADATA_DESC_STRATEGY_EXPLAIN' => '<samp>Knippen</samp> knipt de beschrijving op de exacte positie als deze de maximale lengte overschrijdt.<br><samp>Beletselteken</samp> voegt een beletselteken toe (<code>…</code>) aan het einde van de beschrijving als deze de maximale lengte overschrijdt.<br><samp>Breek woorden</samp> past zoveel mogelijk woorden toe zonder de maximale lengte te overschrijden.',
	'ACP_SEO_METADATA_DESC_CUT' => 'Knippen',
	'ACP_SEO_METADATA_DESC_ELLIPSIS' => 'Beletselteken',
	'ACP_SEO_METADATA_DESC_BREAK_WORDS' => 'Breek woorden',

	'ACP_SEO_METADATA_IMAGE_STRATEGY' => 'Beeldstrategie',
	'ACP_SEO_METADATA_IMAGE_STRATEGY_EXPLAIN' => '<samp>Eerst gevonden</samp> selecteert de eerste gevonden afbeelding die kan worden gebruikt in de berichttekst.<br><samp>Afbeelding afmetingen</samp> selecteert de afbeelding met de grootste afmetingen (breedte, hoogte) binnen het bericht.',
	'ACP_SEO_METADATA_IMAGE_FIRST' => 'Eerst gevonden',
	'ACP_SEO_METADATA_IMAGE_DIMENSIONS' => 'Afbeelding afmetingen',

	'ACP_SEO_METADATA_DEFAULT_IMAGE' => 'Standaard afbeelding',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_EXPLAIN' => 'Standaard afbeelding URL voor metatags zoals <samp>og:image</samp>. Het wordt alleen gebruikt als er geen afbeelding kan worden gevonden op de huidige pagina. Het moet groter zijn dan <samp>200</samp>x<samp>200</samp>px en relatief ten opzichte van <samp>%s</samp>',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_INVALID' => 'De waarde die is opgegeven als standaardafbeelding <samp>%1$s</samp> heeft een lege URL gegenereerd.<br>Het kan zijn dat een niet bestaande afbeelding is opgegeven of dat de bestandsnaam buiten de <samp>/images/</samp> pad zit.',	

	'ACP_SEO_METADATA_DEFAULT_IMAGE_DIMENSIONS' => 'Standaard afbeelding dimensies',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_DIMENSIONS_EXPLAIN' => 'Breedte x hoogte van standaardafbeelding. Zet beide op <samp>0</samp> om te proberen de afbeelding dimensies te raden.',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_WIDTH' => 'Standaard afbeeldingsbreedte',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_HEIGHT' => 'Standaard afbeeldingshoogte',

	'ACP_SEO_METADATA_DEFAULT_IMAGE_TYPE' => 'Standaard afbeeldingstype',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_TYPE_EXPLAIN' => 'Het MIME type van de standaardafbeelding. Laat het veld leeg om te proberen het type te raden als u deze informatie niet kent of niet zeker bent.',

	'ACP_SEO_METADATA_LOCAL_IMAGES' => 'Locale afbeeldingen',
	'ACP_SEO_METADATA_LOCAL_IMAGES_EXPLAIN' => 'Haal alleen afbeeldingen op uit uw domein (<samp>%s</samp>).',

	'ACP_SEO_METADATA_ATTACHMENTS' => 'Inclusief bijlagen',
	'ACP_SEO_METADATA_ATTACHMENTS_EXPLAIN' => 'Voeg ook afbeeldingen van bijlagen toe. Ze worden gekozen in dezelfde volgorde waarin ze zijn geüpload.',

	'ACP_SEO_METADATA_PREFER_ATTACHMENTS' => 'Geef de voorkeur aan bijlagen',
	'ACP_SEO_METADATA_PREFER_ATTACHMENTS_EXPLAIN' => 'Bijlage afbeeldingen hebben een hogere prioriteit dan degene die uit de post zijn gehaald.',

	'ACP_SEO_METADATA_DATA_EXPLAIN' => 'Metadata worden dynamisch gegenereerd op basis van uw forum gegevens.',

	'ACP_SEO_METADATA_GLOBAL_SETTINGS' => 'Algemene instellingen',

	'ACP_SEO_METADATA_OPEN_GRAPH_SETTINGS' => 'Open Graph instellingen',
	'ACP_SEO_METADATA_OPEN_GRAPH' => 'Open Graph inschakelen',

	'ACP_SEO_METADATA_FACEBOOK_APPLICATION' => 'Facebook applicatie ID',
	'ACP_SEO_METADATA_FACEBOOK_APPLICATION_EXPLAIN' => 'Identificatie van uw Facebook applicatie.',
	'ACP_SEO_METADATA_FACEBOOK_PUBLISHER' => 'Facebook uitgever',
	'ACP_SEO_METADATA_FACEBOOK_PUBLISHER_EXPLAIN' => 'De URL van uw Facebook pagina.',

	'ACP_SEO_METADATA_TWITTER_CARD_SETTINGS' => 'Twitter Cards instellingen',
	'ACP_SEO_METADATA_TWITTER_CARDS' => 'Schakel Twitter Cards in',
	'ACP_SEO_METADATA_TWITTER_PUBLISHER' => 'Twitter uitgever',
	'ACP_SEO_METADATA_TWITTER_PUBLISHER_EXPLAIN' => 'De gebruikersnaam van uw website Twitter account.',

	'ACP_SEO_METADATA_JSON_LD_SETTINGS' => 'JSON-LD instellingen',
	'ACP_SEO_METADATA_JSON_LD' => 'JSON LD inschakelen',

	'ACP_SEO_METADATA_VALIDATE_INVALID_FIELDS' => 'Ongeldige waarden voor velden: %s',

	'LOG_SEO_METADATA_DATA' => '<strong>SEO Metadata gegevens gewijzigd</strong><br>» %s'
]);
