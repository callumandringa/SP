
<article class="articleimagephp">
<h2 class="articleh2php" ><?= $sdgItem["Title"]?></h2>
<p class="articlepphp" ><?= $sdgItem["Beschrijving"]?>></p>
<img class="articleimagephp" src="/img/<?= $sdgItem["image"]?>" alt="image">
<a href="/SDGOne.php?id=<?= $sdgItem["ID"] ?>" class="single">klik hier</a>
</article>