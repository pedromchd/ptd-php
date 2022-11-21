<section class="flex h-full w-full flex-col" x-data="{
    tab: 'Cabeçalho',
    toggle(id) { this.tab = id },
    isOpen(id) { return this.tab === id }
  }">
  <nav class="mb-4">
    <ul class="flex space-x-2 text-center font-semibold">
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('Cabeçalho') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('Cabeçalho')">
          Cabeçalho
        </button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('Disciplinas') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('Disciplinas')">
          Disciplinas
        </button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('Complementares') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('Complementares')">
          Complementares
        </button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('Pesquisa') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('Pesquisa')">
          Pesquisa
        </button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('Extensão') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('Extensão')">
          Extensão
        </button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('Adminsitração') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('Adminsitração')">
          Adminsitração
        </button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('Atividades') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('Atividades')">
          Atividades
        </button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('Observações') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('Observações')">
          Observações
        </button>
      </li>
    </ul>
  </nav>
  <article class="flex-grow rounded-lg bg-neutral-100 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('Cabeçalho')">
    <?php include __DIR__ . "/cabecalho.php" ?>
</article>
  <article class="flex-grow rounded-lg bg-neutral-100 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('Disciplinas')">
    <?php include __DIR__ . "/disciplinas.php" ?>
</article>
  <article class="flex-grow rounded-lg bg-neutral-100 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('Complementares')">
    <?php include __DIR__ . "/complementares.php" ?>
</article>
  <article class="flex-grow rounded-lg bg-neutral-100 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('Pesquisa')">
    <?php include __DIR__ . "/pesquisa.php" ?>
</article>
  <article class="flex-grow rounded-lg bg-neutral-100 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('Extensão')">
    <?php include __DIR__ . "/extensao.php" ?>
</article>
  <article class="flex-grow rounded-lg bg-neutral-100 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('Adminsitração')">
    <?php include __DIR__ . "/adminsitracao.php" ?>
</article>
  <article class="flex-grow rounded-lg bg-neutral-100 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('Atividades')">
    <?php include __DIR__ . "/atividades.php" ?>
</article>
  <article class="flex-grow rounded-lg bg-neutral-100 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('Observações')">
    <?php include __DIR__ . "/observacoes.php" ?>
</article>
</section>
