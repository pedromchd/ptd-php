<?php
if (isset($_POST["modalidade"], $_POST["curso"], $_POST["materia"], $_POST["serie"], $_POST["carga_horaria"])) {
  if (isset($_POST["submit"]) && $_POST["submit"]) {
    $insert = $db->prepare("UPDATE disciplinas SET modalidade = :modalidade, curso = :curso, materia = :materia, serie = :serie, carga_horaria = :carga_horaria WHERE id = :id");
    $insert->bindValue(":id", $_POST["submit"]);
  } else {
    $insert = $db->prepare("INSERT INTO disciplinas(modalidade, curso, materia, serie, carga_horaria) VALUES (:modalidade, :curso, :materia, :serie, :carga_horaria)");
  }
  $insert->bindValue(":modalidade", $_POST["modalidade"]);
  $insert->bindValue(":curso", $_POST["curso"]);
  $insert->bindValue(":materia", $_POST["materia"]);
  $insert->bindValue(":serie", $_POST["serie"]);
  $insert->bindValue(":carga_horaria", $_POST["carga_horaria"]);
  $insert->execute();
}
$modalidade = "";
$curso = "";
$materia = "";
$serie = "";
$carga_horaria = "";
$id = "";
if (isset($_GET["tab"], $_GET["editar"]) && $_GET["tab"] === "disciplinas") {
  $query = $db->prepare("SELECT * FROM disciplinas WHERE id = :id");
  $query->bindValue(":id", $_GET["editar"]);
  $results = $query->execute();
  $row = $results->fetchArray(SQLITE3_ASSOC);
  $id = $row["id"];
  $modalidade = $row["modalidade"];
  $curso = $row["curso"];
  $materia = $row["materia"];
  $serie = $row["serie"];
  $carga_horaria = $row["carga_horaria"];
}
$query = $db->prepare("SELECT * FROM disciplinas");
$results = $query->execute();

$query = $db->prepare("SELECT modalidade FROM modalidades");
$modalidades = $query->execute();
$query = $db->prepare("SELECT curso FROM cursos");
$cursos = $query->execute();
$query = $db->prepare("SELECT materia FROM materias");
$materias = $query->execute();
?>

<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('disciplinas')">
  <div class="grid h-full grid-cols-3 gap-3 place-items-start">
    <form method="post" action="ptd.php?tab=disciplinas" class="space-y-3 w-full">
      <label for="" class="block">
        <span class="font-semibold">Modalidade</span>
        <select name="modalidade" class="input" required>
          <option selected disabled>Selecionar</option>
          <?php
          while ($row = $modalidades->fetchArray(SQLITE3_ASSOC)) {
            foreach ($row as $value) {
              echo "<option value='" . $value . "'>" . $value . "</option>";
            }
          }
          ?>
        </select>
      </label>
      <label for="" class="block">
        <span class="font-semibold">Curso</span>
        <select name="curso" class="input" required>
          <option selected disabled>Selecionar</option>
          <?php
          while ($row = $cursos->fetchArray(SQLITE3_ASSOC)) {
            foreach ($row as $value) {
              echo "<option value='" . $value . "'>" . $value . "</option>";
            }
          }
          ?>
        </select>
      </label>
      <label for="" class="block">
        <span class="font-semibold">Matéria</span>
        <select name="materia" class="input" required>
          <option selected disabled>Selecionar</option>
          <?php
          while ($row = $materias->fetchArray(SQLITE3_ASSOC)) {
            foreach ($row as $value) {
              echo "<option value='" . $value . "'>" . $value . "</option>";
            }
          }
          ?>
        </select>
      </label>
      <label for="" class="block">
        <span class="font-semibold">Série</span>
        <input type="text" name="serie" value="<?= $serie ?>" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Carga Horária Semanal</span>
        <input type="text" name="carga_horaria" value="<?= $carga_horaria ?>" class="input" required />
      </label>
      <button type="submit" name="submit" value="<?= $id ?>" class="submit py-3">CADASTRAR ATIVIDADE REFERENTE ÁS AULAS E ATENDIMENTOS</button>
      <script>
        if ("<?= $modalidade ?>") {
          document.forms[1].modalidade.value = "<?= $modalidade ?>";
        }
        if ("<?= $curso ?>") {
          document.forms[1].curso.value = "<?= $curso ?>";
        }
        if ("<?= $materia ?>") {
          document.forms[1].materia.value = "<?= $materia ?>";
        }
      </script>
    </form>
    <table class="ptd-table col-span-2 w-full">
      <tbody>
        <tr class="font-bold">
          <td>Modalidade</td>
          <td>Curso</td>
          <td>Matéria</td>
          <td>Série</td>
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
          echo "<td><a href='/ptd.php?tab=disciplinas&editar=" . $row["id"] . "'>Editar</a></td>";
          echo "<td><a href='/ptd.php?tab=disciplinas&deletar=" . $row["id"] . "'>Deletar</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</article>
