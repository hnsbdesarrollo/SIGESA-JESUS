@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Accordion</a></li>
        </ol>
    </div>
    <!-- row -->

    <div class="element-area">
        <div class="element-view">
            <div class="row">
                <!-- Column Starts -->
                <div class="col-xl-12">
                    <div class="card dz-card" id="accordion-one">
                        <div class="card-header flex-wrap border-0">
                            <div>
                                <h4 class="card-title">Default Accordion</h4>
                                <p class="m-0 subtitle">Default accordion. Add <code>accordion</code> class in root</p>
                            </div>
                            <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#Preview" type="button" role="tab"  aria-selected="true">Preview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#html" type="button" role="tab"  aria-selected="false">HTML</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-body">
                                    <div class="accordion accordion-primary">
                                            <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#default-collapseOne" aria-expanded="true" aria-controls="default-collapseOne">
                                                Accordion Header One
                                                </button>
                                            </h2>
                                            <div id="default-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion-one">
                                                <div class="accordion-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </div>
                                            </div>
                                            </div>
                                            <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#default-collapseTwo" aria-expanded="false" aria-controls="default-collapseTwo">
                                                Accordion Header Two
                                                </button>
                                            </h2>
                                            <div id="default-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion-one">
                                                <div class="accordion-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </div>
                                            </div>
                                            </div>
                                            <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#default-collapseThree" aria-expanded="false">
                                                Accordion Header Three
                                                </button>
                                            </h2>
                                            <div id="default-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion-one">
                                                <div class="accordion-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.

                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                                <!-- /Default accordion -->
                            </div>
                            <div class="tab-pane fade " id="html" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-body pt-0 p-0 code-area">
                                    <!-- Default accordion -->
    <pre class="mb-0"><code class="language-html">&lt;div class="accordion accordion-primary"&gt;
&lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header"&gt;
    &lt;button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#default-collapseOne" aria-expanded="true" aria-controls="default-collapseOne"&gt;
        Accordion Header One
    &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div id="default-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion-one"&gt;
    &lt;div class="accordion-body"&gt;
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header"&gt;
    &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#default-collapseTwo" aria-expanded="false" aria-controls="default-collapseTwo"&gt;
        Accordion Header Two
    &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div id="default-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion-one"&gt;
    &lt;div class="accordion-body"&gt;
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header"&gt;
    &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#default-collapseThree" aria-expanded="false"&gt;
        Accordion Header Three
    &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div id="default-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion-one"&gt;
    &lt;div class="accordion-body"&gt;
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.

    &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                    <!-- /Default accordion -->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Column ends -->
                <div class="col-xl-12">
                <div class="card dz-card" id="accordion-two">
                    <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                        <div>
                            <h4 class="card-title">Accordion bordered</h4>
                            <p class="m-0 subtitle">Accordion with border. Add class <code>accordion-bordered</code> with the class <code> accordion</code></p>
                        </div>
                        <ul class="nav nav-tabs dzm-tabs" id="myTab-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active " id="home-tab-1" data-bs-toggle="tab" data-bs-target="#bordered" type="button" role="tab" aria-selected="true">Preview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="profile-tab-1" data-bs-toggle="tab" data-bs-target="#bordered-html" type="button" role="tab" aria-selected="false">HTML</button>
                            </li>
                        </ul>
                    </div>
                    <!-- tab-content -->
                    <div class="tab-content" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="bordered" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-body">
                                <div class="accordion accordion-danger-solid">
                                    <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bordered_collapseOne">
                                        Accordion Header One
                                        </button>
                                    </h2>
                                    <div id="bordered_collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion-two">
                                        <div class="accordion-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bordered_collapseTwo">
                                        Accordion Header Two
                                        </button>
                                    </h2>
                                    <div id="bordered_collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion-two">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bordered_collapseThree">
                                        Accordion Header Three
                                        </button>
                                    </h2>
                                    <div id="bordered_collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion-two">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.

                                        </div>
                                    </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade " id="bordered-html" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
    &lt;div class="accordion accordion-danger-solid"&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header"&gt;
