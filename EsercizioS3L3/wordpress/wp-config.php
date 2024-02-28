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
define( 'DB_NAME', 'progetto3_wp' );

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
define( 'AUTH_KEY',         'ww7sK-k*HU#Df./w_ L~9fc$78Tu$N3eXp3Cyv=1953V3m{t9N+2-K&T:$nH!F?-' );
define( 'SECURE_AUTH_KEY',  '4p8Jov0AAO:%Srk}D0EM^fU;gHCH|+_e}3<H(F]@{E| ,tM:YV:@{8R)/~n#@^r>' );
define( 'LOGGED_IN_KEY',    ']z{r)O:=us 4V|y_A`s*-/,M%W%y>h~:&h{}7(UP:*i+-:4-rfwsJx/h{^|k_sOJ' );
define( 'NONCE_KEY',        'BUeFozloIZ8;}I[3:c~hV1U4|dZOE!An7:%cR;5duz$RX6G6om9(.i>mp:O;}/3j' );
define( 'AUTH_SALT',        'hLcTdW;cg7qg34,E/#]L@VOe,30:D8oy#{CNoRzc3X<NDnGN4HFQPm Lka?m}y}u' );
define( 'SECURE_AUTH_SALT', 'XRVYcSqbvn`KES6wTZe9MY:FK`==Ax:DT3U8Wu!Om#j_t|<HJu(7tR9tXQitZ2.(' );
define( 'LOGGED_IN_SALT',   'kzuBV*f =Qa@`Y9z$o}t>@c_?nP S@XfF:q!>i&[Pa]-$gkXb9(f_krj82i&ujqW' );
define( 'NONCE_SALT',       '9**`*-gx]pD*$9*E^{!VjtgO4x+E^j]6|:PV!:h[n!zC%i^.%~qT5$~x;ivk+2gL' );

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
