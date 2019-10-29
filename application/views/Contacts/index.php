<?php echo $header; ?>
    <main>
        <?php echo $page_title; ?>
        <section class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="contacts col-lg-6 col-md-12">
                        <h3 class="row-title"><?php echo $local_contacts_title; ?></h3>
                        <p class="contact-adress">
                            <span><?php echo $local_adress_title; ?></span>
                            <span><?php echo $local_adress; ?></span>
                        </p>
                        <p class="contact-info">
                            <i class="fas fa-phone-volume"></i>
                            <span>+7 (7252) 43-90-20</span>
                        </p>
                        <p class="contact-info">
                            <i class="fas fa-mobile-alt"></i>
                            <span>+7 (702) 111-44-66</span>
                        </p>
                        <p class="contact-info">
                            <i class="fas fa-envelope"></i>
                            <span>pioner-elit@mail.ru</span>
                        </p>
                    </div>
                    <div class="feedback contact-us-feedback col-lg-6 col-md-12">
                        <h3 class="row-title"><?php echo $local_contact_form_title; ?></h3>
                        <form method="post" class="contact-form">
                            <div class="client-data">
                                <input type="text" name="client_name" placeholder="<?php echo $local_contact_form_name; ?>" required>
                                <input type="text" name="client_number" placeholder="<?php echo $local_contact_form_phone; ?>" class="phone_mask" required>
                            </div>
                            <div class="client-data">
                                <input type="text" name="client_email" placeholder="<?php echo $local_contact_form_email; ?>" required>
                                <input type="text" name="client_captcha" placeholder="<?php echo $local_contact_form_captcha; ?>" required>
                            </div>
                            <div class="client-data">
                                <textarea name="client_text" placeholder="<?php echo $local_contact_form_msg; ?>"></textarea>
                            </div>
                            <input id="contact_send" type="submit" value="<?php echo $local_contact_form_send; ?>">
                        </form>
                    </div>
                </div>
                <div class="adress-map">
                    <h3 class="row-title"><?php echo $local_map_title; ?></h3>
                    <iframe src="https://yandex.ua/map-widget/v1/?um=constructor%3A1f11c8508c91c9967db90dce4a1c466432236ae7b2f801ed6e4435914e5f5f86&amp;source=constructor" frameborder="0"></iframe>
                </div>
            </div>
        </section>
    </main>
<?php echo $footer; ?>