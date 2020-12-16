<!--

https://policies.google.com/faq

Strutturiamo un array che contiene tutte le domande e le relative risposte.
Utilizzando PHP stampiamo la lista delle FAQ all'interno della pagina html.
Una volta che siamo riusciti ad ottenere un buon risultato con array e html+php ci dedichiamo alla grafica: utilizzando Sass, stiliamo header e footer e il contenuto della pagina.
-->
<?php
    $faq = [
        // FAQ 1
        [
            "question" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
            "answer" => [
                "La recente <a>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa.
                La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome.
                Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",

                "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa.
                Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali
                ed il diritto di tutti di conoscere e distribuire le informazioni.",

                "Per presentare una richiesta di rimozione, compila questo <a>modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta.
                Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili).
                Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata.
                Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche,
                ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto).
                Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso.
                Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",

                "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio.
                La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca.
                Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte
                e ci stiamo adoperando per predisporre una procedura conforme alla legge.",

                "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati.
                Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
            ]
        ],
        // FAQ 2
        [
            "question" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
            "answer" => [
                "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi.
                Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",

                "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te.
                Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro.
                Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci.
                Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",

                "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a>Centro Google per la sicurezza online.</a>",

                "<a>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
            ]
        ],
        // FAQ 3
        [
            "question" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
            "answer" => [
                "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web.
                I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web.
                Se desideri rimuovere qualcosa dal Web, devi <a>contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica.
                Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a>fai clic qui</a>.
                Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google.
                In caso di una richiesta di rimozione urgente, è inoltre possibile <a>visitare la nostra pagina di assistenza per avere ulteriori informazioni.</a>"
            ]
        ],
        // FAQ 4
        [
            "question" => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
            "answer" => [
                "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet,
                o URL, della pagina dei risultati di ricerca sotto forma di <a>URL referrer</a>.
                Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito.
                Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer.
                Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi.
                Ulteriori informazioni sulla ricerca SSL sono disponibili <a>qui</a>. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics
                o un'API (Application Programming Interface).
                Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
            ]
        ],
    ]


?>

<html lang="en" dir="ltr">
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
       <link rel="stylesheet" href="dist/app.css">
       <title>
           Google FAQ
        </title>
    </head>
    <body>

        <header>
            <!-- Top Header -->
            <div class="top-header">
                <div class="header-title">
                    <div class="logo-container">
                        <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="google-logo">
                    </div>
                    <h2>
                        Privacy e termini
                    </h2>
                </div>
                <div class="user">
                    <div class="g-apps">
                        <i class="fas fa-th"></i>
                    </div>
                    <div class="avatar-container">
                        <img src="https://lh3.googleusercontent.com/ogw/ADGmqu864JI54Jaw7u_PK6hy0K0YqZ12XRyQHOtcNpSqIw=s32-c-mo" alt="">
                    </div>
                </div>
            </div>

            <!-- Bottom Header -->
            <div class="bottom-header">
                <ul>
                    <li>Introduzione</li>
                    <li>Nomre sulla privacy</li>
                    <li>Termini di servizio</li>
                    <li>Tecnologie</li>
                    <li class="current-li">Domande frequenti</li>
                </ul>
            </div>
        </header>

        <main>
            <div class="container">
                <!-- Cicla array delle FAQ e crea un div per ogniuna -->
                <?php for ($i=0; $i < count($faq); $i++) { ?>

                <div class="faq-wrapper">

                    <!-- Stampo la FAQ -->
                    <h2 class="question"> <?php echo $faq[$i]["question"]; ?> </h2>

                    <!-- Stampo ogni risposta e/o pezzo di risposta in un p -->
                    <?php foreach ($faq[$i]["answer"] as $answer) { ?>
                    <p class="answer">
                        <?php echo $answer; ?>
                    </p>
                    <?php } ?>

                </div>

                <!-- Chiusura ciclo per creazione div delle FAQ -->
                <?php } ?>
            <!-- Chiusura container -->
            </div>
        </main>

        <footer>

            <div class="container">

                <ul>
                    <li>Google</li>
                    <li>Tutto su Google</li>
                    <li>Privacy</li>
                    <li>Termini</li>
                </ul>

                <div class="language">
                    <div class="icon-container">
                        <img src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAMAAAAMs7fIAAAABGdBTUEAALGPC/xhBQAAAFpQTFRFAAAAc8b%2BeNj%2BeLL7lt3/YbL4cs/9rNn8p9b7%2Bfn5hdD/a8D/7vD/vOL9itf%2B////3PD%2Byuj9R6348Pb7KZz2UL78MKL3Oqv4Zsz/ndX8qN/%2BI5T0S7X4W8b9mmuivQAAAAF0Uk5TAEDm2GYAAACXSURBVBjTXYqLEsIwCARR%2B27zpCFNxP//TSGOTu3OhDs2wGaPM9bD8hKGMDtnDq130GkxDK/BY/tVc6CtXa21Q72ClFKoqUrINBLAzHP9grKpccxFYmqNIcY4j%2BXDiLJBztmUXCRkGgkgIsZbO1kwEjVDKwYmDriSGt6FPHrnp6x1Bd/vzxP9Bj8mFfBH2K8Gtng1AA95bxQhE7o%2B68UQAAAAAElFTkSuQmCC" alt="">
                    </div>
                    <select>
                        <option value="it">Italiano</option>
                        <option value="en">English</option>
                        <option value="de">Deutsch</option>
                    </select>
                </div>
            </div>

        </footer>
    </body>
</html>
