<?php
/**
 * Template Name: Full Page Landing
 *
 * ============================================================
 *  CONTENT — edit everything in this block freely.
 *  The HTML/CSS below never needs to be touched.
 * ============================================================
 */

// ── HERO ────────────────────────────────────────────────────
$hero_eyebrow  = 'Singapore';
$hero_first    = 'Julian';
$hero_last     = 'Cheung Jun Yan';
$hero_tagline  = 'Operating at the intersection of technical precision and creative expression — through a camera, a terminal, and a classroom.';
$hero_roles    = ['Photographer', 'Educator', 'Solopreneur', 'Bot Builder'];
$hero_cta_primary   = ['label' => 'View My Work',  'href' => '#accurova'];
$hero_cta_secondary = ['label' => 'Get In Touch',  'href' => '#contact'];

// ── CRED STRIP ──────────────────────────────────────────────
// Each item: ['num' => '...', 'label' => '...']
$cred_items = [
    ['num' => '1000+',             'label' => 'Shoots Delivered'],
    ['num' => '5.0',               'label' => 'Google Rating'],
    ['num' => '🏆',                'label' => 'Singapore SME500 Award 2026'],
    ['num' => 'NUS',               'label' => 'Engineering Graduate'],
    ['num' => 'BNI',               'label' => 'Crescendo Member'],
    ['num' => '8+',                'label' => 'Years in Photography'],
    ['num' => '3',                 'label' => 'Concurrent Ventures'],
    ['num' => 'Straits Times',     'label' => 'Featured'],
    ['num' => 'Lianhe Zaobao',     'label' => 'Featured'],
    ['num' => 'Asia Business Show','label' => '2024 Exhibitor'],
];

// ── VENTURES ────────────────────────────────────────────────
// 'type' controls the accent colour: 'photo' | 'code' | 'edu'
$ventures = [
    [
        'icon'  => '📸',
        'type'  => 'photo',
        'name'  => 'Accurova',
        'badge' => 'Photography & Digital Media',
        'desc'  => 'Premium photography brand with 1000+ shoots, a 5.0 Google rating, and the 2026 Singapore SME500 Award. Covering corporate events, cosplay, portraits, maternity, astrophotography, and brand campaigns — each shot built on accuracy and a genuine eye.',
        'pills' => ['Nikon D850', 'AI-Enhanced Workflow', 'Corporate Events', 'Cosplay', 'Astrophotography'],
    ],
    [
        'icon'  => '⌨️',
        'type'  => 'code',
        'name'  => 'TheBooleanJulian',
        'badge' => 'Software & Automation',
        'desc'  => 'Python-first developer identity building Telegram bots, AI pipelines, and automation tools — from an astrophotography RAW processing engine (AstroForge) to a fleet of AI-powered bots, CI/CD workflows, and an in-progress AI automation course.',
        'pills' => ['Python', 'Telegram Bots', 'FastAPI', 'Claude API', 'Zeabur / GitHub'],
    ],
    [
        'icon'  => '📐',
        'type'  => 'edu',
        'name'  => 'Educare4u',
        'badge' => 'Private Tuition · Science & Maths',
        'desc'  => 'Private tutor for Primary and Secondary Science and Mathematics, operating under the Educare4u platform. AI-assisted personalised lesson planning and adaptive learning techniques — turning complex concepts into clear, confident understanding.',
        'pills' => ['Primary Maths and Science', 'O-Level Maths and Sciences', 'AI-Assisted Planning'],
    ],
];

// ── ACCUROVA STATS ───────────────────────────────────────────
$accurova_stats = [
    ['num' => '1000+','label' => 'Shoots Delivered'],
    ['num' => '5.0',  'label' => 'Google Rating'],
    ['num' => '8+',   'label' => 'Years Experience'],
    ['num' => '678k', 'label' => 'Google Maps Views'],
];

// ── ACCUROVA SERVICES ────────────────────────────────────────
$accurova_services = [
    [
        'title' => 'Corporate & Event Photography',
        'desc'  => 'Conferences, networking events, product launches, brand activations — the moments that matter for your business.',
    ],
    [
        'title' => 'Cosplay & Portrait Sessions',
        'desc'  => 'Dynamic angles, patient collaboration, and a genuine love for the craft — making your character come alive on camera.',
    ],
    [
        'title' => 'Astrophotography',
        'desc'  => 'Deep-sky imaging and nightscape photography, powered by a custom-built Python processing pipeline (AstroForge).',
    ],
    [
        'title' => 'Maternity & Lifestyle',
        'desc'  => 'Gentle, real, and beautifully composed — capturing the moments you\'ll want to print and frame.',
    ],
];

