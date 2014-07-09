<div class="four columns marginTop contactDetails offset-by-two">
    <p class="contactAddress">
        <?php echo $street; ?>
        <?php if( isset( $instance['city'] ) || isset( $instance['zipcode'] ) ) : ?>
        <br/><?php echo $city; ?> <?php echo $zipcode; ?></li>
        <?php endif; ?>
        <?php if( isset( $instance['country'] ) ) : ?>
        <br/><?php echo $country; ?></li>
        <?php endif; ?>
    </p>            
</div>
<div class="four columns marginTop contactDetails">
    <?php if( isset( $instance['phone'] ) ) : ?>
    <p class="contactPhone">Phone: <?php echo $phone; ?></p>
    <?php endif; ?>
    <?php if( isset( $instance['email'] ) ) : ?>
    <p class="contactEmail">Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
    <?php endif; ?>
    <?php if( isset( $instance['skype'] ) ) : ?>
    <p class="contactSkype">Skype: <a href="skype:<?php echo $skype; ?>?add"><?php echo $skype; ?></a></p>
    <?php endif; ?>
</div>
<div class="four columns marginTop contactDetails">
    <p class="contactTime">
        <?php if( isset( $instance['mf'] ) ) : $arr = explode( ',', $mf ); ?>
        Mon-Fri: <?php echo $arr[0]; ?> &rarr; <?php echo $arr[1]; ?>
        <?php endif; ?>
        <?php if( isset( $instance['sat'] ) ) : $arr = explode( ',', $sat ); ?> 
    	<br/>Sat: <?php echo $arr[0]; ?> &rarr; <?php echo $arr[1]; ?>
        <?php endif; ?>
        <?php if( isset( $instance['sunday'] ) ) : ?> 
    	<br/>Sunday: <?php echo $sunday; ?>
        <?php endif; ?>
    </p>
</div>
<div class="clearfix"></div>