&lt;button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bordered_collapseOne"&gt;
    Accordion Header One
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="bordered_collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion-two"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bordered_collapseTwo"&gt;
    Accordion Header Two
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="bordered_collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion-two"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bordered_collapseThree"&gt;
    Accordion Header Three
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="bordered_collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion-two"&gt;
&lt;div class="accordion-body"&gt;
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.

&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <!-- /tab-content -->

                </div>
            </div>
            <!-- Column starts -->

            <div class="col-xl-12">
                <div class="card dz-card" id="accordion-three">
                    <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                        <div>
                        <h4 class="card-title">Accordion without space</h4>
                        <p class="m-0 subtitle">Add <code>accordion-no-gutter</code> class with <code>accordion</code></p>
                        </div>
                        <ul class="nav nav-tabs dzm-tabs" id="myTab-2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active " id="home-tab-2" data-bs-toggle="tab" data-bs-target="#withoutSpace" type="button" role="tab" aria-selected="true">Preview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="profile-tab-2" data-bs-toggle="tab" data-bs-target="#withoutSpace-html" type="button" role="tab" aria-selected="false">HTML</button>
                            </li>
                        </ul>
                    </div>

                        <!-- /tab-content -->
                    <div class="tab-content" id="myTabContent-2">
                        <div class="tab-pane fade show active" id="withoutSpace" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-body">
                                <div class="accordion accordion-no-gutter accordion-header-bg">
                                    <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#no-gutter-collapseOne">
                                        Accordion Header One
                                        </button>
                                    </h2>
                                    <div id="no-gutter-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion-three">
                                        <div class="accordion-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#no-gutter-collapseTwo">
                                        Accordion Header Two
                                        </button>
                                    </h2>
                                    <div id="no-gutter-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion-three">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#no-gutter-collapseThree">
                                        Accordion Header Three
                                        </button>
                                    </h2>
                                    <div id="no-gutter-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion-three">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.

                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="withoutSpace-html" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="accordion accordion-no-gutter accordion-header-bg"&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header"&gt;
&lt;button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#no-gutter-collapseOne"&gt;
Accordion Header One
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="no-gutter-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion-three"&gt;
&lt;div class="accordion-body"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#no-gutter-collapseTwo"&gt;
Accordion Header Two
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="no-gutter-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion-three"&gt;
&lt;div class="accordion-body"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#no-gutter-collapseThree"&gt;
Accordion Header Three
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="no-gutter-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion-three"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.

