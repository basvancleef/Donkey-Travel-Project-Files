<template>
  <Popover class="relative bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6">
      <div class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="#">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto mt-4 sm:h-10" src="../assets/logo/logo.svg" alt="" />
          </a>
        </div>
        <div class="-my-2 -mr-2 md:hidden">
          <PopoverButton
            class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
            <span class="sr-only">Open menu</span>
            <MenuIcon class="h-6 w-6" aria-hidden="true" />
          </PopoverButton>
        </div>
        <PopoverGroup as="nav" class="hidden space-x-10 md:flex">

          <nuxt-link to="/" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</nuxt-link>
          <nuxt-link to="/over-ons" class="text-base font-medium text-gray-500 hover:text-gray-900">Over ons
          </nuxt-link>
          <nuxt-link to="/reserveren" class="text-base font-medium text-gray-500 hover:text-gray-900">Reserveren
          </nuxt-link>
          <nuxt-link to="/contact" class="text-base font-medium text-gray-500 hover:text-gray-900">Contact</nuxt-link>

        </PopoverGroup>
        <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
          <a href="http://localhost/login"
            class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Login</a>
          <a href="http://localhost/register" class="btn ml-8">Registreren
          </a>
        </div>
      </div>
    </div>

    <transition enter-active-class="duration-200 ease-out" enter-from-class="opacity-0 scale-95"
      enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
      leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
      <PopoverPanel focus class="z-50 absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden">
        <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
          <div class="px-5 pt-5 pb-6">
            <div class="flex items-center justify-between">
              <div>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                  alt="Your Company" />
              </div>
              <div class="-mr-2">
                <PopoverButton
                  class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                  <span class="sr-only">Close menu</span>
                  <XIcon class="h-6 w-6" aria-hidden="true" />
                </PopoverButton>
              </div>
            </div>
            <div class="mt-6">
              <nav class="grid gap-y-8">
                <a href="/" class="ml-3 text-base font-medium text-gray-900">
                  Home
                </a>
                <a href="/over-ons" class="ml-3 text-base font-medium text-gray-900">
                  Over ons
                </a>
                <a href="/reserveren" class="ml-3 text-base font-medium text-gray-900">
                  Reserveren
                </a>
                <a href="/contact" class="ml-3 text-base font-medium text-gray-900">
                  Contact
                </a>
              </nav>
            </div>
          </div>
          <div class="space-y-6 py-6 px-5">
            <div>
              <a href="http://localhost/register"
                class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Registreren
              </a>
              <p class="mt-6 text-center text-base font-medium text-gray-500">
                Bestaande klant?
                {{ ' ' }}
                <a href="http://localhost/login" class="text-indigo-600 hover:text-indigo-500">Login</a>
              </p>
            </div>
          </div>
        </div>
      </PopoverPanel>
    </transition>
  </Popover>
</template>

<script setup>
import { Popover, PopoverButton, PopoverGroup, PopoverPanel } from '@headlessui/vue'
import {
  ArrowPathIcon,
  Bars3Icon,
  BookmarkSquareIcon,
  CalendarIcon,
  ChartBarIcon,
  CursorArrowRaysIcon,
  LifebuoyIcon,
  PhoneIcon,
  PlayIcon,
  ShieldCheckIcon,
  Squares2X2Icon,
  XMarkIcon,
  MenuIcon,
  XIcon
} from '@heroicons/vue/outline/index.js'
</script>
