<?php
if (isset($_POST["atividade_comp"], $_POST["carga_horaria"])) {
  $insert = $db->prepare("INSERT INTO complementares(atividade_comp, carga_horaria) VALUES (:atividade_comp, :carga_horaria)");
  $insert->bindValue(":atividade_comp", $_POST["atividade_comp"]);
  $insert->bindValue(":carga_horaria", $_POST["carga_horaria"]);
  $insert->execute();
}
$query = $db->prepare("SELECT * FROM complementares");
$results = $query->execute();
?>

<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('complementares')">
  <div class="grid h-full grid-cols-3 gap-3 place-items-start">
    <form method="post" action="ptd.php?tab=complementares" class="space-y-3 w-full">
      <label for="" class="block">
        <span class="font-semibold">Atividade Complementar de Ensino</span>
        <input type="text" name="atividade_comp" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Carga Horária Semanal</span>
        <input type="text" name="carga_horaria" id="" class="input" required />
      </label>
      <button type="submit" class="submit py-3">CADASTRAR ATIVIDADE COMPLEMENTAR DE ENSINO</button>
    </form>
    <table class="ptd-table col-span-2 w-full">
      <tbody>
        <tr class="font-bold">
          <td>Atividade Complementar de Ensino</td>
          <td>Carga Horária Semanal</td>
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
          echo "<td><a href='/ptd.php?tab=complementares&editar=" . $row["id"] . "'>Editar</a></td>";
          echo "<td><a href='/ptd.php?tab=complementares&deletar=" . $row["id"] . "'>Deletar</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</article>
