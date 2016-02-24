<?php
$pageTitle = "Portfolio Page";
$section = "portfolio";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php'); ?>

      <section>
            <ul id="gallery" class="spoiler">
                <li>
                    <a href="<?php echo BASE_URL; ?>img/abstract1.jpg">
                        <img src="<?php echo BASE_URL; ?>img/abstract1.jpg" alt="One of my earlier works from DeVry University, messing around in Adobe Illustrator with blue colors">
                    </a>
                    <p>Abstract Blue
                    </p>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>img/abstract2.jpg" class="boxer" data-gallery="gallery">
                        <img src="<?php echo BASE_URL; ?>img/abstract2.jpg" alt="One of my earlier works from DeVry University, messing around in Adobe Illustrator with blue colors">
                    </a>
                    <p>Gradient Blue
                    </p>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>img/dmg-music.jpg" class="boxer" data-gallery="gallery">
                        <img src="<?php echo BASE_URL; ?>img/dmg-music.jpg" alt="A DeVry Project making artwork for my ficticious music company">
                    </a>
                    <p>DMG Music
                    </p>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>img/eos-banner-black.jpg" class="boxer" data-gallery="gallery">
                        <img src="<?php echo BASE_URL; ?>img/eos-banner-black.jpg" alt="A banner for Element of Surprise Music Publishing Company in black">
                    </a>
                    <p>EOS Banner 1</p>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>img/eos-banner-blue.jpg" class="boxer" data-gallery="gallery">
                        <img src="<?php echo BASE_URL; ?>img/eos-banner-blue.jpg" alt="A banner for Element of Surprise Music Publishing Company in blue">
                    </a>
                    <p>EOS Banner 2</p>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>img/eos-banner-green.jpg" class="boxer" data-gallery="gallery">
                        <img src="<?php echo BASE_URL; ?>img/eos-banner-green.jpg" alt="A banner for Element of Surprise Music Publishing Company in green">
                    </a>
                    <p>EOS Banner 3
                    </p>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>img/eos-logo.jpg" class="boxer" data-gallery="gallery">
                        <img src="<?php echo BASE_URL; ?>img/eos-logo.jpg" alt="The logo of E Music Publishing that I modified to be the final product in Photoshop">
                    </a>
                    <p>EOS Logo</p>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>img/h1-album.jpg" class="boxer" data-gallery="gallery">
                        <img src="<?php echo BASE_URL; ?>img/h1-album.jpg" alt="My first draft of creating album artwork for a song called Heroes">
                    </a>
                    <p>Heroes Album Artwork Original
                    </p>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>img/h2-album.jpg" class="boxer" data-gallery="gallery">
                        <img src="<?php echo BASE_URL; ?>img/h2-album.jpg" alt="My second draft of creating album artwork for a song called Heroes">
                    </a>
                    <p>Heroes Album Artwork Two</p>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>img/h3-album.jpg" class="boxer" data-gallery="gallery">
                        <img src="<?php echo BASE_URL; ?>img/h3-album.jpg" alt="My third and final draft of creating album artwork for a song called Heroes">
                    </a>
                    <p>Heroes Album Artwork Final</p>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>img/isd-album.jpg" class="boxer" data-gallery="gallery">
                        <img src="<?php echo BASE_URL; ?>img/isd-album.jpg" alt="An album cover for a song called I'm Still Dedicated">
                    </a>
                    <p>I'm Still Dedicated Album Artwork</p>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>img/pct-album.jpg" class="boxer" data-gallery="gallery">
                        <img src="<?php echo BASE_URL; ?>img/pct-album.jpg" alt="Album artwork created for a song called Pillow Company Tonight">
                    </a>
                    <p>Pillow Company Tonight Artwork</p>
                </li>
            </ul>
      </section>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>