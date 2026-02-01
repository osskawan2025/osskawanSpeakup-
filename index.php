<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Website Resmi Pemerintah Desa</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Merriweather:wght@700;900&display=swap" rel="stylesheet">

<style>
:root{
  --primary:#1f4e79;
  --secondary:#163d5c;
  --accent:#d4af37;
  --light:#f8fafc;
}

*{margin:0;padding:0;box-sizing:border-box;font-family:'Roboto',sans-serif;}

body{
  background:var(--light);
  color:#1e293b;
  line-height:1.7;
}

/* ===== HEADER ===== */
header{
  background:#fff;
  position:sticky;
  top:0;
  z-index:1000;

  /* garis bawah baru */
  border-bottom:3px solid transparent;
  border-image:linear-gradient(
    90deg,
    #0f172a,   /* hitam kebiruan */
    #1e3a8a,   /* biru navy */
    #2563eb    /* biru lembut */
  ) 1;
}

nav{
  max-width:1200px;
  margin:auto;
  padding:.65rem 1rem; /* DIPERKECIL */
  display:flex;
  justify-content:space-between;
  align-items:center;
}

.logo img{
  height:74px;   /* sebelumnya 88px */
  width:auto;
  object-fit:contain;
}

.menu{
  display:flex;
  gap:1.5rem;
}
.menu a{
  font-size:.92rem;
  padding:.2rem 0;
}
body.dark header{
  background:#020617;
  border-image:linear-gradient(
    90deg,
    #020617,
    #1e293b,
    #334155
  ) 1;
}


/* ===== HAMBURGER ===== */
.hamburger{
  display:none;
  font-size:1.6rem;
  cursor:pointer;
}

/* ===== HERO ===== */
.hero{
  background:linear-gradient(rgba(26, 26, 27, 0.85),rgba(25, 27, 30, 0.85)),
  padding:4rem 1.2rem;
  text-align:center;
  color:white;
}

.hero h1{
  font-size:2rem;
  font-weight:700;
}

.hero p{
  margin-top:.8rem;
  font-size:.95rem;
}

/* ===== HERO IMAGE ===== */
.hero{
  position:relative;
  height:420px;
  overflow:hidden;
  display:flex;
  align-items:center;
  justify-content:center;
  text-align:center;
  color:white;
}

/* gambar hero */
.hero-bg{
  position:absolute;
  inset:0;
  width:100%;
  height:100%;
  object-fit:cover;
  z-index:1;
}

/* gradasi */
.hero-overlay{
  position:absolute;
  inset:0;
  background:linear-gradient(
    135deg,
    rgba(41, 46, 52, 0.55),
    rgba(0, 0, 0, 0.65)
  );
  z-index:2;
  transition:.4s ease;
}


/* konten */
.hero-content{
  position:relative;
  z-index:3;
  padding:0 1rem;
  max-width:900px;
}

.hero h1{
  font-size:2rem;
  font-weight:700;
}

.hero p{
  margin-top:.8rem;
  font-size:.95rem;
  opacity:.95;
}
.hero{
  position:relative;
  height:440px;
  overflow:hidden;
  display:flex;
  align-items:center;
}

.hero-content{
  position:relative;
  z-index:3;
  max-width:1200px;
  width:100%;
  padding:0 1.2rem;
  margin:auto;
  text-align:left;
}

.hero h1{
  font-family:'Merriweather',serif;
  font-size:2.4rem;
  font-weight:900;
  max-width:720px;
  line-height:1.25;
}

.hero p{
  margin-top:1rem;
  font-size:1rem;
  max-width:600px;
  opacity:.95;
}
body.dark .hero-overlay{
  background:linear-gradient(
    135deg,
    rgba(57, 69, 122, 0.65),
    rgba(18, 45, 108, 0.75)
  );
}
@media(max-width:768px){
  .hero-overlay{
    background:linear-gradient(
      180deg,
      rgba(22, 23, 24, 0.5),
      rgba(6, 7, 7, 0.7)
    );
  }
}


/* ===== SECTION ===== */
section{
  max-width:1200px;
  margin:auto;
  padding:3rem 1.2rem;
}

section h2{
  font-size:1.6rem;
  color:var(--primary);
  border-left:5px solid var(--accent);
  padding-left:.75rem;
  margin-bottom:1.5rem;
}
section h2{
  font-size:1.7rem;
  color:var(--primary);
  border-left:4px solid rgba(0, 0, 0, 0.35);
  padding-left:.9rem;
  margin-bottom:1.5rem;
}
section h2{
  font-size:1.7rem;
  color:var(--primary);
  border-left:4px solid rgba(0, 0, 0, 0.35);
  padding-left:.9rem;
  margin-bottom:1.5rem;
}
section h2{
  font-family:'Merriweather', serif;
  font-size:1.75rem;
  font-weight:900;
  letter-spacing:.3px;
  color:var(--primary);
  border-left:4px solid rgba(0, 0, 0, 0.35);
  padding-left:.9rem;
  margin-bottom:1.6rem;
}
body.dark section h2{
  color:#fde047;
  border-left:4px solid rgba(250,204,21,.45);
}


/* ===== PROFILE ===== */
.profile strong{
  font-family:'Merriweather', serif;
  font-weight:900;
  letter-spacing:.3px;
}


.profile img{
  width:100%;
  border-radius:8px;
}

