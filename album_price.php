<?php
$title = "Wedding Album Package – AVK Studio | CA CYM#19 Crystal Custom Album Malaysia";
$description = "AVK Studio's Gaztano Custom Album package — CA CYM#19. Includes crystal custom album, leather suitcase, and photo frame.";
$keywords = "AVK Studio album, wedding album Malaysia, CYM19 album, crystal custom album, Gaztano album price";
$ogImage = "https://www.avkstudio.com/img/pricing-og.jpg";
include 'header.php';
?>

<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }
  body { font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; line-height: 1.6; color: #333; background: #f9fafb; }

  /* ── PAGE HEADER ─────────────────────────── */
  .page-header {
    position: relative;
    background: linear-gradient(135deg, #9333ea 0%, #ec4899 50%, #fb923c 100%);
    text-align: center;
    padding: 70px 20px 80px;
    overflow: hidden;
  }
  .page-header::before {
    content: '';
    position: absolute; inset: 0;
    background: rgba(0,0,0,0.08);
  }
  .page-header .back-link {
    position: relative; z-index: 1;
    display: inline-flex; align-items: center; gap: 6px;
    color: rgba(255,255,255,0.85); font-size: 0.82rem; font-weight: 500;
    text-decoration: none; margin-bottom: 20px;
    background: rgba(255,255,255,0.15); padding: 5px 16px; border-radius: 999px;
    border: 1px solid rgba(255,255,255,0.3);
    transition: background 0.2s;
  }
  .page-header .back-link:hover { background: rgba(255,255,255,0.25); color: white; }
  .page-header h1 {
    position: relative; z-index: 1;
    font-size: 2.8rem; font-weight: 800; color: white;
    line-height: 1.2;
  }

  /* ── MAIN ────────────────────────────────── */
  .main-wrapper { max-width: 960px; margin: 0 auto; padding: 48px 20px 64px; }

  /* ── PRODUCT ROW ─────────────────────────── */
  .product-row {
    display: grid;
    grid-template-columns: 1fr 1.25fr 1fr;
    gap: 28px;
    margin-bottom: 52px;
    align-items: end;
  }
  .product-item { text-align: center; }
  .product-item .img-wrap {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    overflow: hidden;
    display: flex; align-items: center; justify-content: center;
    padding: 16px;
    transition: box-shadow 0.3s, transform 0.3s;
  }
  .product-item:hover .img-wrap {
    box-shadow: 0 12px 32px rgba(0,0,0,0.16);
    transform: translateY(-4px);
  }
  .product-item .img-wrap img {
    width: 100%;
    height: 200px;
    object-fit: contain;
    display: block;
  }
  .product-item.center .img-wrap img { height: 240px; }
  .product-name {
    font-size: 0.9rem; font-weight: 600; color: #111827;
    margin-top: 12px;
  }
  .product-code {
    font-size: 0.78rem; color: #dc2626; font-weight: 600; margin-top: 2px;
  }

  /* ── PRICE SECTION ───────────────────────── */
  .price-section {
    max-width: 500px;
    margin: 0 auto;
  }
  .price-section h3 {
    font-size: 1.2rem; font-weight: 700; color: #1e1b4b;
    margin-bottom: 18px; padding-bottom: 10px;
    border-bottom: 3px solid #4c1d95;
    text-align: center;
  }

  .price-table {
    width: 100%;
    border-collapse: collapse;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(0,0,0,0.1);
    background: white;
  }
  .price-table thead tr {
    background: linear-gradient(135deg, #1e1b4b, #4c1d95);
  }
  .price-table th {
    padding: 16px 24px;
    font-size: 0.82rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.07em;
    color: white;
  }
  .price-table th:first-child { text-align: left; }
  .price-table th:last-child  { text-align: right; color: #fbbf24; }

  .price-table tbody tr {
    border-bottom: 1px solid #f3f4f6;
    transition: background 0.15s;
  }
  .price-table tbody tr:last-child { border-bottom: none; }
  .price-table tbody tr:nth-child(even) { background: #faf5ff; }
  .price-table tbody tr:hover { background: #ede9fe; }

  .price-table td {
    padding: 15px 24px;
    font-size: 1rem;
  }
  .price-table td:first-child {
    font-weight: 700; font-size: 1.05rem; color: #111827;
  }
  .price-table td:last-child {
    text-align: right;
  }
  .price-table td .rm { font-size: 0.72rem; color: #9ca3af; margin-right: 1px; }
  .price-table td .amount { font-weight: 800; color: #4c1d95; font-size: 1.15rem; }

  /* ── CTA ─────────────────────────────────── */
  .cta-section {
    background: linear-gradient(135deg, #9333ea, #ec4899);
    color: white; padding: 56px 20px; text-align: center;
    margin-top: 0;
  }
  .cta-section h2 { font-size: 2rem; font-weight: 800; margin-bottom: 10px; }
  .cta-section p { font-size: 1.05rem; color: rgba(255,255,255,0.9); margin-bottom: 28px; }
  .btn-wa {
    display: inline-flex; align-items: center; gap: 10px;
    padding: 14px 36px; background: white; color: #9333ea;
    border-radius: 999px; font-weight: 700; font-size: 1.05rem;
    text-decoration: none; box-shadow: 0 10px 24px rgba(0,0,0,0.15);
    transition: all 0.3s;
  }
  .btn-wa:hover { background: #f3e8ff; transform: translateY(-2px); }

  footer { background: #111827; color: #9ca3af; padding: 2rem 20px; text-align: center; }
  footer p { margin-bottom: 4px; font-size: 0.875rem; }

  /* ── RESPONSIVE ──────────────────────────── */
  @media (max-width: 680px) {
    .product-row { grid-template-columns: 1fr; gap: 20px; }
    .product-item.center .img-wrap img { height: 200px; }
    .page-header h1 { font-size: 1.4rem; }
    .page-header h2 { font-size: 0.95rem; }
    .price-table td, .price-table th { padding: 13px 16px; }
    .cta-section h2 { font-size: 1.5rem; }
  }
</style>
</head>
<body>

<!-- ── PAGE HEADER ────────────────────────────── -->
<div class="page-header">
  <div><a href="pricing.php#packages" class="back-link">← Back to Packages</a></div>
  <h1>Custom Album Price</h1>
</div>

<!-- ── MAIN ──────────────────────────────────── -->
<div class="main-wrapper">

  <!-- 3 Product images -->
  <div class="product-row">

    <div class="product-item">
      <div class="img-wrap">
        <img src="img/album-suitcase-photo.jpg" alt="Leather Suitcase">
      </div>
      <div class="product-name">Leather Suitcase</div>
      <div class="product-code">Code = Box#01(S) SJB</div>
    </div>

    <div class="product-item center">
      <div class="img-wrap">
        <img src="img/album-crystal-photo.jpg" alt="Crystal Custom Album">
      </div>
      <div class="product-name">Crystal Custom Album</div>
      <div class="product-code">Code = CYM#19 SJB</div>
    </div>

    <div class="product-item">
      <div class="img-wrap">
        <img src="img/album-frame-photo.jpg" alt="Photo Frame">
      </div>
      <div class="product-name">Photo Frame</div>
      <div class="product-code">Code = GF#78 (B) &nbsp;16 × 24 inch</div>
    </div>

  </div>

  <!-- Price table -->
  <div class="price-section">
    <h3>Price List (RM)</h3>
    <table class="price-table">
      <thead>
        <tr>
          <th>Size (inches)</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>12 × 08</td><td><span class="rm">RM </span><span class="amount">334</span></td></tr>
        <tr><td>12 × 10</td><td><span class="rm">RM </span><span class="amount">373</span></td></tr>
        <tr><td>12 × 12</td><td><span class="rm">RM </span><span class="amount">453</span></td></tr>
        <tr><td>15 × 10</td><td><span class="rm">RM </span><span class="amount">452</span></td></tr>
        <tr><td>15 × 12</td><td><span class="rm">RM </span><span class="amount">476</span></td></tr>
        <tr><td>18 × 12</td><td><span class="rm">RM </span><span class="amount">500</span></td></tr>
      </tbody>
    </table>
  </div>

</div>

<!-- ── CTA ───────────────────────────────────── -->
<section class="cta-section">
  <h2>Ready to Order Your Album?</h2>
  <p>Contact us on WhatsApp to place your order or customise your package.</p>
  <a href="https://wa.me/60162118863?text=Hi, I'm interested in the CYM%2319 Wedding Album Package" target="_blank" class="btn-wa">
    💬 Order via WhatsApp
  </a>
</section>

<footer>
  <p>© 2026 AVK Studio. All rights reserved.</p>
  <p>Professional Photography & Videography Services in Malaysia</p>
</footer>

</body>
<?php include 'footer.php'; ?>
