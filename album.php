<?php
$title = "Album – AVK Studio | Browse Wedding, Event & Birthday Photography";
$description = "Explore albums from weddings, birthdays, and events captured by AVK Studio in Malaysia. View highlights, full galleries, and share your favorite memories.";
$keywords = "AVK Studio album, wedding photography Malaysia, birthday photos, event highlights";
$ogImage = "https://www.avkstudio.com/img/album-og.jpg";
include 'header.php';
?>


<!-- ===== DYNAMIC Album Hero (with skeletons) ===== -->
<section class="about-section">
	<div class="container-fluid">
	  <div class="row">
		<div class="col-lg-6 p-0">
		  <!-- cover image -->
		  <div class="about-bg skeleton">
			<img id="album-cover" 
				 src="img/placeholder.jpg" 
				 alt="Cover" 
				 style="width:100%; height:100%; object-fit:cover; border-radius:6px;"
				 class="hidden">
		  </div>
		</div>
		<div class="col-lg-6 p-0">
		  <div class="about-text">
			<h2 id="album-title" class="skeleton-text">Loading title…</h2>
			<p id="album-sub" class="album-sub skeleton-text">Loading date & venue…</p>
  
			<!-- Buttons Row -->
			<div class="d-flex mt-3">
				<!-- Album Button -->
				<a id="album-btn" href="#" 
				   class="site-btn skeleton-btn disabled" 
				   target="_blank" 
				   rel="noopener">Loading...</a>
			  
				<!-- Share Button -->
				<button id="share-btn" class="site-btn skeleton-btn disabled ms-2" disabled style="margin-left:16px;">
				  <i class="fa fa-share-alt"></i> Share
				</button>
			  </div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  
  <!-- ===== Highlights (with skeletons) ===== -->
  <div class="highlights-section">
	<div class="container-fluid">
	  <h4 class="section-title text-center"style="margin-bottom: 10px;margin-top: 30px;">Highlights</h4>
	  <div class="container">
		<div class="row" id="highlight-row">
		  <!-- skeleton placeholders -->
		  <div class="col-lg-3 col-sm-6">
			<div class="highlight-item skeleton" style="height:200px; border-radius:6px;"></div>
		  </div>
		  <div class="col-lg-3 col-sm-6">
			<div class="highlight-item skeleton" style="height:200px; border-radius:6px;"></div>
		  </div>
		  <div class="col-lg-3 col-sm-6">
			<div class="highlight-item skeleton" style="height:200px; border-radius:6px;"></div>
		  </div>
		  <div class="col-lg-3 col-sm-6">
			<div class="highlight-item skeleton" style="height:200px; border-radius:6px;"></div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  

  <!-- Giscus Comments Section (unchanged) -->
  <div id="giscus-comments" style="padding: 30px;">
    <script src="https://giscus.app/client.js"
        data-repo="AVKSTUDIO/avkstudio"
        data-repo-id="R_kgDOPmVIIw"
        data-category-id="DIC_kwDOPmVII84CvB42"
        data-mapping="pathname"
        data-strict="0"
        data-reactions-enabled="1"
        data-emit-metadata="0"
        data-input-position="bottom"
        data-theme="light"
        data-lang="en"
        crossorigin="anonymous"
        async>
    </script>
  </div>

  <section class="services-section py-5">
  <div class="container text-center">
    <h2 class="section-title mb-4">We Offer the Best Services</h2>
    <p class="mb-5">At AVK Studio, we make your memories timeless with professional photography, video, and albums.</p>

    <div class="row">
      <!-- Studio Photography -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="service-card">
          <div class="icon-box">
            <i class="fa fa-camera"></i>
          </div>
          <h5>Studio Photography</h5>
          <p>Capture your best moments in a professional studio with creative lighting and stylish backdrops.</p>
        </div>
      </div>

      <!-- Wedding & Event Editing -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="service-card">
          <div class="icon-box">
            <i class="fa fa-film"></i>
          </div>
          <h5>Wedding & Event Editing</h5>
          <p>Relive your big day with cinematic edits that bring out every emotion and detail.</p>
        </div>
      </div>

      <!-- Albums & Prints -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="service-card">
          <div class="icon-box">
            <i class="fa fa-book"></i>
          </div>
          <h5>Albums & Prints</h5>
          <p>Turn your memories into timeless albums, framed prints, or custom keepsakes.</p>
        </div>
      </div>

      <!-- Video Recording & Highlights -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="service-card">
          <div class="icon-box">
            <i class="fa fa-video-camera"></i>
          </div>
          <h5>Video Recording & Highlights</h5>
          <p>High-quality video coverage with professional highlight reels for weddings and events.</p>
        </div>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="text-center mt-5">
      <p class="quote-line">✨ Love what you see? Let’s create something together.</p>
      <a href="pricing" target="_blank" class="site-btn orange-btn">
        See Packages
      </a>
    </div>
  </div>
</section>

<!-- ===== CSS Styling ===== -->
<style>
  .service-card {
    background: #fff;
    padding: 30px 20px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    transition: 0.3s;
    height: 100%;
  }
  .service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.1);
  }
  .service-card h5 {
    margin-top: 20px;
    font-size: 18px;
    font-weight: bold;
  }
  .service-card p {
    font-size: 14px;
    color: #555;
    margin-top: 10px;
  }
  .icon-box {
    background: #fff5e6; /* soft beige/peach */
    display: inline-block;
    padding: 20px;
    border-radius: 12px;
    font-size: 28px;
    color: #ff6600;
  }

  /* CTA Styling */
  .quote-line {
    font-size: 16px;
    margin-bottom: 15px;
    font-style: italic;
  }
  .orange-btn {
    background-color: #ff6600;
    color: #fff !important;
    padding: 12px 30px;
    border-radius: 30px;
    font-weight: 500;
    text-decoration: none;
    transition: 0.3s;
    display: inline-block;
  }
  .orange-btn:hover {
    background-color: #e65c00;
    text-decoration: none;
  }
