<?php
if (isset($_POST["observacao"])) {
  if (isset($_POST["submit"]) && $_POST["submit"]) {
    $insert = $db->prepare("UPDATE observacoes SET observacao = :observacao WHERE id = :id");
    $insert->bindValue(":id", $_POST["submit"]);
  } else {
    $insert = $db->prepare("INSERT INTO observacoes(observacao) VALUES (:observacao)");
  }
  $insert->bindValue(":observacao", $_POST["observacao"]);
  $insert->execute();
}
$observacao = "";
$id = "";
if (isset($_GET["tab"], $_GET["editar"]) && $_GET["tab"] === "observacoes") {
  $query = $db->prepare("SELECT * FROM observacoes WHERE id = :id");
  $query->bindValue(":id", $_GET["editar"]);
  $results = $query->execute();
  $row = $results->fetchArray(SQLITE3_ASSOC);
  $id = $row["id"];
  $observacao = $row["observacao"];
}
$query = $db->prepare("SELECT * FROM observacoes");
$results = $query->execute(); ?>

<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('observacoes')">
  <div class="grid h-full grid-cols-3 gap-3 place-items-start">
    <form method="post" action="ptd.php?tab=observacoes" class="space-y-3 w-full">
      <label for="" class="block">
        <span class="font-semibold">Observações do Professor</span>
        <input type="text" name="observacao" value="<?= $observacao ?>" class="input" required />
      </label>
      <button type="submit" name="submit" value="<?= $id ?>" class="submit py-3">GRAVAR OBSERVAÇÕES</button>
    </form>
    <table class="ptd-table col-span-2 w-full">
      <tbody>
        <tr class="font-bold">
          <td>Observações do Professor</td>
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
          echo "<td><a href='/ptd.php?tab=observacoes&editar=" . $row["id"] . "'>Editar</a></td>";
          echo "<td><a href='/ptd.php?tab=observacoes&deletar=" . $row["id"] . "'>Deletar</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</article>
