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
        'desc'  => 'Gentle, real, and beautifully composed — capturing the moments you'll want to print and frame.',
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
<style>
  :root {
    --bg-void:#050508;--bg-deep:#0B0B12;--bg-surface:#111118;
    --bg-raised:#18181F;--bg-card:#1C1C26;
    --border:rgba(255,255,255,0.07);--border-mid:rgba(255,255,255,0.12);
    --teal:#00D4C8;--teal-dim:rgba(0,212,200,0.12);--teal-glow:rgba(0,212,200,0.25);
    --gold:#F5C842;--gold-dim:rgba(245,200,66,0.10);
    --text-1:#F0EEE8;--text-2:#A0A0B8;--text-3:#5A5A72;
    --font-d:'Space Grotesk',system-ui,sans-serif;
    --font-m:'JetBrains Mono',monospace;
    --r:12px;--rs:8px;
  }
  *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
  html{scroll-behavior:smooth}
  body{background:var(--bg-void);color:var(--text-1);font-family:var(--font-d);font-size:16px;line-height:1.6;-webkit-font-smoothing:antialiased;overflow-x:hidden}
  a{color:inherit;text-decoration:none}

  /* NAV */
  nav{position:fixed;top:0;left:0;right:0;z-index:100;display:flex;align-items:center;justify-content:space-between;padding:0 40px;height:64px;background:rgba(5,5,8,0.85);backdrop-filter:blur(20px);border-bottom:1px solid var(--border)}
  .nav-wm{font-size:15px;font-weight:600;letter-spacing:-0.02em}
  .nav-wm span{color:var(--teal)}
  .nav-links{display:flex;gap:32px}
  .nav-links a{font-size:13px;font-weight:500;color:var(--text-2);transition:color .2s}
  .nav-links a:hover{color:var(--teal)}
  .nav-cta{padding:7px 18px;border:1px solid var(--teal);border-radius:6px;font-size:13px;font-weight:600;color:var(--teal)!important;transition:background .2s}
  .nav-cta:hover{background:var(--teal-dim)}

  /* HERO */
  #hero{position:relative;min-height:100vh;display:flex;align-items:center;justify-content:center;overflow:hidden;padding:100px 40px 80px}
  .hbgl{position:absolute;inset:0;background:radial-gradient(ellipse 60% 80% at 20% 55%,rgba(245,200,66,0.07) 0%,transparent 65%);pointer-events:none}
  .hbgr{position:absolute;inset:0;background:radial-gradient(ellipse 60% 80% at 80% 45%,rgba(0,212,200,0.08) 0%,transparent 65%);pointer-events:none}
  .hgrid{position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.025) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.025) 1px,transparent 1px);background-size:60px 60px;mask-image:radial-gradient(ellipse 80% 70% at 50% 50%,black 0%,transparent 100%);pointer-events:none}
  .hc{position:relative;z-index:1;text-align:center;max-width:860px;width:100%}
  .h-ey{font-family:var(--font-m);font-size:12px;font-weight:500;letter-spacing:.15em;text-transform:uppercase;color:var(--teal);margin-bottom:24px;display:flex;align-items:center;justify-content:center;gap:10px}
  .h-ey::before,.h-ey::after{content:'';display:block;width:32px;height:1px;background:var(--teal);opacity:.5}
  .h-name{font-size:clamp(52px,8vw,96px);font-weight:700;letter-spacing:-0.04em;line-height:1.0;margin-bottom:8px}
  .h-name .first{color:#F7F0DC}.h-name .last{color:var(--text-1)}
  .h-line{height:3px;width:80px;margin:16px auto 28px;background:linear-gradient(90deg,var(--gold),var(--teal));border-radius:99px}
  .h-roles{font-size:clamp(18px,2.5vw,26px);font-weight:400;color:var(--text-2);margin-bottom:40px;min-height:36px;display:flex;align-items:center;justify-content:center;gap:6px}
  .h-roles .st{color:var(--text-3)}
  #role-text{color:var(--teal);font-weight:600;transition:opacity .3s}
  .cur{display:inline-block;width:2px;height:1.1em;background:var(--teal);margin-left:2px;vertical-align:middle;animation:blink .9s step-end infinite}
  @keyframes blink{0%,100%{opacity:1}50%{opacity:0}}
  .h-tag{font-size:16px;color:var(--text-2);max-width:480px;margin:0 auto 48px;line-height:1.7}
  .h-btns{display:flex;gap:14px;justify-content:center;flex-wrap:wrap}
  .btn-p{padding:14px 32px;background:var(--teal);color:#050508;font-family:var(--font-d);font-weight:700;font-size:15px;border-radius:8px;border:none;cursor:pointer;transition:transform .15s,box-shadow .15s;display:inline-block}
  .btn-p:hover{transform:translateY(-2px);box-shadow:0 8px 32px var(--teal-glow)}
  .btn-s{padding:13px 32px;background:transparent;color:var(--text-1);font-family:var(--font-d);font-weight:600;font-size:15px;border-radius:8px;border:1px solid var(--border-mid);cursor:pointer;transition:border-color .2s,color .2s;display:inline-block}
  .btn-s:hover{border-color:var(--teal);color:var(--teal)}
  .h-scroll{position:absolute;bottom:36px;left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:6px;font-family:var(--font-m);font-size:10px;letter-spacing:.1em;color:var(--text-3);text-transform:uppercase}
  .sdot{width:20px;height:32px;border:1px solid var(--border-mid);border-radius:10px;display:flex;align-items:flex-start;justify-content:center;padding-top:5px}
  .sdot::after{content:'';width:4px;height:8px;background:var(--teal);border-radius:99px;animation:sd 1.8s ease-in-out infinite}
  @keyframes sd{0%,100%{transform:translateY(0);opacity:1}80%{transform:translateY(10px);opacity:0}}

  /* CRED STRIP */
  #cred{background:var(--bg-surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border);overflow:hidden}
  .mtrack{display:flex;align-items:center;animation:mq 28s linear infinite;white-space:nowrap}
  .mtrack:hover{animation-play-state:paused}
  @keyframes mq{0%{transform:translateX(0)}100%{transform:translateX(-50%)}}
  .ci{display:flex;align-items:center;gap:10px;padding:18px 48px;font-size:13px;font-weight:500;color:var(--text-2);white-space:nowrap;border-right:1px solid var(--border)}
  .ci .num{font-family:var(--font-m);font-size:18px;font-weight:700;color:var(--teal)}

  /* SECTIONS */
  .sec{padding:100px 40px;max-width:1160px;margin:0 auto}
  .sec-full{padding:100px 0}
  .sec-in{max-width:1160px;margin:0 auto;padding:0 40px}
  .slabel{font-family:var(--font-m);font-size:11px;font-weight:500;letter-spacing:.18em;text-transform:uppercase;color:var(--teal);margin-bottom:12px}
  .stitle{font-size:clamp(32px,4vw,52px);font-weight:700;letter-spacing:-0.03em;line-height:1.1;margin-bottom:20px}
  .ssub{font-size:17px;color:var(--text-2);max-width:520px;line-height:1.7}
  .sdiv{width:100%;height:1px;background:var(--border)}

  /* VENTURES */
  .v-header{text-align:center;margin-bottom:60px}
  .v-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
  .vc{background:var(--bg-card);border:1px solid var(--border);border-radius:var(--r);padding:36px 32px;transition:border-color .3s,transform .3s;position:relative;overflow:hidden}
  .vc::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;border-radius:12px 12px 0 0;opacity:0;transition:opacity .3s}
  .vc.photo::before{background:linear-gradient(90deg,var(--gold),#E8A020)}
  .vc.code::before{background:linear-gradient(90deg,var(--teal),#0097A7)}
  .vc.edu::before{background:linear-gradient(90deg,#9B7FFF,#7C5CBF)}
  .vc:hover{border-color:var(--border-mid);transform:translateY(-4px)}
  .vc:hover::before{opacity:1}
  .v-icon{width:52px;height:52px;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:24px;margin-bottom:24px}
  .vc.photo .v-icon{background:var(--gold-dim)}.vc.code .v-icon{background:var(--teal-dim)}.vc.edu .v-icon{background:rgba(155,127,255,0.1)}
  .v-name{font-size:22px;font-weight:700;letter-spacing:-0.02em;margin-bottom:8px}
  .v-badge{font-family:var(--font-m);font-size:11px;font-weight:500;color:var(--text-3);letter-spacing:.1em;text-transform:uppercase;margin-bottom:16px}
  .v-desc{font-size:14px;color:var(--text-2);line-height:1.7;margin-bottom:24px}
  .pills{display:flex;flex-wrap:wrap;gap:6px}
  .pill{font-family:var(--font-m);font-size:11px;font-weight:500;padding:4px 10px;border-radius:4px;background:rgba(255,255,255,0.05);color:var(--text-2);border:1px solid var(--border)}

  /* ACCUROVA */
  .a-layout{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start}
  .a-stats{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-top:40px}
  .sc{background:var(--bg-raised);border:1px solid var(--border);border-radius:var(--rs);padding:22px 20px}
  .sc .num{font-size:36px;font-weight:700;letter-spacing:-0.04em;color:var(--gold);line-height:1;margin-bottom:6px}
  .sc .lbl{font-size:13px;color:var(--text-2)}
  .svc-item{display:flex;align-items:flex-start;gap:16px;padding:20px 0;border-bottom:1px solid var(--border)}
  .svc-item:last-child{border-bottom:none}
  .svc-n{font-family:var(--font-m);font-size:11px;color:var(--text-3);padding-top:2px;min-width:28px}
  .svc-t{font-size:15px;font-weight:600;margin-bottom:4px}
  .svc-d{font-size:13px;color:var(--text-2);line-height:1.6}
  .pgrid{display:grid;grid-template-columns:repeat(3,1fr);grid-template-rows:160px 100px 160px;gap:6px;border-radius:var(--r);overflow:hidden}
  .pc{border-radius:4px;position:relative;overflow:hidden}
  .pc::after{content:attr(data-label);position:absolute;bottom:8px;left:8px;font-size:10px;font-weight:600;letter-spacing:.08em;text-transform:uppercase;color:rgba(255,255,255,0.7);background:rgba(0,0,0,0.45);padding:3px 7px;border-radius:3px;backdrop-filter:blur(4px)}
  .pc:nth-child(1){background:linear-gradient(135deg,#1A0F00,#4A2800);grid-column:1/3}
  .pc:nth-child(2){background:linear-gradient(135deg,#0A0F1A,#132040)}
  .pc:nth-child(3){background:linear-gradient(160deg,#160816,#2C1028)}
  .pc:nth-child(4){background:linear-gradient(135deg,#0B1A0B,#1A3018)}
  .pc:nth-child(5){background:linear-gradient(135deg,#1A1200,#4A3800);grid-column:2/4}
  .pc:nth-child(6){background:radial-gradient(ellipse at 30% 40%,#001A1A,#000810);grid-column:1/4}
  .award-b{display:inline-flex;align-items:center;gap:10px;padding:10px 16px;background:rgba(245,200,66,0.08);border:1px solid rgba(245,200,66,0.25);border-radius:8px;font-size:13px;font-weight:600;color:var(--gold);margin-top:24px}
  .media-s{display:flex;align-items:center;gap:12px;margin-top:16px;flex-wrap:wrap}
  .mtag{font-family:var(--font-m);font-size:11px;font-weight:500;padding:5px 12px;border-radius:4px;border:1px solid var(--border-mid);color:var(--text-2);letter-spacing:.05em}

  /* TECH */
  .tech-layout{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start}
  .tw{background:#0E1117;border:1px solid var(--border);border-radius:var(--r);overflow:hidden}
  .tbar{display:flex;align-items:center;gap:7px;padding:12px 16px;background:#161B22;border-bottom:1px solid var(--border)}
  .td{width:11px;height:11px;border-radius:50%}
  .td.r{background:#FF5F56}.td.y{background:#FFBD2E}.td.g{background:#27C93F}
  .tt{font-family:var(--font-m);font-size:12px;color:var(--text-3);margin-left:8px}
  .tbody{padding:20px;font-family:var(--font-m);font-size:13px;line-height:1.9}
  .tp{color:var(--teal)}.tcm{color:#4A4A60}.ts{color:#F5C842}.tk{color:#BB86FC}.tf{color:#82AAFF}
  .plist{display:flex;flex-direction:column;gap:16px;margin-top:40px}
  .pc-card{background:var(--bg-card);border:1px solid var(--border);border-radius:var(--rs);padding:20px 22px;transition:border-color .25s}
  .pc-card:hover{border-color:rgba(0,212,200,0.35)}
  .pc-h{display:flex;align-items:center;justify-content:space-between;margin-bottom:8px}
  .pc-n{font-size:15px;font-weight:600}
  .pc-t{font-family:var(--font-m);font-size:10px;font-weight:500;padding:3px 8px;border-radius:3px;background:var(--teal-dim);color:var(--teal);letter-spacing:.05em}
  .pc-s{font-family:var(--font-m);font-size:10px;font-weight:500;padding:3px 8px;border-radius:3px;background:rgba(245,200,66,0.1);color:var(--gold);letter-spacing:.05em}
  .pc-d{font-size:13px;color:var(--text-2);line-height:1.6}
  .spills{display:flex;flex-wrap:wrap;gap:6px;margin-top:10px}
  .sp{font-family:var(--font-m);font-size:11px;padding:3px 9px;border-radius:4px;background:rgba(255,255,255,0.04);color:var(--text-3);border:1px solid var(--border)}

  /* COMMUNITY */
  .eg{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:56px}
  .ec{background:var(--bg-card);border:1px solid var(--border);border-radius:var(--r);padding:36px 32px}
  .e-ico{font-size:32px;margin-bottom:20px}
  .e-t{font-size:22px;font-weight:700;margin-bottom:10px}
  .e-d{font-size:14px;color:var(--text-2);line-height:1.7;margin-bottom:16px}
  .bni-b{display:flex;align-items:center;gap:12px;padding:14px 16px;background:rgba(0,212,200,0.05);border:1px solid rgba(0,212,200,0.2);border-radius:8px;margin:16px 0;font-size:13px;font-weight:600;color:var(--teal)}
  .eitems{display:flex;flex-direction:column;gap:8px}
  .eitem{display:flex;align-items:flex-start;gap:10px;font-size:13px;color:var(--text-2)}
  .eitem::before{content:'';width:4px;height:4px;border-radius:50%;background:var(--teal);flex-shrink:0;margin-top:7px}

  /* TESTIMONIALS */
  .t-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
  .tc{background:var(--bg-card);border:1px solid var(--border);border-radius:var(--r);padding:28px;transition:border-color .25s}
  .tc:hover{border-color:var(--border-mid)}
  .t-stars{color:var(--gold);font-size:14px;margin-bottom:14px;letter-spacing:2px}
  .t-q{font-size:14px;color:var(--text-1);line-height:1.75;margin-bottom:20px;font-style:italic}
  .t-q::before{content:'"';color:var(--teal);font-style:normal}
  .t-q::after{content:'"';color:var(--teal);font-style:normal}
  .t-p{font-size:13px;font-weight:600;color:var(--text-2)}
  .t-r{font-size:12px;color:var(--text-3);margin-top:2px}

  /* CONTACT */
  .con-in{max-width:1160px;margin:0 auto;padding:100px 40px;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
  .con-t{font-size:clamp(36px,4vw,52px);font-weight:700;letter-spacing:-0.03em;line-height:1.1;margin-bottom:20px}
  .con-s{font-size:16px;color:var(--text-2);line-height:1.7;max-width:380px}
  .clinks{display:flex;flex-direction:column;gap:16px}
  .clc{display:flex;align-items:center;justify-content:space-between;padding:18px 22px;background:var(--bg-raised);border:1px solid var(--border);border-radius:var(--rs);transition:border-color .25s,transform .2s}
  .clc:hover{border-color:var(--teal);transform:translateX(4px)}
  .clc-l{display:flex;align-items:center;gap:14px}
  .clc-ico{font-size:18px;width:36px;text-align:center}
  .clc-lb{font-size:14px;font-weight:600}
  .clc-h{font-size:12px;color:var(--text-3);margin-top:2px;font-family:var(--font-m)}
  .clc-arr{color:var(--text-3);font-size:16px;transition:color .2s}
  .clc:hover .clc-arr{color:var(--teal)}

  /* FOOTER */
  footer{background:var(--bg-void);border-top:1px solid var(--border);padding:32px 40px;display:flex;align-items:center;justify-content:space-between}
  .f-name{font-size:13px;font-weight:600;color:var(--text-2)}
  .f-copy{font-family:var(--font-m);font-size:11px;color:var(--text-3)}
  .f-links{display:flex;gap:24px}
  .f-links a{font-size:12px;color:var(--text-3);transition:color .2s}
  .f-links a:hover{color:var(--teal)}

  /* FADE */
  .fi{opacity:0;transform:translateY(20px);transition:opacity .6s ease,transform .6s ease}
  .fi.vis{opacity:1;transform:translateY(0)}

  /* RESPONSIVE */
  @media(max-width:900px){
    nav{padding:0 20px}.nav-links{display:none}
    #hero{padding:100px 24px 80px}
    .v-grid,.a-layout,.tech-layout,.eg,.t-grid,.con-in{grid-template-columns:1fr}
    .a-layout,.tech-layout,.eg{gap:40px}
    .sec{padding:70px 24px}
    footer{flex-direction:column;gap:16px;text-align:center}
  }
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-wm"><?php echo esc_html($hero_first . ' ' . $hero_last); ?><span>.</span></div>
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
  <div class="hbgl"></div><div class="hbgr"></div><div class="hgrid"></div>
  <div class="hc">
    <div class="h-ey"><?php echo esc_html($hero_eyebrow); ?></div>
    <h1 class="h-name">
      <span class="first"><?php echo esc_html($hero_first); ?></span><br>
      <span class="last"><?php echo esc_html($hero_last); ?></span>
    </h1>
    <div class="h-line"></div>
    <div class="h-roles">
      <span class="st">I am a</span>
      <span id="role-text"><?php echo esc_html($hero_roles[0]); ?></span>
      <span class="cur"></span>
    </div>
    <p class="h-tag"><?php echo esc_html($hero_tagline); ?></p>
    <div class="h-btns">
      <a href="<?php echo esc_url($hero_cta_primary['href']); ?>" class="btn-p"><?php echo esc_html($hero_cta_primary['label']); ?></a>
      <a href="<?php echo esc_url($hero_cta_secondary['href']); ?>" class="btn-s"><?php echo esc_html($hero_cta_secondary['label']); ?></a>
    </div>
  </div>
  <div class="h-scroll"><div class="sdot"></div><span>scroll</span></div>
</section>

<!-- CRED STRIP -->
<div id="cred">
  <div class="mtrack">
    <?php
    // Render twice for seamless loop
    for ($pass = 0; $pass < 2; $pass++):
      foreach ($cred_items as $c): ?>
        <div class="ci"><span class="num"><?php echo esc_html($c['num']); ?></span> <?php echo esc_html($c['label']); ?></div>
    <?php endforeach; endfor; ?>
  </div>
</div>

<!-- VENTURES -->
<div id="ventures" class="sec fi">
  <div class="v-header">
    <div class="slabel">What I Build</div>
    <h2 class="stitle">Three Ventures.<br>One Vision.</h2>
    <p class="ssub" style="margin:0 auto;text-align:center;">Each rooted in a different discipline — all unified by a commitment to craft, precision, and real value delivered.</p>
  </div>
  <div class="v-grid">
    <?php foreach ($ventures as $v): ?>
    <div class="vc <?php echo esc_attr($v['type']); ?> fi">
      <div class="v-icon"><?php echo $v['icon']; ?></div>
      <div class="v-name"><?php echo esc_html($v['name']); ?></div>
      <div class="v-badge"><?php echo esc_html($v['badge']); ?></div>
      <p class="v-desc"><?php echo esc_html($v['desc']); ?></p>
      <div class="pills">
        <?php foreach ($v['pills'] as $p): ?><span class="pill"><?php echo esc_html($p); ?></span><?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<div class="sdiv"></div>

<!-- ACCUROVA -->
<section id="accurova" style="background:var(--bg-deep)">
  <div class="sec-in" style="padding-top:100px;padding-bottom:100px">
    <div class="a-layout">
      <div class="fi">
        <div class="slabel">Accurova · Photography</div>
        <h2 class="stitle">Where Accuracy<br>Meets Innovation</h2>
        <p style="font-size:16px;color:var(--text-2);line-height:1.75;margin-bottom:24px;max-width:460px">Eight years of honing a craft that goes beyond pressing a shutter — investing in the best gear, building custom AI-enhanced workflows, and showing up 100% for every single client.</p>
        <div class="award-b"><?php echo esc_html($accurova_award); ?></div>
        <div style="margin-top:16px;font-size:13px;color:var(--text-2)">As featured in:</div>
        <div class="media-s">
          <?php foreach ($accurova_media as $m): ?><span class="mtag"><?php echo esc_html($m); ?></span><?php endforeach; ?>
        </div>
        <div class="a-stats">
          <?php foreach ($accurova_stats as $s): ?>
          <div class="sc"><div class="num"><?php echo esc_html($s['num']); ?></div><div class="lbl"><?php echo esc_html($s['label']); ?></div></div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="fi">
        <div class="pgrid">
          <div class="pc" data-label="Corporate"></div>
          <div class="pc" data-label="Night"></div>
          <div class="pc" data-label="Cosplay"></div>
          <div class="pc" data-label="Portrait"></div>
          <div class="pc" data-label="Events"></div>
          <div class="pc" data-label="Astrophotography"></div>
        </div>
        <div style="margin-top:32px">
          <div style="font-family:var(--font-m);font-size:11px;letter-spacing:.15em;text-transform:uppercase;color:var(--text-3);margin-bottom:8px">Specialisations</div>
          <?php foreach ($accurova_services as $i => $svc): ?>
          <div class="svc-item">
            <div class="svc-n">0<?php echo $i+1; ?></div>
            <div><div class="svc-t"><?php echo esc_html($svc['title']); ?></div><div class="svc-d"><?php echo esc_html($svc['desc']); ?></div></div>
          </div>
          <?php endforeach; ?>
        </div>
        <div style="margin-top:28px">
          <a href="<?php echo esc_url($accurova_website); ?>" class="btn-p" target="_blank">Visit Accurova →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="sdiv"></div>

<!-- TECH -->
<section id="tech" style="background:var(--bg-void)">
  <div class="sec-in" style="padding-top:100px;padding-bottom:100px">
    <div class="tech-layout">
      <div class="fi">
        <div class="slabel">TheBooleanJulian · Software</div>
        <h2 class="stitle">Building Things<br>That Actually Work</h2>
        <p style="font-size:16px;color:var(--text-2);line-height:1.75;margin-bottom:36px;max-width:460px">A Python-first developer identity forged through shipping real projects: Telegram bot ecosystems, AI-powered pipelines, CI/CD workflows, and an astrophotography processing engine.</p>
        <div class="tw">
          <div class="tbar"><div class="td r"></div><div class="td y"></div><div class="td g"></div><span class="tt">julian@thebooleanjulian ~ % python</span></div>
          <div class="tbody">
            <div><span class="tp">&gt;&gt;&gt; </span><span class="tk">import</span> <span class="tf">julian</span></div>
            <div><span class="tp">&gt;&gt;&gt; </span><span class="tf">julian</span>.ventures</div>
            <div><span class="ts">['Accurova', 'TheBooleanJulian', 'Educare4u']</span></div>
            <div><span class="tp">&gt;&gt;&gt; </span><span class="tf">julian</span>.deploy_pattern</div>
            <div><span class="ts">'feature → dev → main → Zeabur autodeploy'</span></div>
            <div><span class="tp">&gt;&gt;&gt; </span><span class="tf">julian</span>.current_project</div>
            <div><span class="ts">'FishLens — Computer Vision for Beginners'</span></div>
            <div><span class="tcm"># push to ship.</span></div>
          </div>
        </div>
        <div style="margin-top:28px;display:flex;flex-wrap:wrap;gap:8px">
          <?php foreach ($tech_stack as $t): ?><span class="sp"><?php echo esc_html($t); ?></span><?php endforeach; ?>
        </div>
      </div>
      <div class="fi">
        <div style="font-family:var(--font-m);font-size:11px;letter-spacing:.15em;text-transform:uppercase;color:var(--text-3);margin-bottom:20px">Shipped Projects</div>
        <div class="plist">
          <?php foreach ($projects as $proj): ?>
          <div class="pc-card">
            <div class="pc-h">
              <div class="pc-n"><?php echo $proj['icon']; ?> <?php echo esc_html($proj['name']); ?></div>
              <?php if (!empty($proj['status'])): ?>
                <div class="pc-s"><?php echo esc_html($proj['status']); ?></div>
              <?php else: ?>
                <div class="pc-t"><?php echo esc_html($proj['tag']); ?></div>
              <?php endif; ?>
            </div>
            <div class="pc-d"><?php echo esc_html($proj['desc']); ?></div>
            <div class="spills">
              <?php foreach ($proj['stack'] as $s): ?><span class="sp"><?php echo esc_html($s); ?></span><?php endforeach; ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="sdiv"></div>

<!-- COMMUNITY -->
<section style="background:var(--bg-surface)">
  <div class="sec-in" style="padding-top:100px;padding-bottom:100px">
    <div class="slabel">Beyond the Work</div>
    <h2 class="stitle">Community & Craft</h2>
    <p class="ssub">Giving back through education, connecting through business networking, and staying grounded in things that matter.</p>
    <div class="eg">
      <?php foreach ($community_cards as $card): ?>
      <div class="ec fi">
        <div class="e-ico"><?php echo $card['icon']; ?></div>
        <div class="e-t"><?php echo esc_html($card['title']); ?></div>
        <div class="e-d"><?php echo esc_html($card['desc']); ?></div>
        <?php if (!empty($card['badge'])): ?>
          <div class="bni-b"><?php echo esc_html($card['badge']); ?></div>
        <?php endif; ?>
        <div class="eitems">
          <?php foreach ($card['items'] as $item): ?><div class="eitem"><?php echo esc_html($item); ?></div><?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="sdiv"></div>

<!-- TESTIMONIALS -->
<section id="testimonials">
  <div class="sec fi">
    <div style="text-align:center;margin-bottom:56px">
      <div class="slabel">What Clients Say</div>
      <h2 class="stitle">Trusted By Many</h2>
    </div>
    <div class="t-grid">
      <?php foreach ($testimonials as $t): ?>
      <div class="tc">
        <div class="t-stars">★★★★★</div>
        <div class="t-q"><?php echo esc_html($t['quote']); ?></div>
        <div class="t-p"><?php echo esc_html($t['person']); ?></div>
        <div class="t-r"><?php echo esc_html($t['role']); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="sdiv"></div>

<!-- CONTACT -->
<section id="contact" style="background:var(--bg-deep);border-top:1px solid var(--border)">
  <div class="con-in">
    <div class="fi">
      <div class="slabel">Let's Work Together</div>
      <h2 class="con-t">Have a shoot,<br>project, or idea?</h2>
      <p class="con-s">Whether you need a photographer for your next event, a developer for your next tool, or a tutor for your child — let's talk.</p>
      <div style="margin-top:36px">
        <a href="<?php echo esc_url($accurova_contact); ?>" class="btn-p" target="_blank">Book a Shoot with Accurova →</a>
      </div>
    </div>
    <div class="clinks fi">
      <?php foreach ($contact_links as $cl): ?>
      <a href="<?php echo esc_url($cl['url']); ?>" class="clc" target="_blank">
        <div class="clc-l">
          <div class="clc-ico"><?php echo $cl['icon']; ?></div>
          <div><div class="clc-lb"><?php echo esc_html($cl['label']); ?></div><div class="clc-h"><?php echo esc_html($cl['handle']); ?></div></div>
        </div>
        <div class="clc-arr">→</div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="f-name"><?php echo esc_html($footer_name); ?></div>
  <div class="f-copy"><?php echo esc_html($footer_copy); ?></div>
  <div class="f-links">
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
      const sibs = Array.from(entry.target.parentElement.querySelectorAll('.fi'));
      const idx = sibs.indexOf(entry.target);
      setTimeout(() => entry.target.classList.add('vis'), idx * 80);
      obs.unobserve(entry.target);
    }
  });
}, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
document.querySelectorAll('.fi').forEach(el => obs.observe(el));
</script>
</body>
</html>
