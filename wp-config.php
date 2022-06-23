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
define( 'DB_NAME', 'babyemcasa' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'babyemcasa' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '18Nqc}-M+euE' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'bancos2.hospedar.net' );

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
define( 'AUTH_KEY',         'I3YJtXK*Twem5xjR?J#[2%-/k<bP7)aLAo9RZPVf2?G&!7j?v3C?K;]DYjDa9qZf' );
define( 'SECURE_AUTH_KEY',  '?+QN*khfFR Hh1J){wV-&_wN].`890(A5AYT3Nf|?<<C|1N9YK[7iv{7=P>|<^5o' );
define( 'LOGGED_IN_KEY',    'cikdeh:DtjucpCaAYo:,1DQ[^_unEQ6a.Ms,y=WN$[q9|E1&h4MS)+q^@);J8R&(' );
define( 'NONCE_KEY',        '[lSnya`m>BNiw-vxZ`swv1ULmN5lH|2{50)p+6qhd{.`IJ$YnxG0)_;3xJEfSA#Y' );
define( 'AUTH_SALT',        'TClOj:4E3_`YQ2*Q,I@%sXhMp&!@T+;UPFg)?2a6k,u9:5&rOWS >fz_mWGi((tR' );
define( 'SECURE_AUTH_SALT', 'h`eqQOQ(*SkrnC8(L2tpi1#jp$[}_e-e&_]IQ!60K~;WQ+Cn^r+N=Gw]=9bcTldW' );
define( 'LOGGED_IN_SALT',   '7{dQDoM*1$Pdf,Ns@kb<Y>KPy)^uUb~wZ]6:EY)CaIlnJr0p>=nD0tjC9)_K5455' );
define( 'NONCE_SALT',       '`M@^w%VWcz,8VB:3*Euy#Q)SCich V$00;@Fnz4+tu`o?Z)^5OXj +wRF_G0AVDD' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'hspd_';

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

define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', 'babyemcasa.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
