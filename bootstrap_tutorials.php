<?php 
    /*
    Plugin Name: Bootstrap Tutorials
    Plugin URI: http://getbootstrap.com/
    Description: Learn bootstrap tutorials in wordpress admin panel
    Author: madiri salman aashish
    Version: 1.1
	Author URI: https://www.facebook.com/madirisalmanaashish
   
    */

	function oscimp_admin_actions() {
 
add_menu_page('Bootstrap Tutorials', 'Bootstrap Tutorials', 'manage_options', 'New Users', 'my_magic_function');
  
 
 }
 
 
 

 
 
 
 
 function my_magic_function()
 {
	

echo '
<link rel="stylesheet" href="'.plugin_dir_url( __FILE__ ).'css/bootstrap.min.css">';


echo '<script type="text/javascript" src="'.plugin_dir_url( __FILE__ ).'js/bootstrap.min.js"></script>';

echo '<script type="text/javascript" src="'.plugin_dir_url( __FILE__ ).'js/jquery.min.js"></script>';


echo "<h1>Hire me at madirisalmanaashish@gmail.com</h1>";


echo "<h1>Bootstrap CSS</h1>";

echo "<div class='container bs-docs-container'>

      <div class='row'>
        <div class='col-md-9' role='main'>
          <div class='bs-docs-section'>
  <h1 id='overview' class='page-header'>Overview</h1>

  <p class='lead'>Get the lowdown on the key pieces of Bootstrap's infrastructure, including our approach to better, faster, stronger web development.</p>

  <h2 id='overview-doctype'>HTML5 doctype</h2>
  <p>Bootstrap makes use of certain HTML elements and CSS properties that require the use of the HTML5 doctype. Include it at the beginning of all your projects.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='cp'>&lt;!DOCTYPE html&gt;</span>
<span class='nt'>&lt;html</span> <span class='na'>lang=</span><span class='s'>'en'</span><span class='nt'>&gt;</span>
  ...
<span class='nt'>&lt;/html&gt;</span></code></pre></div>

  <h2 id='overview-mobile'>Mobile first</h2>
  <p>With Bootstrap 2, we added optional mobile friendly styles for key aspects of the framework. With Bootstrap 3, we've rewritten the project to be mobile friendly from the start. Instead of adding on optional mobile styles, they're baked right into the core. In fact, <strong>Bootstrap is mobile first</strong>. Mobile first styles can be found throughout the entire library instead of in separate files.</p>
  <p>To ensure proper rendering and touch zooming, <strong>add the viewport meta tag</strong> to your <code>&lt;head&gt;</code>.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;meta</span> <span class='na'>name=</span><span class='s'>'viewport'</span> <span class='na'>content=</span><span class='s'>'width=device-width, initial-scale=1'</span><span class='nt'>&gt;</span></code></pre></div>
  <p>You can disable zooming capabilities on mobile devices by adding <code>user-scalable=no</code> to the viewport meta tag. This disables zooming, meaning users are only able to scroll, and results in your site feeling a bit more like a native application. Overall, we don't recommend this on every site, so use caution!</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;meta</span> <span class='na'>name=</span><span class='s'>'viewport'</span> <span class='na'>content=</span><span class='s'>'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'</span><span class='nt'>&gt;</span></code></pre></div>

  <h2 id='overview-type-links'>Typography and links</h2>
  <p>Bootstrap sets basic global display, typography, and link styles. Specifically, we:</p>
  <ul>
    <li>Set <code>background-color: #fff;</code> on the <code>body</code></li>
    <li>Use the <code>@font-family-base</code>, <code>@font-size-base</code>, and <code>@line-height-base</code> attributes as our typographic base</li>
    <li>Set the global link color via <code>@link-color</code> and apply link underlines only on <code>:hover</code></li>
  </ul>
  <p>These styles can be found within <code>scaffolding.less</code>.</p>

  <h2 id='overview-normalize'>Normalize.css</h2>
  <p>For improved cross-browser rendering, we use <a href='http://necolas.github.io/normalize.css/' target='_blank'>Normalize.css</a>, a project by <a href='https://twitter.com/necolas' target='_blank'>Nicolas Gallagher</a> and <a href='https://twitter.com/jon_neal' target='_blank'>Jonathan Neal</a>.</p>

  <h2 id='overview-container'>Containers</h2>
  <p>Bootstrap requires a containing element to wrap site contents and house our grid system. You may choose one of two containers to use in your projects. Note that, due to <code>padding</code> and more, neither container is nestable.</p>
  <p>Use <code>.container</code> for a responsive fixed width container.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'container'</span><span class='nt'>&gt;</span>
  ...
<span class='nt'>&lt;/div&gt;</span></code></pre></div>
  <p>Use <code>.container-fluid</code> for a full width container, spanning the entire width of your viewport.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'container-fluid'</span><span class='nt'>&gt;</span>
  ...
<span class='nt'>&lt;/div&gt;</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='grid' class='page-header'>Grid system</h1>

  <p class='lead'>Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes <a href='#grid-example-basic'>predefined classes</a> for easy layout options, as well as powerful <a href='#grid-less'>mixins for generating more semantic layouts</a>.</p>

  <h2 id='grid-intro'>Introduction</h2>
  <p>Grid systems are used for creating page layouts through a series of rows and columns that house your content. Here's how the Bootstrap grid system works:</p>
  <ul>
    <li>Rows must be placed within a <code>.container</code> (fixed-width) or <code>.container-fluid</code> (full-width) for proper alignment and padding.</li>
    <li>Use rows to create horizontal groups of columns.</li>
    <li>Content should be placed within columns, and only columns may be immediate children of rows.</li>
    <li>Predefined grid classes like <code>.row</code> and <code>.col-xs-4</code> are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.</li>
    <li>Columns create gutters (gaps between column content) via <code>padding</code>. That padding is offset in rows for the first and last column via negative margin on <code>.row</code>s.</li>
    <li>The negative margin is why the examples below are outdented. It's so that content within grid columns is lined up with non-grid content.</li>
    <li>Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three <code>.col-xs-4</code>.</li>
    <li>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</li>
    <li>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any <code>.col-md-*</code> class to an element will not only affect its styling on medium devices but also on large devices if a <code>.col-lg-*</code> class is not present.</li>
  </ul>
  <p>Look to the examples for applying these principles to your code.</p>

  <h2 id='grid-media-queries'>Media queries</h2>
  <p>We use the following media queries in our Less files to create the key breakpoints in our grid system.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='cm'>/* Extra small devices (phones, less than 768px) */</span>
<span class='cm'>/* No media query since this is the default in Bootstrap */</span>

<span class='cm'>/* Small devices (tablets, 768px and up) */</span>
<span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-sm-min</span><span class='o'>)</span> <span class='p'>{</span> <span class='nc'>...</span> <span class='p'>}</span>

<span class='cm'>/* Medium devices (desktops, 992px and up) */</span>
<span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-md-min</span><span class='o'>)</span> <span class='p'>{</span> <span class='nc'>...</span> <span class='p'>}</span>

<span class='cm'>/* Large devices (large desktops, 1200px and up) */</span>
<span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-lg-min</span><span class='o'>)</span> <span class='p'>{</span> <span class='nc'>...</span> <span class='p'>}</span></code></pre></div>
  <p>We occasionally expand on these media queries to include a <code>max-width</code> to limit CSS to a narrower set of devices.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='k'>@media</span> <span class='o'>(</span><span class='nt'>max-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-xs-max</span><span class='o'>)</span> <span class='p'>{</span> <span class='nc'>...</span> <span class='p'>}</span>
<span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-sm-min</span><span class='o'>)</span> <span class='nt'>and</span> <span class='o'>(</span><span class='nt'>max-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-sm-max</span><span class='o'>)</span> <span class='p'>{</span> <span class='nc'>...</span> <span class='p'>}</span>
<span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-md-min</span><span class='o'>)</span> <span class='nt'>and</span> <span class='o'>(</span><span class='nt'>max-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-md-max</span><span class='o'>)</span> <span class='p'>{</span> <span class='nc'>...</span> <span class='p'>}</span>
<span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-lg-min</span><span class='o'>)</span> <span class='p'>{</span> <span class='nc'>...</span> <span class='p'>}</span></code></pre></div>

  <h2 id='grid-options'>Grid options</h2>
  <p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped'>
      <thead>
        <tr>
          <th></th>
          <th>
            Extra small devices
            <small>Phones (&lt;768px)</small>
          </th>
          <th>
            Small devices
            <small>Tablets (&ge;768px)</small>
          </th>
          <th>
            Medium devices
            <small>Desktops (&ge;992px)</small>
          </th>
          <th>
            Large devices
            <small>Desktops (&ge;1200px)</small>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class='text-nowrap' scope='row'>Grid behavior</th>
          <td>Horizontal at all times</td>
          <td colspan='3'>Collapsed to start, horizontal above breakpoints</td>
        </tr>
        <tr>
          <th class='text-nowrap' scope='row'>Container width</th>
          <td>None (auto)</td>
          <td>750px</td>
          <td>970px</td>
          <td>1170px</td>
        </tr>
        <tr>
          <th class='text-nowrap' scope='row'>Class prefix</th>
          <td><code>.col-xs-</code></td>
          <td><code>.col-sm-</code></td>
          <td><code>.col-md-</code></td>
          <td><code>.col-lg-</code></td>
        </tr>
        <tr>
          <th class='text-nowrap' scope='row'># of columns</th>
          <td colspan='4'>12</td>
        </tr>
        <tr>
          <th class='text-nowrap' scope='row'>Column width</th>
          <td class='text-muted'>Auto</td>
          <td>~62px</td>
          <td>~81px</td>
          <td>~97px</td>
        </tr>
        <tr>
          <th class='text-nowrap' scope='row'>Gutter width</th>
          <td colspan='4'>30px (15px on each side of a column)</td>
        </tr>
        <tr>
          <th class='text-nowrap' scope='row'>Nestable</th>
          <td colspan='4'>Yes</td>
        </tr>
        <tr>
          <th class='text-nowrap' scope='row'>Offsets</th>
          <td colspan='4'>Yes</td>
        </tr>
        <tr>
          <th class='text-nowrap' scope='row'>Column ordering</th>
          <td colspan='4'>Yes</td>
        </tr>
      </tbody>
    </table>
  </div>

  <h2 id='grid-example-basic'>Example: Stacked-to-horizontal</h2>
  <p>Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.</p>
  <div class='bs-docs-grid'>
    <div class='row show-grid'>
      <div class='col-md-1'>.col-md-1</div>
      <div class='col-md-1'>.col-md-1</div>
      <div class='col-md-1'>.col-md-1</div>
      <div class='col-md-1'>.col-md-1</div>
      <div class='col-md-1'>.col-md-1</div>
      <div class='col-md-1'>.col-md-1</div>
      <div class='col-md-1'>.col-md-1</div>
      <div class='col-md-1'>.col-md-1</div>
      <div class='col-md-1'>.col-md-1</div>
      <div class='col-md-1'>.col-md-1</div>
      <div class='col-md-1'>.col-md-1</div>
      <div class='col-md-1'>.col-md-1</div>
    </div>
    <div class='row show-grid'>
      <div class='col-md-8'>.col-md-8</div>
      <div class='col-md-4'>.col-md-4</div>
    </div>
    <div class='row show-grid'>
      <div class='col-md-4'>.col-md-4</div>
      <div class='col-md-4'>.col-md-4</div>
      <div class='col-md-4'>.col-md-4</div>
    </div>
    <div class='row show-grid'>
      <div class='col-md-6'>.col-md-6</div>
      <div class='col-md-6'>.col-md-6</div>
    </div>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-1'</span><span class='nt'>&gt;</span>.col-md-1<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-1'</span><span class='nt'>&gt;</span>.col-md-1<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-1'</span><span class='nt'>&gt;</span>.col-md-1<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-1'</span><span class='nt'>&gt;</span>.col-md-1<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-1'</span><span class='nt'>&gt;</span>.col-md-1<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-1'</span><span class='nt'>&gt;</span>.col-md-1<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-1'</span><span class='nt'>&gt;</span>.col-md-1<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-1'</span><span class='nt'>&gt;</span>.col-md-1<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-1'</span><span class='nt'>&gt;</span>.col-md-1<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-1'</span><span class='nt'>&gt;</span>.col-md-1<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-1'</span><span class='nt'>&gt;</span>.col-md-1<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-1'</span><span class='nt'>&gt;</span>.col-md-1<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-8'</span><span class='nt'>&gt;</span>.col-md-8<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-4'</span><span class='nt'>&gt;</span>.col-md-4<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-4'</span><span class='nt'>&gt;</span>.col-md-4<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-4'</span><span class='nt'>&gt;</span>.col-md-4<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-4'</span><span class='nt'>&gt;</span>.col-md-4<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-6'</span><span class='nt'>&gt;</span>.col-md-6<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-6'</span><span class='nt'>&gt;</span>.col-md-6<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h2 id='grid-example-fluid'>Example: Fluid container</h2>
  <p>Turn any fixed-width grid layout into a full-width layout by changing your outermost <code>.container</code> to <code>.container-fluid</code>.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'container-fluid'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
    ...
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h2 id='grid-example-mixed'>Example: Mobile and desktop</h2>
  <p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
  <div class='bs-docs-grid'>
    <div class='row show-grid'>
      <div class='col-xs-12 col-md-8'>.col-xs-12 .col-md-8</div>
      <div class='col-xs-6 col-md-4'>.col-xs-6 .col-md-4</div>
    </div>
    <div class='row show-grid'>
      <div class='col-xs-6 col-md-4'>.col-xs-6 .col-md-4</div>
      <div class='col-xs-6 col-md-4'>.col-xs-6 .col-md-4</div>
      <div class='col-xs-6 col-md-4'>.col-xs-6 .col-md-4</div>
    </div>
    <div class='row show-grid'>
      <div class='col-xs-6'>.col-xs-6</div>
      <div class='col-xs-6'>.col-xs-6</div>
    </div>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='c'>&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-12 col-md-8'</span><span class='nt'>&gt;</span>.col-xs-12 .col-md-8<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6 col-md-4'</span><span class='nt'>&gt;</span>.col-xs-6 .col-md-4<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span>

<span class='c'>&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6 col-md-4'</span><span class='nt'>&gt;</span>.col-xs-6 .col-md-4<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6 col-md-4'</span><span class='nt'>&gt;</span>.col-xs-6 .col-md-4<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6 col-md-4'</span><span class='nt'>&gt;</span>.col-xs-6 .col-md-4<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span>

<span class='c'>&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6'</span><span class='nt'>&gt;</span>.col-xs-6<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6'</span><span class='nt'>&gt;</span>.col-xs-6<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h2 id='grid-example-mixed-complete'>Example: Mobile, tablet, desktop</h2>
  <p>Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</p>
  <div class='bs-docs-grid'>
    <div class='row show-grid'>
      <div class='col-xs-12 col-sm-6 col-md-8'>.col-xs-12 .col-sm-6 .col-md-8</div>
      <div class='col-xs-6 col-md-4'>.col-xs-6 .col-md-4</div>
    </div>
    <div class='row show-grid'>
      <div class='col-xs-6 col-sm-4'>.col-xs-6 .col-sm-4</div>
      <div class='col-xs-6 col-sm-4'>.col-xs-6 .col-sm-4</div>
      <!-- Optional: clear the XS cols if their content doesn't match in height -->
      <div class='clearfix visible-xs-block'></div>
      <div class='col-xs-6 col-sm-4'>.col-xs-6 .col-sm-4</div>
    </div>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-12 col-sm-6 col-md-8'</span><span class='nt'>&gt;</span>.col-xs-12 .col-sm-6 .col-md-8<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6 col-md-4'</span><span class='nt'>&gt;</span>.col-xs-6 .col-md-4<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6 col-sm-4'</span><span class='nt'>&gt;</span>.col-xs-6 .col-sm-4<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6 col-sm-4'</span><span class='nt'>&gt;</span>.col-xs-6 .col-sm-4<span class='nt'>&lt;/div&gt;</span>
  <span class='c'>&lt;!-- Optional: clear the XS cols if their content doesn't match in height --&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'clearfix visible-xs-block'</span><span class='nt'>&gt;&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6 col-sm-4'</span><span class='nt'>&gt;</span>.col-xs-6 .col-sm-4<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h2 id='grid-example-wrapping'>Example: Column wrapping</h2>
  <p>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</p>
  <div class='bs-docs-grid'>
    <div class='row show-grid'>
      <div class='col-xs-9'>.col-xs-9</div>
      <div class='col-xs-4'>.col-xs-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
      <div class='col-xs-6'>.col-xs-6<br>Subsequent columns continue along the new line.</div>
    </div>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-9'</span><span class='nt'>&gt;</span>.col-xs-9<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-4'</span><span class='nt'>&gt;</span>.col-xs-4<span class='nt'>&lt;br&gt;</span>Since 9 + 4 = 13 <span class='ni'>&amp;gt;</span> 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6'</span><span class='nt'>&gt;</span>.col-xs-6<span class='nt'>&lt;br&gt;</span>Subsequent columns continue along the new line.<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h2 id='grid-responsive-resets'>Responsive column resets</h2>
  <p>With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code> and our <a href='#responsive-utilities'>responsive utility classes</a>.</p>
  <div class='bs-docs-grid'>
    <div class='row show-grid'>
      <div class='col-xs-6 col-sm-3'>
        .col-xs-6 .col-sm-3
        <br>
        Resize your viewport or check it out on your phone for an example.
      </div>
      <div class='col-xs-6 col-sm-3'>.col-xs-6 .col-sm-3</div>

      <!-- Add the extra clearfix for only the required viewport -->
      <div class='clearfix visible-xs-block'></div>

      <div class='col-xs-6 col-sm-3'>.col-xs-6 .col-sm-3</div>
      <div class='col-xs-6 col-sm-3'>.col-xs-6 .col-sm-3</div>
    </div>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6 col-sm-3'</span><span class='nt'>&gt;</span>.col-xs-6 .col-sm-3<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6 col-sm-3'</span><span class='nt'>&gt;</span>.col-xs-6 .col-sm-3<span class='nt'>&lt;/div&gt;</span>

  <span class='c'>&lt;!-- Add the extra clearfix for only the required viewport --&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'clearfix visible-xs-block'</span><span class='nt'>&gt;&lt;/div&gt;</span>

  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6 col-sm-3'</span><span class='nt'>&gt;</span>.col-xs-6 .col-sm-3<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-6 col-sm-3'</span><span class='nt'>&gt;</span>.col-xs-6 .col-sm-3<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>
  <p>In addition to column clearing at responsive breakpoints, you may need to <strong>reset offsets, pushes, or pulls</strong>. See this in action in <a href='../examples/grid/'>the grid example</a>.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-5 col-md-6'</span><span class='nt'>&gt;</span>.col-sm-5 .col-md-6<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0'</span><span class='nt'>&gt;</span>.col-sm-5 .col-sm-offset-2 .col-md-6 .col-md-offset-0<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span>

<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-6 col-md-5 col-lg-6'</span><span class='nt'>&gt;</span>.col-sm-6 .col-md-5 .col-lg-6<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0'</span><span class='nt'>&gt;</span>.col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>


  <h2 id='grid-offsetting'>Offsetting columns</h2>
  <p>Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code> over four columns.</p>
  <div class='bs-docs-grid'>
    <div class='row show-grid'>
      <div class='col-md-4'>.col-md-4</div>
      <div class='col-md-4 col-md-offset-4'>.col-md-4 .col-md-offset-4</div>
    </div>
    <div class='row show-grid'>
      <div class='col-md-3 col-md-offset-3'>.col-md-3 .col-md-offset-3</div>
      <div class='col-md-3 col-md-offset-3'>.col-md-3 .col-md-offset-3</div>
    </div>
    <div class='row show-grid'>
      <div class='col-md-6 col-md-offset-3'>.col-md-6 .col-md-offset-3</div>
    </div>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-4'</span><span class='nt'>&gt;</span>.col-md-4<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-4 col-md-offset-4'</span><span class='nt'>&gt;</span>.col-md-4 .col-md-offset-4<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-3 col-md-offset-3'</span><span class='nt'>&gt;</span>.col-md-3 .col-md-offset-3<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-3 col-md-offset-3'</span><span class='nt'>&gt;</span>.col-md-3 .col-md-offset-3<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-6 col-md-offset-3'</span><span class='nt'>&gt;</span>.col-md-6 .col-md-offset-3<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>


  <h2 id='grid-nesting'>Nesting columns</h2>
  <p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-sm-*</code> columns within an existing <code>.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).</p>
  <div class='row show-grid'>
    <div class='col-sm-9'>
      Level 1: .col-sm-9
      <div class='row show-grid'>
        <div class='col-xs-8 col-sm-6'>
          Level 2: .col-xs-8 .col-sm-6
        </div>
        <div class='col-xs-4 col-sm-6'>
          Level 2: .col-xs-4 .col-sm-6
        </div>
      </div>
    </div>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-9'</span><span class='nt'>&gt;</span>
    Level 1: .col-sm-9
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-8 col-sm-6'</span><span class='nt'>&gt;</span>
        Level 2: .col-xs-8 .col-sm-6
      <span class='nt'>&lt;/div&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-4 col-sm-6'</span><span class='nt'>&gt;</span>
        Level 2: .col-xs-4 .col-sm-6
      <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h2 id='grid-column-ordering'>Column ordering</h2>
  <p>Easily change the order of our built-in grid columns with <code>.col-md-push-*</code> and <code>.col-md-pull-*</code> modifier classes.</p>
  <div class='row show-grid'>
    <div class='col-md-9 col-md-push-3'>.col-md-9 .col-md-push-3</div>
    <div class='col-md-3 col-md-pull-9'>.col-md-3 .col-md-pull-9</div>
  </div>

<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-9 col-md-push-3'</span><span class='nt'>&gt;</span>.col-md-9 .col-md-push-3<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-3 col-md-pull-9'</span><span class='nt'>&gt;</span>.col-md-3 .col-md-pull-9<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h2 id='grid-less'>Less mixins and variables</h2>
  <p>In addition to <a href='#grid-example-basic'>prebuilt grid classes</a> for fast layouts, Bootstrap includes Less variables and mixins for quickly generating your own simple, semantic layouts.</p>

  <h3>Variables</h3>
  <p>Variables determine the number of columns, the gutter width, and the media query point at which to begin floating columns. We use these to generate the predefined grid classes documented above, as well as for the custom mixins listed below.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='k'>@grid-columns</span><span class='nd'>:</span>              <span class='nt'>12</span><span class='p'>;</span>
<span class='k'>@grid-gutter-width</span><span class='nd'>:</span>         <span class='nt'>30px</span><span class='p'>;</span>
<span class='k'>@grid-float-breakpoint</span><span class='nd'>:</span>     <span class='nt'>768px</span><span class='p'>;</span></code></pre></div>

  <h3>Mixins</h3>
  <p>Mixins are used in conjunction with the grid variables to generate semantic CSS for individual grid columns.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='c1'>// Creates a wrapper for a series of columns
</span><span class='err'>.</span><span class='na'>make-row</span><span class='err'>(@</span><span class='na'>gutter</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>grid-gutter-width</span><span class='p'>)</span> <span class='p'>{</span>
  <span class='c1'>// Then clear the floated columns
</span>  <span class='nc'>.clearfix</span><span class='o'>()</span><span class='p'>;</span>

  <span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-sm-min</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>margin-left</span><span class='p'>:</span>  <span class='p'>(</span><span class='o'>@</span><span class='n'>gutter</span> <span class='o'>/</span> <span class='m'>-2</span><span class='p'>);</span>
    <span class='nl'>margin-right</span><span class='p'>:</span> <span class='p'>(</span><span class='o'>@</span><span class='n'>gutter</span> <span class='o'>/</span> <span class='m'>-2</span><span class='p'>);</span>
  <span class='p'>}</span>

  <span class='c1'>// Negative margin nested rows out to align the content of columns
</span>  <span class='nc'>.row</span> <span class='p'>{</span>
    <span class='nl'>margin-left</span><span class='p'>:</span>  <span class='p'>(</span><span class='o'>@</span><span class='n'>gutter</span> <span class='o'>/</span> <span class='m'>-2</span><span class='p'>);</span>
    <span class='nl'>margin-right</span><span class='p'>:</span> <span class='p'>(</span><span class='o'>@</span><span class='n'>gutter</span> <span class='o'>/</span> <span class='m'>-2</span><span class='p'>);</span>
  <span class='p'>}</span>
<span class='p'>}</span>

<span class='c1'>// Generate the extra small columns
</span><span class='nc'>.make-xs-column</span><span class='o'>(@</span><span class='nt'>columns</span><span class='p'>;</span> <span class='k'>@gutter</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>grid-gutter-width</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='nl'>position</span><span class='p'>:</span> <span class='nb'>relative</span><span class='p'>;</span>
  <span class='c1'>// Prevent columns from collapsing when empty
</span>  <span class='nl'>min-height</span><span class='p'>:</span> <span class='m'>1px</span><span class='p'>;</span>
  <span class='c1'>// Inner gutter via padding
</span>  <span class='nl'>padding-left</span><span class='p'>:</span>  <span class='p'>(</span><span class='o'>@</span><span class='n'>gutter</span> <span class='o'>/</span> <span class='m'>2</span><span class='p'>);</span>
  <span class='nl'>padding-right</span><span class='p'>:</span> <span class='p'>(</span><span class='o'>@</span><span class='n'>gutter</span> <span class='o'>/</span> <span class='m'>2</span><span class='p'>);</span>

  <span class='c1'>// Calculate width based on number of columns available
</span>  <span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>grid-float-breakpoint</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>float</span><span class='p'>:</span> <span class='nb'>left</span><span class='p'>;</span>
    <span class='nl'>width</span><span class='p'>:</span> <span class='nf'>percentage</span><span class='p'>((</span><span class='o'>@</span><span class='n'>columns</span> <span class='o'>/</span> <span class='o'>@</span><span class='n'>grid-columns</span><span class='p'>));</span>
  <span class='p'>}</span>
<span class='p'>}</span>

<span class='c1'>// Generate the small columns
</span><span class='nc'>.make-sm-column</span><span class='o'>(@</span><span class='nt'>columns</span><span class='p'>;</span> <span class='k'>@gutter</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>grid-gutter-width</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='nl'>position</span><span class='p'>:</span> <span class='nb'>relative</span><span class='p'>;</span>
  <span class='c1'>// Prevent columns from collapsing when empty
</span>  <span class='nl'>min-height</span><span class='p'>:</span> <span class='m'>1px</span><span class='p'>;</span>
  <span class='c1'>// Inner gutter via padding
</span>  <span class='nl'>padding-left</span><span class='p'>:</span>  <span class='p'>(</span><span class='o'>@</span><span class='n'>gutter</span> <span class='o'>/</span> <span class='m'>2</span><span class='p'>);</span>
  <span class='nl'>padding-right</span><span class='p'>:</span> <span class='p'>(</span><span class='o'>@</span><span class='n'>gutter</span> <span class='o'>/</span> <span class='m'>2</span><span class='p'>);</span>

  <span class='c1'>// Calculate width based on number of columns available
</span>  <span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-sm-min</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>float</span><span class='p'>:</span> <span class='nb'>left</span><span class='p'>;</span>
    <span class='nl'>width</span><span class='p'>:</span> <span class='nf'>percentage</span><span class='p'>((</span><span class='o'>@</span><span class='n'>columns</span> <span class='o'>/</span> <span class='o'>@</span><span class='n'>grid-columns</span><span class='p'>));</span>
  <span class='p'>}</span>
<span class='p'>}</span>

<span class='c1'>// Generate the small column offsets
</span><span class='nc'>.make-sm-column-offset</span><span class='o'>(@</span><span class='nt'>columns</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-sm-min</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>margin-left</span><span class='p'>:</span> <span class='nf'>percentage</span><span class='p'>((</span><span class='o'>@</span><span class='n'>columns</span> <span class='o'>/</span> <span class='o'>@</span><span class='n'>grid-columns</span><span class='p'>));</span>
  <span class='p'>}</span>
<span class='p'>}</span>
<span class='nc'>.make-sm-column-push</span><span class='o'>(@</span><span class='nt'>columns</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-sm-min</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>left</span><span class='p'>:</span> <span class='nf'>percentage</span><span class='p'>((</span><span class='o'>@</span><span class='n'>columns</span> <span class='o'>/</span> <span class='o'>@</span><span class='n'>grid-columns</span><span class='p'>));</span>
  <span class='p'>}</span>
<span class='p'>}</span>
<span class='nc'>.make-sm-column-pull</span><span class='o'>(@</span><span class='nt'>columns</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-sm-min</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>right</span><span class='p'>:</span> <span class='nf'>percentage</span><span class='p'>((</span><span class='o'>@</span><span class='n'>columns</span> <span class='o'>/</span> <span class='o'>@</span><span class='n'>grid-columns</span><span class='p'>));</span>
  <span class='p'>}</span>
<span class='p'>}</span>

<span class='c1'>// Generate the medium columns
</span><span class='nc'>.make-md-column</span><span class='o'>(@</span><span class='nt'>columns</span><span class='p'>;</span> <span class='k'>@gutter</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>grid-gutter-width</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='nl'>position</span><span class='p'>:</span> <span class='nb'>relative</span><span class='p'>;</span>
  <span class='c1'>// Prevent columns from collapsing when empty
</span>  <span class='nl'>min-height</span><span class='p'>:</span> <span class='m'>1px</span><span class='p'>;</span>
  <span class='c1'>// Inner gutter via padding
</span>  <span class='nl'>padding-left</span><span class='p'>:</span>  <span class='p'>(</span><span class='o'>@</span><span class='n'>gutter</span> <span class='o'>/</span> <span class='m'>2</span><span class='p'>);</span>
  <span class='nl'>padding-right</span><span class='p'>:</span> <span class='p'>(</span><span class='o'>@</span><span class='n'>gutter</span> <span class='o'>/</span> <span class='m'>2</span><span class='p'>);</span>

  <span class='c1'>// Calculate width based on number of columns available
</span>  <span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-md-min</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>float</span><span class='p'>:</span> <span class='nb'>left</span><span class='p'>;</span>
    <span class='nl'>width</span><span class='p'>:</span> <span class='nf'>percentage</span><span class='p'>((</span><span class='o'>@</span><span class='n'>columns</span> <span class='o'>/</span> <span class='o'>@</span><span class='n'>grid-columns</span><span class='p'>));</span>
  <span class='p'>}</span>
<span class='p'>}</span>

<span class='c1'>// Generate the medium column offsets
</span><span class='nc'>.make-md-column-offset</span><span class='o'>(@</span><span class='nt'>columns</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-md-min</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>margin-left</span><span class='p'>:</span> <span class='nf'>percentage</span><span class='p'>((</span><span class='o'>@</span><span class='n'>columns</span> <span class='o'>/</span> <span class='o'>@</span><span class='n'>grid-columns</span><span class='p'>));</span>
  <span class='p'>}</span>
<span class='p'>}</span>
<span class='nc'>.make-md-column-push</span><span class='o'>(@</span><span class='nt'>columns</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-md-min</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>left</span><span class='p'>:</span> <span class='nf'>percentage</span><span class='p'>((</span><span class='o'>@</span><span class='n'>columns</span> <span class='o'>/</span> <span class='o'>@</span><span class='n'>grid-columns</span><span class='p'>));</span>
  <span class='p'>}</span>
<span class='p'>}</span>
<span class='nc'>.make-md-column-pull</span><span class='o'>(@</span><span class='nt'>columns</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-md-min</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>right</span><span class='p'>:</span> <span class='nf'>percentage</span><span class='p'>((</span><span class='o'>@</span><span class='n'>columns</span> <span class='o'>/</span> <span class='o'>@</span><span class='n'>grid-columns</span><span class='p'>));</span>
  <span class='p'>}</span>
<span class='p'>}</span>

<span class='c1'>// Generate the large columns
</span><span class='nc'>.make-lg-column</span><span class='o'>(@</span><span class='nt'>columns</span><span class='p'>;</span> <span class='k'>@gutter</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>grid-gutter-width</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='nl'>position</span><span class='p'>:</span> <span class='nb'>relative</span><span class='p'>;</span>
  <span class='c1'>// Prevent columns from collapsing when empty
</span>  <span class='nl'>min-height</span><span class='p'>:</span> <span class='m'>1px</span><span class='p'>;</span>
  <span class='c1'>// Inner gutter via padding
</span>  <span class='nl'>padding-left</span><span class='p'>:</span>  <span class='p'>(</span><span class='o'>@</span><span class='n'>gutter</span> <span class='o'>/</span> <span class='m'>2</span><span class='p'>);</span>
  <span class='nl'>padding-right</span><span class='p'>:</span> <span class='p'>(</span><span class='o'>@</span><span class='n'>gutter</span> <span class='o'>/</span> <span class='m'>2</span><span class='p'>);</span>

  <span class='c1'>// Calculate width based on number of columns available
</span>  <span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-lg-min</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>float</span><span class='p'>:</span> <span class='nb'>left</span><span class='p'>;</span>
    <span class='nl'>width</span><span class='p'>:</span> <span class='nf'>percentage</span><span class='p'>((</span><span class='o'>@</span><span class='n'>columns</span> <span class='o'>/</span> <span class='o'>@</span><span class='n'>grid-columns</span><span class='p'>));</span>
  <span class='p'>}</span>
<span class='p'>}</span>

<span class='c1'>// Generate the large column offsets
</span><span class='nc'>.make-lg-column-offset</span><span class='o'>(@</span><span class='nt'>columns</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-lg-min</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>margin-left</span><span class='p'>:</span> <span class='nf'>percentage</span><span class='p'>((</span><span class='o'>@</span><span class='n'>columns</span> <span class='o'>/</span> <span class='o'>@</span><span class='n'>grid-columns</span><span class='p'>));</span>
  <span class='p'>}</span>
<span class='p'>}</span>
<span class='nc'>.make-lg-column-push</span><span class='o'>(@</span><span class='nt'>columns</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-lg-min</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>left</span><span class='p'>:</span> <span class='nf'>percentage</span><span class='p'>((</span><span class='o'>@</span><span class='n'>columns</span> <span class='o'>/</span> <span class='o'>@</span><span class='n'>grid-columns</span><span class='p'>));</span>
  <span class='p'>}</span>
<span class='p'>}</span>
<span class='nc'>.make-lg-column-pull</span><span class='o'>(@</span><span class='nt'>columns</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='k'>@media</span> <span class='o'>(</span><span class='nt'>min-width</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>screen-lg-min</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>right</span><span class='p'>:</span> <span class='nf'>percentage</span><span class='p'>((</span><span class='o'>@</span><span class='n'>columns</span> <span class='o'>/</span> <span class='o'>@</span><span class='n'>grid-columns</span><span class='p'>));</span>
  <span class='p'>}</span>
<span class='p'>}</span></code></pre></div>

  <h3>Example usage</h3>
  <p>You can modify the variables to your own custom values, or just use the mixins with their default values. Here's an example of using the default settings to create a two-column layout with a gap between.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='nc'>.wrapper</span> <span class='p'>{</span>
  <span class='nc'>.make-row</span><span class='o'>()</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.content-main</span> <span class='p'>{</span>
  <span class='nc'>.make-lg-column</span><span class='o'>(</span><span class='nt'>8</span><span class='o'>)</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.content-secondary</span> <span class='p'>{</span>
  <span class='nc'>.make-lg-column</span><span class='o'>(</span><span class='nt'>3</span><span class='o'>)</span><span class='p'>;</span>
  <span class='nc'>.make-lg-column-offset</span><span class='o'>(</span><span class='nt'>1</span><span class='o'>)</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'wrapper'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'content-main'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'content-secondary'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='type' class='page-header'>Typography</h1>

  <!-- Headings -->
  <h2 id='type-headings'>Headings</h2>
  <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but still want your text to be displayed inline.</p>
  <div class='bs-example bs-example-type' data-example-id='simple-headings'>
    <table class='table'>
      <tbody>
        <tr>
          <td><h1>h1. Bootstrap heading</h1></td>
          <td class='type-info'>Semibold 36px</td>
        </tr>
        <tr>
          <td><h2>h2. Bootstrap heading</h2></td>
          <td class='type-info'>Semibold 30px</td>
        </tr>
        <tr>
          <td><h3>h3. Bootstrap heading</h3></td>
          <td class='type-info'>Semibold 24px</td>
        </tr>
        <tr>
          <td><h4>h4. Bootstrap heading</h4></td>
          <td class='type-info'>Semibold 18px</td>
        </tr>
        <tr>
          <td><h5>h5. Bootstrap heading</h5></td>
          <td class='type-info'>Semibold 14px</td>
        </tr>
        <tr>
          <td><h6>h6. Bootstrap heading</h6></td>
          <td class='type-info'>Semibold 12px</td>
        </tr>
      </tbody>
    </table>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;h1&gt;</span>h1. Bootstrap heading<span class='nt'>&lt;/h1&gt;</span>
<span class='nt'>&lt;h2&gt;</span>h2. Bootstrap heading<span class='nt'>&lt;/h2&gt;</span>
<span class='nt'>&lt;h3&gt;</span>h3. Bootstrap heading<span class='nt'>&lt;/h3&gt;</span>
<span class='nt'>&lt;h4&gt;</span>h4. Bootstrap heading<span class='nt'>&lt;/h4&gt;</span>
<span class='nt'>&lt;h5&gt;</span>h5. Bootstrap heading<span class='nt'>&lt;/h5&gt;</span>
<span class='nt'>&lt;h6&gt;</span>h6. Bootstrap heading<span class='nt'>&lt;/h6&gt;</span></code></pre></div>

  <p>Create lighter, secondary text in any heading with a generic <code>&lt;small&gt;</code> tag or the <code>.small</code> class.</p>
  <div class='bs-example bs-example-type' data-example-id='small-headings'>
    <table class='table'>
      <tbody>
        <tr>
          <td><h1>h1. Bootstrap heading <small>Secondary text</small></h1></td>
        </tr>
        <tr>
          <td><h2>h2. Bootstrap heading <small>Secondary text</small></h2></td>
        </tr>
        <tr>
          <td><h3>h3. Bootstrap heading <small>Secondary text</small></h3></td>
        </tr>
        <tr>
          <td><h4>h4. Bootstrap heading <small>Secondary text</small></h4></td>
        </tr>
        <tr>
          <td><h5>h5. Bootstrap heading <small>Secondary text</small></h5></td>
        </tr>
        <tr>
          <td><h6>h6. Bootstrap heading <small>Secondary text</small></h6></td>
        </tr>
      </tbody>
    </table>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;h1&gt;</span>h1. Bootstrap heading <span class='nt'>&lt;small&gt;</span>Secondary text<span class='nt'>&lt;/small&gt;&lt;/h1&gt;</span>
<span class='nt'>&lt;h2&gt;</span>h2. Bootstrap heading <span class='nt'>&lt;small&gt;</span>Secondary text<span class='nt'>&lt;/small&gt;&lt;/h2&gt;</span>
<span class='nt'>&lt;h3&gt;</span>h3. Bootstrap heading <span class='nt'>&lt;small&gt;</span>Secondary text<span class='nt'>&lt;/small&gt;&lt;/h3&gt;</span>
<span class='nt'>&lt;h4&gt;</span>h4. Bootstrap heading <span class='nt'>&lt;small&gt;</span>Secondary text<span class='nt'>&lt;/small&gt;&lt;/h4&gt;</span>
<span class='nt'>&lt;h5&gt;</span>h5. Bootstrap heading <span class='nt'>&lt;small&gt;</span>Secondary text<span class='nt'>&lt;/small&gt;&lt;/h5&gt;</span>
<span class='nt'>&lt;h6&gt;</span>h6. Bootstrap heading <span class='nt'>&lt;small&gt;</span>Secondary text<span class='nt'>&lt;/small&gt;&lt;/h6&gt;</span></code></pre></div>


  <!-- Body copy -->
  <h2 id='type-body-copy'>Body copy</h2>
  <p>Bootstrap's global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>1.428</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their computed line-height (10px by default).</p>
  <div class='bs-example' data-example-id='body-copy'>
    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;p&gt;</span>...<span class='nt'>&lt;/p&gt;</span></code></pre></div>

  <!-- Body copy .lead -->
  <h3>Lead body copy</h3>
  <p>Make a paragraph stand out by adding <code>.lead</code>.</p>
  <div class='bs-example' data-example-id='lead-copy'>
    <p class='lead'>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'lead'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/p&gt;</span></code></pre></div>

  <!-- Using Less -->
  <h3>Built with Less</h3>
  <p>The typographic scale is based on two Less variables in <strong>variables.less</strong>: <code>@font-size-base</code> and <code>@line-height-base</code>. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.</p>

  <!-- Inline text elements -->
  <h2 id='type-inline-text'>Inline text elements</h2>
  <h3>Marked text</h3>
  <p>For highlighting a run of text due to its relevance in another context, use the <code>&lt;mark&gt;</code> tag.</p>
  <div class='bs-example' data-example-id='simple-mark'>
    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'>You can use the mark tag to <span class='nt'>&lt;mark&gt;</span>highlight<span class='nt'>&lt;/mark&gt;</span> text.</code></pre></div>


  <h3>Deleted text</h3>
  <p>For indicating blocks of text that have been deleted use the <code>&lt;del&gt;</code> tag.</p>
  <div class='bs-example' data-example-id='simple-del'>
    <p><del>This line of text is meant to be treated as deleted text.</del></p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;del&gt;</span>This line of text is meant to be treated as deleted text.<span class='nt'>&lt;/del&gt;</span></code></pre></div>

  <h3>Strikethrough text</h3>
  <p>For indicating blocks of text that are no longer relevant use the <code>&lt;s&gt;</code> tag.</p>
  <div class='bs-example' data-example-id='simple-s'>
    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;s&gt;</span>This line of text is meant to be treated as no longer accurate.<span class='nt'>&lt;/s&gt;</span></code></pre></div>

  <h3>Inserted text</h3>
  <p>For indicating additions to the document use the <code>&lt;ins&gt;</code> tag.</p>
  <div class='bs-example' data-example-id='simple-ins'>
    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;ins&gt;</span>This line of text is meant to be treated as an addition to the document.<span class='nt'>&lt;/ins&gt;</span></code></pre></div>

  <h3>Underlined text</h3>
  <p>To underline text use the <code>&lt;u&gt;</code> tag.</p>
  <div class='bs-example' data-example-id='simple-u'>
    <p><u>This line of text will render as underlined</u></p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;u&gt;</span>This line of text will render as underlined<span class='nt'>&lt;/u&gt;</span></code></pre></div>

  <p>Make use of HTML's default emphasis tags with lightweight styles.</p>

  <h3>Small text</h3>
  <p>For de-emphasizing inline or blocks of text, use the <code>&lt;small&gt;</code> tag to set text at 85% the size of the parent. Heading elements receive their own <code>font-size</code> for nested <code>&lt;small&gt;</code> elements.</p>
  <p>You may alternatively use an inline element with <code>.small</code> in place of any <code>&lt;small&gt;</code>.</p>
  <div class='bs-example' data-example-id='simple-small'>
    <p><small>This line of text is meant to be treated as fine print.</small></p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;small&gt;</span>This line of text is meant to be treated as fine print.<span class='nt'>&lt;/small&gt;</span></code></pre></div>


  <h3>Bold</h3>
  <p>For emphasizing a snippet of text with a heavier font-weight.</p>
  <div class='bs-example' data-example-id='simple-strong'>
    <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;strong&gt;</span>rendered as bold text<span class='nt'>&lt;/strong&gt;</span></code></pre></div>

  <h3>Italics</h3>
  <p>For emphasizing a snippet of text with italics.</p>
  <div class='bs-example' data-example-id='simple-em'>
    <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;em&gt;</span>rendered as italicized text<span class='nt'>&lt;/em&gt;</span></code></pre></div>

  <div class='bs-callout bs-callout-info' id='callout-type-b-i-elems'>
    <h4>Alternate elements</h4>
    <p>Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
  </div>

  <h2 id='type-alignment'>Alignment classes</h2>
  <p>Easily realign text to components with text alignment classes.</p>
  <div class='bs-example' data-example-id='text-alignment'>
    <p class='text-left'>Left aligned text.</p>
    <p class='text-center'>Center aligned text.</p>
    <p class='text-right'>Right aligned text.</p>
    <p class='text-justify'>Justified text.</p>
    <p class='text-nowrap'>No wrap text.</p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'text-left'</span><span class='nt'>&gt;</span>Left aligned text.<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'text-center'</span><span class='nt'>&gt;</span>Center aligned text.<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'text-right'</span><span class='nt'>&gt;</span>Right aligned text.<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'text-justify'</span><span class='nt'>&gt;</span>Justified text.<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'text-nowrap'</span><span class='nt'>&gt;</span>No wrap text.<span class='nt'>&lt;/p&gt;</span></code></pre></div>

  <h2 id='type-transformation'>Transformation classes</h2>
  <p>Transform text in components with text capitalization classes.</p>
  <div class='bs-example' data-example-id='text-capitalization'>
    <p class='text-lowercase'>Lowercased text.</p>
    <p class='text-uppercase'>Uppercased text.</p>
    <p class='text-capitalize'>Capitalized text.</p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'text-lowercase'</span><span class='nt'>&gt;</span>Lowercased text.<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'text-uppercase'</span><span class='nt'>&gt;</span>Uppercased text.<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'text-capitalize'</span><span class='nt'>&gt;</span>Capitalized text.<span class='nt'>&lt;/p&gt;</span></code></pre></div>

  <!-- Abbreviations -->
  <h2 id='type-abbreviations'>Abbreviations</h2>
  <p>Stylized implementation of HTML's <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover and to users of assistive technologies.</p>

  <h3>Basic abbreviation</h3>
  <div class='bs-example' data-example-id='simple-abbr'>
    <p>An abbreviation of the word attribute is <abbr title='attribute'>attr</abbr>.</p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;abbr</span> <span class='na'>title=</span><span class='s'>'attribute'</span><span class='nt'>&gt;</span>attr<span class='nt'>&lt;/abbr&gt;</span></code></pre></div>

  <h3>Initialism</h3>
  <p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>
  <div class='bs-example' data-example-id='simple-initialism'>
    <p><abbr title='HyperText Markup Language' class='initialism'>HTML</abbr> is the best thing since sliced bread.</p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;abbr</span> <span class='na'>title=</span><span class='s'>'HyperText Markup Language'</span> <span class='na'>class=</span><span class='s'>'initialism'</span><span class='nt'>&gt;</span>HTML<span class='nt'>&lt;/abbr&gt;</span></code></pre></div>


  <!-- Addresses -->
  <h2 id='type-addresses'>Addresses</h2>
  <p>Present contact information for the nearest ancestor or the entire body of work. Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.</p>
  <div class='bs-example' data-example-id='simple-address'>
    <address>
      <strong>Twitter, Inc.</strong><br>
      1355 Market Street, Suite 900<br>
      San Francisco, CA 94103<br>
      <abbr title='Phone'>P:</abbr> (123) 456-7890
    </address>
    <address>
      <strong>Full Name</strong><br>
      <a href='/cdn-cgi/l/email-protection#7e5d'><span class='__cf_email__' data-cfemail='8bede2f9f8ffa5e7eaf8ffcbeef3eae6fbe7eea5e8e4e6'>[email&#160;protected]</span><script data-cfhash='f9e31' type='text/javascript'>
/* <![CDATA[ */!function(){try{var t='currentScript'in document?document.currentScript:function(){for(var t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute('data-cfemail');if(a){for(e='',r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script></a>
    </address>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;address&gt;</span>
  <span class='nt'>&lt;strong&gt;</span>Twitter, Inc.<span class='nt'>&lt;/strong&gt;&lt;br&gt;</span>
  1355 Market Street, Suite 900<span class='nt'>&lt;br&gt;</span>
  San Francisco, CA 94103<span class='nt'>&lt;br&gt;</span>
  <span class='nt'>&lt;abbr</span> <span class='na'>title=</span><span class='s'>'Phone'</span><span class='nt'>&gt;</span>P:<span class='nt'>&lt;/abbr&gt;</span> (123) 456-7890
<span class='nt'>&lt;/address&gt;</span>

<span class='nt'>&lt;address&gt;</span>
  <span class='nt'>&lt;strong&gt;</span>Full Name<span class='nt'>&lt;/strong&gt;&lt;br&gt;</span>
  <span class='nt'>&lt;a</span> <span class='na'>href=</span><span class='s'>'mailto:#'</span><span class='nt'>&gt;</span><a class='__cf_email__' href='/cdn-cgi/l/email-protection' data-cfemail='781e110a0b0c5614190b0c381d00191508141d561b1715'>[email&#160;protected]</a><script data-cfhash='f9e31' type='text/javascript'>
/* <![CDATA[ */!function(){try{var t='currentScript'in document?document.currentScript:function(){for(var t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute('data-cfemail');if(a){for(e='',r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script><span class='nt'>&lt;/a&gt;</span>
<span class='nt'>&lt;/address&gt;</span></code></pre></div>


  <!-- Blockquotes -->
  <h2 id='type-blockquotes'>Blockquotes</h2>
  <p>For quoting blocks of content from another source within your document.</p>

  <h3>Default blockquote</h3>
  <p>Wrap <code>&lt;blockquote&gt;</code> around any <abbr title='HyperText Markup Language'>HTML</abbr> as the quote. For straight quotes, we recommend a <code>&lt;p&gt;</code>.</p>
  <div class='bs-example' data-example-id='simple-blockquote'>
    <blockquote>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    </blockquote>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;blockquote&gt;</span>
  <span class='nt'>&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;/blockquote&gt;</span></code></pre></div>

  <h3>Blockquote options</h3>
  <p>Style and content changes for simple variations on a standard <code>&lt;blockquote&gt;</code>.</p>

  <h4>Naming a source</h4>
  <p>Add a <code>&lt;footer&gt;</code> for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.</p>
  <div class='bs-example' data-example-id='blockquote-cite'>
    <blockquote>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title='Source Title'>Source Title</cite></footer>
    </blockquote>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;blockquote&gt;</span>
  <span class='nt'>&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class='nt'>&lt;/p&gt;</span>
  <span class='nt'>&lt;footer&gt;</span>Someone famous in <span class='nt'>&lt;cite</span> <span class='na'>title=</span><span class='s'>'Source Title'</span><span class='nt'>&gt;</span>Source Title<span class='nt'>&lt;/cite&gt;&lt;/footer&gt;</span>
<span class='nt'>&lt;/blockquote&gt;</span></code></pre></div>

  <h4>Alternate displays</h4>
  <p>Add <code>.blockquote-reverse</code> for a blockquote with right-aligned content.</p>
  <div class='bs-example' style='overflow: hidden;' data-example-id='blockquote-reverse'>
    <blockquote class='blockquote-reverse'>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title='Source Title'>Source Title</cite></footer>
    </blockquote>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;blockquote</span> <span class='na'>class=</span><span class='s'>'blockquote-reverse'</span><span class='nt'>&gt;</span>
  ...
<span class='nt'>&lt;/blockquote&gt;</span></code></pre></div>


  <!-- Lists -->
  <h2 id='type-lists'>Lists</h2>

  <h3>Unordered</h3>
  <p>A list of items in which the order does <em>not</em> explicitly matter.</p>
  <div class='bs-example' data-example-id='simple-ul'>
    <ul>
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit
        <ul>
          <li>Phasellus iaculis neque</li>
          <li>Purus sodales ultricies</li>
          <li>Vestibulum laoreet porttitor sem</li>
          <li>Ac tristique libero volutpat at</li>
        </ul>
      </li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ul>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;ul&gt;</span>
  <span class='nt'>&lt;li&gt;</span>...<span class='nt'>&lt;/li&gt;</span>
<span class='nt'>&lt;/ul&gt;</span></code></pre></div>

  <h3>Ordered</h3>
  <p>A list of items in which the order <em>does</em> explicitly matter.</p>
  <div class='bs-example' data-example-id='simple-ol'>
    <ol>
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit</li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ol>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;ol&gt;</span>
  <span class='nt'>&lt;li&gt;</span>...<span class='nt'>&lt;/li&gt;</span>
<span class='nt'>&lt;/ol&gt;</span></code></pre></div>

  <h3>Unstyled</h3>
  <p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>
  <div class='bs-example' data-example-id='unstyled-list'>
    <ul class='list-unstyled'>
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit
        <ul>
          <li>Phasellus iaculis neque</li>
          <li>Purus sodales ultricies</li>
          <li>Vestibulum laoreet porttitor sem</li>
          <li>Ac tristique libero volutpat at</li>
        </ul>
      </li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ul>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;ul</span> <span class='na'>class=</span><span class='s'>'list-unstyled'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;li&gt;</span>...<span class='nt'>&lt;/li&gt;</span>
<span class='nt'>&lt;/ul&gt;</span></code></pre></div>

  <h3>Inline</h3>
  <p>Place all list items on a single line with <code>display: inline-block;</code> and some light padding.</p>
  <div class='bs-example' data-example-id='list-inline'>
    <ul class='list-inline'>
      <li>Lorem ipsum</li>
      <li>Phasellus iaculis</li>
      <li>Nulla volutpat</li>
    </ul>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;ul</span> <span class='na'>class=</span><span class='s'>'list-inline'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;li&gt;</span>...<span class='nt'>&lt;/li&gt;</span>
<span class='nt'>&lt;/ul&gt;</span></code></pre></div>

  <h3>Description</h3>
  <p>A list of terms with their associated descriptions.</p>
  <div class='bs-example' data-example-id='simple-dl'>
    <dl>
      <dt>Description lists</dt>
      <dd>A description list is perfect for defining terms.</dd>
      <dt>Euismod</dt>
      <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
      <dd>Donec id elit non mi porta gravida at eget metus.</dd>
      <dt>Malesuada porta</dt>
      <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
    </dl>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;dl&gt;</span>
  <span class='nt'>&lt;dt&gt;</span>...<span class='nt'>&lt;/dt&gt;</span>
  <span class='nt'>&lt;dd&gt;</span>...<span class='nt'>&lt;/dd&gt;</span>
<span class='nt'>&lt;/dl&gt;</span></code></pre></div>

  <h4>Horizontal description</h4>
  <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side. Starts off stacked like default <code>&lt;dl&gt;</code>s, but when the navbar expands, so do these.</p>
  <div class='bs-example' data-example-id='horizontal-dl'>
    <dl class='dl-horizontal'>
      <dt>Description lists</dt>
      <dd>A description list is perfect for defining terms.</dd>
      <dt>Euismod</dt>
      <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
      <dd>Donec id elit non mi porta gravida at eget metus.</dd>
      <dt>Malesuada porta</dt>
      <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
      <dt>Felis euismod semper eget lacinia</dt>
      <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
    </dl>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;dl</span> <span class='na'>class=</span><span class='s'>'dl-horizontal'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;dt&gt;</span>...<span class='nt'>&lt;/dt&gt;</span>
  <span class='nt'>&lt;dd&gt;</span>...<span class='nt'>&lt;/dd&gt;</span>
<span class='nt'>&lt;/dl&gt;</span></code></pre></div>

  <div class='bs-callout bs-callout-info' id='callout-type-dl-truncate'>
    <h4>Auto-truncating</h4>
    <p>Horizontal description lists will truncate terms that are too long to fit in the left column with <code>text-overflow</code>. In narrower viewports, they will change to the default stacked layout.</p>
  </div>
</div>

<div class='bs-docs-section'>
  <h1 id='code' class='page-header'>Code</h1>

  <h2 id='code-inline'>Inline</h2>
  <p>Wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>
<div class='bs-example' data-example-id='inline-code'>
  For example, <code>&lt;section&gt;</code> should be wrapped as inline.
</div>
<div class='highlight'><pre><code class='language-html' data-lang='html'>For example, <span class='nt'>&lt;code&gt;</span><span class='ni'>&amp;lt;</span>section<span class='ni'>&amp;gt;</span><span class='nt'>&lt;/code&gt;</span> should be wrapped as inline.</code></pre></div>

  <h2 id='code-user-input'>User input</h2>
  <p>Use the <code>&lt;kbd&gt;</code> to indicate input that is typically entered via keyboard.</p>
<div class='bs-example' data-example-id='simple-kbd'>
  To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
  To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>
</div>
<div class='highlight'><pre><code class='language-html' data-lang='html'>To switch directories, type <span class='nt'>&lt;kbd&gt;</span>cd<span class='nt'>&lt;/kbd&gt;</span> followed by the name of the directory.<span class='nt'>&lt;br&gt;</span>
To edit settings, press <span class='nt'>&lt;kbd&gt;&lt;kbd&gt;</span>ctrl<span class='nt'>&lt;/kbd&gt;</span> + <span class='nt'>&lt;kbd&gt;</span>,<span class='nt'>&lt;/kbd&gt;&lt;/kbd&gt;</span></code></pre></div>

  <h2 id='code-block'>Basic block</h2>
  <p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.</p>
<div class='bs-example' data-example-id='simple-pre'>
  <pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
</div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;pre&gt;</span><span class='ni'>&amp;lt;</span>p<span class='ni'>&amp;gt;</span>Sample text here...<span class='ni'>&amp;lt;</span>/p<span class='ni'>&amp;gt;</span><span class='nt'>&lt;/pre&gt;</span></code></pre></div>

  <p>You may optionally add the <code>.pre-scrollable</code> class, which will set a max-height of 350px and provide a y-axis scrollbar.</p>
  <h2 id='code-variables'>Variables</h2>
  <p>For indicating variables use the <code>&lt;var&gt;</code> tag.</p>
  <div class='bs-example' data-example-id='simple-var'>
    <p><var>y</var> = <var>m</var><var>x</var> + <var>b</var></p>

  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;var&gt;</span>y<span class='nt'>&lt;/var&gt;</span> = <span class='nt'>&lt;var&gt;</span>m<span class='nt'>&lt;/var&gt;&lt;var&gt;</span>x<span class='nt'>&lt;/var&gt;</span> + <span class='nt'>&lt;var&gt;</span>b<span class='nt'>&lt;/var&gt;</span></code></pre></div>

  <h2 id='code-sample-output'>Sample output</h2>
  <p>For indicating blocks sample output from a program use the <code>&lt;samp&gt;</code> tag.</p>
  <div class='bs-example' data-example-id='simple-samp'>
    <p><samp>This text is meant to be treated as sample output from a computer program.</samp></p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;samp&gt;</span>This text is meant to be treated as sample output from a computer program.<span class='nt'>&lt;/samp&gt;</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='tables' class='page-header'>Tables</h1>

  <h2 id='tables-example'>Basic example</h2>
  <p>For basic styling&mdash;light padding and only horizontal dividers&mdash;add the base class <code>.table</code> to any <code>&lt;table&gt;</code>. It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.</p>
  <div class='bs-example' data-example-id='simple-table'>
    <table class='table'>
      <caption>Optional table caption.</caption>
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope='row'>1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope='row'>2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope='row'>3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;table</span> <span class='na'>class=</span><span class='s'>'table'</span><span class='nt'>&gt;</span>
  ...
<span class='nt'>&lt;/table&gt;</span></code></pre></div>


  <h2 id='tables-striped'>Striped rows</h2>
  <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
  <div class='bs-callout bs-callout-danger' id='callout-tables-striped-ie8'>
    <h4>Cross-browser compatibility</h4>
    <p>Striped tables are styled via the <code>:nth-child</code> CSS selector, which is not available in Internet Explorer 8.</p>
  </div>
  <div class='bs-example' data-example-id='striped-table'>
    <table class='table table-striped'>
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope='row'>1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope='row'>2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope='row'>3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;table</span> <span class='na'>class=</span><span class='s'>'table table-striped'</span><span class='nt'>&gt;</span>
  ...
<span class='nt'>&lt;/table&gt;</span></code></pre></div>


  <h2 id='tables-bordered'>Bordered table</h2>
  <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
  <div class='bs-example' data-example-id='bordered-table'>
    <table class='table table-bordered'>
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope='row'>1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope='row'>2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope='row'>3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;table</span> <span class='na'>class=</span><span class='s'>'table table-bordered'</span><span class='nt'>&gt;</span>
  ...
<span class='nt'>&lt;/table&gt;</span></code></pre></div>


  <h2 id='tables-hover-rows'>Hover rows</h2>
  <p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
  <div class='bs-example' data-example-id='hoverable-table'>
    <table class='table table-hover'>
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope='row'>1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope='row'>2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope='row'>3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;table</span> <span class='na'>class=</span><span class='s'>'table table-hover'</span><span class='nt'>&gt;</span>
  ...
<span class='nt'>&lt;/table&gt;</span></code></pre></div>


  <h2 id='tables-condensed'>Condensed table</h2>
  <p>Add <code>.table-condensed</code> to make tables more compact by cutting cell padding in half.</p>
  <div class='bs-example' data-example-id='condensed-table'>
    <table class='table table-condensed'>
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope='row'>1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope='row'>2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope='row'>3</th>
          <td colspan='2'>Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;table</span> <span class='na'>class=</span><span class='s'>'table table-condensed'</span><span class='nt'>&gt;</span>
  ...
<span class='nt'>&lt;/table&gt;</span></code></pre></div>


  <h2 id='tables-contextual-classes'>Contextual classes</h2>
  <p>Use contextual classes to color table rows or individual cells.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped'>
      <colgroup>
        <col class='col-xs-1'>
        <col class='col-xs-7'>
      </colgroup>
      <thead>
        <tr>
          <th>Class</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope='row'>
            <code>.active</code>
          </th>
          <td>Applies the hover color to a particular row or cell</td>
        </tr>
        <tr>
          <th scope='row'>
            <code>.success</code>
          </th>
          <td>Indicates a successful or positive action</td>
        </tr>
        <tr>
          <th scope='row'>
            <code>.info</code>
          </th>
          <td>Indicates a neutral informative change or action</td>
        </tr>
        <tr>
          <th scope='row'>
            <code>.warning</code>
          </th>
          <td>Indicates a warning that might need attention</td>
        </tr>
        <tr>
          <th scope='row'>
            <code>.danger</code>
          </th>
          <td>Indicates a dangerous or potentially negative action</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class='bs-example' data-example-id='contextual-table'>
    <table class='table'>
      <thead>
        <tr>
          <th>#</th>
          <th>Column heading</th>
          <th>Column heading</th>
          <th>Column heading</th>
        </tr>
      </thead>
      <tbody>
        <tr class='active'>
          <th scope='row'>1</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr>
          <th scope='row'>2</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class='success'>
          <th scope='row'>3</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr>
          <th scope='row'>4</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class='info'>
          <th scope='row'>5</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr>
          <th scope='row'>6</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class='warning'>
          <th scope='row'>7</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr>
          <th scope='row'>8</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class='danger'>
          <th scope='row'>9</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='c'>&lt;!-- On rows --&gt;</span>
<span class='nt'>&lt;tr</span> <span class='na'>class=</span><span class='s'>'active'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/tr&gt;</span>
<span class='nt'>&lt;tr</span> <span class='na'>class=</span><span class='s'>'success'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/tr&gt;</span>
<span class='nt'>&lt;tr</span> <span class='na'>class=</span><span class='s'>'warning'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/tr&gt;</span>
<span class='nt'>&lt;tr</span> <span class='na'>class=</span><span class='s'>'danger'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/tr&gt;</span>
<span class='nt'>&lt;tr</span> <span class='na'>class=</span><span class='s'>'info'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/tr&gt;</span>

<span class='c'>&lt;!-- On cells (`td` or `th`) --&gt;</span>
<span class='nt'>&lt;tr&gt;</span>
  <span class='nt'>&lt;td</span> <span class='na'>class=</span><span class='s'>'active'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/td&gt;</span>
  <span class='nt'>&lt;td</span> <span class='na'>class=</span><span class='s'>'success'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/td&gt;</span>
  <span class='nt'>&lt;td</span> <span class='na'>class=</span><span class='s'>'warning'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/td&gt;</span>
  <span class='nt'>&lt;td</span> <span class='na'>class=</span><span class='s'>'danger'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/td&gt;</span>
  <span class='nt'>&lt;td</span> <span class='na'>class=</span><span class='s'>'info'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/td&gt;</span>
<span class='nt'>&lt;/tr&gt;</span></code></pre></div>
  <div class='bs-callout bs-callout-warning' id='callout-tables-context-accessibility'>
    <h4>Conveying meaning to assistive technologies</h4>
    <p>Using color to add meaning to a table row or individual cell only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the visible text in the relevant table row/cell), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code> class.</p>
  </div>

  <h2 id='tables-responsive'>Responsive tables</h2>
  <p>Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code> to make them scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.</p>

  <div class='bs-callout bs-callout-warning' id='callout-tables-responsive-overflow'>
    <h4>Vertical clipping/truncation</h4>
    <p>Responsive tables make use of <code>overflow-y: hidden</code>, which clips off any content that goes beyond the bottom or top edges of the table. In particular, this can clip off dropdown menus and other third-party widgets.</p>
  </div>
  <div class='bs-callout bs-callout-warning' id='callout-tables-responsive-ff-fieldset'>
    <h4>Firefox and fieldsets</h4>
    <p>Firefox has some awkward fieldset styling involving <code>width</code> that interferes with the responsive table. This cannot be overriden without a Firefox-specific hack that we <strong>don't</strong> provide in Bootstrap:</p>
<div class='highlight'><pre><code class='language-css' data-lang='css'><span class='k'>@-moz-document</span> <span class='n'>url-prefix</span><span class='p'>()</span> <span class='p'>{</span>
  <span class='nt'>fieldset</span> <span class='p'>{</span> <span class='nl'>display</span><span class='p'>:</span> <span class='nb'>table-cell</span><span class='p'>;</span> <span class='p'>}</span>
<span class='p'>}</span></code></pre></div>
    <p>For more information, read <a href='https://stackoverflow.com/questions/17408815/fieldset-resizes-wrong-appears-to-have-unremovable-min-width-min-content/17863685#17863685'>this Stack Overflow answer</a>.</p>
  </div>

  <div class='bs-example' data-example-id='simple-responsive-table'>
    <div class='table-responsive'>
      <table class='table'>
        <thead>
          <tr>
            <th>#</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope='row'>1</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope='row'>2</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope='row'>3</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
        </tbody>
      </table>
    </div><!-- /.table-responsive -->

    <div class='table-responsive'>
      <table class='table table-bordered'>
        <thead>
          <tr>
            <th>#</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope='row'>1</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope='row'>2</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope='row'>3</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'table-responsive'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;table</span> <span class='na'>class=</span><span class='s'>'table'</span><span class='nt'>&gt;</span>
    ...
  <span class='nt'>&lt;/table&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='forms' class='page-header'>Forms</h1>

  <h2 id='forms-example'>Basic example</h2>
  <p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>
  <div class='bs-example' data-example-id='basic-forms'>
    <form>
      <div class='form-group'>
        <label for='exampleInputEmail1'>Email address</label>
        <input type='email' class='form-control' id='exampleInputEmail1' placeholder='Email'>
      </div>
      <div class='form-group'>
        <label for='exampleInputPassword1'>Password</label>
        <input type='password' class='form-control' id='exampleInputPassword1' placeholder='Password'>
      </div>
      <div class='form-group'>
        <label for='exampleInputFile'>File input</label>
        <input type='file' id='exampleInputFile'>
        <p class='help-block'>Example block-level help text here.</p>
      </div>
      <div class='checkbox'>
        <label>
          <input type='checkbox'> Check me out
        </label>
      </div>
      <button type='submit' class='btn btn-default'>Submit</button>
    </form>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;form&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>for=</span><span class='s'>'exampleInputEmail1'</span><span class='nt'>&gt;</span>Email address<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'email'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'exampleInputEmail1'</span> <span class='na'>placeholder=</span><span class='s'>'Email'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>for=</span><span class='s'>'exampleInputPassword1'</span><span class='nt'>&gt;</span>Password<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'password'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'exampleInputPassword1'</span> <span class='na'>placeholder=</span><span class='s'>'Password'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>for=</span><span class='s'>'exampleInputFile'</span><span class='nt'>&gt;</span>File input<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'file'</span> <span class='na'>id=</span><span class='s'>'exampleInputFile'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'help-block'</span><span class='nt'>&gt;</span>Example block-level help text here.<span class='nt'>&lt;/p&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'checkbox'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label&gt;</span>
      <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span><span class='nt'>&gt;</span> Check me out
    <span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'submit'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span><span class='nt'>&gt;</span>Submit<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;/form&gt;</span></code></pre></div>
  <div class='bs-callout bs-callout-warning' id='callout-formgroup-inputgroup'>
    <h4>Don't mix form groups with input groups</h4>
    <p>Do not mix form groups directly with <a href='/components/#input-groups'>input groups</a>. Instead, nest the input group inside of the form group.</p>
  </div>


  <h2 id='forms-inline'>Inline form</h2>
  <p>Add <code>.form-inline</code> to your form (which doesn't have to be a <code>&lt;form&gt;</code>) for left-aligned and inline-block controls. <strong>This only applies to forms within viewports that are at least 768px wide.</strong></p>
  <div class='bs-callout bs-callout-danger' id='callout-inline-form-width'>
    <h4>May require custom widths</h4>
    <p>Inputs and selects have <code>width: 100%;</code> applied by default in Bootstrap. Within inline forms, we reset that to <code>width: auto;</code> so multiple controls can reside on the same line. Depending on your layout, additional custom widths may be required.</p>
  </div>
  <div class='bs-callout bs-callout-warning' id='callout-inline-form-labels'>
    <h4>Always add labels</h4>
    <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the <code>.sr-only</code> class. There are further alternative methods of providing a label for assistive technologies, such as the <code>aria-label</code>, <code>aria-labelledby</code> or <code>title</code> attribute. If none of these is present, screen readers may resort to using the <code>placeholder</code> attribute, if present, but note that use of <code>placeholder</code> as a replacement for other labelling methods is not advised.</p>
  </div>

  <div class='bs-example' data-example-id='simple-form-inline'>
    <form class='form-inline'>
      <div class='form-group'>
        <label for='exampleInputName2'>Name</label>
        <input type='text' class='form-control' id='exampleInputName2' placeholder='Jane Doe'>
      </div>
      <div class='form-group'>
        <label for='exampleInputEmail2'>Email</label>
        <input type='email' class='form-control' id='exampleInputEmail2' placeholder='jane.doe@example.com'>
      </div>
      <button type='submit' class='btn btn-default'>Send invitation</button>
    </form>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;form</span> <span class='na'>class=</span><span class='s'>'form-inline'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>for=</span><span class='s'>'exampleInputName2'</span><span class='nt'>&gt;</span>Name<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'exampleInputName2'</span> <span class='na'>placeholder=</span><span class='s'>'Jane Doe'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>for=</span><span class='s'>'exampleInputEmail2'</span><span class='nt'>&gt;</span>Email<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'email'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'exampleInputEmail2'</span> <span class='na'>placeholder=</span><span class='s'>'<a class='__cf_email__' href='/cdn-cgi/l/email-protection' data-cfemail='bed4dfd0db90dad1dbfedbc6dfd3ced2db90ddd1d3'>[email&#160;protected]</a><script data-cfhash='f9e31' type='text/javascript'>
/* <![CDATA[ */!function(){try{var t='currentScript'in document?document.currentScript:function(){for(var t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute('data-cfemail');if(a){for(e='',r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script>'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'submit'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span><span class='nt'>&gt;</span>Send invitation<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;/form&gt;</span></code></pre></div>

  <div class='bs-example' data-example-id='simple-form-inline'>
    <form class='form-inline'>
      <div class='form-group'>
        <label class='sr-only' for='exampleInputEmail3'>Email address</label>
        <input type='email' class='form-control' id='exampleInputEmail3' placeholder='Email'>
      </div>
      <div class='form-group'>
        <label class='sr-only' for='exampleInputPassword3'>Password</label>
        <input type='password' class='form-control' id='exampleInputPassword3' placeholder='Password'>
      </div>
      <div class='checkbox'>
        <label>
          <input type='checkbox'> Remember me
        </label>
      </div>
      <button type='submit' class='btn btn-default'>Sign in</button>
    </form>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;form</span> <span class='na'>class=</span><span class='s'>'form-inline'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'sr-only'</span> <span class='na'>for=</span><span class='s'>'exampleInputEmail3'</span><span class='nt'>&gt;</span>Email address<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'email'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'exampleInputEmail3'</span> <span class='na'>placeholder=</span><span class='s'>'Email'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'sr-only'</span> <span class='na'>for=</span><span class='s'>'exampleInputPassword3'</span><span class='nt'>&gt;</span>Password<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'password'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'exampleInputPassword3'</span> <span class='na'>placeholder=</span><span class='s'>'Password'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'checkbox'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label&gt;</span>
      <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span><span class='nt'>&gt;</span> Remember me
    <span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'submit'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span><span class='nt'>&gt;</span>Sign in<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;/form&gt;</span></code></pre></div>

  <div class='bs-example' data-example-id='form-inline-with-input-group'>
    <form class='form-inline'>
      <div class='form-group'>
        <label class='sr-only' for='exampleInputAmount'>Amount (in dollars)</label>
        <div class='input-group'>
          <div class='input-group-addon'>$</div>
          <input type='text' class='form-control' id='exampleInputAmount' placeholder='Amount'>
          <div class='input-group-addon'>.00</div>
        </div>
      </div>
      <button type='submit' class='btn btn-primary'>Transfer cash</button>
    </form>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;form</span> <span class='na'>class=</span><span class='s'>'form-inline'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'sr-only'</span> <span class='na'>for=</span><span class='s'>'exampleInputAmount'</span><span class='nt'>&gt;</span>Amount (in dollars)<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'input-group'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'input-group-addon'</span><span class='nt'>&gt;</span>$<span class='nt'>&lt;/div&gt;</span>
      <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'exampleInputAmount'</span> <span class='na'>placeholder=</span><span class='s'>'Amount'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'input-group-addon'</span><span class='nt'>&gt;</span>.00<span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'submit'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span><span class='nt'>&gt;</span>Transfer cash<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;/form&gt;</span></code></pre></div>

  <h2 id='forms-horizontal'>Horizontal form</h2>
  <p>Use Bootstrap's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding <code>.form-horizontal</code> to the form (which doesn't have to be a <code>&lt;form&gt;</code>). Doing so changes <code>.form-group</code>s to behave as grid rows, so no need for <code>.row</code>.</p>
  <div class='bs-example' data-example-id='simple-horizontal-form'>
    <form class='form-horizontal'>
      <div class='form-group'>
        <label for='inputEmail3' class='col-sm-2 control-label'>Email</label>
        <div class='col-sm-10'>
          <input type='email' class='form-control' id='inputEmail3' placeholder='Email'>
        </div>
      </div>
      <div class='form-group'>
        <label for='inputPassword3' class='col-sm-2 control-label'>Password</label>
        <div class='col-sm-10'>
          <input type='password' class='form-control' id='inputPassword3' placeholder='Password'>
        </div>
      </div>
      <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-10'>
          <div class='checkbox'>
            <label>
              <input type='checkbox'> Remember me
            </label>
          </div>
        </div>
      </div>
      <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-10'>
          <button type='submit' class='btn btn-default'>Sign in</button>
        </div>
      </div>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;form</span> <span class='na'>class=</span><span class='s'>'form-horizontal'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>for=</span><span class='s'>'inputEmail3'</span> <span class='na'>class=</span><span class='s'>'col-sm-2 control-label'</span><span class='nt'>&gt;</span>Email<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-10'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'email'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputEmail3'</span> <span class='na'>placeholder=</span><span class='s'>'Email'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>for=</span><span class='s'>'inputPassword3'</span> <span class='na'>class=</span><span class='s'>'col-sm-2 control-label'</span><span class='nt'>&gt;</span>Password<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-10'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'password'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputPassword3'</span> <span class='na'>placeholder=</span><span class='s'>'Password'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-offset-2 col-sm-10'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'checkbox'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;label&gt;</span>
          <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span><span class='nt'>&gt;</span> Remember me
        <span class='nt'>&lt;/label&gt;</span>
      <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-offset-2 col-sm-10'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'submit'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span><span class='nt'>&gt;</span>Sign in<span class='nt'>&lt;/button&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/form&gt;</span></code></pre></div>


  <h2 id='forms-controls'>Supported controls</h2>
  <p>Examples of standard form controls supported in an example form layout.</p>

  <h3>Inputs</h3>
  <p>Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.</p>
  <div class='bs-callout bs-callout-danger' id='callout-input-needs-type'>
    <h4>Type declaration required</h4>
    <p>Inputs will only be fully styled if their <code>type</code> is properly declared.</p>
  </div>
  <div class='bs-example' data-example-id='text-form-control'>
    <form>
      <input type='text' class='form-control' placeholder='Text input'>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>placeholder=</span><span class='s'>'Text input'</span><span class='nt'>&gt;</span></code></pre></div>
  <div class='bs-callout bs-callout-info' id='callout-xref-input-group'>
    <h4>Input groups</h4>
    <p>To add integrated text or buttons before and/or after any text-based <code>&lt;input&gt;</code>, <a href='../components/#input-groups'>check out the input group component</a>.</p>
  </div>

  <h3>Textarea</h3>
  <p>Form control which supports multiple lines of text. Change <code>rows</code> attribute as necessary.</p>
  <div class='bs-example' data-example-id='textarea-form-control'>
    <form>
      <textarea class='form-control' rows='3' placeholder='Textarea'></textarea>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;textarea</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>rows=</span><span class='s'>'3'</span><span class='nt'>&gt;&lt;/textarea&gt;</span></code></pre></div>

  <h3>Checkboxes and radios</h3>
  <p>Checkboxes are for selecting one or several options in a list, while radios are for selecting one option from many.</p>
  <p>Disabled checkboxes and radios are supported, but to provide a 'not-allowed' cursor on hover of the parent <code>&lt;label&gt;</code>, you'll need to add the <code>.disabled</code> class to the parent <code>.radio</code>, <code>.radio-inline</code>, <code>.checkbox</code>, or <code>.checkbox-inline</code>.</p>
  <h4>Default (stacked)</h4>
  <div class='bs-example' data-example-id='block-checkboxes-radios'>
    <form>
      <div class='checkbox'>
        <label>
          <input type='checkbox' value=''>
          Option one is this and that&mdash;be sure to include why it's great
        </label>
      </div>
      <div class='checkbox disabled'>
        <label>
          <input type='checkbox' value='' disabled>
          Option two is disabled
        </label>
      </div>
      <br>
      <div class='radio'>
        <label>
          <input type='radio' name='optionsRadios' id='optionsRadios1' value='option1' checked>
          Option one is this and that&mdash;be sure to include why it's great
        </label>
      </div>
      <div class='radio'>
        <label>
          <input type='radio' name='optionsRadios' id='optionsRadios2' value='option2'>
          Option two can be something else and selecting it will deselect option one
        </label>
      </div>
      <div class='radio disabled'>
        <label>
          <input type='radio' name='optionsRadios' id='optionsRadios3' value='option3' disabled>
          Option three is disabled
        </label>
      </div>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'checkbox'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span> <span class='na'>value=</span><span class='s'>''</span><span class='nt'>&gt;</span>
    Option one is this and that<span class='ni'>&amp;mdash;</span>be sure to include why it's great
  <span class='nt'>&lt;/label&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'checkbox disabled'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span> <span class='na'>value=</span><span class='s'>''</span> <span class='na'>disabled</span><span class='nt'>&gt;</span>
    Option two is disabled
  <span class='nt'>&lt;/label&gt;</span>
<span class='nt'>&lt;/div&gt;</span>

<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'radio'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'radio'</span> <span class='na'>name=</span><span class='s'>'optionsRadios'</span> <span class='na'>id=</span><span class='s'>'optionsRadios1'</span> <span class='na'>value=</span><span class='s'>'option1'</span> <span class='na'>checked</span><span class='nt'>&gt;</span>
    Option one is this and that<span class='ni'>&amp;mdash;</span>be sure to include why it's great
  <span class='nt'>&lt;/label&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'radio'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'radio'</span> <span class='na'>name=</span><span class='s'>'optionsRadios'</span> <span class='na'>id=</span><span class='s'>'optionsRadios2'</span> <span class='na'>value=</span><span class='s'>'option2'</span><span class='nt'>&gt;</span>
    Option two can be something else and selecting it will deselect option one
  <span class='nt'>&lt;/label&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'radio disabled'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'radio'</span> <span class='na'>name=</span><span class='s'>'optionsRadios'</span> <span class='na'>id=</span><span class='s'>'optionsRadios3'</span> <span class='na'>value=</span><span class='s'>'option3'</span> <span class='na'>disabled</span><span class='nt'>&gt;</span>
    Option three is disabled
  <span class='nt'>&lt;/label&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h4>Inline checkboxes and radios</h4>
  <p>Use the <code>.checkbox-inline</code> or <code>.radio-inline</code> classes on a series of checkboxes or radios for controls that appear on the same line.</p>
  <div class='bs-example' data-example-id='inline-checkboxes-radios'>
    <form>
      <label class='checkbox-inline'>
        <input type='checkbox' id='inlineCheckbox1' value='option1'> 1
      </label>
      <label class='checkbox-inline'>
        <input type='checkbox' id='inlineCheckbox2' value='option2'> 2
      </label>
      <label class='checkbox-inline'>
        <input type='checkbox' id='inlineCheckbox3' value='option3'> 3
      </label>
    </form>
    <br>
    <form>
      <label class='radio-inline'>
        <input type='radio' name='inlineRadioOptions' id='inlineRadio1' value='option1'> 1
      </label>
      <label class='radio-inline'>
        <input type='radio' name='inlineRadioOptions' id='inlineRadio2' value='option2'> 2
      </label>
      <label class='radio-inline'>
        <input type='radio' name='inlineRadioOptions' id='inlineRadio3' value='option3'> 3
      </label>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'checkbox-inline'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span> <span class='na'>id=</span><span class='s'>'inlineCheckbox1'</span> <span class='na'>value=</span><span class='s'>'option1'</span><span class='nt'>&gt;</span> 1
<span class='nt'>&lt;/label&gt;</span>
<span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'checkbox-inline'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span> <span class='na'>id=</span><span class='s'>'inlineCheckbox2'</span> <span class='na'>value=</span><span class='s'>'option2'</span><span class='nt'>&gt;</span> 2
<span class='nt'>&lt;/label&gt;</span>
<span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'checkbox-inline'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span> <span class='na'>id=</span><span class='s'>'inlineCheckbox3'</span> <span class='na'>value=</span><span class='s'>'option3'</span><span class='nt'>&gt;</span> 3
<span class='nt'>&lt;/label&gt;</span>

<span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'radio-inline'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'radio'</span> <span class='na'>name=</span><span class='s'>'inlineRadioOptions'</span> <span class='na'>id=</span><span class='s'>'inlineRadio1'</span> <span class='na'>value=</span><span class='s'>'option1'</span><span class='nt'>&gt;</span> 1
<span class='nt'>&lt;/label&gt;</span>
<span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'radio-inline'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'radio'</span> <span class='na'>name=</span><span class='s'>'inlineRadioOptions'</span> <span class='na'>id=</span><span class='s'>'inlineRadio2'</span> <span class='na'>value=</span><span class='s'>'option2'</span><span class='nt'>&gt;</span> 2
<span class='nt'>&lt;/label&gt;</span>
<span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'radio-inline'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'radio'</span> <span class='na'>name=</span><span class='s'>'inlineRadioOptions'</span> <span class='na'>id=</span><span class='s'>'inlineRadio3'</span> <span class='na'>value=</span><span class='s'>'option3'</span><span class='nt'>&gt;</span> 3
<span class='nt'>&lt;/label&gt;</span></code></pre></div>

  <h4>Checkboxes and radios without label text</h4>
  <p>Should you have no text within the <code>&lt;label&gt;</code>, the input is positioned as you'd expect. <strong>Currently only works on non-inline checkboxes and radios.</strong> Remember to still provide some form of label for assistive technologies (for instance, using <code>aria-label</code>).</p>
  <div class='bs-example' data-example-id='checkboxes-radios-without-labels'>
    <form>
      <div class='checkbox'>
        <label>
          <input type='checkbox' id='blankCheckbox' value='option1' aria-label='Checkbox without label text'>
        </label>
      </div>
      <div class='radio'>
        <label>
          <input type='radio' name='blankRadio' id='blankRadio1' value='option1' aria-label='Radio button without label text'>
        </label>
      </div>
    </form>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'checkbox'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span> <span class='na'>id=</span><span class='s'>'blankCheckbox'</span> <span class='na'>value=</span><span class='s'>'option1'</span> <span class='na'>aria-label=</span><span class='s'>'...'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;/label&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'radio'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'radio'</span> <span class='na'>name=</span><span class='s'>'blankRadio'</span> <span class='na'>id=</span><span class='s'>'blankRadio1'</span> <span class='na'>value=</span><span class='s'>'option1'</span> <span class='na'>aria-label=</span><span class='s'>'...'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;/label&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h3>Selects</h3>
  <p>Note that many native select menus—namely in Safari and Chrome—have rounded corners that cannot be modified via <code>border-radius</code> properties.</p>
  <div class='bs-example' data-example-ids='select-form-control'>
    <form>
      <select class='form-control'>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;select</span> <span class='na'>class=</span><span class='s'>'form-control'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;option&gt;</span>1<span class='nt'>&lt;/option&gt;</span>
  <span class='nt'>&lt;option&gt;</span>2<span class='nt'>&lt;/option&gt;</span>
  <span class='nt'>&lt;option&gt;</span>3<span class='nt'>&lt;/option&gt;</span>
  <span class='nt'>&lt;option&gt;</span>4<span class='nt'>&lt;/option&gt;</span>
  <span class='nt'>&lt;option&gt;</span>5<span class='nt'>&lt;/option&gt;</span>
<span class='nt'>&lt;/select&gt;</span></code></pre></div>

  <p>For <code>&lt;select&gt;</code> controls with the <code>multiple</code> attribute, multiple options are shown by default.</p>

  <div class='bs-example' data-example-ids='select-multiple-form-control'>
    <form>
      <select multiple class='form-control'>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </form>
  </div><!-- /.bs-example -->

<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;select</span> <span class='na'>multiple</span> <span class='na'>class=</span><span class='s'>'form-control'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;option&gt;</span>1<span class='nt'>&lt;/option&gt;</span>
  <span class='nt'>&lt;option&gt;</span>2<span class='nt'>&lt;/option&gt;</span>
  <span class='nt'>&lt;option&gt;</span>3<span class='nt'>&lt;/option&gt;</span>
  <span class='nt'>&lt;option&gt;</span>4<span class='nt'>&lt;/option&gt;</span>
  <span class='nt'>&lt;option&gt;</span>5<span class='nt'>&lt;/option&gt;</span>
<span class='nt'>&lt;/select&gt;</span></code></pre></div>


  <h2 id='forms-controls-static'>Static control</h2>
  <p>When you need to place plain text next to a form label within a form, use the <code>.form-control-static</code> class on a <code>&lt;p&gt;</code>.</p>
  <div class='bs-example' data-example-id='horizontal-static-form-control'>
    <form class='form-horizontal'>
      <div class='form-group'>
        <label class='col-sm-2 control-label'>Email</label>
        <div class='col-sm-10'>
          <p class='form-control-static'><a class='__cf_email__' href='/cdn-cgi/l/email-protection' data-cfemail='741119151d1834110c15190418115a171b19'>[email&#160;protected]</a><script data-cfhash='f9e31' type='text/javascript'>
/* <![CDATA[ */!function(){try{var t='currentScript'in document?document.currentScript:function(){for(var t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute('data-cfemail');if(a){for(e='',r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script></p>
        </div>
      </div>
      <div class='form-group'>
        <label for='inputPassword' class='col-sm-2 control-label'>Password</label>
        <div class='col-sm-10'>
          <input type='password' class='form-control' id='inputPassword' placeholder='Password'>
        </div>
      </div>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;form</span> <span class='na'>class=</span><span class='s'>'form-horizontal'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'col-sm-2 control-label'</span><span class='nt'>&gt;</span>Email<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-10'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'form-control-static'</span><span class='nt'>&gt;</span><a class='__cf_email__' href='/cdn-cgi/l/email-protection' data-cfemail='294c44484045694c51484459454c074a4644'>[email&#160;protected]</a><script data-cfhash='f9e31' type='text/javascript'>
/* <![CDATA[ */!function(){try{var t='currentScript'in document?document.currentScript:function(){for(var t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute('data-cfemail');if(a){for(e='',r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script><span class='nt'>&lt;/p&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>for=</span><span class='s'>'inputPassword'</span> <span class='na'>class=</span><span class='s'>'col-sm-2 control-label'</span><span class='nt'>&gt;</span>Password<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-10'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'password'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputPassword'</span> <span class='na'>placeholder=</span><span class='s'>'Password'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/form&gt;</span></code></pre></div>
  <div class='bs-example' data-example-id='inline-static-form-control'>
    <form class='form-inline'>
      <div class='form-group'>
        <label class='sr-only'>Email</label>
        <p class='form-control-static'><a class='__cf_email__' href='/cdn-cgi/l/email-protection' data-cfemail='56333b373f3a16332e373b263a337835393b'>[email&#160;protected]</a><script data-cfhash='f9e31' type='text/javascript'>
/* <![CDATA[ */!function(){try{var t='currentScript'in document?document.currentScript:function(){for(var t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute('data-cfemail');if(a){for(e='',r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script></p>
      </div>
      <div class='form-group'>
        <label for='inputPassword2' class='sr-only'>Password</label>
        <input type='password' class='form-control' id='inputPassword2' placeholder='Password'>
      </div>
      <button type='submit' class='btn btn-default'>Confirm identity</button>
    </form>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;form</span> <span class='na'>class=</span><span class='s'>'form-inline'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'sr-only'</span><span class='nt'>&gt;</span>Email<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'form-control-static'</span><span class='nt'>&gt;</span><a class='__cf_email__' href='/cdn-cgi/l/email-protection' data-cfemail='62070f030b0e22071a030f120e074c010d0f'>[email&#160;protected]</a><script data-cfhash='f9e31' type='text/javascript'>
/* <![CDATA[ */!function(){try{var t='currentScript'in document?document.currentScript:function(){for(var t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute('data-cfemail');if(a){for(e='',r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script><span class='nt'>&lt;/p&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>for=</span><span class='s'>'inputPassword2'</span> <span class='na'>class=</span><span class='s'>'sr-only'</span><span class='nt'>&gt;</span>Password<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'password'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputPassword2'</span> <span class='na'>placeholder=</span><span class='s'>'Password'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'submit'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span><span class='nt'>&gt;</span>Confirm identity<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;/form&gt;</span></code></pre></div>

  <h2 id='forms-control-focus'>Focus state</h2>
  <p>We remove the default <code>outline</code> styles on some form controls and apply a <code>box-shadow</code> in its place for <code>:focus</code>.</p>
  <div class='bs-example'>
    <form>
      <input class='form-control' id='focusedInput' type='text' value='Demonstrative focus state'>
    </form>
  </div>
  <div class='bs-callout bs-callout-info' id='callout-focus-demo'>
    <h4>Demo <code>:focus</code> state</h4>
    <p>The above example input uses custom styles in our documentation to demonstrate the <code>:focus</code> state on a <code>.form-control</code>.</p>
  </div>


  <h2 id='forms-control-disabled'>Disabled state</h2>
  <p>Add the <code>disabled</code> boolean attribute on an input to prevent user interactions. Disabled inputs appear lighter and add a <code>not-allowed</code> cursor.</p>
  <div class='bs-example' data-example-id='text-form-control-disabled'>
    <form>
      <input class='form-control' id='disabledInput' type='text' placeholder='Disabled input here…' disabled>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;input</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'disabledInput'</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>placeholder=</span><span class='s'>'Disabled input here...'</span> <span class='na'>disabled</span><span class='nt'>&gt;</span></code></pre></div>

  <h3 id='forms-disabled-fieldsets'>Disabled fieldsets</h3>
  <p>Add the <code>disabled</code> attribute to a <code>&lt;fieldset&gt;</code> to disable all the controls within the <code>&lt;fieldset&gt;</code> at once.</p>

  <div class='bs-callout bs-callout-warning' id='callout-fieldset-disabled-pointer-events'>
    <h4>Caveat about link functionality of <code>&lt;a&gt;</code></h4>
    <p>By default, browsers will treat all native form controls (<code>&lt;input&gt;</code>, <code>&lt;select&gt;</code> and <code>&lt;button&gt;</code> elements) inside a <code>&lt;fieldset disabled&gt;</code> as disabled, preventing both keyboard and mouse interactions on them. However, if your form also includes <code>&lt;a ... class='btn btn-*'&gt;</code> elements, these will only be given a style of <code>pointer-events: none</code>. As noted in the section about <a href='#buttons-disabled'>disabled state for buttons</a> (and specifically in the sub-section for anchor elements), this CSS property is not yet standardized and isn't fully supported in Opera 18 and below, or in Internet Explorer 11, and won't prevent keyboard users from being able to focus or activate these links. So to be safe, use custom JavaScript to disable such links.</p>
  </div>

  <div class='bs-callout bs-callout-danger' id='callout-fieldset-disabled-ie'>
    <h4>Cross-browser compatibility</h4>
    <p>While Bootstrap will apply these styles in all browsers, Internet Explorer 11 and below don't fully support the <code>disabled</code> attribute on a <code>&lt;fieldset&gt;</code>. Use custom JavaScript to disable the fieldset in these browsers.</p>
  </div>

  <div class='bs-example' data-example-id='disabled-fieldset'>
    <form>
      <fieldset disabled>
        <div class='form-group'>
          <label for='disabledTextInput'>Disabled input</label>
          <input type='text' id='disabledTextInput' class='form-control' placeholder='Disabled input'>
        </div>
        <div class='form-group'>
          <label for='disabledSelect'>Disabled select menu</label>
          <select id='disabledSelect' class='form-control'>
            <option>Disabled select</option>
          </select>
        </div>
        <div class='checkbox'>
          <label>
            <input type='checkbox'> Can't check this
          </label>
        </div>
        <button type='submit' class='btn btn-primary'>Submit</button>
      </fieldset>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;form&gt;</span>
  <span class='nt'>&lt;fieldset</span> <span class='na'>disabled</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;label</span> <span class='na'>for=</span><span class='s'>'disabledTextInput'</span><span class='nt'>&gt;</span>Disabled input<span class='nt'>&lt;/label&gt;</span>
      <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>id=</span><span class='s'>'disabledTextInput'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>placeholder=</span><span class='s'>'Disabled input'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;label</span> <span class='na'>for=</span><span class='s'>'disabledSelect'</span><span class='nt'>&gt;</span>Disabled select menu<span class='nt'>&lt;/label&gt;</span>
      <span class='nt'>&lt;select</span> <span class='na'>id=</span><span class='s'>'disabledSelect'</span> <span class='na'>class=</span><span class='s'>'form-control'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;option&gt;</span>Disabled select<span class='nt'>&lt;/option&gt;</span>
      <span class='nt'>&lt;/select&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'checkbox'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;label&gt;</span>
        <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span><span class='nt'>&gt;</span> Can't check this
      <span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'submit'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span><span class='nt'>&gt;</span>Submit<span class='nt'>&lt;/button&gt;</span>
  <span class='nt'>&lt;/fieldset&gt;</span>
<span class='nt'>&lt;/form&gt;</span></code></pre></div>


  <h2 id='forms-control-readonly'>Readonly state</h2>
  <p>Add the <code>readonly</code> boolean attribute on an input to prevent modification of the input's value. Read-only inputs appear lighter (just like disabled inputs), but retain the standard cursor.</p>
  <div class='bs-example' data-example-id='readonly-text-form-control'>
    <form>
      <input class='form-control' type='text' placeholder='Readonly input here…' readonly>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;input</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>placeholder=</span><span class='s'>'Readonly input here…'</span> <span class='na'>readonly</span><span class='nt'>&gt;</span></code></pre></div>


  <h2 id='forms-help-text'>Help text</h2>
  <p>Block level help text for form controls.</p>
  <div class='bs-callout bs-callout-info' id='callout-help-text-accessibility'>
    <h4>Associating help text with form controls</h4>
    <p>Help text should be explicitly associated with the form control it relates to using the <code>aria-describedby</code> attribute. This will ensure that assistive technologies – such as screen readers – will announce this help text when the user focuses or enters the control.</p>
  </div>
  <div class='bs-example' data-example-id='simple-help-text'>
    <form>
      <div class='form-group'>
        <label for='inputHelpBlock'>Input with help text</label>
        <input type='text' id='inputHelpBlock' class='form-control' aria-describedby='helpBlock'>
      </div>
      <span id='helpBlock' class='help-block'>A block of help text that breaks onto a new line and may extend beyond one line.</span>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'sr-only'</span> <span class='na'>for=</span><span class='s'>'inputHelpBlock'</span><span class='nt'>&gt;</span>Input with help text<span class='nt'>&lt;/label&gt;</span>
<span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>id=</span><span class='s'>'inputHelpBlock'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>aria-describedby=</span><span class='s'>'helpBlock'</span><span class='nt'>&gt;</span>
...
<span class='nt'>&lt;span</span> <span class='na'>id=</span><span class='s'>'helpBlock'</span> <span class='na'>class=</span><span class='s'>'help-block'</span><span class='nt'>&gt;</span>A block of help text that breaks onto a new line and may extend beyond one line.<span class='nt'>&lt;/span&gt;</span></code></pre></div>
</div>


  <h2 id='forms-control-validation'>Validation states</h2>
  <p>Bootstrap includes validation styles for error, warning, and success states on form controls. To use, add <code>.has-warning</code>, <code>.has-error</code>, or <code>.has-success</code> to the parent element. Any <code>.control-label</code>, <code>.form-control</code>, and <code>.help-block</code> within that element will receive the validation styles.</p>

  <div class='bs-callout bs-callout-warning' id='callout-form-validation-state-accessibility'>
    <h4>Conveying validation state to assistive technologies and colorblind users</h4>
    <p>Using these validation styles to denote the state of a form control only provides a visual, color-based indication, which will not be conveyed to users of assistive technologies - such as screen readers - or to colorblind users.</p>
    <p>Ensure that an alternative indication of state is also provided. For instance, you can include a hint about state in the form control's <code>&lt;label&gt;</code> text itself (as is the case in the following code example), include a <a href='../components/#glyphicons'>Glyphicon</a> (with appropriate alternative text using the <code>.sr-only</code> class - see the <a href='../components/#glyphicons-examples'>Glyphicon examples</a>), or by providing an additional <a href='#forms-help-text'>help text</a> block. Specifically for assistive technologies, invalid form controls can also be assigned an <code>aria-invalid='true'</code> attribute.</p>
  </div>

  <div class='bs-example' data-example-id='form-validation-states'>
    <form>
      <div class='form-group has-success'>
        <label class='control-label' for='inputSuccess1'>Input with success</label>
        <input type='text' class='form-control' id='inputSuccess1' aria-describedby='helpBlock2'>
        <span id='helpBlock2' class='help-block'>A block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
      <div class='form-group has-warning'>
        <label class='control-label' for='inputWarning1'>Input with warning</label>
        <input type='text' class='form-control' id='inputWarning1'>
      </div>
      <div class='form-group has-error'>
        <label class='control-label' for='inputError1'>Input with error</label>
        <input type='text' class='form-control' id='inputError1'>
      </div>
      <div class='has-success'>
        <div class='checkbox'>
          <label>
            <input type='checkbox' id='checkboxSuccess' value='option1'>
            Checkbox with success
          </label>
        </div>
      </div>
      <div class='has-warning'>
        <div class='checkbox'>
          <label>
            <input type='checkbox' id='checkboxWarning' value='option1'>
            Checkbox with warning
          </label>
        </div>
      </div>
      <div class='has-error'>
        <div class='checkbox'>
          <label>
            <input type='checkbox' id='checkboxError' value='option1'>
            Checkbox with error
          </label>
        </div>
      </div>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group has-success'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'control-label'</span> <span class='na'>for=</span><span class='s'>'inputSuccess1'</span><span class='nt'>&gt;</span>Input with success<span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputSuccess1'</span> <span class='na'>aria-describedby=</span><span class='s'>'helpBlock2'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;span</span> <span class='na'>id=</span><span class='s'>'helpBlock2'</span> <span class='na'>class=</span><span class='s'>'help-block'</span><span class='nt'>&gt;</span>A block of help text that breaks onto a new line and may extend beyond one line.<span class='nt'>&lt;/span&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group has-warning'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'control-label'</span> <span class='na'>for=</span><span class='s'>'inputWarning1'</span><span class='nt'>&gt;</span>Input with warning<span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputWarning1'</span><span class='nt'>&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group has-error'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'control-label'</span> <span class='na'>for=</span><span class='s'>'inputError1'</span><span class='nt'>&gt;</span>Input with error<span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputError1'</span><span class='nt'>&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'has-success'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'checkbox'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label&gt;</span>
      <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span> <span class='na'>id=</span><span class='s'>'checkboxSuccess'</span> <span class='na'>value=</span><span class='s'>'option1'</span><span class='nt'>&gt;</span>
      Checkbox with success
    <span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'has-warning'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'checkbox'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label&gt;</span>
      <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span> <span class='na'>id=</span><span class='s'>'checkboxWarning'</span> <span class='na'>value=</span><span class='s'>'option1'</span><span class='nt'>&gt;</span>
      Checkbox with warning
    <span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'has-error'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'checkbox'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label&gt;</span>
      <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span> <span class='na'>id=</span><span class='s'>'checkboxError'</span> <span class='na'>value=</span><span class='s'>'option1'</span><span class='nt'>&gt;</span>
      Checkbox with error
    <span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h3>With optional icons</h3>
  <p>You can also add optional feedback icons with the addition of <code>.has-feedback</code> and the right icon.</p>
  <p><strong class='text-danger'>Feedback icons only work with textual <code>&lt;input class='form-control'&gt;</code> elements.</strong></p>
  <div class='bs-callout bs-callout-warning' id='callout-has-feedback-icon-positioning'>
    <h4>Icons, labels, and input groups</h4>
    <p>Manual positioning of feedback icons is required for inputs without a label and for <a href='../components#input-groups'>input groups</a> with an add-on on the right. You are strongly encouraged to provide labels for all inputs for accessibility reasons. If you wish to prevent labels from being displayed, hide them with the <code>.sr-only</code> class. If you must do without labels, adjust the <code>top</code> value of the feedback icon. For input groups, adjust the <code>right</code> value to an appropriate pixel value depending on the width of your addon.</p>
  </div>
  <div class='bs-callout bs-callout-warning' id='callout-has-feedback-icon-accessibility'>
    <h4>Conveying the icon's meaning to assistive technologies</h4>
    <p>To ensure that assistive technologies – such as screen readers – correctly convey the meaning of an icon, additional hidden text should be included with the <code>.sr-only</code> class and explicitly associated with the form control it relates to using <code>aria-describedby</code>. Alternatively, ensure that the meaning (for instance, the fact that there is a warning for a particular text entry field) is conveyed in some other form, such as changing the text of the actual <code>&lt;label&gt;</code> associated with the form control.</p>
    <p>Although the following examples already mention the validation state of their respective form controls in the <code>&lt;label&gt;</code> text itself, the above technique (using <code>.sr-only</code> text and <code>aria-describedby</code>) has been included for illustrative purposes.</p>
  </div>
  <div class='bs-example' data-example-id='form-validation-states-with-icons'>
    <form>
      <div class='form-group has-success has-feedback'>
        <label class='control-label' for='inputSuccess2'>Input with success</label>
        <input type='text' class='form-control' id='inputSuccess2' aria-describedby='inputSuccess2Status'>
        <span class='glyphicon glyphicon-ok form-control-feedback' aria-hidden='true'></span>
        <span id='inputSuccess2Status' class='sr-only'>(success)</span>
      </div>
      <div class='form-group has-warning has-feedback'>
        <label class='control-label' for='inputWarning2'>Input with warning</label>
        <input type='text' class='form-control' id='inputWarning2' aria-describedby='inputWarning2Status'>
        <span class='glyphicon glyphicon-warning-sign form-control-feedback' aria-hidden='true'></span>
        <span id='inputWarning2Status' class='sr-only'>(warning)</span>
      </div>
      <div class='form-group has-error has-feedback'>
        <label class='control-label' for='inputError2'>Input with error</label>
        <input type='text' class='form-control' id='inputError2' aria-describedby='inputError2Status'>
        <span class='glyphicon glyphicon-remove form-control-feedback' aria-hidden='true'></span>
        <span id='inputError2Status' class='sr-only'>(error)</span>
      </div>
      <div class='form-group has-success has-feedback'>
        <label class='control-label' for='inputGroupSuccess1'>Input group with success</label>
        <div class='input-group'>
          <span class='input-group-addon'>@</span>
          <input type='text' class='form-control' id='inputGroupSuccess1' aria-describedby='inputGroupSuccess1Status'>
        </div>
        <span class='glyphicon glyphicon-ok form-control-feedback' aria-hidden='true'></span>
        <span id='inputGroupSuccess1Status' class='sr-only'>(success)</span>
      </div>
    </form>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group has-success has-feedback'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'control-label'</span> <span class='na'>for=</span><span class='s'>'inputSuccess2'</span><span class='nt'>&gt;</span>Input with success<span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputSuccess2'</span> <span class='na'>aria-describedby=</span><span class='s'>'inputSuccess2Status'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'glyphicon glyphicon-ok form-control-feedback'</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;&lt;/span&gt;</span>
  <span class='nt'>&lt;span</span> <span class='na'>id=</span><span class='s'>'inputSuccess2Status'</span> <span class='na'>class=</span><span class='s'>'sr-only'</span><span class='nt'>&gt;</span>(success)<span class='nt'>&lt;/span&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group has-warning has-feedback'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'control-label'</span> <span class='na'>for=</span><span class='s'>'inputWarning2'</span><span class='nt'>&gt;</span>Input with warning<span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputWarning2'</span> <span class='na'>aria-describedby=</span><span class='s'>'inputWarning2Status'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'glyphicon glyphicon-warning-sign form-control-feedback'</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;&lt;/span&gt;</span>
  <span class='nt'>&lt;span</span> <span class='na'>id=</span><span class='s'>'inputWarning2Status'</span> <span class='na'>class=</span><span class='s'>'sr-only'</span><span class='nt'>&gt;</span>(warning)<span class='nt'>&lt;/span&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group has-error has-feedback'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'control-label'</span> <span class='na'>for=</span><span class='s'>'inputError2'</span><span class='nt'>&gt;</span>Input with error<span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputError2'</span> <span class='na'>aria-describedby=</span><span class='s'>'inputError2Status'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'glyphicon glyphicon-remove form-control-feedback'</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;&lt;/span&gt;</span>
  <span class='nt'>&lt;span</span> <span class='na'>id=</span><span class='s'>'inputError2Status'</span> <span class='na'>class=</span><span class='s'>'sr-only'</span><span class='nt'>&gt;</span>(error)<span class='nt'>&lt;/span&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group has-success has-feedback'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'control-label'</span> <span class='na'>for=</span><span class='s'>'inputGroupSuccess1'</span><span class='nt'>&gt;</span>Input group with success<span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'input-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'input-group-addon'</span><span class='nt'>&gt;</span>@<span class='nt'>&lt;/span&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputGroupSuccess1'</span> <span class='na'>aria-describedby=</span><span class='s'>'inputGroupSuccess1Status'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'glyphicon glyphicon-ok form-control-feedback'</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;&lt;/span&gt;</span>
  <span class='nt'>&lt;span</span> <span class='na'>id=</span><span class='s'>'inputGroupSuccess1Status'</span> <span class='na'>class=</span><span class='s'>'sr-only'</span><span class='nt'>&gt;</span>(success)<span class='nt'>&lt;/span&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h4>Optional icons in horizontal and inline forms</h4>
  <div class='bs-example' data-example-id='horizontal-form-validation-state-with-icon'>
    <form class='form-horizontal'>
      <div class='form-group has-success has-feedback'>
        <label class='control-label col-sm-3' for='inputSuccess3'>Input with success</label>
        <div class='col-sm-9'>
          <input type='text' class='form-control' id='inputSuccess3' aria-describedby='inputSuccess3Status'>
          <span class='glyphicon glyphicon-ok form-control-feedback' aria-hidden='true'></span>
          <span id='inputSuccess3Status' class='sr-only'>(success)</span>
        </div>
      </div>
      <div class='form-group has-success has-feedback'>
        <label class='control-label col-sm-3' for='inputGroupSuccess2'>Input group with success</label>
        <div class='col-sm-9'>
          <div class='input-group'>
            <span class='input-group-addon'>@</span>
            <input type='text' class='form-control' id='inputGroupSuccess2' aria-describedby='inputGroupSuccess2Status'>
          </div>
          <span class='glyphicon glyphicon-ok form-control-feedback' aria-hidden='true'></span>
          <span id='inputGroupSuccess2Status' class='sr-only'>(success)</span>
        </div>
      </div>
    </form>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;form</span> <span class='na'>class=</span><span class='s'>'form-horizontal'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group has-success has-feedback'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'control-label col-sm-3'</span> <span class='na'>for=</span><span class='s'>'inputSuccess3'</span><span class='nt'>&gt;</span>Input with success<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-9'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputSuccess3'</span> <span class='na'>aria-describedby=</span><span class='s'>'inputSuccess3Status'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'glyphicon glyphicon-ok form-control-feedback'</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;&lt;/span&gt;</span>
      <span class='nt'>&lt;span</span> <span class='na'>id=</span><span class='s'>'inputSuccess3Status'</span> <span class='na'>class=</span><span class='s'>'sr-only'</span><span class='nt'>&gt;</span>(success)<span class='nt'>&lt;/span&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group has-success has-feedback'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'control-label col-sm-3'</span> <span class='na'>for=</span><span class='s'>'inputGroupSuccess2'</span><span class='nt'>&gt;</span>Input group with success<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-9'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'input-group'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'input-group-addon'</span><span class='nt'>&gt;</span>@<span class='nt'>&lt;/span&gt;</span>
        <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputGroupSuccess2'</span> <span class='na'>aria-describedby=</span><span class='s'>'inputGroupSuccess2Status'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;/div&gt;</span>
      <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'glyphicon glyphicon-ok form-control-feedback'</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;&lt;/span&gt;</span>
      <span class='nt'>&lt;span</span> <span class='na'>id=</span><span class='s'>'inputGroupSuccess2Status'</span> <span class='na'>class=</span><span class='s'>'sr-only'</span><span class='nt'>&gt;</span>(success)<span class='nt'>&lt;/span&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/form&gt;</span></code></pre></div>

  <div class='bs-example' data-example-id='inline-form-validation-state-with-icon'>
    <form class='form-inline'>
      <div class='form-group has-success has-feedback'>
        <label class='control-label' for='inputSuccess4'>Input with success</label>
        <input type='text' class='form-control' id='inputSuccess4' aria-describedby='inputSuccess4Status'>
        <span class='glyphicon glyphicon-ok form-control-feedback' aria-hidden='true'></span>
        <span id='inputSuccess4Status' class='sr-only'>(success)</span>
      </div>
    </form>
    <br>
    <form class='form-inline'>
      <div class='form-group has-success has-feedback'>
        <label class='control-label' for='inputGroupSuccess3'>Input group with success</label>
        <div class='input-group'>
          <span class='input-group-addon'>@</span>
          <input type='text' class='form-control' id='inputGroupSuccess3' aria-describedby='inputGroupSuccess3Status'>
        </div>
        <span class='glyphicon glyphicon-ok form-control-feedback' aria-hidden='true'></span>
        <span id='inputGroupSuccess3Status' class='sr-only'>(success)</span>
      </div>
    </form>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;form</span> <span class='na'>class=</span><span class='s'>'form-inline'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group has-success has-feedback'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'control-label'</span> <span class='na'>for=</span><span class='s'>'inputSuccess4'</span><span class='nt'>&gt;</span>Input with success<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputSuccess4'</span> <span class='na'>aria-describedby=</span><span class='s'>'inputSuccess4Status'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'glyphicon glyphicon-ok form-control-feedback'</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;&lt;/span&gt;</span>
    <span class='nt'>&lt;span</span> <span class='na'>id=</span><span class='s'>'inputSuccess4Status'</span> <span class='na'>class=</span><span class='s'>'sr-only'</span><span class='nt'>&gt;</span>(success)<span class='nt'>&lt;/span&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/form&gt;</span>
<span class='nt'>&lt;form</span> <span class='na'>class=</span><span class='s'>'form-inline'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group has-success has-feedback'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'control-label'</span> <span class='na'>for=</span><span class='s'>'inputGroupSuccess3'</span><span class='nt'>&gt;</span>Input group with success<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'input-group'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'input-group-addon'</span><span class='nt'>&gt;</span>@<span class='nt'>&lt;/span&gt;</span>
      <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputGroupSuccess3'</span> <span class='na'>aria-describedby=</span><span class='s'>'inputGroupSuccess3Status'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'glyphicon glyphicon-ok form-control-feedback'</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;&lt;/span&gt;</span>
    <span class='nt'>&lt;span</span> <span class='na'>id=</span><span class='s'>'inputGroupSuccess3Status'</span> <span class='na'>class=</span><span class='s'>'sr-only'</span><span class='nt'>&gt;</span>(success)<span class='nt'>&lt;/span&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/form&gt;</span></code></pre></div>

  <h4>Optional icons with hidden <code>.sr-only</code> labels</h4>
  <p>If you use the <code>.sr-only</code> class to hide a form control's <code>&lt;label&gt;</code> (rather than using other labelling options, such as the <code>aria-label</code> attribute), Bootstrap will automatically adjust the position of the icon once it's been added.</p>
  <div class='bs-example' data-example-id='form-validation-state-with-icon-without-label'>
    <div class='form-group has-success has-feedback'>
      <label class='control-label sr-only' for='inputSuccess5'>Hidden label</label>
      <input type='text' class='form-control' id='inputSuccess5' aria-describedby='inputSuccess5Status'>
      <span class='glyphicon glyphicon-ok form-control-feedback' aria-hidden='true'></span>
      <span id='inputSuccess5Status' class='sr-only'>(success)</span>
    </div>
    <div class='form-group has-success has-feedback'>
      <label class='control-label sr-only' for='inputGroupSuccess4'>Input group with success</label>
      <div class='input-group'>
        <span class='input-group-addon'>@</span>
        <input type='text' class='form-control' id='inputGroupSuccess4' aria-describedby='inputGroupSuccess4Status'>
      </div>
      <span class='glyphicon glyphicon-ok form-control-feedback' aria-hidden='true'></span>
      <span id='inputGroupSuccess4Status' class='sr-only'>(success)</span>
    </div>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group has-success has-feedback'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'control-label sr-only'</span> <span class='na'>for=</span><span class='s'>'inputSuccess5'</span><span class='nt'>&gt;</span>Hidden label<span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputSuccess5'</span> <span class='na'>aria-describedby=</span><span class='s'>'inputSuccess5Status'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'glyphicon glyphicon-ok form-control-feedback'</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;&lt;/span&gt;</span>
  <span class='nt'>&lt;span</span> <span class='na'>id=</span><span class='s'>'inputSuccess5Status'</span> <span class='na'>class=</span><span class='s'>'sr-only'</span><span class='nt'>&gt;</span>(success)<span class='nt'>&lt;/span&gt;</span>
<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group has-success has-feedback'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'control-label sr-only'</span> <span class='na'>for=</span><span class='s'>'inputGroupSuccess4'</span><span class='nt'>&gt;</span>Input group with success<span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'input-group'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'input-group-addon'</span><span class='nt'>&gt;</span>@<span class='nt'>&lt;/span&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'inputGroupSuccess4'</span> <span class='na'>aria-describedby=</span><span class='s'>'inputGroupSuccess4Status'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'glyphicon glyphicon-ok form-control-feedback'</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;&lt;/span&gt;</span>
  <span class='nt'>&lt;span</span> <span class='na'>id=</span><span class='s'>'inputGroupSuccess4Status'</span> <span class='na'>class=</span><span class='s'>'sr-only'</span><span class='nt'>&gt;</span>(success)<span class='nt'>&lt;/span&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>


  <h2 id='forms-control-sizes'>Control sizing</h2>
  <p>Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.</p>

  <h3>Height sizing</h3>
  <p>Create taller or shorter form controls that match button sizes.</p>
  <div class='bs-example bs-example-control-sizing' data-example-id='form-control-height-sizes'>
    <form>
      <div class='controls'>
        <input class='form-control input-lg' type='text' placeholder='.input-lg'>
        <input type='text' class='form-control' placeholder='Default input'>
        <input class='form-control input-sm' type='text' placeholder='.input-sm'>

        <select class='form-control input-lg'>
          <option value=''>.input-lg</option>
        </select>
        <select class='form-control'>
          <option value=''>Default select</option>
        </select>
        <select class='form-control input-sm'>
          <option value=''>.input-sm</option>
        </select>
      </div>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;input</span> <span class='na'>class=</span><span class='s'>'form-control input-lg'</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>placeholder=</span><span class='s'>'.input-lg'</span><span class='nt'>&gt;</span>
<span class='nt'>&lt;input</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>placeholder=</span><span class='s'>'Default input'</span><span class='nt'>&gt;</span>
<span class='nt'>&lt;input</span> <span class='na'>class=</span><span class='s'>'form-control input-sm'</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>placeholder=</span><span class='s'>'.input-sm'</span><span class='nt'>&gt;</span>

<span class='nt'>&lt;select</span> <span class='na'>class=</span><span class='s'>'form-control input-lg'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/select&gt;</span>
<span class='nt'>&lt;select</span> <span class='na'>class=</span><span class='s'>'form-control'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/select&gt;</span>
<span class='nt'>&lt;select</span> <span class='na'>class=</span><span class='s'>'form-control input-sm'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/select&gt;</span></code></pre></div>

  <h3>Horizontal form group sizes</h3>
  <p>Quickly size labels and form controls within <code>.form-horizontal</code> by adding <code>.form-group-lg</code> or <code>.form-group-sm</code>.</p>
  <div class='bs-example' data-example-id='form-group-height-sizes'>
    <form class='form-horizontal'>
      <div class='form-group form-group-lg'>
        <label class='col-sm-2 control-label' for='formGroupInputLarge'>Large label</label>
        <div class='col-sm-10'>
          <input class='form-control' type='text' id='formGroupInputLarge' placeholder='Large input'>
        </div>
      </div>
      <div class='form-group form-group-sm'>
        <label class='col-sm-2 control-label' for='formGroupInputSmall'>Small label</label>
        <div class='col-sm-10'>
          <input class='form-control' type='text' id='formGroupInputSmall' placeholder='Small input'>
        </div>
      </div>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;form</span> <span class='na'>class=</span><span class='s'>'form-horizontal'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group form-group-lg'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'col-sm-2 control-label'</span> <span class='na'>for=</span><span class='s'>'formGroupInputLarge'</span><span class='nt'>&gt;</span>Large label<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-10'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;input</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>id=</span><span class='s'>'formGroupInputLarge'</span> <span class='na'>placeholder=</span><span class='s'>'Large input'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group form-group-sm'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'col-sm-2 control-label'</span> <span class='na'>for=</span><span class='s'>'formGroupInputSmall'</span><span class='nt'>&gt;</span>Small label<span class='nt'>&lt;/label&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-10'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;input</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>id=</span><span class='s'>'formGroupInputSmall'</span> <span class='na'>placeholder=</span><span class='s'>'Small input'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/form&gt;</span></code></pre></div>


  <h3>Column sizing</h3>
  <p>Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>
  <div class='bs-example' data-example-id='form-control-column-sizing'>
    <form>
      <div class='row'>
        <div class='col-xs-2'>
          <input type='text' class='form-control' placeholder='.col-xs-2'>
        </div>
        <div class='col-xs-3'>
          <input type='text' class='form-control' placeholder='.col-xs-3'>
        </div>
        <div class='col-xs-4'>
          <input type='text' class='form-control' placeholder='.col-xs-4'>
        </div>
      </div>
    </form>
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-2'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>placeholder=</span><span class='s'>'.col-xs-2'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-3'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>placeholder=</span><span class='s'>'.col-xs-3'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-4'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>placeholder=</span><span class='s'>'.col-xs-4'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>


<div class='bs-docs-section'>
  <h1 id='buttons' class='page-header'>Buttons</h1>

  <h2 id='buttons-tags'>Button tags</h2>
  <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
  <form class='bs-example' data-example-id='btn-tags'>
    <a class='btn btn-default' href='#' role='button'>Link</a>
    <button class='btn btn-default' type='submit'>Button</button>
    <input class='btn btn-default' type='button' value='Input'>
    <input class='btn btn-default' type='submit' value='Submit'>
  </form>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;a</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>href=</span><span class='s'>'#'</span> <span class='na'>role=</span><span class='s'>'button'</span><span class='nt'>&gt;</span>Link<span class='nt'>&lt;/a&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>type=</span><span class='s'>'submit'</span><span class='nt'>&gt;</span>Button<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;input</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>value=</span><span class='s'>'Input'</span><span class='nt'>&gt;</span>
<span class='nt'>&lt;input</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>type=</span><span class='s'>'submit'</span> <span class='na'>value=</span><span class='s'>'Submit'</span><span class='nt'>&gt;</span></code></pre></div>

  <div class='bs-callout bs-callout-warning' id='callout-buttons-context-usage'>
    <h4>Context-specific usage</h4>
    <p>While button classes can be used on <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements, only <code>&lt;button&gt;</code> elements are supported within our nav and navbar components.</p>
  </div>

  <div class='bs-callout bs-callout-warning' id='callout-buttons-anchor-accessibility'>
    <h4>Links acting as buttons</h4>
    <p>If the <code>&lt;a&gt;</code> elements are used to act as buttons – triggering in-page functionality, rather than navigating to another document or section within the current page – they should also be given an appropriate <code>role='button'</code>.</p>
  </div>

  <div class='bs-callout bs-callout-warning' id='callout-buttons-ff-height'>
    <h4>Cross-browser rendering</h4>
    <p>As a best practice, <strong>we highly recommend using the <code>&lt;button&gt;</code> element whenever possible</strong> to ensure matching cross-browser rendering.</p>
    <p>Among other things, there's <a href='https://bugzilla.mozilla.org/show_bug.cgi?id=697451'>a bug in Firefox &lt;30</a> that prevents us from setting the <code>line-height</code> of <code>&lt;input&gt;</code>-based buttons, causing them to not exactly match the height of other buttons on Firefox.</p>
  </div>

  <h2 id='buttons-options'>Options</h2>
  <p>Use any of the available button classes to quickly create a styled button.</p>
  <div class='bs-example' data-example-id='btn-variants'>
    <button type='button' class='btn btn-default'>Default</button>
    <button type='button' class='btn btn-primary'>Primary</button>
    <button type='button' class='btn btn-success'>Success</button>
    <button type='button' class='btn btn-info'>Info</button>
    <button type='button' class='btn btn-warning'>Warning</button>
    <button type='button' class='btn btn-danger'>Danger</button>
    <button type='button' class='btn btn-link'>Link</button>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='c'>&lt;!-- Standard button --&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span><span class='nt'>&gt;</span>Default<span class='nt'>&lt;/button&gt;</span>

<span class='c'>&lt;!-- Provides extra visual weight and identifies the primary action in a set of buttons --&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span><span class='nt'>&gt;</span>Primary<span class='nt'>&lt;/button&gt;</span>

<span class='c'>&lt;!-- Indicates a successful or positive action --&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-success'</span><span class='nt'>&gt;</span>Success<span class='nt'>&lt;/button&gt;</span>

<span class='c'>&lt;!-- Contextual button for informational alert messages --&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-info'</span><span class='nt'>&gt;</span>Info<span class='nt'>&lt;/button&gt;</span>

<span class='c'>&lt;!-- Indicates caution should be taken with this action --&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-warning'</span><span class='nt'>&gt;</span>Warning<span class='nt'>&lt;/button&gt;</span>

<span class='c'>&lt;!-- Indicates a dangerous or potentially negative action --&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-danger'</span><span class='nt'>&gt;</span>Danger<span class='nt'>&lt;/button&gt;</span>

<span class='c'>&lt;!-- Deemphasize a button by making it look like a link while maintaining button behavior --&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-link'</span><span class='nt'>&gt;</span>Link<span class='nt'>&lt;/button&gt;</span></code></pre></div>

  <div class='bs-callout bs-callout-warning' id='callout-buttons-color-accessibility'>
    <h4>Conveying meaning to assistive technologies</h4>
    <p>Using color to add meaning to a button only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the visible text of the button), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code> class.</p>
  </div>

  <h2 id='buttons-sizes'>Sizes</h2>
  <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.</p>
  <div class='bs-example' data-example-id='btn-sizes'>
    <p>
      <button type='button' class='btn btn-primary btn-lg'>Large button</button>
      <button type='button' class='btn btn-default btn-lg'>Large button</button>
    </p>
    <p>
      <button type='button' class='btn btn-primary'>Default button</button>
      <button type='button' class='btn btn-default'>Default button</button>
    </p>
    <p>
      <button type='button' class='btn btn-primary btn-sm'>Small button</button>
      <button type='button' class='btn btn-default btn-sm'>Small button</button>
    </p>
    <p>
      <button type='button' class='btn btn-primary btn-xs'>Extra small button</button>
      <button type='button' class='btn btn-default btn-xs'>Extra small button</button>
    </p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;p&gt;</span>
  <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary btn-lg'</span><span class='nt'>&gt;</span>Large button<span class='nt'>&lt;/button&gt;</span>
  <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default btn-lg'</span><span class='nt'>&gt;</span>Large button<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p&gt;</span>
  <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span><span class='nt'>&gt;</span>Default button<span class='nt'>&lt;/button&gt;</span>
  <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span><span class='nt'>&gt;</span>Default button<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p&gt;</span>
  <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary btn-sm'</span><span class='nt'>&gt;</span>Small button<span class='nt'>&lt;/button&gt;</span>
  <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default btn-sm'</span><span class='nt'>&gt;</span>Small button<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p&gt;</span>
  <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary btn-xs'</span><span class='nt'>&gt;</span>Extra small button<span class='nt'>&lt;/button&gt;</span>
  <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default btn-xs'</span><span class='nt'>&gt;</span>Extra small button<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;/p&gt;</span></code></pre></div>

  <p>Create block level buttons&mdash;those that span the full width of a parent&mdash; by adding <code>.btn-block</code>.</p>
  <div class='bs-example' data-example-id='block-btns'>
    <div class='well center-block' style='max-width: 400px;'>
      <button type='button' class='btn btn-primary btn-lg btn-block'>Block level button</button>
      <button type='button' class='btn btn-default btn-lg btn-block'>Block level button</button>
    </div>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary btn-lg btn-block'</span><span class='nt'>&gt;</span>Block level button<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default btn-lg btn-block'</span><span class='nt'>&gt;</span>Block level button<span class='nt'>&lt;/button&gt;</span></code></pre></div>


  <h2 id='buttons-active'>Active state</h2>
  <p>Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. For <code>&lt;button&gt;</code> elements, this is done via <code>:active</code>. For <code>&lt;a&gt;</code> elements, it's done with <code>.active</code>. However, you may use <code>.active</code> on <code>&lt;button&gt;</code>s (and include the <code>aria-pressed='true'</code> attribute) should you need to replicate the active state programmatically.</p>

  <h3>Button element</h3>
  <p>No need to add <code>:active</code> as it's a pseudo-class, but if you need to force the same appearance, go ahead and add <code>.active</code>.</p>
  <p class='bs-example' data-example-id='active-button-btns'>
    <button type='button' class='btn btn-primary btn-lg active'>Primary button</button>
    <button type='button' class='btn btn-default btn-lg active'>Button</button>
  </p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary btn-lg active'</span><span class='nt'>&gt;</span>Primary button<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default btn-lg active'</span><span class='nt'>&gt;</span>Button<span class='nt'>&lt;/button&gt;</span></code></pre></div>

  <h3>Anchor element</h3>
  <p>Add the <code>.active</code> class to <code>&lt;a&gt;</code> buttons.</p>
  <p class='bs-example' data-example-id='active-anchor-btns'>
    <a href='#' class='btn btn-primary btn-lg active' role='button'>Primary link</a>
    <a href='#' class='btn btn-default btn-lg active' role='button'>Link</a>
  </p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;a</span> <span class='na'>href=</span><span class='s'>'#'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary btn-lg active'</span> <span class='na'>role=</span><span class='s'>'button'</span><span class='nt'>&gt;</span>Primary link<span class='nt'>&lt;/a&gt;</span>
<span class='nt'>&lt;a</span> <span class='na'>href=</span><span class='s'>'#'</span> <span class='na'>class=</span><span class='s'>'btn btn-default btn-lg active'</span> <span class='na'>role=</span><span class='s'>'button'</span><span class='nt'>&gt;</span>Link<span class='nt'>&lt;/a&gt;</span></code></pre></div>


  <h2 id='buttons-disabled'>Disabled state</h2>
  <p>Make buttons look unclickable by fading them back with <code>opacity</code>.</p>

  <h3>Button element</h3>
  <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
  <p class='bs-example' data-example-id='disabled-button-btns'>
    <button type='button' class='btn btn-primary btn-lg' disabled='disabled'>Primary button</button>
    <button type='button' class='btn btn-default btn-lg' disabled='disabled'>Button</button>
  </p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-lg btn-primary'</span> <span class='na'>disabled=</span><span class='s'>'disabled'</span><span class='nt'>&gt;</span>Primary button<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default btn-lg'</span> <span class='na'>disabled=</span><span class='s'>'disabled'</span><span class='nt'>&gt;</span>Button<span class='nt'>&lt;/button&gt;</span></code></pre></div>

  <div class='bs-callout bs-callout-danger' id='callout-buttons-ie-disabled'>
    <h4>Cross-browser compatibility</h4>
    <p>If you add the <code>disabled</code> attribute to a <code>&lt;button&gt;</code>, Internet Explorer 9 and below will render text gray with a nasty text-shadow that we cannot fix.</p>
  </div>

  <h3>Anchor element</h3>
  <p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>
  <p class='bs-example' data-example-id='disabled-anchor-btns'>
    <a href='#' class='btn btn-primary btn-lg disabled' role='button'>Primary link</a>
    <a href='#' class='btn btn-default btn-lg disabled' role='button'>Link</a>
  </p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;a</span> <span class='na'>href=</span><span class='s'>'#'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary btn-lg disabled'</span> <span class='na'>role=</span><span class='s'>'button'</span><span class='nt'>&gt;</span>Primary link<span class='nt'>&lt;/a&gt;</span>
<span class='nt'>&lt;a</span> <span class='na'>href=</span><span class='s'>'#'</span> <span class='na'>class=</span><span class='s'>'btn btn-default btn-lg disabled'</span> <span class='na'>role=</span><span class='s'>'button'</span><span class='nt'>&gt;</span>Link<span class='nt'>&lt;/a&gt;</span></code></pre></div>
  <p>
    We use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no prefix is required.
  </p>
  <div class='bs-callout bs-callout-warning' id='callout-buttons-disabled-anchor'>
    <h4>Link functionality caveat</h4>
    <p>This class uses <code>pointer-events: none</code> to try to disable the link functionality of <code>&lt;a&gt;</code>s, but that CSS property is not yet standardized and isn't fully supported in Opera 18 and below, or in Internet Explorer 11. In addition, even in browsers that do support <code>pointer-events: none</code>, keyboard navigation remains unaffected, meaning that sighted keyboard users and users of assistive technologies will still be able to activate these links. So to be safe, use custom JavaScript to disable such links.</p>
  </div>

</div>

<div class='bs-docs-section'>
  <h1 id='images' class='page-header'>Images</h1>

  <h2 id='images-responsive'>Responsive images</h2>
  <p>Images in Bootstrap 3 can be made responsive-friendly via the addition of the <code>.img-responsive</code> class. This applies <code>max-width: 100%;</code>, <code>height: auto;</code> and <code>display: block;</code> to the image so that it scales nicely to the parent element.</p>
  <p>To center images which use the <code>.img-responsive</code> class, use <code>.center-block</code> instead of <code>.text-center</code>. <a href='../css/#helper-classes-center'>See the helper classes section</a> for more details about <code>.center-block</code> usage.</p>
  <div class='bs-callout bs-callout-warning' id='callout-images-ie-svg'>
    <h4>SVG images and IE 8-10</h4>
    <p>In Internet Explorer 8-10, SVG images with <code>.img-responsive</code> are disproportionately sized. To fix this, add <code>width: 100% \9;</code> where necessary. Bootstrap doesn't apply this automatically as it causes complications to other image formats.</p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;img</span> <span class='na'>src=</span><span class='s'>'...'</span> <span class='na'>class=</span><span class='s'>'img-responsive'</span> <span class='na'>alt=</span><span class='s'>'Responsive image'</span><span class='nt'>&gt;</span></code></pre></div>

  <h2 id='images-shapes'>Image shapes</h2>
  <p>Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project.</p>
  <div class='bs-callout bs-callout-danger' id='callout-images-ie-rounded-corners'>
    <h4>Cross-browser compatibility</h4>
    <p>Keep in mind that Internet Explorer 8 lacks support for rounded corners.</p>
  </div>
  <div class='bs-example bs-example-images' data-example-id='image-shapes'>
    <img data-src='holder.js/140x140' class='img-rounded' alt='A generic square placeholder image with rounded corners'>
    <img data-src='holder.js/140x140' class='img-circle' alt='A generic square placeholder image where only the portion within the circle circumscribed about said square is visible'>
    <img data-src='holder.js/140x140' class='img-thumbnail' alt='A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera'>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;img</span> <span class='na'>src=</span><span class='s'>'...'</span> <span class='na'>alt=</span><span class='s'>'...'</span> <span class='na'>class=</span><span class='s'>'img-rounded'</span><span class='nt'>&gt;</span>
<span class='nt'>&lt;img</span> <span class='na'>src=</span><span class='s'>'...'</span> <span class='na'>alt=</span><span class='s'>'...'</span> <span class='na'>class=</span><span class='s'>'img-circle'</span><span class='nt'>&gt;</span>
<span class='nt'>&lt;img</span> <span class='na'>src=</span><span class='s'>'...'</span> <span class='na'>alt=</span><span class='s'>'...'</span> <span class='na'>class=</span><span class='s'>'img-thumbnail'</span><span class='nt'>&gt;</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='helper-classes' class='page-header'>Helper classes</h1>

  <h3 id='helper-classes-colors'>Contextual colors</h3>
  <p>Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links and will darken on hover just like our default link styles.</p>
  <div class='bs-example' data-example-id='contextual-colors-helpers'>
    <p class='text-muted'>Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
    <p class='text-primary'>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    <p class='text-success'>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
    <p class='text-info'>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
    <p class='text-warning'>Etiam porta sem malesuada magna mollis euismod.</p>
    <p class='text-danger'>Donec ullamcorper nulla non metus auctor fringilla.</p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'text-muted'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'text-primary'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'text-success'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'text-info'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'text-warning'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'text-danger'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/p&gt;</span></code></pre></div>
  <div class='bs-callout bs-callout-info' id='callout-helper-context-color-specificity'>
    <h4>Dealing with specificity</h4>
    <p>Sometimes emphasis classes cannot be applied due to the specificity of another selector. In most cases, a sufficient workaround is to wrap your text in a <code>&lt;span&gt;</code> with the class.</p>
  </div>
  <div class='bs-callout bs-callout-warning' id='callout-helper-context-color-accessibility'>
    <h4>Conveying meaning to assistive technologies</h4>
    <p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the contextual colors are only used to reinforce meaning that is already present in the text/markup), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code> class.</p>
  </div>

  <h3 id='helper-classes-backgrounds'>Contextual backgrounds</h3>
  <p>Similar to the contextual text color classes, easily set the background of an element to any contextual class. Anchor components will darken on hover, just like the text classes.</p>
  <div class='bs-example bs-example-bg-classes' data-example-id='contextual-backgrounds-helpers'>
    <p class='bg-primary'>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    <p class='bg-success'>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
    <p class='bg-info'>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
    <p class='bg-warning'>Etiam porta sem malesuada magna mollis euismod.</p>
    <p class='bg-danger'>Donec ullamcorper nulla non metus auctor fringilla.</p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'bg-primary'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'bg-success'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'bg-info'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'bg-warning'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/p&gt;</span>
<span class='nt'>&lt;p</span> <span class='na'>class=</span><span class='s'>'bg-danger'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/p&gt;</span></code></pre></div>
  <div class='bs-callout bs-callout-info' id='callout-helper-bg-specificity'>
    <h4>Dealing with specificity</h4>
    <p>Sometimes contextual background classes cannot be applied due to the specificity of another selector. In some cases, a sufficient workaround is to wrap your element's content in a <code>&lt;div&gt;</code> with the class.</p>
  </div>
  <div class='bs-callout bs-callout-warning' id='callout-helper-bg-accessibility'>
    <h4>Conveying meaning to assistive technologies</h4>
    <p>As with <a href='#helper-classes-colors'>contextual colors</a>, ensure that any meaning conveyed through color is also conveyed in a format that is not purely presentational.</p>
  </div>

  <h3 id='helper-classes-close'>Close icon</h3>
  <p>Use the generic close icon for dismissing content like modals and alerts.</p>
  <div class='bs-example' data-example-id='close-icon'>
    <p><button type='button' class='close' aria-label='Close'><span aria-hidden='true'>&times;</span></button></p>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'close'</span> <span class='na'>aria-label=</span><span class='s'>'Close'</span><span class='nt'>&gt;&lt;span</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;</span><span class='ni'>&amp;times;</span><span class='nt'>&lt;/span&gt;&lt;/button&gt;</span></code></pre></div>


  <h3 id='helper-classes-carets'>Carets</h3>
  <p>Use carets to indicate dropdown functionality and direction. Note that the default caret will reverse automatically in <a href='../components/#btn-dropdowns-dropup'>dropup menus</a>.</p>
  <div class='bs-example' data-example-id='caret'>
    <span class='caret'></span>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'caret'</span><span class='nt'>&gt;&lt;/span&gt;</span></code></pre></div>


  <h3 id='helper-classes-floats'>Quick floats</h3>
  <p>Float an element to the left or right with a class. <code>!important</code> is included to avoid specificity issues. Classes can also be used as mixins.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'pull-left'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'pull-right'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span></code></pre></div>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='c1'>// Classes
</span><span class='nc'>.pull-left</span> <span class='p'>{</span>
  <span class='nl'>float</span><span class='p'>:</span> <span class='nb'>left</span> <span class='o'>!</span><span class='n'>important</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.pull-right</span> <span class='p'>{</span>
  <span class='nl'>float</span><span class='p'>:</span> <span class='nb'>right</span> <span class='o'>!</span><span class='n'>important</span><span class='p'>;</span>
<span class='p'>}</span>

<span class='c1'>// Usage as mixins
</span><span class='nc'>.element</span> <span class='p'>{</span>
  <span class='nc'>.pull-left</span><span class='o'>()</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.another-element</span> <span class='p'>{</span>
  <span class='nc'>.pull-right</span><span class='o'>()</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>

  <div class='bs-callout bs-callout-warning' id='callout-helper-pull-navbar'>
    <h4>Not for use in navbars</h4>
    <p>To align components in navbars with utility classes, use <code>.navbar-left</code> or <code>.navbar-right</code> instead. <a href='../components/#navbar-component-alignment'>See the navbar docs</a> for details.</p>
  </div>


  <h3 id='helper-classes-center'>Center content blocks</h3>
  <p>Set an element to <code>display: block</code> and center via <code>margin</code>. Available as a mixin and class.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'center-block'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span></code></pre></div>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='c1'>// Class
</span><span class='nc'>.center-block</span> <span class='p'>{</span>
  <span class='nl'>display</span><span class='p'>:</span> <span class='nb'>block</span><span class='p'>;</span>
  <span class='nl'>margin-left</span><span class='p'>:</span> <span class='nb'>auto</span><span class='p'>;</span>
  <span class='nl'>margin-right</span><span class='p'>:</span> <span class='nb'>auto</span><span class='p'>;</span>
<span class='p'>}</span>

<span class='c1'>// Usage as a mixin
</span><span class='nc'>.element</span> <span class='p'>{</span>
  <span class='nc'>.center-block</span><span class='o'>()</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>


  <h3 id='helper-classes-clearfix'>Clearfix</h3>
  <p>Easily clear <code>float</code>s by adding <code>.clearfix</code> <strong>to the parent element</strong>. Utilizes <a href='http://nicolasgallagher.com/micro-clearfix-hack/'>the micro clearfix</a> as popularized by Nicolas Gallagher. Can also be used as a mixin.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='c'>&lt;!-- Usage as a class --&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'clearfix'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span></code></pre></div>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='c1'>// Mixin itself
</span><span class='nc'>.clearfix</span><span class='o'>()</span> <span class='p'>{</span>
  <span class='k'>&amp;</span><span class='nd'>:before</span><span class='o'>,</span>
  <span class='k'>&amp;</span><span class='nd'>:after</span> <span class='p'>{</span>
    <span class='nl'>content</span><span class='p'>:</span> <span class='s2'>' '</span><span class='p'>;</span>
    <span class='nl'>display</span><span class='p'>:</span> <span class='n'>table</span><span class='p'>;</span>
  <span class='p'>}</span>
  <span class='k'>&amp;</span><span class='nd'>:after</span> <span class='p'>{</span>
    <span class='nl'>clear</span><span class='p'>:</span> <span class='nb'>both</span><span class='p'>;</span>
  <span class='p'>}</span>
<span class='p'>}</span>

<span class='c1'>// Usage as a mixin
</span><span class='nc'>.element</span> <span class='p'>{</span>
  <span class='nc'>.clearfix</span><span class='o'>()</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>


  <h3 id='helper-classes-show-hide'>Showing and hiding content</h3>
  <p>Force an element to be shown or hidden (<strong>including for screen readers</strong>) with the use of <code>.show</code> and <code>.hidden</code> classes. These classes use <code>!important</code> to avoid specificity conflicts, just like the <a href='#helper-classes-floats'>quick floats</a>. They are only available for block level toggling. They can also be used as mixins.</p>
  <p><code>.hide</code> is available, but it does not always affect screen readers and is <strong>deprecated</strong> as of v3.0.1. Use <code>.hidden</code> or <code>.sr-only</code> instead.</p>
  <p>Furthermore, <code>.invisible</code> can be used to toggle only the visibility of an element, meaning its <code>display</code> is not modified and the element can still affect the flow of the document.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'show'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'hidden'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span></code></pre></div>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='c1'>// Classes
</span><span class='nc'>.show</span> <span class='p'>{</span>
  <span class='nl'>display</span><span class='p'>:</span> <span class='nb'>block</span> <span class='o'>!</span><span class='n'>important</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.hidden</span> <span class='p'>{</span>
  <span class='nl'>display</span><span class='p'>:</span> <span class='nb'>none</span> <span class='o'>!</span><span class='n'>important</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.invisible</span> <span class='p'>{</span>
  <span class='nl'>visibility</span><span class='p'>:</span> <span class='nb'>hidden</span><span class='p'>;</span>
<span class='p'>}</span>

<span class='c1'>// Usage as mixins
</span><span class='nc'>.element</span> <span class='p'>{</span>
  <span class='nc'>.show</span><span class='o'>()</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.another-element</span> <span class='p'>{</span>
  <span class='nc'>.hidden</span><span class='o'>()</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>


  <h3 id='helper-classes-screen-readers'>Screen reader and keyboard navigation content</h3>
  <p>Hide an element to all devices <strong>except screen readers</strong> with <code>.sr-only</code>. Combine <code>.sr-only</code> with <code>.sr-only-focusable</code> to show the element again when it's focused (e.g. by a keyboard-only user). Necessary for following <a href='../getting-started/#accessibility'>accessibility best practices</a>. Can also be used as mixins.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;a</span> <span class='na'>class=</span><span class='s'>'sr-only sr-only-focusable'</span> <span class='na'>href=</span><span class='s'>'#content'</span><span class='nt'>&gt;</span>Skip to main content<span class='nt'>&lt;/a&gt;</span></code></pre></div>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='c1'>// Usage as a mixin
</span><span class='nc'>.skip-navigation</span> <span class='p'>{</span>
  <span class='nc'>.sr-only</span><span class='o'>()</span><span class='p'>;</span>
  <span class='nc'>.sr-only-focusable</span><span class='o'>()</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>


  <h3 id='helper-classes-image-replacement'>Image replacement</h3>
  <p>Utilize the <code>.text-hide</code> class or mixin to help replace an element's text content with a background image.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;h1</span> <span class='na'>class=</span><span class='s'>'text-hide'</span><span class='nt'>&gt;</span>Custom heading<span class='nt'>&lt;/h1&gt;</span></code></pre></div>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='c1'>// Usage as a mixin
</span><span class='nc'>.heading</span> <span class='p'>{</span>
  <span class='nc'>.text-hide</span><span class='o'>()</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='responsive-utilities' class='page-header'>Responsive utilities</h1>

  <p class='lead'>For faster mobile-friendly development, use these utility classes for showing and hiding content by device via media query. Also included are utility classes for toggling content when printed.</p>
  <p>Try to use these on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation.</p>


  <h2 id='responsive-utilities-classes'>Available classes</h2>
  <p>Use a single or combination of the available classes for toggling content across viewport breakpoints.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped responsive-utilities'>
      <thead>
        <tr>
          <th></th>
          <th>
            Extra small devices
            <small>Phones (&lt;768px)</small>
          </th>
          <th>
            Small devices
            <small>Tablets (&ge;768px)</small>
          </th>
          <th>
            Medium devices
            <small>Desktops (&ge;992px)</small>
          </th>
          <th>
            Large devices
            <small>Desktops (&ge;1200px)</small>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope='row'><code>.visible-xs-*</code></th>
          <td class='is-visible'>Visible</td>
          <td class='is-hidden'>Hidden</td>
          <td class='is-hidden'>Hidden</td>
          <td class='is-hidden'>Hidden</td>
        </tr>
        <tr>
          <th scope='row'><code>.visible-sm-*</code></th>
          <td class='is-hidden'>Hidden</td>
          <td class='is-visible'>Visible</td>
          <td class='is-hidden'>Hidden</td>
          <td class='is-hidden'>Hidden</td>
        </tr>
        <tr>
          <th scope='row'><code>.visible-md-*</code></th>
          <td class='is-hidden'>Hidden</td>
          <td class='is-hidden'>Hidden</td>
          <td class='is-visible'>Visible</td>
          <td class='is-hidden'>Hidden</td>
        </tr>
        <tr>
          <th scope='row'><code>.visible-lg-*</code></th>
          <td class='is-hidden'>Hidden</td>
          <td class='is-hidden'>Hidden</td>
          <td class='is-hidden'>Hidden</td>
          <td class='is-visible'>Visible</td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <th scope='row'><code>.hidden-xs</code></th>
          <td class='is-hidden'>Hidden</td>
          <td class='is-visible'>Visible</td>
          <td class='is-visible'>Visible</td>
          <td class='is-visible'>Visible</td>
        </tr>
        <tr>
          <th scope='row'><code>.hidden-sm</code></th>
          <td class='is-visible'>Visible</td>
          <td class='is-hidden'>Hidden</td>
          <td class='is-visible'>Visible</td>
          <td class='is-visible'>Visible</td>
        </tr>
        <tr>
          <th scope='row'><code>.hidden-md</code></th>
          <td class='is-visible'>Visible</td>
          <td class='is-visible'>Visible</td>
          <td class='is-hidden'>Hidden</td>
          <td class='is-visible'>Visible</td>
        </tr>
        <tr>
          <th scope='row'><code>.hidden-lg</code></th>
          <td class='is-visible'>Visible</td>
          <td class='is-visible'>Visible</td>
          <td class='is-visible'>Visible</td>
          <td class='is-hidden'>Hidden</td>
        </tr>
      </tbody>
    </table>
  </div>

  <p>As of v3.2.0, the <code>.visible-*-*</code> classes for each breakpoint come in three variations, one for each CSS <code>display</code> property value listed below.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped'>
      <thead>
        <tr>
          <th>Group of classes</th>
          <th>CSS <code>display</code></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope='row'><code>.visible-*-block</code></th>
          <td><code>display: block;</code></td>
        </tr>
        <tr>
          <th scope='row'><code>.visible-*-inline</code></th>
          <td><code>display: inline;</code></td>
        </tr>
        <tr>
          <th scope='row'><code>.visible-*-inline-block</code></th>
          <td><code>display: inline-block;</code></td>
        </tr>
      </tbody>
    </table>
  </div>
  <p>So, for extra small (<code>xs</code>) screens for example, the available <code>.visible-*-*</code> classes are: <code>.visible-xs-block</code>, <code>.visible-xs-inline</code>, and <code>.visible-xs-inline-block</code>.</p>
  <p>The classes <code>.visible-xs</code>, <code>.visible-sm</code>, <code>.visible-md</code>, and <code>.visible-lg</code> also exist, but are <strong>deprecated as of v3.2.0</strong>. They are approximately equivalent to <code>.visible-*-block</code>, except with additional special cases for toggling <code>&lt;table&gt;</code>-related elements.</p>

  <h2 id='responsive-utilities-print'>Print classes</h2>
  <p>Similar to the regular responsive classes, use these for toggling content for print.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped responsive-utilities'>
      <thead>
        <tr>
          <th>Classes</th>
          <th>Browser</th>
          <th>Print</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope='row'>
            <code>.visible-print-block</code><br>
            <code>.visible-print-inline</code><br>
            <code>.visible-print-inline-block</code>
          </th>
          <td class='is-hidden'>Hidden</td>
          <td class='is-visible'>Visible</td>
        </tr>
        <tr>
          <th scope='row'><code>.hidden-print</code></th>
          <td class='is-visible'>Visible</td>
          <td class='is-hidden'>Hidden</td>
        </tr>
      </tbody>
    </table>
  </div>
  <p>The class <code>.visible-print</code> also exists but is <strong>deprecated</strong> as of v3.2.0. It is approximately equivalent to <code>.visible-print-block</code>, except with additional special cases for <code>&lt;table&gt;</code>-related elements.</p>


  <h2 id='responsive-utilities-tests'>Test cases</h2>
  <p>Resize your browser or load on different devices to test the responsive utility classes.</p>

  <h3>Visible on...</h3>
  <p>Green checkmarks indicate the element <strong>is visible</strong> in your current viewport.</p>
  <div class='row responsive-utilities-test visible-on'>
    <div class='col-xs-6 col-sm-3'>
      <span class='hidden-xs'>Extra small</span>
      <span class='visible-xs-block'>&#10004; Visible on x-small</span>
    </div>
    <div class='col-xs-6 col-sm-3'>
      <span class='hidden-sm'>Small</span>
      <span class='visible-sm-block'>&#10004; Visible on small</span>
    </div>
    <div class='clearfix visible-xs-block'></div>
    <div class='col-xs-6 col-sm-3'>
      <span class='hidden-md'>Medium</span>
      <span class='visible-md-block'>&#10004; Visible on medium</span>
    </div>
    <div class='col-xs-6 col-sm-3'>
      <span class='hidden-lg'>Large</span>
      <span class='visible-lg-block'>&#10004; Visible on large</span>
    </div>
  </div>
  <div class='row responsive-utilities-test visible-on'>
    <div class='col-xs-6'>
      <span class='hidden-xs hidden-sm'>Extra small and small</span>
      <span class='visible-xs-block visible-sm-block'>&#10004; Visible on x-small and small</span>
    </div>
    <div class='col-xs-6'>
      <span class='hidden-md hidden-lg'>Medium and large</span>
      <span class='visible-md-block visible-lg-block'>&#10004; Visible on medium and large</span>
    </div>
    <div class='clearfix visible-xs-block'></div>
    <div class='col-xs-6'>
      <span class='hidden-xs hidden-md'>Extra small and medium</span>
      <span class='visible-xs-block visible-md-block'>&#10004; Visible on x-small and medium</span>
    </div>
    <div class='col-xs-6'>
      <span class='hidden-sm hidden-lg'>Small and large</span>
      <span class='visible-sm-block visible-lg-block'>&#10004; Visible on small and large</span>
    </div>
    <div class='clearfix visible-xs-block'></div>
    <div class='col-xs-6'>
      <span class='hidden-xs hidden-lg'>Extra small and large</span>
      <span class='visible-xs-block visible-lg-block'>&#10004; Visible on x-small and large</span>
    </div>
    <div class='col-xs-6'>
      <span class='hidden-sm hidden-md'>Small and medium</span>
      <span class='visible-sm-block visible-md-block'>&#10004; Visible on small and medium</span>
    </div>
  </div>

  <h3>Hidden on...</h3>
  <p>Here, green checkmarks also indicate the element <strong>is hidden</strong> in your current viewport.</p>
  <div class='row responsive-utilities-test hidden-on'>
    <div class='col-xs-6 col-sm-3'>
      <span class='hidden-xs'>Extra small</span>
      <span class='visible-xs-block'>&#10004; Hidden on x-small</span>
    </div>
    <div class='col-xs-6 col-sm-3'>
      <span class='hidden-sm'>Small</span>
      <span class='visible-sm-block'>&#10004; Hidden on small</span>
    </div>
    <div class='clearfix visible-xs-block'></div>
    <div class='col-xs-6 col-sm-3'>
      <span class='hidden-md'>Medium</span>
      <span class='visible-md-block'>&#10004; Hidden on medium</span>
    </div>
    <div class='col-xs-6 col-sm-3'>
      <span class='hidden-lg'>Large</span>
      <span class='visible-lg-block'>&#10004; Hidden on large</span>
    </div>
  </div>
  <div class='row responsive-utilities-test hidden-on'>
    <div class='col-xs-6'>
      <span class='hidden-xs hidden-sm'>Extra small and small</span>
      <span class='visible-xs-block visible-sm-block'>&#10004; Hidden on x-small and small</span>
    </div>
    <div class='col-xs-6'>
      <span class='hidden-md hidden-lg'>Medium and large</span>
      <span class='visible-md-block visible-lg-block'>&#10004; Hidden on medium and large</span>
    </div>
    <div class='clearfix visible-xs-block'></div>
    <div class='col-xs-6'>
      <span class='hidden-xs hidden-md'>Extra small and medium</span>
      <span class='visible-xs-block visible-md-block'>&#10004; Hidden on x-small and medium</span>
    </div>
    <div class='col-xs-6'>
      <span class='hidden-sm hidden-lg'>Small and large</span>
      <span class='visible-sm-block visible-lg-block'>&#10004; Hidden on small and large</span>
    </div>
    <div class='clearfix visible-xs-block'></div>
    <div class='col-xs-6'>
      <span class='hidden-xs hidden-lg'>Extra small and large</span>
      <span class='visible-xs-block visible-lg-block'>&#10004; Hidden on x-small and large</span>
    </div>
    <div class='col-xs-6'>
      <span class='hidden-sm hidden-md'>Small and medium</span>
      <span class='visible-sm-block visible-md-block'>&#10004; Hidden on small and medium</span>
    </div>
  </div>
</div>

<div class='bs-docs-section'>
  <h1 id='less' class='page-header'>Using Less</h1>

  <p class='lead'>Bootstrap's CSS is built on Less, a preprocessor with additional functionality like variables, mixins, and functions for compiling CSS. Those looking to use the source Less files instead of our compiled CSS files can make use of the numerous variables and mixins we use throughout the framework.</p>

  <p>Grid variables and mixins are covered <a href='#grid-less'>within the Grid system section</a>.</p>


  <h2 id='less-bootstrap'>Compiling Bootstrap</h2>
  <p>Bootstrap can be used in at least two ways: with the compiled CSS or with the source Less files. To compile the Less files, <a href='../getting-started/#grunt'>consult the Getting Started section</a> for how to setup your development environment to run the necessary commands.</p>
  <p>Third party compilation tools may work with Bootstrap, but they are not supported by our core team.</p>

  <h2 id='less-variables'>Variables</h2>
  <p>Variables are used throughout the entire project as a way to centralize and share commonly used values like colors, spacing, or font stacks. For a complete breakdown, please see <a href='../customize/#less-variables-section'>the Customizer</a>.</p>

  <h3 id='less-variables-colors'>Colors</h3>
  <p>Easily make use of two color schemes: grayscale and semantic. Grayscale colors provide quick access to commonly used shades of black while semantic include various colors assigned to meaningful contextual values.</p>
  <div class='bs-example'>
    <div class='color-swatches'>
      <div class='color-swatch gray-darker'></div>
      <div class='color-swatch gray-dark'></div>
      <div class='color-swatch gray'></div>
      <div class='color-swatch gray-light'></div>
      <div class='color-swatch gray-lighter'></div>
    </div>
  </div>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='k'>@gray-darker</span><span class='nd'>:</span>  <span class='nt'>lighten</span><span class='o'>(</span><span class='nn'>#000</span><span class='o'>,</span> <span class='nt'>13</span><span class='nc'>.5</span><span class='nv'>%</span><span class='o'>)</span><span class='p'>;</span> <span class='c1'>// #222
</span><span class='k'>@gray-dark</span><span class='nd'>:</span>    <span class='nt'>lighten</span><span class='o'>(</span><span class='nn'>#000</span><span class='o'>,</span> <span class='nt'>20</span><span class='nv'>%</span><span class='o'>)</span><span class='p'>;</span>   <span class='c1'>// #333
</span><span class='k'>@gray</span><span class='nd'>:</span>         <span class='nt'>lighten</span><span class='o'>(</span><span class='nn'>#000</span><span class='o'>,</span> <span class='nt'>33</span><span class='nc'>.5</span><span class='nv'>%</span><span class='o'>)</span><span class='p'>;</span> <span class='c1'>// #555
</span><span class='k'>@gray-light</span><span class='nd'>:</span>   <span class='nt'>lighten</span><span class='o'>(</span><span class='nn'>#000</span><span class='o'>,</span> <span class='nt'>46</span><span class='nc'>.7</span><span class='nv'>%</span><span class='o'>)</span><span class='p'>;</span> <span class='c1'>// #777
</span><span class='k'>@gray-lighter</span><span class='nd'>:</span> <span class='nt'>lighten</span><span class='o'>(</span><span class='nn'>#000</span><span class='o'>,</span> <span class='nt'>93</span><span class='nc'>.5</span><span class='nv'>%</span><span class='o'>)</span><span class='p'>;</span> <span class='o'>//</span> <span class='nn'>#eee</span></code></pre></div>

  <div class='bs-example'>
    <div class='color-swatches'>
      <div class='color-swatch brand-primary'></div>
      <div class='color-swatch brand-success'></div>
      <div class='color-swatch brand-info'></div>
      <div class='color-swatch brand-warning'></div>
      <div class='color-swatch brand-danger'></div>
    </div>
  </div>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='k'>@brand-primary</span><span class='nd'>:</span> <span class='nt'>darken</span><span class='o'>(</span><span class='nn'>#428bca</span><span class='o'>,</span> <span class='nt'>6</span><span class='nc'>.5</span><span class='nv'>%</span><span class='o'>)</span><span class='p'>;</span> <span class='c1'>// #337ab7
</span><span class='k'>@brand-success</span><span class='nd'>:</span> <span class='nn'>#5cb85c</span><span class='p'>;</span>
<span class='k'>@brand-info</span><span class='nd'>:</span>    <span class='nn'>#5bc0de</span><span class='p'>;</span>
<span class='k'>@brand-warning</span><span class='nd'>:</span> <span class='nn'>#f0ad4e</span><span class='p'>;</span>
<span class='k'>@brand-danger</span><span class='nd'>:</span>  <span class='nn'>#d9534f</span><span class='p'>;</span></code></pre></div>

  <p>Use any of these color variables as they are or reassign them to more meaningful variables for your project.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='c1'>// Use as-is
</span><span class='nc'>.masthead</span> <span class='p'>{</span>
  <span class='nl'>background-color</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>brand-primary</span><span class='p'>;</span>
<span class='p'>}</span>

<span class='c1'>// Reassigned variables in Less
</span><span class='k'>@alert-message-background</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>brand-info</span><span class='p'>;</span>
<span class='nc'>.alert</span> <span class='p'>{</span>
  <span class='nl'>background-color</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>alert-message-background</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>

  <h3 id='less-variables-scaffolding'>Scaffolding</h3>
  <p>A handful of variables for quickly customizing key elements of your site's skeleton.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='c1'>// Scaffolding
</span><span class='k'>@body-bg</span><span class='nd'>:</span>    <span class='nn'>#fff</span><span class='p'>;</span>
<span class='k'>@text-color</span><span class='nd'>:</span> <span class='o'>@</span><span class='nt'>black-50</span><span class='p'>;</span></code></pre></div>

  <h3 id='less-variables-links'>Links</h3>
  <p>Easily style your links with the right color with only one value.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='c1'>// Variables
</span><span class='k'>@link-color</span><span class='nd'>:</span>       <span class='o'>@</span><span class='nt'>brand-primary</span><span class='p'>;</span>
<span class='k'>@link-hover-color</span><span class='nd'>:</span> <span class='nt'>darken</span><span class='o'>(@</span><span class='nt'>link-color</span><span class='o'>,</span> <span class='nt'>15</span><span class='nv'>%</span><span class='o'>)</span><span class='p'>;</span>

<span class='c1'>// Usage
</span><span class='nt'>a</span> <span class='p'>{</span>
  <span class='nl'>color</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>link-color</span><span class='p'>;</span>
  <span class='nl'>text-decoration</span><span class='p'>:</span> <span class='nb'>none</span><span class='p'>;</span>

  <span class='k'>&amp;</span><span class='nd'>:hover</span> <span class='p'>{</span>
    <span class='nl'>color</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>link-hover-color</span><span class='p'>;</span>
    <span class='nl'>text-decoration</span><span class='p'>:</span> <span class='nb'>underline</span><span class='p'>;</span>
  <span class='p'>}</span>
<span class='p'>}</span></code></pre></div>
  <p>Note that the <code>@link-hover-color</code> uses a function, another awesome tool from Less, to automagically create the right hover color. You can use <code>darken</code>, <code>lighten</code>, <code>saturate</code>, and <code>desaturate</code>.</p>

  <h3 id='less-variables-typography'>Typography</h3>
  <p>Easily set your typeface, text size, leading, and more with a few quick variables. Bootstrap makes use of these as well to provide easy typographic mixins.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='k'>@font-family-sans-serif</span><span class='nd'>:</span>  <span class='s2'>'Helvetica Neue'</span><span class='o'>,</span> <span class='nt'>Helvetica</span><span class='o'>,</span> <span class='nt'>Arial</span><span class='o'>,</span> <span class='nt'>sans-serif</span><span class='p'>;</span>
<span class='k'>@font-family-serif</span><span class='nd'>:</span>       <span class='nt'>Georgia</span><span class='o'>,</span> <span class='s2'>'Times New Roman'</span><span class='o'>,</span> <span class='nt'>Times</span><span class='o'>,</span> <span class='nt'>serif</span><span class='p'>;</span>
<span class='k'>@font-family-monospace</span><span class='nd'>:</span>   <span class='nt'>Menlo</span><span class='o'>,</span> <span class='nt'>Monaco</span><span class='o'>,</span> <span class='nt'>Consolas</span><span class='o'>,</span> <span class='s2'>'Courier New'</span><span class='o'>,</span> <span class='nt'>monospace</span><span class='p'>;</span>
<span class='k'>@font-family-base</span><span class='nd'>:</span>        <span class='o'>@</span><span class='nt'>font-family-sans-serif</span><span class='p'>;</span>

<span class='k'>@font-size-base</span><span class='nd'>:</span>          <span class='nt'>14px</span><span class='p'>;</span>
<span class='k'>@font-size-large</span><span class='nd'>:</span>         <span class='nt'>ceil</span><span class='o'>((@</span><span class='nt'>font-size-base</span> <span class='o'>*</span> <span class='nt'>1</span><span class='nc'>.25</span><span class='o'>))</span><span class='p'>;</span> <span class='c1'>// ~18px
</span><span class='k'>@font-size-small</span><span class='nd'>:</span>         <span class='nt'>ceil</span><span class='o'>((@</span><span class='nt'>font-size-base</span> <span class='o'>*</span> <span class='nt'>0</span><span class='nc'>.85</span><span class='o'>))</span><span class='p'>;</span> <span class='c1'>// ~12px
</span>
<span class='k'>@font-size-h1</span><span class='nd'>:</span>            <span class='nt'>floor</span><span class='o'>((@</span><span class='nt'>font-size-base</span> <span class='o'>*</span> <span class='nt'>2</span><span class='nc'>.6</span><span class='o'>))</span><span class='p'>;</span> <span class='c1'>// ~36px
</span><span class='k'>@font-size-h2</span><span class='nd'>:</span>            <span class='nt'>floor</span><span class='o'>((@</span><span class='nt'>font-size-base</span> <span class='o'>*</span> <span class='nt'>2</span><span class='nc'>.15</span><span class='o'>))</span><span class='p'>;</span> <span class='c1'>// ~30px
</span><span class='k'>@font-size-h3</span><span class='nd'>:</span>            <span class='nt'>ceil</span><span class='o'>((@</span><span class='nt'>font-size-base</span> <span class='o'>*</span> <span class='nt'>1</span><span class='nc'>.7</span><span class='o'>))</span><span class='p'>;</span> <span class='c1'>// ~24px
</span><span class='k'>@font-size-h4</span><span class='nd'>:</span>            <span class='nt'>ceil</span><span class='o'>((@</span><span class='nt'>font-size-base</span> <span class='o'>*</span> <span class='nt'>1</span><span class='nc'>.25</span><span class='o'>))</span><span class='p'>;</span> <span class='c1'>// ~18px
</span><span class='k'>@font-size-h5</span><span class='nd'>:</span>            <span class='o'>@</span><span class='nt'>font-size-base</span><span class='p'>;</span>
<span class='k'>@font-size-h6</span><span class='nd'>:</span>            <span class='nt'>ceil</span><span class='o'>((@</span><span class='nt'>font-size-base</span> <span class='o'>*</span> <span class='nt'>0</span><span class='nc'>.85</span><span class='o'>))</span><span class='p'>;</span> <span class='c1'>// ~12px
</span>
<span class='k'>@line-height-base</span><span class='nd'>:</span>        <span class='nt'>1</span><span class='nc'>.428571429</span><span class='p'>;</span> <span class='c1'>// 20/14
</span><span class='k'>@line-height-computed</span><span class='nd'>:</span>    <span class='nt'>floor</span><span class='o'>((@</span><span class='nt'>font-size-base</span> <span class='o'>*</span> <span class='o'>@</span><span class='nt'>line-height-base</span><span class='o'>))</span><span class='p'>;</span> <span class='c1'>// ~20px
</span>
<span class='k'>@headings-font-family</span><span class='nd'>:</span>    <span class='nt'>inherit</span><span class='p'>;</span>
<span class='k'>@headings-font-weight</span><span class='nd'>:</span>    <span class='nt'>500</span><span class='p'>;</span>
<span class='k'>@headings-line-height</span><span class='nd'>:</span>    <span class='nt'>1</span><span class='nc'>.1</span><span class='p'>;</span>
<span class='k'>@headings-color</span><span class='nd'>:</span>          <span class='nt'>inherit</span><span class='p'>;</span></code></pre></div>

  <h3 id='less-variables-icons'>Icons</h3>
  <p>Two quick variables for customizing the location and filename of your icons.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='k'>@icon-font-path</span><span class='nd'>:</span>          <span class='s2'>'../fonts/'</span><span class='p'>;</span>
<span class='k'>@icon-font-name</span><span class='nd'>:</span>          <span class='s2'>'glyphicons-halflings-regular'</span><span class='p'>;</span></code></pre></div>

  <h3 id='less-variables-components'>Components</h3>
  <p>Components throughout Bootstrap make use of some default variables for setting common values. Here are the most commonly used.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='k'>@padding-base-vertical</span><span class='nd'>:</span>          <span class='nt'>6px</span><span class='p'>;</span>
<span class='k'>@padding-base-horizontal</span><span class='nd'>:</span>        <span class='nt'>12px</span><span class='p'>;</span>

<span class='k'>@padding-large-vertical</span><span class='nd'>:</span>         <span class='nt'>10px</span><span class='p'>;</span>
<span class='k'>@padding-large-horizontal</span><span class='nd'>:</span>       <span class='nt'>16px</span><span class='p'>;</span>

<span class='k'>@padding-small-vertical</span><span class='nd'>:</span>         <span class='nt'>5px</span><span class='p'>;</span>
<span class='k'>@padding-small-horizontal</span><span class='nd'>:</span>       <span class='nt'>10px</span><span class='p'>;</span>

<span class='k'>@padding-xs-vertical</span><span class='nd'>:</span>            <span class='nt'>1px</span><span class='p'>;</span>
<span class='k'>@padding-xs-horizontal</span><span class='nd'>:</span>          <span class='nt'>5px</span><span class='p'>;</span>

<span class='k'>@line-height-large</span><span class='nd'>:</span>              <span class='nt'>1</span><span class='nc'>.33</span><span class='p'>;</span>
<span class='k'>@line-height-small</span><span class='nd'>:</span>              <span class='nt'>1</span><span class='nc'>.5</span><span class='p'>;</span>

<span class='k'>@border-radius-base</span><span class='nd'>:</span>             <span class='nt'>4px</span><span class='p'>;</span>
<span class='k'>@border-radius-large</span><span class='nd'>:</span>            <span class='nt'>6px</span><span class='p'>;</span>
<span class='k'>@border-radius-small</span><span class='nd'>:</span>            <span class='nt'>3px</span><span class='p'>;</span>

<span class='k'>@component-active-color</span><span class='nd'>:</span>         <span class='nn'>#fff</span><span class='p'>;</span>
<span class='k'>@component-active-bg</span><span class='nd'>:</span>            <span class='o'>@</span><span class='nt'>brand-primary</span><span class='p'>;</span>

<span class='k'>@caret-width-base</span><span class='nd'>:</span>               <span class='nt'>4px</span><span class='p'>;</span>
<span class='k'>@caret-width-large</span><span class='nd'>:</span>              <span class='nt'>5px</span><span class='p'>;</span></code></pre></div>


  <h2 id='less-mixins-vendor'>Vendor mixins</h2>
  <p>Vendor mixins are mixins to help support multiple browsers by including all relevant vendor prefixes in your compiled CSS.</p>


  <h3 id='less-mixins-box-sizing'>Box-sizing</h3>
  <p>Reset your components' box model with a single mixin. For context, see this <a href='https://developer.mozilla.org/en-US/docs/CSS/box-sizing' target='_blank'>helpful article from Mozilla</a>.</p>
  <p>The mixin is <strong>deprecated</strong> as of v3.2.0, with the introduction of Autoprefixer. To preserve backwards-compatibility, Bootstrap will continue to use the mixin internally until Bootstrap v4.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='nc'>.box-sizing</span><span class='o'>(@</span><span class='nt'>box-model</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-box-sizing</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>box-model</span><span class='p'>;</span> <span class='c1'>// Safari &lt;= 5
</span>     <span class='na'>-moz-box-sizing</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>box-model</span><span class='p'>;</span> <span class='c1'>// Firefox &lt;= 19
</span>          <span class='nl'>box-sizing</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>box-model</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>

  <h3 id='less-mixins-rounded-corners'>Rounded corners</h3>
  <p>Today all modern browsers support the non-prefixed <code>border-radius</code> property. As such, there is no <code>.border-radius()</code> mixin, but Bootstrap does include shortcuts for quickly rounding two corners on a particular side of an object.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='nc'>.border-top-radius</span><span class='o'>(@</span><span class='nt'>radius</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='nl'>border-top-right-radius</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>radius</span><span class='p'>;</span>
   <span class='nl'>border-top-left-radius</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>radius</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.border-right-radius</span><span class='o'>(@</span><span class='nt'>radius</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='nl'>border-bottom-right-radius</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>radius</span><span class='p'>;</span>
     <span class='nl'>border-top-right-radius</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>radius</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.border-bottom-radius</span><span class='o'>(@</span><span class='nt'>radius</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='nl'>border-bottom-right-radius</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>radius</span><span class='p'>;</span>
   <span class='nl'>border-bottom-left-radius</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>radius</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.border-left-radius</span><span class='o'>(@</span><span class='nt'>radius</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='nl'>border-bottom-left-radius</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>radius</span><span class='p'>;</span>
     <span class='nl'>border-top-left-radius</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>radius</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>

  <h3 id='less-mixins-box-shadow'>Box (Drop) shadows</h3>
  <p>If your target audience is using the latest and greatest browsers and devices, be sure to just use the <code>box-shadow</code> property on its own. If you need support for older Android (pre-v4) and iOS devices (pre-iOS 5), use the <strong>deprecated</strong> mixin to pick up the required <code>-webkit</code> prefix.</p>
  <p>The mixin is <strong>deprecated</strong> as of v3.1.0, since Bootstrap doesn't officially support the outdated platforms that don't support the standard property. To preserve backwards-compatibility, Bootstrap will continue to use the mixin internally until Bootstrap v4.</p>
  <p>Be sure to use <code>rgba()</code> colors in your box shadows so they blend as seamlessly as possible with backgrounds.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='err'>.</span><span class='nl'>box-shadow</span><span class='err'>(@</span><span class='na'>shadow</span><span class='p'>:</span> <span class='m'>0</span> <span class='m'>1px</span> <span class='m'>3px</span> <span class='nf'>rgba</span><span class='p'>(</span><span class='m'>0</span><span class='o'>,</span><span class='m'>0</span><span class='o'>,</span><span class='m'>0</span><span class='o'>,.</span><span class='m'>25</span><span class='p'>))</span> <span class='p'>{</span>
  <span class='na'>-webkit-box-shadow</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>shadow</span><span class='p'>;</span> <span class='c1'>// iOS &lt;4.3 &amp; Android &lt;4.1
</span>          <span class='nl'>box-shadow</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>shadow</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>

  <h3 id='less-mixins-transitions'>Transitions</h3>
  <p>Multiple mixins for flexibility. Set all transition information with one, or specify a separate delay and duration as needed.</p>
  <p>The mixins are <strong>deprecated</strong> as of v3.2.0, with the introduction of Autoprefixer. To preserve backwards-compatibility, Bootstrap will continue to use the mixins internally until Bootstrap v4.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='nc'>.transition</span><span class='o'>(@</span><span class='nt'>transition</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-transition</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>transition</span><span class='p'>;</span>
          <span class='nl'>transition</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>transition</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.transition-property</span><span class='o'>(@</span><span class='nt'>transition-property</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-transition-property</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>transition-property</span><span class='p'>;</span>
          <span class='nl'>transition-property</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>transition-property</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.transition-delay</span><span class='o'>(@</span><span class='nt'>transition-delay</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-transition-delay</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>transition-delay</span><span class='p'>;</span>
          <span class='nl'>transition-delay</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>transition-delay</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.transition-duration</span><span class='o'>(@</span><span class='nt'>transition-duration</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-transition-duration</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>transition-duration</span><span class='p'>;</span>
          <span class='nl'>transition-duration</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>transition-duration</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.transition-timing-function</span><span class='o'>(@</span><span class='nt'>timing-function</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-transition-timing-function</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>timing-function</span><span class='p'>;</span>
          <span class='nl'>transition-timing-function</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>timing-function</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.transition-transform</span><span class='o'>(@</span><span class='nt'>transition</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-transition</span><span class='p'>:</span> <span class='o'>-</span><span class='n'>webkit-transform</span> <span class='o'>@</span><span class='n'>transition</span><span class='p'>;</span>
     <span class='na'>-moz-transition</span><span class='p'>:</span> <span class='o'>-</span><span class='n'>moz-transform</span> <span class='o'>@</span><span class='n'>transition</span><span class='p'>;</span>
       <span class='na'>-o-transition</span><span class='p'>:</span> <span class='o'>-</span><span class='n'>o-transform</span> <span class='o'>@</span><span class='n'>transition</span><span class='p'>;</span>
          <span class='nl'>transition</span><span class='p'>:</span> <span class='n'>transform</span> <span class='o'>@</span><span class='n'>transition</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>

  <h3 id='less-mixins-transformations'>Transformations</h3>
  <p>Rotate, scale, translate (move), or skew any object.</p>
  <p>The mixins are <strong>deprecated</strong> as of v3.2.0, with the introduction of Autoprefixer. To preserve backwards-compatibility, Bootstrap will continue to use the mixins internally until Bootstrap v4.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='nc'>.rotate</span><span class='o'>(@</span><span class='nt'>degrees</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-transform</span><span class='p'>:</span> <span class='nf'>rotate</span><span class='p'>(</span><span class='o'>@</span><span class='n'>degrees</span><span class='p'>);</span>
      <span class='na'>-ms-transform</span><span class='p'>:</span> <span class='nf'>rotate</span><span class='p'>(</span><span class='o'>@</span><span class='n'>degrees</span><span class='p'>);</span> <span class='c1'>// IE9 only
</span>          <span class='nl'>transform</span><span class='p'>:</span> <span class='nf'>rotate</span><span class='p'>(</span><span class='o'>@</span><span class='n'>degrees</span><span class='p'>);</span>
<span class='p'>}</span>
<span class='nc'>.scale</span><span class='o'>(@</span><span class='nt'>ratio</span><span class='p'>;</span> <span class='k'>@ratio-y</span><span class='nc'>...</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-transform</span><span class='p'>:</span> <span class='nf'>scale</span><span class='p'>(</span><span class='o'>@</span><span class='n'>ratio</span><span class='o'>,</span> <span class='o'>@</span><span class='n'>ratio-y</span><span class='p'>);</span>
      <span class='na'>-ms-transform</span><span class='p'>:</span> <span class='nf'>scale</span><span class='p'>(</span><span class='o'>@</span><span class='n'>ratio</span><span class='o'>,</span> <span class='o'>@</span><span class='n'>ratio-y</span><span class='p'>);</span> <span class='c1'>// IE9 only
</span>          <span class='nl'>transform</span><span class='p'>:</span> <span class='nf'>scale</span><span class='p'>(</span><span class='o'>@</span><span class='n'>ratio</span><span class='o'>,</span> <span class='o'>@</span><span class='n'>ratio-y</span><span class='p'>);</span>
<span class='p'>}</span>
<span class='nc'>.translate</span><span class='o'>(@</span><span class='nt'>x</span><span class='p'>;</span> <span class='k'>@y</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-transform</span><span class='p'>:</span> <span class='nf'>translate</span><span class='p'>(</span><span class='o'>@</span><span class='n'>x</span><span class='o'>,</span> <span class='o'>@</span><span class='n'>y</span><span class='p'>);</span>
      <span class='na'>-ms-transform</span><span class='p'>:</span> <span class='nf'>translate</span><span class='p'>(</span><span class='o'>@</span><span class='n'>x</span><span class='o'>,</span> <span class='o'>@</span><span class='n'>y</span><span class='p'>);</span> <span class='c1'>// IE9 only
</span>          <span class='nl'>transform</span><span class='p'>:</span> <span class='nf'>translate</span><span class='p'>(</span><span class='o'>@</span><span class='n'>x</span><span class='o'>,</span> <span class='o'>@</span><span class='n'>y</span><span class='p'>);</span>
<span class='p'>}</span>
<span class='nc'>.skew</span><span class='o'>(@</span><span class='nt'>x</span><span class='p'>;</span> <span class='k'>@y</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-transform</span><span class='p'>:</span> <span class='nf'>skew</span><span class='p'>(</span><span class='o'>@</span><span class='n'>x</span><span class='o'>,</span> <span class='o'>@</span><span class='n'>y</span><span class='p'>);</span>
      <span class='na'>-ms-transform</span><span class='p'>:</span> <span class='nf'>skewX</span><span class='p'>(</span><span class='o'>@</span><span class='n'>x</span><span class='p'>)</span> <span class='nf'>skewY</span><span class='p'>(</span><span class='o'>@</span><span class='n'>y</span><span class='p'>);</span> <span class='c1'>// See https://github.com/twbs/bootstrap/issues/4885; IE9+
</span>          <span class='nl'>transform</span><span class='p'>:</span> <span class='nf'>skew</span><span class='p'>(</span><span class='o'>@</span><span class='n'>x</span><span class='o'>,</span> <span class='o'>@</span><span class='n'>y</span><span class='p'>);</span>
<span class='p'>}</span>
<span class='nc'>.translate3d</span><span class='o'>(@</span><span class='nt'>x</span><span class='p'>;</span> <span class='k'>@y</span><span class='p'>;</span> <span class='k'>@z</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-transform</span><span class='p'>:</span> <span class='nf'>translate3d</span><span class='p'>(</span><span class='o'>@</span><span class='n'>x</span><span class='o'>,</span> <span class='o'>@</span><span class='n'>y</span><span class='o'>,</span> <span class='o'>@</span><span class='n'>z</span><span class='p'>);</span>
          <span class='nl'>transform</span><span class='p'>:</span> <span class='nf'>translate3d</span><span class='p'>(</span><span class='o'>@</span><span class='n'>x</span><span class='o'>,</span> <span class='o'>@</span><span class='n'>y</span><span class='o'>,</span> <span class='o'>@</span><span class='n'>z</span><span class='p'>);</span>
<span class='p'>}</span>

<span class='nc'>.rotateX</span><span class='o'>(@</span><span class='nt'>degrees</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-transform</span><span class='p'>:</span> <span class='nf'>rotateX</span><span class='p'>(</span><span class='o'>@</span><span class='n'>degrees</span><span class='p'>);</span>
      <span class='na'>-ms-transform</span><span class='p'>:</span> <span class='nf'>rotateX</span><span class='p'>(</span><span class='o'>@</span><span class='n'>degrees</span><span class='p'>);</span> <span class='c1'>// IE9 only
</span>          <span class='nl'>transform</span><span class='p'>:</span> <span class='nf'>rotateX</span><span class='p'>(</span><span class='o'>@</span><span class='n'>degrees</span><span class='p'>);</span>
<span class='p'>}</span>
<span class='nc'>.rotateY</span><span class='o'>(@</span><span class='nt'>degrees</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-transform</span><span class='p'>:</span> <span class='nf'>rotateY</span><span class='p'>(</span><span class='o'>@</span><span class='n'>degrees</span><span class='p'>);</span>
      <span class='na'>-ms-transform</span><span class='p'>:</span> <span class='nf'>rotateY</span><span class='p'>(</span><span class='o'>@</span><span class='n'>degrees</span><span class='p'>);</span> <span class='c1'>// IE9 only
</span>          <span class='nl'>transform</span><span class='p'>:</span> <span class='nf'>rotateY</span><span class='p'>(</span><span class='o'>@</span><span class='n'>degrees</span><span class='p'>);</span>
<span class='p'>}</span>
<span class='nc'>.perspective</span><span class='o'>(@</span><span class='nt'>perspective</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-perspective</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>perspective</span><span class='p'>;</span>
     <span class='na'>-moz-perspective</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>perspective</span><span class='p'>;</span>
          <span class='nl'>perspective</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>perspective</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.perspective-origin</span><span class='o'>(@</span><span class='nt'>perspective</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-perspective-origin</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>perspective</span><span class='p'>;</span>
     <span class='na'>-moz-perspective-origin</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>perspective</span><span class='p'>;</span>
          <span class='nl'>perspective-origin</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>perspective</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.transform-origin</span><span class='o'>(@</span><span class='nt'>origin</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-transform-origin</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>origin</span><span class='p'>;</span>
     <span class='na'>-moz-transform-origin</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>origin</span><span class='p'>;</span>
      <span class='na'>-ms-transform-origin</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>origin</span><span class='p'>;</span> <span class='c1'>// IE9 only
</span>          <span class='nl'>transform-origin</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>origin</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>

  <h3 id='less-mixins-animations'>Animations</h3>
  <p>A single mixin for using all of CSS3's animation properties in one declaration and other mixins for individual properties.</p>
  <p>The mixins are <strong>deprecated</strong> as of v3.2.0, with the introduction of Autoprefixer. To preserve backwards-compatibility, Bootstrap will continue to use the mixins internally until Bootstrap v4.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='nc'>.animation</span><span class='o'>(@</span><span class='nt'>animation</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-animation</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>animation</span><span class='p'>;</span>
          <span class='nl'>animation</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>animation</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.animation-name</span><span class='o'>(@</span><span class='nt'>name</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-animation-name</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>name</span><span class='p'>;</span>
          <span class='nl'>animation-name</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>name</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.animation-duration</span><span class='o'>(@</span><span class='nt'>duration</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-animation-duration</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>duration</span><span class='p'>;</span>
          <span class='nl'>animation-duration</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>duration</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.animation-timing-function</span><span class='o'>(@</span><span class='nt'>timing-function</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-animation-timing-function</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>timing-function</span><span class='p'>;</span>
          <span class='nl'>animation-timing-function</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>timing-function</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.animation-delay</span><span class='o'>(@</span><span class='nt'>delay</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-animation-delay</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>delay</span><span class='p'>;</span>
          <span class='nl'>animation-delay</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>delay</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.animation-iteration-count</span><span class='o'>(@</span><span class='nt'>iteration-count</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-animation-iteration-count</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>iteration-count</span><span class='p'>;</span>
          <span class='nl'>animation-iteration-count</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>iteration-count</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.animation-direction</span><span class='o'>(@</span><span class='nt'>direction</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-animation-direction</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>direction</span><span class='p'>;</span>
          <span class='nl'>animation-direction</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>direction</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>

  <h3 id='less-mixins-opacity'>Opacity</h3>
  <p>Set the opacity for all browsers and provide a <code>filter</code> fallback for IE8.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='nc'>.opacity</span><span class='o'>(@</span><span class='nt'>opacity</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='nl'>opacity</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>opacity</span><span class='p'>;</span>
  <span class='c1'>// IE8 filter
</span>  <span class='k'>@opacity-ie</span><span class='nd'>:</span> <span class='o'>(@</span><span class='nt'>opacity</span> <span class='o'>*</span> <span class='nt'>100</span><span class='o'>)</span><span class='p'>;</span>
  <span class='nl'>filter</span><span class='p'>:</span> <span class='o'>~</span><span class='s2'>'alpha(opacity=@{opacity-ie})'</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>

  <h3 id='less-mixins-placeholder'>Placeholder text</h3>
  <p>Provide context for form controls within each field.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='err'>.</span><span class='na'>placeholder</span><span class='err'>(@</span><span class='nl'>color</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>input-color-placeholder</span><span class='p'>)</span> <span class='p'>{</span>
  <span class='err'>&amp;</span><span class='p'>:</span><span class='o'>:-</span><span class='n'>moz-placeholder</span>           <span class='p'>{</span> <span class='nl'>color</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>color</span><span class='p'>;</span> <span class='p'>}</span> <span class='c1'>// Firefox
</span>  <span class='err'>&amp;</span><span class='p'>:</span><span class='o'>-</span><span class='n'>ms-input-placeholder</span>       <span class='p'>{</span> <span class='nl'>color</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>color</span><span class='p'>;</span> <span class='p'>}</span> <span class='c1'>// Internet Explorer 10+
</span>  <span class='err'>&amp;</span><span class='p'>:</span><span class='o'>:-</span><span class='n'>webkit-input-placeholder</span>  <span class='p'>{</span> <span class='nl'>color</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>color</span><span class='p'>;</span> <span class='p'>}</span> <span class='c1'>// Safari and Chrome
</span><span class='p'>}</span></code></pre></div>

  <h3 id='less-mixins-columns'>Columns</h3>
  <p>Generate columns via CSS within a single element.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='nc'>.content-columns</span><span class='o'>(@</span><span class='nt'>width</span><span class='p'>;</span> <span class='k'>@count</span><span class='p'>;</span> <span class='k'>@gap</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='na'>-webkit-column-width</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>width</span><span class='p'>;</span>
     <span class='na'>-moz-column-width</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>width</span><span class='p'>;</span>
          <span class='nl'>column-width</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>width</span><span class='p'>;</span>
  <span class='na'>-webkit-column-count</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>count</span><span class='p'>;</span>
     <span class='na'>-moz-column-count</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>count</span><span class='p'>;</span>
          <span class='nl'>column-count</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>count</span><span class='p'>;</span>
  <span class='na'>-webkit-column-gap</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>gap</span><span class='p'>;</span>
     <span class='na'>-moz-column-gap</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>gap</span><span class='p'>;</span>
          <span class='nl'>column-gap</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>gap</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>

  <h3 id='less-mixins-gradients'>Gradients</h3>
  <p>Easily turn any two colors into a background gradient. Get more advanced and set a direction, use three colors, or use a radial gradient. With a single mixin you get all the prefixed syntaxes you'll need.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='nn'>#gradient</span> <span class='o'>&gt;</span> <span class='nc'>.vertical</span><span class='o'>(</span><span class='nn'>#333</span><span class='p'>;</span> <span class='nn'>#000</span><span class='o'>)</span><span class='p'>;</span>
<span class='nn'>#gradient</span> <span class='o'>&gt;</span> <span class='nc'>.horizontal</span><span class='o'>(</span><span class='nn'>#333</span><span class='p'>;</span> <span class='nn'>#000</span><span class='o'>)</span><span class='p'>;</span>
<span class='nn'>#gradient</span> <span class='o'>&gt;</span> <span class='nc'>.radial</span><span class='o'>(</span><span class='nn'>#333</span><span class='p'>;</span> <span class='nn'>#000</span><span class='o'>)</span><span class='p'>;</span></code></pre></div>
  <p>You can also specify the angle of a standard two-color, linear gradient:</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='nn'>#gradient</span> <span class='o'>&gt;</span> <span class='nc'>.directional</span><span class='o'>(</span><span class='nn'>#333</span><span class='p'>;</span> <span class='nn'>#000</span><span class='p'>;</span> <span class='nt'>45deg</span><span class='o'>)</span><span class='p'>;</span></code></pre></div>
  <p>If you need a barber-stripe style gradient, that's easy, too. Just specify a single color and we'll overlay a translucent white stripe.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='nn'>#gradient</span> <span class='o'>&gt;</span> <span class='nc'>.striped</span><span class='o'>(</span><span class='nn'>#333</span><span class='p'>;</span> <span class='nt'>45deg</span><span class='o'>)</span><span class='p'>;</span></code></pre></div>
  <p>Up the ante and use three colors instead. Set the first color, the second color, the second color's color stop (a percentage value like 25%), and the third color with these mixins:</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='nn'>#gradient</span> <span class='o'>&gt;</span> <span class='nc'>.vertical-three-colors</span><span class='o'>(</span><span class='nn'>#777</span><span class='p'>;</span> <span class='nn'>#333</span><span class='p'>;</span> <span class='nt'>25</span><span class='nv'>%</span><span class='p'>;</span> <span class='nn'>#000</span><span class='o'>)</span><span class='p'>;</span>
<span class='nn'>#gradient</span> <span class='o'>&gt;</span> <span class='nc'>.horizontal-three-colors</span><span class='o'>(</span><span class='nn'>#777</span><span class='p'>;</span> <span class='nn'>#333</span><span class='p'>;</span> <span class='nt'>25</span><span class='nv'>%</span><span class='p'>;</span> <span class='nn'>#000</span><span class='o'>)</span><span class='p'>;</span></code></pre></div>
  <p><strong>Heads up!</strong> Should you ever need to remove a gradient, be sure to remove any IE-specific <code>filter</code> you may have added. You can do that by using the <code>.reset-filter()</code> mixin alongside <code>background-image: none;</code>.</p>


  <h2 id='less-mixins-utility'>Utility mixins</h2>
  <p>Utility mixins are mixins that combine otherwise unrelated CSS properties to achieve a specific goal or task.</p>

  <h3 id='less-mixins-clearfix'>Clearfix</h3>
  <p>Forget adding <code>class='clearfix'</code> to any element and instead add the <code>.clearfix()</code> mixin where appropriate. Uses the <a href='http://nicolasgallagher.com/micro-clearfix-hack/' target='_blank'>micro clearfix</a> from <a href='https://twitter.com/necolas' target='_blank'>Nicolas Gallagher</a>.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='c1'>// Mixin
</span><span class='nc'>.clearfix</span><span class='o'>()</span> <span class='p'>{</span>
  <span class='k'>&amp;</span><span class='nd'>:before</span><span class='o'>,</span>
  <span class='k'>&amp;</span><span class='nd'>:after</span> <span class='p'>{</span>
    <span class='nl'>content</span><span class='p'>:</span> <span class='s2'>' '</span><span class='p'>;</span>
    <span class='nl'>display</span><span class='p'>:</span> <span class='n'>table</span><span class='p'>;</span>
  <span class='p'>}</span>
  <span class='k'>&amp;</span><span class='nd'>:after</span> <span class='p'>{</span>
    <span class='nl'>clear</span><span class='p'>:</span> <span class='nb'>both</span><span class='p'>;</span>
  <span class='p'>}</span>
<span class='p'>}</span>

<span class='c1'>// Usage
</span><span class='nc'>.container</span> <span class='p'>{</span>
  <span class='nc'>.clearfix</span><span class='o'>()</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>

  <h3 id='less-mixins-centering'>Horizontal centering</h3>
  <p>Quickly center any element within its parent. <strong>Requires <code>width</code> or <code>max-width</code> to be set.</strong></p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='c1'>// Mixin
</span><span class='nc'>.center-block</span><span class='o'>()</span> <span class='p'>{</span>
  <span class='nl'>display</span><span class='p'>:</span> <span class='nb'>block</span><span class='p'>;</span>
  <span class='nl'>margin-left</span><span class='p'>:</span> <span class='nb'>auto</span><span class='p'>;</span>
  <span class='nl'>margin-right</span><span class='p'>:</span> <span class='nb'>auto</span><span class='p'>;</span>
<span class='p'>}</span>

<span class='c1'>// Usage
</span><span class='nc'>.container</span> <span class='p'>{</span>
  <span class='nl'>width</span><span class='p'>:</span> <span class='m'>940px</span><span class='p'>;</span>
  <span class='nc'>.center-block</span><span class='o'>()</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>

  <h3 id='less-mixins-sizing'>Sizing helpers</h3>
  <p>Specify the dimensions of an object more easily.</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='c1'>// Mixins
</span><span class='nc'>.size</span><span class='o'>(@</span><span class='nt'>width</span><span class='p'>;</span> <span class='k'>@height</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='nl'>width</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>width</span><span class='p'>;</span>
  <span class='nl'>height</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>height</span><span class='p'>;</span>
<span class='p'>}</span>
<span class='nc'>.square</span><span class='o'>(@</span><span class='nt'>size</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='nc'>.size</span><span class='o'>(@</span><span class='nt'>size</span><span class='p'>;</span> <span class='k'>@size</span><span class='o'>)</span><span class='p'>;</span>
<span class='p'>}</span>

<span class='c1'>// Usage
</span><span class='nc'>.image</span> <span class='p'>{</span> <span class='nc'>.size</span><span class='o'>(</span><span class='nt'>400px</span><span class='p'>;</span> <span class='nt'>300px</span><span class='o'>)</span><span class='p'>;</span> <span class='p'>}</span>
<span class='nc'>.avatar</span> <span class='p'>{</span> <span class='nc'>.square</span><span class='o'>(</span><span class='nt'>48px</span><span class='o'>)</span><span class='p'>;</span> <span class='p'>}</span></code></pre></div>

  <h3 id='less-mixins-resizable'>Resizable textareas</h3>
  <p>Easily configure the resize options for any textarea, or any other element. Defaults to normal browser behavior (<code>both</code>).</p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='err'>.</span><span class='na'>resizable</span><span class='err'>(@</span><span class='nl'>direction</span><span class='p'>:</span> <span class='nb'>both</span><span class='p'>)</span> <span class='p'>{</span>
  <span class='c1'>// Options: horizontal, vertical, both
</span>  <span class='nl'>resize</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>direction</span><span class='p'>;</span>
  <span class='c1'>// Safari fix
</span>  <span class='nl'>overflow</span><span class='p'>:</span> <span class='nb'>auto</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>

  <h3 id='less-mixins-truncating'>Truncating text</h3>
  <p>Easily truncate text with an ellipsis with a single mixin. <strong>Requires element to be <code>block</code> or <code>inline-block</code> level.</strong></p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='c1'>// Mixin
</span><span class='nc'>.text-overflow</span><span class='o'>()</span> <span class='p'>{</span>
  <span class='nl'>overflow</span><span class='p'>:</span> <span class='nb'>hidden</span><span class='p'>;</span>
  <span class='nl'>text-overflow</span><span class='p'>:</span> <span class='n'>ellipsis</span><span class='p'>;</span>
  <span class='nl'>white-space</span><span class='p'>:</span> <span class='nb'>nowrap</span><span class='p'>;</span>
<span class='p'>}</span>

<span class='c1'>// Usage
</span><span class='nc'>.branch-name</span> <span class='p'>{</span>
  <span class='nl'>display</span><span class='p'>:</span> <span class='n'>inline-block</span><span class='p'>;</span>
  <span class='nl'>max-width</span><span class='p'>:</span> <span class='m'>200px</span><span class='p'>;</span>
  <span class='nc'>.text-overflow</span><span class='o'>()</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>

  <h3 id='less-mixins-retina-images'>Retina images</h3>
  <p>Specify two image paths and the @1x image dimensions, and Bootstrap will provide an @2x media query. <strong>If you have many images to serve, consider writing your retina image CSS manually in a single media query.</strong></p>
<div class='highlight'><pre><code class='language-scss' data-lang='scss'><span class='nc'>.img-retina</span><span class='o'>(@</span><span class='nt'>file-1x</span><span class='p'>;</span> <span class='k'>@file-2x</span><span class='p'>;</span> <span class='k'>@width-1x</span><span class='p'>;</span> <span class='k'>@height-1x</span><span class='o'>)</span> <span class='p'>{</span>
  <span class='nl'>background-image</span><span class='p'>:</span> <span class='sx'>url('@{file-1x}')</span><span class='p'>;</span>

  <span class='k'>@media</span>
  <span class='nt'>only</span> <span class='nt'>screen</span> <span class='nt'>and</span> <span class='o'>(</span><span class='nt'>-webkit-min-device-pixel-ratio</span><span class='nd'>:</span> <span class='nt'>2</span><span class='o'>),</span>
  <span class='nt'>only</span> <span class='nt'>screen</span> <span class='nt'>and</span> <span class='o'>(</span>   <span class='nt'>min--moz-device-pixel-ratio</span><span class='nd'>:</span> <span class='nt'>2</span><span class='o'>),</span>
  <span class='nt'>only</span> <span class='nt'>screen</span> <span class='nt'>and</span> <span class='o'>(</span>     <span class='nt'>-o-min-device-pixel-ratio</span><span class='nd'>:</span> <span class='nt'>2</span><span class='o'>/</span><span class='nt'>1</span><span class='o'>),</span>
  <span class='nt'>only</span> <span class='nt'>screen</span> <span class='nt'>and</span> <span class='o'>(</span>        <span class='nt'>min-device-pixel-ratio</span><span class='nd'>:</span> <span class='nt'>2</span><span class='o'>),</span>
  <span class='nt'>only</span> <span class='nt'>screen</span> <span class='nt'>and</span> <span class='o'>(</span>                <span class='nt'>min-resolution</span><span class='nd'>:</span> <span class='nt'>192dpi</span><span class='o'>),</span>
  <span class='nt'>only</span> <span class='nt'>screen</span> <span class='nt'>and</span> <span class='o'>(</span>                <span class='nt'>min-resolution</span><span class='nd'>:</span> <span class='nt'>2dppx</span><span class='o'>)</span> <span class='p'>{</span>
    <span class='nl'>background-image</span><span class='p'>:</span> <span class='sx'>url('@{file-2x}')</span><span class='p'>;</span>
    <span class='nl'>background-size</span><span class='p'>:</span> <span class='o'>@</span><span class='n'>width-1x</span> <span class='o'>@</span><span class='n'>height-1x</span><span class='p'>;</span>
  <span class='p'>}</span>
<span class='p'>}</span>

<span class='c1'>// Usage
</span><span class='nc'>.jumbotron</span> <span class='p'>{</span>
  <span class='nc'>.img-retina</span><span class='o'>(</span><span class='s2'>'/img/bg-1x.png'</span><span class='o'>,</span> <span class='s2'>'/img/bg-2x.png'</span><span class='o'>,</span> <span class='nt'>100px</span><span class='o'>,</span> <span class='nt'>100px</span><span class='o'>)</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='sass' class='page-header'>Using Sass</h1>
  <p class='lead'>While Bootstrap is built on Less, it also has an <a href='https://github.com/twbs/bootstrap-sass'>official Sass port</a>. We maintain it in a separate GitHub repository and handle updates with a conversion script.</p>

  <h2 id='sass-contents'>What's included</h2>
  <p>Since the Sass port has a separate repo and serves a slightly different audience, the contents of the project differ greatly from the main Bootstrap project. This ensures the Sass port is as compatible with as many Sass-based systems as possible.</p>

  <div class='table-responsive'>
    <table class='table table-bordered table-striped'>
      <thead>
        <tr>
          <th>Path</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope='row'><code>lib/</code></th>
          <td>Ruby gem code (Sass configuration, Rails and Compass integrations)</td>
        </tr>
        <tr>
          <th scope='row'><code>tasks/</code></th>
          <td>Converter scripts (turning upstream Less to Sass)</td>
        </tr>
        <tr>
          <th scope='row'><code>test/</code></th>
          <td>Compilation tests</td>
        </tr>
        <tr>
          <th scope='row'><code>templates/</code></th>
          <td>Compass package manifest</td>
        </tr>
        <tr>
          <th scope='row'><code>vendor/assets/</code></th>
          <td>Sass, JavaScript, and font files</td>
        </tr>
        <tr>
          <th scope='row'><code>Rakefile</code></th>
          <td>Internal tasks, such as rake and convert</td>
        </tr>
      </tbody>
    </table>
  </div>";
echo "<h1>Bootstrap Javascript</h1>";

echo "  <div class='container bs-docs-container'>

      <div class='row'>
        <div class='col-md-9' role='main'>
          <div class='bs-docs-section'>
  <h1 id='js-overview' class='page-header'>Overview</h1>

  <h2 id='js-individual-compiled'>Individual or compiled</h2>
  <p>Plugins can be included individually (using Bootstrap's individual <code>*.js</code> files), or all at once (using <code>bootstrap.js</code> or the minified <code>bootstrap.min.js</code>).</p>

  <div class='bs-callout bs-callout-danger' id='callout-overview-not-both'>
    <h4>Using the compiled JavaScript</h4>
    <p>Both <code>bootstrap.js</code> and <code>bootstrap.min.js</code> contain all plugins in a single file. Include only one.</p>
  </div>

  <div class='bs-callout bs-callout-danger' id='callout-overview-dependencies'>
    <h4>Plugin dependencies</h4>
    <p>Some plugins and CSS components depend on other plugins. If you include plugins individually, make sure to check for these dependencies in the docs. Also note that all plugins depend on jQuery (this means jQuery must be included <strong>before</strong> the plugin files). <a href='https://github.com/twbs/bootstrap/blob/v3.3.5/bower.json'>Consult our <code>bower.json</code></a> to see which versions of jQuery are supported.</p>
  </div>

  <h2 id='js-data-attrs'>Data attributes</h2>
  <p>You can use all Bootstrap plugins purely through the markup API without writing a single line of JavaScript. This is Bootstrap's first-class API and should be your first consideration when using a plugin.</p>

  <p>That said, in some situations it may be desirable to turn this functionality off. Therefore, we also provide the ability to disable the data attribute API by unbinding all events on the document namespaced with <code>data-api</code>. This looks like this:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='nb'>document</span><span class='p'>).</span><span class='nx'>off</span><span class='p'>(</span><span class='s1'>'.data-api'</span><span class='p'>)</span></code></pre></div>

  <p>Alternatively, to target a specific plugin, just include the plugin's name as a namespace along with the data-api namespace like this:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='nb'>document</span><span class='p'>).</span><span class='nx'>off</span><span class='p'>(</span><span class='s1'>'.alert.data-api'</span><span class='p'>)</span></code></pre></div>

  <div class='bs-callout bs-callout-danger' id='callout-overview-single-data'>
    <h4>Only one plugin per element via data attributes</h4>
    <p>Don't use data attributes from multiple plugins on the same element. For example, a button cannot both have a tooltip and toggle a modal. To accomplish this, use a wrapping element.</p>
  </div>

  <h2 id='js-programmatic-api'>Programmatic API</h2>
  <p>We also believe you should be able to use all Bootstrap plugins purely through the JavaScript API. All public APIs are single, chainable methods, and return the collection acted upon.</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'.btn.danger'</span><span class='p'>).</span><span class='nx'>button</span><span class='p'>(</span><span class='s1'>'toggle'</span><span class='p'>).</span><span class='nx'>addClass</span><span class='p'>(</span><span class='s1'>'fat'</span><span class='p'>)</span></code></pre></div>

  <p>All methods should accept an optional options object, a string which targets a particular method, or nothing (which initiates a plugin with default behavior):</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myModal'</span><span class='p'>).</span><span class='nx'>modal</span><span class='p'>()</span>                      <span class='c1'>// initialized with defaults</span>
<span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myModal'</span><span class='p'>).</span><span class='nx'>modal</span><span class='p'>({</span> <span class='na'>keyboard</span><span class='p'>:</span> <span class='kc'>false</span> <span class='p'>})</span>   <span class='c1'>// initialized with no keyboard</span>
<span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myModal'</span><span class='p'>).</span><span class='nx'>modal</span><span class='p'>(</span><span class='s1'>'show'</span><span class='p'>)</span>                <span class='c1'>// initializes and invokes show immediately</span></code></pre></div>

  <p>Each plugin also exposes its raw constructor on a <code>Constructor</code> property: <code>$.fn.popover.Constructor</code>. If you'd like to get a particular plugin instance, retrieve it directly from an element: <code>$('[rel='popover']').data('popover')</code>.</p>

  <h4>Default settings</h4>
  <p>You can change the default settings for a plugin by modifying the plugin's <code>Constructor.DEFAULTS</code> object:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>.</span><span class='nx'>fn</span><span class='p'>.</span><span class='nx'>modal</span><span class='p'>.</span><span class='nx'>Constructor</span><span class='p'>.</span><span class='nx'>DEFAULTS</span><span class='p'>.</span><span class='nx'>keyboard</span> <span class='o'>=</span> <span class='kc'>false</span> <span class='c1'>// changes default for the modal plugin's `keyboard` option to false</span></code></pre></div>

  <h2 id='js-noconflict'>No conflict</h2>
  <p>Sometimes it is necessary to use Bootstrap plugins with other UI frameworks. In these circumstances, namespace collisions can occasionally occur. If this happens, you may call <code>.noConflict</code> on the plugin you wish to revert the value of.</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='kd'>var</span> <span class='nx'>bootstrapButton</span> <span class='o'>=</span> <span class='nx'>$</span><span class='p'>.</span><span class='nx'>fn</span><span class='p'>.</span><span class='nx'>button</span><span class='p'>.</span><span class='nx'>noConflict</span><span class='p'>()</span> <span class='c1'>// return $.fn.button to previously assigned value</span>
<span class='nx'>$</span><span class='p'>.</span><span class='nx'>fn</span><span class='p'>.</span><span class='nx'>bootstrapBtn</span> <span class='o'>=</span> <span class='nx'>bootstrapButton</span>            <span class='c1'>// give $().bootstrapBtn the Bootstrap functionality</span></code></pre></div>

  <h2 id='js-events'>Events</h2>
  <p>Bootstrap provides custom events for most plugins' unique actions. Generally, these come in an infinitive and past participle form - where the infinitive (ex. <code>show</code>) is triggered at the start of an event, and its past participle form (ex. <code>shown</code>) is triggered on the completion of an action.</p>
  <p>As of 3.0.0, all Bootstrap events are namespaced.</p>
  <p>All infinitive events provide <code>preventDefault</code> functionality. This provides the ability to stop the execution of an action before it starts.</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myModal'</span><span class='p'>).</span><span class='nx'>on</span><span class='p'>(</span><span class='s1'>'show.bs.modal'</span><span class='p'>,</span> <span class='kd'>function</span> <span class='p'>(</span><span class='nx'>e</span><span class='p'>)</span> <span class='p'>{</span>
  <span class='k'>if</span> <span class='p'>(</span><span class='o'>!</span><span class='nx'>data</span><span class='p'>)</span> <span class='k'>return</span> <span class='nx'>e</span><span class='p'>.</span><span class='nx'>preventDefault</span><span class='p'>()</span> <span class='c1'>// stops modal from being shown</span>
<span class='p'>})</span></code></pre></div>

  <h2 id='js-version-nums'>Version numbers</h2>
  <p>The version of each of Bootstrap's jQuery plugins can be accessed via the <code>VERSION</code> property of the plugin's constructor. For example, for the tooltip plugin:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>.</span><span class='nx'>fn</span><span class='p'>.</span><span class='nx'>tooltip</span><span class='p'>.</span><span class='nx'>Constructor</span><span class='p'>.</span><span class='nx'>VERSION</span> <span class='c1'>// =&gt; '3.3.5'</span></code></pre></div>

  <h2 id='js-disabled'>No special fallbacks when JavaScript is disabled</h2>
  <p>Bootstrap's plugins don't fall back particularly gracefully when JavaScript is disabled. If you care about the user experience in this case, use <a href='https://developer.mozilla.org/en-US/docs/Web/HTML/Element/noscript'><code>&lt;noscript&gt;</code></a> to explain the situation (and how to re-enable JavaScript) to your users, and/or add your own custom fallbacks.</p>

  <div class='bs-callout bs-callout-warning' id='callout-third-party-libs'>
    <h4>Third-party libraries</h4>
    <p><strong>Bootstrap does not officially support third-party JavaScript libraries</strong> like Prototype or jQuery UI. Despite <code>.noConflict</code> and namespaced events, there may be compatibility problems that you need to fix on your own.</p>
  </div>
</div>

<div class='bs-docs-section'>
  <h1 id='transitions' class='page-header'>Transitions <small>transition.js</small></h1>

  <h2>About transitions</h2>
  <p>For simple transition effects, include <code>transition.js</code> once alongside the other JS files. If you're using the compiled (or minified) <code>bootstrap.js</code>, there is no need to include this&mdash;it's already there.</p>

  <h2>What's inside</h2>
  <p>Transition.js is a basic helper for <code>transitionEnd</code> events as well as a CSS transition emulator. It's used by the other plugins to check for CSS transition support and to catch hanging transitions.</p>

  <h2>Disabling transitions</h2>
  <p>Transitions can be globally disabled using the following JavaScript snippet, which must come after <code>transition.js</code> (or <code>bootstrap.js</code> or <code>bootstrap.min.js</code>, as the case may be) has loaded:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>.</span><span class='nx'>support</span><span class='p'>.</span><span class='nx'>transition</span> <span class='o'>=</span> <span class='kc'>false</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='modals' class='page-header'>Modals <small>modal.js</small></h1>
  <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>

  <div class='bs-callout bs-callout-warning' id='callout-stacked-modals'>
    <h4>Multiple open modals not supported</h4>
    <p>Be sure not to open a modal while another is still visible. Showing more than one modal at a time requires custom code.</p>
  </div>
  <div class='bs-callout bs-callout-warning' id='callout-modal-markup-placement'>
    <h4>Modal markup placement</h4>
    <p>Always try to place a modal's HTML code in a top-level position in your document to avoid other components affecting the modal's appearance and/or functionality.</p>
  </div>
  <div class='bs-callout bs-callout-warning' id='callout-modal-mobile-caveats'>
    <h4>Mobile device caveats</h4>
    <p>There are some caveats regarding using modals on mobile devices. <a href='../getting-started/#support-fixed-position-keyboards'>See our browser support docs</a> for details.</p>
  </div>

  <p><strong class='text-danger'>Due to how HTML5 defines its semantics, the <code>autofocus</code> HTML attribute has no effect in Bootstrap modals.</strong> To achieve the same effect, use some custom JavaScript:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myModal'</span><span class='p'>).</span><span class='nx'>on</span><span class='p'>(</span><span class='s1'>'shown.bs.modal'</span><span class='p'>,</span> <span class='kd'>function</span> <span class='p'>()</span> <span class='p'>{</span>
  <span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myInput'</span><span class='p'>).</span><span class='nx'>focus</span><span class='p'>()</span>
<span class='p'>})</span></code></pre></div>

  <h2 id='modals-examples'>Examples</h2>

  <h3>Static example</h3>
  <p>A rendered modal with header, body, and set of actions in the footer.</p>
  <div class='bs-example bs-example-modal' data-example-id='static-modal'>
    <div class='modal'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
            <h4 class='modal-title'>Modal title</h4>
          </div>
          <div class='modal-body'>
            <p>One fine body&hellip;</p>
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
            <button type='button' class='btn btn-primary'>Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal fade'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-dialog'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-content'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-header'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'close'</span> <span class='na'>data-dismiss=</span><span class='s'>'modal'</span> <span class='na'>aria-label=</span><span class='s'>'Close'</span><span class='nt'>&gt;&lt;span</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;</span><span class='ni'>&amp;times;</span><span class='nt'>&lt;/span&gt;&lt;/button&gt;</span>
        <span class='nt'>&lt;h4</span> <span class='na'>class=</span><span class='s'>'modal-title'</span><span class='nt'>&gt;</span>Modal title<span class='nt'>&lt;/h4&gt;</span>
      <span class='nt'>&lt;/div&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-body'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;p&gt;</span>One fine body<span class='ni'>&amp;hellip;</span><span class='nt'>&lt;/p&gt;</span>
      <span class='nt'>&lt;/div&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-footer'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>data-dismiss=</span><span class='s'>'modal'</span><span class='nt'>&gt;</span>Close<span class='nt'>&lt;/button&gt;</span>
        <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span><span class='nt'>&gt;</span>Save changes<span class='nt'>&lt;/button&gt;</span>
      <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;/div&gt;</span><span class='c'>&lt;!-- /.modal-content --&gt;</span>
  <span class='nt'>&lt;/div&gt;</span><span class='c'>&lt;!-- /.modal-dialog --&gt;</span>
<span class='nt'>&lt;/div&gt;</span><span class='c'>&lt;!-- /.modal --&gt;</span></code></pre></div>

  <h3>Live demo</h3>
  <p>Toggle a modal via JavaScript by clicking the button below. It will slide down and fade in from the top of the page.</p>
  <!-- sample modal content -->
  <div id='myModal' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
    <div class='modal-dialog' role='document'>
      <div class='modal-content'>

        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <h4 class='modal-title' id='myModalLabel'>Modal title</h4>
        </div>
        <div class='modal-body'>
          <h4>Text in a modal</h4>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

          <h4>Popover in a modal</h4>
          <p>This <a href='#' role='button' class='btn btn-default popover-test' title='A Title' data-content='And here's some amazing content. It's very engaging. right?'>button</a> should trigger a popover on click.</p>

          <h4>Tooltips in a modal</h4>
          <p><a href='#' class='tooltip-test' title='Tooltip'>This link</a> and <a href='#' class='tooltip-test' title='Tooltip'>that link</a> should have tooltips on hover.</p>

          <hr>

          <h4>Overflowing text to show scroll behavior</h4>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
          <button type='button' class='btn btn-primary'>Save changes</button>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class='bs-example bs-example-padded-bottom'>
    <button type='button' class='btn btn-primary btn-lg' data-toggle='modal' data-target='#myModal'>
      Launch demo modal
    </button>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='c'>&lt;!-- Button trigger modal --&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary btn-lg'</span> <span class='na'>data-toggle=</span><span class='s'>'modal'</span> <span class='na'>data-target=</span><span class='s'>'#myModal'</span><span class='nt'>&gt;</span>
  Launch demo modal
<span class='nt'>&lt;/button&gt;</span>

<span class='c'>&lt;!-- Modal --&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal fade'</span> <span class='na'>id=</span><span class='s'>'myModal'</span> <span class='na'>tabindex=</span><span class='s'>'-1'</span> <span class='na'>role=</span><span class='s'>'dialog'</span> <span class='na'>aria-labelledby=</span><span class='s'>'myModalLabel'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-dialog'</span> <span class='na'>role=</span><span class='s'>'document'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-content'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-header'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'close'</span> <span class='na'>data-dismiss=</span><span class='s'>'modal'</span> <span class='na'>aria-label=</span><span class='s'>'Close'</span><span class='nt'>&gt;&lt;span</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;</span><span class='ni'>&amp;times;</span><span class='nt'>&lt;/span&gt;&lt;/button&gt;</span>
        <span class='nt'>&lt;h4</span> <span class='na'>class=</span><span class='s'>'modal-title'</span> <span class='na'>id=</span><span class='s'>'myModalLabel'</span><span class='nt'>&gt;</span>Modal title<span class='nt'>&lt;/h4&gt;</span>
      <span class='nt'>&lt;/div&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-body'</span><span class='nt'>&gt;</span>
        ...
      <span class='nt'>&lt;/div&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-footer'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>data-dismiss=</span><span class='s'>'modal'</span><span class='nt'>&gt;</span>Close<span class='nt'>&lt;/button&gt;</span>
        <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span><span class='nt'>&gt;</span>Save changes<span class='nt'>&lt;/button&gt;</span>
      <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <div class='bs-callout bs-callout-warning' id='callout-modal-accessibility'>
    <h4>Make modals accessible</h4>
    <p>Be sure to add <code>role='dialog'</code> and <code>aria-labelledby='...'</code>, referencing the modal title, to <code>.modal</code>, and <code>role='document'</code> to the <code>.modal-dialog</code>  itself.</p>
    <p>Additionally, you may give a description of your modal dialog with <code>aria-describedby</code> on <code>.modal</code>.</p>
  </div>

  <div class='bs-callout bs-callout-info' id='callout-modal-youtube'>
    <h4>Embedding YouTube videos</h4>
    <p>Embedding YouTube videos in modals requires additional JavaScript not in Bootstrap to automatically stop playback and more. <a href='https://stackoverflow.com/questions/18622508/bootstrap-3-and-youtube-in-modal'>See this helpful Stack Overflow post</a> for more information.</p>
  </div>

  <h2 id='modals-sizes'>Optional sizes</h2>
  <p>Modals have two optional sizes, available via modifier classes to be placed on a <code>.modal-dialog</code>.</p>
  <div class='bs-example'>
    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='.bs-example-modal-lg'>Large modal</button>
    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='.bs-example-modal-sm'>Small modal</button>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='c'>&lt;!-- Large modal --&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span> <span class='na'>data-toggle=</span><span class='s'>'modal'</span> <span class='na'>data-target=</span><span class='s'>'.bs-example-modal-lg'</span><span class='nt'>&gt;</span>Large modal<span class='nt'>&lt;/button&gt;</span>

<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal fade bs-example-modal-lg'</span> <span class='na'>tabindex=</span><span class='s'>'-1'</span> <span class='na'>role=</span><span class='s'>'dialog'</span> <span class='na'>aria-labelledby=</span><span class='s'>'myLargeModalLabel'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-dialog modal-lg'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-content'</span><span class='nt'>&gt;</span>
      ...
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span>

<span class='c'>&lt;!-- Small modal --&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span> <span class='na'>data-toggle=</span><span class='s'>'modal'</span> <span class='na'>data-target=</span><span class='s'>'.bs-example-modal-sm'</span><span class='nt'>&gt;</span>Small modal<span class='nt'>&lt;/button&gt;</span>

<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal fade bs-example-modal-sm'</span> <span class='na'>tabindex=</span><span class='s'>'-1'</span> <span class='na'>role=</span><span class='s'>'dialog'</span> <span class='na'>aria-labelledby=</span><span class='s'>'mySmallModalLabel'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-dialog modal-sm'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-content'</span><span class='nt'>&gt;</span>
      ...
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <!--  Modal content for the above example -->
  <div class='modal fade bs-example-modal-lg' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel'>
    <div class='modal-dialog modal-lg'>
      <div class='modal-content'>

        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <h4 class='modal-title' id='myLargeModalLabel'>Large modal</h4>
        </div>
        <div class='modal-body'>
          ...
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <div class='modal fade bs-example-modal-sm' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel'>
    <div class='modal-dialog modal-sm'>
      <div class='modal-content'>

        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <h4 class='modal-title' id='mySmallModalLabel'>Small modal</h4>
        </div>
        <div class='modal-body'>
          ...
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <h2 id='modals-remove-animation'>Remove animation</h2>
  <p>For modals that simply appear rather than fade in to view, remove the <code>.fade</code> class from your modal markup.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal'</span> <span class='na'>tabindex=</span><span class='s'>'-1'</span> <span class='na'>role=</span><span class='s'>'dialog'</span> <span class='na'>aria-labelledby=</span><span class='s'>'...'</span><span class='nt'>&gt;</span>
  ...
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h2 id='modals-grid-system'>Using the grid system</h2>
  <p>To take advantage of the Bootstrap grid system within a modal, just nest <code>.row</code>s within the <code>.modal-body</code> and then use the normal grid system classes.</p>
<!-- sample modal content -->
  <div id='gridSystemModal' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='gridModalLabel'>
    <div class='modal-dialog' role='document'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <h4 class='modal-title' id='gridModalLabel'>Modal title</h4>
        </div>
        <div class='modal-body'>
          <div class='row'>
            <div class='col-md-4'>.col-md-4</div>
            <div class='col-md-4 col-md-offset-4'>.col-md-4 .col-md-offset-4</div>
          </div>
          <div class='row'>
            <div class='col-md-3 col-md-offset-3'>.col-md-3 .col-md-offset-3</div>
            <div class='col-md-2 col-md-offset-4'>.col-md-2 .col-md-offset-4</div>
          </div>
          <div class='row'>
            <div class='col-md-6 col-md-offset-3'>.col-md-6 .col-md-offset-3</div>
          </div>
          <div class='row'>
            <div class='col-sm-9'>
              Level 1: .col-sm-9
              <div class='row'>
                <div class='col-xs-8 col-sm-6'>
                  Level 2: .col-xs-8 .col-sm-6
                </div>
                <div class='col-xs-4 col-sm-6'>
                  Level 2: .col-xs-4 .col-sm-6
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
          <button type='button' class='btn btn-primary'>Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<div class='bs-example bs-example-padded-bottom'>
  <button type='button' class='btn btn-primary btn-lg' data-toggle='modal' data-target='#gridSystemModal'>
    Launch demo modal
  </button>
</div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal fade'</span> <span class='na'>role=</span><span class='s'>'dialog'</span> <span class='na'>aria-labelledby=</span><span class='s'>'gridSystemModalLabel'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-dialog'</span> <span class='na'>role=</span><span class='s'>'document'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-content'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-header'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'close'</span> <span class='na'>data-dismiss=</span><span class='s'>'modal'</span> <span class='na'>aria-label=</span><span class='s'>'Close'</span><span class='nt'>&gt;&lt;span</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;</span><span class='ni'>&amp;times;</span><span class='nt'>&lt;/span&gt;&lt;/button&gt;</span>
        <span class='nt'>&lt;h4</span> <span class='na'>class=</span><span class='s'>'modal-title'</span> <span class='na'>id=</span><span class='s'>'gridSystemModalLabel'</span><span class='nt'>&gt;</span>Modal title<span class='nt'>&lt;/h4&gt;</span>
      <span class='nt'>&lt;/div&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-body'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
          <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-4'</span><span class='nt'>&gt;</span>.col-md-4<span class='nt'>&lt;/div&gt;</span>
          <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-4 col-md-offset-4'</span><span class='nt'>&gt;</span>.col-md-4 .col-md-offset-4<span class='nt'>&lt;/div&gt;</span>
        <span class='nt'>&lt;/div&gt;</span>
        <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
          <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-3 col-md-offset-3'</span><span class='nt'>&gt;</span>.col-md-3 .col-md-offset-3<span class='nt'>&lt;/div&gt;</span>
          <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-2 col-md-offset-4'</span><span class='nt'>&gt;</span>.col-md-2 .col-md-offset-4<span class='nt'>&lt;/div&gt;</span>
        <span class='nt'>&lt;/div&gt;</span>
        <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
          <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-md-6 col-md-offset-3'</span><span class='nt'>&gt;</span>.col-md-6 .col-md-offset-3<span class='nt'>&lt;/div&gt;</span>
        <span class='nt'>&lt;/div&gt;</span>
        <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
          <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-sm-9'</span><span class='nt'>&gt;</span>
            Level 1: .col-sm-9
            <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'row'</span><span class='nt'>&gt;</span>
              <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-8 col-sm-6'</span><span class='nt'>&gt;</span>
                Level 2: .col-xs-8 .col-sm-6
              <span class='nt'>&lt;/div&gt;</span>
              <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'col-xs-4 col-sm-6'</span><span class='nt'>&gt;</span>
                Level 2: .col-xs-4 .col-sm-6
              <span class='nt'>&lt;/div&gt;</span>
            <span class='nt'>&lt;/div&gt;</span>
          <span class='nt'>&lt;/div&gt;</span>
        <span class='nt'>&lt;/div&gt;</span>
      <span class='nt'>&lt;/div&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-footer'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>data-dismiss=</span><span class='s'>'modal'</span><span class='nt'>&gt;</span>Close<span class='nt'>&lt;/button&gt;</span>
        <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span><span class='nt'>&gt;</span>Save changes<span class='nt'>&lt;/button&gt;</span>
      <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;/div&gt;</span><span class='c'>&lt;!-- /.modal-content --&gt;</span>
  <span class='nt'>&lt;/div&gt;</span><span class='c'>&lt;!-- /.modal-dialog --&gt;</span>
<span class='nt'>&lt;/div&gt;</span><span class='c'>&lt;!-- /.modal --&gt;</span></code></pre></div>

  <h2 id='modals-related-target'>Varying modal content based on trigger button</h2>
  <p>Have a bunch of buttons that all trigger the same modal, just with slightly different contents? Use <code>event.relatedTarget</code> and <a href='https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Using_data_attributes'>HTML <code>data-*</code> attributes</a> (possibly <a href='http://api.jquery.com/data/'>via jQuery</a>) to vary the contents of the modal depending on which button was clicked. See the Modal Events docs for details on <code>relatedTarget</code>,</p>
  <div class='bs-example'>
    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdo'>Open modal for @mdo</button>
    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' data-whatever='@fat'>Open modal for @fat</button>
    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' data-whatever='@getbootstrap'>Open modal for @getbootstrap</button>
    ...more buttons...

    <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
            <h4 class='modal-title' id='exampleModalLabel'>New message</h4>
          </div>
          <div class='modal-body'>
            <form>
              <div class='form-group'>
                <label for='recipient-name' class='control-label'>Recipient:</label>
                <input type='text' class='form-control' id='recipient-name'>
              </div>
              <div class='form-group'>
                <label for='message-text' class='control-label'>Message:</label>
                <textarea class='form-control' id='message-text'></textarea>
              </div>
            </form>
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
            <button type='button' class='btn btn-primary'>Send message</button>
          </div>
        </div>
      </div>
    </div><!-- /.modal -->
  </div><!-- /.bs-example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span> <span class='na'>data-toggle=</span><span class='s'>'modal'</span> <span class='na'>data-target=</span><span class='s'>'#exampleModal'</span> <span class='na'>data-whatever=</span><span class='s'>'@mdo'</span><span class='nt'>&gt;</span>Open modal for @mdo<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span> <span class='na'>data-toggle=</span><span class='s'>'modal'</span> <span class='na'>data-target=</span><span class='s'>'#exampleModal'</span> <span class='na'>data-whatever=</span><span class='s'>'@fat'</span><span class='nt'>&gt;</span>Open modal for @fat<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span> <span class='na'>data-toggle=</span><span class='s'>'modal'</span> <span class='na'>data-target=</span><span class='s'>'#exampleModal'</span> <span class='na'>data-whatever=</span><span class='s'>'@getbootstrap'</span><span class='nt'>&gt;</span>Open modal for @getbootstrap<span class='nt'>&lt;/button&gt;</span>
...more buttons...

<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal fade'</span> <span class='na'>id=</span><span class='s'>'exampleModal'</span> <span class='na'>tabindex=</span><span class='s'>'-1'</span> <span class='na'>role=</span><span class='s'>'dialog'</span> <span class='na'>aria-labelledby=</span><span class='s'>'exampleModalLabel'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-dialog'</span> <span class='na'>role=</span><span class='s'>'document'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-content'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-header'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'close'</span> <span class='na'>data-dismiss=</span><span class='s'>'modal'</span> <span class='na'>aria-label=</span><span class='s'>'Close'</span><span class='nt'>&gt;&lt;span</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;</span><span class='ni'>&amp;times;</span><span class='nt'>&lt;/span&gt;&lt;/button&gt;</span>
        <span class='nt'>&lt;h4</span> <span class='na'>class=</span><span class='s'>'modal-title'</span> <span class='na'>id=</span><span class='s'>'exampleModalLabel'</span><span class='nt'>&gt;</span>New message<span class='nt'>&lt;/h4&gt;</span>
      <span class='nt'>&lt;/div&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-body'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;form&gt;</span>
          <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
            <span class='nt'>&lt;label</span> <span class='na'>for=</span><span class='s'>'recipient-name'</span> <span class='na'>class=</span><span class='s'>'control-label'</span><span class='nt'>&gt;</span>Recipient:<span class='nt'>&lt;/label&gt;</span>
            <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'text'</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'recipient-name'</span><span class='nt'>&gt;</span>
          <span class='nt'>&lt;/div&gt;</span>
          <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'form-group'</span><span class='nt'>&gt;</span>
            <span class='nt'>&lt;label</span> <span class='na'>for=</span><span class='s'>'message-text'</span> <span class='na'>class=</span><span class='s'>'control-label'</span><span class='nt'>&gt;</span>Message:<span class='nt'>&lt;/label&gt;</span>
            <span class='nt'>&lt;textarea</span> <span class='na'>class=</span><span class='s'>'form-control'</span> <span class='na'>id=</span><span class='s'>'message-text'</span><span class='nt'>&gt;&lt;/textarea&gt;</span>
          <span class='nt'>&lt;/div&gt;</span>
        <span class='nt'>&lt;/form&gt;</span>
      <span class='nt'>&lt;/div&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'modal-footer'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>data-dismiss=</span><span class='s'>'modal'</span><span class='nt'>&gt;</span>Close<span class='nt'>&lt;/button&gt;</span>
        <span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span><span class='nt'>&gt;</span>Send message<span class='nt'>&lt;/button&gt;</span>
      <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#exampleModal'</span><span class='p'>).</span><span class='nx'>on</span><span class='p'>(</span><span class='s1'>'show.bs.modal'</span><span class='p'>,</span> <span class='kd'>function</span> <span class='p'>(</span><span class='nx'>event</span><span class='p'>)</span> <span class='p'>{</span>
  <span class='kd'>var</span> <span class='nx'>button</span> <span class='o'>=</span> <span class='nx'>$</span><span class='p'>(</span><span class='nx'>event</span><span class='p'>.</span><span class='nx'>relatedTarget</span><span class='p'>)</span> <span class='c1'>// Button that triggered the modal</span>
  <span class='kd'>var</span> <span class='nx'>recipient</span> <span class='o'>=</span> <span class='nx'>button</span><span class='p'>.</span><span class='nx'>data</span><span class='p'>(</span><span class='s1'>'whatever'</span><span class='p'>)</span> <span class='c1'>// Extract info from data-* attributes</span>
  <span class='c1'>// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).</span>
  <span class='c1'>// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.</span>
  <span class='kd'>var</span> <span class='nx'>modal</span> <span class='o'>=</span> <span class='nx'>$</span><span class='p'>(</span><span class='k'>this</span><span class='p'>)</span>
  <span class='nx'>modal</span><span class='p'>.</span><span class='nx'>find</span><span class='p'>(</span><span class='s1'>'.modal-title'</span><span class='p'>).</span><span class='nx'>text</span><span class='p'>(</span><span class='s1'>'New message to '</span> <span class='o'>+</span> <span class='nx'>recipient</span><span class='p'>)</span>
  <span class='nx'>modal</span><span class='p'>.</span><span class='nx'>find</span><span class='p'>(</span><span class='s1'>'.modal-body input'</span><span class='p'>).</span><span class='nx'>val</span><span class='p'>(</span><span class='nx'>recipient</span><span class='p'>)</span>
<span class='p'>})</span></code></pre></div>

  <h2 id='modals-usage'>Usage</h2>
  <p>The modal plugin toggles your hidden content on demand, via data attributes or JavaScript. It also adds <code>.modal-open</code> to the <code>&lt;body&gt;</code> to override default scrolling behavior and generates a <code>.modal-backdrop</code> to provide a click area for dismissing shown modals when clicking outside the modal.</p>

  <h3>Via data attributes</h3>
  <p>Activate a modal without writing JavaScript. Set <code>data-toggle='modal'</code> on a controller element, like a button, along with a <code>data-target='#foo'</code> or <code>href='#foo'</code> to target a specific modal to toggle.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>data-toggle=</span><span class='s'>'modal'</span> <span class='na'>data-target=</span><span class='s'>'#myModal'</span><span class='nt'>&gt;</span>Launch modal<span class='nt'>&lt;/button&gt;</span></code></pre></div>

  <h3>Via JavaScript</h3>
  <p>Call a modal with id <code>myModal</code> with a single line of JavaScript:</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myModal'</span><span class='p'>).</span><span class='nx'>modal</span><span class='p'>(</span><span class='nx'>options</span><span class='p'>)</span></code></pre></div>

  <h3 id='modals-options'>Options</h3>
  <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-backdrop=''</code>.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped js-options-table'>
      <thead>
       <tr>
         <th>Name</th>
         <th>type</th>
         <th>default</th>
         <th>description</th>
       </tr>
      </thead>
      <tbody>
       <tr>
         <td>backdrop</td>
         <td>boolean or the string <code>'static'</code></td>
         <td>true</td>
         <td>Includes a modal-backdrop element. Alternatively, specify <code>static</code> for a backdrop which doesn't close the modal on click.</td>
       </tr>
       <tr>
         <td>keyboard</td>
         <td>boolean</td>
         <td>true</td>
         <td>Closes the modal when escape key is pressed</td>
       </tr>
       <tr>
         <td>show</td>
         <td>boolean</td>
         <td>true</td>
         <td>Shows the modal when initialized.</td>
       </tr>
       <tr>
         <td>remote</td>
         <td>path</td>
         <td>false</td>
         <td>
          <p><strong class='text-danger'>This option is deprecated since v3.3.0 and will be removed in v4.</strong> We recommend instead using client-side templating or a data binding framework, or calling <a href='http://api.jquery.com/load/'>jQuery.load</a> yourself.</p>
          <p>If a remote URL is provided, <strong>content will be loaded one time</strong> via jQuery's <code>load</code> method and injected into the <code>.modal-content</code> div. If you're using the data-api, you may alternatively use the <code>href</code> attribute to specify the remote source. An example of this is shown below:</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;a</span> <span class='na'>data-toggle=</span><span class='s'>'modal'</span> <span class='na'>href=</span><span class='s'>'remote.html'</span> <span class='na'>data-target=</span><span class='s'>'#modal'</span><span class='nt'>&gt;</span>Click me<span class='nt'>&lt;/a&gt;</span></code></pre></div>
         </td>
       </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->

  <h3 id='modals-methods'>Methods</h3>

  <h4><code>.modal(options)</code></h4>
  <p>Activates your content as a modal. Accepts an optional options <code>object</code>.</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myModal'</span><span class='p'>).</span><span class='nx'>modal</span><span class='p'>({</span>
  <span class='na'>keyboard</span><span class='p'>:</span> <span class='kc'>false</span>
<span class='p'>})</span></code></pre></div>

  <h4><code>.modal('toggle')</code></h4>
  <p>Manually toggles a modal. <strong>Returns to the caller before the modal has actually been shown or hidden</strong> (i.e. before the <code>shown.bs.modal</code> or <code>hidden.bs.modal</code> event occurs).</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myModal'</span><span class='p'>).</span><span class='nx'>modal</span><span class='p'>(</span><span class='s1'>'toggle'</span><span class='p'>)</span></code></pre></div>

  <h4><code>.modal('show')</code></h4>
  <p>Manually opens a modal. <strong>Returns to the caller before the modal has actually been shown</strong> (i.e. before the <code>shown.bs.modal</code> event occurs).</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myModal'</span><span class='p'>).</span><span class='nx'>modal</span><span class='p'>(</span><span class='s1'>'show'</span><span class='p'>)</span></code></pre></div>

  <h4><code>.modal('hide')</code></h4>
  <p>Manually hides a modal. <strong>Returns to the caller before the modal has actually been hidden</strong> (i.e. before the <code>hidden.bs.modal</code> event occurs).</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myModal'</span><span class='p'>).</span><span class='nx'>modal</span><span class='p'>(</span><span class='s1'>'hide'</span><span class='p'>)</span></code></pre></div>

  <h4><code>.modal('handleUpdate')</code></h4>
  <p>Readjusts the modal's positioning to counter a scrollbar in case one should appear, which would make the modal jump to the left.</p>
  <p>Only needed when the height of the modal changes while it is open.</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myModal'</span><span class='p'>).</span><span class='nx'>modal</span><span class='p'>(</span><span class='s1'>'handleUpdate'</span><span class='p'>)</span></code></pre></div>

  <h3 id='modals-events'>Events</h3>
  <p>Bootstrap's modal class exposes a few events for hooking into modal functionality.</p>
  <p>All modal events are fired at the modal itself (i.e. at the <code>&lt;div class='modal'&gt;</code>).</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped bs-events-table'>
      <thead>
       <tr>
         <th>Event Type</th>
         <th>Description</th>
       </tr>
      </thead>
      <tbody>
       <tr>
         <td>show.bs.modal</td>
         <td>This event fires immediately when the <code>show</code> instance method is called. If caused by a click, the clicked element is available as the <code>relatedTarget</code> property of the event.</td>
       </tr>
       <tr>
         <td>shown.bs.modal</td>
         <td>This event is fired when the modal has been made visible to the user (will wait for CSS transitions to complete). If caused by a click, the clicked element is available as the <code>relatedTarget</code> property of the event.</td>
       </tr>
       <tr>
         <td>hide.bs.modal</td>
         <td>This event is fired immediately when the <code>hide</code> instance method has been called.</td>
       </tr>
       <tr>
         <td>hidden.bs.modal</td>
         <td>This event is fired when the modal has finished being hidden from the user (will wait for CSS transitions to complete).</td>
       </tr>
       <tr>
         <td>loaded.bs.modal</td>
         <td>This event is fired when the modal has loaded content using the <code>remote</code> option.</td>
       </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myModal'</span><span class='p'>).</span><span class='nx'>on</span><span class='p'>(</span><span class='s1'>'hidden.bs.modal'</span><span class='p'>,</span> <span class='kd'>function</span> <span class='p'>(</span><span class='nx'>e</span><span class='p'>)</span> <span class='p'>{</span>
  <span class='c1'>// do something...</span>
<span class='p'>})</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='dropdowns' class='page-header'>Dropdowns <small>dropdown.js</small></h1>

  <h2 id='dropdowns-examples'>Examples</h2>
  <p>Add dropdown menus to nearly anything with this simple plugin, including the navbar, tabs, and pills.</p>

  <h3>Within a navbar</h3>
  <div class='bs-example'>
    <nav id='navbar-example' class='navbar navbar-default navbar-static'>
      <div class='container-fluid'>
        <div class='navbar-header'>
          <button class='navbar-toggle collapsed' type='button' data-toggle='collapse' data-target='.bs-example-js-navbar-collapse'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand' href='#'>Project Name</a>
        </div>
        <div class='collapse navbar-collapse bs-example-js-navbar-collapse'>
          <ul class='nav navbar-nav'>
            <li class='dropdown'>
              <a id='drop1' href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                Dropdown
                <span class='caret'></span>
              </a>
              <ul class='dropdown-menu' aria-labelledby='drop1'>
                <li><a href='#'>Action</a></li>
                <li><a href='#'>Another action</a></li>
                <li><a href='#'>Something else here</a></li>
                <li role='separator' class='divider'></li>
                <li><a href='#'>Separated link</a></li>
              </ul>
            </li>
            <li class='dropdown'>
              <a id='drop2' href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                Dropdown
                <span class='caret'></span>
              </a>
              <ul class='dropdown-menu' aria-labelledby='drop2'>
                <li><a href='#'>Action</a></li>
                <li><a href='#'>Another action</a></li>
                <li><a href='#'>Something else here</a></li>
                <li role='separator' class='divider'></li>
                <li><a href='#'>Separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class='nav navbar-nav navbar-right'>
            <li id='fat-menu' class='dropdown'>
              <a id='drop3' href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                Dropdown
                <span class='caret'></span>
              </a>
              <ul class='dropdown-menu' aria-labelledby='drop3'>
                <li><a href='#'>Action</a></li>
                <li><a href='#'>Another action</a></li>
                <li><a href='#'>Something else here</a></li>
                <li role='separator' class='divider'></li>
                <li><a href='#'>Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container-fluid -->
    </nav> <!-- /navbar-example -->
  </div> <!-- /example -->

  <h3>Within pills</h3>
  <div class='bs-example'>
    <ul class='nav nav-pills' role='tablist'>
      <li role='presentation' class='active'><a href='#'>Regular link</a></li>
      <li role='presentation' class='dropdown'>
        <a id='drop4' href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
          Dropdown
          <span class='caret'></span>
        </a>
        <ul id='menu1' class='dropdown-menu' aria-labelledby='drop4'>
          <li><a href='#'>Action</a></li>
          <li><a href='#'>Another action</a></li>
          <li><a href='#'>Something else here</a></li>
          <li role='separator' class='divider'></li>
          <li><a href='#'>Separated link</a></li>
        </ul>
      </li>
      <li role='presentation' class='dropdown'>
        <a id='drop5' href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
          Dropdown
          <span class='caret'></span>
        </a>
        <ul id='menu2' class='dropdown-menu' aria-labelledby='drop5'>
          <li><a href='#'>Action</a></li>
          <li><a href='#'>Another action</a></li>
          <li><a href='#'>Something else here</a></li>
          <li role='separator' class='divider'></li>
          <li><a href='#'>Separated link</a></li>
        </ul>
      </li>
      <li role='presentation' class='dropdown'>
        <a id='drop6' href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
          Dropdown
          <span class='caret'></span>
        </a>
        <ul id='menu3' class='dropdown-menu' aria-labelledby='drop6'>
          <li><a href='#'>Action</a></li>
          <li><a href='#'>Another action</a></li>
          <li><a href='#'>Something else here</a></li>
          <li role='separator' class='divider'></li>
          <li><a href='#'>Separated link</a></li>
        </ul>
      </li>
    </ul> <!-- /pills -->
  </div> <!-- /example -->


  <h2 id='dropdowns-usage'>Usage</h2>
  <p>Via data attributes or JavaScript, the dropdown plugin toggles hidden content (dropdown menus) by toggling the <code>.open</code> class on the parent list item.</p>
  <p>On mobile devices, opening a dropdown adds a <code>.dropdown-backdrop</code> as a tap area for closing dropdown menus when tapping outside the menu, a requirement for proper iOS support. <strong class='text-danger'>This means that switching from an open dropdown menu to a different dropdown menu requires an extra tap on mobile.</strong></p>
  <p>Note: The <code>data-toggle='dropdown'</code> attribute is relied on for closing dropdown menus at an application level, so it's a good idea to always use it.</p>

  <h3>Via data attributes</h3>
  <p>Add <code>data-toggle='dropdown'</code> to a link or button to toggle a dropdown.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'dropdown'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;button</span> <span class='na'>id=</span><span class='s'>'dLabel'</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>data-toggle=</span><span class='s'>'dropdown'</span> <span class='na'>aria-haspopup=</span><span class='s'>'true'</span> <span class='na'>aria-expanded=</span><span class='s'>'false'</span><span class='nt'>&gt;</span>
    Dropdown trigger
    <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'caret'</span><span class='nt'>&gt;&lt;/span&gt;</span>
  <span class='nt'>&lt;/button&gt;</span>
  <span class='nt'>&lt;ul</span> <span class='na'>class=</span><span class='s'>'dropdown-menu'</span> <span class='na'>aria-labelledby=</span><span class='s'>'dLabel'</span><span class='nt'>&gt;</span>
    ...
  <span class='nt'>&lt;/ul&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>
  <p>To keep URLs intact with link buttons, use the <code>data-target</code> attribute instead of <code>href='#'</code>.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'dropdown'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;a</span> <span class='na'>id=</span><span class='s'>'dLabel'</span> <span class='na'>data-target=</span><span class='s'>'#'</span> <span class='na'>href=</span><span class='s'>'http://example.com'</span> <span class='na'>data-toggle=</span><span class='s'>'dropdown'</span> <span class='na'>role=</span><span class='s'>'button'</span> <span class='na'>aria-haspopup=</span><span class='s'>'true'</span> <span class='na'>aria-expanded=</span><span class='s'>'false'</span><span class='nt'>&gt;</span>
    Dropdown trigger
    <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'caret'</span><span class='nt'>&gt;&lt;/span&gt;</span>
  <span class='nt'>&lt;/a&gt;</span>

  <span class='nt'>&lt;ul</span> <span class='na'>class=</span><span class='s'>'dropdown-menu'</span> <span class='na'>aria-labelledby=</span><span class='s'>'dLabel'</span><span class='nt'>&gt;</span>
    ...
  <span class='nt'>&lt;/ul&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h3>Via JavaScript</h3>
  <p>Call the dropdowns via JavaScript:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'.dropdown-toggle'</span><span class='p'>).</span><span class='nx'>dropdown</span><span class='p'>()</span></code></pre></div>
  <div class='bs-callout bs-callout-info' id='callout-dropdowns-data-required'>
    <h4><code>data-toggle='dropdown'</code> still required</h4>
    <p>Regardless of whether you call your dropdown via JavaScript or instead use the data-api, <code>data-toggle='dropdown'</code> is always required to be present on the dropdown's trigger element.</p>
  </div>

  <h3 id='dropdowns-options'>Options</h3>
  <p><em>None</em></p>

  <h3 id='dropdowns-methods'>Methods</h3>
  <h4><code>$().dropdown('toggle')</code></h4>
  <p>Toggles the dropdown menu of a given navbar or tabbed navigation.</p>

  <h3 id='dropdowns-events'>Events</h3>
  <p>All dropdown events are fired at the <code>.dropdown-menu</code>'s parent element.</p>
  <p>All dropdown events have a <code>relatedTarget</code> property, whose value is the toggling anchor element.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped bs-events-table'>
      <thead>
        <tr>
          <th>Event Type</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>show.bs.dropdown</td>
          <td>This event fires immediately when the show instance method is called.</td>
        </tr>
        <tr>
          <td>shown.bs.dropdown</td>
          <td>This event is fired when the dropdown has been made visible to the user (will wait for CSS transitions, to complete).</td>
        </tr>
        <tr>
          <td>hide.bs.dropdown</td>
          <td>This event is fired immediately when the hide instance method has been called.</td>
        </tr>
        <tr>
          <td>hidden.bs.dropdown</td>
          <td>This event is fired when the dropdown has finished being hidden from the user (will wait for CSS transitions, to complete).</td>
        </tr>
      </tbody>
    </table>
  </div><!-- ./bs-table-responsive -->
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myDropdown'</span><span class='p'>).</span><span class='nx'>on</span><span class='p'>(</span><span class='s1'>'show.bs.dropdown'</span><span class='p'>,</span> <span class='kd'>function</span> <span class='p'>()</span> <span class='p'>{</span>
  <span class='c1'>// do something…</span>
<span class='p'>})</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='scrollspy' class='page-header'>ScrollSpy <small>scrollspy.js</small></h1>

  <h2 id='scrollspy-examples'>Example in navbar</h2>
  <p>The ScrollSpy plugin is for automatically updating nav targets based on scroll position. Scroll the area below the navbar and watch the active class change. The dropdown sub items will be highlighted as well.</p>
  <div class='bs-example' data-example-id='embedded-scrollspy'>
    <nav id='navbar-example2' class='navbar navbar-default navbar-static'>
      <div class='container-fluid'>
        <div class='navbar-header'>
          <button class='navbar-toggle collapsed' type='button' data-toggle='collapse' data-target='.bs-example-js-navbar-scrollspy'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand' href='#'>Project Name</a>
        </div>
        <div class='collapse navbar-collapse bs-example-js-navbar-scrollspy'>
          <ul class='nav navbar-nav'>
            <li><a href='#fat'>@fat</a></li>
            <li><a href='#mdo'>@mdo</a></li>
            <li class='dropdown'>
              <a href='#' id='navbarDrop1' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Dropdown <span class='caret'></span></a>
              <ul class='dropdown-menu' aria-labelledby='navbarDrop1'>
                <li><a href='#one'>one</a></li>
                <li><a href='#two'>two</a></li>
                <li role='separator' class='divider'></li>
                <li><a href='#three'>three</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div data-spy='scroll' data-target='#navbar-example2' data-offset='0' class='scrollspy-example'>
      <h4 id='fat'>@fat</h4>
      <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
      <h4 id='mdo'>@mdo</h4>
      <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
      <h4 id='one'>one</h4>
      <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.</p>
      <h4 id='two'>two</h4>
      <p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
      <h4 id='three'>three</h4>
      <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
      <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats.
      </p>
    </div>
  </div><!-- /example -->


  <h2 id='scrollspy-usage'>Usage</h2>

  <div class='bs-callout bs-callout-warning' id='callout-scrollspy-needs-nav'>
    <h4>Requires Bootstrap nav</h4>
    <p>Scrollspy currently requires the use of a <a href='../components/#nav'>Bootstrap nav component</a> for proper highlighting of active links.</p>
  </div>
  <div class='bs-callout bs-callout-danger' id='callout-scrollspy-target-ids'>
    <h4>Resolvable ID targets required</h4>
    <p>Navbar links must have resolvable id targets. For example, a <code>&lt;a href='#home'&gt;home&lt;/a&gt;</code> must correspond to something in the DOM like <code>&lt;div id='home'&gt;&lt;/div&gt;</code>.</p>
  </div>
  <div class='bs-callout bs-callout-info' id='callout-scrollspy-invisible-targets'>
    <h4>Non-<code>:visible</code> target elements ignored</h4>
    <p>Target elements that are not <a href='http://api.jquery.com/visible-selector/'><code>:visible</code> according to jQuery</a> will be ignored and their corresponding nav items will never be highlighted.</p>
  </div>

  <h3>Requires relative positioning</h3>
  <p>No matter the implementation method, scrollspy requires the use of <code>position: relative;</code> on the element you're spying on. In most cases this is the <code>&lt;body&gt;</code>. When scrollspying on elements other than the <code>&lt;body&gt;</code>, be sure to have a <code>height</code> set and <code>overflow-y: scroll;</code> applied.</p>

  <h3>Via data attributes</h3>
  <p>To easily add scrollspy behavior to your topbar navigation, add <code>data-spy='scroll'</code> to the element you want to spy on (most typically this would be the <code>&lt;body&gt;</code>). Then add the <code>data-target</code> attribute with the ID or class of the parent element of any Bootstrap <code>.nav</code> component.</p>
<div class='highlight'><pre><code class='language-css' data-lang='css'><span class='nt'>body</span> <span class='p'>{</span>
  <span class='nl'>position</span><span class='p'>:</span> <span class='nb'>relative</span><span class='p'>;</span>
<span class='p'>}</span></code></pre></div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;body</span> <span class='na'>data-spy=</span><span class='s'>'scroll'</span> <span class='na'>data-target=</span><span class='s'>'#navbar-example'</span><span class='nt'>&gt;</span>
  ...
  <span class='nt'>&lt;div</span> <span class='na'>id=</span><span class='s'>'navbar-example'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;ul</span> <span class='na'>class=</span><span class='s'>'nav nav-tabs'</span> <span class='na'>role=</span><span class='s'>'tablist'</span><span class='nt'>&gt;</span>
      ...
    <span class='nt'>&lt;/ul&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  ...
<span class='nt'>&lt;/body&gt;</span></code></pre></div>

  <h3>Via JavaScript</h3>
  <p>After adding <code>position: relative;</code> in your CSS, call the scrollspy via JavaScript:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'body'</span><span class='p'>).</span><span class='nx'>scrollspy</span><span class='p'>({</span> <span class='na'>target</span><span class='p'>:</span> <span class='s1'>'#navbar-example'</span> <span class='p'>})</span></code></pre></div>


  <h3 id='scrollspy-methods'>Methods</h3>
  <h4><code>.scrollspy('refresh')</code></h4>
  <p>When using scrollspy in conjunction with adding or removing of elements from the DOM, you'll need to call the refresh method like so:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'[data-spy='scroll']'</span><span class='p'>).</span><span class='nx'>each</span><span class='p'>(</span><span class='kd'>function</span> <span class='p'>()</span> <span class='p'>{</span>
  <span class='kd'>var</span> <span class='nx'>$spy</span> <span class='o'>=</span> <span class='nx'>$</span><span class='p'>(</span><span class='k'>this</span><span class='p'>).</span><span class='nx'>scrollspy</span><span class='p'>(</span><span class='s1'>'refresh'</span><span class='p'>)</span>
<span class='p'>})</span></code></pre></div>


  <h3 id='scrollspy-options'>Options</h3>
  <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-offset=''</code>.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped js-options-table'>
      <thead>
       <tr>
         <th>Name</th>
         <th>type</th>
         <th>default</th>
         <th>description</th>
       </tr>
      </thead>
      <tbody>
       <tr>
         <td>offset</td>
         <td>number</td>
         <td>10</td>
         <td>Pixels to offset from top when calculating position of scroll.</td>
       </tr>
      </tbody>
    </table>
  </div><!-- ./bs-table-responsive -->

  <h3 id='scrollspy-events'>Events</h3>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped bs-events-table'>
      <thead>
       <tr>
         <th>Event Type</th>
         <th>Description</th>
       </tr>
      </thead>
      <tbody>
       <tr>
         <td>activate.bs.scrollspy</td>
         <td>This event fires whenever a new item becomes activated by the scrollspy.</td>
      </tr>
      </tbody>
    </table>
  </div><!-- ./bs-table-responsive -->
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myScrollspy'</span><span class='p'>).</span><span class='nx'>on</span><span class='p'>(</span><span class='s1'>'activate.bs.scrollspy'</span><span class='p'>,</span> <span class='kd'>function</span> <span class='p'>()</span> <span class='p'>{</span>
  <span class='c1'>// do something…</span>
<span class='p'>})</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='tabs' class='page-header'>Togglable tabs <small>tab.js</small></h1>

  <h2 id='tabs-examples'>Example tabs</h2>
  <p>Add quick, dynamic tab functionality to transition through panes of local content, even via dropdown menus. <strong>Nested tabs are not supported.</strong></p>
  <div class='bs-example bs-example-tabs' data-example-id='togglable-tabs'>
    <ul id='myTabs' class='nav nav-tabs' role='tablist'>
      <li role='presentation' class='active'><a href='#home' id='home-tab' role='tab' data-toggle='tab' aria-controls='home' aria-expanded='true'>Home</a></li>
      <li role='presentation'><a href='#profile' role='tab' id='profile-tab' data-toggle='tab' aria-controls='profile'>Profile</a></li>
      <li role='presentation' class='dropdown'>
        <a href='#' id='myTabDrop1' class='dropdown-toggle' data-toggle='dropdown' aria-controls='myTabDrop1-contents'>Dropdown <span class='caret'></span></a>
        <ul class='dropdown-menu' aria-labelledby='myTabDrop1' id='myTabDrop1-contents'>
          <li><a href='#dropdown1' role='tab' id='dropdown1-tab' data-toggle='tab' aria-controls='dropdown1'>@fat</a></li>
          <li><a href='#dropdown2' role='tab' id='dropdown2-tab' data-toggle='tab' aria-controls='dropdown2'>@mdo</a></li>
        </ul>
      </li>
    </ul>
    <div id='myTabContent' class='tab-content'>
      <div role='tabpanel' class='tab-pane fade in active' id='home' aria-labelledBy='home-tab'>
        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
      </div>
      <div role='tabpanel' class='tab-pane fade' id='profile' aria-labelledBy='profile-tab'>
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
      </div>
      <div role='tabpanel' class='tab-pane fade' id='dropdown1' aria-labelledBy='dropdown1-tab'>
        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
      </div>
      <div role='tabpanel' class='tab-pane fade' id='dropdown2' aria-labelledBy='dropdown2-tab'>
        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
      </div>
    </div>
  </div><!-- /example -->

  <div class='bs-callout bs-callout-info' id='callout-tabs-extends-component'>
    <h4>Extends tabbed navigation</h4>
    <p>This plugin extends the <a href='../components/#nav-tabs'>tabbed navigation component</a> to add tabbable areas.</p>
  </div>


  <h2 id='tabs-usage'>Usage</h2>
  <p>Enable tabbable tabs via JavaScript (each tab needs to be activated individually):</p>

<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myTabs a'</span><span class='p'>).</span><span class='nx'>click</span><span class='p'>(</span><span class='kd'>function</span> <span class='p'>(</span><span class='nx'>e</span><span class='p'>)</span> <span class='p'>{</span>
  <span class='nx'>e</span><span class='p'>.</span><span class='nx'>preventDefault</span><span class='p'>()</span>
  <span class='nx'>$</span><span class='p'>(</span><span class='k'>this</span><span class='p'>).</span><span class='nx'>tab</span><span class='p'>(</span><span class='s1'>'show'</span><span class='p'>)</span>
<span class='p'>})</span></code></pre></div>

  <p>You can activate individual tabs in several ways:</p>

<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myTabs a[href='#profile']'</span><span class='p'>).</span><span class='nx'>tab</span><span class='p'>(</span><span class='s1'>'show'</span><span class='p'>)</span> <span class='c1'>// Select tab by name</span>
<span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myTabs a:first'</span><span class='p'>).</span><span class='nx'>tab</span><span class='p'>(</span><span class='s1'>'show'</span><span class='p'>)</span> <span class='c1'>// Select first tab</span>
<span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myTabs a:last'</span><span class='p'>).</span><span class='nx'>tab</span><span class='p'>(</span><span class='s1'>'show'</span><span class='p'>)</span> <span class='c1'>// Select last tab</span>
<span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myTabs li:eq(2) a'</span><span class='p'>).</span><span class='nx'>tab</span><span class='p'>(</span><span class='s1'>'show'</span><span class='p'>)</span> <span class='c1'>// Select third tab (0-indexed)</span></code></pre></div>

  <h3>Markup</h3>
  <p>You can activate a tab or pill navigation without writing any JavaScript by simply specifying <code>data-toggle='tab'</code> or <code>data-toggle='pill'</code> on an element. Adding the <code>nav</code> and <code>nav-tabs</code> classes to the tab <code>ul</code> will apply the Bootstrap <a href='../components/#nav-tabs'>tab styling</a>, while adding the <code>nav</code> and <code>nav-pills</code> classes will apply <a href='../components/#nav-pills'>pill styling</a>.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div&gt;</span>

  <span class='c'>&lt;!-- Nav tabs --&gt;</span>
  <span class='nt'>&lt;ul</span> <span class='na'>class=</span><span class='s'>'nav nav-tabs'</span> <span class='na'>role=</span><span class='s'>'tablist'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;li</span> <span class='na'>role=</span><span class='s'>'presentation'</span> <span class='na'>class=</span><span class='s'>'active'</span><span class='nt'>&gt;&lt;a</span> <span class='na'>href=</span><span class='s'>'#home'</span> <span class='na'>aria-controls=</span><span class='s'>'home'</span> <span class='na'>role=</span><span class='s'>'tab'</span> <span class='na'>data-toggle=</span><span class='s'>'tab'</span><span class='nt'>&gt;</span>Home<span class='nt'>&lt;/a&gt;&lt;/li&gt;</span>
    <span class='nt'>&lt;li</span> <span class='na'>role=</span><span class='s'>'presentation'</span><span class='nt'>&gt;&lt;a</span> <span class='na'>href=</span><span class='s'>'#profile'</span> <span class='na'>aria-controls=</span><span class='s'>'profile'</span> <span class='na'>role=</span><span class='s'>'tab'</span> <span class='na'>data-toggle=</span><span class='s'>'tab'</span><span class='nt'>&gt;</span>Profile<span class='nt'>&lt;/a&gt;&lt;/li&gt;</span>
    <span class='nt'>&lt;li</span> <span class='na'>role=</span><span class='s'>'presentation'</span><span class='nt'>&gt;&lt;a</span> <span class='na'>href=</span><span class='s'>'#messages'</span> <span class='na'>aria-controls=</span><span class='s'>'messages'</span> <span class='na'>role=</span><span class='s'>'tab'</span> <span class='na'>data-toggle=</span><span class='s'>'tab'</span><span class='nt'>&gt;</span>Messages<span class='nt'>&lt;/a&gt;&lt;/li&gt;</span>
    <span class='nt'>&lt;li</span> <span class='na'>role=</span><span class='s'>'presentation'</span><span class='nt'>&gt;&lt;a</span> <span class='na'>href=</span><span class='s'>'#settings'</span> <span class='na'>aria-controls=</span><span class='s'>'settings'</span> <span class='na'>role=</span><span class='s'>'tab'</span> <span class='na'>data-toggle=</span><span class='s'>'tab'</span><span class='nt'>&gt;</span>Settings<span class='nt'>&lt;/a&gt;&lt;/li&gt;</span>
  <span class='nt'>&lt;/ul&gt;</span>

  <span class='c'>&lt;!-- Tab panes --&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'tab-content'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>role=</span><span class='s'>'tabpanel'</span> <span class='na'>class=</span><span class='s'>'tab-pane active'</span> <span class='na'>id=</span><span class='s'>'home'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>role=</span><span class='s'>'tabpanel'</span> <span class='na'>class=</span><span class='s'>'tab-pane'</span> <span class='na'>id=</span><span class='s'>'profile'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>role=</span><span class='s'>'tabpanel'</span> <span class='na'>class=</span><span class='s'>'tab-pane'</span> <span class='na'>id=</span><span class='s'>'messages'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>role=</span><span class='s'>'tabpanel'</span> <span class='na'>class=</span><span class='s'>'tab-pane'</span> <span class='na'>id=</span><span class='s'>'settings'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>

<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h3>Fade effect</h3>
  <p>To make tabs fade in, add <code>.fade</code> to each <code>.tab-pane</code>. The first tab pane must also have <code>.in</code> to make the initial content visible.</p>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'tab-content'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>role=</span><span class='s'>'tabpanel'</span> <span class='na'>class=</span><span class='s'>'tab-pane fade in active'</span> <span class='na'>id=</span><span class='s'>'home'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>role=</span><span class='s'>'tabpanel'</span> <span class='na'>class=</span><span class='s'>'tab-pane fade'</span> <span class='na'>id=</span><span class='s'>'profile'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>role=</span><span class='s'>'tabpanel'</span> <span class='na'>class=</span><span class='s'>'tab-pane fade'</span> <span class='na'>id=</span><span class='s'>'messages'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>role=</span><span class='s'>'tabpanel'</span> <span class='na'>class=</span><span class='s'>'tab-pane fade'</span> <span class='na'>id=</span><span class='s'>'settings'</span><span class='nt'>&gt;</span>...<span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h3 id='tabs-methods'>Methods</h3>
  <h4><code>$().tab</code></h4>
  <p>
    Activates a tab element and content container. Tab should have either a <code>data-target</code> or an <code>href</code> targeting a container node in the DOM. In the above examples, the tabs are the <code>&lt;a&gt;</code>s with <code>data-toggle='tab'</code> attributes.
  </p>

  <h4><code>.tab('show')</code></h4>
  <p>Selects the given tab and shows its associated content. Any other tab that was previously selected becomes unselected and its associated content is hidden. <strong>Returns to the caller before the tab pane has actually been shown</strong> (i.e. before the <code>shown.bs.tab</code> event occurs).</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#someTab'</span><span class='p'>).</span><span class='nx'>tab</span><span class='p'>(</span><span class='s1'>'show'</span><span class='p'>)</span></code></pre></div>

  <h3 id='tabs-events'>Events</h3>
  <p>When showing a new tab, the events fire in the following order:</p>
  <ol>
    <li><code>hide.bs.tab</code> (on the current active tab)</li>
    <li><code>show.bs.tab</code> (on the to-be-shown tab)</li>
    <li><code>hidden.bs.tab</code> (on the previous active tab, the same one as for the <code>hide.bs.tab</code> event)</li>
    <li><code>shown.bs.tab</code> (on the newly-active just-shown tab, the same one as for the <code>show.bs.tab</code> event)</li>
  </ol>
  <p>If no tab was already active, then the <code>hide.bs.tab</code> and <code>hidden.bs.tab</code> events will not be fired.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped bs-events-table'>
      <thead>
       <tr>
         <th>Event Type</th>
         <th>Description</th>
       </tr>
      </thead>
      <tbody>
       <tr>
         <td>show.bs.tab</td>
         <td>This event fires on tab show, but before the new tab has been shown. Use <code>event.target</code> and <code>event.relatedTarget</code> to target the active tab and the previous active tab (if available) respectively.</td>
      </tr>
      <tr>
         <td>shown.bs.tab</td>
         <td>This event fires on tab show after a tab has been shown. Use <code>event.target</code> and <code>event.relatedTarget</code> to target the active tab and the previous active tab (if available) respectively.</td>
       </tr>
       <tr>
         <td>hide.bs.tab</td>
         <td>This event fires when a new tab is to be shown (and thus the previous active tab is to be hidden). Use <code>event.target</code> and <code>event.relatedTarget</code> to target the current active tab and the new soon-to-be-active tab, respectively.</td>
       </tr>
       <tr>
         <td>hidden.bs.tab</td>
         <td>This event fires after a new tab is shown (and thus the previous active tab is hidden). Use <code>event.target</code> and <code>event.relatedTarget</code> to target the previous active tab and the new active tab, respectively.</td>
       </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'a[data-toggle='tab']'</span><span class='p'>).</span><span class='nx'>on</span><span class='p'>(</span><span class='s1'>'shown.bs.tab'</span><span class='p'>,</span> <span class='kd'>function</span> <span class='p'>(</span><span class='nx'>e</span><span class='p'>)</span> <span class='p'>{</span>
  <span class='nx'>e</span><span class='p'>.</span><span class='nx'>target</span> <span class='c1'>// newly activated tab</span>
  <span class='nx'>e</span><span class='p'>.</span><span class='nx'>relatedTarget</span> <span class='c1'>// previous active tab</span>
<span class='p'>})</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='tooltips' class='page-header'>Tooltips <small>tooltip.js</small></h1>
  <p>Inspired by the excellent jQuery.tipsy plugin written by Jason Frame; Tooltips are an updated version, which don't rely on images, use CSS3 for animations, and data-attributes for local title storage.</p>
  <p>Tooltips with zero-length titles are never displayed.</p>

  <h2 id='tooltips-examples'>Examples</h2>
  <p>Hover over the links below to see tooltips:</p>
  <div class='bs-example tooltip-demo'>
    <p>Tight pants next level keffiyeh <a href='#' data-toggle='tooltip' title='Default tooltip'>you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href='#' data-toggle='tooltip' title='Another tooltip'>have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href='#' data-toggle='tooltip' title='Another one here too'>whatever keytar</a>, scenester farm-to-table banksy Austin <a href='#' data-toggle='tooltip' title='The last tip!'>twitter handle</a> freegan cred raw denim single-origin coffee viral.</p>
  </div><!-- /example -->

  <h3>Static tooltip</h3>
  <p>Four options are available: top, right, bottom, and left aligned.</p>
  <div class='bs-example bs-example-tooltip' data-example-id='static-tooltips'>
    <div class='tooltip left' role='tooltip'>
      <div class='tooltip-arrow'></div>
      <div class='tooltip-inner'>
        Tooltip on the left
      </div>
    </div>
    <div class='tooltip top' role='tooltip'>
      <div class='tooltip-arrow'></div>
      <div class='tooltip-inner'>
        Tooltip on the top
      </div>
    </div>
    <div class='tooltip bottom' role='tooltip'>
      <div class='tooltip-arrow'></div>
      <div class='tooltip-inner'>
        Tooltip on the bottom
      </div>
    </div>
    <div class='tooltip right' role='tooltip'>
      <div class='tooltip-arrow'></div>
      <div class='tooltip-inner'>
        Tooltip on the right
      </div>
    </div>
  </div>

  <h3>Four directions</h3>
  <div class='bs-example tooltip-demo'>
    <div class='bs-example-tooltips'>
      <button type='button' class='btn btn-default' data-toggle='tooltip' data-placement='left' title='Tooltip on left'>Tooltip on left</button>
      <button type='button' class='btn btn-default' data-toggle='tooltip' data-placement='top' title='Tooltip on top'>Tooltip on top</button>
      <button type='button' class='btn btn-default' data-toggle='tooltip' data-placement='bottom' title='Tooltip on bottom'>Tooltip on bottom</button>
      <button type='button' class='btn btn-default' data-toggle='tooltip' data-placement='right' title='Tooltip on right'>Tooltip on right</button>
    </div>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>data-toggle=</span><span class='s'>'tooltip'</span> <span class='na'>data-placement=</span><span class='s'>'left'</span> <span class='na'>title=</span><span class='s'>'Tooltip on left'</span><span class='nt'>&gt;</span>Tooltip on left<span class='nt'>&lt;/button&gt;</span>

<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>data-toggle=</span><span class='s'>'tooltip'</span> <span class='na'>data-placement=</span><span class='s'>'top'</span> <span class='na'>title=</span><span class='s'>'Tooltip on top'</span><span class='nt'>&gt;</span>Tooltip on top<span class='nt'>&lt;/button&gt;</span>

<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>data-toggle=</span><span class='s'>'tooltip'</span> <span class='na'>data-placement=</span><span class='s'>'bottom'</span> <span class='na'>title=</span><span class='s'>'Tooltip on bottom'</span><span class='nt'>&gt;</span>Tooltip on bottom<span class='nt'>&lt;/button&gt;</span>

<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>data-toggle=</span><span class='s'>'tooltip'</span> <span class='na'>data-placement=</span><span class='s'>'right'</span> <span class='na'>title=</span><span class='s'>'Tooltip on right'</span><span class='nt'>&gt;</span>Tooltip on right<span class='nt'>&lt;/button&gt;</span></code></pre></div>

  <div class='bs-callout bs-callout-danger' id='callout-tooltip-opt-in'>
    <h4>Opt-in functionality</h4>
    <p>For performance reasons, the Tooltip and Popover data-apis are opt-in, meaning <strong>you must initialize them yourself</strong>.</p>
    <p>One way to initialize all tooltips on a page would be to select them by their <code>data-toggle</code> attribute:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='kd'>function</span> <span class='p'>()</span> <span class='p'>{</span>
  <span class='nx'>$</span><span class='p'>(</span><span class='s1'>'[data-toggle='tooltip']'</span><span class='p'>).</span><span class='nx'>tooltip</span><span class='p'>()</span>
<span class='p'>})</span></code></pre></div>

  </div>

  <h2 id='tooltips-usage'>Usage</h2>
  <p>The tooltip plugin generates content and markup on demand, and by default places tooltips after their trigger element.</p>
  <p>Trigger the tooltip via JavaScript:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#example'</span><span class='p'>).</span><span class='nx'>tooltip</span><span class='p'>(</span><span class='nx'>options</span><span class='p'>)</span></code></pre></div>

  <h3>Markup</h3>
  <p>The required markup for a tooltip is only a <code>data</code> attribute and <code>title</code> on the HTML element you wish to have a tooltip. The generated markup of a tooltip is rather simple, though it does require a position (by default, set to <code>top</code> by the plugin).</p>

<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='c'>&lt;!-- HTML to write --&gt;</span>
<span class='nt'>&lt;a</span> <span class='na'>href=</span><span class='s'>'#'</span> <span class='na'>data-toggle=</span><span class='s'>'tooltip'</span> <span class='na'>title=</span><span class='s'>'Some tooltip text!'</span><span class='nt'>&gt;</span>Hover over me<span class='nt'>&lt;/a&gt;</span>

<span class='c'>&lt;!-- Generated markup by the plugin --&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'tooltip top'</span> <span class='na'>role=</span><span class='s'>'tooltip'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'tooltip-arrow'</span><span class='nt'>&gt;&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'tooltip-inner'</span><span class='nt'>&gt;</span>
    Some tooltip text!
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <div class='bs-callout bs-callout-warning' id='callout-tooltip-multiline'>
    <h4>Multiple-line links</h4>
    <p>Sometimes you want to add a tooltip to a hyperlink that wraps multiple lines. The default behavior of the tooltip plugin is to center it horizontally and vertically. Add <code>white-space: nowrap;</code> to your anchors to avoid this.</p>
  </div>
  <div class='bs-callout bs-callout-warning' id='callout-tooltip-groups'>
    <h4>Tooltips in button groups and input groups require special setting</h4>
    <p>When using tooltips on elements within a <code>.btn-group</code> or an <code>.input-group</code>, you'll have to specify the option <code>container: 'body'</code> (documented below) to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip is triggered).</p>
  </div>
  <div class='bs-callout bs-callout-warning' id='callout-tooltip-hidden'>
    <h4>Don't try to show tooltips on hidden elements</h4>
    <p>Invoking <code>$(...).tooltip('show')</code> when the target element is <code>display: none;</code> will cause the tooltip to be incorrectly positioned.</p>
  </div>
  <div class='bs-callout bs-callout-warning' id='callout-tooltip-accessibility'>
    <h4>Accessible tooltips for keyboard and assistive technology users</h4>
    <p>For users navigating with a keyboard, and in particular users of assistive technologies, you should only add tooltips to keyboard-focusable elements such as links, form controls, or any arbitrary element with a <code>tabindex='0'</code> attribute.</p>
  </div>
  <div class='bs-callout bs-callout-info' id='callout-tooltip-disabled'>
    <h4>Tooltips on disabled elements require wrapper elements</h4>
    <p>To add a tooltip to a <code>disabled</code> or <code>.disabled</code> element, put the element inside of a <code>&lt;div&gt;</code> and apply the tooltip to that <code>&lt;div&gt;</code> instead.</p>
  </div>

  <h3 id='tooltips-options'>Options</h3>
  <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-animation=''</code>.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped js-options-table'>
      <thead>
        <tr>
          <th>Name</th>
          <th>Type</th>
          <th>Default</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>animation</td>
          <td>boolean</td>
          <td>true</td>
          <td>Apply a CSS fade transition to the tooltip</td>
        </tr>
        <tr>
          <td>container</td>
          <td>string | false</td>
          <td>false</td>
          <td>
            <p>Appends the tooltip to a specific element. Example: <code>container: 'body'</code>. This option is particularly useful in that it allows you to position the tooltip in the flow of the document  near the triggering element - which will prevent the tooltip from floating away from the triggering element during a window resize.</p>
          </td>
        </tr>
        <tr>
          <td>delay</td>
          <td>number | object</td>
          <td>0</td>
          <td>
            <p>Delay showing and hiding the tooltip (ms) - does not apply to manual trigger type</p>
            <p>If a number is supplied, delay is applied to both hide/show</p>
            <p>Object structure is: <code>delay: { 'show': 500, 'hide': 100 }</code></p>
          </td>
        </tr>
        <tr>
          <td>html</td>
          <td>boolean</td>
          <td>false</td>
          <td>Insert HTML into the tooltip. If false, jQuery's <code>text</code> method will be used to insert content into the DOM. Use text if you're worried about XSS attacks.</td>
        </tr>
        <tr>
          <td>placement</td>
          <td>string | function</td>
          <td>'top'</td>
          <td>
            <p>How to position the tooltip - top | bottom | left | right | auto.<br>When 'auto' is specified, it will dynamically reorient the tooltip. For example, if placement is 'auto left', the tooltip will display to the left when possible, otherwise it will display right.</p>
            <p>When a function is used to determine the placement, it is called with the tooltip DOM node as its first argument and the triggering element DOM node as its second. The <code>this</code> context is set to the tooltip instance.</p>
          </td>
        </tr>
        <tr>
          <td>selector</td>
          <td>string</td>
          <td>false</td>
          <td>If a selector is provided, tooltip objects will be delegated to the specified targets. In practice, this is used to enable dynamic HTML content to have tooltips added. See <a href='https://github.com/twbs/bootstrap/issues/4215'>this</a> and <a href='http://jsbin.com/zopod/1/edit'>an informative example</a>.</td>
        </tr>
        <tr>
          <td>template</td>
          <td>string</td>
          <td><code>'&lt;div class='tooltip' role='tooltip'&gt;&lt;div class='tooltip-arrow'&gt;&lt;/div&gt;&lt;div class='tooltip-inner'&gt;&lt;/div&gt;&lt;/div&gt;'</code></td>
          <td>
            <p>Base HTML to use when creating the tooltip.</p>
            <p>The tooltip's <code>title</code> will be injected into the <code>.tooltip-inner</code>.</p>
            <p><code>.tooltip-arrow</code> will become the tooltip's arrow.</p>
            <p>The outermost wrapper element should have the <code>.tooltip</code> class.</p>
          </td>
        </tr>
        <tr>
          <td>title</td>
          <td>string | function</td>
          <td>''</td>
          <td>
            <p>Default title value if <code>title</code> attribute isn't present.</p>
            <p>If a function is given, it will be called with its <code>this</code> reference set to the element that the tooltip is attached to.</p>
          </td>
        </tr>
        <tr>
          <td>trigger</td>
          <td>string</td>
          <td>'hover focus'</td>
          <td>How tooltip is triggered - click | hover | focus | manual. You may pass multiple triggers; separate them with a space. <code>manual</code> cannot be combined with any other trigger.</td>
        </tr>
        <tr>
          <td>viewport</td>
          <td>string | object | function</td>
          <td>{ selector: 'body', padding: 0 }</td>
          <td>
            <p>Keeps the tooltip within the bounds of this element. Example: <code>viewport: '#viewport'</code> or <code>{ 'selector': '#viewport', 'padding': 0 }</code></p>
            <p>If a function is given, it is called with the triggering element DOM node as its only argument. The <code>this</code> context is set to the tooltip instance.</p>
          </td>
        </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->
  <div class='bs-callout bs-callout-info' id='callout-tooltip-data'>
    <h4>Data attributes for individual tooltips</h4>
    <p>Options for individual tooltips can alternatively be specified through the use of data attributes, as explained above.</p>
  </div>

  <h3 id='tooltips-methods'>Methods</h3>

  <h4><code>$().tooltip(options)</code></h4>
  <p>Attaches a tooltip handler to an element collection.</p>

  <h4><code>.tooltip('show')</code></h4>
  <p>Reveals an element's tooltip. <strong>Returns to the caller before the tooltip has actually been shown</strong> (i.e. before the <code>shown.bs.tooltip</code> event occurs). This is considered a 'manual' triggering of the tooltip. Tooltips with zero-length titles are never displayed.</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#element'</span><span class='p'>).</span><span class='nx'>tooltip</span><span class='p'>(</span><span class='s1'>'show'</span><span class='p'>)</span></code></pre></div>

  <h4><code>.tooltip('hide')</code></h4>
  <p>Hides an element's tooltip. <strong>Returns to the caller before the tooltip has actually been hidden</strong> (i.e. before the <code>hidden.bs.tooltip</code> event occurs). This is considered a 'manual' triggering of the tooltip.</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#element'</span><span class='p'>).</span><span class='nx'>tooltip</span><span class='p'>(</span><span class='s1'>'hide'</span><span class='p'>)</span></code></pre></div>

  <h4><code>.tooltip('toggle')</code></h4>
  <p>Toggles an element's tooltip. <strong>Returns to the caller before the tooltip has actually been shown or hidden</strong> (i.e. before the <code>shown.bs.tooltip</code> or <code>hidden.bs.tooltip</code> event occurs). This is considered a 'manual' triggering of the tooltip.</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#element'</span><span class='p'>).</span><span class='nx'>tooltip</span><span class='p'>(</span><span class='s1'>'toggle'</span><span class='p'>)</span></code></pre></div>

  <h4><code>.tooltip('destroy')</code></h4>
  <p>Hides and destroys an element's tooltip. Tooltips that use delegation (which are created using <a href='#tooltips-options'>the <code>selector</code> option</a>) cannot be individually destroyed on descendant trigger elements.</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#element'</span><span class='p'>).</span><span class='nx'>tooltip</span><span class='p'>(</span><span class='s1'>'destroy'</span><span class='p'>)</span></code></pre></div>

  <h3 id='tooltips-events'>Events</h3>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped bs-events-table'>
      <thead>
        <tr>
          <th>Event Type</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>show.bs.tooltip</td>
          <td>This event fires immediately when the <code>show</code> instance method is called.</td>
        </tr>
        <tr>
          <td>shown.bs.tooltip</td>
          <td>This event is fired when the tooltip has been made visible to the user (will wait for CSS transitions to complete).</td>
        </tr>
        <tr>
          <td>hide.bs.tooltip</td>
          <td>This event is fired immediately when the <code>hide</code> instance method has been called.</td>
        </tr>
        <tr>
          <td>hidden.bs.tooltip</td>
          <td>This event is fired when the tooltip has finished being hidden from the user (will wait for CSS transitions to complete).</td>
        </tr>
        <tr>
          <td>inserted.bs.tooltip</td>
          <td>This event is fired after the <code>show.bs.tooltip</code> event when the tooltip template has been added to the DOM.</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myTooltip'</span><span class='p'>).</span><span class='nx'>on</span><span class='p'>(</span><span class='s1'>'hidden.bs.tooltip'</span><span class='p'>,</span> <span class='kd'>function</span> <span class='p'>()</span> <span class='p'>{</span>
  <span class='c1'>// do something…</span>
<span class='p'>})</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='popovers' class='page-header'>Popovers <small>popover.js</small></h1>

  <p>Add small overlays of content, like those on the iPad, to any element for housing secondary information.</p>
  <p>Popovers whose both title and content are zero-length are never displayed.</p>

  <div class='bs-callout bs-callout-danger' id='callout-popover-needs-tooltip'>
    <h4>Plugin dependency</h4>
    <p>Popovers require the <a href='#tooltips'>tooltip plugin</a> to be included in your version of Bootstrap.</p>
  </div>
  <div class='bs-callout bs-callout-danger' id='callout-popover-opt-in'>
    <h4>Opt-in functionality</h4>
    <p>For performance reasons, the Tooltip and Popover data-apis are opt-in, meaning <strong>you must initialize them yourself</strong>.</p>
    <p>One way to initialize all popovers on a page would be to select them by their <code>data-toggle</code> attribute:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='kd'>function</span> <span class='p'>()</span> <span class='p'>{</span>
  <span class='nx'>$</span><span class='p'>(</span><span class='s1'>'[data-toggle='popover']'</span><span class='p'>).</span><span class='nx'>popover</span><span class='p'>()</span>
<span class='p'>})</span></code></pre></div>
  </div>
  <div class='bs-callout bs-callout-warning' id='callout-popover-groups'>
    <h4>Popovers in button groups and input groups require special setting</h4>
    <p>When using popovers on elements within a <code>.btn-group</code> or an <code>.input-group</code>, you'll have to specify the option <code>container: 'body'</code> (documented below) to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the popover is triggered).</p>
  </div>
  <div class='bs-callout bs-callout-warning' id='callout-popover-hidden'>
    <h4>Don't try to show popovers on hidden elements</h4>
    <p>Invoking <code>$(...).popover('show')</code> when the target element is <code>display: none;</code> will cause the popover to be incorrectly positioned.</p>
  </div>
  <div class='bs-callout bs-callout-info' id='callout-popover-disabled'>
    <h4>Popovers on disabled elements require wrapper elements</h4>
    <p>To add a popover to a <code>disabled</code> or <code>.disabled</code> element, put the element inside of a <code>&lt;div&gt;</code> and apply the popover to that <code>&lt;div&gt;</code> instead.</p>
  </div>
  <div class='bs-callout bs-callout-info' id='callout-popover-multiline'>
    <h4>Multiple-line links</h4>
    <p>Sometimes you want to add a popover to a hyperlink that wraps multiple lines. The default behavior of the popover plugin is to center it horizontally and vertically. Add <code>white-space: nowrap;</code> to your anchors to avoid this.</p>
  </div>

  <h2 id='popovers-examples'>Examples</h2>
  <h3>Static popover</h3>
  <p>Four options are available: top, right, bottom, and left aligned.</p>
  <div class='bs-example bs-example-popover' data-example-id='static-popovers'>
    <div class='popover top'>
      <div class='arrow'></div>
      <h3 class='popover-title'>Popover top</h3>
      <div class='popover-content'>
        <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
      </div>
    </div>

    <div class='popover right'>
      <div class='arrow'></div>
      <h3 class='popover-title'>Popover right</h3>
      <div class='popover-content'>
        <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
      </div>
    </div>

    <div class='popover bottom'>
      <div class='arrow'></div>
      <h3 class='popover-title'>Popover bottom</h3>

      <div class='popover-content'>
        <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
      </div>
    </div>

    <div class='popover left'>
      <div class='arrow'></div>
      <h3 class='popover-title'>Popover left</h3>
      <div class='popover-content'>
        <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
      </div>
    </div>

    <div class='clearfix'></div>
  </div>

  <h3>Live demo</h3>
  <div class='bs-example bs-example-padded-bottom'>
    <button type='button' class='btn btn-lg btn-danger bs-docs-popover' data-toggle='popover' title='Popover title' data-content='And here's some amazing content. It's very engaging. Right?'>Click to toggle popover</button>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-lg btn-danger'</span> <span class='na'>data-toggle=</span><span class='s'>'popover'</span> <span class='na'>title=</span><span class='s'>'Popover title'</span> <span class='na'>data-content=</span><span class='s'>'And here's some amazing content. It's very engaging. Right?'</span><span class='nt'>&gt;</span>Click to toggle popover<span class='nt'>&lt;/button&gt;</span></code></pre></div>

  <h4>Four directions</h4>
  <div class='bs-example popover-demo'>
    <div class='bs-example-popovers'>
      <button type='button' class='btn btn-default' data-container='body' data-toggle='popover' data-placement='right' data-content='Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'>
        Popover on right
      </button>
      <button type='button' class='btn btn-default' data-container='body' data-toggle='popover' data-placement='top' data-content='Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'>
        Popover on top
      </button>
      <button type='button' class='btn btn-default' data-container='body' data-toggle='popover' data-placement='bottom' data-content='Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'>
        Popover on bottom
      </button>
      <button type='button' class='btn btn-default' data-container='body' data-toggle='popover' data-placement='left' data-content='Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'>
        Popover on left
      </button>
    </div>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>data-container=</span><span class='s'>'body'</span> <span class='na'>data-toggle=</span><span class='s'>'popover'</span> <span class='na'>data-placement=</span><span class='s'>'left'</span> <span class='na'>data-content=</span><span class='s'>'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'</span><span class='nt'>&gt;</span>
  Popover on left
<span class='nt'>&lt;/button&gt;</span>

<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>data-container=</span><span class='s'>'body'</span> <span class='na'>data-toggle=</span><span class='s'>'popover'</span> <span class='na'>data-placement=</span><span class='s'>'top'</span> <span class='na'>data-content=</span><span class='s'>'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'</span><span class='nt'>&gt;</span>
  Popover on top
<span class='nt'>&lt;/button&gt;</span>

<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>data-container=</span><span class='s'>'body'</span> <span class='na'>data-toggle=</span><span class='s'>'popover'</span> <span class='na'>data-placement=</span><span class='s'>'bottom'</span> <span class='na'>data-content=</span><span class='s'>'Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.'</span><span class='nt'>&gt;</span>
  Popover on bottom
<span class='nt'>&lt;/button&gt;</span>

<span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-default'</span> <span class='na'>data-container=</span><span class='s'>'body'</span> <span class='na'>data-toggle=</span><span class='s'>'popover'</span> <span class='na'>data-placement=</span><span class='s'>'right'</span> <span class='na'>data-content=</span><span class='s'>'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'</span><span class='nt'>&gt;</span>
  Popover on right
<span class='nt'>&lt;/button&gt;</span></code></pre></div>

  <h4>Dismiss on next click</h4>
  <p>Use the <code>focus</code> trigger to dismiss popovers on the next click that the user makes.</p>
  <div class='bs-callout bs-callout-danger' id='callout-popover-dismiss-click'>
    <h4>Specific markup required for dismiss-on-next-click</h4>
    <p>For proper cross-browser and cross-platform behavior, you must use the <code>&lt;a&gt;</code> tag, <i>not</i> the <code>&lt;button&gt;</code> tag, and you also must include the <code>role='button'</code> and <a href='https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#tabindex'><code>tabindex</code></a> attributes.</p>
  </div>
  <div class='bs-example bs-example-padded-bottom'>
    <a tabindex='0' class='btn btn-lg btn-danger bs-docs-popover' role='button' data-toggle='popover' data-trigger='focus' title='Dismissible popover' data-content='And here's some amazing content. It's very engaging. Right?'>Dismissible popover</a>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;a</span> <span class='na'>tabindex=</span><span class='s'>'0'</span> <span class='na'>class=</span><span class='s'>'btn btn-lg btn-danger'</span> <span class='na'>role=</span><span class='s'>'button'</span> <span class='na'>data-toggle=</span><span class='s'>'popover'</span> <span class='na'>data-trigger=</span><span class='s'>'focus'</span> <span class='na'>title=</span><span class='s'>'Dismissible popover'</span> <span class='na'>data-content=</span><span class='s'>'And here's some amazing content. It's very engaging. Right?'</span><span class='nt'>&gt;</span>Dismissible popover<span class='nt'>&lt;/a&gt;</span></code></pre></div>


  <h2 id='popovers-usage'>Usage</h2>
  <p>Enable popovers via JavaScript:</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#example'</span><span class='p'>).</span><span class='nx'>popover</span><span class='p'>(</span><span class='nx'>options</span><span class='p'>)</span></code></pre></div>

  <h3 id='popovers-options'>Options</h3>
  <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-animation=''</code>.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped js-options-table js-options-table'>
      <thead>
        <tr>
          <th>Name</th>
          <th>Type</th>
          <th>Default</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>animation</td>
          <td>boolean</td>
          <td>true</td>
          <td>Apply a CSS fade transition to the popover</td>
        </tr>
        <tr>
          <td>container</td>
          <td>string | false</td>
          <td>false</td>
          <td>
            <p>Appends the popover to a specific element. Example: <code>container: 'body'</code>. This option is particularly useful in that it allows you to position the popover in the flow of the document near the triggering element - which will prevent the popover from floating away from the triggering element during a window resize.</p>
          </td>
        </tr>
        <tr>
          <td>content</td>
          <td>string | function</td>
          <td>''</td>
          <td>
            <p>Default content value if <code>data-content</code> attribute isn't present.</p>
            <p>If a function is given, it will be called with its <code>this</code> reference set to the element that the popover is attached to.</p>
          </td>
        </tr>
        <tr>
          <td>delay</td>
          <td>number | object</td>
          <td>0</td>
          <td>
           <p>Delay showing and hiding the popover (ms) - does not apply to manual trigger type</p>
           <p>If a number is supplied, delay is applied to both hide/show</p>
           <p>Object structure is: <code>delay: { 'show': 500, 'hide': 100 }</code></p>
          </td>
        </tr>
        <tr>
          <td>html</td>
          <td>boolean</td>
          <td>false</td>
          <td>Insert HTML into the popover. If false, jQuery's <code>text</code> method will be used to insert content into the DOM. Use text if you're worried about XSS attacks.</td>
        </tr>
        <tr>
          <td>placement</td>
          <td>string | function</td>
          <td>'right'</td>
          <td>
            <p>How to position the popover - top | bottom | left | right | auto.<br>When 'auto' is specified, it will dynamically reorient the popover. For example, if placement is 'auto left', the popover will display to the left when possible, otherwise it will display right.</p>
            <p>When a function is used to determine the placement, it is called with the popover DOM node as its first argument and the triggering element DOM node as its second. The <code>this</code> context is set to the popover instance.</p>
          </td>
        </tr>
        <tr>
          <td>selector</td>
          <td>string</td>
          <td>false</td>
          <td>If a selector is provided, popover objects will be delegated to the specified targets. In practice, this is used to enable dynamic HTML content to have popovers added. See <a href='https://github.com/twbs/bootstrap/issues/4215'>this</a> and <a href='http://jsbin.com/zopod/1/edit'>an informative example</a>.</td>
        </tr>
        <tr>
          <td>template</td>
          <td>string</td>
          <td><code>'&lt;div class='popover' role='tooltip'&gt;&lt;div class='arrow'&gt;&lt;/div&gt;&lt;h3 class='popover-title'&gt;&lt;/h3&gt;&lt;div class='popover-content'&gt;&lt;/div&gt;&lt;/div&gt;'</code></td>
          <td>
            <p>Base HTML to use when creating the popover.</p>
            <p>The popover's <code>title</code> will be injected into the <code>.popover-title</code>.</p>
            <p>The popover's <code>content</code> will be injected into the <code>.popover-content</code>.</p>
            <p><code>.arrow</code> will become the popover's arrow.</p>
            <p>The outermost wrapper element should have the <code>.popover</code> class.</p>
          </td>
        </tr>
        <tr>
          <td>title</td>
          <td>string | function</td>
          <td>''</td>
          <td>
            <p>Default title value if <code>title</code> attribute isn't present.</p>
            <p>If a function is given, it will be called with its <code>this</code> reference set to the element that the popover is attached to.</p>
          </td>
        </tr>
        <tr>
          <td>trigger</td>
          <td>string</td>
          <td>'click'</td>
          <td>How popover is triggered - click | hover | focus | manual. You may pass multiple triggers; separate them with a space. <code>manual</code> cannot be combined with any other trigger.</td>
        </tr>
        <tr>
          <td>viewport</td>
          <td>string | object | function</td>
          <td>{ selector: 'body', padding: 0 }</td>
          <td>
            <p>Keeps the popover within the bounds of this element. Example: <code>viewport: '#viewport'</code> or <code>{ 'selector': '#viewport', 'padding': 0 }</code></p>
            <p>If a function is given, it is called with the triggering element DOM node as its only argument. The <code>this</code> context is set to the popover instance.</p>
          </td>
       </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->
  <div class='bs-callout bs-callout-info' id='callout-popover-data'>
    <h4>Data attributes for individual popovers</h4>
    <p>Options for individual popovers can alternatively be specified through the use of data attributes, as explained above.</p>
  </div>

  <h3 id='popovers-methods'>Methods</h3>
  <h4><code>$().popover(options)</code></h4>
  <p>Initializes popovers for an element collection.</p>

  <h4><code>.popover('show')</code></h4>
  <p>Reveals an element's popover. <strong>Returns to the caller before the popover has actually been shown</strong> (i.e. before the <code>shown.bs.popover</code> event occurs). This is considered a 'manual' triggering of the popover. Popovers whose both title and content are zero-length are never displayed.</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#element'</span><span class='p'>).</span><span class='nx'>popover</span><span class='p'>(</span><span class='s1'>'show'</span><span class='p'>)</span></code></pre></div>

  <h4><code>.popover('hide')</code></h4>
  <p>Hides an element's popover. <strong>Returns to the caller before the popover has actually been hidden</strong> (i.e. before the <code>hidden.bs.popover</code> event occurs). This is considered a 'manual' triggering of the popover.</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#element'</span><span class='p'>).</span><span class='nx'>popover</span><span class='p'>(</span><span class='s1'>'hide'</span><span class='p'>)</span></code></pre></div>

  <h4><code>.popover('toggle')</code></h4>
  <p>Toggles an element's popover. <strong>Returns to the caller before the popover has actually been shown or hidden</strong> (i.e. before the <code>shown.bs.popover</code> or <code>hidden.bs.popover</code> event occurs). This is considered a 'manual' triggering of the popover.</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#element'</span><span class='p'>).</span><span class='nx'>popover</span><span class='p'>(</span><span class='s1'>'toggle'</span><span class='p'>)</span></code></pre></div>

  <h4><code>.popover('destroy')</code></h4>
  <p>Hides and destroys an element's popover. Popovers that use delegation (which are created using <a href='#popovers-options'>the <code>selector</code> option</a>) cannot be individually destroyed on descendant trigger elements.</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#element'</span><span class='p'>).</span><span class='nx'>popover</span><span class='p'>(</span><span class='s1'>'destroy'</span><span class='p'>)</span></code></pre></div>

  <h3 id='popovers-events'>Events</h3>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped bs-events-table'>
      <thead>
        <tr>
          <th>Event Type</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>show.bs.popover</td>
          <td>This event fires immediately when the <code>show</code> instance method is called.</td>
        </tr>
        <tr>
          <td>shown.bs.popover</td>
          <td>This event is fired when the popover has been made visible to the user (will wait for CSS transitions to complete).</td>
        </tr>
        <tr>
          <td>hide.bs.popover</td>
          <td>This event is fired immediately when the <code>hide</code> instance method has been called.</td>
        </tr>
        <tr>
          <td>hidden.bs.popover</td>
          <td>This event is fired when the popover has finished being hidden from the user (will wait for CSS transitions to complete).</td>
        </tr>
        <tr>
          <td>inserted.bs.popover</td>
          <td>This event is fired after the <code>show.bs.popover</code> event when the popover template has been added to the DOM.</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myPopover'</span><span class='p'>).</span><span class='nx'>on</span><span class='p'>(</span><span class='s1'>'hidden.bs.popover'</span><span class='p'>,</span> <span class='kd'>function</span> <span class='p'>()</span> <span class='p'>{</span>
  <span class='c1'>// do something…</span>
<span class='p'>})</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='alerts' class='page-header'>Alert messages <small>alert.js</small></h1>

  <h2 id='alerts-examples'>Example alerts</h2>
  <p>Add dismiss functionality to all alert messages with this plugin.</p>
  <p>When using a <code>.close</code> button, it must be the first child of the <code>.alert-dismissible</code> and no text content may come before it in the markup.</p>
  <div class='bs-example bs-example-standalone' data-example-id='dismissible-alert-js'>
    <div class='alert alert-warning alert-dismissible fade in' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
      <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
    </div>

    <div class='alert alert-danger alert-dismissible fade in' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
      <h4>Oh snap! You got an error!</h4>
      <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
      <p>
        <button type='button' class='btn btn-danger'>Take this action</button>
        <button type='button' class='btn btn-default'>Or do this</button>
      </p>
    </div>
  </div><!-- /example -->


  <h2 id='alerts-usage'>Usage</h2>

  <p>Just add <code>data-dismiss='alert'</code> to your close button to automatically give an alert close functionality. Closing an alert removes it from the DOM.</p>

<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'close'</span> <span class='na'>data-dismiss=</span><span class='s'>'alert'</span> <span class='na'>aria-label=</span><span class='s'>'Close'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;span</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;</span><span class='ni'>&amp;times;</span><span class='nt'>&lt;/span&gt;</span>
<span class='nt'>&lt;/button&gt;</span></code></pre></div>

  <p>To have your alerts use animation when closing, make sure they have the <code>.fade</code> and <code>.in</code> classes already applied to them.</p>

  <h3 id='alerts-methods'>Methods</h3>

  <h4><code>$().alert()</code></h4>
  <p>Makes an alert listen for click events on descendant elements which have the <code>data-dismiss='alert'</code> attribute. (Not necessary when using the data-api's auto-initialization.)</p>

  <h4><code>$().alert('close')</code></h4>
  <p>Closes an alert by removing it from the DOM. If the <code>.fade</code> and <code>.in</code> classes are present on the element, the alert will fade out before it is removed.</p>


  <h3 id='alerts-events'>Events</h3>
  <p>Bootstrap's alert plugin exposes a few events for hooking into alert functionality.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped bs-events-table'>
      <thead>
        <tr>
          <th>Event Type</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>close.bs.alert</td>
          <td>This event fires immediately when the <code>close</code> instance method is called.</td>
        </tr>
        <tr>
          <td>closed.bs.alert</td>
          <td>This event is fired when the alert has been closed (will wait for CSS transitions to complete).</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myAlert'</span><span class='p'>).</span><span class='nx'>on</span><span class='p'>(</span><span class='s1'>'closed.bs.alert'</span><span class='p'>,</span> <span class='kd'>function</span> <span class='p'>()</span> <span class='p'>{</span>
  <span class='c1'>// do something…</span>
<span class='p'>})</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='buttons' class='page-header'>Buttons <small>button.js</small></h1>

  <p class='lead'>Do more with buttons. Control button states or create groups of buttons for more components like toolbars.</p>

  <div class='bs-callout bs-callout-danger' id='callout-buttons-ff-autocomplete'>
    <h4>Cross-browser compatibility</h4>
    <p><a href='https://github.com/twbs/bootstrap/issues/793'>Firefox persists form control states (disabledness and checkedness) across page loads</a>. A workaround for this is to use <code>autocomplete='off'</code>. See <a href='https://bugzilla.mozilla.org/show_bug.cgi?id=654072'>Mozilla bug #654072</a>.</p>
  </div>

  <h2 id='buttons-stateful'>Stateful</h2>
  <p>Add <code>data-loading-text='Loading...'</code> to use a loading state on a button.</p>
  <p><strong class='text-danger'>This feature is deprecated since v3.3.5 and will be removed in v4.</strong></p>
  <div class='bs-callout bs-callout-info' id='callout-buttons-state-names'>
    <h4>Use whichever state you like!</h4>
    <p>For the sake of this demonstration, we are using <code>data-loading-text</code> and <code>$().button('loading')</code>, but that's not the only state you can use. <a href='#buttons-methods'>See more on this below in the <code>$().button(string)</code> documentation</a>.</p>
  </div>
  <div class='bs-example'>
    <button type='button' id='loading-example-btn' data-loading-text='Loading...' class='btn btn-primary' autocomplete='off'>
      Loading state
    </button>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>id=</span><span class='s'>'myButton'</span> <span class='na'>data-loading-text=</span><span class='s'>'Loading...'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span> <span class='na'>autocomplete=</span><span class='s'>'off'</span><span class='nt'>&gt;</span>
  Loading state
<span class='nt'>&lt;/button&gt;</span>

<span class='nt'>&lt;script&gt;</span>
  <span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myButton'</span><span class='p'>).</span><span class='nx'>on</span><span class='p'>(</span><span class='s1'>'click'</span><span class='p'>,</span> <span class='kd'>function</span> <span class='p'>()</span> <span class='p'>{</span>
    <span class='kd'>var</span> <span class='nx'>$btn</span> <span class='o'>=</span> <span class='nx'>$</span><span class='p'>(</span><span class='k'>this</span><span class='p'>).</span><span class='nx'>button</span><span class='p'>(</span><span class='s1'>'loading'</span><span class='p'>)</span>
    <span class='c1'>// business logic...</span>
    <span class='nx'>$btn</span><span class='p'>.</span><span class='nx'>button</span><span class='p'>(</span><span class='s1'>'reset'</span><span class='p'>)</span>
  <span class='p'>})</span>
<span class='nt'>&lt;/script&gt;</span></code></pre></div>

  <h2 id='buttons-single-toggle'>Single toggle</h2>
  <p>Add <code>data-toggle='button'</code> to activate toggling on a single button.</p>
  <div class='bs-callout bs-callout-warning' id='callout-buttons-single-pretoggled'>
    <h4>Pre-toggled buttons need <code>.active</code> and <code>aria-pressed='true'</code></h4>
    <p>For pre-toggled buttons, you must add the <code>.active</code> class and the <code>aria-pressed='true'</code> attribute to the <code>button</code> yourself.</p>
  </div>
  <div class='bs-example'>
    <button type='button' class='btn btn-primary' data-toggle='button' aria-pressed='false' autocomplete='off'>
      Single toggle
    </button>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span> <span class='na'>data-toggle=</span><span class='s'>'button'</span> <span class='na'>aria-pressed=</span><span class='s'>'false'</span> <span class='na'>autocomplete=</span><span class='s'>'off'</span><span class='nt'>&gt;</span>
  Single toggle
<span class='nt'>&lt;/button&gt;</span></code></pre></div>

  <h2 id='buttons-checkbox-radio'>Checkbox / Radio</h2>
  <p>Add <code>data-toggle='buttons'</code> to a <code>.btn-group</code> containing checkbox or radio inputs to enable toggling in their respective styles.</p>
  <div class='bs-callout bs-callout-warning' id='callout-buttons-multi-preselected'>
    <h4>Preselected options need <code>.active</code></h4>
    <p>For preselected options, you must add the <code>.active</code> class to the input's <code>label</code> yourself.</p>
  </div>
  <div class='bs-callout bs-callout-warning' id='callout-buttons-only-click'>
    <h4>Visual checked state only updated on click</h4>
    <p>If the checked state of a checkbox button is updated without firing a <code>click</code> event on the button (e.g. via <code>&lt;input type='reset'&gt;</code> or via setting the <code>checked</code> property of the input), you will need to toggle the <code>.active</code> class on the input's <code>label</code> yourself.</p>
  </div>
  <div class='bs-example' data-example-id='buttons-checkbox'>
    <div class='btn-group' data-toggle='buttons'>
      <label class='btn btn-primary active'>
        <input type='checkbox' checked autocomplete='off'> Checkbox 1 (pre-checked)
      </label>
      <label class='btn btn-primary'>
        <input type='checkbox' autocomplete='off'> Checkbox 2
      </label>
      <label class='btn btn-primary'>
        <input type='checkbox' autocomplete='off'> Checkbox 3
      </label>
    </div>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'btn-group'</span> <span class='na'>data-toggle=</span><span class='s'>'buttons'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'btn btn-primary active'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span> <span class='na'>autocomplete=</span><span class='s'>'off'</span> <span class='na'>checked</span><span class='nt'>&gt;</span> Checkbox 1 (pre-checked)
  <span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span> <span class='na'>autocomplete=</span><span class='s'>'off'</span><span class='nt'>&gt;</span> Checkbox 2
  <span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'checkbox'</span> <span class='na'>autocomplete=</span><span class='s'>'off'</span><span class='nt'>&gt;</span> Checkbox 3
  <span class='nt'>&lt;/label&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <div class='bs-example' data-example-id='buttons-radio'>
    <div class='btn-group' data-toggle='buttons'>
      <label class='btn btn-primary active'>
        <input type='radio' name='options' id='option1' autocomplete='off' checked> Radio 1 (preselected)
      </label>
      <label class='btn btn-primary'>
        <input type='radio' name='options' id='option2' autocomplete='off'> Radio 2
      </label>
      <label class='btn btn-primary'>
        <input type='radio' name='options' id='option3' autocomplete='off'> Radio 3
      </label>
    </div>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'btn-group'</span> <span class='na'>data-toggle=</span><span class='s'>'buttons'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'btn btn-primary active'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'radio'</span> <span class='na'>name=</span><span class='s'>'options'</span> <span class='na'>id=</span><span class='s'>'option1'</span> <span class='na'>autocomplete=</span><span class='s'>'off'</span> <span class='na'>checked</span><span class='nt'>&gt;</span> Radio 1 (preselected)
  <span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'radio'</span> <span class='na'>name=</span><span class='s'>'options'</span> <span class='na'>id=</span><span class='s'>'option2'</span> <span class='na'>autocomplete=</span><span class='s'>'off'</span><span class='nt'>&gt;</span> Radio 2
  <span class='nt'>&lt;/label&gt;</span>
  <span class='nt'>&lt;label</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;input</span> <span class='na'>type=</span><span class='s'>'radio'</span> <span class='na'>name=</span><span class='s'>'options'</span> <span class='na'>id=</span><span class='s'>'option3'</span> <span class='na'>autocomplete=</span><span class='s'>'off'</span><span class='nt'>&gt;</span> Radio 3
  <span class='nt'>&lt;/label&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h2 id='buttons-methods'>Methods</h2>
  <h4><code>$().button('toggle')</code></h4>
  <p>Toggles push state. Gives the button the appearance that it has been activated.</p>

  <h4><code>$().button('reset')</code></h4>
  <p>Resets button state - swaps text to original text. <strong>This method is asynchronous and returns before the resetting has actually completed.</strong></p>

  <h4><code>$().button(string)</code></h4>
  <p>Swaps text to any data defined text state.</p>

<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;button</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>id=</span><span class='s'>'myStateButton'</span> <span class='na'>data-complete-text=</span><span class='s'>'finished!'</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span> <span class='na'>autocomplete=</span><span class='s'>'off'</span><span class='nt'>&gt;</span>
  ...
<span class='nt'>&lt;/button&gt;</span>

<span class='nt'>&lt;script&gt;</span>
  <span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myStateButton'</span><span class='p'>).</span><span class='nx'>on</span><span class='p'>(</span><span class='s1'>'click'</span><span class='p'>,</span> <span class='kd'>function</span> <span class='p'>()</span> <span class='p'>{</span>
    <span class='nx'>$</span><span class='p'>(</span><span class='k'>this</span><span class='p'>).</span><span class='nx'>button</span><span class='p'>(</span><span class='s1'>'complete'</span><span class='p'>)</span> <span class='c1'>// button text will be 'finished!'</span>
  <span class='p'>})</span>
<span class='nt'>&lt;/script&gt;</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='collapse' class='page-header'>Collapse <small>collapse.js</small></h1>

  <p class='lead'>Flexible plugin that utilizes a handful of classes for easy toggle behavior.</p>

  <div class='bs-callout bs-callout-danger' id='callout-collapse-dependency'>
    <h4>Plugin dependency</h4>
    <p>Collapse requires the <a href='#transitions'>transitions plugin</a> to be included in your version of Bootstrap.</p>
  </div>

  <h2 id='collapse-example'>Example</h2>
  <p>Click the buttons below to show and hide another element via class changes:</p>
  <ul>
    <li><code>.collapse</code> hides content</li>
    <li><code>.collapsing</code> is applied during transitions</li>
    <li><code>.collapse.in</code> shows content</li>
  </ul>
  <p>You can use a link with the <code>href</code> attribute, or a button with the <code>data-target</code> attribute. In both cases, the <code>data-toggle='collapse'</code> is required.</p>

  <div class='bs-example'>
    <p>
      <a class='btn btn-primary' role='button' data-toggle='collapse' href='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>
        Link with href
      </a>
      <button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>
        Button with data-target
      </button>
    </p>
    <div class='collapse' id='collapseExample'>
      <div class='well'>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;a</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span> <span class='na'>role=</span><span class='s'>'button'</span> <span class='na'>data-toggle=</span><span class='s'>'collapse'</span> <span class='na'>href=</span><span class='s'>'#collapseExample'</span> <span class='na'>aria-expanded=</span><span class='s'>'false'</span> <span class='na'>aria-controls=</span><span class='s'>'collapseExample'</span><span class='nt'>&gt;</span>
  Link with href
<span class='nt'>&lt;/a&gt;</span>
<span class='nt'>&lt;button</span> <span class='na'>class=</span><span class='s'>'btn btn-primary'</span> <span class='na'>type=</span><span class='s'>'button'</span> <span class='na'>data-toggle=</span><span class='s'>'collapse'</span> <span class='na'>data-target=</span><span class='s'>'#collapseExample'</span> <span class='na'>aria-expanded=</span><span class='s'>'false'</span> <span class='na'>aria-controls=</span><span class='s'>'collapseExample'</span><span class='nt'>&gt;</span>
  Button with data-target
<span class='nt'>&lt;/button&gt;</span>
<span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'collapse'</span> <span class='na'>id=</span><span class='s'>'collapseExample'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'well'</span><span class='nt'>&gt;</span>
    ...
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h2 id='collapse-example-accordion'>Accordion example</h2>
  <p>Extend the default collapse behavior to create an accordion with the panel component.</p>

  <div class='bs-example' data-example-id='collapse-accordion'>
    <div class='panel-group' id='accordion' role='tablist' aria-multiselectable='true'>
      <div class='panel panel-default'>
        <div class='panel-heading' role='tab' id='headingOne'>
          <h4 class='panel-title'>
            <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
              Collapsible Group Item #1
            </a>
          </h4>
        </div>
        <div id='collapseOne' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='headingOne'>
          <div class='panel-body'>
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class='panel panel-default'>
        <div class='panel-heading' role='tab' id='headingTwo'>
          <h4 class='panel-title'>
            <a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo'>
              Collapsible Group Item #2
            </a>
          </h4>
        </div>
        <div id='collapseTwo' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwo'>
          <div class='panel-body'>
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class='panel panel-default'>
        <div class='panel-heading' role='tab' id='headingThree'>
          <h4 class='panel-title'>
            <a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseThree' aria-expanded='false' aria-controls='collapseThree'>
              Collapsible Group Item #3
            </a>
          </h4>
        </div>
        <div id='collapseThree' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThree'>
          <div class='panel-body'>
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'panel-group'</span> <span class='na'>id=</span><span class='s'>'accordion'</span> <span class='na'>role=</span><span class='s'>'tablist'</span> <span class='na'>aria-multiselectable=</span><span class='s'>'true'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'panel panel-default'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'panel-heading'</span> <span class='na'>role=</span><span class='s'>'tab'</span> <span class='na'>id=</span><span class='s'>'headingOne'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;h4</span> <span class='na'>class=</span><span class='s'>'panel-title'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;a</span> <span class='na'>role=</span><span class='s'>'button'</span> <span class='na'>data-toggle=</span><span class='s'>'collapse'</span> <span class='na'>data-parent=</span><span class='s'>'#accordion'</span> <span class='na'>href=</span><span class='s'>'#collapseOne'</span> <span class='na'>aria-expanded=</span><span class='s'>'true'</span> <span class='na'>aria-controls=</span><span class='s'>'collapseOne'</span><span class='nt'>&gt;</span>
          Collapsible Group Item #1
        <span class='nt'>&lt;/a&gt;</span>
      <span class='nt'>&lt;/h4&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>id=</span><span class='s'>'collapseOne'</span> <span class='na'>class=</span><span class='s'>'panel-collapse collapse in'</span> <span class='na'>role=</span><span class='s'>'tabpanel'</span> <span class='na'>aria-labelledby=</span><span class='s'>'headingOne'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'panel-body'</span><span class='nt'>&gt;</span>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'panel panel-default'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'panel-heading'</span> <span class='na'>role=</span><span class='s'>'tab'</span> <span class='na'>id=</span><span class='s'>'headingTwo'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;h4</span> <span class='na'>class=</span><span class='s'>'panel-title'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;a</span> <span class='na'>class=</span><span class='s'>'collapsed'</span> <span class='na'>role=</span><span class='s'>'button'</span> <span class='na'>data-toggle=</span><span class='s'>'collapse'</span> <span class='na'>data-parent=</span><span class='s'>'#accordion'</span> <span class='na'>href=</span><span class='s'>'#collapseTwo'</span> <span class='na'>aria-expanded=</span><span class='s'>'false'</span> <span class='na'>aria-controls=</span><span class='s'>'collapseTwo'</span><span class='nt'>&gt;</span>
          Collapsible Group Item #2
        <span class='nt'>&lt;/a&gt;</span>
      <span class='nt'>&lt;/h4&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>id=</span><span class='s'>'collapseTwo'</span> <span class='na'>class=</span><span class='s'>'panel-collapse collapse'</span> <span class='na'>role=</span><span class='s'>'tabpanel'</span> <span class='na'>aria-labelledby=</span><span class='s'>'headingTwo'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'panel-body'</span><span class='nt'>&gt;</span>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'panel panel-default'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'panel-heading'</span> <span class='na'>role=</span><span class='s'>'tab'</span> <span class='na'>id=</span><span class='s'>'headingThree'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;h4</span> <span class='na'>class=</span><span class='s'>'panel-title'</span><span class='nt'>&gt;</span>
        <span class='nt'>&lt;a</span> <span class='na'>class=</span><span class='s'>'collapsed'</span> <span class='na'>role=</span><span class='s'>'button'</span> <span class='na'>data-toggle=</span><span class='s'>'collapse'</span> <span class='na'>data-parent=</span><span class='s'>'#accordion'</span> <span class='na'>href=</span><span class='s'>'#collapseThree'</span> <span class='na'>aria-expanded=</span><span class='s'>'false'</span> <span class='na'>aria-controls=</span><span class='s'>'collapseThree'</span><span class='nt'>&gt;</span>
          Collapsible Group Item #3
        <span class='nt'>&lt;/a&gt;</span>
      <span class='nt'>&lt;/h4&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>id=</span><span class='s'>'collapseThree'</span> <span class='na'>class=</span><span class='s'>'panel-collapse collapse'</span> <span class='na'>role=</span><span class='s'>'tabpanel'</span> <span class='na'>aria-labelledby=</span><span class='s'>'headingThree'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'panel-body'</span><span class='nt'>&gt;</span>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <p>It's also possible to swap out <code>.panel-body</code>s with <code>.list-group</code>s.</p>

  <div class='panel-group' role='tablist'>
    <div class='panel panel-default'>
      <div class='panel-heading' role='tab' id='collapseListGroupHeading1'>
        <h4 class='panel-title'>
          <a class='collapsed' role='button' data-toggle='collapse' href='#collapseListGroup1' aria-expanded='false' aria-controls='collapseListGroup1'>
            Collapsible list group
          </a>
        </h4>
      </div>
      <div id='collapseListGroup1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='collapseListGroupHeading1'>
        <ul class='list-group'>
          <li class='list-group-item'>Bootply</li>
          <li class='list-group-item'>One itmus ac facilin</li>
          <li class='list-group-item'>Second eros</li>
        </ul>
        <div class='panel-footer'>Footer</div>
      </div>
    </div>
  </div>

  <div class='bs-callout bs-callout-warning' id='callout-collapse-accessibility'>
    <h4>Make expand/collapse controls accessible</h4>
    <p>Be sure to add <code>aria-expanded</code> to the control element. This attribute explicitly defines the current state of the collapsible element to screen readers and similar assistive technologies. If the collapsible element is closed by default, it should have a value of <code>aria-expanded='false'</code>. If you've set the collapsible element to be open by default using the <code>in</code> class, set <code>aria-expanded='true'</code> on the control instead. The plugin will automatically toggle this attribute based on whether or not the collapsible element has been opened or closed.</p>
    <p>Additionally, if your control element is targetting a single collapsible element – i.e. the <code>data-target</code> attribute is pointing to an <code>id</code> selector – you may add an additional <code>aria-controls</code> attribute to the control element, containing the <code>id</code> of the collapsible element. Modern screen readers and similar assistive technologies make use of this attribute to provide users with additional shortcuts to navigate directly to the collapsible element itself.</p>
  </div>

  <h2 id='collapse-usage'>Usage</h2>
  <p>The collapse plugin utilizes a few classes to handle the heavy lifting:</p>
  <ul>
    <li><code>.collapse</code> hides the content</li>
    <li><code>.collapse.in</code> shows the content</li>
    <li><code>.collapsing</code> is added when the transition starts, and removed when it finishes</li>
  </ul>
  <p>These classes can be found in <code>component-animations.less</code>.</p>

  <h3>Via data attributes</h3>
  <p>Just add <code>data-toggle='collapse'</code> and a <code>data-target</code> to the element to automatically assign control of a collapsible element. The <code>data-target</code> attribute accepts a CSS selector to apply the collapse to. Be sure to add the class <code>collapse</code> to the collapsible element. If you'd like it to default open, add the additional class <code>in</code>.</p>
  <p>To add accordion-like group management to a collapsible control, add the data attribute <code>data-parent='#selector'</code>. Refer to the demo to see this in action.</p>

  <h3>Via JavaScript</h3>
  <p>Enable manually with:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'.collapse'</span><span class='p'>).</span><span class='nx'>collapse</span><span class='p'>()</span></code></pre></div>

  <h3 id='collapse-options'>Options</h3>
  <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-parent=''</code>.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped js-options-table'>
      <thead>
       <tr>
         <th>Name</th>
         <th>type</th>
         <th>default</th>
         <th>description</th>
       </tr>
      </thead>
      <tbody>
       <tr>
         <td>parent</td>
         <td>selector</td>
         <td>false</td>
         <td>If a selector is provided, then all collapsible elements under the specified parent will be closed when this collapsible item is shown. (similar to traditional accordion behavior - this is dependent on the <code>panel</code> class)</td>
       </tr>
       <tr>
         <td>toggle</td>
         <td>boolean</td>
         <td>true</td>
         <td>Toggles the collapsible element on invocation</td>
       </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->

  <h3 id='collapse-methods'>Methods</h3>

  <h4><code>.collapse(options)</code></h4>
  <p>Activates your content as a collapsible element. Accepts an optional options <code>object</code>.</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myCollapsible'</span><span class='p'>).</span><span class='nx'>collapse</span><span class='p'>({</span>
  <span class='na'>toggle</span><span class='p'>:</span> <span class='kc'>false</span>
<span class='p'>})</span></code></pre></div>

  <h4><code>.collapse('toggle')</code></h4>
  <p>Toggles a collapsible element to shown or hidden. <strong>Returns to the caller before the collapsible element has actually been shown or hidden</strong> (i.e. before the <code>shown.bs.collapse</code> or <code>hidden.bs.collapse</code> event occurs).</p>

  <h4><code>.collapse('show')</code></h4>
  <p>Shows a collapsible element. <strong>Returns to the caller before the collapsible element has actually been shown</strong> (i.e. before the <code>shown.bs.collapse</code> event occurs).</p>

  <h4><code>.collapse('hide')</code></h4>
  <p>Hides a collapsible element. <strong>Returns to the caller before the collapsible element has actually been hidden</strong> (i.e. before the <code>hidden.bs.collapse</code> event occurs).</p>

  <h3 id='collapse-events'>Events</h3>
  <p>Bootstrap's collapse class exposes a few events for hooking into collapse functionality.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped bs-events-table'>
      <thead>
       <tr>
         <th>Event Type</th>
         <th>Description</th>
       </tr>
      </thead>
      <tbody>
       <tr>
         <td>show.bs.collapse</td>
         <td>This event fires immediately when the <code>show</code> instance method is called.</td>
       </tr>
       <tr>
         <td>shown.bs.collapse</td>
         <td>This event is fired when a collapse element has been made visible to the user (will wait for CSS transitions to complete).</td>
       </tr>
       <tr>
         <td>hide.bs.collapse</td>
         <td>
          This event is fired immediately when the <code>hide</code> method has been called.
         </td>
       </tr>
       <tr>
         <td>hidden.bs.collapse</td>
         <td>This event is fired when a collapse element has been hidden from the user (will wait for CSS transitions to complete).</td>
       </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myCollapsible'</span><span class='p'>).</span><span class='nx'>on</span><span class='p'>(</span><span class='s1'>'hidden.bs.collapse'</span><span class='p'>,</span> <span class='kd'>function</span> <span class='p'>()</span> <span class='p'>{</span>
  <span class='c1'>// do something…</span>
<span class='p'>})</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='carousel' class='page-header'>Carousel <small>carousel.js</small></h1>

  <p>A slideshow component for cycling through elements, like a carousel. <strong>Nested carousels are not supported.</strong></p>

  <h2 id='carousel-examples'>Examples</h2>
  <div class='bs-example' data-example-id='simple-carousel'>
    <div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
      <ol class='carousel-indicators'>
        <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
        <li data-target='#carousel-example-generic' data-slide-to='1'></li>
        <li data-target='#carousel-example-generic' data-slide-to='2'></li>
      </ol>
      <div class='carousel-inner' role='listbox'>
        <div class='item active'>
          <img data-src='holder.js/900x500/auto/#777:#555/text:First slide' alt='First slide'>
        </div>
        <div class='item'>
          <img data-src='holder.js/900x500/auto/#666:#444/text:Second slide' alt='Second slide'>
        </div>
        <div class='item'>
          <img data-src='holder.js/900x500/auto/#555:#333/text:Third slide' alt='Third slide'>
        </div>
      </div>
      <a class='left carousel-control' href='#carousel-example-generic' role='button' data-slide='prev'>
        <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
        <span class='sr-only'>Previous</span>
      </a>
      <a class='right carousel-control' href='#carousel-example-generic' role='button' data-slide='next'>
        <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
        <span class='sr-only'>Next</span>
      </a>
    </div>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>id=</span><span class='s'>'carousel-example-generic'</span> <span class='na'>class=</span><span class='s'>'carousel slide'</span> <span class='na'>data-ride=</span><span class='s'>'carousel'</span><span class='nt'>&gt;</span>
  <span class='c'>&lt;!-- Indicators --&gt;</span>
  <span class='nt'>&lt;ol</span> <span class='na'>class=</span><span class='s'>'carousel-indicators'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;li</span> <span class='na'>data-target=</span><span class='s'>'#carousel-example-generic'</span> <span class='na'>data-slide-to=</span><span class='s'>'0'</span> <span class='na'>class=</span><span class='s'>'active'</span><span class='nt'>&gt;&lt;/li&gt;</span>
    <span class='nt'>&lt;li</span> <span class='na'>data-target=</span><span class='s'>'#carousel-example-generic'</span> <span class='na'>data-slide-to=</span><span class='s'>'1'</span><span class='nt'>&gt;&lt;/li&gt;</span>
    <span class='nt'>&lt;li</span> <span class='na'>data-target=</span><span class='s'>'#carousel-example-generic'</span> <span class='na'>data-slide-to=</span><span class='s'>'2'</span><span class='nt'>&gt;&lt;/li&gt;</span>
  <span class='nt'>&lt;/ol&gt;</span>

  <span class='c'>&lt;!-- Wrapper for slides --&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'carousel-inner'</span> <span class='na'>role=</span><span class='s'>'listbox'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'item active'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;img</span> <span class='na'>src=</span><span class='s'>'...'</span> <span class='na'>alt=</span><span class='s'>'...'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'carousel-caption'</span><span class='nt'>&gt;</span>
        ...
      <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'item'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;img</span> <span class='na'>src=</span><span class='s'>'...'</span> <span class='na'>alt=</span><span class='s'>'...'</span><span class='nt'>&gt;</span>
      <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'carousel-caption'</span><span class='nt'>&gt;</span>
        ...
      <span class='nt'>&lt;/div&gt;</span>
    <span class='nt'>&lt;/div&gt;</span>
    ...
  <span class='nt'>&lt;/div&gt;</span>

  <span class='c'>&lt;!-- Controls --&gt;</span>
  <span class='nt'>&lt;a</span> <span class='na'>class=</span><span class='s'>'left carousel-control'</span> <span class='na'>href=</span><span class='s'>'#carousel-example-generic'</span> <span class='na'>role=</span><span class='s'>'button'</span> <span class='na'>data-slide=</span><span class='s'>'prev'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'glyphicon glyphicon-chevron-left'</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;&lt;/span&gt;</span>
    <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'sr-only'</span><span class='nt'>&gt;</span>Previous<span class='nt'>&lt;/span&gt;</span>
  <span class='nt'>&lt;/a&gt;</span>
  <span class='nt'>&lt;a</span> <span class='na'>class=</span><span class='s'>'right carousel-control'</span> <span class='na'>href=</span><span class='s'>'#carousel-example-generic'</span> <span class='na'>role=</span><span class='s'>'button'</span> <span class='na'>data-slide=</span><span class='s'>'next'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'glyphicon glyphicon-chevron-right'</span> <span class='na'>aria-hidden=</span><span class='s'>'true'</span><span class='nt'>&gt;&lt;/span&gt;</span>
    <span class='nt'>&lt;span</span> <span class='na'>class=</span><span class='s'>'sr-only'</span><span class='nt'>&gt;</span>Next<span class='nt'>&lt;/span&gt;</span>
  <span class='nt'>&lt;/a&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <div class='bs-callout bs-callout-danger' id='callout-carousel-accessibility'>
    <h4>Accessibility issue</h4>
    <p>The carousel component is generally not compliant with accessibility standards. If you need to be compliant, please consider other options for presenting your content.</p>
  </div>

  <div class='bs-callout bs-callout-warning' id='callout-carousel-transitions'>
    <h4>Transition animations not supported in Internet Explorer 8 &amp; 9</h4>
    <p>Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 &amp; 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
  </div>

  <div class='bs-callout bs-callout-warning' id='callout-carousel-active'>
    <h4>Initial active element required</h4>
    <p>The <code>.active</code> class needs to be added to one of the slides. Otherwise, the carousel will not be visible.</p>
  </div>

  <h3>Optional captions</h3>
  <p>Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.item</code>. Place just about any optional HTML within there and it will be automatically aligned and formatted.</p>
  <div class='bs-example' data-example-id='carousel-with-captions'>
    <div id='carousel-example-captions' class='carousel slide' data-ride='carousel'>
      <ol class='carousel-indicators'>
        <li data-target='#carousel-example-captions' data-slide-to='0' class='active'></li>
        <li data-target='#carousel-example-captions' data-slide-to='1'></li>
        <li data-target='#carousel-example-captions' data-slide-to='2'></li>
      </ol>
      <div class='carousel-inner' role='listbox'>
        <div class='item active'>
          <img data-src='holder.js/900x500/auto/#777:#777' alt='First slide image'>
          <div class='carousel-caption'>
            <h3>First slide label</h3>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class='item'>
          <img data-src='holder.js/900x500/auto/#666:#666' alt='Second slide image'>
          <div class='carousel-caption'>
            <h3>Second slide label</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class='item'>
          <img data-src='holder.js/900x500/auto/#555:#555' alt='Third slide image'>
          <div class='carousel-caption'>
            <h3>Third slide label</h3>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class='left carousel-control' href='#carousel-example-captions' role='button' data-slide='prev'>
        <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
        <span class='sr-only'>Previous</span>
      </a>
      <a class='right carousel-control' href='#carousel-example-captions' role='button' data-slide='next'>
        <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
        <span class='sr-only'>Next</span>
      </a>
    </div>
  </div><!-- /example -->
<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'item'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;img</span> <span class='na'>src=</span><span class='s'>'...'</span> <span class='na'>alt=</span><span class='s'>'...'</span><span class='nt'>&gt;</span>
  <span class='nt'>&lt;div</span> <span class='na'>class=</span><span class='s'>'carousel-caption'</span><span class='nt'>&gt;</span>
    <span class='nt'>&lt;h3&gt;</span>...<span class='nt'>&lt;/h3&gt;</span>
    <span class='nt'>&lt;p&gt;</span>...<span class='nt'>&lt;/p&gt;</span>
  <span class='nt'>&lt;/div&gt;</span>
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h2 id='carousel-usage'>Usage</h2>

  <h3>Multiple carousels</h3>
  <p>Carousels require the use of an <code>id</code> on the outermost container (the <code>.carousel</code>) for carousel controls to function properly. When adding multiple carousels, or when changing a carousel's <code>id</code>, be sure to update the relevant controls.</p>

  <h3>Via data attributes</h3>
  <p>Use data attributes to easily control the position of the carousel. <code>data-slide</code> accepts the keywords <code>prev</code> or <code>next</code>, which alters the slide position relative to its current position. Alternatively, use <code>data-slide-to</code> to pass a raw slide index to the carousel <code>data-slide-to='2'</code>, which shifts the slide position to a particular index beginning with <code>0</code>.</p>
  <p>The <code>data-ride='carousel'</code> attribute is used to mark a carousel as animating starting at page load. <strong class='text-danger'>It cannot be used in combination with (redundant and unnecessary) explicit JavaScript initialization of the same carousel.</strong></p>

  <h3>Via JavaScript</h3>
  <p>Call carousel manually with:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'.carousel'</span><span class='p'>).</span><span class='nx'>carousel</span><span class='p'>()</span></code></pre></div>

  <h3 id='carousel-options'>Options</h3>
  <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-interval=''</code>.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped js-options-table'>
      <thead>
       <tr>
         <th>Name</th>
         <th>type</th>
         <th>default</th>
         <th>description</th>
       </tr>
      </thead>
      <tbody>
       <tr>
         <td>interval</td>
         <td>number</td>
         <td>5000</td>
         <td>The amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle.</td>
       </tr>
       <tr>
         <td>pause</td>
         <td>string</td>
         <td>'hover'</td>
         <td>Pauses the cycling of the carousel on mouseenter and resumes the cycling of the carousel on mouseleave.</td>
       </tr>
       <tr>
         <td>wrap</td>
         <td>boolean</td>
         <td>true</td>
         <td>Whether the carousel should cycle continuously or have hard stops.</td>
       </tr>
       <tr>
         <td>keyboard</td>
         <td>boolean</td>
         <td>true</td>
         <td>Whether the carousel should react to keyboard events.</td>
       </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->

  <h3 id='carousel-methods'>Methods</h3>

  <h4><code>.carousel(options)</code></h4>
  <p>Initializes the carousel with an optional options <code>object</code> and starts cycling through items.</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'.carousel'</span><span class='p'>).</span><span class='nx'>carousel</span><span class='p'>({</span>
  <span class='na'>interval</span><span class='p'>:</span> <span class='mi'>2000</span>
<span class='p'>})</span></code></pre></div>

  <h4><code>.carousel('cycle')</code></h4>
  <p>Cycles through the carousel items from left to right.</p>

  <h4><code>.carousel('pause')</code></h4>
  <p>Stops the carousel from cycling through items.</p>


  <h4><code>.carousel(number)</code></h4>
  <p>Cycles the carousel to a particular frame (0 based, similar to an array).</p>

  <h4><code>.carousel('prev')</code></h4>
  <p>Cycles to the previous item.</p>

  <h4><code>.carousel('next')</code></h4>
  <p>Cycles to the next item.</p>

  <h3 id='carousel-events'>Events</h3>
  <p>Bootstrap's carousel class exposes two events for hooking into carousel functionality.</p>
  <p>Both events have the following additional properties:</p>
  <ul>
    <li><code>direction</code>: The direction in which the carousel is sliding (either <code>'left'</code> or <code>'right'</code>).</li>
    <li><code>relatedTarget</code>: The DOM element that is being slid into place as the active item.</li>
  </ul>
  <p>All carousel events are fired at the carousel itself (i.e. at the <code>&lt;div class='carousel'&gt;</code>).</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped bs-events-table'>
      <thead>
       <tr>
         <th>Event Type</th>
         <th>Description</th>
       </tr>
      </thead>
      <tbody>
       <tr>
         <td>slide.bs.carousel</td>
         <td>This event fires immediately when the <code>slide</code> instance method is invoked.</td>
       </tr>
       <tr>
         <td>slid.bs.carousel</td>
         <td>This event is fired when the carousel has completed its slide transition.</td>
       </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myCarousel'</span><span class='p'>).</span><span class='nx'>on</span><span class='p'>(</span><span class='s1'>'slide.bs.carousel'</span><span class='p'>,</span> <span class='kd'>function</span> <span class='p'>()</span> <span class='p'>{</span>
  <span class='c1'>// do something…</span>
<span class='p'>})</span></code></pre></div>
</div>

<div class='bs-docs-section'>
  <h1 id='affix' class='page-header'>Affix <small>affix.js</small></h1>

  <h2 id='affix-examples'>Example</h2>
  <p>The affix plugin toggles <code>position: fixed;</code> on and off, emulating the effect found with <a href='https://developer.mozilla.org/en-US/docs/Web/CSS/position#Sticky_positioning'><code>position: sticky;</code></a>. The subnavigation on the right is a live demo of the affix plugin.</p>

  <hr class='bs-docs-separator'>

  <h2 id='affix-usage'>Usage</h2>
  <p>Use the affix plugin via data attributes or manually with your own JavaScript. <strong class='text-danger'>In both situations, you must provide CSS for the positioning and width of your affixed content.</strong></p>
  <p>Note: Do not use the affix plugin on an element contained in a relatively positioned element, such as a pulled or pushed column, due to a <a href='https://github.com/twbs/bootstrap/issues/12126'>Safari rendering bug</a>.</p>

  <h3>Positioning via CSS</h3>
  <p>The affix plugin toggles between three classes, each representing a particular state: <code>.affix</code>, <code>.affix-top</code>, and <code>.affix-bottom</code>. You must provide the styles, with the exception of <code>position: fixed;</code> on <code>.affix</code>, for these classes yourself (independent of this plugin) to handle the actual positions.</p>
  <p>Here's how the affix plugin works:</p>
  <ol>
    <li>To start, the plugin adds <code>.affix-top</code> to indicate the element is in its top-most position. At this point no CSS positioning is required.</li>
    <li>Scrolling past the element you want affixed should trigger the actual affixing. This is where <code>.affix</code> replaces <code>.affix-top</code> and sets <code>position: fixed;</code> (provided by Bootstrap's CSS).</li>
    <li>If a bottom offset is defined, scrolling past it should replace <code>.affix</code> with <code>.affix-bottom</code>. Since offsets are optional, setting one requires you to set the appropriate CSS. In this case, add <code>position: absolute;</code> when necessary. The plugin uses the data attribute or JavaScript option to determine where to position the element from there.</li>
  </ol>
  <p>Follow the above steps to set your CSS for either of the usage options below.</p>

  <h3>Via data attributes</h3>
  <p>To easily add affix behavior to any element, just add <code>data-spy='affix'</code> to the element you want to spy on. Use offsets to define when to toggle the pinning of an element.</p>

<div class='highlight'><pre><code class='language-html' data-lang='html'><span class='nt'>&lt;div</span> <span class='na'>data-spy=</span><span class='s'>'affix'</span> <span class='na'>data-offset-top=</span><span class='s'>'60'</span> <span class='na'>data-offset-bottom=</span><span class='s'>'200'</span><span class='nt'>&gt;</span>
  ...
<span class='nt'>&lt;/div&gt;</span></code></pre></div>

  <h3>Via JavaScript</h3>
  <p>Call the affix plugin via JavaScript:</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myAffix'</span><span class='p'>).</span><span class='nx'>affix</span><span class='p'>({</span>
  <span class='na'>offset</span><span class='p'>:</span> <span class='p'>{</span>
    <span class='na'>top</span><span class='p'>:</span> <span class='mi'>100</span><span class='p'>,</span>
    <span class='na'>bottom</span><span class='p'>:</span> <span class='kd'>function</span> <span class='p'>()</span> <span class='p'>{</span>
      <span class='k'>return</span> <span class='p'>(</span><span class='k'>this</span><span class='p'>.</span><span class='nx'>bottom</span> <span class='o'>=</span> <span class='nx'>$</span><span class='p'>(</span><span class='s1'>'.footer'</span><span class='p'>).</span><span class='nx'>outerHeight</span><span class='p'>(</span><span class='kc'>true</span><span class='p'>))</span>
    <span class='p'>}</span>
  <span class='p'>}</span>
<span class='p'>})</span></code></pre></div>


  <h3 id='affix-options'>Options</h3>
  <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-offset-top='200'</code>.</p>

  <div class='table-responsive'>
    <table class='table table-bordered table-striped js-options-table'>
      <thead>
       <tr>
         <th>Name</th>
         <th>type</th>
         <th>default</th>
         <th>description</th>
       </tr>
      </thead>
      <tbody>
       <tr>
         <td>offset</td>
         <td>number | function | object</td>
         <td>10</td>
         <td>Pixels to offset from screen when calculating position of scroll. If a single number is provided, the offset will be applied in both top and bottom directions. To provide a unique, bottom and top offset just provide an object <code>offset: { top: 10 }</code> or <code>offset: { top: 10, bottom: 5 }</code>. Use a function when you need to dynamically calculate an offset.</td>
       </tr>
       <tr>
         <td>target</td>
         <td>selector | node | jQuery element</td>
         <td>the <code>window</code> object</td>
         <td>Specifies the target element of the affix.</td>
       </tr>

      </tbody>
    </table>
  </div><!-- /.table-responsive -->

  <h3 id='affix-methods'>Methods</h3>

  <h4><code>.affix(options)</code></h4>
  <p>Activates your content as affixed content. Accepts an optional options <code>object</code>.</p>
<div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myAffix'</span><span class='p'>).</span><span class='nx'>affix</span><span class='p'>({</span>
  <span class='na'>offset</span><span class='p'>:</span> <span class='mi'>15</span>
<span class='p'>})</span></code></pre></div>

  <h4><code>.affix('checkPosition')</code></h4>
  <p>Recalculates the state of the affix based on the dimensions, position, and scroll position of the relevant elements. The <code>.affix</code>, <code>.affix-top</code>, and <code>.affix-bottom</code> classes are added to or removed from the affixed content according to the new state. This method needs to be called whenever the dimensions of the affixed content or the target element are changed, to ensure correct positioning of the affixed content.</p>
  <div class='highlight'><pre><code class='language-js' data-lang='js'><span class='nx'>$</span><span class='p'>(</span><span class='s1'>'#myAffix'</span><span class='p'>).</span><span class='nx'>affix</span><span class='p'>(</span><span class='s1'>'checkPosition'</span><span class='p'>)</span></code></pre></div>

  <h3 id='affix-events'>Events</h3>
  <p>Bootstrap's affix plugin exposes a few events for hooking into affix functionality.</p>
  <div class='table-responsive'>
    <table class='table table-bordered table-striped bs-events-table'>
      <thead>
        <tr>
          <th>Event Type</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>affix.bs.affix</td>
          <td>This event fires immediately before the element has been affixed.</td>
        </tr>
        <tr>
          <td>affixed.bs.affix</td>
          <td>This event is fired after the element has been affixed.</td>
        </tr>
        <tr>
          <td>affix-top.bs.affix</td>
          <td>This event fires immediately before the element has been affixed-top.</td>
        </tr>
        <tr>
          <td>affixed-top.bs.affix</td>
          <td>This event is fired after the element has been affixed-top.</td>
        </tr>
       <tr>
        <td>affix-bottom.bs.affix</td>
          <td>This event fires immediately before the element has been affixed-bottom.</td>
        </tr>
        <tr>
          <td>affixed-bottom.bs.affix</td>
          <td>This event is fired after the element has been affixed-bottom.</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->
</div>


        </div>

        <div class='col-md-3' role='complementary'>
          <nav class='bs-docs-sidebar hidden-print hidden-xs hidden-sm'>
            <ul class='nav bs-docs-sidenav'>

                <li>
  <a href='#js-overview'>Overview</a>
  <ul class='nav'>
    <li><a href='#js-individual-compiled'>Individual or compiled</a></li>
    <li><a href='#js-data-attrs'>Data attributes</a></li>
    <li><a href='#js-programmatic-api'>Programmatic API</a></li>
    <li><a href='#js-noconflict'>No conflict</a></li>
    <li><a href='#js-events'>Events</a></li>
    <li><a href='#js-version-nums'>Version numbers</a></li>
    <li><a href='#js-disabled'>When JavaScript is disabled</a></li>
    <li><a href='#callout-third-party-libs'>Third-party libraries</a></li>
  </ul>
</li>
<li><a href='#transitions'>Transitions</a></li>
<li>
  <a href='#modals'>Modal</a>
  <ul class='nav'>
    <li><a href='#modals-examples'>Examples</a></li>
    <li><a href='#modals-sizes'>Sizes</a></li>
    <li><a href='#modals-remove-animation'>Remove animation</a></li>
    <li><a href='#modals-related-target'>Varying content based on trigger button</a></li>
    <li><a href='#modals-usage'>Usage</a></li>
    <li><a href='#modals-options'>Options</a></li>
    <li><a href='#modals-methods'>Methods</a></li>
    <li><a href='#modals-events'>Events</a></li>
  </ul>
</li>
<li>
  <a href='#dropdowns'>Dropdown</a>
  <ul class='nav'>
    <li><a href='#dropdowns-examples'>Examples</a></li>
    <li><a href='#dropdowns-usage'>Usage</a></li>
    <li><a href='#dropdowns-methods'>Methods</a></li>
    <li><a href='#dropdowns-events'>Events</a></li>
  </ul>
</li>
<li>
  <a href='#scrollspy'>Scrollspy</a>
  <ul class='nav'>
    <li><a href='#scrollspy-examples'>Examples</a></li>
    <li><a href='#scrollspy-usage'>Usage</a></li>
    <li><a href='#scrollspy-methods'>Methods</a></li>
    <li><a href='#scrollspy-options'>Options</a></li>
    <li><a href='#scrollspy-events'>Events</a></li>
  </ul>
</li>
<li>
  <a href='#tabs'>Tab</a>
  <ul class='nav'>
    <li><a href='#tabs-examples'>Examples</a></li>
    <li><a href='#tabs-usage'>Usage</a></li>
    <li><a href='#tabs-methods'>Methods</a></li>
    <li><a href='#tabs-events'>Events</a></li>
  </ul>
</li>
<li>
  <a href='#tooltips'>Tooltip</a>
  <ul class='nav'>
    <li><a href='#tooltips-examples'>Examples</a></li>
    <li><a href='#tooltips-usage'>Usage</a></li>
    <li><a href='#tooltips-options'>Options</a></li>
    <li><a href='#tooltips-methods'>Methods</a></li>
    <li><a href='#tooltips-events'>Events</a></li>
  </ul>
</li>
<li>
  <a href='#popovers'>Popover</a>
  <ul class='nav'>
    <li><a href='#popovers-examples'>Examples</a></li>
    <li><a href='#popovers-usage'>Usage</a></li>
    <li><a href='#popovers-options'>Options</a></li>
    <li><a href='#popovers-methods'>Methods</a></li>
    <li><a href='#popovers-events'>Events</a></li>
  </ul>
</li>
<li>
  <a href='#alerts'>Alert</a>
  <ul class='nav'>
    <li><a href='#alerts-examples'>Examples</a></li>
    <li><a href='#alerts-usage'>Usage</a></li>
    <li><a href='#alerts-methods'>Methods</a></li>
    <li><a href='#alerts-events'>Events</a></li>
  </ul>
</li>
<li>
  <a href='#buttons'>Button</a>
  <ul class='nav'>
    <li><a href='#buttons-stateful'>Stateful</a></li>
    <li><a href='#buttons-single-toggle'>Single toggle</a></li>
    <li><a href='#buttons-checkbox-radio'>Checkbox / Radio</a></li>
    <li><a href='#buttons-methods'>Methods</a></li>
  </ul>
</li>
<li>
  <a href='#collapse'>Collapse</a>
  <ul class='nav'>
    <li><a href='#collapse-example'>Example</a></li>
    <li><a href='#collapse-example-accordion'>Accordion example</a></li>
    <li><a href='#collapse-usage'>Usage</a></li>
    <li><a href='#collapse-options'>Options</a></li>
    <li><a href='#collapse-methods'>Methods</a></li>
    <li><a href='#collapse-events'>Events</a></li>
  </ul>
</li>
<li>
  <a href='#carousel'>Carousel</a>
  <ul class='nav'>
    <li><a href='#carousel-examples'>Examples</a></li>
    <li><a href='#carousel-usage'>Usage</a></li>
    <li><a href='#carousel-options'>Options</a></li>
    <li><a href='#carousel-methods'>Methods</a></li>
    <li><a href='#carousel-events'>Events</a></li>
  </ul>
</li>
<li>
  <a href='#affix'>Affix</a>
  <ul class='nav'>
    <li><a href='#affix-examples'>Examples</a></li>
    <li><a href='#affix-usage'>Usage</a></li>
    <li><a href='#affix-options'>Options</a></li>
    <li><a href='#affix-methods'>Methods</a></li>
    <li><a href='#affix-events'>Events</a></li>
  </ul>
</li>


            </ul>
            <a class='back-to-top' href='#top'>
              Back to top
            </a>

            <a href='#' class='bs-docs-theme-toggle' role='button'>
              Preview theme
            </a>

          </nav>
        </div>

      </div>
    </div>";






 }
add_action('admin_menu', 'oscimp_admin_actions');

?>