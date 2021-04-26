<?php
$users = DB::table('users')->count();
$tin = DB::table('tin')->count();
$theloai = DB::table('theloai')->count();
$loaitin = DB::table('loaitin')->count();
?>

<div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">Bảng điều khiển</h2>
                                    <p class="sub-title">Điều khiển mọi thao tác quản lý!</p>
                                </div>
                                <!-- /.col-sm-6 -->
                                {{-- <div class="col-sm-6 right-side">
                                    <a class="btn bg-black toggle-code-handle tour-four" role="button">Toggle Code!</a>
                                </div> --}}
                                <!-- /.col-sm-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-sm-6">
                                    <ul class="breadcrumb">
            							<li><a href="index.html"><i class="fa fa-home"></i> Trang chủ</a></li>
            							<li class="active">Bảng điều khiển</li>
            						</ul>
                                </div>
                                <!-- /.col-sm-6 -->
                                {{-- <div class="col-sm-6 text-right hidden-xs">
                                    <a href="#"><i class="fa fa-comments"></i> Talk to us</a>
                                    <a href="#" class="pl-20"><i class="fa fa-cog"></i> Settings</a>
                                </div> --}}
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="#">
                                            <span class="number counter"><?=$users?></span>
                                            <span class="name">Thành viên</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-primary" href="#"&gt;
    &lt;span class="number counter"&gt;1,411&lt;/span&gt;
    &lt;span class="name"&gt;Comments&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-comments"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $('.counter').counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-danger" href="{{route('quantritin.index')}}">
                                            <span class="number counter"><?=$tin?></span>
                                            <span class="name">Bài viết</span>
                                            <span class="bg-icon"><i class="fa fa-comments"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-danger" href="#"&gt;
    &lt;span class="number counter"&gt;322&lt;/span&gt;
    &lt;span class="name"&gt;Total Tickets&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-ticket"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $('.counter').counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="{{route('quantritheloai.index')}}">
                                            <span class="number counter"><?=$theloai?></span>
                                            <span class="name">Thể loại</span>
                                            <span class="bg-icon"><i class="fa fa-bank"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-warning" href="#"&gt;
    &lt;span class="number counter"&gt;5,551&lt;/span&gt;
    &lt;span class="name"&gt;Bank Credits&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-bank"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $('.counter').counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="{{route('quantriloaitin.index')}}">
                                            <span class="number counter"><?=$loaitin?></span>
                                            <span class="name">Loại tin</span>
                                            <span class="bg-icon"><i class="fa fa-thumbs-o-up"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-success" href="#"&gt;
    &lt;span class="number counter"&gt;16,710&lt;/span&gt;
    &lt;span class="name"&gt;Thumbs Up&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $('.counter').counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                        {{-- <section class="section pt-10">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel border-primary no-border border-3-top" data-panel-control>
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Production Change <small>over years</small></h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div id="production-chart" class="op-chart"></div>

                                                <div class="src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;div id="production-chart" class="op-chart"&gt;&lt;/div&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script src="js/production-chart.js"&gt;&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.src-code -->
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="panel border-primary no-border border-3-top" data-panel-control>
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Traffic Stats <small>over years</small></h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div id="traffic-chart" class="op-chart"></div>

                                                <div class="src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;div id="traffic-chart" class="op-chart"&gt;&lt;/div&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script src="js/traffic-chart.js"&gt;&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.src-code -->
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                        <section class="section pt-n">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="panel border-primary no-border border-3-top">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>User Table Details</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs border-bottom border-primary" role="tablist">
                                                    <li role="presentation" class="active"><a class="" href="#home7" aria-controls="home7" role="tab" data-toggle="tab">Approved</a></li>
                                                    <li role="presentation"><a class="" href="#profile7" aria-controls="profile7" role="tab" data-toggle="tab">Pending</a></li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content bg-white p-15">
                                                    <div role="tabpanel" class="tab-pane active" id="home7">
                                                        <table class="table table-clean">
                                                        	<tbody>
                                                        		<tr>
                                                        			<td class="line-height-60"><img src="images/letter/a.png" alt="" class="border-radius-50 img-size-50"></td>
                                                        			<td class="line-height-30"><small><b>Alepy Macintyre</b> <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br><span class="color-success">Approved</span></small></td>
                                                                    <td class="w-10">10.10pm</td>
                                                        		</tr>
                                                        		<tr>
                                                        			<td><img src="images/letter/profile-image-1.jpg" alt="" class="border-radius-50 img-size-50"></td>
                                                        			<td class="line-height-30"><small><b>Alepy Macintyre</b> <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br><span class="color-success">Approved</span></small></td>
                                                                    <td>12.15am</td>
                                                        		</tr>
                                                        	</tbody>
                                                        </table>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="profile7">
                                                        <table class="table table-clean">
                                                        	<tbody>
                                                                <tr>
                                                                    <td><img src="images/letter/profile-image-1.jpg" alt="" class="border-radius-50 img-size-50"></td>
                                                                    <td class="line-height-30"><small><b>Alepy Macintyre</b> <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum<br><span class="color-warning">Pending</span></small></td>
                                                                    <td>09:58am</td>
                                                                </tr>
                                                        		<tr>
                                                        			<td class="line-height-60"><img src="images/letter/c.png" alt="" class="border-radius-50 img-size-50"></td>
                                                        			<td class="line-height-30"><small><b>Celpy Macintyre</b> <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br><span class="color-warning">Pending</span></small></td>
                                                                    <td class="w-10">8:16pm</td>
                                                        		</tr>
                                                        	</tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="src-code">
                                            <pre class="language-html">
                                                <code class="language-html">
&lt;div class="panel-body p-20"&gt;

    &lt;!-- Nav tabs --&gt;
    &lt;ul class="nav nav-tabs border-bottom border-primary" role="tablist"&gt;
        &lt;li role="presentation" class="active"&gt;&lt;a class="" href="#home7" aria-controls="home7" role="tab" data-toggle="tab"&gt;Approved&lt;/a&gt;&lt;/li&gt;
        &lt;li role="presentation"&gt;&lt;a class="" href="#profile7" aria-controls="profile7" role="tab" data-toggle="tab"&gt;Pending&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;

    &lt;!-- Tab panes --&gt;
    &lt;div class="tab-content bg-white p-15"&gt;
        &lt;div role="tabpanel" class="tab-pane active" id="home7"&gt;
            &lt;table class="table table-clean"&gt;
            	&lt;tbody&gt;
            		&lt;tr&gt;
            			&lt;td class="line-height-60"&gt;&lt;img src="images/letter/a.png" alt="" class="border-radius-50 img-size-50"&gt;&lt;/td&gt;
            			&lt;td class="line-height-30"&gt;&lt;b&gt;Alepy Macintyre&lt;/b&gt; &lt;br&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;br&gt;&lt;span class="color-success"&gt;Approved&lt;/span&gt;&lt;/td&gt;
                        &lt;td class="w-10"&gt;10.10pm&lt;/td&gt;
            		&lt;/tr&gt;
                    ...
            	&lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;
        &lt;div role="tabpanel" class="tab-pane" id="profile7"&gt;
            &lt;table class="table table-clean"&gt;
            	&lt;tbody&gt;
            		&lt;tr&gt;
            			&lt;td class="line-height-60"&gt;&lt;img src="images/letter/a.png" alt="" class="border-radius-50 img-size-50"&gt;&lt;/td&gt;
            			&lt;td class="line-height-30"&gt;&lt;b&gt;Alepy Macintyre&lt;/b&gt; &lt;br&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;br&gt;&lt;span class="color-warning"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                        &lt;td class="w-10"&gt;8:16pm&lt;/td&gt;
            		&lt;/tr&gt;
                    ...
            	&lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>

                                    <!-- /.col-md-8 -->

                                    <div class="col-md-4">
                                        <div class="panel border-primary no-border border-3-top" data-panel-control>
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Tasks <small>with priority indicator</small></h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <p>Following is the list of all the pending tasks. Click on task to mark it done. You can toggle the status by clicking on an item.</p>

                                                <div class="row">
                                                    <div class="tasks-list col-md-12">
                                                        <div class="task mb-10">
                                                            <input type="checkbox" name="one" class="line-style-blue">
                                                            <label>This is medium priority task. It is indicated in primary color.</label>
                                                        </div>
                                                        <!-- /.task -->

                                                        <div class="task mb-10">
                                                            <input type="checkbox" name="one" class="line-style-red">
                                                            <label>This is top priority task. It is indicated in danger color.</label>
                                                        </div>
                                                        <!-- /.task -->

                                                        <div class="task mb-10">
                                                            <input type="checkbox" name="one" class="line-style-green">
                                                            <label>This is low priority task. It is indicated in success color. </label>
                                                        </div>
                                                        <!-- /.task -->

                                                        <div class="task mb-10">
                                                            <input type="checkbox" name="one" class="line-style-blue" checked="">
                                                            <label>This is medium priority task. It is indicated in primary color.</label>
                                                        </div>
                                                        <!-- /.task -->

                                                    </div>
                                                    <!-- /.tasks-list -->
                                                </div>

                                                <div class="src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;div class="tasks-list col-md-8 col-md-offset-2"&gt;
    &lt;div class="task mb-10"&gt;
        &lt;input type="checkbox" name="one" class="line-style-blue"&gt;
        &lt;label&gt;This is medium priority task. It is indicated in primary color.&lt;/label&gt;
    &lt;/div&gt;
    &lt;!-- /.task --&gt;

    &lt;div class="task mb-10"&gt;
        &lt;input type="checkbox" name="one" class="line-style-red"&gt;
        &lt;label&gt;This is top priority task. It is indicated in danger color.&lt;/label&gt;
    &lt;/div&gt;
    &lt;!-- /.task --&gt;

    &lt;div class="task mb-10"&gt;
        &lt;input type="checkbox" name="one" class="line-style-green"&gt;
        &lt;label&gt;This is low priority task. It is indicated in success color. &lt;/label&gt;
    &lt;/div&gt;
    &lt;!-- /.task --&gt;

    &lt;div class="task mb-10"&gt;
        &lt;input type="checkbox" name="one" class="line-style-blue" checked=""&gt;
        &lt;label&gt;This is medium priority task. It is indicated in primary color.&lt;/label&gt;
    &lt;/div&gt;
    &lt;!-- /.task --&gt;

&lt;/div&gt;
&lt;!-- /.tasks-list --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script src="js/task-list.js"&gt;&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.src-code -->
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section> --}}
                        <!-- /.section -->
                    </div>
                    <!-- /.main-page -->