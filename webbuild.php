<?php
$title = "Website Building – AVK Studio | Custom Business & Professional Websites";
$description = "Affordable website development packages by AVK Studio in Malaysia. From landing pages to custom websites with SEO, hosting, and support included.";
$keywords = "website building Malaysia, business website, custom website design, SEO web development, AVK Studio";
$ogImage = "https://www.avkstudio.com/img/webbuild-og.jpg";
include 'header.php';
?>

<!-- ===== Banner Section ===== -->
<section class="banner-section">
  <img src="img/portfolio/CustomWebsiteDesign-1.jpg" 
       alt="Custom Website Design" 
       class="img-fluid w-100 banner-img">
</section>


	<!-- ===== Website Building Section ===== -->
<section class="service-section">
  <div class="container">
    <h2 class="section-title text-center" >Push Your Business to the Next Level</h2>
    <p class="text-center mb-5">
      Choose from our flexible website packages tailored to your business needs.
    </p>

    <div class="row">
  <!-- Starter Package -->
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="pricing-card">
      <h3 class="pricing-title">Starter Package</h3>
      <h4 class="pricing-price">RM 1,800</h4>
      <ul>
        <li>1-page microsite (landing page)</li>
        <li>Mobile responsive design</li>
        <li>Hosting + Domain (Free 1st year worth RM300)</li>
        <li>Contact form integration</li>
        <li>1 week delivery</li>
      </ul>
      <a href="https://wa.me/60162118863?text=Hi%2C%20I%27m%20%5BYour%20Name%5D%2C%20I%20want%20to%20build%20my%20website%20and%20I%27m%20interested%20in%20this%20Starter%20Package.%20Would%20like%20to%20know%20about%20it" 
         class="site-btn" target="_blank">Enquire Now</a>
    </div>
  </div>

  <!-- Business Website Package -->
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="pricing-card popular">
      <h3 class="pricing-title">Business Website Package</h3>
      <h4 class="pricing-price">RM 2,800</h4>
      <ul>
        <li>Hosting + Domain (Free 1st year worth RM300)</li>
        <li>Web Design & Development (up to 5 pages)</li>
        <li>Search Engine Optimisation (SEO basics)</li>
        <li>Mobile responsive design</li>
        <li>Technical Support (2 months free)</li>
      </ul>
      <a href="https://wa.me/60162118863?text=Hi%2C%20I%27m%20%5BYour%20Name%5D%2C%20I%20want%20to%20build%20my%20website%20and%20I%27m%20interested%20in%20this%20Business%20Website%20Package.%20Would%20like%20to%20know%20about%20it" 
         class="site-btn" target="_blank">Enquire Now</a>
    </div>
  </div>

  <!-- Professional Package -->
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="pricing-card">
      <h3 class="pricing-title">Professional Package</h3>
      <h4 class="pricing-price">RM 5,500</h4>
      <ul>
        <li>Hosting + Domain (Free 1st year worth RM300)</li>
        <li>Custom Web Design (up to 12 pages)</li>
        <li>Blog / News Section</li>
        <li>Advanced SEO Setup</li>
        <li>CMS (WordPress or similar)</li>
        <li>Business Email Setup</li>
        <li>Technical Support (3 months free)</li>
      </ul>
      <a href="https://wa.me/60162118863?text=Hi%2C%20I%27m%20%5BYour%20Name%5D%2C%20I%20want%20to%20build%20my%20website%20and%20I%27m%20interested%20in%20this%20Professional%20Package.%20Would%20like%20to%20know%20about%20it" 
         class="site-btn" target="_blank">Enquire Now</a>
    </div>
  </div>
</div>

  </div>
</section>

<style>
  .pricing-card {
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    text-align: center;
    transition: 0.3s;
  }
  .pricing-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.1);
  }
  .pricing-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
  }
  .pricing-price {
    font-size: 22px;
    margin-bottom: 20px;
    color: #ff6600;
  }
  .pricing-card ul {
    list-style: none;
    padding: 0;
    margin-bottom: 20px;
  }
  .pricing-card ul li {
    margin-bottom: 8px;
  }
  .pricing-card.popular {
    border: 2px solid #ff6600;
  }

  .banner-img {
  width: 100%;
  height: 30vh;              /* 30% of viewport height */
  object-fit: cover;         /* crop neatly */
  display: block;
}
</style>

<?php include 'footer.php'; ?>