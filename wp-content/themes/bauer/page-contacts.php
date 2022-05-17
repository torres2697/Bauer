    <?php get_header();?>
    
    
    <section class="header-page header-page-contacts">
        <div class="header-page__container container">
            <div class="header-page__content">
                <h1 class="contacts-page__title subtittle">Контакты</h1>
            </div>
        </div>
    </section>

    <section class="breadcrumbs">
        <div class="breadcrumbs__container container">
            <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li>Контакты</li>
            </ul>
        </div>
    </section>

    <section class="contacts contacts-page">
        <div class="contacts__container container">
            <div class="contacts__wrapper">
                <div class="contacts__item">
                    <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M55.0691 46.7361L43.3744 40.6917C41.7318 39.8376 39.6951 40.2974 38.5782 41.7429L34.3076 47.2618C30.1028 45.0279 26.9491 42.8598 23.2698 39.1805C19.3278 35.2384 17.2253 32.0191 15.1229 27.9457L20.5761 23.6751C22.0215 22.5582 22.4814 20.5214 21.6273 18.8789L15.5828 7.24983C14.5316 5.21309 11.9036 4.55608 9.99824 5.8044L2.57399 10.7977C0.865765 11.9803 -0.119726 13.9513 0.0116761 15.9881C0.143078 18.0905 0.405858 20.7843 0.931466 22.6239C3.0996 30.9679 8.29 39.5748 15.6485 46.8676C22.9413 54.1604 31.5482 59.3507 39.8922 61.5845C41.7318 62.0445 44.4255 62.3073 46.5937 62.5044C48.6961 62.6358 50.7328 61.6503 51.8498 59.8763L56.7117 52.3207C57.7629 50.3497 57.0402 47.7873 55.0691 46.7361Z"
                            fill="#FCC323" />
                        <path
                            d="M31.4169 24.5292C32.8623 24.9234 34.3077 25.7118 35.4246 26.8944C36.6073 28.077 37.3957 29.4567 37.7899 30.9022C38.1184 32.0848 39.2353 32.8732 40.4836 32.8075H40.7464C42.4547 32.7418 43.703 31.0993 43.2431 29.4567C42.5861 27.0915 41.3377 24.792 39.4324 22.9524C37.5271 21.047 35.2932 19.7987 32.928 19.1417C31.2855 18.6818 29.643 19.9301 29.5773 21.6383V21.9011C29.4459 23.0837 30.2343 24.2006 31.4169 24.5292Z"
                            fill="#FCC323" />
                        <path
                            d="M32.2053 15.0681C35.8189 15.7251 39.301 17.4333 42.0605 20.1928C44.8856 23.0179 46.5938 26.4344 47.1851 30.0479C47.4479 31.3619 48.6305 32.3474 50.0103 32.2817H50.2074C51.8499 32.216 53.0325 30.7049 52.704 29.1281C51.8499 24.3976 49.6161 19.8642 46.0025 16.185C42.3233 12.5057 37.8556 10.2719 33.0594 9.48351C31.4826 9.2207 29.9715 10.4033 29.9058 11.9801V12.1772C29.9058 13.6227 30.8913 14.8053 32.2053 15.0681Z"
                            fill="#FCC323" />
                        <path
                            d="M62.2961 28.7339C61.3106 21.7039 58.157 14.9367 52.7695 9.54917C47.382 4.16168 40.6148 1.00803 33.5848 0.0225182C32.0079 -0.174585 30.5625 0.942349 30.4968 2.58487V2.84765C30.4311 4.29308 31.4824 5.47569 32.8621 5.67279C38.7095 6.4612 44.2941 9.15497 48.7617 13.6226C53.2294 18.0903 55.8574 23.7406 56.7115 29.5223C56.9086 30.902 58.0913 31.9532 59.5367 31.8875H59.7995C61.3106 31.7561 62.4932 30.3107 62.2961 28.7339Z"
                            fill="#FCC323" />
                    </svg>
                    <a href="tel:<?=$bauer['contacts-sets-phone1']?>"><?=$bauer['contacts-sets-phone1']?></a>
                    <a href="tel:<?=$bauer['contacts-sets-phone2']?>"><?=$bauer['contacts-sets-phone2']?></a>
                </div>
                <div class="contacts__item">
                    <svg width="64" height="41" viewBox="0 0 64 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.68293 0C4.06949 0 3.48718 0.128859 2.95122 0.341463L30.122 23.4634C31.3111 24.4764 32.6373 24.4771 33.8293 23.4634L61.0244 0.317026C60.4962 0.111523 59.9197 0 59.3171 0H4.68293ZM0.0487805 4C0.0170302 4.22103 0 4.45284 0 4.68293V35.9024C0 38.4967 2.08863 40.5854 4.68293 40.5854H59.3171C61.9114 40.5854 64 38.4967 64 35.9024V4.68293C64 4.45284 63.983 4.22103 63.9512 4L36.878 27.0244C34.0716 29.411 29.8795 29.4148 27.0732 27.0244L0.0487805 4Z"
                            fill="#FCC323" />
                    </svg>

                    <a href="mailto:<?=$bauer['contacts-sets-mail']?>"><?=$bauer['contacts-sets-mail']?></a>
                </div>
                <div class="contacts__item">
                    <img src="<?=get_template_directory_uri()?>/img/whatsapp.png" alt="">

                    <a href="tel:<?=$bauer['contacts-sets-wapp']?>"><?=$bauer['contacts-sets-wapp']?></a>
                    <p>(viber, whats app)</p>
                </div>
            </div>
            <div class="contacts__forma">
                <div class="contacts__block">
                    <h3 class="contacts__forma_title subtittle">
                        ОСТАЛИСЬ ВОПРОСЫ
                    </h3>
                    <p>Заполните форму ниже и наши специалисты с вами свяжутся в ближайшее время.</p>
                    <form class="send_mail" action="<?php echo admin_url('admin-ajax.php?action=send_mail'); ?>" method="POST">
                        <input type="text" id="mail_name" name="name" placeholder="Имя" required>
                        <input type="tel" id="mail_phone" name="tel" placeholder="Телефон" required>
                        <button type="submit">
                            Отправить заявку
                        </button>
                    </form>
                </div>
                <div class="contacts__block-right">

                </div>
            </div>
        </div>
    </section>


    <?php get_footer();?>