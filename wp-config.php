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
define( 'DB_NAME', 'loja' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '!,n5!%!x;y3+oaM^${op/Aqiir`AV7s*Pt!uyd%+!ZpXYtY+.9#Uv(K(x?M&5F>&' );
define( 'SECURE_AUTH_KEY',  'YRuL$5tz1;wJx[qg;()Mr%-!yfXJnpJ|_Dn`?uXK1Fi>Fv}%EMNp;11XQ4E+SkCi' );
define( 'LOGGED_IN_KEY',    ']E7=&M3<TlDFOC%W:p+6cernn7yEGUz#${`usmu~fWn}&|B4PE<Nea:GbPx@EaR:' );
define( 'NONCE_KEY',        'KL#UU[5I38[C!fNdoF;z}Z,*EGVQE#3C2=~26&Zxii[GqQ4udjl#`Kvp~<sv3C;n' );
define( 'AUTH_SALT',        'k3=?Da#th6}=i.<Kz`w:C2 EGNicDcaP,x@1^ITEmz]06!V0Hq;wj|(fHO^Q6;zU' );
define( 'SECURE_AUTH_SALT', 'n9}NAh[cD%Nt$9k lm_&6w*VACUs%U^S<>~jP0k[e!h9UeJ6sa_B{5/(IW!JcR-T' );
define( 'LOGGED_IN_SALT',   'K;@Y#x5n]5F5=k.VnC9CXU=al+V@FbM4kz#p}ICOK3Qv(;a[76ABvQsF]Q9UG;ul' );
define( 'NONCE_SALT',       '/|5HJlI.U[:{>&sPWk84EQ}61?PD]2D?7*j:1=0Z[+yx ]Oj/AwD99#d^J_H~.2K' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
