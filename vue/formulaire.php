<div class="paragrapheContact">
        <div class="boiteContact">
            <h2> Me contacter</h2>
        </div>
        <div class="boxContact">
            <div class="Contact">
                <!-- <ul class="breadcrumb"><li><a href="index.html">Accueil</a></li><li><a href="classement.html">Classement hebdomadaire</a></li><li><a href="f_insc.html">Newsletter</a></li></ul> -->
                <div class="container">
                    <form action="traitement.php">
                        <table>
                            <tr>
                                <td>
                                    <label for="fname">Nom de famille</label>
                                </td>
                                <td>
                                    <input type="text" id="fname" name="firstname" placeholder="Votre nom..">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="lname">Prénom</label>
                                </td>
                                <td>
                                    <input type="text" id="lname" name="lastname" placeholder="Votre prénom..">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>E-mail</label>
                                </td>
                                <td>
                                    <input name="adresse" type=text size="25" placeholder="Votre email.." />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Objet</label>
                                </td>
                                <td>
                                    <textarea id="commentaire" placeholder="" name="commentaire1" rows="2"
                                        cols="90"></textarea>
                                </td>
                            </tr>
                        </table>
                        <label for="subject">Message </label>
                        <textarea id="subject" name="subject" placeholder="Écriver votre message ici.."></textarea>
                        <input class="submit" type="submit" value="Envoyer">
                    </form>
                </div>
            </div>
        </div>


 
