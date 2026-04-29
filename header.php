<div id="headerwrap">
    <a href="/"> <div id="header">
        <center>
            <div class="headertext">★ LunarConstruct ★</div>
        </center>
    </div></a>
</div>

<div id="navigationwrap">
    <div id="navigation" style="border-top-left-radius: 40px;border-top-right-radius: 40px;">
        <center>
            <a href="/garden">garden</a>
            <a href="https://vocalsynth.lunarconstruct.net">VocalSynth</a>
            <a href="https://lunatine.lunarconstruct.net">Lunatine</a>
            <a href="/gaming">Gaming</a>
            <a href="/shrines">Shrines</a>
            <a href="/about">About</a>
        </center>
    </div>
</div>

<div id="navigationwrap">
    <div id="navigation">
        <center>
            <?php
            include_once 'socials.php';
            foreach ($socialLinks as $link) {
                echo '<a href="' . htmlspecialchars($link['url']) . '">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="' . $link['fill'] . '" viewBox="0 0 32 32">';
                echo '<path d="' . $link['path'] . '"></path>';
                // Handle special case for Twitch (extra paths)
                if (isset($link['extra'])) {
                    echo $link['extra'];
                }
                echo '</svg>';
                echo '</a> ';
            }
            ?>
        </center>
    </div>
</div>