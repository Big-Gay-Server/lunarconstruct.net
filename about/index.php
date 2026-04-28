<p>hello! i'm really bad at writing about myself so sorry in advance ^^;

<p>my name is lunar skye, i go by LunarConstruct online ! i'm <span id="age"></span> years old, and currently living in new jersey!

<p>i work a kinda boring desk job, so recently i've started getting into selfhosting! it keeps me entertained enough haha i self host this site as well as my vocalsynth site and my lunatine (worldbuilding) site, and i've been trying to learn lots of things along the way c:

<p>i'm not as active as i used to be in online communities, but thats okay !! vocalsynth stuff was kind of my main thing for a long time, but i'm glad i'm starting to spread out and make my own space on the web !

<p>anyway, thank you for checking out my little garden here!! if you're reading this you're very cool and very swag x3

<script>
    // JavaScript to calculate age
    function calculateAge(birthDate) {
        const today = new Date();
        const dob = new Date(birthDate);
        let age = today.getFullYear() - dob.getFullYear();
        const monthDiff = today.getMonth() - dob.getMonth();

        // Adjust if birthday hasn't happened yet this year
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
            age--;
        }
        return age;
    }

    // Replace with your birthday (YYYY-MM-DD)
    document.getElementById('age').innerText = calculateAge('1998-05-26');
</script>