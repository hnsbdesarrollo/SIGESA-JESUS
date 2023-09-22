@extends('layouts.default')

@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Progressbar</a></li>
            </ol>
        </div>

            <!--element-area-->
        <div class="element-area">
                <div class="element-view">
                <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                    <!-- row -->
                    <div class="row">
                        <!-- column -->
                        <div class="col-xl-12">
                            <div class="card dz-card" id="default-progress">
                                <div class="card-header flex-wrap border-0">
                                    <div>
                                        <h4 class="card-title">Default Progress bars</h4>
                                        <p class="mb-0 subtitle">Default progress bar style</p>
                                    </div>
                                    <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#DefaultProgressr" type="button" role="tab"  aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#DefaultProgressr-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="DefaultProgressr" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="progress">
                                                <div class="progress-bar linear" style="width: 60%; height:10px;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="DefaultProgressr-html" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="progress"&gt;
&lt;div class="progress-bar bg-danger" style="width: 60%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- column -->
                        <!-- /column -->
                        <div class="col-xl-12">
                            <div class="card dz-card" id="striped-progress">
                                <div class="card-header flex-wrap border-0">
                                    <div>
                                        <h4 class="card-title">Striped Progress bar</h4>
                                        <p class="mb-0 subtitle">add <code>.progress-bar-striped</code> to change the style</p>
                                    </div>
                                    <ul class="nav nav-tabs dzm-tabs" id="myTab-1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active " id="home-tab-1" data-bs-toggle="tab" data-bs-target="#StripedProgress" type="button" role="tab" aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="profile-tab-1" data-bs-toggle="tab" data-bs-target="#StripedProgress-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent-1">
                                    <div class="tab-pane fade show active" id="StripedProgress" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="progress">
                                                <div class="progress-bar bg-info progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%; height:10px;" role="progressbar">
                                                    <span class="sr-only">85% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="StripedProgress-html" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="progress"&gt;
