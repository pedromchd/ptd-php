<?php
if (isset($_POST["sala_permanencia"], $_POST["area_conhecimento"], $_POST["categoria"], $_POST["regime_trabalho"])) {
  if (isset($_POST["submit"]) && $_POST["submit"]) {
    $insert = $db->prepare("UPDATE cabecalho SET sala_permanencia = :sala_permanencia, area_conhecimento = :area_conhecimento, categoria = :categoria, regime_trabalho = :regime_trabalho WHERE id = :id");
    $insert->bindValue(":id", $_POST["submit"]);
  } else {
    $insert = $db->prepare("INSERT INTO cabecalho(sala_permanencia, area_conhecimento, categoria, regime_trabalho) VALUES (:sala_permanencia, :area_conhecimento, :categoria, :regime_trabalho)");
  }
  $insert->bindValue(":sala_permanencia", $_POST["sala_permanencia"]);
  $insert->bindValue(":area_conhecimento", $_POST["area_conhecimento"]);
  $insert->bindValue(":categoria", $_POST["categoria"]);
  $insert->bindValue(":regime_trabalho", $_POST["regime_trabalho"]);
  $insert->execute();
}
$sala_permanencia = "";
$area_conhecimento = "";
$categoria = "";
$regime_trabalho = "";
$id = "";
if (isset($_GET["tab"], $_GET["editar"]) && $_GET["tab"] === "cabecalho") {
  $query = $db->prepare("SELECT * FROM cabecalho WHERE id = :id");
  $query->bindValue(":id", $_GET["editar"]);
  $results = $query->execute();
  $row = $results->fetchArray(SQLITE3_ASSOC);
  $id = $row["id"];
  $sala_permanencia = $row["sala_permanencia"];
  $area_conhecimento = $row["area_conhecimento"];
  $categoria = $row["categoria"];
  $regime_trabalho = $row["regime_trabalho"];
}
$query = $db->prepare("SELECT * FROM cabecalho");
$results = $query->execute();
?>

<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('cabecalho')">
  <div class="grid h-full grid-cols-3 gap-3 place-items-start">
    <form method="post" action="ptd.php?tab=cabecalho" class="space-y-3 w-full">
      <label for="" class="block">
        <span class="font-semibold">Sala de Permanência</span>
        <input type="text" name="sala_permanencia" value="<?= $sala_permanencia ?>" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Área de conhecimento</span>
        <input type="text" name="area_conhecimento" value="<?= $area_conhecimento ?>" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Categoria</span>
        <select name="categoria" class="input" required>
          <option selected disabled>Selecionar</option>
          <option value="Magistério EBTT">Magistério EBTT</option>
          <option value="Magistério ES">Magistério ES</option>
        </select>
      </label>
      <label for="" class="block">
        <span class="font-semibold">Regime de trabalho</span>
        <select name="regime_trabalho" class="input" required>
          <option selected disabled>Selecionar</option>
          <option value="20h">20h</option>
          <option value="40h">40h</option>
          <option value="DE">DE</option>
          <option value="Visitante">Visitante</option>
        </select>
      </label>
      <button type="submit" name="submit" value="<?= $id ?>" class="submit py-3">GRAVAR CABEÇALHO DO PTD</button>
      <script>
        if("<?= $categoria ?>") {
          document.forms[0].categoria.value = "<?= $categoria ?>";
        }
        if("<?= $regime_trabalho ?>") {
          document.forms[0].regime_trabalho.value = "<?= $regime_trabalho ?>";
        }
      </script>
    </form>
    <table class="ptd-table col-span-2 w-full">
      <tbody>
        <tr class="font-bold">
          <td>Sala de Permanência</td>
          <td>Área de Conhecimento</td>
          <td>Categoria</td>
          <td>Regime de Trabalho</td>
          <td colspan="2">Opções</td>
        </tr>
        <?php
        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
          echo "<tr>";
          foreach ($row as $key => $value) {
            if ($key === "id") {
              continue;
            }
            echo "<td>" . $value . "</td>";
          }
          echo "<td><a href='/ptd.php?tab=cabecalho&editar=" . $row["id"] . "'>Editar</a></td>";
          echo "<td><a href='/ptd.php?tab=cabecalho&deletar=" . $row["id"] . "'>Deletar</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</article>