$accurova_award     = '🏆 Singapore SME500 Award 2026 · by ATC';
$accurova_media     = ['Straits Times', 'Lianhe Zaobao', 'Asia Business Show 2024'];
$accurova_website   = 'https://www.accurova.com';
$accurova_contact   = 'https://www.accurova.com/contact/';

// ── TECH STACK PILLS ─────────────────────────────────────────
$tech_stack = ['Python', 'FastAPI', 'Node.js', 'Claude API', 'GitHub Actions', 'Docker', 'Zeabur', 'SQLite', 'React', 'pyannote', 'OpenCV'];

// ── PROJECTS ─────────────────────────────────────────────────
// 'status': '' for shipped, 'In Progress' for WIP
$projects = [
    [
        'icon'   => '🔭',
        'name'   => 'AstroForge',
        'tag'    => 'Python · FastAPI',
        'desc'   => 'Full Python astrophotography RAW-to-JPG processing pipeline. 7-stage processing engine, FastAPI backend, vanilla JS frontend, deployed via Docker on Zeabur.',
        'stack'  => ['rawpy', 'Pillow', 'FastAPI', 'Zeabur'],
        'status' => '',
    ],
    [
        'icon'   => '🎙️',
        'name'   => 'MeetingScribe',
        'tag'    => 'AI · CLI',
        'desc'   => 'Python CLI transcription tool using faster-whisper and pyannote speaker diarization, with Claude-powered executive summaries for meetings.',
        'stack'  => ['faster-whisper', 'pyannote', 'Claude API'],
        'status' => '',
    ],
    [
        'icon'   => '🤖',
        'name'   => 'MonitoringMiku',
        'tag'    => 'Telegram · DevOps',
        'desc'   => 'Meta-bot monitoring an entire Telegram bot fleet. Integrates Zeabur GraphQL API, GitHub API, and AI-powered log diagnosis in real time.',
        'stack'  => ['python-telegram-bot', 'GraphQL', 'GitHub API'],
        'status' => '',
    ],
    [
        'icon'   => '🃏',
        'name'   => 'MiguQuest',
        'tag'    => 'Gamification',
        'desc'   => 'Gamified task manager Telegram bot with Miku theme, XP/streaks, Google Calendar integration, SQLite, and APScheduler.',
        'stack'  => ['SQLite', 'APScheduler', 'Google Calendar API'],
        'status' => '',
    ],
    [
        'icon'   => '🐟',
        'name'   => 'FishLens',
        'tag'    => 'Computer Vision',
        'desc'   => 'Beginner-friendly Python computer vision teaching project for a coding student, using OpenCV to make learning visual and hands-on.',
        'stack'  => ['Python', 'OpenCV', 'Teaching'],
        'status' => 'In Progress',
    ],
];

// ── COMMUNITY CARDS ──────────────────────────────────────────
$community_cards = [
    [
        'icon'  => '🎓',
        'title' => 'NUS Engineering',
        'desc'  => 'Graduate of the NUS College of Design and Engineering — where the precision of engineering met a love of visual media and astronomy.',
        'items' => [
            'NUS Astronomical Society · Exco: Astronomy Head / Ops Head (2018–2022)',
            'NUS Formula SAE Electric Team · 2.5-year project',
            'NUS Photographic Society · captureRVRC events',
            'AstroChallenge co-organiser (200+ secondary/JC participants)',
            'NUS Toastmasters · Japanese Studies Society',
        ],
    ],
    [
        'icon'  => '🤝',
        'title' => 'BNI Crescendo Chapter',
        'desc'  => 'Active member of one of Singapore\'s largest and longest-standing BNI chapters — a 17-year-old, 50+ member professional networking community with multiple national chapter awards.',
        'badge' => '📸 Chapter Photographer & Active Referral Member',
        'items' => [
            'BNI Chapter of the Year — 2015, 2016, 2017 (3 consecutive years)',
            'Titanium Chapter Award — 2018',
            'Built member photo archive for the chapter',
        ],
    ],
    [
        'icon'  => '📚',
        'title' => 'Private Tutor',
        'desc'  => 'Tutoring Primary and Secondary students in Science and Mathematics at EduCare4u — an award-winning Singapore education management company serving foreign students since 2002.',
        'items' => [
            'Primary 3–6 Mathematics & Science',
            'O-Level Physics, Chemistry',
            'AI-assisted personalised lesson planning',
            'Adaptive learning techniques and custom materials',
        ],
    ],
    [
        'icon'  => '🌟',
        'title' => 'Interests & Creative World',
        'desc'  => 'The offscreen world that fuels everything: anime, cosplay photography, figure collecting, astrophotography under dark skies, and a deep obsession with Hatsune Miku and Vocaloid culture.',
        'items' => [
            'Anime · 486+ completed entries (MyAnimeList: Baka09ball)',
            'Cosplay photographer & community figure',
            'Pixiv · 13,000+ bookmarks',
            'Hatsune Miku figure collector · Instagram: @cyan39miku',
            'Astrophotography · Nikon D850 nightscapes',
        ],
    ],
];