&lt;div class="progress-bar bg-info progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%; height:10px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;85% Complete (success)&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                    </div>
                        <!--/ row -->
                    <!-- row -->
                    <div class="row">
                        <!-- column -->
                        <div class="col-xl-12">
                            <div class="card dz-card" id="colored-progress">
                                <div class="card-header flex-wrap border-0">
                                    <div>
                                        <h4 class="card-title">Colored Progress bar</h4>
                                        <p class="mb-0 subtitle">add <code>bg-primary, .bg-danger, .bg-info</code> to change the style
                                        </p>
                                    </div>
                                    <ul class="nav nav-tabs dzm-tabs" id="myTab-2" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active " id="home-tab-2" data-bs-toggle="tab" data-bs-target="#ColoredProgress" type="button" role="tab"  aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="profile-tab-2" data-bs-toggle="tab" data-bs-target="#ColoredProgress-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent-2">
                                    <div class="tab-pane fade show active" id="ColoredProgress" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-danger" style="width: 60%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-info" style="width: 40%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-success" style="width: 20%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-primary" style="width: 30%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-warning" style="width: 80%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-inverse" style="width: 40%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ColoredProgress-html" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-danger" style="width: 60%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-info" style="width: 40%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-success" style="width: 20%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-primary" style="width: 30%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-warning" style="width: 80%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-inverse" style="width: 40%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-xl-12">
                            <div class="card dz-card" id="different-bar">
                                <div class="card-header flex-wrap border-0">
                                    <div>
                                        <h4 class="card-title">Different bar sizes </h4>
                                        <p class="mb-0 subtitle">add <code>bg-primary, .bg-danger, .bg-info</code> to change the style
                                        </p>
                                    </div>
                                    <ul class="nav nav-tabs dzm-tabs" id="myTab-3" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active " id="home-tab-3" data-bs-toggle="tab" data-bs-target="#Differentbar" type="button" role="tab"  aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="profile-tab-3" data-bs-toggle="tab" data-bs-target="#Differentbar-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent-3">
                                    <div class="tab-pane fade show active" id="Differentbar" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-danger" style="width: 60%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-info" style="width: 40%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-success" style="width: 20%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-primary" style="width: 30%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-warning" style="width: 80%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Differentbar-html" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-danger" style="width: 60%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-info" style="width: 40%; height:8px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-success" style="width: 20%; height:10px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-primary" style="width: 30%; height:12px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-warning" style="width: 80%; height:14px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Column -->
                        <div class="col-xl-12">
                            <div class="card dz-card" id="animated-striped">
                                <div class="card-header flex-wrap border-0">
                                    <div>
                                        <h4 class="card-title">Animated Striped bar </h4>
                                        <p class="mb-0 subtitle">add <code>bg-primary, .bg-danger, .bg-info</code> to change the style
                                        </p>
                                    </div>
                                    <ul class="nav nav-tabs dzm-tabs" id="myTab-4" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active " id="home-tab-4" data-bs-toggle="tab" data-bs-target="#AnimatedStriped" type="button" role="tab"  aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#AnimatedStriped-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent-4">
                                    <div class="tab-pane fade show active" id="AnimatedStriped" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="progress mt-3">
                                                <div class="progress-bar active progress-bar-striped bg-danger" style="width: 60%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-info active progress-bar-striped" style="width: 40%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-success active progress-bar-striped" style="width: 20%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-primary active progress-bar-striped" style="width: 30%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-warning active progress-bar-striped" style="width: 80%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="AnimatedStriped-html" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar active progress-bar-striped bg-danger" style="width: 60%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-info active progress-bar-striped" style="width: 40%; height:8px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-success active progress-bar-striped" style="width: 20%; height:10px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-primary active progress-bar-striped" style="width: 30%; height:12px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-warning active progress-bar-striped" style="width: 80%; height:14px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-xl-12">
                            <div class="card dz-card" id="vertical-progress">
                                <div class="card-header flex-wrap border-0">
                                    <div>
                                        <h4 class="card-title">Vertical Progress bars </h4>
                                        <p class="mb-0 subtitle">add <code>.progress-vertical</code> to change the style</p>
                                    </div>
                                    <ul class="nav nav-tabs dzm-tabs" id="myTab-5" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active " id="home-tab-5" data-bs-toggle="tab" data-bs-target="#VerticalProgress" type="button" role="tab"  aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="profile-tab-5" data-bs-toggle="tab" data-bs-target="#VerticalProgress-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent-5">
                                    <div class="tab-pane fade show active" id="VerticalProgress" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="progress progress-vertical">
                                                <div class="progress-bar bg-danger" style="width:4px; height:60%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-vertical">
                                                <div class="progress-bar bg-info" style="width:4px; height:80%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-vertical">
                                                <div class="progress-bar bg-success" style="width:4px; height:60%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-vertical">
                                                <div class="progress-bar bg-primary" style="width:4px; height:40%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-vertical">
                                                <div class="progress-bar bg-warning" style="width:4px; height:30%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="VerticalProgress-html" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;div class="progress progress-vertical"&gt;
&lt;div class="progress-bar bg-danger" style="width:4px; height:60%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-vertical"&gt;
&lt;div class="progress-bar bg-info" style="width:4px; height:80%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-vertical"&gt;
&lt;div class="progress-bar bg-success" style="width:4px; height:60%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-vertical"&gt;
&lt;div class="progress-bar bg-primary" style="width:4px; height:40%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-vertical"&gt;
&lt;div class="progress-bar bg-warning" style="width:4px; height:30%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-xl-12">
                            <div class="card dz-card" id="vertical-progress-bottom">
                                <div class="card-header flex-wrap border-0">
                                    <div>
                                        <h4 class="card-title">Vertical Progress From bottom </h4>
                                        <p class="mb-0 subtitle">add <code>.progress-vertical</code> to change the style</p>
                                    </div>
                                    <ul class="nav nav-tabs dzm-tabs" id="myTab-6" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active " id="home-tab-6" data-bs-toggle="tab" data-bs-target="#Progressbottom" type="button" role="tab"  aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="profile-tab-6" data-bs-toggle="tab" data-bs-target="#Progressbottom-html" type="button" role="tab" aria-selected="false">HTML</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent-6">
                                    <div class="tab-pane fade show active" id="Progressbottom" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="progress progress-vertical-bottom">
                                                <div class="progress-bar bg-danger" style="width:4px; height:60%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-vertical-bottom">
                                                <div class="progress-bar bg-info" style="width:4px; height:80%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-vertical-bottom">
                                                <div class="progress-bar bg-success" style="width:4px; height:60%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-vertical-bottom">
                                                <div class="progress-bar bg-primary" style="width:4px; height:40%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-vertical-bottom">
                                                <div class="progress-bar bg-warning" style="width:4px; height:30%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="Progressbottom-html" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body p-0 code-area">
