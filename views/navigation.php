<div class="container1">
    <div class="nav active" id="nav">
        <ul>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="game-controller-outline"></ion-icon>
                    </span>
                    <span class="titre">Search your music</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="titre">Home</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="titre">Mon Compte</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="file-tray-full-outline"></ion-icon>
                    </span>
                    <span class="titre">Mon historiques</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="thumbs-up-outline"></ion-icon>
                    </span>
                    <span class="titre">Mes Commentaires</span>
                </a>
            </li>
            <li>
                <a class="button" href="../model/disconnect.php" data-info="disconnect">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>

                    </span>
                    <span class="titre">Se Déconnecter</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="topBarNew active" id="topBarNew">
        <div class="toggle" id="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="searchBar">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <select class="form-select w-25" aria-label="Default select example">
                <option selected>Tous</option>
                <option value="1">Genre</option>
                <option value="2">Titre</option>
                <option value="3">Auteur</option>
            </select>
                <button class="btn btn-primary" type="submit">Search</button>
                
            </form>
            

        </div>

        <div class="accountObj" id="accountObj">
            <ion-icon name="caret-down-outline"></ion-icon>
            <div class="accountImg">
                <img src="./ressources/img/account_default.png" alt="" srcset="">
            </div>

        </div>

    </div>
    <div class="menuDeroulant" id="menuDeroulant">
        <ul>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="titre">Mon Compte</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="file-tray-full-outline"></ion-icon>

                    </span>
                    <span class="titre">Historique</span>
                </a>
            </li>
            <li>
                <a class="button" href="../model/disconnect.php" data-info="disconnect">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>

                    </span>
                    <span class="titre">Se Déconnecter</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    document.getElementById("accountObj").addEventListener("click", () => {
        document.getElementById("menuDeroulant").classList.toggle("active");
    })
    document.getElementById("toggle").addEventListener('click', () => {
        document.getElementById("nav").classList.toggle("active");
        document.getElementById("topBarNew").classList.toggle("active");
        document.getElementById("dashboard").classList.toggle("active");
    })
    let navListe = document.querySelectorAll(".nav ul li");
    navListe.forEach(item => {
        item.addEventListener("mouseover", () => {
            navListe.forEach(e => {
                e.classList.remove("active");
            })
            item.classList.add("active");
        })
    })
</script>