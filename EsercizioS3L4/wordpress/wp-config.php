<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'progetto5_wp' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YP?d/<&J$3VI=O-z#l#|cUn|y!~cRVA(isf;y8m}[>Ttp_gi7ChxRfxDWG/UV7L*' );
define( 'SECURE_AUTH_KEY',  'YVRy!k?~:w7?AJN,e6H @tRGBWU}Y2&:8e.U5_XrgcqB^(sH!&]2<Mo|B~Edgggy' );
define( 'LOGGED_IN_KEY',    'WGdK3J[[B?a@1r4ZV47pwhe@#hd=wQw7i&q.l;@)F.jKn/WARfo2[7+gXZ={x`{f' );
define( 'NONCE_KEY',        '_a,,5e16[xOFbJ,I+*_niwWtZI%IOY9*?(TE,Wf|RphQZ9=iC(q~$A=wD ic{g^^' );
define( 'AUTH_SALT',        ':{{0 X$~Mf<q{5sfpr}.qUK@{Vo_!`kvW2YAl{;kB0W#|Tqp <XhR<{Cpa[m:+_k' );
define( 'SECURE_AUTH_SALT', ',aF-o?#pX@Y![>$q?DR{r0QBO_NvW3((5a+g$g.v+d^qutQUN`:Zj?{8{j=@=X@c' );
define( 'LOGGED_IN_SALT',   '2Q>NQ7Gf.4}+yBi4},IXn0)y@VjO#Ptb!nY&$%i1*RMtfMj,,r&E?m3(C||6pmqG' );
define( 'NONCE_SALT',       'nr:3Cg)9vSipbc5?gr[/90*D5pW7Ef}NK;UI-~gkgv,kvM:!@4=k}Pr=T!.xPu=W' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
