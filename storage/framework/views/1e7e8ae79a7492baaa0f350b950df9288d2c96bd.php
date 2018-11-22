<?php $__env->startSection('content'); ?>
    <section id="content">
        <div class="ui container">
            <div class="head"><i class="icon code"></i> <?php echo e($title); ?> <div class="green"></div><div class="red"></div></div>
            <div class="ui segment">
                <h2><strong>Regulamentul secțiunii Algoritmică</strong></h2>
                <p>Concursul național de informatică FIICode este organizat de către Facultatea de Informatică Iași și Asociația Studenților Informaticieni Ieșeni (ASII), în parteneriat cu Inspectoratul Școlar Județean Iași.</p>
                <p><strong>Obiective</strong></p>
                <p>În cadrul probei de Algoritmică se urmărește dezvoltarea:</p>
                <ul>
                    <li>pasiunii și interesul pentru Informatică și Tehnologia Informației și Comunicării</li>
                    <li>competențelor în rezolvarea problemelor folosind calculatorul</li>
                    <li>abilităților de prezentare și promovare a proiectelor realizate</li>
                    <li>gândirii algoritmice</li>
                    <li>abilităților de programare</li>
                    <li>spiritului competitiv</li>
                </ul>
                <p><strong>Participanți</strong></p>
                <p>Participarea la concurs se face individual, concurenții fiind înscriși la momentul începerii concursului la liceu sau facultate, indiferent de naționalitate. Fiecare concurent va fi identificat printr-un număr de concurs unic. Etapa online a concursului va fi formată din 3 runde de calificare formate din 3 până la 5 probleme ce vor fi evaluate automat. În urma celor 3 runde, se vor stabili concurenții care vor participa la etapa finală. Este interzisă participarea la proba de Algoritmică a membrilor comisiei!</p>
                <p>Condiții privitoare la statutul de mentor:</p>
                <ul>
                    <li>trebuie sa aibă împlinită vârsta de 18 ani la data de 1 Martie 2018</li>
                    <li>poate să-i însoțească pe participanți la etapa finală, în cazul calificării</li>
                </ul>
                <p><strong>Etape</strong></p>
                <ul>
                    <li>Runda 1: 16 - 18 martie</li>
                    <li>Runda 2: 1 - 2 aprilie</li>
                    <li>Runda 3: 20 - 22 aprilie</li>
                    <li>Runda finală: 4 - 6 mai</li>
                </ul>
                <p>Cele 3 runde online constau în rezolvarea unor seturi de 3-5 probleme. Soluțiile sunt evaluate automat și punctajele participanților se cumulează după fiecare rundă.</p>
                <p>Etapa de calificare constă în selectarea participanților ce vor lua parte la etapa finala, în urma rundelor online.</p>
                <p>Runda final constă în rezolvarea unui set de 5 probleme.</p>
                <p><strong>Înscriere</strong></p>
                <p>Etapa online se desfășoară pe site-ul concursului FIICode. Soluțiile vor fi evaluate online, pe platforma CMS hostată pe serverul FIICode.</p>
                <p><strong>Limbaje</strong></p>
                <p>Limbajele de programare admise sunt Pascal, C, C++, Haskell și Java. Compilatoarele și mediile de lucru necesare rezolvării problemelor algoritmice vor fi instalate pe discurile stațiilor de lucru. Folosirea de resurse de orice fel, altele decât cele indicate de comisie este strict interzisă.</p>
                <p><strong>Comisie</strong></p>
                <p>Comisia de la proba de Algoritmică este formată din:</p>
                <ul>
                    <li>Președintele comisiei de algoritmică</li>
                    <li>coordonatorul probei de algoritmică</li>
                    <li>cadre didactice sau colaboratori ai Facultății de Informatică</li>
                    <li>reprezentanți ai companiilor partenere Platinum</li>
                </ul>
                <p>Opțional, vor face parte din Comisie:</p>
                <ul>
                    <li>cadre didactice ale liceelor si colegiilor din Iași</li>
                </ul>
                <p><strong>Evaluare</strong></p>
                <p>Este recomandat să instalați pe calculatorul vostru aceleași versiuni pentru compilatoare ca și cele specificate în regulament, deoarece există diferențe între versiuni.</p>
                <p>Fiți deosebit de atenți la fișierele antet utilizate. Evaluatorul testează dacă programul nu returnează un cod de eroare.</p>
                <p>Concurenții sunt invitați să încadreze programele în limitele de spațiu și timp ale problemei. În caz contrar, nu vor obține puncte pe testele respective. Soluțiile vor fi evaluate online, pe platforma CMS hostată pe serverul FIICode.</p>
                <p><strong>Rezultate</strong></p>
                <p>Fiecare problemă va avea un punctaj între 200 și 3000.</p>
                <p>Formula de calcul a scorului, pe scurt:</p>
                <p>Score = min (MaxScore - AcceptedTime * MaxScore * 0.005 - WrongSubmissions * 20, MaxScore * 3 / 10), unde:</p>
                <p>Score = Scorul participantului pentru submisia curentă </p>
                <p>MaxScore = Scorul maxim alocat problemei</p>
                <p>AcceptedTime = Timpul (în minute) de la începutul rundei până la momentul primei submisii accepted a soluției</p>
                <p>WrongSubmissions = numărul de submisii greșite</p>
                <p>Explicație:</p>
                <p>Pentru fiecare minut trecut se va scade 1/200 din valoarea problemei (0.5%). De asemenea, se va scade și câte 20 de puncte pentru fiecare submisie greșită la acea problemă.</p>
                <p>De exemplu:</p>
                <p>Pentru o problemă ce valorează 200 puncte, prima submisie corectă:</p>
                <ul>
                    <li>la minutul 1 va valora 200 - 1 = 199 puncte</li>
                    <li>la minutul 2: 200 - 2 =198 puncte</li>
                    <li>etc.</li>
                </ul>
                <br>
                <p>Pentru o problemă ce valorează 400 puncte, prima submisie corectă:</p>
                <ul>
                    <li>la minutul 1 va valora 400 - (400/200) = 400 - 2 = 398 puncte</li>
                    <li>la minutul 2: 400 - 4 = 396 puncte</li>
                    <li>etc.</li>
                </ul>
                <br>
                <p>Pentru o problemă ce valorează 400 de puncte, acceptată după 2 submisii greșite, după 5 minute, punctajul obținut va fi calculat astfel:</p>
                <p>400 - 2*5 - 20*2 = 400 - 10 - 40 = 350 puncte.</p>
                <p>Punctajul minim pentru o problemă va fi 30% din punctajul alocat respectivei probleme.</p>
                <p>Punctajul final se obține însumând punctajele obținute la fiecare problemă, iar ordinea în clasament va fi obținută descrescător după punctaj.</p>
                <p>Atenție! Se va lua în calcul doar ultima voastră submisie! Scorul calculat după această formulă va apărea doar în clasament. La evaluare, va apărea punctajul obținut pentru soluția respectivă, neaplicând formula de calcul de mai sus. Submisia corectă este cea care obține punctajul maxim alocat problemei la evaluare, asupra căruia se va aplica mai apoi formula, pentru clasament, luând în calcul timpul și numărul submisiilor greșite de până atunci.</p>
                <p>În acest mod, se asigură unicitatea rezultatelor și se pot stabili de la început procentele din totalul disponibil. În comun acord cu partenerii, se pot stabili premii speciale, dar nu mai târziu de festivitatea de premiere. Fiecare concurent va primi o diplomă de participare. Premiile vor fi oferite în cadrul festivității de premiere.</p>
                <p>Premiile obținute sunt:</p>
                <ul>
                    <li>Premiul I: 45% din totalul disponibil,</li>
                    <li>Premiul al II &ndash; lea: 25% din totalul disponibil,</li>
                    <li>Premiul al III &ndash; lea: 15% din totalul disponibil,</li>
                    <li>Mențiunea I: 10% din totalul disponibil,</li>
                    <li>Mențiunea a II &ndash; a: 5% din totalul disponibil.</li>
                </ul>
                <br>
                <p>Fiecare dintre concurenți va primi o diplomă de participare.</p>
                <p>Premiile vor fi oferite participanților în cadrul festivității de premiere.</p>
                <p><strong>Descalificare</strong></p>
                <p>Un concurent care:</p>
                <ul>
                    <li>interferează cu activitățile altor participanți,</li>
                    <li>atacă stațiile de lucru sau comisia științifică,</li>
                    <li>instigă la fraudă prin orice mijloc (inclusiv electronic)</li>
                    <li>accesează rețeaua,</li>
                    <li>atacă securitatea sistemului sau evaluatorul,</li>
                    <li>execută alte programe,</li>
                    <li>schimbă permisiuni de fișiere,</li>
                    <li>citește informații despre sistem,</li>
                    <li>încalcă în alt fel regulamentul va fi descalificată fără drept de contestație.</li>
                    <li>fraudează concursul sau instigă la fraudă prin orice mijloc (inclusiv electronic) va fi descalificată fără drept de reînscriere.</li>
                </ul>
                <p>Coordonatorii concursului își rezervă dreptul de a descalifica fără notificare prealabilă și fără drept de contestație participanții aflați într-o situație de descalificare identificată. Pentru a descalifica un concurent, este necesar acordul ambilor coordonatori ai concursului.</p>
                <p><strong>Condiții</strong></p>
                <p>Coordonatorii concursului își rezervă dreptul de a modifica fără notificare prealabilă acest regulament. Asigurăm participanții că nu se vor realiza modificări ale regulamentului în ce privește datele tehnice în perioada unei runde.</p>
                <br>
                
                
                <h2><strong>Regulamentul secțiunii WEB/Mobile</strong></h2>
                <p>Concursul național de informatică FIICode este organizat de către Facultatea de Informatică Iași și Asociația Studenților Informaticieni Ieșeni (ASII), în parteneriat cu Inspectoratul Școlar Județean Iași.</p>
                <p><strong>Obiective</strong></p>
                <p>În cadrul probei de Tehnologii Web &amp; Mobile se urmărește dezvoltarea:</p>
                <ul>
                    <li>aptitudinilor și competențelor de utilizare a tehnologiilor Web sau Mobile existente</li>
                    <li>abilităților de comunicare, lucru în echipă și management al timpului</li>
                    <li>abilităților de susținere, în fața unui juriu avizat, a unui proiect propriu</li>
                </ul>
                <p><br /><br /></p>
                <p><strong>Participanți</strong></p>
                <p>Participarea la concurs se face în echipe formate dintr-un număr de 2-4 concurenți, înscriși la momentul începerii concursului la un liceu sau facultate din România, indiferent de naționalitate. În cazul în care anumiți concurenți care doresc să participe nu reușesc să-și formeze o echipă, se va organiza o sesiune, în continuă comunicare cu aceștia, prin care se vor forma, de comun acord, noi echipe.</p>
                <p>Fiecare echipă va fi identificată printr-un număr unic de concurs.</p>
                <p>Este interzisă participarea la proba de Web &amp; Mobile a membrilor comisiei!</p>
                <br>
                <p><strong>Etape</strong></p>
                <ul>
                    <li>etapa online</li>
                    <li>etapa de jurizare</li>
                    <li>etapa finală</li>
                </ul>
                <p>Etapa online constă în realizarea unui proiect la alegere, în conformitate cu tema și specificațiile Comisiei de la secțiunea de Tehnologii Web &amp; Mobile. Proiectul va fi încărcat pe una din platformele GitHub, GitLab sau BitBucket, astfel încât comisia să aibe acces la codul sursă. Dacă numărul de echipe participante în etapa online depășește 5, comisia își rezervă dreptul de a organiza o etapă de calificare în urma căreia se vor califica doar primele 5 echipe. Etapa de calificare la Tehnologii Web&amp;Mobile va consta în jurizarea proiectelor participanților de către Comisie.</p>
                <p>Etapa finală constă într-o probă practică în strânsă legătură cu proiectul creat în cadrul etapei de dezvoltare. Așadar, în această probă la prima vedere, echipele vor trebui să aducă îmbunătățiri propriilor proiecte, conform specificațiilor Comisiei.</p>
                <br>
                <p><strong>Înscriere</strong></p>
                <p>Etapa online se desfășoară pe site-ul concursului FIICode. Pentru a participa, o echipă trebuie sa fie înscrisă pe site cu cel puțin 24 ore înainte de începerea concursului. Atunci când completează formularul de înscriere, echipa trebuie sa furnizeze informații corecte și complete. După înscriere, fiecare echipă va avea un nume de utilizator și o parolă cu care va trimite proiectul spre jurizare. În același timp, fiecare echipă va trimite câte un filmuleț de prezentare al proiectului. În acesta se va specifica numele proiectului și numele realizatorilor. Totodată, fiecare film de prezentare va debuta cu o secvența de 5 secunde, în care vor fi prezentați partenerii evenimentului. (Vezi grila de parteneriat)</p>
                <br>
                <p><strong>Participare</strong></p>
                <p>Odată anunțată lista cu echipele participante la etapa finală, acestea au la dispoziție o săptămână pentru a confirma prezența. În cazul în care o echipă, din orice motive, nu poate participa la această etapă, dreptul de participare va fi oferit următoarei echipe.</p>
                <br>
                <p><strong>Tehnologii și instrumente</strong></p>
                <p>Pentru realizarea proiectelor vor fi admise orice tehnologie, instrument, platformă, limbaj de programare.</p>
                <br>
                <p><strong>Comisie</strong></p>
                <p>Comisia de la proba de Tehnologii Web este formată din:</p>
                <ul>
                    <li>președintele comisiei de Tehnologii Web</li>
                    <li>coordonatorul probei de Tehnologii Web</li>
                    <li>cadre didactice sau colaboratori ai Facultății de Informatică</li>
                    <li>reprezentanți ai companiilor partenere Platinum</li>
                </ul>
                <p>Opțional, vor face parte din Comisie:</p>
                <ul>
                    <li>cadre didactice ale liceelor și colegiilor din Iași</li>
                </ul>
                <br>
                <p><strong>Tematici</strong></p>
                <p>Tematicile proiectelor se potrivesc tendințelor actuale în Web-ul social. Dificultatea cerințelor minimale permite unei echipe de elevi de liceu să rezolve proiectul în timpul specificat. Tematicile vor permite evaluarea simultană a tuturor proiectelor după criterii comune. Comisia își rezervă dreptul de a specifica pentru unele teme indicații suplimentare referitoare la modelare, dezvoltare, testare, prezentare și evaluare, dar în mod egal pentru toate temele.</p>
                <br>
                <p><strong>Evaluare</strong></p>
                <p>În cadrul etapei concurs, Comisia va evalua conform:</p>
                <ul>
                    <li>ideii de implementare</li>
                    <li>rezultatului final și codului sursă al acestuia</li>
                    <li>modului de prezentare a soluției</li>
                </ul>
                <p>Baremul final pentru etapa finală, care conține procentele și criteriile evaluărilor va fi publicat la începutul acesteia.</p>
                <br>
                <p><strong>Rezultate</strong></p>
                <p>Ordonarea echipelor pentru clasamentul de calificare la runda finală ține cont, în această ordine, de:</p>
                <ul>
                    <li>rezultatul din etapa online (descrescător), urmat de</li>
                    <li>vârsta medie a echipei (crescător)</li>
                    <li>vârsta celui mai mic membru al echipei (crescător).</li>
                </ul>
                <p>Ordonarea echipelor pentru clasamentul de premiere în runda finală ține cont, în această ordine, de:</p>
                <ul>
                    <li>rezultatul din etapa finală (descrescător), urmat de</li>
                    <li>rezultatul din etapa online (descrescător), urmat de</li>
                    <li>vârsta medie a echipei (crescător)</li>
                    <li>vârsta celui mai mic membru al echipei (crescător).</li>
                </ul>
                <p>În acest mod, se asigură unicitatea rezultatelor și se pot stabili de la început procentele din totalul disponibil. În comun acord cu partenerii, se pot stabili premii speciale, dar nu mai târziu de festivitatea de premiere. Fiecare finalist va primi o diplomă de participare. Premiile vor fi oferite în cadrul festivității de premiere.</p>
                <p>Premiile obținute sunt:</p>
                <ul>
                    <li>Premiul I: 45% din totalul disponibil,</li>
                    <li>Premiul al II-lea: 25% din totalul disponibil,</li>
                    <li>Premiul al III-lea: 15% din totalul disponibil,</li>
                    <li>Mențiunea I: 10% din totalul disponibil,</li>
                    <li>Mențiunea a II-a: 5% din totalul disponibil.</li>
                </ul>
                <br>
                <p><strong>Descalificare</strong></p>
                <p>O echipă care:</p>
                <ul>
                    <li>interferează cu activitățile altor participanți,</li>
                    <li>atacă stațiile de lucru sau comisia științifică,</li>
                    <li>fraudează concursul sau instigă la fraudă prin orice mijloc (inclusiv electronic) va fi descalificată fără drept de reînscriere a participanților.</li>
                </ul>
                <p>Coordonatorul concursului își rezervă dreptul de a descalifica fără notificare prealabilă și fără drept de contestație participanții aflați într-o situație de descalificare identificată. Pentru a descalifica o echipă, este necesar acordul coordonatorului concursului și cel al coordonatorului ariei de concurs.</p>
                <br>
                <p><strong>Condiții</strong></p>
                <p>Coordonatorii concursului își rezervă dreptul de a modifica fără notificare prealabilă acest regulament. Asigurăm participanții că nu se vor realiza modificări ale regulamentului în ce privește datele tehnice în perioada unei runde.</p>



                <h2><strong>Regulamentul secțiunii GameDev</strong></h2>
                <p>Concursul național de informatică FIICode este organizat de către Facultatea de Informatică Iași și Asociația Studenților Informaticieni Ieșeni (ASII), în parteneriat cu Inspectoratul Școlar Județean Iași.</p>
                <br>
                <p><strong>Obiective</strong><strong>:</strong></p>
                <br>
                <ul>
                    <li>dezvoltarea aptitudinilor și competențelor de utilizare a tehnologiilor de Game Development existente</li>
                    <li>consolidarea abilităților de comunicare, lucru în echipă și management al timpului</li>
                    <li>îmbunătățirea abilităților de susținere, în fața unui juriu avizat, a unui proiect propriu</li>
                </ul>
                <br>
                <p><strong>Participanți</strong><strong>:</strong></p>
                <br>
                <ul>
                    <li>Participarea la concurs se face în echipe formate dintr-un număr de 2-4 concurenți, înscriși la momentul începerii concursului la un liceu sau facultate din România, indiferent de naționalitate.</li>
                    <li>Fiecare echipă va fi identificată printr-un număr unic de concurs.</li>
                    <li>Este interzisă participarea la proba de Game Development a membrilor comisiei!</li>
                </ul>
                <br>
                <p><strong>Etape:</strong></p>
                <br>
                <ul>
                    <li>etapa online</li>
                    <li>etapa de jurizare</li>
                    <li>etapa finală</li>
                </ul>
                <br>
                <p>Etapa online constă în realizarea unui proiect la alegere, în conformitate cu specificațiile Comisiei de la secțiunea de Game Development. Dacă numărul de echipe participante ce au un proiect promițător în etapa online depășește 5, comisia își rezervă dreptul de a crea o sesiune de departajare. Proiectele vor fi jurizate de Comisia de jurizare a secțiunii de Game Development, iar fiecare echipă va primi un punctaj în decurs de o săptămână.</p>
                <p>Etapa finală constă într-o probă practică în strânsă legătură cu proiectul creat în cadrul etapei online. Așadar, în această probă, echipele vor trebui să aducă îmbunătățiri propriilor proiecte, într-un timp scurt conform specificațiilor Comisiei.</p>
                <br>
                <p><strong>Înscriere</strong></p>
                <p>Etapa online se desfășoară pe site-ul concursului FIICode. Pentru a participa, o echipă trebuie sa fie înscrisă pe site cu cel puțin 24 ore înainte de începerea concursului. Atunci când completează formularul de înscriere, echipa trebuie sa furnizeze informații corecte și complete. Pentru înscrierea proiectului, este nevoie de un repository pe Bitbucket. După înscriere, fiecare echipă va avea un nume de utilizator și o parolă cu care va trimite proiectul spre jurizare. În același timp, fiecare echipă va trimite câte un filmuleț de prezentare al proiectului. În acesta se va specifica numele proiectului și numele realizatorilor.</p>
                <p><strong>Participare</strong></p>
                <p>Odată anunțată lista cu echipele participante la etapa finală, acestea au la dispoziție 3 zile pentru a confirma prezența. În cazul în care o echipa, din orice motive, nu poate participa la această etapa, dreptul de participare va fi oferit următoarei echipe.</p>
                <br>
                <p><strong>Tehnologii și instrumente</strong></p>
                <p>Pentru realizarea proiectelor vor fi admise orice tehnologie, instrument, platformă, limbaj de programare sau API cât timp produsul final e livrat ca o aplicație instalabilă pe o platformă mobile sau desktop (Android, IOS, Windows Phone, Windows Desktop). Acestea trebuie să poată rula pe un dispozitiv de performanță medie în condiții standard (minim 25 frame-uri pe secundă). Este permisă folosirea asset-urilor artistice (texturi, modele, sprite-uri, sunete, melodii, etc) atâta timp cât aveți dreptul de a le folosi printr-o licență. Este interzisă folosirea asset-urilor de tip cod ce nu au fost dezvoltate de membrii echipei (scripts, shaders, etc).</p>
                <br>
                <p><strong>Comisia de la proba de Game Development este formată din:</strong></p>
                <ul>
                    <li>președintele comisiei de Game Development</li>
                    <li>coordonatorul probei de Game Development</li>
                    <li>cadre didactice sau colaboratori ai Facultății de Informatică</li>
                    <li>reprezentanți ai companiilor partenere proiectului FIICode</li>
                </ul>
                <p><strong>Evaluare</strong></p>
                <p>În cadrul etapelor, Comisia va evalua conform:</p>
                <ul>
                    <li>ideii de implementare, optimizare, clean code</li>
                    <li>experiența oferită de joc (gameplay)</li>
                    <li>design</li>
                </ul>
                <p>Baremul final pentru etapa finală, care conține procentele și criteriile evaluărilor va fi publicat la începutul acesteia.</p>
                <p><strong>Rezultate</strong></p>
                <p>Ordonarea echipelor pentru clasamentul de calificare la runda finală ține cont, în această ordine, de:</p>
                <ul>
                    <li>rezultatul din etapa online (descrescător), urmat de</li>
                    <li>vârsta medie a echipei (crescător)</li>
                    <li>vârsta celui mai mic membru al echipei (crescător).</li>
                </ul>
                <p>Ordonarea echipelor pentru clasamentul de premiere în runda finală ține cont, în această ordine, de:</p>
                <ul>
                    <li>rezultatul din etapa finală (descrescător), urmat de</li>
                    <li>rezultatul din etapa online (descrescător), urmat de</li>
                    <li>vârsta medie a echipei (crescător)</li>
                    <li>vârsta celui mai mic membru al echipei (crescător).</li>
                </ul>
                <p>În acest mod, se asigură unicitatea rezultatelor și se pot stabili de la început procentele din totalul disponibil. În comun acord cu partenerii, se pot stabili premii speciale, dar nu mai târziu de festivitatea de premiere. Concurenții ce vor ajunge în finală vor primi diplome. Premiile vor fi oferite în cadrul festivității de premiere.</p>
                <p>Premiile obținute sunt:</p>
                <ul>
                    <li>Premiul I: 45% din totalul disponibil,</li>
                    <li>Premiul al II &ndash; lea: 25% din totalul disponibil,</li>
                    <li>Premiul al III &ndash; lea: 15% din totalul disponibil,</li>
                    <li>Mențiunea I: 10% din totalul disponibil,</li>
                    <li>Mențiunea a II &ndash; a: 5% din totalul disponibil.</li>
                </ul>
                <p><strong>Descalificare</strong></p>
                <p>O echipă care:</p>
                <ul>
                    <li>interferează cu activitățile altor participanți,</li>
                    <li>atacă stațiile de lucru sau comisia științifică,</li>
                    <li>fraudează concursul sau instigă la fraudă prin orice mijloc (inclusiv electronic) va fi descalificată fără drept de reînscriere a participanților.</li>
                </ul>
                <p><strong>Condiții</strong></p>
                <p>Coordonatorii concursului își rezervă dreptul de a modifica fără notificare prealabilă acest regulament. Asigurăm participanții că nu se vor realiza modificări ale regulamentului în ce privește datele tehnice în perioada unei runde.</li></p>

                </div>
            <div class="ui container"></div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>