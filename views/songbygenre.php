<?php session_start();?>
<div class="dashboard active" id="dashboard">
    <div class="detail user">
        <div class="recentActivity">
            <div class="textUp">
                <div class="texte">
                    Résultat de la recherche
                </div>
                <div class="showAll">
                    <a href="../index.php?currentPage=home">Home</a>
                </div>
            </div>
            <?php if (count($result)>0){?>
            <table>
                <thead>
                    <tr>
                        <th>Ref</th>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Genre</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach( $result as $elem){ ?>
                    <tr>
                        <td><?php echo $elem["idMusic"]; ?></td>
                        <td><?php echo $elem["title"]; ?></td>
                        <td><?php echo $elem["auteur"]; ?></td>
                        <td><?php echo $elem["Genre"]; ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <?php } else {echo "Pas de résultat pour votre recherche.";} ?>
        </div>

    </div>
</div>