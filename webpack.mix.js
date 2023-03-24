const mix = require("laravel-mix");

mix
  .js("src/app.js", "assets/js")
  .postCss("src/app.css", "assets/css", [require("tailwindcss")]);

mix.browserSync({
  proxy: "https://joomladev.dev",
  files: [`src/**/*.php`, `src/**/*.js`, `tmpl/**/*.php`, `src/**/*.css`],
});
