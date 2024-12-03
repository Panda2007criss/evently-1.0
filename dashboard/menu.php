<aside class="left-sidebar" data-sidebarbg="skin5" style.backgroundColor="primary">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
            <?php 
            if ($_SESSION['nivelAcesso'] == 1){
              echo '
              <li class="sidebar-item">
              <a
                class="sidebar-link waves-effect waves-dark sidebar-link"
                href="?page=home1"
                aria-expanded="false"
                ><i class="mdi mdi-move-resize-variant"></i
                ><span class="hide-menu">Home</span></a
              >
            </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="?page=lista_adm"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Administradores</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="?page=lista_igreja"
                  aria-expanded="false"
                  ><i class="mdi mdi-receipt"></i
                  ><span class="hide-menu">Igreja</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="?page=lista_assinatura"
                  aria-expanded="false"
                  ><i class="mdi mdi-relative-scale"></i
                  ><span class="hide-menu">Assinaturas</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="?page=lista_relatorio-adm"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-bar"></i
                  ><span class="hide-menu">Relatório</span></a
                >
              </li>';
            } elseif ($_SESSION['nivelAcesso'] == 2){
              echo' 
              <li class="sidebar-item">
              <a
                class="sidebar-link waves-effect waves-dark sidebar-link"
                href="?page=home2"
                aria-expanded="false"
                ><i class="mdi mdi-move-resize-variant"></i
                ><span class="hide-menu">Home</span></a
              >
            </li>
            <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="?page=lista_igreja-my"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Igreja</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="?page=lista_cadastro-geral"
                  aria-expanded="false"
                  ><i class="mdi mdi-blur-linear"></i
                  ><span class="hide-menu">Membros</span></a
                >
              </li>
              <li class="sidebar-item">
              <a
                class="sidebar-link waves-effect waves-dark sidebar-link"
                href="?page=lista_voluntario"
                aria-expanded="false"
                ><i class="mdi mdi-view-dashboard"></i
                ><span class="hide-menu">Voluntários</span></a
              >
            </li>
          <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="?page=lista_funcao"
                  aria-expanded="false"
                  ><i class="mdi mdi-relative-scale"></i
                  ><span class="hide-menu">Funções</span></a
                >
              </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link waves-effect waves-dark sidebar-link"
                href="?page=lista_equipamento"
                aria-expanded="false"
                ><i class="mdi mdi-pencil"></i
                ><span class="hide-menu">Equipamentos</span></a
              >
            </li>
          
              <li class="sidebar-item">
              <a
                class="sidebar-link waves-effect waves-dark sidebar-link"
                href="?page=lista_evento"
                aria-expanded="false"
                ><i class="mdi mdi-blur-linear"></i
                ><span class="hide-menu">Eventos</span></a
              >
            </li>
            <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="?page=lista_escala"
              aria-expanded="false"
              ><i class="mdi mdi-receipt"></i
              ><span class="hide-menu">Escala</span></a
            >
          </li>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="?page=lista_quadro-disponibilidade"
              aria-expanded="false"
              ><i class="mdi mdi-blur-linear"></i
              ><span class="hide-menu">Quadro de Disponibilidade</span></a
            >
          </li>
          <li class="sidebar-item">
          <a
            class="sidebar-link waves-effect waves-dark sidebar-link"
            href="?page=lista_relatorio"
            aria-expanded="false"
            ><i class="mdi mdi-chart-bar"></i
            ><span class="hide-menu">Relatório</span></a>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
                href="?page=lista_assinatura_c"
                aria-expanded="false"
                ><i class="mdi mdi-relative-scale"></i
                ><span class="hide-menu">Assinatura</span></a
              >
          </li>';
        } elseif ($_SESSION['nivelAcesso'] == 4){
          echo '
          <li class="sidebar-item">
              <a
                class="sidebar-link waves-effect waves-dark sidebar-link"
                href="?page=home4"
                aria-expanded="false"
                ><i class="mdi mdi-move-resize-variant"></i
                ><span class="hide-menu">Home</span></a
              >
            </li>
          <li class="sidebar-item">
          <a
            class="sidebar-link waves-effect waves-dark sidebar-link"
            href="?page=lista_evento_vlt"
            aria-expanded="false"
            ><i class="mdi mdi-receipt"></i
            ><span class="hide-menu">Eventos</span></a
          >
        </li>
        <li class="sidebar-item">
          <a
            class="sidebar-link waves-effect waves-dark sidebar-link"
            href="?page=lista_minhas-escalas"
            aria-expanded="false"
            ><i class="mdi mdi-relative-scale"></i
            ><span class="hide-menu">Escalas de Voluntário</span></a
          >
        </li>'; }
          ?>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>