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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'landing-ebook' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', '' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'c_|l~:tDy*7UZQog*yxsGSZD%f  Jb,b%^u;dF(?IzQ~fYxpDyAhO^X-2Mc3-6Fw' );
define( 'SECURE_AUTH_KEY',  'J)0/@I!PK=84ij)G0Q>%zaNm`]dRyt<_n8U~s41q#uU93dMV$YnsQAr!+~Tj9K5C' );
define( 'LOGGED_IN_KEY',    'Ua0t3-5Ix4gjS-(> s@|u$4(+JkjXptuKU S948jc:Ny/czI7FWla!zMYUiD:<+z' );
define( 'NONCE_KEY',        '**FN<6vQVg`V@s}QtnnF7.&`,h)(r]<rFY*(:Ws%>cUK{&LC#yrTB-UgUG_NEx1.' );
define( 'AUTH_SALT',        'S)&pd~G,Z4+SgftwD>3gp/p/( ),94!w5&Ow=q%]gb?xXy&:KIH/~%MYgQ;5NC`&' );
define( 'SECURE_AUTH_SALT', 'b9Vr[#offS9QjV6IP1f=-^e5zR0|u{?QffQhY!_O~Lyn(n3EAcLmFJA@7s<ZCi;^' );
define( 'LOGGED_IN_SALT',   '6B8K#RV{S}}#/4`vH>+nI[b}p#3_st<H$ f+6AhnJ`^(SKcdWgIT*{d!s%s`7>3v' );
define( 'NONCE_SALT',       'ksT2PcZK/(`4GHUThEc?w*~*r`~BAm.ZD`2,cwAZ%zChEDb^}3Uk|73p5nWw~s_O' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