&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
</div>
                        </div>
                    </div>
                    <!-- /tab-content -->

                </div>
            </div>
                <!-- Column ends -->

                    <div class="col-xl-12">
            <div class="card dz-card" id="accordion-four">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion without space with border</h4>
                        <p class="m-0 subtitle">Add <code>accordion-no-gutter accordion-bordered</code> class with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-3" data-bs-toggle="tab" data-bs-target="#withoutBorder" type="button" role="tab" aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-3" data-bs-toggle="tab" data-bs-target="#withoutBorder-html" type="button" role="tab" aria-controls="html" aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>

                    <!-- /tab-content -->
                    <div class="tab-content" id="myTabContent-3">
                        <div class="tab-pane fade show active" id="withoutBorder" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-body">
                                <div class="accordion accordion-no-gutter accordion-bordered">
                                        <div class="accordion-item">
                                        <h2 class="accordion-header accordion-header-primary" id="headingOne8">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne8">

                                            <span class="accordion-header-text">Accordion Header One</span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne8" class="accordion-collapse collapse show" aria-labelledby="headingOne8" data-bs-parent="#accordion-four">
                                            <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </div>
                                        </div>
                                        </div>
                                        <div class="accordion-item">
                                        <h2 class="accordion-header accordion-header-info" id="headingTwo8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo8" >

                                            <span class="accordion-header-text">Accordion Header Two</span>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo8" class="accordion-collapse collapse" aria-labelledby="headingTwo8" data-bs-parent="#accordion-four">
                                            <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </div>
                                        </div>
                                        </div>
                                        <div class="accordion-item">
                                        <h2 class="accordion-header accordion-header-primary" id="headingThree8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree8">

                                            <span class="accordion-header-text">Accordion Header Three</span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree8" class="accordion-collapse collapse" aria-labelledby="headingThree7" data-bs-parent="#accordion-four">
                                            <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="withoutBorder-html" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="accordion accordion-no-gutter accordion-bordered"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header accordion-header-primary" id="headingOne8"&gt;
        &lt;button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne8"&gt;

            &lt;span class="accordion-header-text"&gt;Accordion Header One &lt;/span&gt;
        &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseOne8" class="accordion-collapse collapse show" aria-labelledby="headingOne8" data-bs-parent="#accordion-four"&gt;
        &lt;div class="accordion-body"&gt;
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header accordion-header-info" id="headingTwo8"&gt;
        &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo8" &gt;

            &lt;span class="accordion-header-text"&gt;Accordion Header Two &lt;/span&gt;
        &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseTwo8" class="accordion-collapse collapse" aria-labelledby="headingTwo8" data-bs-parent="#accordion-four"&gt;
        &lt;div class="accordion-body"&gt;
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header accordion-header-primary" id="headingThree8"&gt;
        &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree8"&gt;

            &lt;span class="accordion-header-text"&gt;Accordion Header Three &lt;/span&gt;
        &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseThree8" class="accordion-collapse collapse" aria-labelledby="headingThree7" data-bs-parent="#accordion-four"&gt;
        &lt;div class="accordion-body"&gt;
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                            </div>
                        </div>
                    </div>
                <!-- /tab-content -->

            </div>
        </div>
        <!-- Column ends -->
            <div class="col-xl-12">
            <div class="card dz-card" id="accordion-five">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion indicator in left position</h4>
                        <p class="m-0 subtitle">Add <code>accordion-start-indicator</code> class with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-4" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-4" data-bs-toggle="tab" data-bs-target="#leftPosition" type="button" role="tab" aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#leftPosition-html" type="button" role="tab" aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>
                <!-- tab-content -->
                <div class="tab-content" id="myTabContent-4">
                    <div class="tab-pane fade show active" id="leftPosition" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body">
                            <div class="accordion accordion-left-indicator">
                                    <div class="accordion-item">
                                    <h2 class="accordion-header accordion-header-primary" id="headingOne7">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne7">

                                        <span class="accordion-header-text">Accordion Header One</span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne7" class="accordion-collapse collapse show" aria-labelledby="headingOne7" data-bs-parent="#accordion-five">
                                        <div class="accordion-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header accordion-header-info" id="headingTwo7">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo7" >

                                        <span class="accordion-header-text">Accordion Header Two</span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo7" class="accordion-collapse collapse" aria-labelledby="headingTwo7" data-bs-parent="#accordion-five">
                                        <div class="accordion-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header accordion-header-primary" id="headingThree7">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree7">

                                        <span class="accordion-header-text">Accordion Header Three</span>
                                        </button>
                                    </h2>
                                    <div id="collapseThree7" class="accordion-collapse collapse" aria-labelledby="headingThree7" data-bs-parent="#accordion-five">
                                        <div class="accordion-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade " id="leftPosition-html" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="accordion accordion-left-indicator"&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-primary" id="headingOne7"&gt;
&lt;button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne7"&gt;

    &lt;span class="accordion-header-text"&gt;Accordion Header One &lt;/span&gt;
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseOne7" class="accordion-collapse collapse show" aria-labelledby="headingOne7" data-bs-parent="#accordion-five"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-info" id="headingTwo7"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo7" &gt;

    &lt;span class="accordion-header-text"&gt;Accordion Header Two &lt;/span&gt;
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseTwo7" class="accordion-collapse collapse" aria-labelledby="headingTwo7" data-bs-parent="#accordion-five"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-primary" id="headingThree7"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree7"&gt;

    &lt;span class="accordion-header-text"&gt;Accordion Header Three &lt;/span&gt;
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseThree7" class="accordion-collapse collapse" aria-labelledby="headingThree7" data-bs-parent="#accordion-five"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

