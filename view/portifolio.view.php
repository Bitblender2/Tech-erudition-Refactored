<main class="cont">

    <div class="heading">
        <h2>Our Projects So Far</h2>
    </div>

    <section class="portifolio">
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $project): ?>
                <div class="card1">
                    <div class="image1"></div>
                    <div class="content">

                        <span class="title1">
                            <?php echo htmlspecialchars($project['title']); ?>
                        </span>

                        <p class="desc1">
                            <?php echo htmlspecialchars($project['description']); ?>
                        </p>
                        <form action="/project" method="POST">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($project['id']); ?>">
                            <button id="learn" type="submit" id="learn">Learn More</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>


    </section>