<pre class="m-0"><code class="lanuage-html">&lt;div class="progress progress-vertical-bottom"&gt;
&lt;div class="progress-bar bg-danger" style="width:4px; height:60%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-vertical-bottom"&gt;
&lt;div class="progress-bar bg-info" style="width:4px; height:80%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-vertical-bottom"&gt;
&lt;div class="progress-bar bg-success" style="width:4px; height:60%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-vertical-bottom"&gt;
&lt;div class="progress-bar bg-primary" style="width:4px; height:40%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-vertical-bottom"&gt;
&lt;div class="progress-bar bg-warning" style="width:4px; height:30%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-xl-12">
                            <div class="card dz-card" id="different-size">
                                <div class="card-header flex-wrap border-0">
                                    <div>
                                        <h4 class="card-title">Different size Progress bars </h4>
                                        <p class="mb-0 subtitle">add <code>.progress-vertical</code> to change the style</p>
                                    </div>
                                    <ul class="nav nav-tabs dzm-tabs" id="myTab-7" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active " id="home-tab-7" data-bs-toggle="tab" data-bs-target="#DifferentSize" type="button" role="tab"  aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="profile-tab-7" data-bs-toggle="tab" data-bs-target="#DifferentSize-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent-7">
                                    <div class="tab-pane fade show active" id="DifferentSize" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="progress progress-vertical">
                                                <div class="progress-bar bg-danger" style="width:4px; height:60%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-vertical">
                                                <div class="progress-bar bg-info" style="width:6px; height:80%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-vertical">
                                                <div class="progress-bar bg-success" style="width:8px; height:60%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-vertical">
                                                <div class="progress-bar bg-primary" style="width:10px; height:40%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-vertical">
                                                <div class="progress-bar bg-warning" style="width:14px; height:30%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="DifferentSize-html" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="progress progress-vertical"&gt;
&lt;div class="progress-bar bg-danger" style="width:4px; height:60%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-vertical"&gt;
&lt;div class="progress-bar bg-info" style="width:6px; height:80%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-vertical"&gt;
&lt;div class="progress-bar bg-success" style="width:8px; height:60%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-vertical"&gt;
&lt;div class="progress-bar bg-primary" style="width:10px; height:40%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-vertical"&gt;
&lt;div class="progress-bar bg-warning" style="width:14px; height:30%;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-xl-12">
                            <div class="card dz-card" id="animated-bars">
                                <div class="card-header flex-wrap border-0">
                                    <div>
                                        <h4 class="card-title">Animated bars </h4>
                                        <p class="mb-0 subtitle">add <code>.progress-vertical</code> to change the style</p>
                                    </div>
                                    <ul class="nav nav-tabs dzm-tabs" id="myTab-8" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active " id="home-tab-8" data-bs-toggle="tab" data-bs-target="#AnimatedBars" type="button" role="tab"  aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="profile-tab-8" data-bs-toggle="tab" data-bs-target="#AnimatedBars-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent-8">
                                    <div class="tab-pane fade show active" id="AnimatedBars" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-danger progress-animated" style="width: 60%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-info progress-animated" style="width: 40%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-success progress-animated" style="width: 20%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-primary progress-animated" style="width: 30%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-warning progress-animated" style="width: 80%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-inverse progress-animated" style="width: 40%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="AnimatedBars-html" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-danger progress-animated" style="width: 60%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-info progress-animated" style="width: 40%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-success progress-animated" style="width: 20%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-primary progress-animated" style="width: 30%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-warning progress-animated" style="width: 80%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mt-3"&gt;
