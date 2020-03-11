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
define( 'DB_NAME', 'carros' );

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
define( 'AUTH_KEY',         '8oEkD9vabW7TxJ:{=|C|?no~1m0?U1By<4$yt iGTU!C*,8fXz5fXX!1*G;UiT%0' );
define( 'SECURE_AUTH_KEY',  'pWwsB)%cn<;N6+`XjA)O.Mk1K5X?X4SP`0<*FJB>J~F5o=kqkXqlE 9H(.}N0gv}' );
define( 'LOGGED_IN_KEY',    '`-7:/DSaK@sA&NG.k}@{0;7AW1^#w8})=hLXf+YCCyK*xXf0`+y#OhS;0]{-@WKo' );
define( 'NONCE_KEY',        ':Su7)?</EJigfETG;qc`PK^__71g`>V|2N0.}=sY.C9P27al.%jFQv OTCl!hD@V' );
define( 'AUTH_SALT',        '2oW,YGl9$ECiU#SILH18k[E#O}ir0d%g^/_^6&QC`yQ:*fR73Be]&0ZH;bCKRm{s' );
define( 'SECURE_AUTH_SALT', ',: ,~5T?6%?g13h]F4uG=QPzqD)[DMjb$jvFfe.^_HIWL)-V~i,+mOI9MB@3{9RL' );
define( 'LOGGED_IN_SALT',   '.Hq-A pdym-Jw=CtH#0<z;StXqPG-.z2{4XRHq!bP+Zk/jLdMz:.&#t/rWA?cW_a' );
define( 'NONCE_SALT',       '*,)FEZbIj)[9PpgFYoQq![ZaHD@up5z:w$^5=sF.kP hU56FC{NWIlC*qhuZ)61y' );

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
