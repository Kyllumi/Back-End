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
define( 'DB_NAME', 'progetto2_wp' );

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
define( 'AUTH_KEY',         '!2tvT[<rBm?M.,-S:CkUy;kW|34UcC]f =Ok_?]86eO^[X}.?>0g$+H2otDQ0oo/' );
define( 'SECURE_AUTH_KEY',  'TlF2rpSo7r@%YWb)WnsL6>BX6f!<r26_oZcB4et)=J%| 0>SA>7xjGMbAAi:s:qu' );
define( 'LOGGED_IN_KEY',    'KUq9hKhe|&lV[MNMxEL&&@be>F9z9Vqiv1(<wqo&Pbz8*fwTs]BA*F-/JJs?]Z/e' );
define( 'NONCE_KEY',        '9@RY,R>8&Uw](p+hj(`gJ3;)wPeI}K7+exoAf(^DAiJI:9%q*Wg;Ytd0X-;z=M8_' );
define( 'AUTH_SALT',        'VdAT!`UJ*xxiW]x->l%je~oI*I])NM+<KE=yH~o5kDNN^U5=636L<-Wz*$KUlh(b' );
define( 'SECURE_AUTH_SALT', 'RBRs42Vw{0T;T^AU&5SxHth_`zb!iiCXl?932qW)GUzXMHK&x6[g}1O,4kY1gBID' );
define( 'LOGGED_IN_SALT',   'V`]d2jmzDMm&[DG!P#%`!s)j&cmK_ik@oA$G3B6s%C%3XG@LB GYO+IkDVpI]b?G' );
define( 'NONCE_SALT',       ' 9RPQN8<q=PG2VR/(r,%%S_BTjMA>O73@}@G-K^6]?mQ8.cDy>TP:U1@=(F|HHcW' );

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
