<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'rvisual');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'debian');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'mysql');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U$M&#b} 0>UJVtS0@@Abnos4b|,5eB]ay-39S}E`!b29QO]%GNKt*c>|AJL?@ F<');
define('SECURE_AUTH_KEY',  'v#[RM+5;1ioJFAfrhoFw4OBV;9HQzYjiU`*]lXn.-GD[Yb@_j?:efJ:`0@X:,rT|');
define('LOGGED_IN_KEY',    '|+]7#PBu!4qmnbAOw=PTvb@4c:G/T)pg+;.~r= b),mZ~B5oy63 5uPf_M2MV| /');
define('NONCE_KEY',        '#N6kNiGo$5>U=eIg=hs}^}-JJ/rW>@H,M5+Pl]z|>^+Da|YFtD]+f}FEI*j}*R5K');
define('AUTH_SALT',        ',OCOJek,|4]EOh-pTw0;EBbz/z!Res|Kvn/wWmN /rTMJY~)tqygS])H Q-%-,db');
define('SECURE_AUTH_SALT', 'mx]|~33Eh)1#h&>.WT+Elohz[3;-idz_NR(L~3fF3^3EBRsqdszJHI&+|mR3]Z5|');
define('LOGGED_IN_SALT',   'YQ O_|6-9-^V=ne.+} h9>3Vm+x0Z_S0)AQ#+t_8RwE|ItKoG&^`3/F$MR!PYo|B');
define('NONCE_SALT',       '[{[.f$[H0+&0JM,Bc0HL-]@SQ4V/7~xEq{=e$+)SNw9;1`}YG-[Q#yo1VKK_/Y$u');


/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
