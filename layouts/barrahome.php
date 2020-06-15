<html lang="es-MX">
  <head>
    <meta charset="utf-8"/>
    <meta name="description" content="Tecnología, open source, seguridad y mas.">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Alberto Ferrer" />
    <meta name="copyright" content="Alberto Ferrer" />
    <meta name="robots" content="index,follow" />
    <title>
      <?php if(defined('TITLE')) echo TITLE . ' - '; ?>BarraHome.org [~]$
    </title>
    <link rel="icon" type="image/png" href="<?= path('images/favicon.png'); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700|Roboto:400,400i,700,700i&display=swap" />
    <?= STYLES; ?>
  </head>
  <body>
    <section>
      <header>
        <a href="<?= path('/'); ?>">BarraHome.org [~]$</a>
        <nav>
          <a href="<?= path('/'); ?>">Inicio</a>
          <a href="<?= path('/proyectos'); ?>">Proyectos</a>
          <a href="<?= path('/cv'); ?>">CV</a>
          <a href="<?= path('/contacto'); ?>">Contacto</a>
          <a href="https://twitter.com/bet0x" target="_blank">
            <svg width="16" height="16" viewBox="0 0 16 16">
              <path d="M5.03 14.5c6.04 0 9.34-5 9.34-9.338 0-.142-.002-.284-.008-.424.64-.463 1.198-1.04 1.638-1.7-.588.262-1.22.438-1.885.518.678-.406 1.198-1.05 1.443-1.816-.634.376-1.337.65-2.084.797-.6-.638-1.452-1.037-2.396-1.037-1.813 0-3.283 1.47-3.283 3.28 0 .26.03.51.085.75C5.152 5.39 2.733 4.085 1.114 2.1.832 2.585.67 3.15.67 3.75c0 1.138.58 2.143 1.46 2.73-.538-.016-1.044-.164-1.487-.41v.042c0 1.59 1.13 2.916 2.633 3.217-.277.075-.567.116-.866.116-.21 0-.417-.02-.617-.06.418 1.305 1.63 2.254 3.067 2.28-1.124.88-2.54 1.405-4.077 1.405-.265 0-.526-.014-.783-.044 1.452.93 3.177 1.474 5.03 1.474" />
            </svg>
          </a>
          <a href="https://github.com/bet0x" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
            </svg>
          </a>
        </nav>
      </header>
      <?= CONTENT; ?>
      <footer>
        <p>Copyright <a href="https://www.barrahome.org/">Alberto Ferrer</a> - &copy; 2001 - <?= date('Y'); ?></p>
        <p>Built with <a href="https://arcane.dev" target="_blank">Arcane</a> - <a href="https://github.com/bet0x/barrahome" target="_blank">Code</a></p>
      </footer>
    </section>
    <?= SCRIPTS; ?>
  </body>
</html>
