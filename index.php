<?php
session_start();

// Check if the user selected a language
if (isset($_GET['lang'])) {
    $selectedLang = $_GET['lang'];

    // Validate the selected language (as mentioned in Step 2)

    $_SESSION['lang'] = $selectedLang;
}

// Load the language file based on the selected language or use a default language
if (isset($_SESSION['lang'])) {
    $langFile = 'lang_' . $_SESSION['lang'] . '.php';
} else {
    $langFile = 'lang_en.php'; // Default language is English
}

// Include the language file
include($langFile);

// Example of displaying multilingual content
echo $lang['welcome']; // Output: Welcome
echo $lang['hello'];   // Output: Hello
echo $lang['goodbye']; // Output: Goodbye
?>
<a href="?lang=en">English</a>
<a href="?lang=es">Español</a>
<!-- Add more language options as needed -->
