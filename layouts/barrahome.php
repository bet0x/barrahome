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
        <?= $anchor('BarraHome.org [~]$', path('/')); ?>
        <nav>
          <?php foreach([
            'Index' => '/',
            'About' => '/about'
          ] as $text => $link) { ?>
            <?= $anchor($text, path($link), [
              'class' => $if(trim($link, '/') == path(1), 'current')
            ]); ?>
          <?php } ?>
          <a href="https://twitter.com/bet0x" target="_blank">
            <svg width="16" height="16" viewBox="0 0 16 16">
              <path d="M5.03 14.5c6.04 0 9.34-5 9.34-9.338 0-.142-.002-.284-.008-.424.64-.463 1.198-1.04 1.638-1.7-.588.262-1.22.438-1.885.518.678-.406 1.198-1.05 1.443-1.816-.634.376-1.337.65-2.084.797-.6-.638-1.452-1.037-2.396-1.037-1.813 0-3.283 1.47-3.283 3.28 0 .26.03.51.085.75C5.152 5.39 2.733 4.085 1.114 2.1.832 2.585.67 3.15.67 3.75c0 1.138.58 2.143 1.46 2.73-.538-.016-1.044-.164-1.487-.41v.042c0 1.59 1.13 2.916 2.633 3.217-.277.075-.567.116-.866.116-.21 0-.417-.02-.617-.06.418 1.305 1.63 2.254 3.067 2.28-1.124.88-2.54 1.405-4.077 1.405-.265 0-.526-.014-.783-.044 1.452.93 3.177 1.474 5.03 1.474" />
            </svg>
          </a>
          <a href="https://github.com/bet0x" target="_blank">
            <svg viewBox="0 0 16 16">
              <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z">
              </path>
            </svg>
          </a>
        </nav>
      </header>
      <?= CONTENT; ?>
      <footer>
        <p>Copyright <?= $anchor('Alberto Ferrer', 'https://www.barrahome.org/', [
          'target' => '_blank'
        ]); ?> - &copy; 2001 - <?= date('Y'); ?></p>
        <p>Built with <?= $anchor('Arcane', 'https://arcane.dev', [
          'target' => '_blank'
        ]); ?>
        - <?= $anchor('Code', 'https://github.com/bet0x/barrahome', [
          'target' => '_blank'
        ]); ?>
        </p>
      </footer>
    </section>
    <?= SCRIPTS; ?>
  </body>
</html>
