![Moreira Development](http://moreiradevelopment.io/social/googleLogo.png)

# HTML5 Website Boilerplate
## How to use the Mdev HTML5 Boilerplate
The purpose of this Boilerplate is to deploy future ready static HTML5 websites with the power of modern web pipeline.
Assets will be exported, optimized and minified automatically as long as you follow the project structure.

#Folder Strucuter
```bash
src
├── app
│   ├── index.js
│   └── page2.js
├── img
│   ├── favicon.png
│   ├── MoreiraDevelopment.svg
│   ├── SpaceOne.jpg
│   └── SpaceTwo.jpg
├── index.html
├── js
│   ├── js_index.js
│   └── js_page2.js
├── page2.html
└── styles
    ├── buttons.scss
    ├── forms.scss
    ├── global-main.scss
    ├── icons.scss
    ├── print.scss
    ├── scaffolding.scss
    ├── typography.scss
    ├── utilities.scss
    └── variables.scss
```
It is very important to respect the folter structure  and maintain files in the right place

1. /app
... The /app folder holds the main JavaScript file for each of the templates or pages being builti.
... Each of the javascript files is responsible for importing any necessary
Styles and javascript pertinent to that page. Anything imported through here
will be passed through Webpack for processing and bundled.

2. /img
... Store all images for the templates here. Subfolders are fine - there is a
function inside ./app/index.js that crawls the folder and requires all images.
... favicon.png must be present since Webpack packages favicons through the
pipeline.

3. /js
... This is where you will store the JavaScript files you write for each of
these pages. Don't forget to import each file through the parent JavaScript file
contained in the /app folder.

4. /styles
... This folder contains all of the styles used to generate pages. You can add
new stylesheets if necessary, just make sure you add them to the load order in
the global-main.scss file.
... It is worth nothing that this project makes use of the
@moreira-development/sass-boilerplate library and therefore comes with a
plethora of useful classes already built in. [ SASS-BOILERPLATE DOCUMENTATION
](https://github.com/MoreiraDevelopment/sass-boilerplate).



## Webpack Notes
If you are new to Webpack it is probably worth taking a few hours to go read
some documentation or watch some tutorials on it. Basically Webpack is
responsible for taking all of our files and processing them to be ready for the
web.

Because of this it is important that you take note of a couple of configuration
items so you can add more pages when necessary.

1. Entry Configuration
... The "entry" configuration in Webpack is responsible for telling webpack how
many files it needs to deal with and how they are to be split.
... For our purposes you must remember to add new entrys if you want new
templates to also be compiled.

```js
  // [ ENTRY ] -----------------------/
  // Entry indicates to webpack how many
  // webpages and JS files it needs to output.
  // You must add a new entry per page, each page
  // should have it's own app/[pagename].js
  // with it's own imports.
  entry: {
    index: 'src/app/index.js',
    page2: 'src/app/page2.js'
    newTemplate: 'src/app/newTemplate.js'
  },
```

2. Output
... All of the files imported or required through the entry file will be bundled
into a CSS bundle and a JS bundle. In our case we have it configured so CSS is
bundled into a single package and JS is split into individual files per page.
... This allows us some flexibility with Javascript and loading less assets per
page.

```js
  // [ OUTPUT ] ----------------------/
  // Configuration for how Webpack is going
  // to output the files for the server.
  // Each entry above will get it's own
  // named Bundle.
  output: {
    publicPath: '/',
    filename: 'js/bundle-[name].js',
    chunkFilename: 'js/chunk.[name].js',
    path: resolve(__dirname, 'dist'),
    pathinfo: ifNotProduction()
  },
```

3. Generate HTML Output
... Webpack was designed to run with Applications, but it can be taught to work
with HTML and static sites. It just takes some clever planning. In our case, we
are using different entry points per page.
... For each entry point you add, you must also add a call to generateHtml. This
is a generator that will tell Webpack to extrat the HTML using
html-webpack-plugin for each entry point corresponding to the appropriate
template.

```
  // [ HTML OUTPUT ] ---------------
  // To get webpack to output HTML
  // you must tell it which template to use and
  // which Javascript bundle to correspond to.
  //
  // [generateHtml]----------------
  // generateHtml is a helper that genrates calls to
  // html-webpack-plugin with all the necessary
  // paramaters. All you have to do is call one
  // per template you want to compile and give it
  // the matching entrypoint and template
  //
  // [ USAGE ]------------------
  // generateHtml('entry', 'template.html'),
  //
  generateHtml('index','index.html'),
  generateHtml('page2','page2.html'),
  generateHtml('newTemplate','newTemplate.html'),
```