</code></pre>
                        </div>
                    </div>
                </div>
                <!-- /tab-content -->
            </div>
        </div>

                <!-- Column ends -->

        <div class="col-xl-12">
            <div class="card dz-card" id="accordion-six">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion with icon</h4>
                        <p class="m-0 subtitle">Add <code>accordion-with-icon</code> class with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-5" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-5" data-bs-toggle="tab" data-bs-target="#widthicon" type="button" role="tab" aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-5" data-bs-toggle="tab" data-bs-target="#widthicon-html" type="button" role="tab" aria-controls="html" aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent-5">
                    <div class="tab-pane fade show active" id="widthicon" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-body">
                            <div class="accordion accordion-with-icon">
                                    <div class="accordion-item">
                                    <h2 class="accordion-header accordion-header-primary" id="headingOne6">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne6">
                                        <span class="accordion-header-icon"></span>
                                        <span class="accordion-header-text">Accordion Header One</span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne6" class="accordion-collapse collapse show" aria-labelledby="headingOne6" data-bs-parent="#accordion-six">
                                        <div class="accordion-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header accordion-header-info" id="headingTwo6">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo6" >
                                        <span class="accordion-header-icon"></span>
                                        <span class="accordion-header-text">Accordion Header Two</span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo6" class="accordion-collapse collapse" aria-labelledby="headingTwo6" data-bs-parent="#accordion-six">
                                        <div class="accordion-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header accordion-header-primary" id="headingThree6">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree6">
                                        <span class="accordion-header-icon"></span>
                                        <span class="accordion-header-text">Accordion Header Three</span>
                                        </button>
                                    </h2>
                                    <div id="collapseThree6" class="accordion-collapse collapse" aria-labelledby="headingThree6" data-bs-parent="#accordion-six">
                                        <div class="accordion-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="widthicon-html" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="accordion accordion-with-icon"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header accordion-header-primary" id="headingOne6"&gt;
        &lt;button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne6"&gt;
        &lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
            &lt;span class="accordion-header-text"&gt;Accordion Header One&lt;/span&gt;
        &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseOne6" class="accordion-collapse collapse show" aria-labelledby="headingOne6" data-bs-parent="#accordion-six"&gt;
        &lt;div class="accordion-body"&gt;
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header accordion-header-info" id="headingTwo6"&gt;
        &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo6" &gt;
            &lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
            &lt;span class="accordion-header-text"&gt;Accordion Header Two&lt;/span&gt;
        &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseTwo6" class="accordion-collapse collapse" aria-labelledby="headingTwo6" data-bs-parent="#accordion-six"&gt;
        &lt;div class="accordion-body"&gt;
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header accordion-header-primary" id="headingThree6"&gt;
        &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree6"&gt;
            &lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
            &lt;span class="accordion-header-text"&gt;Accordion Header Three&lt;/span&gt;
        &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseThree6" class="accordion-collapse collapse" aria-labelledby="headingThree6" data-bs-parent="#accordion-six"&gt;
        &lt;div class="accordion-body"&gt;
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column ends -->
        <div class="col-xl-12">
            <div class="card dz-card" id="accordion-seven">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion header background</h4>
                        <p class="m-0 subtitle">Add <code>accordion-header-bg</code> class with <code>accrodion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-6" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-6" data-bs-toggle="tab" data-bs-target="#headerbackground" type="button" role="tab" aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-6" data-bs-toggle="tab" data-bs-target="#headerbackground-html" type="button" role="tab" aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>
        <div class="tab-content" id="myTabContent-6">
            <div class="tab-pane fade show active" id="headerbackground" role="tabpanel" aria-labelledby="home-tab">
                <div class="card-body">
                    <div class="accordion accordion-header-bg accordion-bordered">
                            <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingOne1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true">
                                Accordion Header One
                                </button>
                            </h2>
                            <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordion-seven">
                                <div class="accordion-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                            </div>
                            <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-info" id="headingTwo1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false">
                                Accordion Header Two
                                </button>
                            </h2>
                            <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordion-seven">
                                <div class="accordion-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                            </div>
                            <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingThree1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1">
                                Accordion Header Three
                                </button>
                            </h2>
                            <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordion-seven">
                                <div class="accordion-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="headerbackground-html" role="tabpanel" aria-labelledby="home-tab">
                <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="accordion accordion-header-bg accordion-bordered"&gt;
&lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header accordion-header-primary" id="headingOne1"&gt;
    &lt;button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true"&gt;
        Accordion Header One
    &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordion-seven"&gt;
    &lt;div class="accordion-body"&gt;
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header accordion-header-info" id="headingTwo1"&gt;
    &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false"&gt;
        Accordion Header Two
    &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordion-seven"&gt;
    &lt;div class="accordion-body"&gt;
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header accordion-header-primary" id="headingThree1"&gt;
    &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1"&gt;
        Accordion Header Three
    &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordion-seven"&gt;
    &lt;div class="accordion-body"&gt;
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
        </div>
            </div>
        </div>

        <!-- Column ends -->
            <div class="col-xl-12">
            <div class="card dz-card" id="accordion-eight">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion solid background</h4>
                        <p class="m-0 subtitle">Add class <code>accordion-solid-bg</code> with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-7" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-7" data-bs-toggle="tab" data-bs-target="#solidbackground" type="button" role="tab" aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-7" data-bs-toggle="tab" data-bs-target="#solidbackground-html" type="button" role="tab" aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent-7">
                    <div class="tab-pane fade show active" id="solidbackground" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body">
                            <div class="accordion accordion-solid-bg">
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Header One
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-eight">
                                    <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Header Two
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion-eight">
                                    <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Header Three
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion-eight">
                                    <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="solidbackground-html" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html"> &lt;div class="accordion accordion-solid-bg"&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header" id="headingOne"&gt;
&lt;button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"&gt;
    Accordion Header One
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-eight"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header" id="headingTwo"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"&gt;
    Accordion Header Two
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion-eight"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header" id="headingThree"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"&gt;
    Accordion Header Three
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion-eight"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Column ends -->
    <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card dz-card"  id="accordion-nine">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion active background</h4>
                        <p class="m-0 subtitle">Add class <code>accordion-active-header</code> with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-8" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-8" data-bs-toggle="tab" data-bs-target="#activebackground" type="button" role="tab" aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-8" data-bs-toggle="tab" data-bs-target="#activebackground-html" type="button" role="tab" aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent-8">
                    <div class="tab-pane fade show active" id="activebackground" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body">
                            <div class="accordion accordion-active-header">
                                <div class="accordion-item">
                                <h2 class="accordion-header accordion-header-primary" id="headingOne2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2">
                                    Accordion Header One
                                    </button>
                                </h2>
                                <div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordion-nine">
                                    <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header accordion-header-info" id="headingTwo2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" >
                                    Accordion Header Two
                                    </button>
                                </h2>
                                <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordion-nine">
                                    <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header accordion-header-primary" id="headingThree2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2">
                                    Accordion Header Three
                                    </button>
                                </h2>
                                <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordion-nine">
                                    <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="activebackground-html" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="accordion accordion-active-header"&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-primary" id="headingOne2"&gt;
