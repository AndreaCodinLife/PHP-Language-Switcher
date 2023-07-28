# PHP-Language-Switcher
Enable language switching using PHP and $_SESSION variables.

Certainly! Below is the same content as the previous ReadMe.md, but formatted as code:


# PHP-Language-Switcher

PHP-Language-Switcher is a simple PHP-based web application that allows users to switch between different languages on a website using PHP and `$_SESSION` variables.

## Features

- Easy language selection: Users can choose their preferred language from the available options.
- Multilingual support: The website can display content in multiple languages based on user selection.
- Secure language validation: Proper validation is implemented to ensure only allowed languages are used.
- Flexible language file structure: Language strings are stored in separate language files for easy management.

## How to Use

1. Clone the repository:

```bash
git clone https://github.com/AndreaCodinLife/PHP-Language-Switcher.git
```

2. Set up your web server to serve the PHP files.

3. Create language files:
   - Add a new language file for each supported language inside the `languages/` directory. The file name should be in the format `lang_{language_code}.php` (e.g., `lang_en.php`, `lang_es.php`).
   - Each language file should contain an associative array with language constants and their translated strings.

4. Implement language selection:
   - Use language selection links (e.g., `<a href="?lang=en">English</a>`) to allow users to choose their preferred language.
   - The language selection mechanism is already included in `index.php`.

5. Load the correct language file:
   - The selected language will be stored in the `$_SESSION['lang']` variable.
   - The content will be displayed in the chosen language based on the `$_SESSION['lang']` variable.

## Requirements

- PHP 5.6 or higher (with `session` support).

## Contributing

Contributions to PHP-Language-Switcher are welcome! If you have any bug fixes, improvements, or new features to propose, please feel free to create a pull request.

## License

PHP-Language-Switcher is open-source software licensed under the [MIT License](LICENSE).

## Acknowledgments

- The initial concept for this project was inspired by the need for a simple multilingual website.
