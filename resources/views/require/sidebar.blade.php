<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="index.html">
        <i class="bi bi-grid"></i>
        <span>MENU</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Gestion Etudiant</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('etudiants.index')}}">
            <i class="bi bi-circle"></i><span>Liste Etudiants</span>
          </a>
        </li>
        <li>
          <a href="{{route('etudiants.create')}}">
            <i class="bi bi-circle"></i><span>Ajouter Etudiant</span>
          </a>
        </li>

      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Gestion Enseignant</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('enseignants.index') }}">
            <i class="bi bi-circle"></i><span>Liste des enseignants</span>
          </a>
        </li>
        <li>
          <a href="{{ route('enseignants.create') }}">
            <i class="bi bi-circle"></i><span>Ajouter Enseignant</span>
          </a>
        </li>

      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Gestion Soutenances</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('soutenances.index')}}">
            <i class="bi bi-circle"></i><span>Liste Soutenances</span>
          </a>
        </li>
        <li>
          <a href="{{route('soutenances.create')}}">
            <i class="bi bi-circle"></i><span>Ajouter Soutenance</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span>Gestion Directeur M</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('directeurmemoire.index')}}">
            <i class="bi bi-circle"></i><span>Liste directeur memoire</span>
          </a>
        </li>
        <li>
          <a href="{{route('directeurmemoire.create')}}">
            <i class="bi bi-circle"></i><span>Ajouter directeur memoire</span>
          </a>
        </li>

      </ul>
  </li><!-- End Charts Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nave" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span>Gestion Maitre S</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nave" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('maitrestage.index')}}">
            <i class="bi bi-circle"></i><span>Liste Maitre S</span>
          </a>
        </li>
        <li>
          <a href="{{route('maitrestage.create')}}">
            <i class="bi bi-circle"></i><span>Ajouter Maitre S</span>
          </a>
        </li>
        <li>
        </li>
      </ul>
    </li><!-- End Icons Nave -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav_1" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Gestion Jury</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav_1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('jury.index') }}">
            <i class="bi bi-circle"></i><span>Liste Jury</span>
          </a>
        </li>
        <li>
          <a href="{{route('jury.create')}}">
            <i class="bi bi-circle"></i><span>Ajouter un Jury</span>
          </a>
        </li>

      </ul>
    </li><!-- End Components Nav_1 -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav_1" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Gestion Président Jury</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav_1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('presidentj.index') }}">
            <i class="bi bi-circle"></i><span>Liste Président Jury</span>
          </a>
        </li>
        <li>
          <a href="{{route('presidentj.create')}}">
            <i class="bi bi-circle"></i><span>Ajouter Président Jury</span>
          </a>
        </li>

      </ul>
    </li><!-- End Components Nav_1 -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav_2" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Gestion Salles</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav_2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('salles.index') }}">
            <i class="bi bi-circle"></i><span>Liste Salles</span>
          </a>
        </li>
        <li>
          <a href="{{route('salles.create')}}">
            <i class="bi bi-circle"></i><span>Ajouter Salle</span>
          </a>
        </li>

      </ul>
    </li><!-- End Components Nav_2 -->


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav_2" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Gestion Demandes</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav_2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('demande.index') }}">
            <i class="bi bi-circle"></i><span>Liste Demandes</span>
          </a>
        </li>
        <li>
          <a href="{{route('demande.create')}}">
            <i class="bi bi-circle"></i><span>Ajouter Demande</span>
          </a>
        </li>

      </ul>
    </li><!-- End Components Nav_3 -->




</aside>