</style>

  

  <?php include 'footer.php'; ?>

  <!-- ====== Albums from Google Sheets (Apps Script) ====== -->
  <script>
	const APPS_SCRIPT_URL = 'https://script.google.com/macros/s/AKfycbweVvMAr9Jp__GgLFFYmT2AgnfnQraYwB7mD1erHlBxvyzNiNINT1bn3fSad5GrLTdqGQ/exec';
	const DEFAULT_SLUG = 'default-album';
  
	function slugFromURL() {
	  const u = new URL(window.location.href);
	  return u.searchParams.get('album') || DEFAULT_SLUG;
	}
  
	async function fetchAlbum(slug) {
	  const url = APPS_SCRIPT_URL + '?slug=' + encodeURIComponent(slug);
	  const res = await fetch(url);
	  if (!res.ok) throw new Error('Failed to fetch album data');
	  const j = await res.json();
	  if (!j.ok) throw new Error('Apps Script returned error');
	  return j.album;
	}
  
	function clearHighlights() {
	  document.getElementById('highlight-row').innerHTML = '';
	}
  
	function renderHighlights(highlightsCsv, gallerylink, title) {
	  const container = document.getElementById('highlight-row');
	  clearHighlights();
  
	  const urls = (highlightsCsv || '').split(',').map(s => s.trim()).filter(Boolean);
  
	  if (urls.length === 0) {
		const col = document.createElement('div');
		col.className = 'col-12 text-center';
		col.innerHTML = '<p style="opacity:.7">No highlights provided.</p>';
		container.appendChild(col);
		return;
	  }
  
	  urls.slice(0, 4).forEach(u => {
		const col = document.createElement('div');
		col.className = 'col-lg-3 col-sm-6';
  
		const inner = document.createElement('div');
		inner.className = 'highlight-item img-loading skeleton';
  
		const img = document.createElement('img');
		img.src = u;
		img.alt = title + ' highlight';
		img.className = 'img-fluid rounded-img hidden';
		img.style.cursor = 'pointer';
  
		img.onload = () => {
		  img.classList.remove('hidden');
		  inner.classList.remove('skeleton', 'img-loading');
		};
  
		img.onerror = () => {
		  img.src = 'img/fallback.jpg';
		  img.classList.remove('hidden');
		  inner.classList.remove('skeleton', 'img-loading');
		};
  
		img.addEventListener('click', () => window.open(gallerylink || '#', '_blank'));
  
		inner.appendChild(img);
		col.appendChild(inner);
		container.appendChild(col);
	  });
	}
  
	function renderAlbum(album) {
	  if (!album) {
		document.getElementById('album-title').textContent = 'Album not found';
		document.getElementById('album-btn').style.display = 'none';
		return;
	  }
  
	  // Cover
	  const cover = document.getElementById('album-cover');
	  cover.src = album.cover || 'img/fallback.jpg';
	  cover.alt = album.title || 'Album cover';
	  cover.classList.remove('hidden');
	  cover.parentElement.classList.remove('skeleton');
  
	  // Title
	  const title = document.getElementById('album-title');
	  title.textContent = album.title || '';
	  title.classList.remove('skeleton-text');
  
	  // Subtitle (date & venue)
	  const sub = document.getElementById('album-sub');
	  const dateVenue = [album.date, album.venue].filter(Boolean).join(' • ');
	  sub.textContent = dateVenue;
	  sub.classList.remove('skeleton-text');
  
	  // Album Button
	  const btn = document.getElementById('album-btn');
	  btn.href = album.gallerylink || '#';
	  btn.textContent = "Open Album";
	  btn.classList.remove('skeleton-btn', 'disabled');


  // Share button
  const shareBtn = document.getElementById("share-btn");
  shareBtn.classList.remove("skeleton-btn", "disabled");
  shareBtn.classList.add("btn-black");
  shareBtn.removeAttribute("disabled");

  // Share button click handler
  shareBtn.addEventListener("click", async () => {
    try {
      await navigator.clipboard.writeText(window.location.href);
      shareBtn.innerHTML = `<i class="fa fa-check"></i> Copied`;
      shareBtn.classList.remove("btn-black");
      shareBtn.classList.add("btn-success"); // green
      setTimeout(() => {
        shareBtn.innerHTML = `<i class="fa fa-share-alt"></i> Share`;
        shareBtn.classList.remove("btn-success");
        shareBtn.classList.add("btn-black");
      }, 2000);
    } catch (err) {
      console.error("Failed to copy:", err);
    }
  });

  
	  // Highlights
	  renderHighlights(album.highlights, album.gallerylink, album.title);
	}
  
	(async function init() {
	  try {
		const slug = slugFromURL();
		const album = await fetchAlbum(slug);
		renderAlbum(album);
	  } catch (err) {
		console.error(err);
		document.getElementById('album-title').textContent = 'Album not found';
	  }
	})();

	
  </script>

  <script src="js/main.js"></script>