&lt;button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2"&gt;
Accordion Header One
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordion-nine"&gt;
&lt;div class="accordion-body"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-info" id="headingTwo2"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" &gt;
Accordion Header Two
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordion-nine"&gt;
&lt;div class="accordion-body"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-primary" id="headingThree2"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2"&gt;
Accordion Header Three
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordion-nine"&gt;
&lt;div class="accordion-body"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card dz-card " id="accordion-ten">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion header shadow</h4>
                        <p class="m-0 subtitle">Add <code>accordion-header-shadow</code> and <code>accordion-rounded</code> class with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-10" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-10" data-bs-toggle="tab" data-bs-target="#headerShadow" type="button" role="tab" aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-10" data-bs-toggle="tab" data-bs-target="#headerShadow-html" type="button" role="tab" aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="myTabContent-10">
                    <div class="tab-pane fade show active" id="headerShadow" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body">
                            <div class="accordion accordion-header-shadow accordion-rounded">
                                    <div class="accordion-item">
                                    <h2 class="accordion-header accordion-header-primary" id="headingOne3">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3">
                                        Accordion Header One
                                        </button>
                                    </h2>
                                    <div id="collapseOne3" class="accordion-collapse collapse show" aria-labelledby="headingOne3" data-bs-parent="#accordion-ten">
                                        <div class="accordion-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header accordion-header-info" id="headingTwo3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo3" >
                                        Accordion Header Two
                                        </button>
                                    </h2>
                                    <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo3" data-bs-parent="#accordion-ten">
                                        <div class="accordion-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header accordion-header-primary" id="headingThree3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3">
                                        Accordion Header Three
                                        </button>
                                    </h2>
                                    <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree3" data-bs-parent="#accordion-ten">
                                        <div class="accordion-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="headerShadow-html" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body pt-0 code-area">
<pre class="mb-0"><code class="language-html"> &lt;div class="accordion accordion-header-shadow accordion-rounded"&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-primary" id="headingOne3"&gt;
&lt;button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3"&gt;
    Accordion Header One
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseOne3" class="accordion-collapse collapse show" aria-labelledby="headingOne3" data-bs-parent="#accordion-ten"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-info" id="headingTwo3"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo3" &gt;
    Accordion Header Two
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo3" data-bs-parent="#accordion-ten"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-primary" id="headingThree3"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3"&gt;
    Accordion Header Three
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree3" data-bs-parent="#accordion-ten"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Column ends -->
        <div class="col-xl-12">
            <div class="card dz-card" id="accordion-eleven">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion rounded stylish</h4>
                        <p class="m-0 subtitle">Add <code>accordion-rounded-stylish</code> class with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-11" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-11" data-bs-toggle="tab" data-bs-target="#roundedStylish" type="button" role="tab" aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-11" data-bs-toggle="tab" data-bs-target="#roundedStylish-html" type="button" role="tab" aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>
            <div class="tab-content" id="myTabContent-11">
                <div class="tab-pane fade show active" id="roundedStylish" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card-body">
                            <div class="accordion accordion-rounded-stylish accordion-bordered">
                                <div class="accordion-item">
                                <h2 class="accordion-header accordion-header-primary" id="headingOne4">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4">
                                    Accordion Header One
                                    </button>
                                </h2>
                                <div id="collapseOne4" class="accordion-collapse collapse show" aria-labelledby="headingOne4" data-bs-parent="#accordion-eleven">
                                    <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header accordion-header-info" id="headingTwo4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo4" >
                                    Accordion Header Two
                                    </button>
                                </h2>
                                <div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo4" data-bs-parent="#accordion-eleven">
                                    <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header accordion-header-primary" id="headingThree4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4">
                                    Accordion Header Three
                                    </button>
                                </h2>
                                <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordion-eleven">
                                    <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="roundedStylish-html" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">  &lt;div class="accordion accordion-rounded-stylish accordion-bordered"&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-primary" id="headingOne4"&gt;
