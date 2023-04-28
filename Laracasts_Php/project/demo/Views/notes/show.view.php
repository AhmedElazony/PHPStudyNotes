<?php require base_path('Views/Partials/head.php'); ?>

<?php require base_path('Views/Partials/nav.php') ?>

<?php require base_path('Views/Partials/banner.php'); ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <a href="/demo/notes" class="text-blue-500 hover:underline">Go Back..</a>
            <h1 class="mb-5 mt-3"><?= '{' . htmlspecialchars($note['title']) . '}' ?></h1>
            <p class="mt-6"><?= nl2br(htmlspecialchars($note['body'])); ?></p>
            <form method="POST" class="mt-6">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button id="delete" name="delete" type="submit" class="text-red-500 hover:underline">Delete Note</button>
            </form>

            <a href="/demo/notes/edit?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">Edit Note</a>

        </div>
    </main>

<?php require base_path('Views/Partials/footer.php'); ?>