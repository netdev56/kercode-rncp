<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.google.com/schemas/sitemap/0.84">
  <url>
    <loc>http://projet-final.test/index.php?action=accueil</loc>
  </url>
  <url>
    <loc>http://projet-final.test/index.php?action=legite</loc>
  </url>
  <url>
    <loc>http://projet-final.test/index.php?action=tarifs</loc>
  </url>
  <url>
    <loc>http://projet-final.test/index.php?action=actualites</loc>
  </url>

  <?php foreach($allsiteMap as $allssiteMap){ ?>  
    <url>
        <loc>http://projet-final.test/index.php?action=actualitesSingle&id=<?= $allssiteMap['id'] ?></loc>
    </url>
  <?php } ?>

  <url>
    <loc>http://projet-final.test/index.php?action=livredor</loc>
  </url>
  <url>
    <loc>http://projet-final.test/index.php?action=contactezNous</loc>
  </url>
  <url>
    <loc>http://projet-final.test/index.php?action=planDuSite</loc>
  </url>
</urlset>