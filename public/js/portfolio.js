/*
 * Interaksi halaman portfolio.
 * Semua konten sekarang dirender oleh Laravel (Blade) dari database,
 * jadi file ini hanya mengurus perilaku: menu, scroll, filter, copy, animasi.
 */
(function () {
    function $(s, r) {
        return (r || document).querySelector(s);
    }
    function $$(s, r) {
        return Array.prototype.slice.call((r || document).querySelectorAll(s));
    }

    var reduce =
        window.matchMedia &&
        window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    /* ---------- menu mobile ---------- */
    var burger = $("#burger"),
        menu = $("#menu");
    function setMenu(open) {
        if (!burger || !menu) return;
        burger.setAttribute("aria-expanded", String(open));
        burger.setAttribute("aria-label", open ? "Close menu" : "Open menu");
        menu.hidden = !open;
    }
    if (burger) {
        burger.addEventListener("click", function () {
            setMenu(burger.getAttribute("aria-expanded") !== "true");
        });
    }
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && menu && !menu.hidden) {
            setMenu(false);
            burger.focus();
        }
    });
    window.addEventListener("resize", function () {
        if (window.innerWidth >= 900) setMenu(false);
    });

    /* ---------- filter project ---------- */
    var cards = $$("#proj-grid .proj");
    var filterBtns = $$(".fbtn");
    var countEl = $("#pj-count");

    function setFilter(f) {
        if (!cards.length) return;
        var shown = 0;
        cards.forEach(function (c) {
            var match = f === "all" || c.getAttribute("data-type") === f;
            c.hidden = !match;
            if (match) shown++;
        });
        filterBtns.forEach(function (b) {
            b.setAttribute(
                "aria-pressed",
                String(b.getAttribute("data-f") === f),
            );
        });
        var active = filterBtns.filter(function (b) {
            return b.getAttribute("data-f") === f;
        })[0];
        if (countEl) {
            countEl.textContent =
                "Showing " +
                shown +
                (shown === 1 ? " project" : " projects") +
                (f === "all" || !active ? "" : " in " + active.textContent);
        }
    }
    var filtersEl = $("#filters");
    if (filtersEl) {
        filtersEl.addEventListener("click", function (e) {
            var b = e.target.closest(".fbtn");
            if (b) setFilter(b.getAttribute("data-f"));
        });
    }

    /* ---------- navigasi smooth + kartu "Explore" ---------- */
    document.addEventListener("click", function (e) {
        var a = e.target.closest('a[href^="#"]');
        if (!a) return;
        var id = a.getAttribute("href");
        var f = a.getAttribute("data-filter");
        // Hanya terapkan filter bila tipe itu punya project.
        if (f && filterBtns.some(function (b) { return b.getAttribute("data-f") === f; })) {
            setFilter(f);
        }
        if (a.hasAttribute("data-top") || id === "#top") {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: reduce ? "auto" : "smooth" });
            setMenu(false);
            return;
        }
        var t = id.length > 1 ? document.getElementById(id.slice(1)) : null;
        if (t) {
            e.preventDefault();
            t.scrollIntoView({
                behavior: reduce ? "auto" : "smooth",
                block: "start",
            });
            setMenu(false);
        }
    });

    /* ---------- salin email ---------- */
    var copyBtn = $("#copy-btn");
    if (copyBtn) {
        copyBtn.addEventListener("click", function () {
            var btn = this,
                st = $("#copy-status"),
                addrEl = $("#mail-addr"),
                mail = addrEl ? addrEl.textContent.trim() : "";
            function done(msg) {
                btn.textContent = msg;
                if (st) st.textContent = msg;
                setTimeout(function () {
                    btn.textContent = "Copy address";
                }, 2200);
            }
            function fallback() {
                try {
                    var r = document.createRange();
                    r.selectNodeContents(addrEl);
                    var s = window.getSelection();
                    s.removeAllRanges();
                    s.addRange(r);
                } catch (err) {}
                done("Selected, press Ctrl/⌘+C");
            }
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(mail).then(function () {
                    done("Copied");
                }, fallback);
            } else {
                fallback();
            }
        });
    }

    /* ---------- link aktif + animasi muncul ---------- */
    if ("IntersectionObserver" in window) {
        var links = {};
        $$("#nav-links a").forEach(function (a) {
            links[a.getAttribute("href").slice(1)] = a;
        });
        var so = new IntersectionObserver(
            function (es) {
                es.forEach(function (en) {
                    if (en.isIntersecting) {
                        Object.keys(links).forEach(function (k) {
                            links[k].classList.toggle("on", k === en.target.id);
                        });
                    }
                });
            },
            { rootMargin: "-45% 0px -50% 0px" },
        );
        Object.keys(links).forEach(function (k) {
            var el = document.getElementById(k);
            if (el) so.observe(el);
        });

        var els = $$("[data-rv]");
        els.forEach(function (el) {
            el.classList.add("rv");
        });
        var ro = new IntersectionObserver(
            function (es) {
                es.forEach(function (en) {
                    if (en.isIntersecting) {
                        en.target.classList.add("in");
                        ro.unobserve(en.target);
                    }
                });
            },
            { threshold: 0.08, rootMargin: "0px 0px -6% 0px" },
        );
        els.forEach(function (el) {
            ro.observe(el);
        });
    }
})();
