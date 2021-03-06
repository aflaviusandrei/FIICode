<?php $__env->startSection('content'); ?>
<section id="content">
    <div class="ui container">
        <div class="ui segment webDesc" <?php echo (isset($web) && $web==1) ? 'style="display:block;"' : ''; ?>>
            <h4 class="ui header">Tehnologii WEB</h4> "Toți pentru unul și unul pentru toți!" Acesta e motto-ul probei de Tehnologii WEB! Nu poți participa decât ca parte a unei echipe formată din 2 până la 5 membri! Prima probă te va întâmpina online pentru a-ți testa abilitățile și creativitatea urmând ca apoi, cei mai cei să se califice în finală! Nu ezita! Înscrie-te și creează aplicații uimitoare folosind orice tehnologie de pe acest Pământ!
            <br /> Pentru mai multe detalii vezi <a href="/regulament">regulament</a>. </div>
        <div class="ui segment algoDesc" <?php echo (isset($algo) && $algo==1) ? 'style="display:block;"' : ''; ?>>
            <h4 class="ui header">Algoritmică</h4> Un algoritm trebuie văzut pentru a fi crezut!" Acesta e motto-ul probei de Algoritmică! Trei probe de calificare te așteaptă cu brațele deschise pentru a-ți demonstra priceperea in lumea algoritmilor! Dar nu zi HOP până nu sari gardul căci dupa acestea te așteaptă "Algozilla"! Crezi că ești pregătit? Înscrie-te și arată-ne ce poți!
            <br /> Pentru mai multe detalii vezi <a href="/regulament">regulament</a>. </div>
        <div class="ui segment gamedevDesc" <?php echo (isset($gamedev) && $gamedev==1) ? 'style="display:block;"' : ''; ?>>
            <h4 class="ui header">GameDev</h4> "Tot timpul e mai bine cu prietenii aproape!" De aceea în secțiune vei concura alături de ei în echipe de 2 pana la 4 oameni pentru a dezvolta cel mai grozav joc! La această probă puteți utiliza orice tehnologie atât timp cât aplicația finală v-a putea fi instalată și utilizată pe un device.
            <br /> Pentru mai multe detalii vezi <a href="/regulament">regulament</a>. </div>
        <div class="head"><i class="icon code"></i> <?php echo e($title); ?>

            <div class="green"></div>
            <div class="red"></div>
        </div>
        <div class="ui segment">
            <div class="ui form formularDeInscriere">
                <div class="field">
                    <label>Te rugam sa selectezi sectiunea la care vrei sa te inscrii.</label>
                    <div class="ui grid stackable selectPerson">
                        <div class="five wide column">
                            <div class="ui segment"> <i class="icon code"></i>
                                <p>Tehnologii web</p>
                                <div class="ui fitted toggle checkbox">
                                    <input name="sectiune" id="web" value="web" <?php echo (isset($web) && $web==1 ) ? 'checked' : ''; ?> type="radio">
                                    <label></label>
                                </div>
                            </div>
                        </div>
                        <div class="five wide column">
                            <div class="ui segment"> <i class="icon rocket"></i>
                                <p>GameDev</p>
                                <div class="ui fitted toggle checkbox">
                                    <input name="sectiune" id="gamedev" value="gamedev" <?php echo (isset($gamedev) && $gamedev==1 ) ? 'checked' : ''; ?> type="radio">
                                    <label></label>
                                </div>
                            </div>
                        </div>
                        <div class="five wide column">
                            <div class="ui segment"> <i class="icon cubes"></i>
                                <p>Algoritmică</p>
                                <div class="ui fitted toggle checkbox">
                                    <input name="sectiune" id="algo" value="algo" <?php echo (isset($algo) && $algo==1 ) ? 'checked' : ''; ?> type="radio">
                                    <label></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label class="algoOnly">Nume și prenume<span>*</span></label>
                    <label class="webOnly">Numele complet al liderului<span>*</span></label>
                    <label class="gamedevOnly">Numele complet al liderului<span>*</span></label>
                    <input type="text" name="nume" placeholder="Nume si prenume" /> </div>
                <div class="field">
                    <label class="algoOnly">Adresa de email<span>*</span></label>
                    <label class="webOnly">Adresa de email a liderului<span>*</span></label>
                    <label class="gamedevOnly">Adresa de email a liderului<span>*</span></label>
                    <input type="text" name="email" placeholder="Email" /> </div>
                <div class="field">
                    <label>Parola<span>*</span></label>
                    <input type="password" name="password" placeholder="Parola"> </div>
                <div class="field">
                    <label>Confirma Parola<span>*</span></label>
                    <input type="password" name="password_conf" placeholder="Confirmă Parola"> </div>
                <div class="field">
                    <label class="webOnly">Cont Git (Oricare din GitHub, GitLab, Bitbucket, etc. - obligatoriu pentru tehnologii web)<span>*</span></label>
                    <label class="gamedevOnly">Cont Git (Oricare din GitHub, GitLab, Bitbucket, etc. - obligatoriu pentru mobile)<span>*</span></label>
                    <input class="webOnly gamedevOnly" type="text" name="bitbucket" placeholder="Contul Git unde va fi salvat codul sursă" /> </div>
                <div class="field">
                    <label>Orașul in care locuiești<span>*</span></label>
                    <input type="text" name="oras" placeholder="Oraș" /> </div>
                <div class="field">
                    <label>Ce vârstă ai?<span>*</span></label>
                    <select name="varsta" class="ui dropdown">
                        <option value="">Varsta</option>
                        <option value="<15">< 15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value=">22">> 22</option>
                    </select>
                </div>
                <div class="field">
                    <label>Numărul de telefon<span>*</span></label>
                    <input type="text" name="telefon" placeholder="Numărul de telefon" /> </div>
                <div class="field">
                    <label>Liceul sau facultatea la care sunteți<span>*</span></label>
                    <input type="text" name="scoala" placeholder="Liceu / Facultate" /> </div>
                <div class="field webOnly">
                    <label>Nu mi-am găsit un coechipier, și vreau să particip la sesiunea de creare de echipe?</label>
                    <select name="has_team" class="ui dropdown">
                        <option value="0">Nu</option>
                        <option value="1">Da (Detalii în RegulamentWeb/Mobile#Participanți)</option>
                    </select>
                </div>
                <div class="field webOnly gamedevOnly">
                    <label>Nume Echipă<span>*</span></label>
                    <input type="text" name="numeproiect" placeholder="Nume Echipă" /> </div>
                <div class="field webOnly gamedevOnly">
                    <label>Ce tehnologii veți folosi<span>*</span></label>
                    <input type="text" name="tehnologii" placeholder="Tehnologii" /> </div>
                <div class="field webOnly gamedevOnly">
                    <label>Nume Membru 2<span>*</span></label>
                    <input type="text" name="nume2" placeholder="Nume și Prenume" /> </div>
                <div class="field webOnly gamedevOnly">
                    <label>Email Membru 2<span>*</span></label>
                    <input type="text" name="email2" placeholder="Adresa de email" /> </div>
                <div class="field webOnly gamedevOnly">
                    <label>Nume Membru 3</label>
                    <input type="text" name="nume3" placeholder="Nume și Prenume" /> </div>
                <div class="field webOnly gamedevOnly">
                    <label>Email Membru 3</label>
                    <input type="text" name="email3" placeholder="Adresa de email" /> </div>
                <div class="field webOnly gamedevOnly">
                    <label>Nume Membru 4</label>
                    <input type="text" name="nume4" placeholder="Nume și Prenume" /> </div>
                <div class="field webOnly gamedevOnly">
                    <label>Email Membru 4</label>
                    <input type="text" name="email4" placeholder="Adresa de email" /> </div>
                 <?php echo Recaptcha::render(); ?>

                <div class="field">
                    <div class="ui blue labeled icon submit button"><i class="icon send"></i>Trimite</div>
                </div>
                <div class="ui warning message erroareTehnica">
                    <div class="header">Eroare la aplicare.</div>
                    <p>Aparent nu ai completat întocmai cum trebuie câmpurile de mai sus. Te rugam să verifici și să încerci înca odată.</p>
                </div>
                <div class="ui warning message selectCategorie">
                    <div class="header">Categoria nu a fost selectată.</div>
                    <p>Nu ai selectat nici o categorie pentru care vrei să te inscrii. Te rugăm să selectezi una din cele 3 categorii și să încerci iar.</p>
                </div>
                <div class="ui success message aplicareTrimisa mesajWeb">
                    <div class="header">Aplicarea ta a fost trimisă cu succes!</div>
                    <p>Felicitări! Vei primi un mesaj de confirmare în maxim 24 ore! În caz contrar contactează-ne la fiicode@asii.ro</p>
                </div>
            </div>
        </div>
        <div class="ui container"></div>
    </div>
</section>
<script src='https://www.google.com/recaptcha/api.js'></script><?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>