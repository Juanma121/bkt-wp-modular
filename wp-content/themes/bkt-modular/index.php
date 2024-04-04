<?php
get_header();

?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>BKT Modular Theme</h1>

            <h2>Basic Configuration</h2>

            <ol>
                <li><p>Change <code>Theme Name</code>, <code>Description</code> and <code>Text Domain</code>, with your theme configuration on <code>style.css</code>.</p></li>
                <li><p>Change name of defined vars on <code>inc/config/definitions.php</code> replacing <code>BKT_MODULAR</code> with your theme name. Also, replace the value of <code>BKT_MODULAR_THEME_NAME</code> with </p></li>your theme slug.
                <li><p>Change name of defined vars on <code>inc/config/_enqueue.config.php</code> replacing <code>BKT_MODULAR</code> with your theme name.</p></li>
                <li><p>Copy <code>.env-example</code> and rename it as <code>.env</code>. Modify the value of  <code>DEVELOPMENT_URL</code> var with the site url of your WordPress.</p></li>
                <li><p>If you download this theme through a git repository, remove the <code>.git</code> folder</p></li>
            </ol>
            <p>Execute the following command:</p>
            <p><code>npm install</code></p>

            <h2>Developing task</h2>

            <p>To develop with the theme you only need to launch the following task.</p>
            <p><code>npm start</code></p>

            <h2>Build Theme</h2>

            <p>For production you need to build the theme:</p>
            <p><code>npm build</code></p>
            <p>This will create a <code>dist</code> folder to upload. within the theme. The folder src doesn't need to be uploaded.</p>
        </div>
    </div>
</div>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="components-test">
                Test de componentes
            </h2>
            <br>
            <div class="row">
                <div class="col-6">
                    <h2>Botón primario</h3>
                    <a href="#" class="btn-primary">Primary Button</a>
                    <h2>Botón secundario</h3>
                    <a href="#" class="btn-secondary">Secondary Button</a>
                    <h2>Botón enlace</h3>
                    <a href="#" class="btn-link">Link Button</a>
                </div>
                <div class="col-6">
                    <h2>Botón primario redondeado</h3>
                    <a href="#" class="btn-primary btn-rounded">Primary Button</a>
                    <h2>Botón secundario redondeado</h3>
                    <a href="#" class="btn-secondary btn-rounded">Secondary Button</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
