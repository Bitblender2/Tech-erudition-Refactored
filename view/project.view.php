<section class="project">
  <div class="pro-image">
    <img src="../assets/back.png" alt="alonda image" srcset="">
  </div>
  <div class="pro-desc">
    <h3><span> <?php echo htmlspecialchars($project['title']); ?></span></h3>
    <p>
      <?php
      $paragraphs = explode("\n", $project['description']);
      ?>
      <?php foreach ($paragraphs as $paragraph) : ?>
    <p><?php echo htmlspecialchars($paragraph); ?></p>
  <?php endforeach; ?>
  </p>
  </div>
  <div class="heading">
    <h2>Project Gallery</h2>
  </div>
  <div class="pro-gallery">
    <div id="pro-all">
      <div class="pro-big">
        <img src="../assets/5.png" alt="fun">
      </div>
      <div class="pro-small">
        <img src="../assets/1.png" alt="fun">
        <img src="../assets/2.png" alt="fun">
        <img src="../assets/3.png" alt="fun">
        <img src="../assets/5.png" alt="fun">
      </div>
    </div>

  </div>
</section>
<div class="contact-us">
  <div class="us">
    <h1>Intrested in starting your <span>project</span>with us?</h1>

  </div>
  <div class="cont-btn">
    <button class="btn1" id="cont">
      <a href="/contact">Contact Us</a>
    </button>
  </div>
</div>