<?php
if (isset($_POST["modalidade"], $_POST["curso"], $_POST["materia"], $_POST["ano_letivo"], $_POST["carga_horaria"])) {
  $insert = $db->prepare("INSERT INTO disciplinas(modalidade, curso, materia, ano_letivo, carga_horaria) VALUES (:modalidade, :curso, :materia, :ano_letivo, :carga_horaria)");
  $insert->bindValue(":modalidade", $_POST["modalidade"]);
  $insert->bindValue(":curso", $_POST["curso"]);
  $insert->bindValue(":materia", $_POST["materia"]);
  $insert->bindValue(":ano_letivo", $_POST["ano_letivo"]);
  $insert->bindValue(":carga_horaria", $_POST["carga_horaria"]);
  $result = $insert->execute();
}
$query = $db->prepare("SELECT * FROM disciplinas");
$results = $query->execute(); ?>

<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('disciplinas')">
  <div class="grid h-full grid-cols-3 gap-3 place-items-start">
    <form method="post" class="space-y-3 w-full">
      <label for="" class="block">
        <span class="font-semibold">Modalidade</span>
        <input type="text" name="modalidade" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Curso</span>
        <input type="text" name="curso" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Matéria</span>
        <input type="text" name="materia" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Série</span>
        <input type="text" name="ano_letivo" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Carga Horária Semanal</span>
        <input type="text" name="carga_horaria" id="" class="input" required />
      </label>
      <button type="submit" class="submit py-3">CADASTRAR ATIVIDADE REFERENTE ÁS AULAS E ATENDIMENTOS</button>
    </form>
    <table class="ptd-table col-span-2 w-full">
      <tbody>
        <tr>
          <td>Modalidade</td>
          <td>Curso</td>
          <td>Matéria</td>
          <td>Série</td>
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
          echo "<td><a href='/disciplinas.php?id='" . $row["id"] . ">Editar</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</article>
