<?php require('Partials/head.php'); ?>

<?php require('Partials/nav.php') ?>

<?php require('Partials/banner.php'); ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <a href="/demo/notes" class="text-blue-500 hover:underline">Go Back..</a>
            <p class="mt-6"><?= $note['body']; ?></p>
        </div>
    </main>

<?php require('Partials/footer.php'); ?>