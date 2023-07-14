<html class="h-full bg-white">
  <head>
    <title>Login System</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="h-full"></body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <?php if ($_SESSION['user'] ?? false) : ?>
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Welcome, <?= $_SESSION['user']['username']; ?>!</h2>
        <?php else : ?>
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Welcome To Our Website!</h2>
        <?php endif; ?>
      </div>

      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <?php if ($_SESSION['user'] ?? false) : ?>
            <p class="mt-10 text-center text-sm text-gray-500">
              Wanna Logout?
              <a href="/logout" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Logout!</a>
            </p>
        <?php else : ?>
          <p class="mt-10 text-center text-sm text-gray-500">
              Go To The Login Page!
              <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign in To your account!</a>
          </p>
        <?php endif; ?>
      </div>
    </div>
  </body>
</html>