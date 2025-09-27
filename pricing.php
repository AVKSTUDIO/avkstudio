<?php
$title = "Pricing – AVK Studio | Affordable Photography Packages";
$description = "Explore AVK Studio's photography and videography packages. From weddings to birthdays, we offer professional services at affordable prices.";
$keywords = "photography pricing Malaysia, wedding packages, birthday event packages, AVK Studio";
$ogImage = "https://www.avkstudio.com/img/pricing-og.jpg";
include 'header.php';
?>

<!-- Pricing Section -->
<section class="pricing-section spad">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2>Our Packages</h2>
            <p>Choose the package that fits your event or project best.</p>
        </div>

        <!-- Wedding Packages -->
        <h3 class="mb-4">Wedding Packages</h3>
        <div class="row">
            <!-- Photo Only -->
            <div class="col-md-4 mb-4">
                <div class="card pricing-card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Wedding Photo Only</h5>
                        <h3 class="text-primary">RM 1500</h3>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>📸 Unlimited Photos</li>
                            <li>✔ Custom Crystal Album</li>
                            <li>✔ Edited Images</li>
                        </ul>
                        <a href="https://wa.me/60162118863" target="_blank" class="btn btn-outline-primary">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Video Only -->
            <div class="col-md-4 mb-4">
                <div class="card pricing-card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Wedding Video Only</h5>
                        <h3 class="text-primary">RM 1800</h3>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>🎥 Full-Day Videography</li>
                            <li>✔ Highlight Video</li>
                            <li>✔ Edited Final Cut</li>
                        </ul>
                        <a href="https://wa.me/60162118863" target="_blank" class="btn btn-outline-primary">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- All in One (Best Value) -->
            <div class="col-md-4 mb-4">
                <div class="card pricing-card h-100 shadow-sm border-primary">
                    <div class="card-body text-center">
                        <span class="badge bg-primary mb-2">Most Popular</span>
                        <h5 class="card-title">Wedding All-in-One</h5>
                        <h3 class="text-primary">RM 2800</h3>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>📸 Unlimited Photos</li>
                            <li>🎥 Full-Day Video Coverage</li>
                            <li>✔ Custom Crystal Album</li>
                            <li>✔ Edited Final Cut</li>
                        </ul>
                        <a href="https://wa.me/60162118863" target="_blank" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Events Packages -->
        <h3 class="mt-5 mb-4">Mini Events, Birthdays & Other Functions</h3>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Service</th>
                        <th>Price</th>
                        <th>Deliverables</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>📸 Photography (Per Hour)</td>
                        <td>RM 150</td>
                        <td>- Unlimited Photos<br>- Softcopy</td>
                    </tr>
                    <tr>
                        <td>🎞️ Photo Editing</td>
                        <td>RM 50</td>
                        <td>Photo enhancement using Adobe Lightroom</td>
                    </tr>
                    <tr>
                        <td>🎥 Videography (Per Hour)</td>
                        <td>RM 180</td>
                        <td>Event coverage with professional cameras</td>
                    </tr>
                    <tr>
                        <td>✂️ Video Editing</td>
                        <td>RM 250</td>
                        <td>Highlight Video</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Custom Album -->
        <h3 class="mt-5 mb-4">Custom Albums</h3>
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Album Design</h5>
                <p class="card-text">Creative, professional layouts designed to match your event style.</p>
                <a href="https://drive.google.com/file/d/1Mm4-kcsLoa-OpL5jR5OO-aKfkttDCa41/view?usp=sharing" target="_blank" class="btn btn-outline-primary">View Album Price List</a>
            </div>
        </div>
    </div>
</section>

<!-- Page-specific CSS -->
<style>
    .pricing-card {
        border-radius: 10px;
        transition: transform 0.3s ease;
    }
    .pricing-card:hover {
        transform: translateY(-5px);
    }
    .pricing-card ul li {
        margin: 8px 0;
    }
</style>

<?php include 'footer.php'; ?>
