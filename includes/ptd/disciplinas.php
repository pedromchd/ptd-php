<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('disciplinas')">
  <div class="grid grid-cols-2 gap-3">
    <form method="get" class="space-y-3">
      <input class="hidden" type="hidden" name="username" value="<?= $_POST["username"] ?>">
      <input class="hidden" type="hidden" name="password" value="<?= $_POST["password"] ?>">
      <label for="" class="block">
        <span class="font-semibold">Modalidade</span>
        <input type="text" name="modalidade" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Curso</span>
        <input type="text" name="curso" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Disciplina</span>
        <input type="text" name="disciplina" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Matéria</span>
        <input type="text" name="materia" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Série</span>
        <input type="text" name="serie" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Carga Horária Semanal</span>
        <input type="text" name="carga_horaria" id="" class="input" required />
      </label>
      <button type="submit" class="submit py-3">CADASTRAR ATIVIDADE REFERENTE ÁS AULAS E ATENDIMENTOS</button>
    </form>
  </div>
</article>
