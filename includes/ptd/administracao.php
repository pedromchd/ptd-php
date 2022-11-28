<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('administracao')">
  <div class="grid grid-cols-2 gap-3">
    <form method="get" class="space-y-3">
      <input class="hidden" type="hidden" name="username" value="<?= $_POST["username"] ?>">
      <input class="hidden" type="hidden" name="password" value="<?= $_POST["password"] ?>">
      <label for="" class="block">
        <span class="font-semibold">Atividade Administrativa</span>
        <input type="text" name="atividade_adm" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Portaria</span>
        <input type="text" name="portaria" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Carga Horária Semanal</span>
        <input type="text" name="carga_horaria" id="" class="input" required />
      </label>
      <button type="submit" class="submit py-3">CADASTRAR ATIVIDADE ADMINISTRATIVA</button>
    </form>
  </div>
</article>
