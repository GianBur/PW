<?php
         
    /*
    * Classe che si occupa dell'interazione tra l'applicazione php e il database
    */
    class database{
        /*
         * Parametri di connessione al database
         */
        public static $dbHost = "localhost";
        public static $dbUser = "guest";
        public static $dbPassword = "pwdguest";
        public static $dbName = "lab10";
        
        /*
         * Connessione al database
         */
        public static function dbConnect(){
            //creo una connessione al server
            $conn = mysql_connect(database::$dbHost, database::$dbUser, database::$dbPassword)
                or die("Errore nella connessione al DB Server: " . mysql_error());
            //seleziono il database
            mysql_select_db(database::$dbName)
                or die("Errore nella selezione del database: " . mysql_error());
            return $conn;
        }
        
        /*
         * Esecuzione di query di selezione
         */
        public static function qSelect($conn, $sql){            
            //eseguo la query di selezione
            $risposta = mysql_query($sql)
                or die("Errore nell'esecuzione della query di selezione: " . mysql_error());            
            //restituisco il risultato della query
            return $risposta; 
        }
        
        /*
         * Esecuzione di query di aggiornamento
         */
        public static function qUpdate($conn, $sql){            
            //eseguo la query di aggiornamento
            mysql_query($sql)
                or die("Errore nell'esecuzione della query di aggiornamento: " . mysql_error());
            //valore di ritorno in caso di corretto funzionamento
            return 0;
        }
        
        /*
         * Esecuzione di query di accodamento
         */
        public static function qInsertInto($conn, $sql){            
            //eseguo la query di accodamento
            mysql_query($sql)
                or die("Errore nell'esecuzione della query di accodamento: " . mysql_error());
            //valore di ritorno in caso di corretto funzionamento
            return 0;
        }
        
        /*
         * Esecuzione di query di eliminazione
         */
        public static function qDelete($conn, $sql){            
            //eseguo la query di eliminazione
            mysql_query($sql)
                or die("Errore nell'esecuzione della query di eliminazione: " . mysql_error());
            //valore di ritorno in caso di corretto funzionamento
            return 0;
        }
        
    }
?>