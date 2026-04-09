<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NextGenAI</title>
  <meta name="description" content="NextGenAI">
  <meta name="keywords" content="NextGenAI">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="css/styles-merged.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/custom.css">

  <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  <script>
    window.onload = function() {
      const v1 = document.querySelector('#hero-video-1')
      const v2 = document.querySelector('#hero-video-2')
      const v3 = document.querySelector('#hero-video-3')
      v1.addEventListener('ended', function() {
        v1.style.visibility = 'hidden'
        v2.style.visibility = 'visible'
        v2.play()
      })
      v2.addEventListener('ended', function() {
        v2.style.visibility = 'hidden'
        v3.style.visibility = 'visible'
        v3.play()
      })
      v3.addEventListener('ended', function() {
        v3.style.visibility = 'hidden'
        v1.style.visibility = 'visible'
        v1.play()
      })
    }
  </script>
</head>

<body>


  <?php require_once 'header.php'; ?>

  <section class="probootstrap-hero" style="position:relative;background-image: url(img/hero_bg_bw_1.jpg)" data-stellar-background-ratio="0.5">
    <div style="position:absolute;top:0;left:0;width:100%;height:100%;">
      <video id="hero-video-1" src="video/hero.mp4" preload="auto" autoplay muted style="width:100%;height:100%;object-fit:cover;position:absolute;visibility:visible"></video>
      <video id="hero-video-2" src="video/hero2.mp4" preload="auto" muted style="width:100%;height:100%;object-fit:cover;position:absolute;visibility:hidden"></video>
      <video id="hero-video-3" src="video/hero3.mp4" preload="auto" muted style="width:100%;height:100%;object-fit:cover;position:absolute;visibility:hidden"></video>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
            <h1 class="probootstrap-heading probootstrap-animate">NextGenAI <span>Empowering Young Thinkers for an AI-Powered Tomorrow</span></h1>
            <p class="probootstrap-animate"><a href="donate.php" class="btn btn-primary btn-lg">Donate Now</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="probootstrap-service-intro">
      <div class="container">
        <div class="probootstrap-service-intro-flex">
          <div class="item probootstrap-animate" data-animate-effect="fadeIn">
            <div class="icon">
              <i class="icon-wallet"></i>
            </div>
            <div class="text">
              <h2><a href="/about.php#our-mission">Our Mission</a></h2>
              <p>Our Goal, Vision & Commitment</p>
            </div>
          </div>
          <div class="item probootstrap-animate" data-animate-effect="fadeIn">
            <div class="icon">
              <i class="icon-heart"></i>
            </div>
            <div class="text">
              <h2><a href="/programs.php#events">Our Events</a> <span style="color:#fff">&</span> <a href="/impact.php#our-impact">Impact</a></h2>
              <p>Programs & Results</p>
            </div>
          </div>
          <div class="item probootstrap-animate" data-animate-effect="fadeIn">
            <div class="icon">
              <i class="icon-graduation-cap"></i>
            </div>
            <div class="text">
              <h2><a href="/involved.php">Support Us</a></h2>
              <p>Volunteer, Partner or Donate</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
          <h2>Global AI Ambassador Taiwan Roadshow</h2>
          <p class="lead">Under the visionary leadership of Aaryan Samanta (Founder & Chief, Global AI Ambassador) and Shaayon (Global AI Ambassador), two students from Legend College Preparatory (LCP), a transformative Taiwan exchange program ignited enthusiasm and innovation. Their dedication drove three key outcomes:</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate" data-animate-effect="fadeIn">
          <div class="probootstrap-image-text-block probootstrap-cause">
            <figure>
              <img src="img/img_sm_1.jpg" alt="NextGenAI" class="img-responsive">
            </figure>
            <div class="probootstrap-cause-inner">

              <h2>Established NextGenAI Organization</h2>

              <p>Launched a dynamic platform for AI education, uniting U.S. and Taiwanese high schools, universities, AI enterprises, and students to co- create the future of the AI industry through global collaboration.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate" data-animate-effect="fadeIn">
          <div class="probootstrap-image-text-block  probootstrap-cause">
            <figure>
              <img src="img/img_sm_2.jpg" alt="NextGenAI" class="img-responsive">
            </figure>
            <div class="probootstrap-cause-inner">

              <h2>Signed MOU with Southern Taiwan University of Science and Technology</h2>

              <p>Secured a partnership to advance Taiwan–U.S. cooperation, with LCP co-developing cutting-edge AI courses and teaching materials.</p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate" data-animate-effect="fadeIn">
          <div class="probootstrap-image-text-block  probootstrap-cause">
            <figure>
              <img src="img/img_sm_3.jpg" alt="NextGenAI" class="img-responsive">
            </figure>
            <div class="probootstrap-cause-inner">

              <h2>Engaged Taiwanese Community</h2>

              <p>Despite expecting 60 participants, the event drew 30 enthusiastic students and parents, fostering lively interactions and marking a resounding success.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="probootstrap-section probootstrap-bg probootstrap-section-dark" style="background-image: url(img/hero_bg_bw_1.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
          <h2>Organizational Structure</h2>
          <p class="lead">We're building a movement— powered by youth, grounded in purpose, and connected by learning.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="probootstrap-donors text-center probootstrap-animate">
            <figure class="media">
              <img src="img/AaryanSamanta.png" alt="NextGenAI" class="img-responsive">
            </figure>
            <div class="text">
              <h3><a href="leadership.php?id=1">Aaryan Samanta</a></h3>
              <p class="donated">President & Founder (Chief, Global AI Ambassador)</p>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-3">
          <div class="probootstrap-donors text-center probootstrap-animate">
            <figure class="media">
              <img src="img/ShaayonSamanta.png" alt="NextGenAI" class="img-responsive">
            </figure>
            <div class="text">
              <h3><a href="leadership.php?id=2">Shaayon</a></h3>
              <p class="donated">Vice President & Founder (Global AI Ambassador)</p>
            </div>
          </div>
        </div> -->
        <div class="col-md-4">
          <div class="probootstrap-donors text-center probootstrap-animate">
            <figure class="media">
              <img src="img/LaurenceDang.png" alt="NextGenAI" class="img-responsive">
            </figure>
            <div class="text">
              <h3><a href="leadership.php?id=3">Laurence Dang</a></h3>
              <p class="donated">Academic Dean Chair, Dept. of Mathematics and Sciences</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="probootstrap-donors text-center probootstrap-animate">
            <figure class="media">
              <img src="img/CarlosFebrero.png" alt="NextGenAI" class="img-responsive">
            </figure>
            <div class="text">
              <h3><a href="leadership.php?id=4">Carlos Febrero</a></h3>
              <p class="donated">AI Expert & AI Internship Mentor Computer Science Instructor</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section  probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2>Global AI Ambassador Program</h2>
          <p class="lead">Our AI Ethos, Inc. & LCP NextGenAI International Organization</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 probootstrap-animate">
          <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
            <div class="item">

              <div class="probootstrap-testimony-wrap text-center">
                <figure>
                  <img src="img/AaryanSamanta.png" alt="NextGenAI">
                </figure>
                <blockquote class="quote">&ldquo;My vision for AI is rooted in equity and empowerment. I believe AI should be a tool that uplifts everyone, especially those in underserved communities, by providing accessible, ethical, and culturally relevant education. Through the Global AI Ambassador Program, I aim to shape a future where young leaders worldwide use AI to solve real-world challenges responsibly, ensuring no one is left behind.&rdquo; <cite class="author"> &mdash; <span>Aaryan</span></cite></blockquote>
              </div>

            </div>
            <div class="item">
              <div class="probootstrap-testimony-wrap text-center">
                <figure>
                  <img src="img/ShaayonSamanta.png" alt="NextGenAI">
                </figure>
                <blockquote class="quote">&ldquo;I see AI as a bridge to connect diverse cultures and ideas, fostering innovation that respects privacy and promotes fairness. My goal is to create a world where AI education is inclusive, transparent, and community- driven, empowering students to lead with empathy and ethics in an AI-driven future. Together, we’re inspired by AI Ethos, Inc.’s mission to deliver culturally relevant, multilingual, and ethical AI tutoring to underserved learners globally. Our program reflects this by fostering AI literacy, ethical awareness, and cross-cultural collaboration among students.&rdquo; <cite class="author"> &mdash;<span>Shaayon</span></cite></blockquote>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-half">
    <div class="image">
      <div class="image-bg">
        <img src="img/our_mission.jpg" alt="NextGenAI">
      </div>
    </div>
    <div class="text">
      <div class="probootstrap-animate">
        <h3>Our Mission</h3>
        <p>NextGenAI A student-led, mentor-supported organization dedicated to equipping high school students with foundational AI knowledge, encouraging them to design AI-driven solutions for global challenges, and facilitating collaboration among AI clubs worldwide. NextGenAI is dedicated to empowering the next generation of young leaders to thrive in an AI-driven world through a multifaceted approach rooted in education, innovation, and global collaboration.</p>
        <p><a href="about.php" class="btn btn-primary btn-lg">Read More</a></p>
      </div>
    </div>
  </section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 probootstrap-animate">
          <p><img src="img/about_index.png" alt="NextGenAI" class="img-responsive"></p>
          <h3>AI Future Starts Today</h3>
          <p>The AI revolution is transforming industries at an unprecedented pace since 2025 — revolutionizing healthcare with agentic diagnostics and personalized care, personalizing education for millions through AI tutoring, and advancing sustainability with intelligent resource management. Young people must be equipped now to lead ethically in this AI-driven future, addressing critical risks like bias, privacy concerns, and inequality. There is a growing, urgent need for widespread AI literacy, cross-cultural collaboration, and equitable access to bridge global education gaps. NextGenAI seizes this defining moment to engage the next generation early — empowering youth to shape responsible, inclusive AI innovation and ensuring the benefits of AI reach everyone, not just a privileged few. This is the time to act: the future is being built today</p>
          <p><a href="about.php" class="btn btn-primary">Learn More</a></p>
        </div>
      </div>
    </div>
  </section>

  <?php require_once 'footer.php'; ?>

</body>

</html>