<section
  class="flex h-full w-full flex-col"
  x-data="{
    tab: 'cabecalho',
    toggle(id) { this.tab = id },
    isOpen(id) { return this.tab === id }
  }"
>
  <nav class="mb-4">
    <ul class="flex space-x-2 text-center font-semibold">
      <li><button class="inline-block rounded-t-lg border-b-2 p-4" @click="toggle('cabecalho')">Cabeçalho</button></li>
      <li><button class="inline-block rounded-t-lg border-b-2 p-4" @click="toggle('disciplinas')">Disciplinas</button></li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:text-neutral-600 dark:hover:text-neutral-400">Dashboard</button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:text-neutral-600 dark:hover:text-neutral-400">Settings</button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:text-neutral-600 dark:hover:text-neutral-400">Contacts</button>
      </li>
    </ul>
  </nav>
  <article class="flex-grow rounded-lg bg-neutral-100 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('cabecalho')">
    <p class="text-neutral-600 dark:text-neutral-400">Cabeçalho</p>
  </article>
  <article class="flex-grow rounded-lg bg-neutral-100 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('disciplinas')">
    <p class="text-neutral-600 dark:text-neutral-400">Disciplinas</p>
  </article>
</section>
