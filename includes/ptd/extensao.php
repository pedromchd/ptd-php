<?php
if (isset($_POST["atividade_ext"], $_POST["carga_horaria"])) {
  if (isset($_POST["submit"]) && $_POST["submit"]) {
    $insert = $db->prepare("UPDATE extensao SET atividade_ext = :atividade_ext, carga_horaria = :carga_horaria WHERE id = :id");
    $insert->bindValue(":id", $_POST["submit"]);
  } else {
    $insert = $db->prepare("INSERT INTO extensao(atividade_ext, carga_horaria) VALUES (:atividade_ext, :carga_horaria)");
  }
    $insert->bindValue(":atividade_ext", $_POST["atividade_ext"]);
  $insert->bindValue(":carga_horaria", $_POST["carga_horaria"]);
  $insert->execute();
}
$atividade_ext = "";
$carga_horaria = "";
$id = "";
if (isset($_GET["tab"], $_GET["editar"]) && $_GET["tab"] === "extensao") {
  $query = $db->prepare("SELECT * FROM extensao WHERE id = :id");
  $query->bindValue(":id", $_GET["editar"]);
  $results = $query->execute();
  $row = $results->fetchArray(SQLITE3_ASSOC);
  $id = $row["id"];
  $atividade_ext = $row["atividade_ext"];
  $carga_horaria = $row["carga_horaria"];
}
$query = $db->prepare("SELECT * FROM extensao");
$results = $query->execute(); ?>

<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('extensao')">
  <div class="grid h-full grid-cols-3 gap-3 place-items-start">
    <form method="post" action="ptd.php?tab=extensao" class="space-y-3 w-full">
      <label for="" class="block">
        <span class="font-semibold">Atividade de Extensão</span>
        <input type="text" name="atividade_ext" value="<?= $atividade_ext ?>" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Carga Horária Semanal</span>
        <input type="text" name="carga_horaria" value="<?= $carga_horaria ?>" class="input" required />
      </label>
      <button type="submit" name="submit" value="<?= $id ?>" class="submit py-3">CADASTRAR ATIVIDADE DE EXTENSÃO</button>
    </form>
    <table class="ptd-table col-span-2 w-full">
      <tbody>
        <tr class="font-bold">
          <td>Atividade de Extensão</td>
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
          echo "<td><a href='/ptd.php?tab=extensao&editar=" . $row["id"] . "'>Editar</a></td>";
          echo "<td><a href='/ptd.php?tab=extensao&deletar=" . $row["id"] . "'>Deletar</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</article>
