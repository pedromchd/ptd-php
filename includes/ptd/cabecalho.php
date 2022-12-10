<?php
if (isset($_POST["sala_permanencia"], $_POST["area_conhecimento"], $_POST["categoria"], $_POST["regime_trabalho"])) {
  $insert = $db->prepare("INSERT INTO cabecalho(sala_permanencia, area_conhecimento, categoria, regime_trabalho) VALUES (:sala_permanencia, :area_conhecimento, :categoria, :regime_trabalho)");
  $insert->bindValue(":sala_permanencia", $_POST["sala_permanencia"]);
  $insert->bindValue(":area_conhecimento", $_POST["area_conhecimento"]);
  $insert->bindValue(":categoria", $_POST["categoria"]);
  $insert->bindValue(":regime_trabalho", $_POST["regime_trabalho"]);
  $insert->execute();
}
$query = $db->prepare("SELECT * FROM cabecalho");
$results = $query->execute();
?>

<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('cabecalho')">
  <div class="grid h-full grid-cols-3 gap-3 place-items-start">
    <form method="post" action="ptd.php?tab=cabecalho" class="space-y-3 w-full">
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
