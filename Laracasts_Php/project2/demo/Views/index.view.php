<?php require base_path('Views/Partials/head.php'); ?>

<?php require base_path('Views/Partials/nav.php') ?>

<?php require base_path('Views/Partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1>Hello, <?= $_SESSION['user']['username'] ?? 'World'  ?><br>This Is The Home Page!</h1>
    </div>
</main>

<?php require base_path('Views/Partials/footer.php'); ?>