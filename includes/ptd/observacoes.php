<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('observacoes')">
  <div class="grid grid-cols-2 gap-3">
    <form method="get" class="space-y-3">
      <input class="hidden" type="hidden" name="username" value="<?= $_POST["username"] ?>">
      <input class="hidden" type="hidden" name="password" value="<?= $_POST["password"] ?>">
      <label for="" class="block">
        <span class="font-semibold">Observações do Professor</span>
        <input type="text" name="observacao" id="" class="input" required />
      </label>
      <button type="submit" class="submit py-3">GRAVAR OBSERVAÇÕES</button>
    </form>
  </div>
</article>
