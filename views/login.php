    <div class="container">
    <form class="login hidden" id="pageLogin" method="post" action="">
        <div id="forError">
            <?php 
            if (isset($_SERVER['erreur'])){
            echo ($_SERVER['erreur']);
            }
            ?>
        </div>
        <div class="mb-3">
            <label for="pseudoLogin" class="form-label">Pseudo "admin"</label>
            <input type="pseudo" name="pseudo" class="form-control" id="pseudoLogin" required>
        </div>

        <div class="mb-3">
            <label for="mdpLogin" class="form-label" id="pseudoLogin">Password "admin"</label>
            <input type="Password" name="mdp" class="form-control" id="mdpLogin" required>
        </div>
        <div>
            <input class="btn btn-primary button" type="submit" name="login" value="Connexion" data-info="btnConnectSubmit">
            <input class="btn btn-primary button" type="button" name="pageRegisterSwitch" value="inscription" data-info="btnRegister" id="pageRegisterSwitch" formnovalidate>
        </div>
    </form>
    <form class="register hidden" id="pageRegister" method="post" action="">
        <div id="forError">
        <?php 
            if (isset($_SERVER['erreur'])){
            echo ($_SERVER['erreur']);
            }
            ?>
        </div>
        <div class="regForm">
           <div>
                <div class="mb-3">
                    <label for="nomRegister" class="form-label">Nom</label>
                    <input type="nom" name="nom" class="form-control" id="nomRegister" required>
                </div>
                <div class="mb-3">
                    <label for="prenomRegister" class="form-label">Prenom</label>
                    <input type="prenom" name="prenom" class="form-control" id="prenomRegister" required>
                </div>
                <!-- <div class="mb-3">
                    <label for="ageRegister" class="form-label">Age</label>
                    <input type="number" name="age" class="form-control" id="ageRegister" required>
                </div> -->
            </div>
            <div>
                <!-- <div class="mb-3">
                    <label for="pseudoRegister" class="form-label">Pseudo</label>
                    <input type="pseudo" name="pseudo" class="form-control" id="pseudoRegister" required>
                </div> -->
                <div class="mb-3">
                    <label for="mailRegister" class="form-label">Mail</label>
                    <input type="email" name="email" class="form-control" id="mailRegister" placeholder="name@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="mdpRegister" class="form-label ">Password</label>
                    <input type="Password" name="mdp" class="form-control" id="mdpRegister" required>
                </div>
            </div>
        </div>
        <div class="btnReg">
            <input class="btn btn-primary button" type="submit" name="register" value="Inscription" data-info="btnRegisterSubmit">
            <input class="btn btn-primary button" type="button" name="pageLoginSwitch" value="Connexion" data-info="pageLoginSwitch" id="pageLoginSwitch" formnovalidate>
        </div>
    </form>
    </div>
<script>
    document.getElementById("pageLogin").classList.toggle('hidden');
    document.getElementById("pageLoginSwitch").addEventListener("click", () => {
        document.getElementById("pageLogin").classList.toggle('hidden');
        document.getElementById("pageRegister").classList.toggle('hidden');
    })
    document.getElementById("pageRegisterSwitch").addEventListener("click", () => {
        document.getElementById("pageLogin").classList.toggle('hidden');
        document.getElementById("pageRegister").classList.toggle('hidden');
    })
</script>