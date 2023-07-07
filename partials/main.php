<main>
    <aside>
    <?php include_once('partials\pseudo.php') ?>
    </aside>
    <section id="tchat">
        <?php include_once('partials\chat.php') ?>
    </section>
    
    <section id="formulaire">
        <form method="post" action="../process/insertion.php">
            <p>
                <input type="text" name="pseudo" id="pseudo" placeholder="pseudo">
            </p>
                <textarea name="message" placeholder="message"></textarea>
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