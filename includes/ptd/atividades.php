<?php
if (isset($_POST["atividade"], $_POST["local"], $_POST["dia_semana"], $_POST["hora_inicio"], $_POST["hora_termino"])) {
  if (isset($_POST["submit"]) && $_POST["submit"]) {
    $insert = $db->prepare("UPDATE atividades SET atividade = :atividade, local = :local, dia_semana = :dia_semana, hora_inicio = :hora_inicio, hora_termino = :hora_termino WHERE id = :id");
    $insert->bindValue(":id", $_POST["submit"]);
  } else {
    $insert = $db->prepare("INSERT INTO atividades(atividade, local, dia_semana, hora_inicio, hora_termino) VALUES (:atividade, :local, :dia_semana, :hora_inicio, :hora_termino)");
  }
  $insert->bindValue(":atividade", $_POST["atividade"]);
  $insert->bindValue(":local", $_POST["local"]);
  $insert->bindValue(":dia_semana", $_POST["dia_semana"]);
  $insert->bindValue(":hora_inicio", $_POST["hora_inicio"]);
  $insert->bindValue(":hora_termino", $_POST["hora_termino"]);
  $insert->execute();
}
$atividade = "";
$local = "";
$dia_semana = "";
$hora_inicio = "";
$hora_termino = "";
$id = "";
if (isset($_GET["tab"], $_GET["editar"]) && $_GET["tab"] === "atividades") {
  $query = $db->prepare("SELECT * FROM atividades WHERE id = :id");
  $query->bindValue(":id", $_GET["editar"]);
  $results = $query->execute();
  $row = $results->fetchArray(SQLITE3_ASSOC);
  $id = $row["id"];
  $atividade = $row["atividade"];
  $local = $row["local"];
  $dia_semana = $row["dia_semana"];
  $hora_inicio = $row["hora_inicio"];
  $hora_termino = $row["hora_termino"];
}
$query = $db->prepare("SELECT * FROM atividades");
$results = $query->execute();
?>

<article class="flex-grow rounded-lg bg-neutral-200 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('atividades')">
  <div class="grid h-full grid-cols-3 gap-3 place-items-start">
    <form method="post" action="ptd.php?tab=atividades" class="space-y-3 w-full">
      <label for="" class="block">
        <span class="font-semibold">Atividades</span>
        <input type="text" name="atividade" value="<?= $atividade ?>" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Local</span>
        <input type="text" name="local" value="<?= $local ?>" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Dia da Semana</span>
        <input type="text" name="dia_semana" value="<?= $dia_semana ?>" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Hora de Início</span>
        <input type="text" name="hora_inicio" value="<?= $hora_inicio ?>" class="input" required />
      </label>
      <label for="" class="block">
        <span class="font-semibold">Hora de Término</span>
        <input type="text" name="hora_termino" value="<?= $hora_termino ?>" class="input" required />
      </label>
      <button type="submit" name="submit" value="<?= $id ?>" class="submit py-3">CADASTRAR ATIVIDADE REFERENTE ÁS AULAS E ATENDIMENTOS</button>
    </form>
    <table class="ptd-table col-span-2 w-full">
      <tbody>
        <tr class="font-bold">
          <td>Atividades</td>
          <td>Local</td>
          <td>Dia da Semana</td>
          <td>Hora de Início</td>
          <td>Hora de Término</td>
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
          echo "<td><a href='/ptd.php?tab=atividades&editar=" . $row["id"] . "'>Editar</a></td>";
          echo "<td><a href='/ptd.php?tab=atividades&deletar=" . $row["id"] . "'>Deletar</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</article>
