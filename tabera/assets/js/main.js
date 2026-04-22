/* assets/js/main.js
   Tabera Landing Page Interactions
   - Loader fade out
   - Custom cursor (desktop only)
   - Navbar scrolled effect
   - Burger menu toggle + close on click outside
   - Reveal on scroll (matches .reveal.active in CSS)
   - Menu filter (All/Coffee/Food/Beverages) based on .menu-category text
   - Gallery lightbox (simple modal) for wow factor
*/

(() => {
  "use strict";

  // Helpers
  const $ = (sel, root = document) => root.querySelector(sel);
  const $$ = (sel, root = document) => Array.from(root.querySelectorAll(sel));

  const isTouch =
    "ontouchstart" in window ||
    navigator.maxTouchPoints > 0 ||
    window.matchMedia("(pointer: coarse)").matches;

  // =========================
  // 1) Loader
  // =========================
  const loader = $("#loader");
  const hideLoader = () => {
    if (!loader) return;
    loader.classList.add("hidden");
    // remove after animation to free DOM
    setTimeout(() => loader.remove(), 700);
  };

  // hide loader when page fully loaded
  window.addEventListener("load", () => {
    // small delay to let animation feel intentional
    setTimeout(hideLoader, 200);
  });

  // fallback: if load event takes too long
  setTimeout(hideLoader, 3500);

  // =========================
  // 2) Custom Cursor (desktop only)
  // =========================
  const cursor = $(".cursor");
  const follower = $(".cursor-follower");

  if (isTouch) {
    // On touch devices, restore normal cursor behavior
    document.body.style.cursor = "auto";
    cursor?.remove();
    follower?.remove();
  } else if (cursor && follower) {
    let mouseX = window.innerWidth / 2;
    let mouseY = window.innerHeight / 2;
    let fx = mouseX;
    let fy = mouseY;

    const moveCursor = (x, y) => {
      cursor.style.left = x + "px";
      cursor.style.top = y + "px";
    };

    const animateFollower = () => {
      // smooth follow
      fx += (mouseX - fx) * 0.12;
      fy += (mouseY - fy) * 0.12;
      follower.style.left = fx + "px";
      follower.style.top = fy + "px";
      requestAnimationFrame(animateFollower);
    };

    document.addEventListener(
      "mousemove",
      (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        moveCursor(mouseX, mouseY);
      },
      { passive: true }
    );

    // Hover effects for interactive elements
    const hoverTargets = [
      "a",
      "button",
      ".menu-card",
      ".gallery-item",
      ".contact-card",
      ".burger",
      ".filter-btn",
      ".btn",
    ].join(",");

    document.addEventListener(
      "mouseover",
      (e) => {
        const t = e.target;
        if (!t) return;
        if (t.closest(hoverTargets)) {
          cursor.style.transform = "translate(-50%, -50%) scale(1.35)";
          cursor.style.borderColor = "var(--orange)";
          follower.style.transform = "translate(-50%, -50%) scale(1.2)";
          follower.style.opacity = "0.45";
        }
      },
      { passive: true }
    );

    document.addEventListener(
      "mouseout",
      (e) => {
        const t = e.target;
        if (!t) return;
        if (t.closest(hoverTargets)) {
          cursor.style.transform = "translate(-50%, -50%) scale(1)";
          cursor.style.borderColor = "var(--brown)";
          follower.style.transform = "translate(-50%, -50%) scale(1)";
          follower.style.opacity = "0.3";
        }
      },
      { passive: true }
    );

    animateFollower();
  }

  // =========================
  // 3) Navbar scrolled class
  // =========================
  const navbar = $("#navbar");
  const setNavbarScrolled = () => {
    if (!navbar) return;
    navbar.classList.toggle("scrolled", window.scrollY > 20);
  };
  window.addEventListener("scroll", setNavbarScrolled, { passive: true });
  setNavbarScrolled();

  // =========================
  // 4) Burger menu (mobile)
  // =========================
  const burger = $("#burger");
  const navMenu = $("#navMenu");

  const closeMenu = () => {
    burger?.classList.remove("active");
    navMenu?.classList.remove("active");
  };

  if (burger && navMenu) {
    burger.addEventListener("click", () => {
      burger.classList.toggle("active");
      navMenu.classList.toggle("active");
    });

    // close when clicking a menu link
    $$("a", navMenu).forEach((a) => {
      a.addEventListener("click", () => closeMenu());
    });

    // close when clicking outside
    document.addEventListener("click", (e) => {
      if (!navMenu.classList.contains("active")) return;
      const target = e.target;
      const clickedInside = navMenu.contains(target) || burger.contains(target);
      if (!clickedInside) closeMenu();
    });

    // close on ESC
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") closeMenu();
    });
  }

  // =========================
  // 5) Reveal on scroll (.reveal -> .active)
  // =========================
  const revealEls = $$(".reveal");

  if (revealEls.length) {
    const revealNow = (el) => el.classList.add("active");

    const io = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach((ent) => {
          if (ent.isIntersecting) {
            revealNow(ent.target);
            obs.unobserve(ent.target);
          }
        });
      },
      { threshold: 0.12 }
    );

    revealEls.forEach((el) => io.observe(el));
  }

  // =========================
  // 6) Menu Filter
  // Uses .menu-category text (Coffee/Food/Beverages)
  // =========================
  const filterBtns = $$(".filter-btn");
  const menuCards = $$(".menu-card");

  const normalize = (s) => String(s || "").trim().toLowerCase();

  const applyFilter = (filter) => {
    const f = normalize(filter);

    menuCards.forEach((card) => {
      const catEl = $(".menu-category", card);
      const cat = normalize(catEl ? catEl.textContent : "");

      const show = f === "all" ? true : cat === f;
      card.style.display = show ? "" : "none";
    });
  };

  if (filterBtns.length && menuCards.length) {
    filterBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        filterBtns.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");
        applyFilter(btn.textContent);
      });
    });

    // default
    applyFilter("All");
  }

  // =========================
  // 7) Gallery Lightbox (simple modal)
  // =========================
  const galleryItems = $$(".gallery-item img");

  const buildLightbox = () => {
    const overlay = document.createElement("div");
    overlay.id = "lightboxOverlay";
    overlay.setAttribute("aria-hidden", "true");

    overlay.innerHTML = `
      <div class="lb-backdrop"></div>
      <div class="lb-content" role="dialog" aria-modal="true">
        <button class="lb-close" aria-label="Close">&times;</button>
        <img class="lb-img" alt="Gallery preview" />
      </div>
    `;

    document.body.appendChild(overlay);

    const img = $(".lb-img", overlay);
    const closeBtn = $(".lb-close", overlay);

    const open = (src) => {
      if (!img) return;
      img.src = src;
      overlay.classList.add("open");
      overlay.setAttribute("aria-hidden", "false");
      document.body.style.overflow = "hidden";
    };

    const close = () => {
      overlay.classList.remove("open");
      overlay.setAttribute("aria-hidden", "true");
      document.body.style.overflow = "";
      if (img) img.src = "";
    };

    overlay.addEventListener("click", (e) => {
      const target = e.target;
      // close if backdrop or close button
      if (
        target.classList.contains("lb-backdrop") ||
        target.classList.contains("lb-close")
      ) {
        close();
      }
    });

    closeBtn?.addEventListener("click", close);

    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && overlay.classList.contains("open")) close();
    });

    return { open, close };
  };

  const ensureLightboxCSS = () => {
    // Inject CSS for lightbox so you don't need to edit style.css
    // (Safe and isolated)
    const id = "lightboxStyles";
    if ($("#" + id)) return;

    const style = document.createElement("style");
    style.id = id;
    style.textContent = `
      #lightboxOverlay{
        position: fixed; inset: 0; z-index: 12000;
        opacity: 0; pointer-events: none;
        transition: opacity .25s ease;
      }
      #lightboxOverlay.open{ opacity: 1; pointer-events: auto; }
      #lightboxOverlay .lb-backdrop{
        position: absolute; inset: 0;
        background: rgba(0,0,0,.75);
        backdrop-filter: blur(6px);
      }
      #lightboxOverlay .lb-content{
        position: absolute; inset: 0;
        display: grid; place-items: center;
        padding: 24px;
      }
      #lightboxOverlay .lb-img{
        max-width: min(1100px, 92vw);
        max-height: 82vh;
        border-radius: 18px;
        box-shadow: 0 30px 80px rgba(0,0,0,.45);
        object-fit: cover;
        background: #111;
      }
      #lightboxOverlay .lb-close{
        position: absolute;
        top: 18px; right: 22px;
        width: 48px; height: 48px;
        border-radius: 14px;
        border: 1px solid rgba(255,255,255,.2);
        background: rgba(255,255,255,.08);
        color: white;
        font-size: 34px;
        line-height: 0;
        display: grid;
        place-items: center;
        cursor: pointer;
        transition: transform .2s ease, background .2s ease;
      }
      #lightboxOverlay .lb-close:hover{
        transform: scale(1.05);
        background: rgba(255,255,255,.14);
      }
    `;
    document.head.appendChild(style);
  };

  if (galleryItems.length) {
    ensureLightboxCSS();
    const lightbox = buildLightbox();

    galleryItems.forEach((img) => {
      img.addEventListener("click", () => {
        const src = img.getAttribute("src");
        if (src) lightbox.open(src);
      });
    });
  }

  // =========================
  // 8) Smooth scroll offset fix (optional)
  // Because nav is fixed; make anchor scroll feel nicer
  // =========================
  const smoothLinks = $$('a[href^="#"]');
  smoothLinks.forEach((a) => {
    a.addEventListener("click", (e) => {
      const href = a.getAttribute("href");
      if (!href || href === "#") return;

      const target = $(href);
      if (!target) return;

      e.preventDefault();

      const navH = navbar ? navbar.offsetHeight : 0;
      const top = target.getBoundingClientRect().top + window.scrollY - navH + 10;

      window.scrollTo({ top, behavior: "smooth" });
    });
  });

  // =========================
  // 9) Menu "Add" button tiny feedback
  // =========================
  $$(".menu-add").forEach((btn) => {
    btn.addEventListener("click", () => {
      btn.animate(
        [{ transform: "scale(1)" }, { transform: "scale(1.25)" }, { transform: "scale(1)" }],
        { duration: 280, easing: "ease-out" }
      );
    });
  });
})();
