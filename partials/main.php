<main>
    <aside>
    <?php include_once('partials\pseudo.php') ?>
    </aside>
    <section id="tchat">
        <?php include_once('partials\chat.php') ?>
    </section>
    
    <section id="formulaire">
        <form method="post" action="../process/insertion.php">
                <label for="pseudo">pseudo :</label>
                <input type="text" name="pseudo" id="pseudo">
           
                <label for="message">message : </label>
                <textarea name="message"></textarea>
         <div class="mybtn">
            <p>
            <button type="submit" name="valider" class="btn">poster</button>
            </p>
            <p>
            <button type="submit" name="clear" class="btn">effacer</button>
            </p>
        </btn>
        </form>
    </section>
</main>