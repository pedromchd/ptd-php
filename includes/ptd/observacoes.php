<?php
if (isset($_POST["observacao"])) {
  $insert = $db->prepare("INSERT INTO observacoes(observacao) VALUES (:observacao)");
  $insert->bindValue(":observacao", $_POST["observacao"]);

  $result = $insert->execute();
}
$query = $db->prepare("SELECT * FROM observacoes");
$results = $query->execute(); ?>

<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('observacoes')">
  <div class="grid h-full grid-cols-3 gap-3 place-items-start">
    <form method="post" class="space-y-3 w-full">
      <label for="" class="block">
        <span class="font-semibold">Observações do Professor</span>
        <input type="text" name="observacao" id="" class="input" required />
      </label>
      <button type="submit" class="submit py-3">GRAVAR OBSERVAÇÕES</button>
    </form>
    <table class="ptd-table col-span-2 w-full">
      <tbody>
        <tr>
          <td>Observações do Professor</td>
          <td>Opções</td>
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
          echo "<td><a href='/obervacoes.php?id='" . $row["id"] . ">Editar</a></td>";
          echo "<td>" . $row["id"] . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</article>
