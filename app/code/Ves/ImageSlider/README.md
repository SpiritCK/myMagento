<h1>Magento 2 Image Slider Extension</h1>
<ol>
	<li>
		Fully responsive Magento 2 Slider
		<p> With our magento 2 image slider widget, you can display your image slider responsively on any kind of devices. <a class="btn-link btn-link-info" title="Magento 2 Image Slider Video" href="https://www.youtube.com/watch?v=orqkisVgPpI">Watch Video →</a></p>
	</li>
	<li>
		Support editor for image, video text
		<p>With the support of editor, admin can easily insert various types of content such as image, video, text.</p>
	</li>
	<li>
		Touch Optimized OWL Carousel
		<p>Besides, magento 2 slider will be optimized for touch on mobile and tablets.</p>
	</li>
	<li>
		Image slider can be displayed anywhere in your store with CMS and Widget
		<p>Through CMS &amp; Widget, your magento 2 slider can be shown in any position such as Homepage image slider, Content Slider, Gallery Slider, Product image Slider, Footer Area, Brand Slider, Offer Slider.</p>
	</li>
	<li>
		Magento 2 Image Slider support 10 sliders
		<p>The image slider widget also allows you to show your images in a continuous slideshow. It is easy to create slider as you expected.</p>
	</li>
	<li>
		Easy-to-use &amp; intuitive interface
		<p>Easy to use and user friendly interface will help you to manage your slider better</p>
	</li>
	<li>
		Tons of Animation with Live Preview
		<p>If wonder how is animation supported, we make sure that they won’t let you down. Thanks to the support of live preview, you can select the favourite animation with ease.</p>
	</li>
</ol>
<h1>Install Composer</h1>
<p>First, check  if Composer is already installed: </p>
<p>In a command prompt, enter any of the following commands:</p>
<pre><code>composer --help</code></pre>
<pre><code>composer list --help</code></pre>
<p>If command help displays, Composer is already installed.</p>
<p>If an error displays, use the following steps to install Composer.</p>
<p>To install Composer:</p>
<ol>
	<li>
		<p>Change to or create an empty directory on your Magento server.</p>
	</li>
	<li>
		<p>Enter the following commands:</p>
		<pre><code>curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
		</code></pre>
		<p>For additional installation options, see the <a href="https://getcomposer.org/download/" target="_blank">Composer installation documentation</a>.</p>
	</li>
</ol>
<h1 id="integrator-first-composer-ce">Get the Image Slider extension</h1>
<p>To get started:</p>
<ol>
	<li>
		<p>If you don’t remember it, contact Magento Support before you continue.</p>
	</li>
	<li>Log in to your Magento server as, or switch to, the <a href="http://devdocs.magento.com/guides/v2.0/install-gde/prereq/file-sys-perms-over.html">Magento file system owner</a>.</li>
	<li>Change to the web server docroot directory, or to a directory you’ve configured as a virtual host docroot.</li>
	<li>
		<p>Get the extension files: 2 method</p>
		<p>a) Method 1: Enter the following command:</p>
		<pre><code>composer require ves/magento2-imageslider
		</code></pre>
		<p>When prompted, enter your <a href="http://devdocs.magento.com/guides/v2.0/install-gde/prereq/connect-auth.html">authentication keys</a>. Your <em>public key</em> is your username; your <em>private key</em> is your password.</p>
		<p>b) Method 2: You can download as zip file and unzip the Image Slider extension into folder app/code/Ves/ImageSlider</p>
	</li>
</ol>
<h1 id="integrator-first-composer-ce">Installation</h1>
<p>Enter the following commands:</p>
<p>Disable Cache</p>
<pre>
	<code>php bin/magento cache:disable</code>
</pre>
<p>Clean Cache</p>
<pre>
	<code>php bin/magento cache:clean</code>
</pre>
<p>Upgrade Magento2 extension</p>
<pre>
	<code>php bin/magento setup:upgrade</code>
</pre>
<p>Deploy static files</p>
<pre>
	<code>php bin/magento setup:static-content:deploy</code>
</pre>
