# Transparency Reporting Toolkit
A hub for submitting, standardising and experimenting with transparency report data.

## Working on this project
The TL;DR of the below details is this:
- run `grunt`
- content, styling and javascript are updated in the src folder
- when you save these updated files they are compiled and output in the dest folder
- php scripts (those without html markup) can be updated directly in the dest/scripts folder

### Prerequisites
- Node
- NPM
- Grunt & Grunt-cli
- PHP
- Git
- Ruby

If you aren't sure whether you have any of the above, in Terminal run `[name of prerequisite] -v` to get the version number (if it's installed).

### Local development
- `npm install` will get you the grunt tasks installed in a node_modules folder
- `gem install sass` will install SASS
- run `grunt` to start a php server (will open browser window pointed at localhost when ready), the `watch` task will also run to update your .hbs, .scss and .js files

### Update content
Content is templated using [Handlebars](http://handlebarsjs.com/) and compiled using [Assemble](http://assemble.io/). This is all handled via Grunt tasks, so it's important to have `grunt` running in a Terminal window.

#### Individual pages
The content for individual pages are held in src/content.

Some parts of the text are templated across multiple pages (e.g. title). So, if you wanted to update the USA User Notifications page title, you would:
- open src/content/submit-report-9.hbs
- on the "title:" line, change the text between the quote marks
If you're changing content in the top section (i.e. between the --- marks) then you must use " " around phrases. Single words do not require quotes.

You can also change a section of text that is just on one page. So, if you wanted to change the "Select time period:" text on the first submission page, you would:
- open src/content/submit-report-0.hbs
- the bottom part of the page (i.e. after the --- marks) contains html specific to that page
- find the "Select time period:" text and replace/remove it as required

#### Templates
Text that is the same across multiple pages can be found in src/templates/partials.

For example, if you wanted to change the headings in the USA and non-USA User Notifications tables, you would
- open src/templates/partials/notifications.hbs
- alter the required table heading

If you want to add a conditional piece of content (e.g. USA-only), you'll need to use Handlebars. For example, to show `<p>This is USA only</p>` you would:
- encase the content in `{{#if isUSA}}` and `{{/if}}`
- ensure the affected .hbs pages in src/content have "isUSA: true" in the section between the --- marks
- if "isUSA:" is not present on a particular .hbs page, or is marked as false, then the conditional content will not be added to that page when compiled

### Grunt tasks
[Grunt](http://gruntjs.com/) runs in the background to do the following:
- turn [SCSS](http://sass-lang.com/) to CSS ([tasks/option/sass.js](https://www.npmjs.com/package/grunt-contrib-sass))
- concatenate Javascript files ([tasks/options/concat.js](https://www.npmjs.com/package/grunt-contrib-concat))
- lint the compiled CSS files ([tasks/options/csslint.js](https://www.npmjs.com/package/grunt-contrib-csslint))
- assemble the .hbs files into PHP ([tasks/options/assemble.js](https://www.npmjs.com/package/grunt-assemble))
- run a PHP server at localhost:8000 ([tasks/options/php.js](https://www.npmjs.com/package/grunt-php))

The [watch](https://www.npmjs.com/package/grunt-contrib-watch) task (defined in tasks/options/watch.js) keeps an eye on the .hbs, .scss and .js files in the src folder. When any of those files are saved after changes it prompts tasks 1-4 to run.

There is also an [uglify](https://www.npmjs.com/package/grunt-contrib-uglify) task (defined in tasks/options/uglify.js) which will minify the Javascript files. This is currently not enabled as the site is still in development.

All of the aforementioned tasks are defined separately, then pulled into the Gruntfile.js in root. The line `grunt.registerTask('default', ['php', 'watch']);` states that a PHP server should be started and then the watch task runs.