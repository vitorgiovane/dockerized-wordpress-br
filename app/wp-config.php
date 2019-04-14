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

/**
 * Inclui biblioteca Dotenv para extrair opções de configuração do arquivo .env.
 */
if(file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
	require_once dirname(__DIR__) . '/vendor/autoload.php';
	$dotenv = Dotenv\Dotenv::create(dirname(__DIR__));
	$dotenv->load();
}else{
	echo "<h2>File <strong>/vendor/autoload.php</strong> not found!</h2>
	<p>Run the <strong>composer install</strong> command on a terminal.</p>";
	die;
}

define('ENVIRONMENT_DEV', 'dev');
define('ENVIRONMENT_STAGE', 'stage');
define('ENVIRONMENT_PROD', 'prod');
define('ENVIRONMENT', getenv('ENVIRONMENT'));

/** Sem erros em produção **/
if (ENVIRONMENT === ENVIRONMENT_PROD) {
    error_reporting(0);
    @ini_set('display_errors', 0);
}

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', getenv('WP_DB_NAME'));

/** Usuário do banco de dados MySQL */
define('DB_USER', getenv('WP_DB_USER'));

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', getenv('WP_DB_PASSWORD'));

/** Nome do host do MySQL */
define('DB_HOST', getenv('WP_DB_HOST'));

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', getenv('WP_DB_CHARSET'));

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
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = getenv('WP_DB_PREFIX');

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
define('WP_DEBUG', getenv('WP_DEBUG'));

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once( ABSPATH . 'wp-settings.php' );
