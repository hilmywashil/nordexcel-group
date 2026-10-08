<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - NordExcel Group</title>
    <meta name="description"
        content="NordExcel Group menyediakan layanan pembuatan website profesional, toko online, landing page, sistem admin, dan solusi digital untuk bisnis.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="NordExcel" />
    <link rel="manifest" href="/site.webmanifest" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { theme: { extend: { fontFamily: { heading: ['Plus Jakarta Sans', 'sans-serif'], body: ['Inter', 'sans-serif'] } } } }
    </script>

</head>

<body>

    @include('layouts.partials.header')

    <main>

        @yield('content')

    </main>

    @include('layouts.partials.footer')

    <script>
            /* ===== Mobile menu ===== */
            (function () {
                const btn = document.getElementById('mobile-menu-button');
                const menu = document.getElementById('mobile-menu');
                const set = open => {
                    menu.classList.toggle('hidden', !open);
                    btn.setAttribute('aria-expanded', open);
                    btn.innerHTML = open ? '<i class="bi bi-x-lg"></i>' : '<i class="bi bi-list"></i>';
                };
                btn.addEventListener('click', () => set(menu.classList.contains('hidden')));
                menu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => set(false)));
            })();

        /* ===== Carousel (testimonial & artikel) ===== */
        document.querySelectorAll('[data-carousel]').forEach(root => {
            const viewport = root.querySelector('.carousel-viewport');
            const track = root.querySelector('.carousel-track');
            const slides = [...track.children];
            const prev = root.querySelector('[data-prev]');
            const next = root.querySelector('[data-next]');
            const dotsWrap = root.querySelector('[data-dots]');
            const autoplay = parseInt(root.dataset.autoplay || '0', 10);
            let index = 0, perView = 3, timer = null;

            const getPerView = () => window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
            const maxIndex = () => Math.max(0, slides.length - perView);

            function buildDots() {
                dotsWrap.innerHTML = '';
                for (let i = 0; i <= maxIndex(); i++) {
                    const b = document.createElement('button');
                    b.type = 'button';
                    b.setAttribute('aria-label', 'Ke slide ' + (i + 1));
                    b.addEventListener('click', () => { go(i); restart(); });
                    dotsWrap.appendChild(b);
                }
            }

            function render() {
                track.style.transform = 'translateX(' + (-index * (100 / perView)) + '%)';
                prev.disabled = index === 0;
                next.disabled = index === maxIndex() && !autoplay;
                [...dotsWrap.children].forEach((d, i) => d.classList.toggle('active', i === index));
                slides.forEach((s, i) => s.setAttribute('aria-hidden', i < index || i >= index + perView));
            }

            function go(i) {
                const max = maxIndex();
                index = i > max ? 0 : i < 0 ? max : i; /* loop */
                render();
            }

            function stop() { clearInterval(timer); timer = null; }
            function start() { if (autoplay && !timer) timer = setInterval(() => go(index + 1), autoplay); }
            function restart() { stop(); start(); }

            prev.addEventListener('click', () => { go(index - 1); restart(); });
            next.addEventListener('click', () => { go(index + 1); restart(); });
            prev.disabled = false;

            root.addEventListener('mouseenter', stop);
            root.addEventListener('mouseleave', start);
            root.addEventListener('focusin', stop);
            root.addEventListener('focusout', start);

            /* Swipe */
            let startX = 0, dx = 0, dragging = false;
            viewport.addEventListener('pointerdown', e => { dragging = true; startX = e.clientX; dx = 0; });
            viewport.addEventListener('pointermove', e => { if (dragging) dx = e.clientX - startX; });
            const end = () => {
                if (!dragging) return;
                dragging = false;
                if (Math.abs(dx) > 50) { go(index + (dx < 0 ? 1 : -1)); restart(); }
            };
            viewport.addEventListener('pointerup', end);
            viewport.addEventListener('pointercancel', end);
            viewport.addEventListener('pointerleave', end);

            root.addEventListener('keydown', e => {
                if (e.key === 'ArrowLeft') { go(index - 1); restart(); }
                if (e.key === 'ArrowRight') { go(index + 1); restart(); }
            });

            function layout() {
                perView = getPerView();
                index = Math.min(index, maxIndex());
                buildDots();
                render();
            }
            let rt;
            window.addEventListener('resize', () => { clearTimeout(rt); rt = setTimeout(layout, 120); });

            layout();
            start();
        });

        /* ===== Logo marquee: gandakan logo agar loop mulus ===== */
        document.querySelectorAll('[data-marquee]').forEach(m => {
            const track = m.querySelector('.marquee-track');
            const items = [...track.children];
            /* pastikan satu set cukup lebar, lalu duplikasi untuk loop -50% */
            const fill = () => {
                while (track.scrollWidth < m.offsetWidth * 1.2) items.forEach(i => track.appendChild(i.cloneNode(true)));
            };
            fill();
            const half = [...track.children];
            half.forEach(i => { const c = i.cloneNode(true); c.setAttribute('aria-hidden', 'true'); c.querySelector('img').alt = ''; track.appendChild(c); });
        });
    </script>

</body>

</html>