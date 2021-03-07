         <?php
                    include 'fonctions/connect.php';
                    $pdo = pdo_connect_mysql();
                    $msg = '';
                    // verifier les champs
                    if (!empty($_POST)) {
                        // Poster les champs
                        // objet POST existe il?
                        $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
                        // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
                        $Nom = isset($_POST['Nom']) ? $_POST['Nom'] : '';
                        $Prenom = isset($_POST['Prenom']) ? $_POST['Prenom'] : '';
                        $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
                        $Message = isset($_POST['Message']) ? $_POST['Message'] : '';

                        // Insert new record into the utilisateurs table
                        $stmt = $pdo->prepare('INSERT INTO messagerie VALUES (?, ?, ?, ?, ?)');
                        $stmt->execute([$id, $Nom, $Prenom, $Email, $Message]);
                        // Output message
                        $msg = 'Message Envoyer!';
                    }
                    ?>
                    <h3 class="QRT">Carte de visite</h3>
                    <!-- <img class="QR" src="Content/img/QR_codeKW_CarteVisite.png" alt=""> -->
                    <img class="QR" src="Content/img/Thumbnail_QR_codeKW_CarteVisite.png" width="80%" alt="QR">
                    <!-- Function HTML -->
                    <form action="" method="post">
                        <div class="form-row">
                            <label for="name">Nom</label>
                            <input class="form-control" name="Nom" placeholder="nom">
                        </div>
                        <div class="form-row">
                            <label for="firstname">Prenom</label>
                            <input class="form-control" name="Prenom" placeholder="Prenom">
                        </div>
                        <div class="form-row">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" name="Email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-row">
                            <label for="exampleFormControlTextarea1">Votre Message</label>
                            <textarea class="form-control" name="Message" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Envoyer">

                    </form>
                    <?php if ($msg) : ?>
                        <p><?= $msg ?></p>
                    <?php endif; ?>