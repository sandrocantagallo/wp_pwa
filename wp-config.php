<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', '');

/** Nome utente del database MySQL */
define('DB_USER', '');

/** Password del database MySQL */
define('DB_PASSWORD', '');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6!GXZ~YK{G?xfd[]Ua,0;EK)Wf6S;/jve=G(/(Av<9:EU.BkAt@Wh/qo]{RB-KCO');
define('SECURE_AUTH_KEY',  'LUa=5eTlIapIpY5N9JQtzJa4WV;7l.u_&P|J)ON8/?2$AYobKBlO]p_t_:kx![Y1');
define('LOGGED_IN_KEY',    '12cCR{RZHp{]%I+dj)0P_98eEJK./x~McPeljGDj4.M:zL4hYWqn;><CRJKFE7qp');
define('NONCE_KEY',        '1=]tXu5 .KTa>njjfT.`@$78(#Wh<)xf#/&vuKqj5K Z~Vx6?ldsuYh[hHK<e(Ep');
define('AUTH_SALT',        'r^0$?ArV8M&ruA&T|5#%+;l2V,i39&_<Rs)mQ`TWdZ@<R}TbhE,S;6-L;:%020;T');
define('SECURE_AUTH_SALT', 'bt%i%|15=1%K}5N)`ADkH`xgE-O84Y6AM) F=k&d`d{}eRRcE[-B>,[&6924>w6F');
define('LOGGED_IN_SALT',   'Z#Wus5O;wg$`eNRa nio)3Q<3h&zsj/ok,)s<O<0L+Nm2]r+!8bf>WHuMX6B$xv}');
define('NONCE_SALT',       'X{9b8M(8Y]+,hF(co=C1I3^h]dWWdRy$)w-JGOgAzRdn3xWnH}qF7b`4&z^~iGkS');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS']='on';

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');