/* ===== SERVICES ===== */
.services{
  display:grid;
  grid-template-columns:1fr;
  gap:1rem;
}

.card{
  background:white;
  padding:1.5rem;
  border-left:4px solid var(--primary);
}

/* ===== NEWS ===== */
.news{
  display:grid;
  grid-template-columns:1fr;
  gap:1.2rem;
}

.news-card{
  background:white;
  border:1px solid #e2e8f0;
}
.news-card h3{
  font-family:'Merriweather', serif;
  font-size:1.15rem;
  font-weight:700;
  line-height:1.35;
}

.news-card img{
  width:100%;
  height:160px;
  object-fit:cover;
}
body.dark .news-card h3{
  color:#f8fafc;
}


/* ===== FOOTER ===== */
footer{
  background:var(--secondary);
  color:white;
  padding:3rem 1.2rem 1.5rem;
}

.copyright{
  margin-top:2rem;
  padding-top:1rem;
  border-top:1px solid rgba(255, 168, 168, 0.5);
  text-align:center;
  font-size:.8rem;
  letter-spacing:.4px;
}


/* ===== DESKTOP ===== */
@media(min-width:768px){
  .hamburger{display:none}
  .menu{display:flex}
  .profile{grid-template-columns:1fr 1fr}
  .services{grid-template-columns:repeat(3,1fr)}
  .news{grid-template-columns:repeat(2,1fr)}
}

/* ===== MOBILE MENU ===== */
@media(max-width:767px){
  .menu{
    display:none;
    position:absolute;
    top:64px;
    right:0;
    background:white;
    flex-direction:column;
    width:100%;
    padding:1rem;
    border-top:1px solid #e2e8f0;
  }
  .menu.show{display:flex}
  .hamburger{display:block}

  .drive-link{
  display:inline-block;
  margin-top:.75rem;
  padding:.55rem 1rem;
  background:var(--primary);
  color:white;
  text-decoration:none;
  font-size:.9rem;
  border-radius:6px;
}

.drive-link:hover{
  background:#163d5c;
}

/* ===== SCROLL DOKUMENTASI MENYAMPING ===== */
.doc-scroll{
  display:flex;
  gap:1.2rem;
  overflow-x:auto;
  padding-bottom:1rem;
  scroll-snap-type:x mandatory;
  -webkit-overflow-scrolling:touch;
}

.doc-scroll::-webkit-scrollbar{
  height:6px;
}

.doc-scroll::-webkit-scrollbar-thumb{
  background:var(--primary);
  border-radius:10px;
}

.doc-card{
  min-width:280px;
  max-width:300px;
  background:white;
  border-radius:12px;
  overflow:hidden;
  scroll-snap-align:start;
  box-shadow:0 10px 25px rgba(0,0,0,.12);
  transition:transform .35s ease;
}

.doc-card:hover{
  transform:translateY(-6px);
}

.doc-card img{
  width:100%;
  height:170px;
  object-fit:cover;
}

.doc-body{
  padding:1.2rem;
}

.drive-link{
  display:inline-block;
  margin-top:.7rem;
  padding:.55rem 1.1rem;
  background:linear-gradient(135deg,var(--primary),var(--secondary));
  color:white;
  text-decoration:none;
  font-size:.85rem;
  border-radius:20px;
  transition:.3s;
}

.drive-link:hover{
  transform:scale(1.05);
}

/* ===== DARK MODE ===== */
body.dark{
  background:#0f172a;
  color:#e5e7eb;
}

body.dark header,
body.dark .doc-card,
body.dark footer{
  background:#020617;
  color:#e5e7eb;
}

body.dark section h2{
  color:#eab308;
}

body.dark .menu a{
  color:#e5e7eb;
}

/* ===== THEME BUTTON ===== */
.theme-btn{
  background:none;
  border:none;
  font-size:1.3rem;
  cursor:pointer;
}

/* ===== DOC ACTION ===== */
.doc-action{
  display:flex;
  gap:.5rem;
  margin-top:.7rem;
}

.copy-link{
  padding:.5rem .9rem;
  font-size:.8rem;
  border-radius:20px;
  border:1px solid var(--primary);
  background:transparent;
  cursor:pointer;
}

.copy-link:hover{
  background:var(--primary);
  color:white;
}

/* ===== ARTIKEL LINK ===== */
.link-card{
  display:block;
  color:inherit;
  text-decoration:none;
  transition:transform .3s ease, box-shadow .3s ease;
}

.link-card:hover{
  transform:translateY(-6px);
  box-shadow:0 15px 30px rgba(0,0,0,.15);
}

.news-body{
  padding:1.2rem;
}

/* ===== NAVBAR DARK MODE ===== */
body.dark header{
  background:#020617; /* gelap solid */
  border-bottom:2px solid #1e293b;
}

body.dark .menu{
  background:#020617;
}

body.dark .menu a{
  color:#e5e7eb;
}

body.dark .menu a:hover{
  color:#facc15; /* aksen emas */
}

/* hamburger & icon */
body.dark .hamburger,
body.dark .theme-btn{
  color:#e5e7eb;
}

/* ===== ARTIKEL / BERITA DARK MODE ===== */
body.dark .news-card{
  background:#020617;
  border:1px solid #1e293b;
}

body.dark .news-card h3{
  color:#f8fafc;
}

body.dark .news-card p{
  color:#cbd5e1;
}

/* efek hover tetap kelihatan */
body.dark .link-card:hover{
  box-shadow:0 15px 35px rgba(250,204,21,.15);
}
body.dark .news-card img{
  filter:brightness(.85);
}

/* ===== DRIVE BUTTON ===== */
.drive-btn{
  display:flex;
  align-items:center;
  justify-content:center;
  gap:.3rem;
  padding:.45rem .9rem;
  font-size:.8rem;
  border-radius:999px;
  cursor:pointer;
  border:none;
  text-decoration:none;
  transition:all .3s ease;
}

/* buka */
.drive-btn.open{
  background:linear-gradient(135deg,#2563eb,#1e40af);
  color:white;
}

/* salin */
.drive-btn.copy{
  background:transparent;
  color:#2563eb;
  border:1px solid #101010ff;
}

/* hover */
.drive-btn:hover{
  transform:translateY(-2px);
  box-shadow:0 6px 18px rgba(0,0,0,.2);
}

/* dark mode */
body.dark .drive-btn.copy{
  color:#facc15;
  border-color:#facc15;
}

/* ===== SCROLL ANIMATION ===== */
.reveal{
  opacity:0;
  transform:translateY(40px);
  transition:all .8s ease;
}

.reveal.active{
  opacity:1;
  transform:translateY(0);
}

/* ===== TOAST NOTIFICATION ===== */
#toast{
  position:fixed;
  bottom:30px;
  left:50%;
  transform:translateX(-50%) translateY(20px);
  background:#1f2937;
  color:white;
  padding:.7rem 1.3rem;
  border-radius:999px;
  font-size:.85rem;
  opacity:0;
  pointer-events:none;
  transition:all .4s ease;
  z-index:9999;
}

/* muncul */
#toast.show{
  opacity:1;
  transform:translateX(-50%) translateY(0);
}

