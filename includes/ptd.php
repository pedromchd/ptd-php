<section class="flex h-full w-full flex-col" x-data="{
    tab: 'cabecalho',
    toggle(id) { this.tab = id },
    isOpen(id) { return this.tab === id }
  }">
  <nav class="mb-4">
    <ul class="flex space-x-2 text-center font-semibold">
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('cabecalho') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('cabecalho')">Cabeçalho</button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('disciplinas') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('disciplinas')">Disciplinas</button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('complementares') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('complementares')">Complementares</button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('pesquisa') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('pesquisa')">Pesquisa</button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('extensao') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('extensao')">Extensão</button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('administracao') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('administracao')">Administração</button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('atividades') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('atividades')">Atividades</button>
      </li>
      <li>
        <button class="inline-block rounded-t-lg border-b-2 p-4" :class="isOpen('observacoes') ? '' : 'border-transparent hover:text-neutral-600 dark:hover:text-neutral-400'" @click="toggle('observacoes')">Observações</button>
      </li>
    </ul>
  </nav>
  <?php include __DIR__ . "/ptd/cabecalho.php" ?>
  <?php include __DIR__ . "/ptd/disciplinas.php" ?>
  <?php include __DIR__ . "/ptd/complementares.php" ?>
  <?php include __DIR__ . "/ptd/pesquisa.php" ?>
  <?php include __DIR__ . "/ptd/extensao.php" ?>
  <?php include __DIR__ . "/ptd/administracao.php" ?>
  <?php include __DIR__ . "/ptd/atividades.php" ?>
  <?php include __DIR__ . "/ptd/observacoes.php" ?>
</section>
