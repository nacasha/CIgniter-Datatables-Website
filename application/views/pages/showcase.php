<div class="doc-body row">
    <div class="doc-content col-md-9 col-12 order-1">
        <div class="content-inner">
            <section id="download-section" class="doc-section">
                <h2 class="section-title">Download</h2>
                <div class="section-block">
                    <p>
                        Download the latest version of library from github or you can git clone the repo.
                    </p>
                    <a href="https://github.com/nacasha/CIgniter-Datatables/archive/master.zip" class="btn btn-green" target="_blank"><i class="fas fa-download"></i> Download CIgniter Datatables</a>
                </div>
            </section><!--//doc-section-->
            <section id="installation-section" class="doc-section">
                <h2 class="section-title">Installation</h2>
                <div id="step1"  class="section-block">
                    <p>
                        Extract the archive and copy both files <strong>Datatables.php</strong> and
                        <strong>DatatablesBuilder.php</strong> and place the files to
                        <strong>applications/libraries</strong> folder in your Codeigniter project directory.
                    </p>
                    <p>
                        Your Codeigniter project directory should looks like this:
                    </p>
                    <pre class="structure">
applications/
├── ...
├── libraries/
│ ├── Datatables.css
│ ├── DatatablesBuilder.css
│ ├── ...
├──...
...</pre>
                </div><!--//section-block-->
            </section><!--//doc-section-->

            <section id="code-section" class="doc-section">
                <h2 class="section-title">Code</h2>
                <div id="html" class="section-block">

                    <div class="callout-block callout-success">
                        <div class="icon-holder">
                            <i class="fas fa-thumbs-up"></i>
                        </div><!--//icon-holder-->
                        <div class="content">
                            <h4 class="callout-title">Useful Tip:</h4>
                            <p>Use CodeIgniter <strong>Query Builder</strong> to generate query, this library support all methods. <a href="https://www.codeigniter.com/userguide3/database/query_builder.html" target="_blank">Read Documentation</a>.</p>
                        </div><!--//content-->
                    </div>

                    <div class="callout-block callout-danger">
                        <div class="icon-holder">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <!--//icon-holder-->
                        <div class="content">
                            <h4 class="callout-title">Notice:</h4>
                            <p>Don't use method such as <code>get()</code>, <code>get_where()</code> or any related methods to execute the query.</p>
                        </div>
                        <!--//content-->
                    </div>
                    <!--//callout-block-->
                    <div class="code-block">
                        <h6>Controller</h6>
                        <pre><code class="language-php">&lt;?php

class Welcome extends CI_Controller
{
    public function index()
    {
        $this->load->library('Datatables');

        $dt_authors = $this->datatables->new();

        $dt_authors->select('*')->from('authors');

        $dt_authors
            ->style(array(
                'class' => 'table table-striped table-bordered',
			))
            ->column('First Name', 'first_name')
            ->column('Last Name', 'last_name')
            ->column('Email', 'email');

        $this->datatables->init('dt_authors', $dt_authors);
    }
}
</code></pre>
                    </div><!--//code-block-->
                </div><!--//section-block-->
                <div id="css" class="section-block">
                    <div class="code-block">
                        <h6>Views</h6>
                        <pre><code class="language-html">
&#x3C;html&#x3E;
&#x3C;head&#x3E;
    &#x3C;link id=&#x22;theme-style&#x22; rel=&#x22;stylesheet&#x22; href=&#x22;https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css&#x22;&#x3E;
    &#x3C;link id=&#x22;theme-style&#x22; rel=&#x22;stylesheet&#x22; href=&#x22;https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css&#x22;&#x3E;
&#x3C;/head&#x3E;
&#x3C;body&#x3E;
    &#x3C;div id=&#x22;container&#x22;&#x3E;
        &#x3C;?php
            $this-&#x3E;datatables-&#x3E;generate(&#x27;dt_authors&#x27;);
        ?&#x3E;
    &#x3C;/div&#x3E;

    &#x3C;!-- Load Jquery 3 and Datatables Jquery Libs --&#x3E;
    &#x3C;script type=&#x22;text/javascript&#x22; language=&#x22;javascript&#x22; src=&#x22;https://code.jquery.com/jquery-3.3.1.js&#x22;&#x3E;&#x3C;/script&#x3E;
    &#x3C;script type=&#x22;text/javascript&#x22; language=&#x22;javascript&#x22; src=&#x22;https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js&#x22;&#x3E;&#x3C;/script&#x3E;
    &#x3C;script type=&#x22;text/javascript&#x22; language=&#x22;javascript&#x22; src=&#x22;https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js&#x22;&#x3E;&#x3C;/script&#x3E;

    &#x3C;?php
        $this-&#x3E;datatables-&#x3E;jquery(&#x27;dt_authors&#x27;);
    ?&#x3E;
&#x3C;/body&#x3E;
&#x3C;/html&#x3E;
</code></pre>
                    </div><!--//code-block-->
                </div><!--//section-block-->
            </section><!--//doc-section-->
            <section id="callouts-section" class="doc-section">
                <h2 class="section-title">Result</h2>
                <div class="section-block">
                    <?php $this->datatables->generate('dt_authors') ?>
                </div>
            </section><!--//doc-section-->
        </div><!--//content-inner-->
    </div><!--//doc-content-->
    <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
        <div id="doc-nav" class="doc-nav">

                <nav id="doc-menu" class="nav doc-menu flex-column sticky">
                    <a class="nav-link scrollto" href="#download-section">Download</a>
                    <a class="nav-link scrollto" href="#installation-section">Installation</a>
                    <a class="nav-link scrollto" href="#code-section">Code</a>
                    <nav class="doc-sub-menu nav flex-column">
                        <a class="nav-link scrollto" href="#html">Controller</a>
                        <a class="nav-link scrollto" href="#css">Views</a>
                    </nav><!--//nav-->
                    <a class="nav-link scrollto" href="#callouts-section">Result</a>
                </nav><!--//doc-menu-->

        </div>
    </div><!--//doc-sidebar-->
</div><!--//doc-body-->

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<?php
    $this->datatables->jquery('dt_authors');
?>
