
# Format Class

This class was developed to hold static formatting helper methods as outlined below...

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

- PHP 7.1 or greater (due to type hinting)


### INSTALLING

#### Via Composer

Run the following command in the same directory as your composer.json file:

`php composer.phar require jabarihunt/format`

#### Via Github

1. Clone this repository into a working directory: `git clone git@github.com:jabarihunt/format`
2. Include the Format class in your project...

```php
require('/path/to/Format.php')
```
...or if using an auto-loader...
```php
 use jabarihunt/Format
 ```

## USAGE

#### name(string $name):

Credit for the original method goes to [Armand Niculescu](https://www.media-division.com/correct-name-capitalization-in-php/).

This method correctly capitalizes name when there are prefixes & suffixes, apostrophes, name parts that shouldn't be capitalized, and in other scenarios where using something like `ucwords(strtolower($str))` doesn't work.

Examples:

| `$name`                  |  `ucwords(strtolower($name))` | `Format::name($name)`    |
|--------------------------|-------------------------------|--------------------------|
| michael o’carrol         | Michael O’carrol              | Michael O’Carrol         |
| lucas l’amour            | Lucas L’amour                 | Lucas l’Amour            |
| george d’onofrio         | George D’onofrio              | George d’Onofrio         |
| william stanley iii      | William Stanley Iii           | William Stanley III      |
| UNITED STATES OF AMERICA | United States Of America      | United States of America |
| t. von lieres und wilkau | T. Von Lieres Und Wilkau      | T. von Lieres und Wilkau |
| paul van der knaap       | Paul Van Der Knaap            | Paul van der Knaap       |
| jean-luc picard          | Jean-luc Picard               | Jean-Luc Picard          |
| JOHN MCLAREN             | John Mclaren                  | John McLaren             |
| hENRIC vIII              | Henric Viii                   | Henric VIII              |
| VAsco da GAma            | Vasco Da Gama                 | Vasco da Gama            |

## CONTRIBUTING

1. Fork Repository
2. Create a descriptive branch name
3. Make edits to your branch
4. Squash (rebase) your commits
5. Create a pull request

## LICENSE

This project is licensed under the MIT License - see the [LICENSE.md] file for details.

[LICENSE.md]: <LICENSE.md>