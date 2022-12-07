<?php
if (isset($_POST["atividade"], $_POST["local"], $_POST["dia_semana"], $_POST["hora_inicio"], $_POST["hora_termino"])) {
  $insert = $db->prepare("INSERT INTO atividades(atividade, local, dia_semana, hora_inicio, hora_termino) VALUES (:atividade, :local, :dia_semana, :hora_inicio, :hora_termino)");
  $insert->bindValue(":atividade", $_POST["atividade"]);
  $insert->bindValue(":local", $_POST["local"]);
  $insert->bindValue(":dia_semana", $_POST["dia_semana"]);
  $insert->bindValue(":hora_inicio", $_POST["hora_inicio"]);
  $insert->bindValue(":hora_termino", $_POST["hora_termino"]);
  $result = $insert->execute();
}
$query = $db->prepare("SELECT * FROM atividades");
$results = $query->execute(); ?>


<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('atividades')">
  <div class="grid h-full grid-cols-3 gap-3 place-items-start">
    <form method="post" action="ptd.php?tab=atividades" class="space-y-3 w-full">
      <label for="" class="block">
        <span class="font-semibold">Atividades</span>
        <input type="text" name="atividade" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Local</span>
        <input type="text" name="local" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Dia da Semana</span>
        <input type="text" name="dia_semana" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Hora de Início</span>
        <input type="text" name="hora_inicio" id="" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Hora de Término</span>
        <input type="text" name="hora_termino" id="" class="input" required />
      </label>
      <button type="submit" class="submit py-3">CADASTRAR ATIVIDADE REFERENTE ÁS AULAS E ATENDIMENTOS</button>
    </form>
    <table class="ptd-table col-span-2 w-full">
      <tbody>
        <tr>
          <td>Atividades</td>
          <td>Local</td>
          <td>Dia da Semana</td>
          <td>Hora de Início</td>
          <td>Hora de Término</td>
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
          echo "<td><a href='/atividades.php?id='" . $row["id"] . ">Editar</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</article>
