<?php global $bauer; ?>  
  
  
  
  <footer class="footer">
    <div class="footer-main">
      <div class="footer__container container">
        <div class="footer__wrapper">
          <a href="/" class="footer__logo">
            <img src="<?=$bauer['main-fdisplay-logofoot']['url']?>" alt="">
          </a>
          <ul>
            <li>
              <a href="/">
                Главная
              </a>
            </li>
            <li>
              <a href="/advantages">
                Преимущества
              </a>
            </li>
            <li>
              <a href="/catalog">
                Наша продукция
              </a>
            </li>
            <li>
              <a href="/projects">
                Выполненные проекты
              </a>
            </li>
            <li>
              <a href="/contacts">
                Контакты
              </a>
            </li>
          </ul>
          <div class="footer__info">
            <a href="tel:<?=$bauer['contacts-sets-phone1']?>"><?=$bauer['contacts-sets-phone1']?></a>
            <a href="mailto:<?=$bauer['contacts-sets-mail']?>">
            <?=$bauer['contacts-sets-mail']?>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__credits">
      Все права защищены.2021
    </div>
  </footer>



  <?php wp_footer();?>
</body>

</html>