/* dark mode */
body.dark #toast{
  background:#020617;
  border:1px solid #000000ff;
}

/* ===== BACA SELENGKAPNYA ===== */
.read-more{
  display:inline-block;
  margin-top:.8rem;
  font-size:.85rem;
  font-weight:500;
  color:var(--primary);
  transition:transform .25s ease, color .25s ease;
}

.link-card:hover .read-more{
  transform:translateX(6px);
  color:#1e40af;
}

/* dark mode */
body.dark .read-more{
  color:#facc15;
}

body.dark .link-card:hover .read-more{
  color:#fde047;
}

/* ===== HERO DARK MODE ===== */
body.dark .hero-overlay{
  background:linear-gradient(
    135deg,
    rgba(2,6,23,.85),
    rgba(15,23,42,.9)
  );
}

/* ===== PROFILE SLIDER ===== */
.profile-slider{
  position:relative;
  max-width:420px;
}

.profile-img{
  width:100%;
  border-radius:14px;
  box-shadow:0 12px 28px rgba(0,0,0,.18);
  transition:opacity .4s ease, transform .4s ease;
}

/* tombol panah */
.slide-btn{
  position:absolute;
  top:50%;
  transform:translateY(-50%);
  background:rgba(31, 33, 35, 0.75);
  color:white;
  border:none;
  width:38px;
  height:38px;
  border-radius:50%;
  cursor:pointer;
  font-size:1.6rem;
  display:flex;
  align-items:center;
  justify-content:center;
  transition:.3s ease;
}

.slide-btn:hover{
  background:var(--primary);
  transform:translateY(-50%) scale(1.1);
}

.slide-btn.prev{left:-18px;}
.slide-btn.next{right:-18px;}


}
body.dark .slide-btn{
  background:rgba(88, 75, 22, 0.75);
  color:#020617;
}
@media(max-width:768px){
  .profile-slider{
    max-width:100%;
  }

  .slide-btn.prev{left:8px;}
  .slide-btn.next{right:8px;}
}

/* ===== ARTIKEL CARD ===== */
.news-card{
  position:relative;
  background:white;
  border-radius:18px;
  overflow:hidden;
  border:1px solid rgba(31,78,121,.15);
  transition:all .4s cubic-bezier(.2,.65,.3,1);
}

