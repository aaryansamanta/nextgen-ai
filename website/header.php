<nav class="navbar navbar-default probootstrap-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" title="NextGenAI">NextGenAI</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' ?>"><a href="/">Home</a></li>
                <li class="dropdown<?= $_SERVER['REQUEST_URI'] === '/about.php' ? ' active' : '' ?>">
                    <a href="about.php">About</a>
                    <ul class="dropdown-menu">
                        <li><a href="/about.php#our-mission">Our Mission</a></li>
                        <li><a href="/about.php#organization-structure">Organization Structure</a></li>
                        <li><a href="/about.php#partners">Partners</a></li>
                        <li><a href="/about.php#why-now">Why Now</a></li>
                    </ul>
                </li>
                <li class="dropdown<?= $_SERVER['REQUEST_URI'] === '/programs.php' ? ' active' : '' ?>">
                    <a href="programs.php">Programs</a>
                    <ul class="dropdown-menu">
                        <li><a href="/programs.php#core-tracks">Core Tracks</a></li>
                        <li><a href="/programs.php#how-we-collaborate">How We Collaborate</a></li>
                    </ul>
                </li>
                <li class="dropdown<?= $_SERVER['REQUEST_URI'] === '/impact.php' ? ' active' : '' ?>">
                    <a href="impact.php">Impact</a>
                    <ul class="dropdown-menu">
                        <li><a href="/impact.php#our-impact">Our Impact</a></li>
                        <li><a href="/impact.php#testimonials">Testimonials</a></li>
                        <!-- <li><a href="/impact.php#case-studies">Case Studies</a></li> -->
                    </ul>
                </li>
                <li class="<?= $_SERVER['REQUEST_URI'] === '/involved.php' ? 'active' : '' ?>">
                    <a href="involved.php">Get Involved</a>
                </li>
                <!-- <li class="dropdown<?= $_SERVER['REQUEST_URI'] === '/involved.php' ? ' active' : '' ?>">
                    <a href="involved.php">Get Involved</a>
                    <ul class="dropdown-menu">
                        <li><a href="/involved.php#membership">Membership</a></li>
                        <li><a href="/involved.php#donate">Donate</a></li>
                        <li><a href="/involved.php#volunteer">Volunteer</a></li>
                        <li><a href="/involved.php#partner-with-us">Partner with Us</a></li>
                    </ul>
                </li> -->
                <li class="<?= $_SERVER['REQUEST_URI'] === '/contact.php' ? 'active' : '' ?>"><a href="contact.php">Contact</a></li>
                <li class="probootstra-cta-button last"><a href="donate.php" class="btn btn-primary">Donate</a></li>
            </ul>
        </div>
    </div>
</nav>