<div class="wrapper h-110 max-h-110 grid max-w-7xl grid-cols-3 gap-0" x-data="{'openedTab': 1}">
  <div class="w-205 max-w-205 transition-bg-color col-span-2 grid h-full grid-cols-5 rounded-3xl bg-gray-200 shadow-md duration-200 dark:bg-gray-800">
    <div class="flex flex-col justify-between p-8 pr-0">
      <input type="button" name="tab1" id="1" value="Cabeçalho" class="transition-bg-color cursor-pointer rounded-l-lg p-2 font-light duration-200" @click="openedTab = 1" :class="{'bg-gray-100 dark:bg-gray-700': openedTab === 1, 'bg-gray-300 dark:bg-gray-600': openedTab !== 1}" />
      <input type="button" name="tab2" id="2" value="Disciplinas" class="transition-bg-color cursor-pointer rounded-l-lg p-2 font-light duration-200" @click="openedTab = 2" :class="{'bg-gray-100 dark:bg-gray-700': openedTab === 2, 'bg-gray-300 dark:bg-gray-600': openedTab !== 2}" />
      <input type="button" name="tab3" id="3" value="Complementares" class="transition-bg-color cursor-pointer rounded-l-lg p-2 font-light duration-200" @click="openedTab = 3" :class="{'bg-gray-100 dark:bg-gray-700': openedTab === 3, 'bg-gray-300 dark:bg-gray-600': openedTab !== 3}" />
      <input type="button" name="tab4" id="4" value="Pesquisa" class="transition-bg-color cursor-pointer rounded-l-lg p-2 font-light duration-200" @click="openedTab = 4" :class="{'bg-gray-100 dark:bg-gray-700': openedTab === 4, 'bg-gray-300 dark:bg-gray-600': openedTab !== 4}" />
      <input type="button" name="tab5" id="5" value="Extensão" class="transition-bg-color cursor-pointer rounded-l-lg p-2 font-light duration-200" @click="openedTab = 5" :class="{'bg-gray-100 dark:bg-gray-700': openedTab === 5, 'bg-gray-300 dark:bg-gray-600': openedTab !== 5}" />
      <input type="button" name="tab6" id="6" value="Adminsitração" class="transition-bg-color cursor-pointer rounded-l-lg p-2 font-light duration-200" @click="openedTab = 6" :class="{'bg-gray-100 dark:bg-gray-700': openedTab === 6, 'bg-gray-300 dark:bg-gray-600': openedTab !== 6}" />
      <input type="button" name="tab7" id="7" value="Atividades" class="transition-bg-color cursor-pointer rounded-l-lg p-2 font-light duration-200" @click="openedTab = 7" :class="{'bg-gray-100 dark:bg-gray-700': openedTab === 7, 'bg-gray-300 dark:bg-gray-600': openedTab !== 7}" />
      <input type="button" name="tab8" id="8" value="Observações" class="transition-bg-color cursor-pointer rounded-l-lg p-2 font-light duration-200" @click="openedTab = 8" :class="{'bg-gray-100 dark:bg-gray-700': openedTab === 8, 'bg-gray-300 dark:bg-gray-600': openedTab !== 8}" />
    </div>
    <div class="max-h-110 col-span-4 p-8 pl-0">
      <div class="transition-bg-color h-full w-full space-y-2 overflow-y-auto rounded-r-lg bg-gray-100 p-8 duration-200 dark:bg-gray-700" x-show="openedTab === 1" x-cloak>
        <form action="" method="get" autocomplete="off">
          <div class="grid grid-cols-1 gap-2.5">
            <p>Professor: Márcio Torres</p>
            <p>Período do PTD: 2021/1</p>
            <div class="grid grid-cols-2 gap-3">
              <div class="space-y-1">
                <label for="sala_permanencia">Sala de permanência:</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="text" name="sala_permanencia" id="sala_permanencia" class="w-full" />
                </div>
              </div>
              <div class="space-y-1">
                <label for="area_conhecimento">Área de conhecimento:</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="text" name="area_conhecimento" id="area_conhecimento" class="w-full" />
                </div>
              </div>
              <div class="space-y-1">
                <span>Categoria</span>
                <div class="transition-bg-color grid h-11 place-items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <select name="categoria" id="categoria" class="transition-bg-color w-full bg-gray-200 duration-200 dark:bg-gray-800">
                    <option value="Magistério do EBTT">Magistério do EBTT</option>
                    <option value="Magistério do ES">Magistério do ES</option>
                  </select>
                </div>
              </div>
              <div class="space-y-1">
                <span>Regime de trabalho:</span>
                <div class="transition-bg-color grid h-11 place-items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <select name="regime_trabalho" id="regime_trabalho" class="transition-bg-color w-full bg-gray-200 duration-200 dark:bg-gray-800">
                    <option value="20h">20h</option>
                    <option value="40h">40h</option>
                    <option value="DE" selected>DE</option>
                    <option value="Visitante">Visitante</option>
                  </select>
                </div>
              </div>
            </div>
            <p>Carga horária semanal cadastrada neste PTD: 0h</p>
            <input type="hidden" name="periodo" value=2021/1>
            <input type="hidden" name="id" value="13" />
            <input type="submit" name="botao" value="Gravar dados do cabeçalho deste PTD" class="transition-bg-color mt-1 w-full cursor-pointer rounded-lg bg-gray-200 p-2 text-center font-semibold uppercase shadow-md duration-200 dark:bg-gray-800" />
          </div>
        </form>
      </div>
      <div class="transition-bg-color h-full w-full space-y-2 overflow-y-auto rounded-r-lg bg-gray-100 p-8 duration-200 dark:bg-gray-700" x-show="openedTab === 2" x-cloak>
        <div class="border border-gray-400 shadow-md">
          <table class="w-full">
            <tbody class="divide-y divide-gray-400">
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-300 text-center font-semibold duration-200 dark:bg-gray-800">
                <td class="p-2"></td>
                <td class="p-2">Disciplina</td>
                <td class="p-2">Turma</td>
                <td class="p-2">Grupo</td>
                <td class="p-2">Curso</td>
                <td class="p-2">C.H.</td>
              </tr>
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-100 duration-200 dark:bg-gray-600">
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
              </tr>
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-200 duration-200 dark:bg-gray-700">
                <td class="p-2" colspan="5">Total</td>
                <td class="p-2">0</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="grid grid-cols-1 gap-2.5">
          <p class="text-xl font-semibold italic">Cadastrar:</p>
          <div class="grid grid-cols-3 gap-3" x-data="{'modalidade': ''}">
            <div class="space-y-1">
              <span>Modalidade:</span>
              <div class="transition-bg-color grid h-11 place-items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                <select name="modalidade" id="modalidade" class="transition-bg-color w-full bg-gray-200 duration-200 dark:bg-gray-800" @change="modalidade = $el.value">
                  <option value="" selected disabled>Modalidade</option>
                  <option value="Integrado">Integrado</option>
                  <option value="Subsequente">Subsequente</option>
                  <option value="Superior">Superior</option>
                </select>
              </div>
            </div>
            <div class="col-span-2 space-y-1">
              <span>Curso:</span>
              <div class="transition-bg-color grid h-11 place-items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800" x-show="modalidade === ''" x-cloak></div>
              <div class="transition-bg-color grid h-11 place-items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800" x-show="modalidade === 'Integrado'" x-cloak>
                <select name="curso" id="curso" class="transition-bg-color w-full bg-gray-200 duration-200 dark:bg-gray-800">
                  <option value="" selected disabled>Curso</option>
                  <option value="Automação Industrial">Automação Industrial</option>
                  <option value="Eletrotécnica">Eletrotécnica</option>
                  <option value="Fabricação Mecânica">Fabricação Mecânica</option>
                  <option value="Geoprocessamento">Geoprocessamento</option>
                  <option value="Informática para Internet">Informática para Internet</option>
                  <option value="Refrigeração e Climatização">Refrigeração e Climatização</option>
                </select>
              </div>
              <div class="transition-bg-color grid h-11 place-items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800" x-show="modalidade === 'Subsequente'" x-cloak>
                <select name="curso" id="curso" class="transition-bg-color w-full bg-gray-200 duration-200 dark:bg-gray-800">
                  <option value="" selected disabled>Curso</option>
                  <option value="Automação Industrial">Automação Industrial</option>
                  <option value="Eletrotécnica">Eletrotécnica</option>
                  <option value="Fabricação Mecânica">Fabricação Mecânica</option>
                  <option value="Geoprocessamento">Geoprocessamento</option>
                  <!-- <option value="Informática para Internet">Informática para Internet</option> -->
                  <option value="Refrigeração e Climatização">Refrigeração e Climatização</option>
                </select>
              </div>
              <div class="transition-bg-color grid h-11 place-items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800" x-show="modalidade === 'Superior'" x-cloak>
                <select name="curso" id="curso" class="transition-bg-color w-full bg-gray-200 duration-200 dark:bg-gray-800">
                  <option value="" selected disabled>Curso</option>
                  <option value="Enfermagem">Enfermagem</option>
                  <option value="Engenharia Mecânica">Engenharia Mecânica</option>
                  <option value="Tecnologia em Análise e Desenvolvimento de Sistemas">Tecnologia em Análise e Desenvolvimento de Sistemas</option>
                  <option value="Tecnologia em Construção de Edifícios">Tecnologia em Construção de Edifícios</option>
                </select>
              </div>
            </div>
            <div class="col-span-2 space-y-1">
              <span>Disciplina:</span>
              <div class="transition-bg-color grid h-11 place-items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800" x-show="modalidade !== 'Integrado'" x-cloak></div>
              <div class="transition-bg-color grid h-11 place-items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800" x-show="modalidade === 'Integrado'" x-cloak>
                <select name="disciplinas_integrado" id="disciplinas_integrado" class="transition-bg-color w-full bg-gray-200 duration-200 dark:bg-gray-800">
                  <option value="" selected disabled>Disciplina</option>
                  <option value="">Artes</option>
                  <option value="">Biologia I</option>
                  <option value="">Biologia II</option>
                  <option value="">Educação Física I</option>
                  <option value="">Educação Física II</option>
                  <option value="">Educação Física III</option>
                  <option value="">Fisolofia I</option>
                  <option value="">Fisolofia II</option>
                  <option value="">Fisolofia III</option>
                  <option value="">Fisolofia IV</option>
                  <option value="">Física I</option>
                  <option value="">Física II</option>
                  <option value="">Física III</option>
                  <option value="">Física IV</option>
                  <option value="">Geografia I</option>
                  <option value="">Geografia II</option>
                  <option value="">História I</option>
                  <option value="">História II</option>
                  <option value="">Língua Estrangeira - Espanhol</option>
                  <option value="">Língua Estrangeira - Inglês</option>
                  <option value="">Língua Portuguesa e Literatura Brasileira I</option>
                  <option value="">Língua Portuguesa e Literatura Brasileira II</option>
                  <option value="">Língua Portuguesa e Literatura Brasileira III</option>
                  <option value="">Língua Portuguesa e Literatura Brasileira IV</option>
                  <option value="">Matemática I</option>
                  <option value="">Matemática II</option>
                  <option value="">Matemática III</option>
                  <option value="">Matemática IV</option>
                  <option value="">Química I</option>
                  <option value="">Química II</option>
                  <option value="">Química III</option>
                  <option value="">Sociologia I</option>
                  <option value="">Sociologia II</option>
                  <option value="">Sociologia III</option>
                  <option value="">Sociologia IV</option>
                </select>
              </div>
            </div>
            <div class="space-y-1">
              <label for="carga_horaria">Carga Horária Semanal:</label>
              <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                <input type="text" name="carga_horaria" id="carga_horaria" class="w-full" placeholder="HH:MM" pattern="/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/" />
              </div>
            </div>
            <div class="space-y-1">
              <span>Turmas Integrado:</span>
              <div class="transition-bg-color grid h-11 place-items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                <select name="turmas" id="turmas" class="transition-bg-color w-full bg-gray-200 duration-200 dark:bg-gray-800" @change="modalidade = $el.value">
                  <option value="" selected disabled></option>
                  <option value="">1A</option>
                  <option value="">1A1</option>
                  <option value="">1B</option>
                  <option value="">1B1</option>
                  <option value="">1C</option>
                  <option value="">1C1</option>
                  <option value="">1D</option>
                  <option value="">1D1</option>
                  <option value="">1E</option>
                  <option value="">1E1</option>
                  <option value="">1F</option>
                  <option value="">1F1</option>
                  <option value="">2A</option>
                  <option value="">2B</option>
                  <option value="">2C</option>
                  <option value="">2D</option>
                  <option value="">2E</option>
                  <option value="">2F</option>
                  <option value="">3A</option>
                  <option value="">3B</option>
                  <option value="">3C</option>
                  <option value="">3D</option>
                  <option value="">3E</option>
                  <option value="">3F</option>
                  <option value="">4A</option>
                  <option value="">4B</option>
                  <option value="">4C</option>
                  <option value="">4D</option>
                  <option value="">4E</option>
                  <option value="">4F</option>
                </select>
              </div>
            </div>
            <div class="col-span-2 space-y-1">
              <label for="grupo">Divisão da Turma (grupos):</label>
              <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                <input type="number" name="grupo" id="grupo" class="w-full" />
              </div>
            </div>
          </div>
          <input type="hidden" name="id" value="13" />
          <input type="submit" name="botao" value="Cadastrar Aula" class="transition-bg-color mt-1 w-full cursor-pointer rounded-lg bg-gray-200 p-2 text-center font-semibold uppercase shadow-md duration-200 dark:bg-gray-800" />
        </div>
      </div>
      <div class="transition-bg-color h-full w-full space-y-2 overflow-y-auto rounded-r-lg bg-gray-100 p-8 duration-200 dark:bg-gray-700" x-show="openedTab === 3" x-cloak>
        <div class="border border-gray-400 shadow-md">
          <table class="w-full">
            <tbody class="divide-y divide-gray-400">
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-300 text-center font-semibold duration-200 dark:bg-gray-800">
                <td class="p-2"></td>
                <td class="p-2">Atividades Complementares de Ensino</td>
                <td class="p-2">C.H.</td>
              </tr>
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-100 duration-200 dark:bg-gray-600">
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
              </tr>
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-200 duration-200 dark:bg-gray-700">
                <td class="p-2" colspan="2">Total</td>
                <td class="p-2">0</td>
              </tr>
            </tbody>
          </table>
        </div>
        <form action="" method="get" autocomplete="off">
          <div class="grid grid-cols-1 gap-2.5">
            <p class="text-xl font-semibold italic">Cadastrar:</p>
            <div class="grid grid-cols-3 gap-3">
              <div class="col-span-2 space-y-1">
                <label for="atividade">Atividade Complementar de Ensino:</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="text" name="atividade" id="atividade" class="w-full" />
                </div>
              </div>
              <div class="space-y-1">
                <label for="carga_horaria">Carga Horária Semanal:</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="text" name="carga_horaria" id="carga_horaria" class="w-full" placeholder="HH:MM" pattern="/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/" />
                </div>
              </div>
            </div>
            <input type="hidden" name="id" value="13" />
            <input type="submit" name="botao" value="Cadastrar atividade complementar de Ensino" class="transition-bg-color mt-1 w-full cursor-pointer rounded-lg bg-gray-200 p-2 text-center font-semibold uppercase shadow-md duration-200 dark:bg-gray-800" />
          </div>
        </form>
      </div>
      <div class="transition-bg-color h-full w-full space-y-2 overflow-y-auto rounded-r-lg bg-gray-100 p-8 duration-200 dark:bg-gray-700" x-show="openedTab === 4" x-cloak>
        <div class="border border-gray-400 shadow-md">
          <table class="w-full">
            <tbody class="divide-y divide-gray-400">
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-300 text-center font-semibold duration-200 dark:bg-gray-800">
                <td class="p-2"></td>
                <td class="p-2">Atividades de Pesquisa</td>
                <td class="p-2">C.H.</td>
              </tr>
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-100 duration-200 dark:bg-gray-600">
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
              </tr>
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-200 duration-200 dark:bg-gray-700">
                <td class="p-2" colspan="2">Total</td>
                <td class="p-2">0</td>
              </tr>
            </tbody>
          </table>
        </div>
        <form action="" method="get" autocomplete="off">
          <div class="grid grid-cols-1 gap-2.5">
            <p class="text-xl font-semibold italic">Cadastrar:</p>
            <div class="grid grid-cols-3 gap-3">
              <div class="col-span-2 space-y-1">
                <label for="atividade">Atividade de Pesquisa:</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="text" name="atividade" id="atividade" class="w-full" />
                </div>
              </div>
              <div class="space-y-1">
                <label for="carga_horaria">Carga Horária Semanal:</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="text" name="carga_horaria" id="carga_horaria" class="w-full" placeholder="HH:MM" pattern="/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/" />
                </div>
              </div>
            </div>
            <input type="hidden" name="id" value="13" />
            <input type="submit" name="botao" value="Cadastrar atividade de Pesquisa" class="transition-bg-color mt-1 w-full cursor-pointer rounded-lg bg-gray-200 p-2 text-center font-semibold uppercase shadow-md duration-200 dark:bg-gray-800" />
          </div>
        </form>
      </div>
      <div class="transition-bg-color h-full w-full space-y-2 overflow-y-auto rounded-r-lg bg-gray-100 p-8 duration-200 dark:bg-gray-700" x-show="openedTab === 5" x-cloak>
        <div class="border border-gray-400 shadow-md">
          <table class="w-full">
            <tbody class="divide-y divide-gray-400">
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-300 text-center font-semibold duration-200 dark:bg-gray-800">
                <td class="p-2"></td>
                <td class="p-2">Atividades de Extensão</td>
                <td class="p-2">C.H.</td>
              </tr>
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-100 duration-200 dark:bg-gray-600">
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
              </tr>
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-200 duration-200 dark:bg-gray-700">
                <td class="p-2" colspan="2">Total</td>
                <td class="p-2">0</td>
              </tr>
            </tbody>
          </table>
        </div>
        <form action="" method="get" autocomplete="off">
          <div class="grid grid-cols-1 gap-2.5">
            <p class="text-xl font-semibold italic">Cadastrar:</p>
            <div class="grid grid-cols-3 gap-3">
              <div class="col-span-2 space-y-1">
                <label for="atividade">Atividade de Extensão:</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="text" name="atividade" id="atividade" class="w-full" />
                </div>
              </div>
              <div class="space-y-1">
                <label for="carga_horaria">Carga Horária Semanal:</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="text" name="carga_horaria" id="carga_horaria" class="w-full" placeholder="HH:MM" pattern="/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/" />
                </div>
              </div>
            </div>
            <input type="hidden" name="id" value="13" />
            <input type="submit" name="botao" value="Cadastrar atividade de Extensão" class="transition-bg-color mt-1 w-full cursor-pointer rounded-lg bg-gray-200 p-2 text-center font-semibold uppercase shadow-md duration-200 dark:bg-gray-800" />
          </div>
        </form>
      </div>
      <div class="transition-bg-color h-full w-full space-y-2 overflow-y-auto rounded-r-lg bg-gray-100 p-8 duration-200 dark:bg-gray-700" x-show="openedTab === 6" x-cloak>
        <div class="border border-gray-400 shadow-md">
          <table class="w-full">
            <tbody class="divide-y divide-gray-400">
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-300 text-center font-semibold duration-200 dark:bg-gray-800">
                <td class="p-2"></td>
                <td class="p-2">Atividades Adminsitrativas</td>
                <td class="p-2">Portaria</td>
                <td class="p-2">C.H.</td>
              </tr>
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-100 duration-200 dark:bg-gray-600">
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
              </tr>
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-200 duration-200 dark:bg-gray-700">
                <td class="p-2" colspan="3">Total</td>
                <td class="p-2">0</td>
              </tr>
            </tbody>
          </table>
        </div>
        <form action="" method="get" autocomplete="off">
          <div class="grid grid-cols-1 gap-2.5">
            <p class="text-xl font-semibold italic">Cadastrar:</p>
            <div class="grid grid-cols-3 gap-3">
              <div class="col-span-2 space-y-1">
                <label for="atividade">Atividade Adminsitrativa:</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="text" name="atividade" id="atividade" class="w-full" />
                </div>
              </div>
              <div class="col-span-2 space-y-1">
                <label for="portaria">Portaria:</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="text" name="portaria" id="portaria" class="w-full" />
                </div>
              </div>
              <div class="space-y-1">
                <label for="carga_horaria">Carga Horária Semanal:</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="text" name="carga_horaria" id="carga_horaria" class="w-full" placeholder="HH:MM" pattern="/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/" />
                </div>
              </div>
            </div>
            <input type="hidden" name="id" value="13" />
            <input type="submit" name="botao" value="Cadastrar atividade Administrativa" class="transition-bg-color mt-1 w-full cursor-pointer rounded-lg bg-gray-200 p-2 text-center font-semibold uppercase shadow-md duration-200 dark:bg-gray-800" />
          </div>
        </form>
      </div>
      <div class="transition-bg-color h-full w-full space-y-2 overflow-y-auto rounded-r-lg bg-gray-100 p-8 duration-200 dark:bg-gray-700" x-show="openedTab === 7" x-cloak>
        <div class="border border-gray-400 shadow-md">
          <table class="w-full">
            <tbody class="divide-y divide-gray-400">
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-300 text-center font-semibold duration-200 dark:bg-gray-800">
                <td class="p-2" colspan="5">Especificações Referentes às Aulas e Atendimentos dos Alunos</td>
              </tr>
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-300 text-center font-semibold duration-200 dark:bg-gray-800">
                <td class="p-2">Dia da Semana</td>
                <td class="p-2">Atividade</td>
                <td class="p-2">Hora de Início</td>
                <td class="p-2">Hora de Término</td>
                <td class="p-2">Local</td>
              </tr>
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-100 duration-200 dark:bg-gray-600">
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
              </tr>
              <tr class="transition-bg-color divide-x divide-gray-400 bg-gray-200 duration-200 dark:bg-gray-700">
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <form action="" method="get" autocomplete="off">
          <div class="grid grid-cols-1 gap-2.5">
            <p class="text-xl font-semibold italic">Cadastrar:</p>
            <div class="grid grid-cols-3 gap-3">
              <div class="col-span-3 space-y-1">
                <label for="atividade">Atividade:</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="text" name="atividade" id="atividade" class="w-full" />
                </div>
              </div>
              <div class="col-span-3 space-y-1">
                <label for="local">Local:</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="text" name="local" id="local" class="w-full" />
                </div>
              </div>
              <div class="space-y-1">
                <span>Dia da Semana:</span>
                <div class="transition-bg-color grid h-11 place-items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <select name="dia_semana" id="dia_semana" class="transition-bg-color w-full bg-gray-200 duration-200 dark:bg-gray-800">
                    <option value="Segunda-feira">Segunda-feira</option>
                    <option value="Terça-feira">Terça-feira</option>
                    <option value="Quarta-feira">Quarta-feira</option>
                    <option value="Quinta-feira">Quinta-feira</option>
                    <option value="Sexta-feira">Sexta-feira</option>
                    <option value="Sábado">Sábado</option>
                    <option value="Domingo">Domingo</option>
                  </select>
                </div>
              </div>
              <div class="space-y-1">
                <label for="horai">Hora de Início</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="time" name="horai" id="horai" class="flex w-full items-center" />
                </div>
              </div>
              <div class="space-y-1">
                <label for="horat">Hora de Término</label>
                <div class="transition-bg-color flex h-11 items-center rounded-lg bg-gray-200 px-3 shadow-md duration-200 dark:bg-gray-800">
                  <input type="time" name="horat" id="horat" class="flex w-full items-center" />
                </div>
              </div>
            </div>
            <input type="hidden" name="id" value="13" />
            <input type="submit" name="botao" value="Cadastrar atividade referente às Aulas e Atendimentos" class="transition-bg-color mt-1 w-full cursor-pointer rounded-lg bg-gray-200 p-2 text-center font-semibold uppercase shadow-md duration-200 dark:bg-gray-800" />
          </div>
        </form>
      </div>
      <div class="transition-bg-color h-full w-full space-y-2 overflow-y-auto rounded-r-lg bg-gray-100 p-8 duration-200 dark:bg-gray-700" x-show="openedTab === 8" x-cloak>
        <form action="" method="get" autocomplete="off">
          <div class="grid grid-cols-1 gap-2.5">
            <p class="text-xl font-semibold italic">Observações do Professor:</p>
            <span class="text-sm">O campo de observações do professor é o campo de observações que será publicado no PTD. Somente o professor pode editar este campo.</span>
            <textarea name="obs_professor" id="obs_professor" rows="6" class="transition-bg-color break-words border border-gray-400 bg-gray-200 p-3 duration-200 dark:bg-gray-800"></textarea>
            <input type="submit" name="botao" value="Gravar Observações" class="transition-bg-color mt-1 w-full cursor-pointer rounded-lg bg-gray-200 p-2 text-center font-semibold uppercase shadow-md duration-200 dark:bg-gray-800" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="transition-bg-color h-full w-full rounded-3xl bg-gray-200 p-8 shadow-md duration-200 dark:bg-gray-800">
    <div class="transition-bg-color h-full w-full space-y-2 rounded-lg bg-gray-100 p-8 duration-200 dark:bg-gray-700">
      <p class="text-justify text-sm">Uma vez finalizado o PTD, clique no botão <em class="italic">"Visualizar PTD"</em> para ver as informações do PTD. Na página de visualização do PTD, caso as informações do PTD estejam corretas, você pode submeter o PTD para a análise do coordenador de curso clicando no botão <em class="italic">"Submeter o PTD ao Coordenador de Curso"</em> ou deixar para enviar posteriormente clicando no botão <em class="italic">"Editar Posteriormente"</em>.</p>
      <form action="ptd.html" method="get">
        <button type="submit" name="botao" value="Voltar à página inicial e continuar com a edição do PTD posteriormente" class="transition-bg-color mt-1 w-full cursor-pointer rounded-lg bg-gray-200 p-2 text-center font-semibold uppercase shadow-md duration-200 dark:bg-gray-800">Editar Posteriormente</button>
      </form>
      <form action="visualiza_ptd.html" method="get">
        <button type="submit" name="botao" value="Visualizar o PTD" class="transition-bg-color mt-1 w-full cursor-pointer rounded-lg bg-gray-200 p-2 text-center font-semibold uppercase shadow-md duration-200 dark:bg-gray-800">Visualizar PTD</button>
      </form>
    </div>
  </div>
</div>
