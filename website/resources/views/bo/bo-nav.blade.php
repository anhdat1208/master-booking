<nav class="role-navigation">
  <ul class="navigation-dboard">
    <li class="<?php if(isset($t) && $t == 1) echo 'active'; ?>">
      <a href="#">
        <div class="dbmn-icon">
          <i class="material-icons"> dashboard </i>
        </div>
        <span>Tableau de bord</span>
      </a>
    </li>
     <li class="<?php if(isset($t) && $t == 2) echo 'active'; ?>">
      <a href="#">
        <div class="dbmn-icon">
          <i class="material-icons"> insert_chart_outlined </i>
        </div>
        <span>Statistiques</span>
      </a>
    </li>
     <li class="<?php if(isset($t) && $t == 3) echo 'active'; ?>">
      <a href="#">
        <div class="dbmn-icon">
          <i class="material-icons"> library_books </i>
        </div>
        <span>Gestion des candidatures</span>
      </a>
    </li>
    <li class="<?php if(isset($t) && $t == 4) echo 'active'; ?>">
      <a href="bo-school-infomations.php">
        <div class="dbmn-icon">
          <i class="material-icons"> account_balance </i>
        </div>
        <span>Éditer fiche(s) école(s)</span>
      </a>
    </li>
    <li class="<?php if(isset($t) && $t == 5) echo 'active'; ?>">
      <a href="#">
        <div class="dbmn-icon">
          <i class="material-icons"> account_circle </i>
        </div>
        <span>Mon compte</span>
      </a>
    </li>
    <li class="">
      <a href="#">
        <div class="dbmn-icon">
          <i class="material-icons"> exit_to_app </i>
        </div>
        <span>Déconnexion</span>
      </a>
    </li>
  </ul>
</nav>