<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Programs - NextGenAI</title>
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
            <h1 class="probootstrap-heading probootstrap-animate">Programs <span>Empowering Young Thinkers for an AI-Powered Tomorrow</span></h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="core-tracks" class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 probootstrap-animate">
          <p><img src="img/img_sq_1.jpg" alt="AI Pathways" class="img-responsive"></p>
        </div>
        <div class="col-md-5 col-md-pull-6 probootstrap-animate">
          <h2>AI Pathways</h2>
          <h4><i>Core Tracks</i></h4>
          <p>At NextGenAI our mission is to empower the next generation with ethical AI skills, innovation, global connectivity, and a strong commitment to social good. We deliver this through four interconnected core programs/tracks, designed for students worldwide — from beginners to advanced learners — to build technical fluency, leadership, and responsibility in an AI-driven future.</p>
          <p>
            <b>1. Accelerated AI Learning</b><br>
            The foundational track for rapid, structured AI skill-building with a strong ethical core.<br>
            • Intensive AI Bootcamps & Workshops: Hands-on training in fundamentals, Python/ML coding, neural networks, data science, and ethical principles (hybrid/virtual for global access).<br>
            • AI Ethical Awareness Initiative: Fall 2025 school survey, curriculum development, and creation of a validated AI Ethical Awareness Scale (drawing from frameworks like Berkeley Assessment System).<br>
            • Guest Speaker Series: Quarterly expert talks from academia, industry (e.g., TAIA partners), and startups.<br>
            • UC-Approved AI Courses: Honors-level electives (e.g., Python & AI, AI and Humanity) leading to certifications.<br>
            Goal: Fast-track AI literacy while embedding ethical thinking from day one.
          </p>
        </div>
      </div>
      <div>
        <p>
          <b>2. Innovation & Internships</b><br>
          Hands-on application and professional experience to turn ideas into impact.<br>
          • AI Internships: Mentored research in bias mitigation, emotion recognition, medical imaging, and sustainable AI solutions (virtual/hybrid with expert mentors).<br>
          • Design a Future-AI Tool: Student-led proposals and prototypes addressing real-world issues in healthcare, education, sustainability, or equity.<br>
          • Showcase Days: Community presentations to peers, families, organizations, and partners for feedback, visibility, and portfolio building.<br>
          Goal: Develop innovation mindset and real-world credentials for college and careers.
        </p>
        <p>
          <b>3. Global Outreach & Connect</b><br>
          Building international networks and equitable access through collaboration.<br>
          • Virtual Global Meetups: AI club connections worldwide for joint challenges, cultural exchanges, and collaborative projects.<br>
          • Student-Led Media: AI blog, podcast, or newsletter sharing youth insights, interviews, and diverse stories.<br>
          • Community AI Literacy Workshops: Free sessions for younger students, parents, and underserved groups (multilingual support).<br>
          • Strategic Partnerships: Collaborations with schools, universities, NGOs (e.g., TAIA Taiwan), and industry for expanded reach.<br>
          Goal: Foster cross-cultural understanding and inclusive AI education globally.
        </p>
        <p>
          <b>4. AI Social Impact (AI Ethos)</b><br>
          Guided by AI Ethos principles — responsible, inclusive, and human-centered AI for societal benefit.<br>
          • AI for Social Good Projects: Student initiatives tackling global challenges like healthcare equity, education access, environmental sustainability, and bias reduction.<br>
          • Ethical Advocacy & Tools: Bias audits, open-source privacy-first AI solutions, and policy workshops.<br>
          • Impact Measurement & Outreach: Tracking reach, engagement, and outcomes; multilingual tutoring for marginalized learners.<br>
          • Support for Underserved/International Students: Social (meetups/media), academic (accessible bootcamps/internships), and cultural (diverse perspectives on global issues).<br>
          Goal: Ensure AI serves humanity responsibly and reduces divides.<br>
          These tracks are flexible — students can focus on one or combine them for a comprehensive experience. Together, they prepare youth to lead ethically, innovate boldly, connect globally, and create positive change. Join us in shaping a better AI future! 🚀
        </p>
      </div>
    </div>
  </section>

  <section class="probootstrap-section probootstrap-border-top">
    <div class="container">
      <style>
        .timeline {
          position: relative;
          margin: 0;
          padding: 0;
        }

        .timeline::before {
          content: '';
          display: block;
          position: absolute;
          top: 0;
          left: calc(50% - 1px);
          width: 2px;
          height: 100%;
          background-color: #520068;
          z-index: -1;
        }

        .timeline li {
          display: flex;
        }

        .timeline li+li {
          margin-top: 30px;
        }

        .timeline li:nth-child(even) {
          flex-direction: row-reverse;
        }

        .timeline-date,
        .timeline-content {
          width: 50%;
          padding: 0 20px;
        }

        .timeline-date {
          line-height: 20px;
        }

        .timeline-date span {
          display: inline-block;
          margin: 15px 0;
          padding: 5px 15px;
          border-radius: 20px;
          background: linear-gradient(to right, #520068, #bb64d2);
          color: #fff;
        }

        .timeline li:nth-child(odd) span {
          float: right;
        }

        .timeline li:nth-child(even) span {
          float: left;
        }

        .timeline-point {
          width: 20px;
          height: 20px;
          margin-top: 20px;
          border: 2px solid #fff;
          border-radius: 10px;
          background-color: #520068;
        }

        .timeline li:nth-child(even) .timeline-content {
          text-align: right;
        }

        .timeline-content p {
          margin: 0;
          padding: 20px;
          border-radius: 10px;
          background-color: #f7ebfb;
        }

        .timeline-title {
          display: flex;
          align-items: center;
          height: 60px;
          margin-bottom: 10px;
          overflow: hidden;
        }

        .timeline-title h6 {
          flex: 1;
          margin: 0;
          line-height: 30px;
        }
      </style>
      <h2 class="text-center">Our Events</h2>
      <ul class="timeline">
        <li>
          <div class="timeline-date"><span>1/20/25</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Vision defined</h6>
            </div>
            <p>Vision defined</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>3/15/25</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>NextGenAI ideation finalized</h6>
            </div>
            <p>NextGenAI ideation finalized</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>4/10/25</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Global Ambassador model created</h6>
            </div>
            <p>Global Ambassador model created</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>8/10/25</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>NextGenAI.org launched (v1)</h6>
            </div>
            <p>NextGenAI.org launched (v1)</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>8/10/25–8/13/25</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Taiwan Roadshow + STUST MOU signed</h6>
            </div>
            <p>Taiwan Roadshow + STUST MOU signed</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>9/16/25</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Disease–Symptom EDA research exploration</h6>
            </div>
            <p>Disease–Symptom EDA research exploration</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>10/5/25</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Accelerated AI Learning Track launched</h6>
            </div>
            <p>Accelerated AI Learning Track launched</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>10/27/25</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>AI Social Impact Track launched</h6>
            </div>
            <p>AI Social Impact Track launched</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>11/06/25–11/10/25</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Taiwan Roadshow</h6>
            </div>
            <p>Taiwan Roadshow</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>12/19/25</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>MultiAgent AI Pilot kickoff</h6>
            </div>
            <p>MultiAgent AI Pilot kickoff</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>12/27/25</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Learn AI by Building AI — Session 1</h6>
            </div>
            <p>Learn AI by Building AI — Session 1</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>1/3/26</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Learn AI by Building AI — Session 2</h6>
            </div>
            <p>Learn AI by Building AI — Session 2</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>2/14/26</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Learn AI by Building AI — Session 3</h6>
            </div>
            <p>Learn AI by Building AI — Session 3</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>3/21/26</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Learn AI by Building AI — Session 4</h6>
            </div>
            <p>Learn AI by Building AI — Session 4</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>4/9/26</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>UC Berkeley Student Innovation Showcase</h6>
            </div>
            <p>UC Berkeley Student Innovation Showcase</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>4/18/26</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Learn AI by Building AI — Session 5</h6>
            </div>
            <p>Learn AI by Building AI — Session 5</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>4/22/26</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Impact milestone: 100+ participants, 2 countries, 2 institutional partnerships</h6>
            </div>
            <p>Impact milestone: 100+ participants, 2 countries, 2 institutional partnerships</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>5/23/26</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Learn AI by Building AI — Session 6</h6>
            </div>
            <p>Learn AI by Building AI — Session 6</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>6/1/26–7/31/26</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Accelerated AI Learning Courses with LCP</h6>
            </div>
            <p>Accelerated AI Learning Courses with LCP</p>
          </div>
        </li>
        <li>
          <div class="timeline-date"><span>6/13/26</span></div>
          <div class="timeline-point"></div>
          <div class="timeline-content">
            <div class="timeline-title">
              <h6>Learn AI by Building AI — Session 7</h6>
            </div>
            <p>Learn AI by Building AI — Session 7</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section id="how-we-collaborate" class="probootstrap-section probootstrap-border-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 probootstrap-animate">
          <p><img src="img/img_sq_1.jpg" alt="AI Pathways" class="img-responsive"></p>
        </div>
        <div class="col-md-5 col-md-push-1 probootstrap-animate">
          <h2>Collaboration Strategy</h2>
          <h4><i>How We Collaborate</i></h4>
          <p>NextGenAI builds a robust, multi-stakeholder ecosystem to scale ethical AI education, foster mentorship, secure resources, and drive global impact for youth. Our strategy emphasizes inclusive partnerships that transcend traditional boundaries, leveraging institutional expertise, nonprofit reach, industry innovation, and open networked models to create borderless learning opportunities.</p>
        </div>
      </div>
      <div>
        <h4>Key Partners</h4>
        <p>
          • High Schools & Universities (e.g., LCP, STUST): We collaborate with secondary schools—including Legend College Preparatory (LCP US), LCP Taiwan, and their international initiatives—to launch AI clubs, integrate ethical AI curricula (bootcamps, workshops, certifications), and co-develop programs. We partner with university AI labs and departments like those at Southern Taiwan University of Science and Technology (STUST) in Tainan, Taiwan, for mentorship, guest lectures, research access, and advanced guidance. STUST’s practical AI focus (AI Maker Platform, Southern AI Talent Certification Center, smart manufacturing) supports pathways to higher education and real-world talent development in southern Taiwan.<br>
          • Non-Profits & NGOs (e.g., AI Ethos, Inc): We work with education- and technology-access-focused organizations (e.g., AI Ethos; similar to Code.org or UNESCO initiatives) to amplify community programs, secure grants, bridge access gaps for underserved youth, and advocate for responsible AI policies.<br>
          • Industry (e.g., TAIA): We engage AI companies, startups, and groups like TAIA (Taiwan Artificial Intelligence Industrial Association) for guest speakers, internships, real-world projects, and tools, creating career pathways in bias mitigation, medical imaging, sustainable applications, and ethical AI.<br>
          • Distinguished Faculty from Top Universities (Stanford, Tsinghua, Nanjing): Distinguished faculty offer expert guidance at the intersection of AI, healthcare, ethics, and innovation: an Associate Professor Emeritus from Stanford University School of Medicine, specializing in biomedical engineering and AI-driven medical applications, alongside a Postdoctoral Fellow at Tsinghua University and Research Fellow at Nanjing University, providing advanced insights into AI systems, ethical governance, and cross-cultural collaboration.
        </p>
        <p>Through these partnerships, NextGenAI empowers youth with ethical awareness, practical skills, and a global perspective in AI. Join us in shaping tomorrow’s responsible AI leaders! Contact us for partnership or program details.</p>
      </div>
    </div>
  </section>

  <?php require_once 'footer.php'; ?>

</body>

</html>