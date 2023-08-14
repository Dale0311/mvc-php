<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
  <div class="mx-auto max-w-lg text-center">
    <h1 class="text-2xl font-bold sm:text-3xl">Register to your account</h1>

    <p class="mt-4 text-gray-500">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla
      eaque error neque ipsa culpa autem, at itaque nostrum!
    </p>
  </div>

  <form method="post" class="mx-auto mb-0 mt-8 w-1/2 space-y-4">
    <div class="flex justify-between gap-2">

      <div class="relative flex-1">
        <input
          name="firstname"
          type="text"
          class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
          placeholder="Enter firstname"
        />

      </div>


      <div class="relative flex-1">
        <input
          name="lastname"
          type="text"
          class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
          placeholder="Enter lastname"
        />

      </div>
    </div>
    <div>
      <label for="email" class="sr-only">Email</label>

      <div class="relative">
        <input
          name="email"
          type="email"
          class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
          placeholder="Enter email"
        />

      </div>
    </div>

    <div>
      <label for="password" class="sr-only">Password</label>

      <div class="relative">
        <input
          name="password"
          type="password"
          class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
          placeholder="Enter password"
        />
      </div>
    </div>

    <div class="flex items-center justify-between">
      <p class="text-sm text-gray-500">
        No account?
        <a class="underline" href="/login">Sign in</a>
      </p>

      <button
        type="submit"
        class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
      >
        Sign in
      </button>
    </div>
  </form>
</div>