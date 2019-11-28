
<html>
    <head>
      <meta charset="utf-8">
      <title>App Name - @yield('title')</title>
      <link rel="stylesheet" href="{{asset('/css/style.css')}}">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
          <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
          <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </head>
    <body>
      <header>
          <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
              <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                  <!-- Title -->
                  <span class="mdl-layout-title">Google Cinema</span>
                  <!-- Add spacer, to align navigation to the right -->
                  <div class="mdl-layout-spacer"></div>
                  <!-- Navigation. We hide it in small screens. -->
                  <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="/">Accueil</a></li>
                    <a class="mdl-navigation__link" href="/series">Toutes les series</a></li>
                    <a class="mdl-navigation__link" href="/actors">Tout les acteurs</a></li>
                    <a class="mdl-navigation__link" href="/genres">Tout les genres</a></li>
                    <a class="mdl-navigation__link" href="/addseries">Ajouter une serie</a></li>
                    <a class="mdl-navigation__link" href="/addactor">Ajouter un acteur</a></li>
                    <a class="mdl-navigation__link" href="/addgenre">Ajouter un genre</a></li>
                  </nav>
                </div>
              </header>
              <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Google Cinema</span>
                <nav class="mdl-navigation">
                  <a class="mdl-navigation__link" href="/">Accueil</a></li>
                  <a class="mdl-navigation__link" href="/series">Toutes les series</a></li>
                  <a class="mdl-navigation__link" href="/actors">Tout les acteurs</a></li>
                  <a class="mdl-navigation__link" href="/genres">Tout les genres</a></li>
                  <a class="mdl-navigation__link" href="/addseries">Ajouter une serie</a></li>
                  <a class="mdl-navigation__link" href="/addactor">Ajouter un acteur</a></li>
                  <a class="mdl-navigation__link" href="/addgenre">Ajouter un genre</a></li>
                </nav>
              </div>
            </div>
        
      </header>
        <main>
          @yield('content')
        </main>
        <script type="text/javascript" src="{{asset('/js/script.js')}}"></script>
    </body>
</html>

