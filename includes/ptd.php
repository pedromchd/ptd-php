<section class="prose">
  <article class="prose rounded-lg bg-neutral-100 p-3 dark:bg-neutral-900">
    <table class="ptd-table">
      <tr>
        <td>Período</td>
        <td>Professor</td>
        <td>Coordenação de Curso</td>
        <td>Direção de Extensão</td>
        <td>Direção de Pesquisa</td>
        <td>Direção de Ensino</td>
        <td>Direção Geral</td>
      </tr>
      <?php
      $results = $db->query("SELECT periodo, status FROM ptd");
      while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
        foreach ($row as $value) {
          echo $value;
        }
      }
      ?>
    </table>
  </article>
</section>

<!-- <div class="wrapper grid max-w-7xl grid-cols-3 gap-4">
  <div class="transition-bg-color col-span-2 space-y-3 rounded-3xl bg-gray-100 p-8 shadow-md duration-200 dark:bg-gray-800">
    <div class="flex items-center justify-between">
      <span class="text-lg font-semibold">Coordenador(a) de Curso: Franciane de Lima Coimbra</span>
      <form action="editar_dados_usuario.html" method="get">
        <input type="hidden" name="id" value="13" />
        <input type="submit" name="botao_editar_perfil" value="Alterar Coordenador de Curso" class="transition-bg-color cursor-pointer rounded-lg bg-gray-200 px-2 py-1 font-light shadow-md duration-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600" />
      </form>
    </div>
    <div class="border border-gray-400 shadow-md">
      <table class="w-full">
        <tbody class="divide-y divide-gray-400">
          <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-300 text-center font-semibold duration-200 dark:bg-gray-800">
            <td class="p-2" colspan="2">PTD</td>
            <td class="p-2">Professor</td>
            <td class="p-2">Coordenação de Curso</td>
            <td class="p-2">Direção de Extensão</td>
            <td class="p-2">Direção de Pesquisa</td>
            <td class="p-2">Direção de Ensino</td>
            <td class="p-2">Direção Geral</td>
          </tr>
          <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-100 duration-200 dark:bg-gray-600">
            <td class="p-2">1</td>
            <td class="p-2">2021/1</td>
            <td class="p-2">
              <form action="edita_ptd_2.html" method="get">
                <input type="hidden" name="periodo" value="2021/1" />
                <input type="hidden" name="id" value="13" />
                <button type="submit" name="criarPTD" value="Editar PTD" title="Editar PTD" class="h-10 w-full rounded-lg border border-gray-400 p-1 text-center uppercase">Editar</button>
              </form>
            </td>
            <td class="p-2"></td>
            <td class="p-2"></td>
            <td class="p-2"></td>
            <td class="p-2"></td>
            <td class="p-2"></td>
          </tr>
          <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-200 duration-200 dark:bg-gray-700">
            <td class="p-2">1</td>
            <td class="p-2">2021/2</td>
            <td class="p-2"></td>
            <td class="p-2">
              <form action="visualiza_ptd.html" method="get">
                <input type="hidden" name="id_ptd" value="171" />
                <input type="hidden" name="id" value="13" />
                <button type="submit" name="botao_visualiza" value="PTD" title="Visualizar PTD" class="h-10 w-full rounded-lg border border-gray-400 p-1 text-center uppercase">Ver</button>
              </form>
            </td>
            <td class="p-2"></td>
            <td class="p-2"></td>
            <td class="p-2"></td>
            <td class="p-2"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="space-y-1">
      <span class="text-xl font-semibold italic">Observações:</span>
      <p class="text-justify">Nenhuma observação no momento.</p>
    </div>
  </div>
  <div class="transition-bg-color space-y-2 rounded-3xl bg-gray-100 p-8 shadow-md duration-200 dark:bg-gray-800">
    <span class="text-xl font-semibold italic">"Onde está o PTD?"</span>
    <p class="text-justify">Na tabela ao lado, o botão <em class="italic">"EDITAR"</em> indica que o professor pode editar o seu PTD e encontra-se na coluna <em class="italic">"Professor"</em> até que o PTD seja submetido ao coordenador. Uma vez submetido o PTD ao coordenador, o botão <em class="italic">"VER"</em> estará disponível para acesso em modo de visualização na coluna correspondente onde o PTD se encontrar. Caso o coordenador ou as direções coloquem observações, elas podem ser visualizadas logo abaixo da tabela. Você somente terá submetido o PTD ao Coordenador de Curso se aparecer o botão <em class="italic">"VER"</em> na respectiva coluna desta mesma tabela. Se estiver aparecendo o botão <em class="italic">"EDITAR"</em> é porque você ainda não submeteu o seu PTD ao Coordenador de Curso.</p>
  </div>
</div> -->
