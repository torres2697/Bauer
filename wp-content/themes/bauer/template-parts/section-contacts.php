<section class="contacts">
    <div class="contacts__container container">
        <div class="contacts__forma contacts__forma-advantages">
            <div class="contacts__block">
                <h3 class="contacts__forma_title subtittle">
                    ОСТАЛИСЬ ВОПРОСЫ
                </h3>
                <p>Заполните форму ниже и наши специалисты с вами свяжутся в ближайшее время.</p>
                <form class="send_mail" action="<?php echo admin_url('admin-ajax.php?action=send_mail'); ?>" method="POST">
                    <input type="text" name="name" id="mail_name" placeholder="Имя" required>
                    <input type="tel" name="tel" id="mail_phone" placeholder="Телефон" required>
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