&lt;div class="progress-bar bg-inverse progress-animated" style="width: 40%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Column -->
                        <div class="col-xl-12">
                            <div class="card dz-card" id="skill-bars">
                                <div class="card-header flex-wrap border-0">
                                    <div>
                                        <h4 class="card-title">SKILL BARS </h4>
                                        <p class="mb-0 subtitle">add <code>.progress-animated</code> to change the style</p>
                                    </div>
                                    <ul class="nav nav-tabs dzm-tabs" id="myTab-9" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active " id="home-tab-9" data-bs-toggle="tab" data-bs-target="#SkillBars" type="button" role="tab"  aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="profile-tab-9" data-bs-toggle="tab" data-bs-target="#SkillBars-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent-9">
                                    <div class="tab-pane fade show active" id="SkillBars" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <h6>Photoshop
                                                <span class="pull-end">85%</span>
                                            </h6>
                                            <div class="progress ">
                                                <div class="progress-bar bg-danger progress-animated" style="width: 85%;" role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <h6 class="mt-4">Code editor
                                                <span class="pull-end">90%</span>
                                            </h6>
                                            <div class="progress">
                                                <div class="progress-bar bg-info progress-animated" style="width: 90%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <h6 class="mt-4">Illustrator
                                                <span class="pull-end">65%</span>
                                            </h6>
                                            <div class="progress">
                                                <div class="progress-bar bg-success progress-animated" style="width: 65%; " role="progressbar">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="SkillBars-html" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;h6&gt;Photoshop
&lt;span class="pull-end"&gt;85%&lt;/span&gt;
&lt;/h6&gt;
&lt;div class="progress "&gt;
&lt;div class="progress-bar bg-danger progress-animated" style="width: 85%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;h6 class="mt-4"&gt;Code editor
&lt;span class="pull-end"&gt;90%&lt;/span&gt;
&lt;/h6&gt;
&lt;div class="progress"&gt;
&lt;div class="progress-bar bg-info progress-animated" style="width: 90%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;h6 class="mt-4"&gt;Illustrator
&lt;span class="pull-end"&gt;65%&lt;/span&gt;
&lt;/h6&gt;
&lt;div class="progress"&gt;
&lt;div class="progress-bar bg-success progress-animated" style="width: 65%; height:6px;" role="progressbar"&gt;
&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                        <!--/ row -->
                </div>
            </div>
            <div class="element-menu menu-sticky sticky-header">
                <div class="element-menu-inner" id="element-sidebar">
                    <h4 class="title mb-3">Examples For Progressbar</h4>
                    <ul class="navbar-nav element-nav" id="menu-bar">
                        <li><a href="#default-progress" class="scroll">Default Progress bars</a></li>
                        <li><a href="#striped-progress" class="scroll">Striped Progress bar</a></li>
                        <li><a href="#colored-progress" class="scroll">Colored Progress bar</a></li>
                        <li><a href="#different-bar" class="scroll">Different bar sizes</a></li>
                        <li><a href="#animated-striped" class="scroll">Animated Striped bar</a></li>
                        <li><a href="#vertical-progress" class="scroll">Vertical Progress bars </a></li>
                        <li><a href="#vertical-progress-bottom" class="scroll">Vertical Progress From bottom </a></li>
                        <li><a href="#different-size" class="scroll">Different size Progress bars</a></li>
                        <li><a href="#animated-bars" class="scroll">Animated bars</a></li>
                        <li><a href="#skill-bars" class="scroll">Skill Bars</a></li>
                    </ul>
                </div>
            </div>
        </div>
            <!-- Column -->
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
