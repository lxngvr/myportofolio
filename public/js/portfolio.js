(function () {
    /* ============================================================
               EDIT HERE. Everything below this block renders from this data.
               Entries marked placeholder:true show a "Sample" badge.
               Set showPlaceholders to false once your content is real.
               ============================================================ */
    var CONFIG = {
        name: "Galang Dava Ramadhan",
        monogram: "GD",
        email: "galangdavaa@gmail.com",
        showPlaceholders: false,
        socials: [
            {
                label: "Email",
                handle: "galangdavaa@gmail.com",
                url: "mailto:galangdavaa@gmail.com",
            },
            {
                label: "GitHub",
                handle: "@lxngvr",
                url: "https://github.com/lxngvr",
            },
            {
                label: "LinkedIn",
                handle: "in/galang-dava-ramadhan",
                url: "https://www.linkedin.com/in/galang-dava-ramadhan",
            },
            {
                label: "Instagram",
                handle: "@lxng_vr",
                url: "https://www.instagram.com/lxng_vr",
            },
        ],
        facts: [
            {
                k: "Interests",
                v: "Listening to Music, Exploring Data, and Reading Literature",
            },
            {
                k: "Learning philosophy",
                v: "If something can be done by a human, then we can do it too.",
            },
            {
                k: "Current focus",
                v: "Exploring Machine Learning while deepening my knowledge of Data Engineering.",
            },
        ],
        education: [
            {
                kind: "University",
                title: "Informatics Engineering",
                org: "Sebelas April University",
                date: "2024 – Present",
                text: "Currently studying Informatics with an interest in data science, machine learning, and data engineering. Actively developing technical skills through academic research, independent learning, and hands-on projects.",
                tags: [
                    "Data Science",
                    "Databases",
                    "Statistics",
                    "Machine Learning",
                    "Data Engineering",
                ],
                placeholder: true,
            },
            {
                kind: "Vocational / High School",
                title: "Software Engineering",
                org: "SMK Negeri 1 Sumedang",
                date: "2021 – 2024",
                text: "[Optional: the background that led you to Informatics.]",
                tags: [
                    "Desktop Development",
                    "Software Development",
                    "Web Development",
                    "Programming Logic",
                ],
                placeholder: true,
            },
        ],

        experience: [
            {
                kind: "Training Program",
                title: "Cohort Data Scientist",
                org: "Coding Camp powered by DBS Foundation",
                date: "2026",
                text: "Completed the Data Scientist learning path, including technical learning modules, instructor-led sessions, weekly consultations, financial literacy, and a capstone project.",
                tags: [
                    "Python",
                    "Data Science",
                    "Data Analysis",
                    "Machine Learning",
                ],
            },
            {
                kind: "Machine Learning Project",
                title: "Speech Disfluency Detection",
                org: "Academic Project",
                date: "2026",
                text: "Worked on a machine learning project focused on detecting speech disfluencies, gaining practical experience in data processing and analysis.",
                tags: ["Machine Learning", "Data Processing", "Data Analysis"],
            },
            {
                kind: "Research",
                title: "Website Usability Evaluation",
                org: "Sebelas April University",
                date: "2026",
                text: "Evaluated the SIUTER UNSAP website using the Nielsen usability model and PLS-SEM to analyze survey data and examine factors influencing usability.",
                tags: [
                    "PLS-SEM",
                    "SmartPLS",
                    "Usability Research",
                    "Data Analysis",
                ],
            },
            {
                kind: "Mentorship",
                title: "Front-End Development Mentor",
                org: "Tahungoding",
                date: "2025 – 2026",
                text: "Supported front-end development learning through HTML, CSS, Bootstrap, and JavaScript DOM, while gaining experience in technical guidance and web development.",
                tags: [
                    "HTML",
                    "CSS",
                    "Bootstrap",
                    "JavaScript",
                    "Web Development",
                ],
            },
        ],
        skills: [
            {
                group: "Programming Languages",
                style: "",
                placeholder: true,
                items: ["SQL", "Java", "JavaScript", "C#"],
                exploring: ["Python"],
            },
            {
                group: "Data Science & Machine Learning",
                style: "paper",
                placeholder: true,
                items: [
                    "pandas",
                    "NumPy",
                    "scikit-learn",
                    "Matplotlib",
                    "Jupyter",
                ],
                exploring: ["PyTorch"],
            },
            {
                group: "Data Engineering & Databases",
                style: "dark",
                placeholder: true,
                items: ["PostgreSQL", "MySQL", "Data Modeling", "ETL Basics"],
                exploring: ["Apache Airflow"],
            },
            {
                group: "Tools & Development Workflow",
                style: "",
                placeholder: true,
                items: ["Git", "GitHub", "VS Code", "Linux CLI"],
                exploring: ["Docker"],
            },
        ],
        /* type: analysis | ml | engineering | web.  thumb: bars | scatter | pipeline | browser | donut | matrix
                   url = "View Project" link. repo and demo are optional and shown only when different from url. */
        projects: [
            {
                type: "analysis",
                thumb: "bars",
                dark: false,
                placeholder: true,
                title: "Exploratory Analysis: [Dataset Name]",
                text: "[Describe the question you explored and the dataset you used.]",
                role: "[Cleaning, visualization, and interpreting the results.]",
                tags: ["Python", "pandas", "Matplotlib"],
                url: "https://github.com/your-username/project-one",
                repo: "https://github.com/your-username/project-one",
                demo: "",
            },
            {
                type: "ml",
                thumb: "scatter",
                dark: true,
                placeholder: true,
                title: "Prediction Experiment: [Topic]",
                text: "[State the prediction problem and what you set out to compare.]",
                role: "[Feature engineering, model training, and evaluation.]",
                tags: ["scikit-learn", "Python", "Jupyter"],
                url: "https://github.com/your-username/project-two",
                repo: "https://github.com/your-username/project-two",
                demo: "",
            },
            {
                type: "engineering",
                thumb: "pipeline",
                dark: false,
                placeholder: true,
                title: "Data Pipeline Practice: [Source to Destination]",
                text: "[Explain what raw data went in and how it was organized for analysis.]",
                role: "[Extraction, transformation, and loading steps you wrote.]",
                tags: ["SQL", "Python", "PostgreSQL"],
                url: "https://github.com/your-username/project-three",
                repo: "https://github.com/your-username/project-three",
                demo: "",
            },
            {
                type: "web",
                thumb: "browser",
                dark: true,
                placeholder: true,
                title: "Academic Web Project: [App Name]",
                text: "[Describe who the app is for and the problem it solves.]",
                role: "[Interface, logic, and anything you built end to end.]",
                tags: ["HTML", "CSS", "JavaScript"],
                url: "https://your-username.github.io/app-name",
                repo: "https://github.com/your-username/project-four",
                demo: "https://your-username.github.io/app-name",
            },
            {
                type: "analysis",
                thumb: "donut",
                dark: false,
                placeholder: true,
                title: "Data Visualization: [Topic]",
                text: "[What story the data tells and who the visuals are for.]",
                role: "[Chart design, data preparation, and written findings.]",
                tags: ["Python", "Data Viz"],
                url: "https://github.com/your-username/project-five",
                repo: "https://github.com/your-username/project-five",
                demo: "",
            },
            {
                type: "ml",
                thumb: "matrix",
                dark: true,
                placeholder: true,
                title: "Classification Experiment: [Topic]",
                text: "[What you tried to classify and which approaches you compared.]",
                role: "[Preprocessing, model selection, and error analysis.]",
                tags: ["Python", "scikit-learn"],
                url: "https://github.com/your-username/project-six",
                repo: "https://github.com/your-username/project-six",
                demo: "",
            },
        ],
    };

    var NAV = [
        ["About", "#about"],
        ["Experience", "#experience"],
        ["Skills", "#skills"],
        ["Projects", "#projects"],
        ["Contact", "#contact"],
    ];
    var TYPES = [
        ["all", "All"],
        ["analysis", "Data Analysis"],
        ["ml", "Machine Learning"],
        ["engineering", "Data Engineering"],
        ["web", "Web & Software"],
    ];
    var TYPE_LABEL = {
        analysis: "Data analysis",
        ml: "Machine learning",
        engineering: "Data engineering",
        web: "Web / software",
    };
    var SERVICES = [
        {
            filter: "analysis",
            icon: "ds",
            dark: false,
            chip: "Analyze",
            title: 'Data <span class="hl">Science</span>',
            name: "Data Science",
            text: "Exploring datasets, discovering patterns, and extracting insights through data analysis and statistical thinking.",
        },
        {
            filter: "ml",
            icon: "ml",
            dark: true,
            chip: "Model",
            title: 'Machine <span class="hl">Learning</span>',
            name: "Machine Learning",
            text: "Experimenting with predictive models, feature engineering, and machine learning approaches to solve practical problems.",
        },
        {
            filter: "engineering",
            icon: "de",
            dark: true,
            chip: "Pipeline",
            title: 'Data <span class="hl">Engineering</span>',
            name: "Data Engineering",
            text: "Learning to build reliable data pipelines, transform raw data, and organize data for analytics and machine learning workflows.",
        },
        {
            filter: "web",
            icon: "sw",
            dark: false,
            chip: "Build",
            title: 'Software <span class="hl">Development</span>',
            name: "Software Development",
            text: "Building practical digital solutions using programming fundamentals, web technologies, and structured problem-solving.",
        },
    ];

    var ARROW =
        '<svg class="arr" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M8 7h9v9"/></svg>';
    var ICONS = {
        ds: '<svg class="ic" viewBox="0 0 64 64" aria-hidden="true"><path d="M10 8v46h46"/><path d="M14 46 52 18" stroke-dasharray="3 5"/><circle cx="20" cy="42" r="3.5"/><circle cx="29" cy="35" r="3.5"/><circle cx="38" cy="38" r="3.5"/><circle cx="47" cy="22" r="5" class="lime"/></svg>',
        ml: '<svg class="ic" viewBox="0 0 64 64" aria-hidden="true"><path d="M12 16 32 12M12 16 32 40M12 32 32 26M12 32 32 54M12 48 32 40M12 48 32 54M32 12 52 24M32 26 52 24M32 26 52 42M32 40 52 42M32 54 52 42"/><circle cx="12" cy="16" r="3.5"/><circle cx="12" cy="32" r="3.5"/><circle cx="12" cy="48" r="3.5"/><circle cx="32" cy="12" r="3.5"/><circle cx="32" cy="26" r="3.5"/><circle cx="32" cy="40" r="3.5"/><circle cx="32" cy="54" r="3.5"/><circle cx="52" cy="24" r="3.5"/><circle cx="52" cy="42" r="4.5" class="lime"/></svg>',
        de: '<svg class="ic" viewBox="0 0 64 64" aria-hidden="true"><rect x="4" y="20" width="14" height="22" rx="4"/><rect x="25" y="20" width="14" height="22" rx="4" class="lime"/><rect x="46" y="20" width="14" height="22" rx="4"/><path d="M18 31h7M39 31h7M22 27l3 4-3 4M43 27l3 4-3 4M8 52h48"/></svg>',
        sw: '<svg class="ic" viewBox="0 0 64 64" aria-hidden="true"><rect x="6" y="10" width="52" height="44" rx="8"/><path d="M6 22h52M26 31l-6 6 6 6M38 31l6 6-6 6M35 29l-6 16"/><circle cx="14" cy="16" r="2" class="lime"/></svg>',
    };
    var HI = [
        {
            t: "Curious by Nature",
            d: "Always asking how and why.",
            p: '<circle cx="11" cy="11" r="6"/><path d="m20 20-4.5-4.5"/>',
        },
        {
            t: "Learn by Building",
            d: "Ideas become real through practice.",
            p: '<path d="M4 8.5 12 4l8 4.5v9L12 22l-8-4.5z"/><path d="M4 8.5 12 13l8-4.5M12 13v9"/>',
        },
        {
            t: "Data-Driven Thinking",
            d: "Evidence first, then conclusions.",
            p: '<path d="M5 20V11M12 20V4M19 20v-6"/>',
        },
    ];

    /* project thumbnails */
    var BAR_H = [50, 84, 62, 112, 92, 70, 100];
    var THUMBS = {
        bars: function () {
            return (
                '<svg class="th" viewBox="0 0 320 180" aria-hidden="true"><path class="faint" d="M20 50H300M20 90H300M20 130H300"/><path d="M20 150H300"/>' +
                BAR_H.map(function (v, i) {
                    return (
                        '<rect x="' +
                        (34 + i * 40) +
                        '" y="' +
                        (150 - v) +
                        '" width="26" height="' +
                        v +
                        '" rx="4"' +
                        (i === 3 ? ' class="lime"' : "") +
                        "/>"
                    );
                }).join("") +
                "</svg>"
            );
        },
        scatter: function () {
            var A = [
                [70, 120],
                [88, 100],
                [100, 132],
                [116, 110],
                [84, 142],
                [124, 126],
                [104, 96],
            ];
            var B = [
                [200, 60],
                [222, 44],
                [240, 70],
                [214, 82],
                [262, 54],
                [250, 92],
                [232, 104],
            ];
            return (
                '<svg class="th" viewBox="0 0 320 180" aria-hidden="true"><path class="faint" d="M20 160V20M20 160H300"/><path d="M118 170 178 12" stroke-dasharray="4 7"/>' +
                A.map(function (p) {
                    return (
                        '<circle cx="' + p[0] + '" cy="' + p[1] + '" r="5.5"/>'
                    );
                }).join("") +
                B.map(function (p) {
                    return (
                        '<circle cx="' +
                        p[0] +
                        '" cy="' +
                        p[1] +
                        '" r="5.5" class="lime"/>'
                    );
                }).join("") +
                "</svg>"
            );
        },
        pipeline: function () {
            return (
                '<svg class="th" viewBox="0 0 320 180" aria-hidden="true"><ellipse cx="50" cy="68" rx="28" ry="10"/><path d="M22 68v44c0 6 12.5 10 28 10s28-4 28-10V68"/><path d="M22 90c0 6 12.5 10 28 10s28-4 28-10"/>' +
                '<path d="M82 90h34m-7-6 7 6-7 6"/><rect x="124" y="64" width="72" height="52" rx="10"/><path class="faint" d="M138 82h44M138 94h30M138 106h38"/>' +
                '<path d="M200 90h30m-7-6 7 6-7 6"/><rect x="238" y="64" width="62" height="52" rx="10" class="lime"/><path d="M252 100v-8M269 100V82M286 100V90"/>' +
                '<path class="faint" d="M22 152H298"/></svg>'
            );
        },
        browser: function () {
            return (
                '<svg class="th" viewBox="0 0 320 180" aria-hidden="true"><rect x="30" y="20" width="260" height="140" rx="12"/><path d="M30 44H290"/><circle cx="46" cy="32" r="3"/><circle cx="58" cy="32" r="3"/><circle cx="70" cy="32" r="3" class="lime"/>' +
                '<rect x="46" y="58" width="116" height="26" rx="6" class="lime"/><path class="faint" d="M46 100H150M46 114H134M46 128H146"/><rect x="180" y="58" width="94" height="86" rx="8"/><path d="M192 118l16-16 14 10 22-24 18 18"/></svg>'
            );
        },
        donut: function () {
            return (
                '<svg class="th" viewBox="0 0 320 180" aria-hidden="true"><g transform="rotate(-90 90 90)"><circle class="nf faint" cx="90" cy="90" r="50" stroke-width="20"/><circle class="nf" cx="90" cy="90" r="50" stroke-width="20" stroke="#B7FF45" stroke-dasharray="110 204.2" stroke-linecap="butt"/><circle class="nf" cx="90" cy="90" r="50" stroke-width="20" stroke-dasharray="70 244.2" stroke-dashoffset="-118" stroke-linecap="butt"/></g>' +
                '<path class="faint" d="M180 50H300M180 90H300M180 130H300"/><path d="M184 128 210 104 236 114 264 70 292 84"/><circle cx="292" cy="84" r="5" class="lime"/></svg>'
            );
        },
        matrix: function () {
            var s = "";
            for (var r = 0; r < 3; r++) {
                for (var c = 0; c < 3; c++) {
                    s +=
                        '<rect x="' +
                        (95 + c * 46) +
                        '" y="' +
                        (24 + r * 46) +
                        '" width="38" height="38" rx="7"' +
                        (r === c ? ' class="lime"' : "") +
                        "/>";
                }
            }
            return (
                '<svg class="th" viewBox="0 0 320 180" aria-hidden="true"><path class="faint" d="M80 24v130M95 12h130"/>' +
                s +
                "</svg>"
            );
        },
    };

    function $(s, r) {
        return (r || document).querySelector(s);
    }
    function $$(s, r) {
        return Array.prototype.slice.call((r || document).querySelectorAll(s));
    }
    function badge(on) {
        return CONFIG.showPlaceholders && on
            ? '<span class="ph">Sample · edit</span>'
            : "";
    }
    function tagsHtml(a) {
        return a && a.length
            ? '<div class="tags">' +
                  a
                      .map(function (t) {
                          return '<span class="tag">' + t + "</span>";
                      })
                      .join("") +
                  "</div>"
            : "";
    }
    function ext(u) {
        return /^https?:/.test(u)
            ? ' target="_blank" rel="noopener noreferrer"'
            : "";
    }

    /* brand + nav */
    $("#logo-mark").textContent = CONFIG.monogram;
    $("#foot-mark").textContent = CONFIG.monogram;
    $("#brand-name").textContent = CONFIG.name;
    $("#foot-name").textContent = CONFIG.name;
    $("#foot-name-2").textContent = CONFIG.name;
    $("#nav-links").innerHTML = NAV.map(function (n) {
        return '<a href="' + n[1] + '">' + n[0] + "</a>";
    }).join("");
    $("#menu-list").innerHTML = NAV.map(function (n) {
        return '<li><a href="' + n[1] + '">' + n[0] + "</a></li>";
    }).join("");
    $("#year").textContent = new Date().getFullYear();

    /* services */
    $("#svc-grid").innerHTML = SERVICES.map(function (s) {
        return (
            '<article class="card' +
            (s.dark ? " dark" : "") +
            '" data-rv>' +
            '<div class="svc-top"><div class="ic-box">' +
            ICONS[s.icon] +
            '</div><span class="svc-chip">' +
            s.chip +
            "</span></div>" +
            "<h3>" +
            s.title +
            "</h3><p>" +
            s.text +
            "</p>" +
            '<a class="link" href="#projects" data-filter="' +
            s.filter +
            '" aria-label="Explore ' +
            s.name +
            ' projects">Explore ' +
            ARROW +
            "</a></article>"
        );
    }).join("");

    /* about */
    $("#hi-grid").innerHTML = HI.map(function (h) {
        return (
            '<div class="hi"><span class="hi-ic"><svg viewBox="0 0 24 24" aria-hidden="true">' +
            h.p +
            "</svg></span><strong>" +
            h.t +
            "</strong><span>" +
            h.d +
            "</span></div>"
        );
    }).join("");
    $("#facts").innerHTML =
        '<div class="facts-head"><span class="eyebrow">A bit more</span>' +
        badge(true) +
        "</div><dl>" +
        CONFIG.facts
            .map(function (f) {
                return "<div><dt>" + f.k + "</dt><dd>" + f.v + "</dd></div>";
            })
            .join("") +
        "</dl>";

    /* timeline */
    function tl(item) {
        return (
            '<article class="tl-item"><div class="tl-meta"><span class="kind">' +
            item.kind +
            "</span>" +
            badge(item.placeholder) +
            "</div>" +
            '<span class="tl-date">' +
            item.date +
            "</span><h4>" +
            item.title +
            '</h4><div class="tl-org">' +
            item.org +
            "</div><p>" +
            item.text +
            "</p>" +
            tagsHtml(item.tags) +
            "</article>"
        );
    }
    $("#edu-list").innerHTML = CONFIG.education.map(tl).join("");
    $("#exp-list").innerHTML = CONFIG.experience.map(tl).join("");

    /* skills */
    $("#sk-grid").innerHTML = CONFIG.skills
        .map(function (g) {
            var cls = "sk" + (g.style ? " " + g.style : "");
            return (
                '<article class="' +
                cls +
                '" data-rv><div class="sk-head"><h3>' +
                g.group +
                "</h3>" +
                badge(g.placeholder) +
                '</div><ul class="chips">' +
                g.items
                    .map(function (i) {
                        return '<li class="chip">' + i + "</li>";
                    })
                    .join("") +
                (g.exploring || [])
                    .map(function (i) {
                        return '<li class="chip exp">' + i + "</li>";
                    })
                    .join("") +
                "</ul></article>"
            );
        })
        .join("");

    /* projects */
    var filter = "all";
    $("#filters").innerHTML = TYPES.map(function (t) {
        return (
            '<button type="button" class="fbtn" data-f="' +
            t[0] +
            '" aria-pressed="' +
            (t[0] === "all") +
            '">' +
            t[1] +
            "</button>"
        );
    }).join("");
    function renderProjects(animate) {
        var list = CONFIG.projects.filter(function (p) {
            return filter === "all" || p.type === filter;
        });
        $("#proj-grid").innerHTML = list
            .map(function (p, i) {
                var links =
                    '<a class="btn btn-primary" href="' +
                    p.url +
                    '"' +
                    ext(p.url) +
                    ">View Project " +
                    ARROW +
                    "</a>";
                if (p.repo && p.repo !== p.url)
                    links +=
                        '<a class="link" href="' +
                        p.repo +
                        '"' +
                        ext(p.repo) +
                        ">GitHub " +
                        ARROW +
                        "</a>";
                if (p.demo && p.demo !== p.url)
                    links +=
                        '<a class="link" href="' +
                        p.demo +
                        '"' +
                        ext(p.demo) +
                        ">Live demo " +
                        ARROW +
                        "</a>";
                return (
                    '<article class="proj' +
                    (p.dark ? " dark" : "") +
                    '"' +
                    (animate ? " data-rv" : "") +
                    '><div class="thumb">' +
                    THUMBS[p.thumb]() +
                    '</div><div class="proj-body">' +
                    '<div class="proj-top"><span class="kind" style="color:inherit;opacity:.75">' +
                    TYPE_LABEL[p.type] +
                    "</span>" +
                    badge(p.placeholder) +
                    "</div>" +
                    "<h3>" +
                    p.title +
                    "</h3><p>" +
                    p.text +
                    '</p><div class="role"><b>My contribution</b>' +
                    p.role +
                    "</div>" +
                    tagsHtml(p.tags) +
                    '<div class="proj-links">' +
                    links +
                    "</div></div></article>"
                );
            })
            .join("");
        var label =
            (TYPES.filter(function (t) {
                return t[0] === filter;
            })[0] || [])[1] || "All";
        $("#pj-count").textContent =
            "Showing " +
            list.length +
            (list.length === 1 ? " project" : " projects") +
            (filter === "all" ? "" : " in " + label);
        $$(".fbtn").forEach(function (b) {
            b.setAttribute(
                "aria-pressed",
                String(b.getAttribute("data-f") === filter),
            );
        });
    }
    function setFilter(f) {
        filter = f;
        renderProjects(false);
    }
    $("#filters").addEventListener("click", function (e) {
        var b = e.target.closest(".fbtn");
        if (b) setFilter(b.getAttribute("data-f"));
    });
    renderProjects(true);

    /* contact */
    var mail = CONFIG.email;
    $("#mail-cta").setAttribute(
        "href",
        "mailto:" +
            mail +
            "?subject=" +
            encodeURIComponent("Hello from your portfolio"),
    );
    $("#mail-addr").textContent = mail;
    $("#soc").innerHTML = CONFIG.socials
        .map(function (s) {
            return (
                '<li><a href="' +
                s.url +
                '"' +
                ext(s.url) +
                "><span><small>" +
                s.label +
                "</small><strong>" +
                s.handle +
                "</strong></span>" +
                ARROW +
                "</a></li>"
            );
        })
        .join("");
    $("#copy-btn").addEventListener("click", function () {
        var btn = this,
            st = $("#copy-status");
        function done(msg) {
            btn.textContent = msg;
            st.textContent = msg;
            setTimeout(function () {
                btn.textContent = "Copy address";
            }, 2200);
        }
        function fallback() {
            try {
                var r = document.createRange();
                r.selectNodeContents($("#mail-addr"));
                var s = window.getSelection();
                s.removeAllRanges();
                s.addRange(r);
            } catch (e) {}
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

    /* menu */
    var burger = $("#burger"),
        menu = $("#menu");
    function setMenu(open) {
        burger.setAttribute("aria-expanded", String(open));
        burger.setAttribute("aria-label", open ? "Close menu" : "Open menu");
        menu.hidden = !open;
    }
    burger.addEventListener("click", function () {
        setMenu(burger.getAttribute("aria-expanded") !== "true");
    });
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && !menu.hidden) {
            setMenu(false);
            burger.focus();
        }
    });
    window.addEventListener("resize", function () {
        if (window.innerWidth >= 900) setMenu(false);
    });

    /* smooth in-page navigation */
    var reduce =
        window.matchMedia &&
        window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    document.addEventListener("click", function (e) {
        var a = e.target.closest('a[href^="#"]');
        if (!a) return;
        var id = a.getAttribute("href");
        var f = a.getAttribute("data-filter");
        if (f) setFilter(f);
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

    /* active nav link */
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

        /* gentle reveal; content is readable before it fires */
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
