<?php require base_path('Views/Partials/head.php'); ?>

<?php require base_path('Views/Partials/nav.php') ?>

<?php require base_path('Views/Partials/banner.php'); ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <form method="POST">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-1 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <textarea name="title" id="title" rows="1" cols="10" style="resize: none;"  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                  placeholder="Enter The Note Title"><?= $_POST['title'] ?? '' ?></textarea>
                                    </div>
                                    <?php if (isset($errors['title'])) : ?>
                                        <p class="text-red-500 text-xs mt-2"><?= $errors['title'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                <div class="mt-2">
                                    <textarea id="body" name="body"  rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                              placeholder=" Here is you note..."><?= $_POST['body'] ?? '' ?></textarea>
                                    <?php if (isset($errors['body'])) : ?>
                                        <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="mt-3 flex items-center justify-end gap-x-6">
                    <a href="/notes" class="text-sm font-semibold leading-6 text-gray-900">Go Back</a>
                    <button type="submit" name="save" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>
        </div>
    </main>

<?php require base_path('Views/Partials/footer.php'); ?>