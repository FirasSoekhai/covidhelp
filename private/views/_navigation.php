<ul>
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ):?> class="active"<?php endif ?>>Producten</a>
    </li>
    <li>
        <a href="<?php echo url( 'shoppingcart' ) ?>"<?php if ( current_route_is( 'shoppingcart' ) ):?> class="active"<?php endif ?>>Winkelwagen</a>
    </li>
<?php if ( !isset($_SESSION['user_id']) ): ?>
    <li>
        <a href="<?php echo url( 'login.form' ) ?>"<?php if ( current_route_is( 'login.form' ) ):?> class="active"<?php endif ?>>inloggen</a>
    </li>
<?php endif ?>
<?php if ( isset($_SESSION['user_id']) ): ?>
    <li>
        <a href="<?php echo url( 'logout' ) ?>"<?php if ( current_route_is( 'logout' ) ):?> class="active"<?php endif ?>>uitloggen</a>
    </li>
<?php endif ?>
</ul>