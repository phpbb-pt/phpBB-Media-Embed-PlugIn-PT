<?php
/**
 *
 * phpBB Media Embed PlugIn extension for the phpBB Forum Software package.
 * Portuguese translation by phpbb-pt.com
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	// Settings
	'ACP_MEDIA_SETTINGS'				=> 'Configurações do Media Embed',
	'ACP_MEDIA_SETTINGS_EXPLAIN'		=> 'Aqui você pode configurar as configurações para o Media Embed PlugIn.',
	'ACP_MEDIA_DISPLAY_BBCODE'			=> 'Mostrar BBCode <samp>[MEDIA]</samp> na página de postagem',
	'ACP_MEDIA_DISPLAY_BBCODE_EXPLAIN'	=> 'Se não for permitido, o botão BBCode não será exibido, no entanto, os usuários ainda podem usar a tag <samp>[media]</samp> em suas postagens',
	'ACP_MEDIA_ALLOW_SIG'				=> 'Permitir em assinaturas de usuários',
	'ACP_MEDIA_ALLOW_SIG_EXPLAIN'		=> 'Permitir que assinaturas de usuários exiba conteúdo do Media Embed.',
	'ACP_MEDIA_PARSE_URLS'				=> 'Converter URLs simples',
	'ACP_MEDIA_PARSE_URLS_EXPLAIN'		=> 'Habilite isso para converter URLs simples (não incluídas em tags <samp> [mídia] </ samp> ou <samp> [url] </ samp> ) em conteúdo de mídia incorporado. Observe que a alteração dessa configuração afetará apenas as novas postagens, pois as mensagens existentes já foram analisadas.',
	'ACP_MEDIA_SITE_TITLE'				=> 'Site id: %s',
	'ACP_MEDIA_SITE_DISABLED'			=> 'Este site está em conflito com um BBCode existente: [%s]',

	// Manage sites
	'ACP_MEDIA_MANAGE'					=> 'Gerenciar sites do Media Embed',
	'ACP_MEDIA_MANAGE_EXPLAIN'			=> 'Aqui você pode gerenciar os sites que deseja permitir que o Media Embed PlugIn mostre o conteúdo.',
	'ACP_MEDIA_SITES_ERROR'				=> 'Não há sites de mídia para exibir.',
));
