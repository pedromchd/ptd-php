<?php
if (isset($_POST["atividade_adm"], $_POST["portaria"], $_POST["carga_horaria"])) {
  $insert = $db->prepare("INSERT INTO administracao(atividade_adm, portaria, carga_horaria) VALUES (:atividade_adm, :portaria, :carga_horaria)");
  $insert->bindValue(":atividade_adm", $_POST["atividade_adm"]);
  $insert->bindValue(":portaria", $_POST["portaria"]);
  $insert->bindValue(":carga_horaria", $_POST["carga_horaria"]);
  $insert->execute();
}
if (isset($_POST["editar"])) {
  $query = $db->prepare("SELECT * FROM administracao WHERE id = :id");
  $query->bindValue(":id", $_GET["editar"]);
  $results = $query->execute();
  while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
    $atividade_adm = $row["atividade_adm"];
    $portaria = $row["portaria"];
    $carga_horaria = $row["carga_horaria"];
  }
}
$query = $db->prepare("SELECT * FROM administracao");
$results = $query->execute();
?>

<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('administracao')">
  <div class="grid h-full grid-cols-3 gap-3 place-items-start">
    <form method="post" action="ptd.php?tab=administracao" class="space-y-3 w-full">
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
    <table class="ptd-table col-span-2 w-full">
      <tbody>
        <tr class="font-bold">
          <td>Atividade Administrativa</td>
          <td>Portaria</td>
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
          echo "<td><a href='/ptd.php?tab=administracao&editar=" . $row["id"] . "'>Editar</a></td>";
          echo "<td><a href='/ptd.php?tab=administracao&deletar=" . $row["id"] . "'>Deletar</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</article>
