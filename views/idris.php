<?php
// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<!-- About Idris: a clean, responsive single-file view with most styling inline -->
<div class="idris-about">
    <style>
    .idris-about{font-family:-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; color:#222; max-width:980px; margin:24px auto; padding:26px;}
    .idris-hero{display:flex; gap:26px; align-items:center; background:linear-gradient(180deg,#fff,#fbfbfd); padding:26px; border-radius:12px; box-shadow:0 6px 18px rgba(29,31,33,0.06);}
    .idris-avatar{flex:0 0 160px; width:160px; height:160px; border-radius:12px; overflow:hidden; display:flex; align-items:center; justify-content:center; background:linear-gradient(135deg,#f6f7fb,#eef2ff);}
    .idris-avatar svg{width:130px;height:130px;}
    .idris-intro{flex:1;}
    .idris-name{font-size:24px;font-weight:700;margin:0 0 6px;color:#111}
    .idris-title{color:#6b7280;margin:0 0 12px}
    .idris-blurb{margin:0 0 14px;line-height:1.55;color:#374151}
    .idris-cta{display:flex;gap:8px;align-items:center}
    .btn{display:inline-block;padding:10px 14px;border-radius:8px;text-decoration:none;font-weight:600;border:1px solid transparent}
    .btn-primary{background:#0ea5a4;color:#fff;border-color:rgba(14,165,164,.12);box-shadow:0 6px 18px rgba(14,165,164,.08)}
    .btn-outline{background:transparent;color:#0ea5a4;border-color:#0ea5a4}

    .idris-grid{display:grid;grid-template-columns:1fr 340px;gap:22px;margin-top:18px}
    .card{background:#fff;border-radius:12px;padding:18px;box-shadow:0 3px 10px rgba(15,23,42,0.04)}
    .skills{display:flex;flex-wrap:wrap;gap:10px}
    .skill{background:#f1f5f9;color:#0f172a;padding:8px 10px;border-radius:8px;font-weight:600;font-size:13px}

    .timeline{list-style:none;padding:0;margin:0}
    .timeline li{position:relative;padding-left:18px;margin-bottom:18px}
    .timeline li:before{content:'';position:absolute;left:0;top:6px;width:10px;height:10px;border-radius:50%;background:#0ea5a4}
    .timeline .role{font-weight:700;color:#111}
    .timeline .meta{font-size:13px;color:#6b7280}

    .contact{display:flex;flex-direction:column;gap:8px}
    .contact a{color:#0f172a;text-decoration:none}

    /* responsive */
    @media (max-width:820px){
        .idris-hero{flex-direction:column;align-items:flex-start}
        .idris-grid{grid-template-columns:1fr;}
        .idris-avatar{width:120px;height:120px}
    }
    </style>

    <section class="idris-hero" role="region" aria-labelledby="idris-heading">
        <div class="idris-avatar" aria-hidden="true">
            <!-- Inline avatar SVG to avoid external assets -->
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Idris avatar">
                <defs>
                    <linearGradient id="g1" x1="0" x2="1" y1="0" y2="1">
                        <stop offset="0%" stop-color="#60a5fa"/>
                        <stop offset="100%" stop-color="#7c3aed"/>
                    </linearGradient>
                </defs>
                <rect width="200" height="200" rx="20" fill="url(#g1)" />
                <g transform="translate(40,38)" fill="#fff">
                    <circle cx="60" cy="40" r="28" opacity="0.95" />
                    <rect x="10" y="86" width="100" height="38" rx="10" opacity="0.9" />
                </g>
            </svg>
        </div>

        <div class="idris-intro">
            <h1 id="idris-heading" class="idris-name">Idris — Software Engineer</h1>
            <div class="idris-title">Full‑stack developer specializing in WordPress, PHP, and modern front‑end</div>
            <p class="idris-blurb">I build performant, accessible WordPress sites and developer‑friendly plugins. I enjoy turning product ideas into reliable, maintainable code — with a focus on clarity, good UX, and measurable results.</p>

            <div class="idris-cta">
                <a class="btn btn-primary" href="mailto:hello@example.com?subject=Hi%20Idris">Contact Idris</a>
                <a class="btn btn-outline" href="#experience">Experience</a>
            </div>
        </div>
    </section>

    <div class="idris-grid">
        <main class="card" aria-labelledby="skills-heading">
            <h2 id="skills-heading" style="margin-top:0">Skills & tools</h2>
            <div class="skills" aria-hidden="false">
                <span class="skill">PHP</span>
                <span class="skill">WordPress</span>
                <span class="skill">JavaScript</span>
                <span class="skill">React</span>
                <span class="skill">REST APIs</span>
                <span class="skill">MySQL</span>
                <span class="skill">HTML & CSS</span>
                <span class="skill">Docker</span>
                <span class="skill">Git</span>
            </div>

            <h3 style="margin-top:18px">Selected Projects</h3>
            <ul>
                <li><strong>BrensSmallChops</strong> — eCommerce & content site (WordPress customization, performance tuning)</li>
                <li><strong>Plugin: Meetup Exercise</strong> — tools for meetup exercises and demos</li>
                <li><strong>Admin UI improvements</strong> — custom Gutenberg blocks and admin UX fixes</li>
            </ul>

            <h3 style="margin-top:18px">Philosophy</h3>
            <p style="color:#475569">I prefer small iterations, testable code, and readable documentation. I value accessibility and performance, and I try to make developer experience a first-class citizen.</p>
        </main>

        <aside class="card" aria-labelledby="experience-heading">
            <h2 id="experience-heading" style="margin-top:0">Experience</h2>
            <ul class="timeline">
                <li>
                    <div class="role">Senior WordPress Developer — Acme Co.</div>
                    <div class="meta">2021 — Present</div>
                    <div style="margin-top:6px;color:#334155">Led custom theme and plugin work, reduced page load times by 30%, and improved admin workflows.</div>
                </li>
                <li>
                    <div class="role">Full‑stack Engineer — DevStudio</div>
                    <div class="meta">2018 — 2021</div>
                    <div style="margin-top:6px;color:#334155">Built client portals, integrations with third‑party APIs, and SPAs backed by WP REST API.</div>
                </li>
                <li>
                    <div class="role">Software Engineer — Startup</div>
                    <div class="meta">2015 — 2018</div>
                    <div style="margin-top:6px;color:#334155">Worked across the stack on rapid feature development and CI automation.</div>
                </li>
            </ul>

            <h3 style="margin-top:18px">Contact</h3>
            <div class="contact">
                <div><strong>Email</strong>: <a href="mailto:hello@example.com">hello@example.com</a></div>
                <div><strong>Location</strong>: Buea, Cameroon</div>
                <div><strong>Resume</strong>: <a href="#">Download (PDF)</a></div>
            </div>

            <div style="margin-top:14px;display:flex;gap:8px">
                <a class="btn btn-primary" href="mailto:hello@example.com">Email</a>
                <a class="btn btn-outline" href="#">LinkedIn</a>
            </div>
        </aside>
    </div>

    <footer style="margin-top:18px;text-align:center;color:#94a3b8;font-size:13px">Built with care • Open to collaboration</footer>
</div>
