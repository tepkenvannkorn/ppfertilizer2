<ul class="share nav">
    <li><?php echo pll__( 'Share this article' ); ?> </li>
    <li>
        <a href="https://facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
            <span class="bi bi-facebook"></span>
        </a>
    </li>
    <li>
        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank"><span class="bi bi-linkedin"></span></a>
    </li>
    <li>
        <a href="https://t.me/share/url?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank"><span class="bi bi-telegram"></span></a>
    </li>
    <li>
        <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" target="_blank"><span class="bi bi-twitter-x"></span></a>
    </li>
    <!-- <li><a href="#" onclick="window.print()"><span class="bi bi-printer-fill"></span></a></li> -->
</ul>