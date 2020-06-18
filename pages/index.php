<?php

if(path(1) == 'post') {
  $posts = array_column($posts, null, 'slug');
  $post = $posts[path(2)];

  define('ROUTES', [
    ['post', array_keys($posts)]
  ]);

  if(array_key_exists('title', $post)) {
    relay('TITLE', trim(ltrim($post['title'], "#")));
  }
} else {
  $pages = $paginate($posts, 5);
  $posts = $pages[path(2) ?? 1];

  define('ROUTES', [
    ['page', range(2, count($pages))]
  ]);
}

?>

<?php if(isset($post)) { ?>
  <article>
    <time>
      <span><?= date('M j, Y', $post['modified']); ?></span>
      <span><?= $readtime($post['content']); ?></span>
    </time>
    <?= $markdown($post['content']); ?>
    <div id="disqus_thread"></div>
    <script>

    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://barrahome.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  </article>
<?php } else { ?>
  <?php foreach($posts as $post) { ?>
    <article>
      <time>
        <span><?= date('M j, Y', $post['modified']); ?></span>
        <span><?= $readtime($post['content']); ?></span>
      </time>
      <?php $link = path("/post/{$post['slug']}/"); ?>
      <?php if(array_key_exists('title', $post)) { ?>
        <?php $regex = "/^[\s]*(\#+)\s+(.+)$/"; ?>
        <?= $markdown([
          preg_replace($regex, "$1 [$2]($link)", $post['title'])
        ]); ?>
      <?php } ?>
      <p><?= implode('&nbsp;', [
        $truncate(strip_tags($markdown($post['preview'])), 180),
        $anchor('continuar', $link)
      ]); ?></p>
    </article>
  <?php } ?>
  <?php if(count($pages) > 1) { ?>
    <?php $path = path(2) ?? 1; ?>
    <aside>
      <?php if($pages[$prev = $path - 1] ?? false) { ?>
        <?php $link = path($prev == 1 ? '/' : "/page/{$prev}/"); ?>
        <?= $anchor('&larr;', $link); ?>
      <?php } else { ?>
        <span>&larr;</span>
      <?php } ?>
      <nav>
        <?php foreach(array_keys($pages) as $page) { ?>
          <?php if($page == $path) { ?>
            <span><?= $page; ?></span>
          <?php } else { ?>
            <?php $link = path($page == 1 ? '/' : "/page/{$page}/"); ?>
            <?= $anchor($page, $link); ?>
          <?php } ?>
        <?php } ?>
      </nav>
      <?php if($pages[$next = $path + 1] ?? false) { ?>
        <?= $anchor('&rarr;', path("/page/{$next}/")); ?>
      <?php } else { ?>
        <span>&rarr;</span>
      <?php } ?>
    </aside>
  <?php } ?>
<?php } ?>