// ── TESTIMONIALS ─────────────────────────────────────────────
$testimonials = [
    [
        'quote'  => 'Julian is a long-time photographer of mine, and a friend. Even with his affordable rates, he constantly upgrades his equipment and researches advanced photography techniques. His dedication to clients has been steadfast. Highly recommended!',
        'person' => 'Wah Qi Le',
        'role'   => 'Wahsoshiok',
    ],
    [
        'quote'  => 'A fantastic job at taking dynamic and well-timed photographs to really bring out the essence of the character I\'m cosplaying. Very helpful and patient — especially since I am shy and inexperienced behind the camera.',
        'person' => 'ZY',
        'role'   => 'Cosplayer',
    ],
    [
        'quote'  => 'Julian was a great photographer to work with. His passion and professionalism can be seen in the quality photos he took. My associates and I will continue to engage his services in the future.',
        'person' => 'Abdul Qayyum',
        'role'   => 'NUS Political Association',
    ],
    [
        'quote'  => 'Great communication, super easy to work with. Takes the cosplayer\'s opinion into consideration when planning. Perhaps because he does tutoring — very good at explaining things too. A great shoot!',
        'person' => 'Babbit',
        'role'   => 'Cosplayer',
    ],
    [
        'quote'  => 'We have engaged Julian for photography and were very pleased with what he captured. Although he might not be familiar with beauty events, he was proactive and quick in learning. Meticulous and responsible. Would definitely engage again.',
        'person' => 'Xie Jingyi',
        'role'   => 'BREAVACO',
    ],
    [
        'quote'  => 'The photos turned out beautiful — some of them so beautiful we want to print and frame them. You have been really sweet, kind and patient. Thank you for all your efforts!',
        'person' => 'Nilima',
        'role'   => 'Maternity Client',
    ],
];

// ── CONTACT LINKS ────────────────────────────────────────────
$contact_links = [
    ['icon' => '📸', 'label' => 'Accurova Photography',  'handle' => 'accurova.com',           'url' => 'https://www.accurova.com'],
    ['icon' => '💼', 'label' => 'LinkedIn',               'handle' => 'Julian Cheung Jun Yan',  'url' => 'https://sg.linkedin.com/in/juliancheungjunyan'],
    ['icon' => '📷', 'label' => 'Instagram · Accurova',   'handle' => '@accurova',              'url' => 'https://www.instagram.com/accurova/'],
    ['icon' => '💙', 'label' => 'Instagram · Personal',   'handle' => '@cyan39miku',            'url' => 'https://www.instagram.com/cyan39miku'],
    ['icon' => '✈️', 'label' => 'Telegram Community',     'handle' => 't.me/accurova',          'url' => 'https://t.me/accurova'],
];

// ── FOOTER ───────────────────────────────────────────────────
$footer_name  = 'Julian Cheung Jun Yan';
$footer_copy  = '© 2026 · Built with precision & care';
$footer_links = [
    ['label' => 'Accurova',  'url' => 'https://www.accurova.com'],
    ['label' => 'LinkedIn',  'url' => 'https://sg.linkedin.com/in/juliancheungjunyan'],
    ['label' => 'Medium',    'url' => 'https://accurova.medium.com'],
];

