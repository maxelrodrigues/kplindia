# Skeleton WP theme
Starter theme to help you jump start coding custom WordPress themes

## Master Branch
## Setup
1. Download the **MASTER** branch. **DO NOT CLONE**
2. Rename the theme folder to match the project name
3. Create a theme screenshot.png file using screenshot.psd
4. Create favicon.png and favicon.ico files at the root
5. Run `node -v` anywhere in terminal to check if you have Node.js installed in your system. If not, [Download Node.js](https://nodejs.org/en/) and install
6. Install grunt <br> `npm install grunt`
8. Install all the required packages to run grunt tasks <br>
`cd /path/to/your/wp-content/themes/theme-name/source` <br>
`npm install`
9. Update theme name, theme URI and description in sass/style.scss file
10. Compile all the sass and js files using grunt<br>
`cd /path/to/your/wp-content/themes/theme-name/source` <br>
`grunt`<br>
All the sass files are created inside the source/sass/partials/ folder and its sub-folders. All the js files are divided into two folders source/js/plugins and source/js/custom. Grunt will compile all the source/sass/partials/.scss files into a file named style.css and source/js/plugins/.js files into js/plugins.js file and source/js/custom/.js files into js/custom.js file


## Blocks Branch
Contains additional files and code. It can be used to copy paste files or code to your theme should you need it. Checkout its readme file