&lt;button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4"&gt;
    Accordion Header One
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseOne4" class="accordion-collapse collapse show" aria-labelledby="headingOne4" data-bs-parent="#accordion-eleven"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-info" id="headingTwo4"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo4" &gt;
    Accordion Header Two
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo4" data-bs-parent="#accordion-eleven"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-primary" id="headingThree4"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4"&gt;
    Accordion Header Three
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordion-eleven"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>

                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Column ends -->

        <div class="col-xl-12">
            <div class="card dz-card" id="accordion-twelve">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion gradient</h4>
                        <p class="m-0 subtitle">Add <code>accordion-gradient</code> class with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-12" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-12" data-bs-toggle="tab" data-bs-target="#gradient" type="button" role="tab" aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-12" data-bs-toggle="tab" data-bs-target="#gradient-html" type="button" role="tab" aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>
            <div class="tab-content" id="myTabContent-12">
                <div class="tab-pane fade show active" id="gradient" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card-body">
                            <div class="accordion accordion-rounded-stylish accordion-gradient">
                                    <div class="accordion-item">
                                    <h2 class="accordion-header accordion-header-primary" id="headingOne5">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne5">
                                        Accordion Header One
                                        </button>
                                    </h2>
                                    <div id="collapseOne5" class="accordion-collapse collapse show" aria-labelledby="headingOne5" data-bs-parent="#accordion-twelve">
                                        <div class="accordion-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header accordion-header-info" id="headingTwo5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo5" >
                                        Accordion Header Two
                                        </button>
                                    </h2>
                                    <div id="collapseTwo5" class="accordion-collapse collapse" aria-labelledby="headingTwo5" data-bs-parent="#accordion-twelve">
                                        <div class="accordion-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header accordion-header-primary" id="headingThree5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5">
                                        Accordion Header Three
                                        </button>
                                    </h2>
                                    <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree5" data-bs-parent="#accordion-twelve">
                                        <div class="accordion-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade " id="gradient-html" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="accordion accordion-rounded-stylish accordion-gradient"&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-primary" id="headingOne5"&gt;
&lt;button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne5"&gt;
    Accordion Header One
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseOne5" class="accordion-collapse collapse show" aria-labelledby="headingOne5" data-bs-parent="#accordion-twelve"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-info" id="headingTwo5"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo5" &gt;
    Accordion Header Two
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseTwo5" class="accordion-collapse collapse" aria-labelledby="headingTwo5" data-bs-parent="#accordion-twelve"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;h2 class="accordion-header accordion-header-primary" id="headingThree5"&gt;
&lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5"&gt;
    Accordion Header Three
&lt;/button&gt;
&lt;/h2&gt;
&lt;div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree5" data-bs-parent="#accordion-twelve"&gt;
&lt;div class="accordion-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>

                    </div>
                </div>
            </div>
            </div>
        </div>

            </div>
        </div>
        <div class="element-menu menu-sticky sticky-header">
            <div class="element-menu-inner" id="element-sidebar">
                <h4 class="title mb-3">Accordion</h4>
                <nav>
                    <ul class="navbar-nav element-nav" id="menu-bar">
                        <li class="active"><a href="#accordion-one" class="scroll">Default Accordion</a></li>
                        <li><a href="#accordion-two" class="scroll">Bordered</a></li>
                        <li><a href="#accordion-three" class="scroll">Without Space</a></li>
                        <li><a href="#accordion-four" class="scroll">Space with border</a></li>
                        <li><a href="#accordion-five" class="scroll">Left Indicator</a></li>
                        <li><a href="#accordion-six" class="scroll">Accordion Icon</a></li>
                        <li><a href="#accordion-seven" class="scroll">Background Header</a></li>
                        <li><a href="#accordion-eight" class="scroll">Background Solid</a></li>
                        <li><a href="#accordion-nine" class="scroll">Background Active</a></li>
                        <li><a href="#accordion-ten" class="scroll">Hader Shadow</a></li>
                        <li><a href="#accordion-eleven" class="scroll">Rounded Stylish</a></li>
                        <li><a href="#accordion-twelve" class="scroll">Gradient Accordion</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>

</div>
@endsection
@push('scripts')
	<script>
    hljs.highlightAll();
	hljs.configure({ ignoreUnescapedHTML: true })


    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('pre code').forEach((el) => {
            hljs.highlightElement(el);
        });
    });

    </script>
@endpush