// ============================================================
//  END OF CONTENT — do not edit below this line
// ============================================================
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo esc_html($hero_first . ' ' . $hero_last); ?> — Photographer · Developer · Educator</title>
<?php wp_head(); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<?php // landing-style.css must sit in the active theme's root directory ?>
<link rel="stylesheet" href="<?php echo esc_url( get_theme_file_uri( 'landing-style.css' ) ); ?>">
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-wordmark"><?php echo esc_html($hero_first . ' ' . $hero_last); ?><span>.</span></div>
  <div class="nav-links">
    <a href="#ventures">Ventures</a>
    <a href="#accurova">Photography</a>
    <a href="#tech">Tech</a>
    <a href="#testimonials">Testimonials</a>
    <a href="#contact" class="nav-cta">Let's Talk</a>
  </div>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="hero-bg-left"></div><div class="hero-bg-right"></div><div class="hero-grid"></div>
  <div class="hero-content">
    <div class="hero-eyebrow"><?php echo esc_html($hero_eyebrow); ?></div>
    <h1 class="hero-name">
      <span class="first"><?php echo esc_html($hero_first); ?></span><br>
      <span class="last"><?php echo esc_html($hero_last); ?></span>
    </h1>
    <div class="hero-teal-line"></div>
    <div class="hero-roles">
      <span class="static">I am a</span>
      <span id="role-text"><?php echo esc_html($hero_roles[0]); ?></span>
      <span class="cursor"></span>
    </div>
    <p class="hero-tagline"><?php echo esc_html($hero_tagline); ?></p>
    <div class="hero-btns">
      <a href="<?php echo esc_url($hero_cta_primary['href']); ?>" class="btn-primary"><?php echo esc_html($hero_cta_primary['label']); ?></a>
      <a href="<?php echo esc_url($hero_cta_secondary['href']); ?>" class="btn-secondary"><?php echo esc_html($hero_cta_secondary['label']); ?></a>
    </div>
  </div>
  <div class="hero-scroll-hint"><div class="scroll-dot"></div><span>scroll</span></div>
</section>

<!-- CRED STRIP -->
<div id="cred-strip">
  <div class="marquee-track">
    <?php
    // Render twice for seamless loop
    for ($pass = 0; $pass < 2; $pass++):
      foreach ($cred_items as $c): ?>
        <div class="cred-item"><span class="num"><?php echo esc_html($c['num']); ?></span> <?php echo esc_html($c['label']); ?></div>
    <?php endforeach; endfor; ?>
  </div>
</div>

<!-- VENTURES -->
<div id="ventures" class="section fade-in">
  <div class="ventures-header">
    <div class="section-label">What I Build</div>
    <h2 class="section-title">Three Ventures.<br>One Vision.</h2>
    <p class="section-sub" style="margin:0 auto;text-align:center;">Each rooted in a different discipline — all unified by a commitment to craft, precision, and real value delivered.</p>
  </div>
  <div class="ventures-grid">
    <?php foreach ($ventures as $v): ?>
    <div class="venture-card <?php echo esc_attr($v['type']); ?> fade-in">
      <div class="venture-icon"><?php echo $v['icon']; ?></div>
      <div class="venture-name"><?php echo esc_html($v['name']); ?></div>
      <div class="venture-badge"><?php echo esc_html($v['badge']); ?></div>
      <p class="venture-desc"><?php echo esc_html($v['desc']); ?></p>
      <div class="venture-pills">
        <?php foreach ($v['pills'] as $p): ?><span class="pill"><?php echo esc_html($p); ?></span><?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<div class="section-divider"></div>

