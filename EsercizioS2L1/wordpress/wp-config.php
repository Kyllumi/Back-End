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
define( 'DB_NAME', 'progetto1_wp' );

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
define( 'AUTH_KEY',         '#+?+;Xw|HZw]Bb|w|W-(LNAM^~p@Gs!]~kOg|lL6~2VA3 ?[I8ICOC#C]yhlCu}`' );
define( 'SECURE_AUTH_KEY',  '<sPXH0t?|#Q0YK ivkIztLN-*=y7hr9+w~S!~o>HUT.{1 SE4Q>>Gs/U9e-8ruZ~' );
define( 'LOGGED_IN_KEY',    'PY?V>>{pOE|iV`Oh_5(}.6I?7:3aWKB*fz+5k`9gbHK|Mdmk(.=+z0JJ~Rr@kSE%' );
define( 'NONCE_KEY',        '-mda@M)|$AIE?njdWkF<`F=nH;M4}tMv4BhZ2z[7#{vjE;:Ao}mU&hTm%|BiR#GH' );
define( 'AUTH_SALT',        'ff8EFHYCPS?3FkY7N_Bm,D^dp3^|Fz=plbH2IX9.qk?TKRGLsZ0(Rq^f(4R?1/#5' );
define( 'SECURE_AUTH_SALT', '~Th*oGR- tz?xit9eR%;qel0IY0[=x_Ze%I7A3>O`@#)Re9Ri$iIf7,3IC 2$j#K' );
define( 'LOGGED_IN_SALT',   '1MI@nHC_s1+HXs1K?1n[*)^p:^~1,zS4-Y#fA4(3aJHpD:&h!yC}0A vX1T%Q=St' );
define( 'NONCE_SALT',       'I@ z 2d?l<L#nIvZ7jc^x%NnnDEyU)PAGK7y&%OE+18?]_`D@y<d*;wwdo]|&Iov' );

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
