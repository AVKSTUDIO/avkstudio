<?php
$title = "Pricing – AVK Studio | Wedding, Birthday & Event Photography Packages";
$description = "Explore AVK Studio’s photography and videography packages in Malaysia. Affordable options for weddings, birthdays, events, and custom albums.";
$keywords = "AVK Studio pricing, wedding photography Malaysia, event photography packages, birthday videography";
$ogImage = "https://www.avkstudio.com/img/pricing-og.jpg"; // Replace with your OG image later
include 'header.php';
?>

<style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      line-height: 1.6;
      color: #333;
    }

    /* Hero Section */
    .hero-section {
      position: relative;
      background: linear-gradient(135deg, #9333ea 0%, #ec4899 50%, #fb923c 100%);
      color: white;
      padding: 80px 20px 100px;
      text-align: center;
      overflow: hidden;
    }

    .hero-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.1);
    }

    .hero-content {
      position: relative;
      max-width: 1200px;
      margin: 0 auto;
      z-index: 1;
    }

    .hero-subtitle {
      font-size: 0.875rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-bottom: 1rem;
      color: rgba(255, 255, 255, 0.9);
    }

    .hero-title {
      font-size: 3rem;
      font-weight: bold;
      margin-bottom: 1.5rem;
      line-height: 1.2;
    }

    .hero-title .highlight {
      color: #fde047;
    }

    .hero-description {
      font-size: 1.125rem;
      margin-bottom: 2rem;
      color: rgba(255, 255, 255, 0.9);
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }

    .hero-buttons {
      display: flex;
      gap: 1rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .btn {
      display: inline-block;
      padding: 0.75rem 2rem;
      border-radius: 9999px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
      cursor: pointer;
      border: none;
      font-size: 1rem;
    }

    .btn-primary {
      background: white;
      color: #9333ea;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    .btn-primary:hover {
      background: #f3e8ff;
    }

    .btn-outline {
      background: transparent;
      color: white;
      border: 2px solid white;
    }

    .btn-outline:hover {
      background: rgba(255, 255, 255, 0.1);
    }

    /* Tab Navigation */
    .tab-section {
      max-width: 1200px;
      margin: 0 auto;
      padding: 3rem 20px;
    }

    .tab-navigation {
      display: flex;
      justify-content: center;
      margin-bottom: 3rem;
    }

    .tab-buttons {
      display: inline-flex;
      background: white;
      border-radius: 9999px;
      padding: 0.375rem;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    .tab-btn {
      padding: 0.75rem 2rem;
      border-radius: 9999px;
      font-weight: 600;
      background: transparent;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      color: #6b7280;
      font-size: 1rem;
    }

    .tab-btn.active {
      background: linear-gradient(135deg, #9333ea, #ec4899);
      color: white;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .tab-btn:hover:not(.active) {
      color: #111827;
    }

    .tab-content {
      display: none;
    }

    .tab-content.active {
      display: block;
    }

    /* Section Headers */
    .section-header {
      text-align: center;
      margin-bottom: 3rem;
    }

    .section-title {
      font-size: 2.5rem;
      font-weight: bold;
      background: linear-gradient(135deg, #9333ea, #ec4899);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 0.75rem;
    }

    .section-description {
      color: #6b7280;
      font-size: 1.125rem;
    }

    /* Pricing Grid */
    .pricing-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 2rem;
      margin-bottom: 4rem;
    }

    .pricing-card {
      background: white;
      border-radius: 1rem;
      overflow: hidden;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      border: 1px solid #e5e7eb;
      position: relative;
    }

    .pricing-card:hover {
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
      transform: translateY(-4px);
    }

    .pricing-card.featured {
      border: 2px solid #9333ea;
      transform: scale(1.02);
    }

    .badge {
      position: absolute;
      top: 0;
      right: 0;
      background: linear-gradient(135deg, #9333ea, #ec4899);
      color: white;
      padding: 0.25rem 1rem;
      font-size: 0.875rem;
      font-weight: 600;
      border-radius: 0 1rem 0 0.5rem;
      z-index: 10;
    }

    .card-header {
      padding: 1.5rem;
      background: linear-gradient(135deg, #ddd6fe, #fbcfe8);
    }

    .card-header.blue {
      background: linear-gradient(135deg, #dbeafe, #e9d5ff);
    }

    .card-header.amber {
      background: linear-gradient(135deg, #fef3c7, #fed7aa);
    }

    .card-subtitle {
      font-size: 0.875rem;
      font-weight: 600;
      color: #7c3aed;
      margin-bottom: 0.5rem;
    }

    .card-title {
      font-size: 1.5rem;
      font-weight: bold;
      color: #111827;
    }

    .card-label {
      font-size: 0.875rem;
      font-weight: 600;
      color: #ea580c;
      margin-top: 0.25rem;
    }

    .card-body {
      padding: 2rem;
    }

    .price {
      font-size: 2.5rem;
      font-weight: bold;
      color: #111827;
      margin-bottom: 1.5rem;
    }

    .features {
      list-style: none;
      margin-bottom: 2rem;
    }

    .features li {
      display: flex;
      align-items: flex-start;
      margin-bottom: 0.75rem;
    }

    .check-icon {
      color: #22c55e;
      margin-right: 0.5rem;
      flex-shrink: 0;
    }

    .promo-icon {
      color: #ec4899;
      margin-right: 0.5rem;
      flex-shrink: 0;
    }

    .btn-book {
      display: block;
      width: 100%;
      padding: 0.75rem;
      background: #111827;
      color: white;
      text-align: center;
      border-radius: 0.5rem;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-book:hover {
      background: #1f2937;
    }

    .btn-book.featured {
      background: linear-gradient(135deg, #9333ea, #ec4899);
    }

    .btn-book.featured:hover {
      box-shadow: 0 10px 15px -3px rgba(147, 51, 234, 0.3);
    }

    /* Add-ons Section */
    .addons-section {
      background: linear-gradient(135deg, #faf5ff, #fce7f3);
      border-radius: 1rem;
      padding: 3rem;
      margin-top: 4rem;
    }

    .addons-title {
      text-align: center;
      font-size: 1.875rem;
      font-weight: bold;
      margin-bottom: 2rem;
    }

    .addons-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 1.5rem;
    }

    .addon-card {
      background: white;
      border-radius: 0.75rem;
      padding: 1.5rem;
      text-align: center;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .addon-icon {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }

    .addon-name {
      font-weight: 600;
      margin-bottom: 0.25rem;
    }

    .addon-price {
      font-size: 1.5rem;
      font-weight: bold;
      color: #9333ea;
    }

    .addon-note {
      font-size: 0.75rem;
      color: #6b7280;
      margin-top: 0.25rem;
    }

    /* CTA Section */
    .cta-section {
      background: linear-gradient(135deg, #9333ea, #ec4899);
      color: white;
      padding: 4rem 20px;
      text-align: center;
    }

    .cta-content {
      max-width: 800px;
      margin: 0 auto;
    }

    .cta-title {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .cta-description {
      font-size: 1.125rem;
      margin-bottom: 2rem;
      color: rgba(255, 255, 255, 0.9);
    }

    .btn-cta {
      display: inline-block;
      padding: 1rem 2rem;
      background: white;
      color: #9333ea;
      border-radius: 9999px;
      font-weight: bold;
      font-size: 1.125rem;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    .btn-cta:hover {
      background: #f3e8ff;
    }

    /* Footer */
    footer {
      background: #111827;
      color: #9ca3af;
      padding: 2rem 20px;
      text-align: center;
    }

    footer p {
      margin-bottom: 0.5rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .hero-title {
        font-size: 2rem;
      }

      .section-title {
        font-size: 2rem;
      }

      .pricing-grid {
        grid-template-columns: 1fr;
      }

      .tab-btn {
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
      }

      .addons-section {
        padding: 2rem 1rem;
      }

      .cta-title {
        font-size: 1.875rem;
      }

      .pricing-card.featured {
        transform: scale(1);
      }
    }
  </style>
</head>
<body>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="hero-content">
      <p class="hero-subtitle">Best Value Packages</p>
      <h1 class="hero-title">
        Capture Your <span class="highlight">Memories</span><br>
        with AVK Studio
      </h1>
      <p class="hero-description">
        Professional photography & videography for weddings, birthdays, and events in Malaysia
      </p>
      <div class="hero-buttons">
        <a href="#packages" class="btn btn-primary">Explore Packages</a>
        <a href="https://wa.me/60162118863" target="_blank" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </section>

  <!-- Tab Navigation & Content -->
  <section id="packages" class="tab-section">
    <div class="tab-navigation">
      <div class="tab-buttons">
        <button class="tab-btn active" onclick="switchTab('events')">🎉 Event Packages</button>
        <button class="tab-btn" onclick="switchTab('weddings')">💍 Wedding Packages</button>
      </div>
    </div>

    <!-- Event Packages Tab -->
    <div id="events-tab" class="tab-content active">
      <div class="section-header">
        <h2 class="section-title">Event Packages</h2>
        <p class="section-description">Perfect for birthdays, corporate events, and private celebrations</p>
      </div>

      <div class="pricing-grid">
        <!-- Event Lite -->
        <div class="pricing-card">
          <div class="card-body">
            <h3 class="card-title">Event Lite</h3>
            <div class="price">RM 700</div>
            <ul class="features">
              <li><span class="check-icon">✓</span> 1 Photographer</li>
              <li><span class="check-icon">✓</span> 3 hours coverage</li>
              <li><span class="check-icon">✓</span> Unlimited shots</li>
              <li><span class="check-icon">✓</span> Basic editing</li>
              <li><span class="check-icon">✓</span> Online delivery</li>
            </ul>
            <a href="https://wa.me/60162118863?text=Hi, I'm interested in the Event Lite package" target="_blank" class="btn-book">Book Now</a>
          </div>
        </div>

        <!-- Event Standard -->
        <div class="pricing-card featured">
          <span class="badge">⭐ MOST POPULAR</span>
          <div class="card-body" style="padding-top: 2.5rem;">
            <h3 class="card-title">Event Standard</h3>
            <div class="price">RM 1,200</div>
            <ul class="features">
              <li><span class="check-icon">✓</span> 1 Photographer</li>
              <li><span class="check-icon">✓</span> 5 hours coverage</li>
              <li><span class="check-icon">✓</span> Unlimited shots</li>
              <li><span class="check-icon">✓</span> Professional retouching</li>
              <li><span class="check-icon">✓</span> Online gallery</li>
            </ul>
            <a href="https://wa.me/60162118863?text=Hi, I'm interested in the Event Standard package" target="_blank" class="btn-book featured">Book Now</a>
          </div>
        </div>

        <!-- Event Premium -->
        <div class="pricing-card">
          <div class="card-body">
            <h3 class="card-title">Event Premium</h3>
            <div class="price">RM 2,800</div>
            <ul class="features">
              <li><span class="check-icon">✓</span> 1 Photographer</li>
              <li><span class="check-icon">✓</span> Full day coverage</li>
              <li><span class="check-icon">✓</span> Unlimited shots</li>
              <li><span class="check-icon">✓</span> Professional retouching</li>
              <li><span class="check-icon">✓</span> Online Gallery</li>
              <li><span class="check-icon">✓</span> 2 Cinematic Instagram Reels</li>
              <li><span class="check-icon">✓</span> Next day delivery</li>
            </ul>
            <a href="https://wa.me/60162118863?text=Hi, I'm interested in the Event Premium package" target="_blank" class="btn-book">Book Now</a>
          </div>
        </div>
      </div>

      <!-- Add-ons -->
      <div class="addons-section">
        <h3 class="addons-title">Add-ons</h3>
        <div class="addons-grid">
          <div class="addon-card">
            <div class="addon-icon">⏰</div>
            <div class="addon-name">Extra Hour</div>
            <div class="addon-price">RM 150</div>
          </div>
          <div class="addon-card" onclick="window.location.href='album_price.php'" style="cursor:pointer;" title="View album price list">
            <div class="addon-icon">📖</div>
            <div class="addon-name">Wedding Album</div>
            <div class="addon-price">From RM 334</div>
            <div class="addon-note">View price list →</div>
          </div>
          <div class="addon-card">
            <div class="addon-icon">⚡</div>
            <div class="addon-name">Express Edit</div>
            <div class="addon-price">RM 300</div>
            <div class="addon-note">3 days</div>
          </div>
          <div class="addon-card">
            <div class="addon-icon">🎬</div>
            <div class="addon-name">Instagram Reels</div>
            <div class="addon-price">RM 200-400</div>
          </div>
          <div class="addon-card">
            <div class="addon-icon">📸</div>
            <div class="addon-name">Second Shooter</div>
            <div class="addon-price">RM 600-1,000</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Wedding Packages Tab -->
    <div id="weddings-tab" class="tab-content">
      <div class="section-header">
        <h2 class="section-title">Wedding Packages</h2>
        <p class="section-description">Capture every precious moment of your special day</p>
      </div>

      <div class="pricing-grid">
        <!-- Essential Wedding -->
        <div class="pricing-card">
          <div class="card-header blue">
            <div class="card-subtitle">💡 Small / Temple / Church Weddings</div>
            <h3 class="card-title">Essential Wedding</h3>
          </div>
          <div class="card-body">
            <div class="price">RM 1,600</div>
            <ul class="features">
              <li><span class="check-icon">✓</span> 1 Photographer</li>
              <li><span class="check-icon">✓</span> Up to 6 hours coverage</li>
              <li><span class="check-icon">✓</span> Unlimited shots</li>
              <li><span class="check-icon">✓</span> Online gallery (download)</li>
              <li><span class="check-icon">✓</span> Complimentary album (RM 360 value)</li>
              <li><span class="promo-icon">🎁</span> <strong>PROMO: Free Pre-wedding shots & 1 Reel</strong></li>
            </ul>
            <a href="https://wa.me/60162118863?text=Hi, I'm interested in the Essential Wedding package" target="_blank" class="btn-book">Book Now</a>
          </div>
        </div>

        <!-- Signature Wedding -->
        <div class="pricing-card featured">
          <span class="badge">⭐ MOST POPULAR</span>
          <div class="card-header">
            <div class="card-subtitle" style="margin-top: 1rem;">💡 Full Wedding Experience</div>
            <h3 class="card-title">Signature Wedding</h3>
          </div>
          <div class="card-body">
            <div class="price">RM 2,800</div>
            <ul class="features">
              <li><span class="check-icon">✓</span> 1 Photographer</li>
              <li><span class="check-icon">✓</span> Up to 12 hours coverage</li>
              <li><span class="check-icon">✓</span> Pre-wedding + ceremony + reception</li>
              <li><span class="check-icon">✓</span> Online gallery</li>
              <li><span class="check-icon">✓</span> Complimentary album (RM 360 value)</li>
              <li><span class="check-icon">✓</span> 15 curated highlights (within 48 hours)</li>
              <li><span class="check-icon">✓</span> 2 Instagram reels</li>
            </ul>
            <a href="https://wa.me/60162118863?text=Hi, I'm interested in the Signature Wedding package" target="_blank" class="btn-book featured">Book Now</a>
          </div>
        </div>

        <!-- Prestige Wedding -->
        <div class="pricing-card">
          <div class="card-header amber">
            <div class="card-subtitle">💡 Complete Photo & Film Coverage</div>
            <h3 class="card-title">Prestige Wedding</h3>
            <div class="card-label">(All-In)</div>
          </div>
          <div class="card-body">
            <div class="price">RM 5,600</div>
            <ul class="features">
              <li><span class="check-icon">✓</span> <strong>2 Professional Photographers</strong></li>
              <li><span class="check-icon">✓</span> Full-day coverage (unlimited photos)</li>
              <li><span class="check-icon">✓</span> 30 curated highlights (within 48 hours)</li>
              <li><span class="check-icon">✓</span> Full-resolution edited gallery</li>
              <li><span class="check-icon">✓</span> <strong>1 Videographer (Cinematic)</strong></li>
              <li><span class="check-icon">✓</span> Full-day video coverage</li>
              <li><span class="check-icon">✓</span> Cinematic Highlight Film (3-5 mins)</li>
              <li><span class="check-icon">✓</span> Short Teaser Reel (30-60 sec)</li>
              <li><span class="check-icon">✓</span> Luxury Wedding Album (10×10, 20 pages)</li>
              <li><span class="check-icon">✓</span> Priority editing queue</li>
              <li><span class="check-icon">✓</span> Customised timeline planning support</li>
            </ul>
            <a href="https://wa.me/60162118863?text=Hi, I'm interested in the Prestige Wedding (All-In) package" target="_blank" class="btn-book">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="cta-content">
      <h2 class="cta-title">Ready to Book Your Package?</h2>
      <p class="cta-description">
        Contact us on WhatsApp to discuss your event details and customize your perfect package
      </p>
      <a href="https://wa.me/60162118863?text=Hi, I'd like to inquire about your photography packages" target="_blank" class="btn-cta">
        Contact Us on WhatsApp
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2026 AVK Studio. All rights reserved.</p>
    <p style="font-size: 0.875rem;">Professional Photography & Videography Services in Malaysia</p>
  </footer>

  <script>
    function switchTab(tabName) {
      // Hide all tabs
      document.querySelectorAll('.tab-content').forEach(tab => {
        tab.classList.remove('active');
      });

      // Remove active class from all buttons
      document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('active');
      });

      // Show selected tab
      document.getElementById(tabName + '-tab').classList.add('active');

      // Add active class to clicked button
      event.target.classList.add('active');
    }
  </script>

</body>

<?php include 'footer.php'; ?>