<!-- ACCUROVA -->
<section id="accurova" class="section-full" style="background:var(--bg-deep)">
  <div class="section-inner" style="padding-top:100px;padding-bottom:100px">
    <div class="accurova-layout">
      <div class="fade-in">
        <div class="section-label">Accurova · Photography</div>
        <h2 class="section-title">Where Accuracy<br>Meets Innovation</h2>
        <p style="font-size:16px;color:var(--text-2);line-height:1.75;margin-bottom:24px;max-width:460px">Eight years of honing a craft that goes beyond pressing a shutter — investing in the best gear, building custom AI-enhanced workflows, and showing up 100% for every single client.</p>
        <div class="award-badge"><?php echo esc_html($accurova_award); ?></div>
        <div style="margin-top:16px;font-size:13px;color:var(--text-2)">As featured in:</div>
        <div class="media-strip">
          <?php foreach ($accurova_media as $m): ?><span class="media-tag"><?php echo esc_html($m); ?></span><?php endforeach; ?>
        </div>
        <div class="accurova-stats">
          <?php foreach ($accurova_stats as $s): ?>
          <div class="stat-card"><div class="stat-num"><?php echo esc_html($s['num']); ?></div><div class="stat-label"><?php echo esc_html($s['label']); ?></div></div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="fade-in">
        <div class="photo-grid">
          <div class="photo-cell" data-label="Corporate"></div>
          <div class="photo-cell" data-label="Night"></div>
          <div class="photo-cell" data-label="Cosplay"></div>
          <div class="photo-cell" data-label="Portrait"></div>
          <div class="photo-cell" data-label="Events"></div>
          <div class="photo-cell" data-label="Astrophotography"></div>
        </div>
        <div style="margin-top:32px">
          <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.15em;text-transform:uppercase;color:var(--text-3);margin-bottom:8px">Specialisations</div>
          <?php foreach ($accurova_services as $i => $svc): ?>
          <div class="service-item">
            <div class="service-num">0<?php echo $i+1; ?></div>
            <div><div class="service-title"><?php echo esc_html($svc['title']); ?></div><div class="service-desc"><?php echo esc_html($svc['desc']); ?></div></div>
          </div>
          <?php endforeach; ?>
        </div>
        <div style="margin-top:28px">
          <a href="<?php echo esc_url($accurova_website); ?>" class="btn-primary" target="_blank">Visit Accurova →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- TECH -->
<section id="tech" class="section-full" style="background:var(--bg-void)">
  <div class="section-inner" style="padding-top:100px;padding-bottom:100px">
    <div class="tech-layout">
      <div class="fade-in">
        <div class="section-label">TheBooleanJulian · Software</div>
        <h2 class="section-title">Building Things<br>That Actually Work</h2>
        <p style="font-size:16px;color:var(--text-2);line-height:1.75;margin-bottom:36px;max-width:460px">A Python-first developer identity forged through shipping real projects: Telegram bot ecosystems, AI-powered pipelines, CI/CD workflows, and an astrophotography processing engine.</p>
        <div class="terminal-window">
          <div class="terminal-bar"><div class="t-dot r"></div><div class="t-dot y"></div><div class="t-dot g"></div><span class="t-title">julian@thebooleanjulian ~ % python</span></div>
          <div class="terminal-body">
            <div><span class="t-prompt">&gt;&gt;&gt; </span><span class="t-keyword">import</span> <span class="t-fn">julian</span></div>
            <div><span class="t-prompt">&gt;&gt;&gt; </span><span class="t-fn">julian</span>.ventures</div>
            <div><span class="t-string">['Accurova', 'TheBooleanJulian', 'Educare4u']</span></div>
            <div><span class="t-prompt">&gt;&gt;&gt; </span><span class="t-fn">julian</span>.deploy_pattern</div>
            <div><span class="t-string">'feature → dev → main → Zeabur autodeploy'</span></div>
            <div><span class="t-prompt">&gt;&gt;&gt; </span><span class="t-fn">julian</span>.current_project</div>
            <div><span class="t-string">'FishLens — Computer Vision for Beginners'</span></div>
            <div><span class="t-comment"># push to ship.</span></div>
          </div>
        </div>
        <div style="margin-top:28px;display:flex;flex-wrap:wrap;gap:8px">
          <?php foreach ($tech_stack as $t): ?><span class="stack-pill"><?php echo esc_html($t); ?></span><?php endforeach; ?>
        </div>
      </div>
      <div class="fade-in">
        <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.15em;text-transform:uppercase;color:var(--text-3);margin-bottom:20px">Shipped Projects</div>
        <div class="projects-list">
          <?php foreach ($projects as $proj): ?>
          <div class="project-card">
            <div class="project-header">
              <div class="project-name"><?php echo $proj['icon']; ?> <?php echo esc_html($proj['name']); ?></div>
              <?php if (!empty($proj['status'])): ?>
                <div class="project-status"><?php echo esc_html($proj['status']); ?></div>
              <?php else: ?>
                <div class="project-tag"><?php echo esc_html($proj['tag']); ?></div>
              <?php endif; ?>
            </div>
            <div class="project-desc"><?php echo esc_html($proj['desc']); ?></div>
            <div class="tech-stack-pills">
              <?php foreach ($proj['stack'] as $s): ?><span class="stack-pill"><?php echo esc_html($s); ?></span><?php endforeach; ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- COMMUNITY -->
