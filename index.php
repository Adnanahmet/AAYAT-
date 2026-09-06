<?php
declare(strict_types=1);

$projects = [
    ['title' => 'Codebase AI', 'type' => 'PRODUCT', 'tags' => ['React', 'Node.js'], 'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1200&q=85', 'class' => 'project-wide'],
    ['title' => 'DesignSync', 'type' => 'BRAND SYSTEM', 'tags' => ['TypeScript', 'UI'], 'image' => 'https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&w=900&q=85', 'class' => 'project-tall'],
    ['title' => 'Shiplog', 'type' => 'DASHBOARD', 'tags' => ['Next.js', 'PostgreSQL'], 'image' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=85', 'class' => 'project-small'],
    ['title' => 'PocketDB', 'type' => 'DEVELOPER TOOL', 'tags' => ['Node.js', 'Docker'], 'image' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=1000&q=85', 'class' => 'project-medium'],
    ['title' => 'Your Brand', 'type' => 'E-COMMERCE', 'tags' => ['React', 'AWS'], 'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=900&q=85', 'class' => 'project-small'],
    ['title' => 'Growth Analytics', 'type' => 'DATA PLATFORM', 'tags' => ['Python', 'PostgreSQL'], 'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1400&q=85', 'class' => 'project-chart'],
];

$notice = isset($_GET['sent']) ? 'Message received. I will be in touch soon.' : '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Adnan Ahmed creates websites, graphic designs, and edited videos.">
    <title>Adnan Ahmed | Web, Design and Video</title>
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="site-shell">
        <header class="site-header">
            <a class="brand" href="#top" aria-label="Adnan Ahmed home"><span class="brand-mark">◈</span><span>Adnan Ahmed</span></a>
            <nav class="main-nav" aria-label="Main navigation">
                <a href="#work">Work</a><a href="#skills">Skills</a><a href="#about">About</a><a href="#contact">Contact</a>
            </nav>
            <a class="button button-dark header-cta" href="#contact">Let's connect <span>↗</span></a>
            <button class="menu-toggle" type="button" aria-label="Toggle navigation">☰</button>
        </header>

        <main id="top">
            <section class="hero section-pad">
                <div class="hero-copy reveal">
                    <p class="eyebrow"><span class="status-dot"></span> Available for collaboration</p>
                    <h1>Full-stack<br><span class="outline">build</span><br><em>er.</em></h1>
                    <div class="hero-bottom">
                        <p class="intro">I create responsive websites and visual content with HTML, CSS, JavaScript, PHP, MySQL, graphic design, and video editing.</p>
                        <div class="hero-actions"><a class="button button-dark" href="#work">View my work <span>↘</span></a><a class="button button-light" href="#contact">Say hello</a></div>
                    </div>
                </div>
                <div class="hero-art reveal reveal-delay">
                    <div class="portrait-card"><img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=1000&q=85" alt="Code on a laptop in a dark workspace"><span class="image-label">01 / 04</span></div>
                    <div class="floating-shot"><img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=500&q=85" alt="Bright creative studio"></div>
                    <div class="floating-pill blue">↗ <span>Available<br><b>this month</b></span></div>
                    <div class="floating-pill red"><span class="pulse"></span> Latest<br><b>6 projects live</b></div>
                </div>
            </section>

            <section class="tool-strip" id="skills"><div class="tool-label">Skills:</div><div class="tool-list"><span>HTML</span><span>CSS</span><span>JavaScript</span><span>PHP</span><span>MySQL</span><span>Graphic Design</span><span>Video Editing</span></div></section>

            <section class="work section-pad" id="work">
                <div class="section-heading reveal"><div><p class="eyebrow">Selected work</p><h2>Things I've<br><span class="outline">built.</span></h2></div><a class="button button-light" href="https://github.com" target="_blank" rel="noreferrer">▣ All on GitHub</a></div>
                <div class="project-grid">
                    <?php foreach ($projects as $project): ?>
                        <article class="project-card <?= htmlspecialchars($project['class']) ?> reveal" data-tags="<?= htmlspecialchars(implode(' ', $project['tags'])) ?>">
                            <img src="<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['title']) ?> project preview" loading="lazy">
                            <div class="project-overlay"><div><small><?= htmlspecialchars($project['type']) ?></small><h3><?= htmlspecialchars($project['title']) ?></h3></div><span class="circle-arrow">↗</span></div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="about section-pad" id="about">
                <div class="section-heading reveal"><div><p class="eyebrow">The short version</p><h2>About<br><span class="outline">me.</span></h2></div><a class="button button-dark" href="assets/marcus-webb-resume.pdf" download>⌄ Download resume</a></div>
                <div class="about-layout">
                    <div class="about-photo reveal"><img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=800&q=85" alt="A creative team collaborating at a table"><div class="location-chip">● Based in<br><b>Austin, TX</b></div><div class="stats"><span><b>5+</b> years exp.</span><span><b>40+</b> projects</span><span><b>1.2k</b> GitHub stars</span></div></div>
                    <div class="about-copy reveal reveal-delay"><p class="lead">I'm Marcus Webb — a full-stack developer who believes the best software is the kind you never notice because it just works.</p><p>I've spent 5 years shipping products in startups and agencies, working across the entire stack from database design to pixel-perfect interfaces. I care deeply about code quality, accessibility, and the craft of building things that last.</p><div class="timeline"><div class="timeline-item"><span class="timeline-dot">01</span><div><small>2023 — NOW</small><h3>Senior Full-stack Engineer</h3><p>Led the build of core product services and mentored three engineers on a growing platform.</p><div class="mini-tags"><span>Next.js</span><span>Node.js</span><span>AWS</span></div></div></div><div class="timeline-item"><span class="timeline-dot">02</span><div><small>2021 — 2023</small><h3>Frontend Engineer</h3><p>Built and maintained a design system used across four products.</p><div class="mini-tags"><span>React</span><span>TypeScript</span><span>Figma</span></div></div></div><div class="timeline-item"><span class="timeline-dot">03</span><div><small>2019 — 2021</small><h3>Junior Developer</h3><p>Found my feet in a fast-moving product team and learned to ship.</p></div></div></div></div>
                </div>
            </section>

            <section class="contact section-pad" id="contact"><div class="contact-panel"><div class="contact-copy"><p class="eyebrow">Open to collaboration</p><h2>Let's build<br><span>together.</span></h2><p>Have a product in mind, or just want to say hello? Contact Adnan Ahmed directly.</p><div class="social-links"><a href="https://wa.me/252613817396" target="_blank" rel="noreferrer">☏ WhatsApp: 0613817396</a><a href="mailto:Adnanahmedyusuf@gmail.com">✉ Adnanahmedyusuf@gmail.com</a><a href="https://www.facebook.com/adnanahmed" target="_blank" rel="noreferrer">f Facebook: Adnan Ahmed</a><a href="https://www.tiktok.com/@adnanahmed" target="_blank" rel="noreferrer">♪ TikTok: @adnanahmed</a></div></div><form class="contact-form" action="api/contact.php" method="post"><h3>Send a message</h3><?php if ($notice): ?><div class="notice"><?= htmlspecialchars($notice) ?></div><?php endif; ?><div class="form-row"><label>Name<input type="text" name="name" placeholder="Your name" required></label><label>Email<input type="email" name="email" placeholder="you@example.com" required></label></div><label>Subject<input type="text" name="subject" placeholder="What's on your mind?" required></label><label>Message<textarea name="message" rows="4" placeholder="Tell me about your project, idea, or just say hi." required></textarea></label><button class="button button-dark" type="submit">Send message <span>↗</span></button><small>I usually reply within 1–2 business days.</small></form></div></section>
        </main>
        <footer class="site-footer"><span>© 2026 Adnan Ahmed</span><div><a href="#top">Back to top ↑</a></div></footer>
    </div>
    <script src="script.js"></script>
</body>
</html>