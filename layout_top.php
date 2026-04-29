<?php
require_once 'config.php';
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>LunarConstruct</title>
	<link href="/style.css" rel="stylesheet" />
	<link rel="icon" type="image/x-icon" href="/_assets/favicon.ico">
	<link href="https://478.neocities.org/catalog/fonts.css" rel="stylesheet" />
</head>

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

<body>
	<br />
	<br />
	<br />

	<div id="wrapper">
		<?php require_once 'header.php'; ?>
		<?php require_once 'sidebar.php'; ?>

<div id="contentwrap">
	<div id="content">