<section id="extra" class="section-full" style="background:var(--bg-surface)">
  <div class="section-inner" style="padding-top:100px;padding-bottom:100px">
    <div class="section-label">Beyond the Work</div>
    <h2 class="section-title">Community & Craft</h2>
    <p class="section-sub">Giving back through education, connecting through business networking, and staying grounded in things that matter.</p>
    <div class="extra-grid">
      <?php foreach ($community_cards as $card): ?>
      <div class="extra-card fade-in">
        <div class="extra-icon"><?php echo $card['icon']; ?></div>
        <div class="extra-title"><?php echo esc_html($card['title']); ?></div>
        <div class="extra-desc"><?php echo esc_html($card['desc']); ?></div>
        <?php if (!empty($card['badge'])): ?>
          <div class="bni-badge"><?php echo esc_html($card['badge']); ?></div>
        <?php endif; ?>
        <div class="extra-items">
          <?php foreach ($card['items'] as $item): ?><div class="extra-item"><?php echo esc_html($item); ?></div><?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- TESTIMONIALS -->
<section id="testimonials">
  <div class="section fade-in">
    <div class="testimonials-header">
      <div class="section-label">What Clients Say</div>
      <h2 class="section-title">Trusted By Many</h2>
    </div>
    <div class="testi-grid">
      <?php foreach ($testimonials as $t): ?>
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <div class="testi-quote"><?php echo esc_html($t['quote']); ?></div>
        <div class="testi-person"><?php echo esc_html($t['person']); ?></div>
        <div class="testi-role"><?php echo esc_html($t['role']); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- CONTACT -->
<section id="contact" style="background:var(--bg-deep);border-top:1px solid var(--border)">
  <div class="contact-inner">
    <div class="fade-in">
      <div class="section-label">Let's Work Together</div>
      <h2 class="contact-title">Have a shoot,<br>project, or idea?</h2>
      <p class="contact-sub">Whether you need a photographer for your next event, a developer for your next tool, or a tutor for your child — let's talk.</p>
      <div style="margin-top:36px">
        <a href="<?php echo esc_url($accurova_contact); ?>" class="btn-primary" target="_blank">Book a Shoot with Accurova →</a>
      </div>
    </div>
    <div class="contact-links fade-in">
      <?php foreach ($contact_links as $cl): ?>
      <a href="<?php echo esc_url($cl['url']); ?>" class="contact-link-card" target="_blank">
        <div class="clc-left">
          <div class="clc-icon"><?php echo $cl['icon']; ?></div>
          <div><div class="clc-label"><?php echo esc_html($cl['label']); ?></div><div class="clc-handle"><?php echo esc_html($cl['handle']); ?></div></div>
        </div>
        <div class="clc-arrow">→</div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-name"><?php echo esc_html($footer_name); ?></div>
  <div class="footer-copy"><?php echo esc_html($footer_copy); ?></div>
  <div class="footer-links">
    <?php foreach ($footer_links as $fl): ?><a href="<?php echo esc_url($fl['url']); ?>" target="_blank"><?php echo esc_html($fl['label']); ?></a><?php endforeach; ?>
  </div>
</footer>

<?php wp_footer(); ?>
<script>
const roles = <?php echo json_encode($hero_roles); ?>;
let i = 0;
const el = document.getElementById('role-text');
function cycle() {
  el.style.opacity = '0';
  setTimeout(() => { i = (i+1) % roles.length; el.textContent = roles[i]; el.style.opacity = '1'; }, 350);
}
setInterval(cycle, 2600);

const obs = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const sibs = Array.from(entry.target.parentElement.querySelectorAll('.fade-in'));
      const idx = sibs.indexOf(entry.target);
      setTimeout(() => entry.target.classList.add('visible'), idx * 80);
      obs.unobserve(entry.target);
    }
  });
}, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
document.querySelectorAll('.fade-in').forEach(el => obs.observe(el));
</script>
</body>
</html>
