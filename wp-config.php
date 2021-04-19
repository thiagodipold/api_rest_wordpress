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
define( 'DB_NAME', 'api_wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'user_api' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'axxxTh(L.x4YYhyo' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '=Z^iry^R>j9)z<ic>7w$21sg~6m)g$5:Hzr#4m,`b_)QJdv#:u.F/?vZ!TU<u7?*' );
define( 'SECURE_AUTH_KEY',  '3GgOzh6jl_Iz sy;*F[c)mpxmy8-,k:;Q*&e0o?Sv 79gf vu;j!(:U$KY!<EktZ' );
define( 'LOGGED_IN_KEY',    '<p~PG%NA5J<IwVz?]L~9&KHWS-+n_s(u)0zD)V 26OCk&0VQ:m(Z<yooUNAIC~N%' );
define( 'NONCE_KEY',        '2sSZ@:wIDFU-t1vcgl[5fU|Izd7Hfm79JJ-029gJ~3rv>fFH&IEu)aW]&qO 3=$~' );
define( 'AUTH_SALT',        '_||wC2+Dau~.]zw}m]/o4m3Z{;;jiLQJ*<5{)1H3d<-8B}~FV!+WDR`A_@1%Fyz<' );
define( 'SECURE_AUTH_SALT', 'twjP%.mNgZ!Ig[iP}}xV)&(?,XY ,yFI1W(O?T3.%Z8H7c3[r_>hb$iUHL!JCf@A' );
define( 'LOGGED_IN_SALT',   'jY}>2p.1kT{ZJ@ci[{VQ`zFy=`=a0U:AS9iU+R#zb WsY.;QjvN!o;,Y)32,4s-v' );
define( 'NONCE_SALT',       'EJv;/14vhp[{-7l,^[bjyR_Djavi7$%+n0k55wlh9gY%$Ly>`UqyhC4WKA!`%xna' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'api_wp_';

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
