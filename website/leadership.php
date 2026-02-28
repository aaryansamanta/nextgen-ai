<?php
$id = 1;
$avatar = 'photo';
if (isset($_GET['id']) && $_GET['id']) {
  $id = $_GET['id'];
  switch ($id) {
    case '1':
      $avatar = 'AaryanSamanta';
      break;
    case '2':
      $avatar = 'ShaayonSamanta';
      break;
    case '3':
      $avatar = 'LaurenceDang';
      break;
    case '4':
      $avatar = 'CarlosFebrero';
      break;
  }
} else {
  header('Location: /leadership.php?id=1');
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Leadership - NextGenAI</title>
  <meta name="description" content="Empowering Young Thinkers for an AI-Powered Tomorrow">
  <meta name="keywords" content="ethical AI tutoring, equitable education, open- source AI, underserved learners">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="css/styles-merged.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/custom.css">

  <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>


  <?php require_once 'header.php'; ?>

  <section class="probootstrap-hero probootstrap-hero-inner" style="background-image: url(img/hero_bg_bw_1.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
            <h1 class="probootstrap-heading probootstrap-animate">About Us <span>Empowering Young Thinkers for an AI-Powered Tomorrow</span></h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 probootstrap-animate">
          <p><img src="img/<?= $avatar ?>.png" alt="avatar" class="img-responsive"></p>
        </div>
        <?php if ($id === '1') { ?>
          <div class="col-md-7 col-md-push-1 probootstrap-animate">
            <h2>Aaryan Samanta</h2>
            <p><i>President, Founder & CEO</i></p>
            <p>Aaryan Samanta, Founder & President of NextGen International Organization and President, Founder, and CEO of AI Ethos, Inc, is a Rising Sophomore & AI Research Enthusiast in Cupertino, California, and an exceptional young scholar with outstanding achievements in academics, athletics, and music. Leading AI Ethos, Inc., a non-profit dedicated to empowering equitable AI learning globally and ethically, and NextGen International Organization, committed to empowering young thinkers for an AI-powered tomorrow, Aaryan drives transformative educational initiatives. He has earned perfect scores in the AMC8 and AMC10 Math Olympiads, qualified for the AIME, and secured perfect scores in USACO Gold and Bronze contests. Passionate about AI and its medical applications, Aaryan conducts pioneering research on pneumonia detection using Convolutional Neural Networks, ethical AI awareness alongside a Stanford scholar, and molecular clock technology at UC Santa Barbara. In athletics, he holds school records in the 100m, 400m, and 4x100m track events, and in music, he has earned a Superior rating at the CMEA Festival for percussion. Fluent in Spanish and Bengali, Aaryan’s dedication to AI, advanced mathematics, and community impact establishes him as an inspiring leader in Silicon Valley.</p>
            <p>Email: president@nextgenai.org</p>
          </div>
        <?php } elseif ($id === '2') { ?>
          <div class="col-md-7 col-md-push-1 probootstrap-animate">
            <h2>Shaayon Samanta</h2>
            <p><i>Vice President & Founder</i></p>
            <p>Shaayon serves as Vice President of the NextGenAI International Organization, an exceptional 6th grader passionately advancing its mission to empower young thinkers for an AI-driven future. A distinguished scholar, Shaayon achieved 3rd place nationally in Math Kangaroo, 6th place in MathLeague.org state competitions, and earned a spot as a national qualifier. Additionally, Shaayon received a USA AMC8 Certificate of Achievement and was a runner-up in the Faria Elementary School Spelling Bee.</p>
            <p>Driven by a deep curiosity for Artificial Intelligence, Computer Science, Advanced Mathematics, Human Anatomy, Genetics, History, and Music Theory, Shaayon demonstrates proficiency in Python, Java, and intermediate Spanish. Their accolades include the Math Abacus All-USA Calculation Silver Place and Gold Level in swimming, showcasing a remarkable blend of academic excellence and extracurricular achievement.</p>
            <p>Email: vicepresident@nextgenai.org</p>
          </div>
        <?php } elseif ($id === '3') { ?>
          <div class="col-md-7 col-md-push-1 probootstrap-animate">
            <h2>Laurence Dang</h2>
            <p><i>Mentor</i></p>
            <p>Laurence Dang is Mentor of NextGenAI International Organization, a distinguished educator and leader, serving as Academic Dean and Chair of the Department of Mathematics and Sciences at Legend College Preparatory in Cupertino, California, Director for AI Ethos, Inc., and Mentor for NextGenAI International Organization. With a B.S. and M.S. in Applied Mathematics from Santa Clara University, where she excelled as a Teaching and Research Assistant specializing in image processing and wavelet transform research, Laurence brings a robust academic foundation to her work. Her prior experience as a Member of Technical Staff at Mitsubishi Electric Automation, Inc. equipped her with practical expertise in applying mathematical principles to technical challenges, enriching her educational approach. At Legend College Preparatory, Laurence has shaped its STEM curriculum, promoting inquiry-based learning and flexible math pathways to prepare students for top-tier universities. Fluent in English, French, and German, she fosters inclusive, student-centered environments, making her a pivotal figure in education and the Silicon Valley community.</p>
          </div>
        <?php } elseif ($id === '4') { ?>
          <div class="col-md-7 col-md-push-1 probootstrap-animate">
            <h2>Carlos Febrero</h2>
            <p><i>Mentor</i></p>
            <p>Carlos Febrero is Mentor of NextGenAI International Organization AI Educator and Lead Engineer based in Fort Lauderdale, FL. Specializing in Artificial Intelligence, Java, and cloud-native development, he leverages his expertise to design scalable enterprise AI software for global platforms. At Legend College Preparatory, he instructs courses on AI Technology, Python, Data Science, and Machine Learning, guiding students through the complexities of AI ethics. With a strong background as a senior software engineer at Amadeus, he brings a unique blend of practical experience and academic insight to his work, all while balancing his passion for an active lifestyle as an avid BMX enthusiast. His passion lies in building technologies that empower the next generation of innovators while ensuring responsible and ethical practices in a rapidly evolving digital landscape.</p>
          </div>
        <?php } elseif ($id === '5') { ?>
          <div class="col-md-7 col-md-push-1 probootstrap-animate">
            <h2>Dr. Paul Chan</h2>
            <p><i>Honorary Advisor</i></p>
            <p>Dr. Paul Chan is the Founder and Principal of Legend College Preparatory (LCP), a prestigious WASC-accredited private high school in Cupertino, California — Silicon Valley's innovation epicenter.</p>
            <p>A forward-thinking leader in personalized education, Dr. Chan established LCP to deliver rigorous, UC-approved curricula tailored for highly motivated students in grades 6–12 aiming for elite universities. Under his guidance, the school excels in advanced STEM programs, expanded AI offerings (including UC-approved courses, certificates in AI/data science, ethical AI, and real-world problem-solving), AP pathways, and research-focused initiatives that build future-ready skills.</p>
            <p>Committed to evolving education amid rapid change, Dr. Chan emphasizes adaptability, academic excellence, personalized counseling, and global readiness — positioning LCP graduates for top-tier admissions and leadership in an AI-driven world.</p>
          </div>
        <?php } elseif ($id === '6') { ?>
          <div class="col-md-7 col-md-push-1 probootstrap-animate">
            <h2>Dr. LiChieh Lin</h2>
            <p><i>Honorary Advisor</i></p>
            <p><strong>Dr. LiChieh Lin</strong> is an esteemed <strong>AI Expert & Consultant/Lecturer</strong> with the <strong>Taiwan Artificial Intelligence Industry Association (TAIA)</strong>, and serves as <strong>Principal of Legend College Preparatory (LCP) Taiwan</strong> — the school's innovative branch campus and initiatives in Taipei. A PhD holder with deep expertise in AI industrialization, talent development, cross-sector applications, and ethical innovation (spanning smart manufacturing, healthcare, finance, and beyond), Dr. Lin has a distinguished background including roles at IBM Watson Research, academic positions in Taiwan and China, and leadership in advancing AI ecosystems. In his dual capacity, Dr. Lin first leads as <strong>AI Expert & Consultant/Lecturer</strong> for TAIA, contributing to strategic consultations, industry collaborations, and talent cultivation programs. He then applies this expertise as <strong>Principal of LCP Taiwan</strong>, overseeing the integration of UC-approved curricula, advanced AI education (machine learning, data science, ethical AI), real-world projects, virtual internships, co-developed courses, and global certification pathways in partnership with TAIA.</p>
            <p>This leadership bridges Silicon Valley standards with Taiwan's thriving tech landscape, empowering students with international perspectives, practical AI skills, and readiness for leadership in an AI-driven future.</p>
          </div>
        <?php } ?>

      </div>

    </div>
  </section>

  <section class="probootstrap-section probootstrap-border-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
          <h2>AI Leadership & Mentors</h2>
          <p class="lead">Organization Structure</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 probootstrap-animate">
          <a href="leadership.php?id=1" class="probootstrap-team">
            <img src="img/AaryanSamanta.png" alt="avatar" class="img-responsive">
            <div class="probootstrap-team-info">
              <h3>Aaryan Samanta <span class="position">President & Founder (Chief, Global AI Ambassador)</span></h3>
            </div>
          </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 probootstrap-animate">
          <a href="leadership.php?id=2" class="probootstrap-team">
            <img src="img/ShaayonSamanta.png" alt="avatar" class="img-responsive">
            <div class="probootstrap-team-info">
              <h3>Shaayon Samanta <span class="position">Vice President & Founder (Global AI Ambassador)</span></h3>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-6 probootstrap-animate">
          <a href="leadership.php?id=3" class="probootstrap-team">
            <img src="img/LaurenceDang.png" alt="avatar" class="img-responsive">
            <div class="probootstrap-team-info">
              <h3>Laurence Dang <span class="position">Mentor</span></h3>
            </div>
          </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 probootstrap-animate">
          <a href="leadership.php?id=4" class="probootstrap-team">
            <img src="img/CarlosFebrero.png" alt="avatar" class="img-responsive">
            <div class="probootstrap-team-info">
              <h3>Carlos Febrero <span class="position">Mentor</span></h3>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-6 probootstrap-animate">
          <a href="leadership.php?id=5" class="probootstrap-team">
            <img src="img/photo.png" alt="avatar" class="img-responsive">
            <div class="probootstrap-team-info">
              <h3>Dr. Paul Chan <span class="position">Honorary Advisor</span></h3>
            </div>
          </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 probootstrap-animate">
          <a href="leadership.php?id=6" class="probootstrap-team">
            <img src="img/photo.png" alt="avatar" class="img-responsive">
            <div class="probootstrap-team-info">
              <h3>Dr. LiChieh Lin <span class="position">Honorary Advisor</span></h3>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>
      </div>
    </div>
  </section>

  <?php require_once 'footer.php'; ?>

</body>

</html>