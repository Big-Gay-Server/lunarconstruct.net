<div id="leftcolumnwrap">
    <div id="leftcolumn">
        <div class="title">
            <img
                src="/_assets/arrow.gif" />
            click 4 tinket :)
        </div>
        <center>
            <a href="/trinket">
                <img src="/trinket/Trinket comm cropped.png" style="height: 200px" />
            </a>
        </center>
    </div>

    <div id="leftcolumn">
        <div class="title">
            <img
                src="/_assets/arrow.gif" />
            webrings
        </div>
        <div id="vocaring" class="small"></div>
        <link rel="stylesheet" href="https://electric-tenshi.nekoweb.org/vocaring/vocaring.css">
        <script src="https://electric-tenshi.nekoweb.org/vocaring/vocaring-variables.js"></script>
        <script src="https://electric-tenshi.nekoweb.org/vocaring/vocaring-widget.js"></script>
        <br />
        <br />
    </div>

    <div id="leftcolumn">
        <div class="title">
            <img
                src="/_assets/arrow.gif" />
            MY SUPER COOL FRIENDS
        </div>
        <a href="https://www.najah.cloud/"><img src="/najahbutton.png"></img></a>
        <br />
        <br />
    </div>

    <div id="leftcolumn">
        <div class="title">
            <img
                src="/_assets/arrow.gif" />
            blinkies
        </div>

        <center>
            <?php
            $absolutePath = BASE_PATH . '/_assets/blinkies/';
            $blinkiesDir = glob($absolutePath . "*.{jpg,png,gif}", GLOB_BRACE);

            foreach ($blinkiesDir as $blinky) {
                // Convert server path back to a web-friendly relative URL for the <img> tag
                $webPath = '/_assets/blinkies/' . basename($blinky);
                echo '<img src="' . htmlspecialchars($webPath) . '" alt="blinky"/>';
            }
            ?>
        </center>
    </div>
</div>