/* bingkai aksen */
.news-card::before{
  content:"";
  position:absolute;
  inset:0;
  border:2px solid transparent;
  border-radius:18px;
  background:linear-gradient(135deg,var(--primary),var(--accent)) border-box;
  -webkit-mask:
    linear-gradient(#fff 0 0) padding-box,
    linear-gradient(#fff 0 0);
  -webkit-mask-composite:xor;
  mask-composite:exclude;
  opacity:0;
  transition:.4s ease;
}
.news-card:hover{
  transform:translateY(-10px);
  box-shadow:0 20px 40px rgba(0,0,0,.18);
}

.news-card:hover::before{
  opacity:1;
}
.news-card img{
  width:100%;
  height:180px;
  object-fit:cover;
  transition:transform .6s ease, filter .6s ease;
}

.news-card:hover img{
  transform:scale(1.06);
  filter:brightness(1.05);
}
.news-body{
  padding:1.4rem;
}

.news-card p{
  font-size:.9rem;
  line-height:1.6;
  color:#475569;
}
body.dark .news-card{
  background:#020617;
  border:1px solid #1e293b;
}

body.dark .news-card::before{
  background:linear-gradient(135deg,#facc15,#fde047) border-box;
}

body.dark .news-card p{
  color:#cbd5e1;
}
.news-card.reveal{
  transform:translateY(50px) scale(.96);
}

.news-card.reveal.active{
  transform:translateY(0) scale(1);
}
.profile-img{
  width:100%;
  border-radius:14px;
  box-shadow:0 12px 28px rgba(0,0,0,.18);
  transition:opacity .5s ease, transform .5s ease;
}

/* ===== ARTIKEL LIGHT MODE ===== */
:root{
  /* LIGHT */
  --bg:#f8fafc;
  --card:#ffffff;
  --text:#020617;
  --muted:#475569;
  --border:rgba(30,64,175,.18);
  --accent:#1e40af;
}

body.dark{
  /* DARK */
  --bg:#020617;
  --card:#0f172a;
  --text:#e5e7eb;
  --muted:#94a3b8;
  --border:rgba(148,163,184,.25);
  --accent:#60a5fa;
}
body{
  background:var(--bg);
  color:var(--text);
  transition:.4s ease;
}
.news-card{
  background:var(--card);
  border-radius:18px;
  border:1px solid var(--border);
  overflow:hidden;
  transition:all .4s cubic-bezier(.2,.65,.3,1);
}
.news-card:hover{
  transform:translateY(-10px);
  box-shadow:
    0 18px 35px rgba(0,0,0,.15),
    0 6px 15px rgba(0,0,0,.1);
}
.news-card img{
  height:180px;
  width:100%;
  object-fit:cover;
  filter:brightness(1.05) contrast(1.05);
  transition:.6s ease;
}

body.dark .news-card img{
  filter:brightness(.95) contrast(1.05);
}

.news-card:hover img{
  transform:scale(1.06);
}
.news-card h3{
  font-family:'Merriweather', serif;
  font-size:1.18rem;
  font-weight:800;
  color:var(--text);
}

.news-card p{
  color:var(--muted);
  font-size:.92rem;
  line-height:1.65;
}
.read-more{
  color:var(--accent);
  font-size:.85rem;
  font-weight:600;
  position:relative;
}

.read-more::after{
  content:"";
  position:absolute;
  left:0;
  bottom:-4px;
  width:0;
  height:2px;
  background:var(--accent);
  transition:.3s ease;
}

.news-card:hover .read-more::after{
  width:100%;
}
.reveal{
  opacity:0;
  transform:translateY(40px) scale(.96);
  transition:.6s ease;
}

.reveal.active{
  opacity:1;
  transform:translateY(0) scale(1);
}
/* ===== FOOTER UTAMA ===== */
.footer-wrap{
  max-width:980px;          /* lebih rapi, tidak lebar */
  margin:auto;
  padding:1.6rem 1.2rem 1.2rem;
}

.footer-grid{
  display:grid;
  grid-template-columns:1.6fr 1fr;
  gap:2.2rem;
}

/* kiri */
.footer-left{
  text-align:left;
}

/* kanan */
.footer-right{
  text-align:left;
  display:flex;
  flex-direction:column;
  gap:.4rem;
}

/* judul */
.footer-title{
  font-size:.9rem;
  font-weight:700;
  letter-spacing:.4px;
  margin-bottom:.4rem;
}

/* teks deskripsi */
.footer-text{
  font-size:.82rem;
  line-height:1.6;
  margin-bottom:.6rem;
  opacity:.9;
}

/* link */
.footer-link,
.footer-right a{
  font-size:.82rem;
  text-decoration:none;
  transition:.25s ease;
}

/* copyright */
.footer-info{
  text-align:center;
  font-size:.75rem;
  padding:.7rem 1rem;
  opacity:.75;
}
body:not(.dark) .footer{
  background:#f5f5f4;
  border-top:3px solid #d6b25e;
}

body:not(.dark) .footer-title{
  color:#292524;
}

body:not(.dark) .footer-text{
  color:#57534e;
}

body:not(.dark) .footer-link,
body:not(.dark) .footer-right a{
  color:#44403c;
}

body:not(.dark) .footer-link:hover,
body:not(.dark) .footer-right a:hover{
  color:#92400e;
  text-decoration:underline;
}
body.dark .footer{
  background:#020617;
  border-top:2px solid #1e293b;
}

body.dark .footer-title{
  color:#e5e7eb;
}

body.dark .footer-text,
body.dark .footer-link,
body.dark .footer-right a,
body.dark .footer-info{
  color:#9ca3af;
}

body.dark .footer-link:hover,
body.dark .footer-right a:hover{
  color:#facc15;
}
@media(max-width:768px){
  .footer-grid{
    grid-template-columns:1fr;
    gap:1.4rem;
  }
}
/* ===== FOOTER MODE TERANG (NAVY GELAP) ===== */
body:not(.dark) .footer{
  background:linear-gradient(180deg,#0f172a,#020617);
  border-top:3px solid #d6b25e;
}
body:not(.dark) .footer-title{
  color:#f8fafc;
}

body:not(.dark) .footer-text{
  color:#cbd5f5;
}

body:not(.dark) .footer-link,
body:not(.dark) .footer-right a{
  color:#e5e7eb;
}

body:not(.dark) .footer-info{
  color:#9ca3af;
}
body:not(.dark) .footer-link:hover,
body:not(.dark) .footer-right a:hover{
  color:#facc15;
  text-decoration:underline;
}
.footer{
  background:#0f172a; /* navy ke hitam */
  color:#e5e7eb;
  padding:3rem 1.5rem 1.5rem;
  text-align:center;
}

/* ===== ATAS ===== */
.footer-top{
  max-width:680px;
  margin:0 auto 2rem;
}

.footer-brand{
  font-size:1.1rem;
  font-weight:800;
  letter-spacing:.6px;
  color:#f8fafc;
}

.footer-tagline{
  font-size:.9rem;
  color:#cbd5f5;
  margin-top:.4rem;
  line-height:1.6;
}

/* ===== MENU TENGAH ===== */
.footer-menu{
  display:flex;
  justify-content:center;
  gap:1.8rem;
  margin-bottom:2rem;
  flex-wrap:wrap;
}

.footer-menu a{
  font-size:.85rem;
  color:#e5e7eb;
  text-decoration:none;
  position:relative;
}

.footer-menu a::after{
  content:"";
  position:absolute;
  left:0;
  bottom:-6px;
  width:0;
  height:2px;
  background:#60a5fa;
  transition:.3s;
}

.footer-menu a:hover::after{
  width:100%;
}

/* ===== BAWAH ===== */
.footer-bottom{
  display:flex;
  justify-content:center;
  gap:1.2rem;
  flex-wrap:wrap;
  font-size:.8rem;
  color:#cbd5f5;
}

.footer-bottom a{
  color:#cbd5f5;
  text-decoration:none;
}

.footer-bottom a:hover{
  color:#93c5fd;
}

/* ===== COPYRIGHT ===== */
.footer-copy{
  margin-top:1.6rem;
  font-size:.75rem;
  color:#94a3b8;
}
/* === SCROLL ANIMATION === */
.scroll-item{
  opacity:0;
  transform:translateY(40px);
  transition:all .8s ease;
}

.scroll-item.show{
  opacity:1;
  transform:translateY(0);
}

/* delay bertahap */
.footer-top{ transition-delay:.1s }
.footer-menu{ transition-delay:.25s }
.footer-bottom{ transition-delay:.4s }
.footer-copy{ transition-delay:.55s }

/* ===== DOC CARD - BINGKAI & EFEK ===== */
.doc-card{
  min-width:280px;
  max-width:300px;
  background:white;
  border-radius:12px;
  overflow:hidden;
  scroll-snap-align:start;
  box-shadow:0 8px 20px rgba(0,0,0,.12);
  transition:all .35s ease;
  border:2px solid transparent;
}

/* hover / fokus */
.doc-card:hover{
  transform:translateY(-6px);
  box-shadow:0 12px 30px rgba(0,0,0,.18);
  border-color:#60a5fa; /* aksen biru */
}

/* MODE GELAP */
body.dark .doc-card{
  background:#020617;
  color:#e5e7eb;
  border:2px solid #000000ff;
  box-shadow:0 8px 20px rgba(0,0,0,.4);
}

body.dark .doc-card:hover{
  border-color:#facc15; /* aksen emas untuk mode gelap */
  box-shadow:0 12px 30px rgba(250,204,21,.2);
}

/* ===== DRIVE BUTTON (BUKA & SALIN) ===== */
.drive-btn{
  display:flex;
  align-items:center;
  justify-content:center;
  gap:.3rem;
  padding:.45rem .9rem;
  font-size:.8rem;
  border-radius:999px;
  cursor:pointer;
  border:none;
  text-decoration:none;
  transition:all .3s ease;
}

/* mode terang */
.drive-btn.open{
  background:linear-gradient(135deg,#2563eb,#1e40af);
  color:white;
  border:2px solid transparent;
}
.drive-btn.open:hover{
  transform:translateY(-2px) scale(1.05);
  box-shadow:0 6px 18px rgba(0, 0, 0, 0.35);
  border-color:#1e40af;
}

/* mode gelap */
body.dark .drive-btn.open{
  background:linear-gradient(135deg,#facc15,#d97706);
  color:#020617;
  border:2px solid transparent;
}
body.dark .drive-btn.open:hover{
  transform:translateY(-2px) scale(1.05);
  box-shadow:0 6px 18px rgba(42, 146, 27, 0.3);
  border-color:#f59e0b;
}

/* tombol salin */
.drive-btn.copy{
  background:transparent;
  color:#2563eb;
  border:1px solid #101113ff;
}

.drive-btn.copy:hover{
  background:#2563eb;
  color:white;
}

body.dark .drive-btn.copy{
  color:#facc15;
  border-color:#facc15;
}

body.dark .drive-btn.copy:hover{
  background:#facc15;
  color:#020617;
}

</style>
</head>

<body>

<header>
<nav>
  <div class="logo">
  <img src="logo1.png" alt="">
</div>

  <div style="display:flex;gap:1rem;align-items:center">
  
  <button class="theme-btn" onclick="toggleTheme()">
  <span id="themeIcon">🌙</span>
</button>
  <div class="hamburger" onclick="toggleMenu()">☰</div>
  <div class="menu" id="menu">
  <a href="#profil">Profil</a>
  <a href="#dokumentasi">Dokumentasi</a>
  <a href="#artikel">Artikel</a>
</div>

</nav>
</header>

<section class="hero">
  <div class="hero-overlay"></div>

  <!-- GANTI FOTO DI SINI -->
  <img src="foto.jpeg" alt="Hero Desa" class="hero-bg">

  <div class="hero-content">
    <h1>WEBSITE DOKUMENTASI DAN ARSIP KEGIATAN</h1>
    <p><h4> - Pusat arsip digital kegiatan OSIS SKAWAN yang terdokumentasi secara sistematis.-</h4></p>
     
  </div>
</section>

<section id="profil" class="reveal">
  <h2>Profil OSIS</h2>

  <div class="profile">
    <p>
      <strong>OSIS SKAWAN</strong> Merupakan organisasi resmi kesiswaan yang berperan sebagai wadah pengembangan potensi, kepemimpinan, dan tanggung jawab peserta didik. OSIS SKAWAN berkomitmen mendukung terciptanya lingkungan sekolah yang berkarakter, disiplin, dan berprestasi melalui kegiatan yang terarah dan berkelanjutan.
    </p>
&ensp; &emsp;
    <!-- SLIDER FOTO -->
    <div class="profile-slider">
      <button class="slide-btn prev" onclick="slideProfil(-1)">‹</button>

      <img src="foto1.jpg" class="profile-img" id="profilImage">

      <button class="slide-btn next" onclick="slideProfil(1)">›</button>
    </div>
  </div>
</section>



<section id="dokumentasi" class="reveal">
  <h2>Link Dokumentasi Kegiatan </h2>
  <p><strong>DOKUMENTASI</strong> Halaman ini memuat dokumentasi resmi kegiatan OSIS SKAWAN sebagai bentuk transparansi dan pertanggungjawaban pelaksanaan program kerja. Seluruh dokumentasi disajikan dalam bentuk arsip digital yang dapat diakses melalui tautan yang tersedia. </p>
&ensp; &emsp;
  <div class="doc-scroll">
     <div id="toast">📋 Link berhasil disalin</div>

    <!-- CARD 1 -->
    <div class="doc-card">
      <img src="foto18.jpeg">
      <div class="doc-body">
        <h3>Pengajian Isra Mi'Raj 2026</h3>
        <p>Dokumentasi kegiatan pengajian isra mi'raj 2026.</p>

        <div class="doc-action">
          <a href="https://drive.google.com/drive/folders/1NqMFRtQp4uc1R_jtitKuUeW_Cxc2fFMG?usp=sharingisra miraj"
             target="_blank"
             class="drive-btn open">🔗 Buka</a>

          <button class="drive-btn copy"
            onclick="copyLink('https://drive.google.com/drive/folders/1NqMFRtQp4uc1R_jtitKuUeW_Cxc2fFMG?usp=sharingisra miraj')">
            📋 Salin
          </button>
        </div>
      </div>
    </div>

 <!-- CARD 2 -->
    <div class="doc-card">
      <img src="foto17.jpeg">
      <div class="doc-body">
        <h3>Classmeting "RAKSI" 2026</h3>
        <p>Dokumentasi kegiatan classmeting "RAKSI" merajut aksi,mengukir prestasi -D1-.</p>

        <div class="doc-action">
          <a href="https://drive.google.com/drive/folders/1ePleowhZb-DULZL_R4ykWWBeYJN01900?usp=drive_link"
             target="_blank"
             class="drive-btn open">🔗 Buka</a>

          <button class="drive-btn copy"
            onclick="copyLink('https://drive.google.com/drive/folders/1ePleowhZb-DULZL_R4ykWWBeYJN01900?usp=drive_link')">
            📋 Salin
          </button>
        </div>
      </div>
    </div>

     <!-- CARD 3 -->
    <div class="doc-card">
      <img src="foto15.jpeg">
      <div class="doc-body">
        <h3>Classmeting "RAKSI" 2026</h3>
        <p>Dokumentasi kegiatan classmeting "RAKSI" merajut aksi,mengukir prestasi -D2-.</p>

        <div class="doc-action">
          <a href="https://drive.google.com/drive/folders/1hn-hvmXP00arl_OkNcFUc24tbSJnUhtc?usp=sharing"
             target="_blank"
             class="drive-btn open">🔗 Buka</a>

          <button class="drive-btn copy"
            onclick="copyLink('https://drive.google.com/drive/folders/1hn-hvmXP00arl_OkNcFUc24tbSJnUhtc?usp=sharing')">
            📋 Salin
          </button>
        </div>
      </div>
    </div>

      <!-- CARD 4 -->
    <div class="doc-card">
      <img src="foto19.jpeg">
      <div class="doc-body">
        <h3>Bulan Bahasa "SAJITA" 2025</h3>
        <p>Dokumentasi kegiatan bulan bahasa "SAJITA" satu jiwa 3 bahasa.</p>

        <div class="doc-action">
          <a href="https://drive.google.com/drive/folders/1U-Agr5HyQwhLKC9YVzvCBr9XrTLxzQsL?usp=drive_link"
             target="_blank"
             class="drive-btn open">🔗 Buka</a>

          <button class="drive-btn copy"
            onclick="copyLink('https://drive.google.com/drive/folders/1U-Agr5HyQwhLKC9YVzvCBr9XrTLxzQsL?usp=drive_link')">
            📋 Salin
          </button>
        </div>
      </div>
    </div>

  <!-- CARD 8 -->
    <div class="doc-card">
      <img src="foto20.jpeg">
      <div class="doc-body">
        <h3>Pilketos 2025</h3>
        <p>Dokumentasi kegiatan Pilketos Osis Skawan 2025.</p>

        <div class="doc-action">
          <a href="https://drive.google.com/drive/mobile/folders/1i6iLm8zTnTxHpc6nsTQJhmGOZlmw9J7W?usp=sharing&fbclid=PAT01DUANqv_hleHRuA2FlbQIxMAABp6hW4h0lvcweSrD1H2U_MR__dwIc4sZgnJ6RdMmYJ47WgUTeV2jK4zlkBJAK_aem_V--5JVpcHYhZv8HnmrJ7oQ"
             target="_blank"
             class="drive-btn open">🔗 Buka</a>

          <button class="drive-btn copy"
            onclick="copyLink('https://drive.google.com/drive/mobile/folders/1i6iLm8zTnTxHpc6nsTQJhmGOZlmw9J7W?usp=sharing&fbclid=PAT01DUANqv_hleHRuA2FlbQIxMAABp6hW4h0lvcweSrD1H2U_MR__dwIc4sZgnJ6RdMmYJ47WgUTeV2jK4zlkBJAK_aem_V--5JVpcHYhZv8HnmrJ7oQ')">
            📋 Salin
          </button>
        </div>
      </div>
    </div>

  <!-- CARD 7 -->
    <div class="doc-card">
      <img src="foto21.jpeg">
      <div class="doc-body">
        <h3>"LDKS" Osis 2025</h3>
        <p>Dokumentasi kegiatan LDKS Osis Skawan 2025 -D2-.</p>

        <div class="doc-action">
          <a href="https://drive.google.com/drive/mobile/folders/1v11laR37ccot08SATd35jv3OzZTLCZlq?usp=drive_link&fbclid=PAT01DUANqu5lleHRuA2FlbQIxMAABp-dYxfkzhaaehaBqL8oF4j-TYlct3En2GVSDyjdMY0xmZDUweIk0MlLuma9j_aem_1wHFk2NyvGpq1Fanu8jxUg"
             target="_blank"
             class="drive-btn open">🔗 Buka</a>

          <button class="drive-btn copy"
            onclick="copyLink('https://drive.google.com/drive/mobile/folders/1v11laR37ccot08SATd35jv3OzZTLCZlq?usp=drive_link&fbclid=PAT01DUANqu5lleHRuA2FlbQIxMAABp-dYxfkzhaaehaBqL8oF4j-TYlct3En2GVSDyjdMY0xmZDUweIk0MlLuma9j_aem_1wHFk2NyvGpq1Fanu8jxUg')">
            📋 Salin
          </button>
        </div>
      </div>
    </div>

    
    <!-- CARD 6 -->
    <div class="doc-card">
      <img src="foto22.jpeg">
      <div class="doc-body">
        <h3>"LDKS" Osis 2025</h3>
        <p>Dokumentasi kegiatan LDKS Osis Skawan 2025 -D1-.</p>

        <div class="doc-action">
          <a href="https://drive.google.com/drive/mobile/folders/16cUNlbWhHfO5httD_FG0mYGE8PU3ipr7?usp=sharing&fbclid=PAT01DUANquyNleHRuA2FlbQIxMAABp6hW4h0lvcweSrD1H2U_MR__dwIc4sZgnJ6RdMmYJ47WgUTeV2jK4zlkBJAK_aem_V--5JVpcHYhZv8HnmrJ7oQ"
             target="_blank"
             class="drive-btn open">🔗 Buka</a>

          <button class="drive-btn copy"
            onclick="copyLink('https://drive.google.com/drive/mobile/folders/16cUNlbWhHfO5httD_FG0mYGE8PU3ipr7?usp=sharing&fbclid=PAT01DUANquyNleHRuA2FlbQIxMAABp6hW4h0lvcweSrD1H2U_MR__dwIc4sZgnJ6RdMmYJ47WgUTeV2jK4zlkBJAK_aem_V--5JVpcHYhZv8HnmrJ7oQ')">
            📋 Salin
          </button>
        </div>
      </div>
    </div>

    <!-- CARD 9 -->
    <div class="doc-card">
      <img src="foto23.jpeg">
      <div class="doc-body">
        <h3> Semarak Merah Putih 2025</h3>
        <p>Dokumentasi kegiatan lomba 17 Agustus 2025.</p>

        <div class="doc-action">
          <a href="https://drive.google.com/drive/folders/1VnBV0MBdoYKW8HZPixeAPw_DOjqNfe9F?usp=sharing"
             target="_blank"
             class="drive-btn open">🔗 Buka</a>

          <button class="drive-btn copy"
            onclick="copyLink('https://drive.google.com/drive/folders/1VnBV0MBdoYKW8HZPixeAPw_DOjqNfe9F?usp=sharing')">
            📋 Salin
          </button>
        </div>
      </div>
    </div>


  </div>
</section>

<section id="artikel" class="reveal">
  <h2>Artikel</h2>
  <p><strong>ARTIKEL</strong> Halaman artikel menyajikan informasi dan laporan kegiatan yang dilaksanakan oleh OSIS SKAWAN. Setiap artikel yang ada memuat rangkaian pelaksanaan kegiatan sebagai bentuk dokumentasi dan arsip.</p>
&ensp; &emsp;
  <div class="news">

<a href="https://jurnaliskawan.blogspot.com/2025/11/osis-smkn-1-wanayasa-wujudkan-empati.html"
   target="_blank"
   class="news-card link-card reveal">
  <img src="foto13.jpeg">
  <div class="news-body">
    <h3>-- Bantuan Dari Osskawan Untuk Situkung --</h3>
     &ensp; &emsp;
        <p>OSIS SMKN 1 Wanayasa Wujudkan Empati lewat Bantuan untuk Warga Situkung, Pandanarum</p>
    <span class="read-more">Baca Selengkapnya →</span>
  </div>
</a>

    <a href="https://smkn1wanayasa.sch.id/read/74/kepedulian-osis-smkn-1-wanayasa-terhadap-bencana-tanah-longsor-di-pandanarum"
       target="_blank"
       class="news-card link-card reveal">
      <img src="foto14.jpeg">
      <div class="news-body">
        <h3>-- Kepedulian OSIS SKAWAN Terhadap Bencana Longsor --</h3>
        &ensp; &emsp;
        <p>Kepedulian terhadap sesama kembali ditunjukkan oleh Organisasi Siswa Intra Sekolah (OSIS) SMKN 1 Wanayasa melalui aksi bantuan sosial untuk korban bencana tanah longsor yang terjadi di Dusun Situkung, Kecamatan Pandanarum.</p>

        <span class="read-more">
          Baca Selengkapnya →
        </span>
      </div>
    </a>

  </div>
</section>


<footer class="footer scroll-section">

  <div class="footer-top scroll-item">
    <h3 class="footer-brand">
      Website Dokumentasi Dan Arsip Osskawan
    </h3>
    <p class="footer-tagline">
      Sumber informasi resmi, transparan, dan terpercaya
      dalam pelayanan serta dokumentasi kegiatann dan arsip kegiatan.
    </p>
  </div>

  <nav class="footer-menu scroll-item">
    <a href="#profil">Profil</a>
    <a href="#dokumentasi">Dokumentasi</a>
    <a href="#artikel">Artikel</a>
  </nav>

  <div class="footer-bottom scroll-item">
    <a href="https://www.google.com/maps/place/SMK+Negeri+1+Wanayasa/@-7.2472416,109.7512793,16z/data=!4m6!3m5!1s0x2e7005fc462b16eb:0xce2cbbbb0b5d9fff!8m2!3d-7.2470713!4d109.7515337!16s%2Fg%2F11cjh_b2qh?entry=ttu&g_ep=EgoyMDI2MDEyOC4wIKXMDSoASAFQAw%3D%3D" target="_blank">
      📍 Jl. Raya Wanayasa-Karangkobar, Sindanayan, Wanayasa, Kec. Wanayasa, Kab. Banjarnegara, Jawa Tengah
    </a>
    <span>📩 osisskawan8@gmail.com</span>
    <span>🎶 Tt : osisskawan0</span>
    <span>📷 Ig : osisskawan </span>
  </div>

  <div class="footer-copy scroll-item">
    © 2026 Osis Skawan - Sekbid TIK 
  </div>

</footer>




<script>
function toggleMenu(){
  document.getElementById('menu').classList.toggle('show');
}
</script>

<script>
const icon = document.getElementById('themeIcon');

function toggleTheme(){
  document.body.classList.toggle('dark');
  const isDark = document.body.classList.contains('dark');
  icon.textContent = isDark ? '☀️' : '🌙';
  localStorage.setItem('theme', isDark ? 'dark' : 'light');
}

if(localStorage.getItem('theme') === 'dark'){
  document.body.classList.add('dark');
  icon.textContent = '☀️';
}
</script>

<script>
const reveals = document.querySelectorAll('.reveal');

function revealOnScroll(){
  const windowHeight = window.innerHeight;
  reveals.forEach(el=>{
    const elTop = el.getBoundingClientRect().top;
    if(elTop < windowHeight - 80){
      el.classList.add('active');
    }
  });
}


window.addEventListener('scroll', revealOnScroll);
revealOnScroll();
</script>

<script>
const profilFotos = [
  'foto.jpeg',
  'foto10.jpeg',
  'foto3.jpeg',
  'foto4.jpeg',
  'foto5.jpeg',
  'foto6.jpeg',
  'foto7.jpeg',
  'foto8.jpeg',
  'foto9.jpeg',
  'foto12.jpeg',
];

let profilIndex = 0;
let autoSlide;
const profilImage = document.getElementById('profilImage');

/* ganti foto */
function showProfil(index){
  profilImage.style.opacity = 0;

  setTimeout(()=>{
    profilImage.src = profilFotos[index];
    profilImage.style.opacity = 1;
  },250);
}

/* klik panah */
function slideProfil(step){
  stopAutoSlide(); // hentikan sementara
  profilIndex = (profilIndex + step + profilFotos.length) % profilFotos.length;
  showProfil(profilIndex);
  startAutoSlide(); // jalan lagi
}

/* auto slide */
function startAutoSlide(){
  autoSlide = setInterval(()=>{
    profilIndex = (profilIndex + 1) % profilFotos.length;
    showProfil(profilIndex);
  }, 3500); // 3,5 detik
}

function stopAutoSlide(){
  clearInterval(autoSlide);
}

/* mulai saat halaman dibuka */
startAutoSlide();
</script>
<script>
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if(entry.isIntersecting){
      entry.target.classList.add("show");
    }
  });
},{ threshold:0.2 });

document.querySelectorAll(".scroll-item")
  .forEach(el => observer.observe(el));
</script>

</body>
</html>