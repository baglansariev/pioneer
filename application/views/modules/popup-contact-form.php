<div class="contact-form-cover">
    <form method="post">
        <div class="client-data">
            <input type="text" name="client_name" placeholder="<?php echo $local_feedback_name; ?>" required>
            <input type="text" name="client_number" placeholder="<?php echo $local_feedback_phone; ?>" class="phone_mask" required>
        </div>
        <div class="client-data">
            <input type="text" name="client_email" placeholder="<?php echo $local_feedback_email; ?>" required>
            <input type="text" name="client_modal_captcha" placeholder="<?php echo $local_feedback_captcha; ?>" required>
        </div>
        <div class="client-data">
            <textarea name="client_text" placeholder="<?php echo $local_feedback_msg; ?>"></textarea>
        </div>
        <input id="popup_send" type="submit" value="<?php echo $local_feedback_send; ?>">
        <span class="form-close">
            <i class="fas fa-times"></i>
        </span>
    </form>
</div>