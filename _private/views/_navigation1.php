<nav class="navbar">
        <div class="brand-title"><img style="float: left;" src="/images/Home_Images/Logo.png" alt=""></div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a></li>
            <li><a href="<?php echo url( 'OverOns' ) ?>"<?php if ( current_route_is( 'OverOns' ) ): ?> class="active"<?php endif ?>>Over Ons</a></li>
            <li><a href="<?php echo url( 'Contact' ) ?>"<?php if ( current_route_is( 'Contact_form' ) ): ?> class="active"<?php endif ?>>Contact</a></li>
              <li><a href="<?php echo url( 'transfor' ) ?>"<?php if ( current_route_is( 'transfor' ) ): ?> class="active"<?php endif ?>>Word Transformer</a></li>
            <li><a style="color: #ff6016;" class="rgi" href="<?php echo url( 'Contact' ) ?>"<?php if ( current_route_is( 'Contact_form' ) ): ?> class="active"<?php endif ?>>Inloggen</a></li>
            <li><a class="regi" href="<?php echo url( 'Contact' ) ?>"<?php if ( current_route_is( 'Contact_form' ) ): ?> class="active"<?php endif ?>>Registreren</a></li>

          </ul>
        </div>
      </nav>