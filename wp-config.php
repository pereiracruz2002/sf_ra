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
define( 'DB_NAME', 'sf' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'senha' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '&AL^H$8*u_ynV,9VISr  qtqMH>y#nIC#Lxtq&L=b]yCi3!jYm~a6lYy~,E*Cf&K' );
define( 'SECURE_AUTH_KEY',  'K/f]`;nYJ{`&pZGaYIE#)`R3gFG<6NY=|*/>e~:^z_UWD+4iPeTIxe=c--2%%F+b' );
define( 'LOGGED_IN_KEY',    '0BpuW;tIxZaD$xli0[<Cu=m@qRrQl). wWjBCaY!!K t7p7=X<A;w>o{W]ar[dTf' );
define( 'NONCE_KEY',        '&-tlJJe BI><=pG2I.7h2%.0zU&[P^<[s+A^J=a5LE;}DXhO^Enp5so]g>$.+E~A' );
define( 'AUTH_SALT',        '!=s8+`SwN~0.+!gGdZVXGtG$:%hUJ^K@#M2C&Fh}GGE5`5Y}4ff=NEhcxY_HEb[n' );
define( 'SECURE_AUTH_SALT', '[MP}V2 )Oov7R~skbA566I%v-CEu9Y]y=P86813E]%Z+|48ypQ,~{9U%+~#3@uEG' );
define( 'LOGGED_IN_SALT',   ';P^fYG2jFsqt$.+~*C[e<q,Y:~*1!~)W3)>qT3 ^[~O#?>}aOhAD@pm0IMr};s3&' );
define( 'NONCE_SALT',       'v]^nBEdGFg%15@ndZ[4XhS2b?>Bvy9UfcaU,COVdU,PEmA`+l*<<EoC.?D<LtDK/' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'sf_';

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
#(KsL)hYFZzaO6e5tkE

#O6e5tkE@

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
