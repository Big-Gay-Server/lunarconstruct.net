	</div>
</div>

<img src="/trinket/trinket_transparent.png"
			style="position: fixed;bottom: 0;right: 0;width: 600px;z-index: -1" />

		<div id="footerwrap">
			<div id="footer">
				Layout made by
				<a href="https://itinerae.neocities.org" target="_blank">
					Itinerae.
				</a>
				Pixels from
				<a href="https://foollovers.com/" target="_blank">
					Fool Lovers.
				</a>
			</div>
		</div>
	</div>

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

</body>

</html>