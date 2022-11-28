<?php
  if(isset($_GET["sala_permanencia"], $_GET["area_conhecimento"], $_GET["categoria"], $_GET["regime_trabalho"])) {
    $insert = $db->prepare("INSERT INTO cabecalho(sala_permanencia, area_conhecimento, categoria, regime_trabalho) VALUES :sala_permanencia, :area_conhecimento, :categoria, :regime_trabalho");
    $insert->bindValue(":sala_permanencia", $_GET["sala_permanencia"]);
    $insert->bindValue(":area_conhecimento", $_GET["area_conhecimento"]);
    $insert->bindValue(":categoria", $_GET["categoria"]);
    $insert->bindValue(":regime_trabalho", $_GET["regime_trabalho"]);
    $result = $insert->execute();
  }
?>

<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('cabecalho')">
  <div class="grid grid-cols-2 gap-3">
    <form method="get" class="space-y-3">
      <input class="hidden" type="hidden" name="username" value="<?= $_POST["username"] ?>">
      <input class="hidden" type="hidden" name="password" value="<?= $_POST["password"] ?>">
      <label for="" class="block">
        <span class="font-semibold">Sala de Permanência</span>
        <input type="text" name="sala_permanencia" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Área de conhecimento</span>
        <input type="text" name="area_conhecimento" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Categoria</span>
        <input type="text" name="categoria" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Regime de trabalho</span>
        <input type="text" name="regime_trabalho" id="" class="input" required />
      </label>
      <button type="submit" class="submit py-3">GRAVAR CABEÇALHO DO PTD</button>
    </form>
  </div>
</article>
