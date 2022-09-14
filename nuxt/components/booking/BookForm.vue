<template>
  <div class="antialiased font-sans bg-gray-200 overflow-hidden">
    <div class="" style="">
      <div class="overflow-hidden bg-white py-16 px-4 sm:px-6 lg:px-8 lg:py-24">
        <div class="relative mx-auto max-w-xl"> <svg class="absolute left-full translate-x-1/2 transform" width="404"
            height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
            <defs>
              <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
              </pattern>
            </defs>
            <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)"></rect>
          </svg> <svg class="absolute right-full bottom-0 -translate-x-1/2 transform" width="404" height="404"
            fill="none" viewBox="0 0 404 404" aria-hidden="true">
            <defs>
              <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
              </pattern>
            </defs>
            <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)"></rect>
          </svg>
          <div class="text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Reserveer hier uw Donkey Travel</h2>
            <p class="mt-4 text-lg leading-6 text-gray-500">Bij het invullen van dit formulier komt er een aanvraag
              terecht bij de beheerders. Deze moeten uw boeking binnen 1 dag goedkeuren of afwijzen. U ontvangt hierover
              een mail.</p>
          </div>
          <div class="mt-12">
            <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
              <div> <label for="first-name" class="block text-sm font-medium text-gray-700">Voornaam</label>
                <div class="mt-1"> <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                    class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-red-500 focus:ring-red-500">
                </div>
              </div>
              <div> <label for="last-name" class="block text-sm font-medium text-gray-700">Achternaam</label>
                <div class="mt-1"> <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                    class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-red-500 focus:ring-red-500">
                </div>
              </div>
              <div class="sm:col-span-2"> <label for="company"
                  class="block text-sm font-medium text-gray-700">Telefoon</label>
                <div class="mt-1"> <input type="phone" name="phone" id="phone" autocomplete="organization"
                    class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-red-500 focus:ring-red-500">
                </div>
              </div>
              <div class="sm:col-span-2"> <label for="email"
                  class="block text-sm font-medium text-gray-700">E-mail</label>
                <div class="mt-1"> <input id="email" name="email" type="email" autocomplete="email"
                    class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-red-500 focus:ring-red-500">
                </div>
              </div>
              <div class="sm:col-span-2"> <label for="date" class="block text-sm font-medium text-gray-700">Datum
                  1</label>
                <div class="mt-1"> <input id="date" name="date" type="date" autocomplete="date"
                    class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-red-500 focus:ring-red-500">
                </div>
              </div>
              <div class="sm:col-span-2"> <label for="date" class="block text-sm font-medium text-gray-700">Datum
                  2</label>
                <div class="mt-1"> <input id="date" name="date" type="date" autocomplete="date"
                    class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-red-500 focus:ring-red-500">
                </div>
              </div>
              <div class="sm:col-span-2"> <label for="message"
                  class="block text-sm font-medium text-gray-700">Message</label>
                <div class="mt-1"> <textarea id="message" name="message" rows="4"
                    class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-red-500 focus:ring-red-500"></textarea>
                </div>
              </div>
              <div class="sm:col-span-2">
                <div class="flex items-start">
                  <!-- <div class="flex-shrink-0"> <button type="button"
                      class="bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                      x-data="{ on: false }" role="switch" aria-checked="false" :aria-checked="on.toString()"
                      @click="on = !on" x-state:on="Enabled" x-state:off="Not Enabled"
                      :class="{ 'bg-red-600': on, 'bg-gray-200': !(on) }"> <span class="sr-only">Agree to
                        policies</span> <span aria-hidden="true"
                        class="translate-x-0 inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                        x-state:on="Enabled" x-state:off="Not Enabled"
                        :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span> </button>
                  </div>
                  <div class="ml-3">
                    <p class="text-base text-gray-500"> By selecting this, you agree to the
                      <a href="#" class="font-medium text-gray-700 underline">Privacy Policy</a>
                      <a href="#" class="font-medium text-gray-700 underline">Cookie Policy</a>.
                    </p>
                  </div> -->
                </div>
              </div>
              <div class="sm:col-span-2"> <button type="submit"
                  class="inline-flex w-full items-center justify-center rounded-md border border-transparent bg-red-500 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Verzenden</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
