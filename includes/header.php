<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sistema de Administração de Planos de Trabalho Docente</title>
  <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="./css/font-awesome.min.css" />
  <script defer src="./js/alpine-mask.min.js"></script>
  <script defer src="./js/alpine.min.js"></script>
  <script src="./js/jquery.min.js"></script>
</head>

<body class="antialised flex min-h-screen flex-col text-neutral-900" x-data="{'darkMode': false}" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode')); $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))">
  <div :class="{'dark': darkMode === true}">
    <header class="transition-colors flex w-full items-center justify-between bg-neutral-100 px-6 py-3 duration-200 dark:bg-neutral-900 md:px-8">
      <div class="flex items-center justify-end space-x-2">
        <span class="text-sm text-neutral-900 duration-200 dark:text-neutral-500">Light</span>
        <label for="toggle" class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-neutral-300 p-1 duration-200 ease-in-out dark:bg-gray-600">
          <div class="toggle-dot h-4 w-4 transform rounded-full bg-white shadow-md duration-200 ease-in-out dark:translate-x-3"></div>
        </label>
        <span class="text-sm text-neutral-500 duration-200 dark:text-neutral-100">Dark</span>
        <input id="toggle" type="checkbox" class="hidden" :value="darkMode" @change="darkMode = !darkMode" />
      </div>
    </header>
    <main>
