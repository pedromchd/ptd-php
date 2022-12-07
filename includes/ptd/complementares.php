<?php
if (isset($_POST["atividade"], $_POST["carga_horaria"])) {
  $insert = $db->prepare("INSERT INTO complementares(atividade, carga_horaria) VALUES (:atividade, :carga_horaria");
  $insert->bindValue(":atividade", $_POST["atividade"]);
  $insert->bindValue(":carga_horaria", $_POST["carga_horaria"]);
  $result = $insert->execute();
}
$query = $db->prepare("SELECT * FROM complementares");
$results = $query->execute(); ?>

<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('complementares')">
  <div class="grid h-full grid-cols-3 gap-3 place-items-start">
    <form method="post" class="space-y-3 w-full">
      <label for="" class="block">
        <span class="font-semibold">Atividade Complementar de Ensino</span>
        <input type="text" name="atividade" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Carga Horária Semanal</span>
        <input type="text" name="carga_horaria" id="" class="input" required />
      </label>
      <button type="submit" class="submit py-3">CADASTRAR ATIVIDADE COMPLEMENTAR DE ENSINO</button>
    </form>
    <table class="ptd-table col-span-2 w-full">
      <tbody>
        <tr>
          <td>Atividade Complementar de Ensino</td>
          <td>Carga Horária Semanal</td>
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
          echo "<td><a href='/complementares.php?id='" . $row["id"] . ">Editar</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</article>
