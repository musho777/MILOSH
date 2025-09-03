<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from laravel.spruko.com/adminor/Leftmenu-Icon-DarkSidebar-Dark/index by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 May 2020 09:01:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('admin.layouts.head')
<body class="app sidebar-mini">


<div id="global-loader" ></div>
<div class="page" >
    <div class="page-main">

        <!-- Header start-->
        @include('admin.layouts.header')
        <!-- Header start-->

        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        @include('admin.layouts.sidebar')

        <!-- Main Content-->
        <div class="app-content  my-3 my-md-5">
            <div class="side-app">
                <div class="page-header">
                    <h4 class="page-title">Главная</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('showAdminHomePage')}}">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Редактор Слайдера</li>
                    </ol>
                </div>

                {{-- content start --}}
                <div class="row">
                    <div class="col-12">
                        <form class="card" action="" enctype="multipart/form-data" method="post" class="forms-sample">
                            @csrf
                            <div class="card-body ">
                                <div class="form-group">
                                    <label class="form-label">Заголовок</label>
                                    <input type="text" class="form-control" name="line1" placeholder="Заголовок">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Текст</label>
                                    <input type="text" class="form-control" name="line2" placeholder="Текст">
                                </div>
                            </div>

                            <div class=" card-body">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <input type="file" name="image" class="dropify" data-default-file="" data-height="180" accept=".jpg, .jpeg, .png" />
                                        @error('image')
                                        <span style="color: red">*select file</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary btn-block">Добавить</button>

                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Слайд Лист</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap">
                                    <thead >
                                    <tr>
                                        <th></th>
                                        <th>Line 1</th>
                                        <th>Line 2</th>
                                        <th>Line 3</th>
                                        <th>Line 4</th>
                                        <th>Image</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div style="width: 210px">
                                                <a href="#" class="thumbnail ">
                                                    <img src="" alt="thumb1" class="thumbimg listImg" >
                                                </a>
                                            </div>
                                        </td>
                                        <td><a href="admin/deleteHomeSlide/" class="btn btn-outline-danger">Удалить</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- table-responsive -->
                        </div>
                    </div>
                </div>
                {{-- content end --}}
                <a href="updatestatus/{}"></a>

            </div>
        </div>
    </div>
    <!--footer-->

    <!-- End Footer-->
</div>
<!-- End Page -->
<!-- Back to top -->
<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

<!-- Dashboard Core -->
@include('admin.layouts.scripts')
</body>

<!-- Mirrored from laravel.spruko.com/adminor/Leftmenu-Icon-DarkSidebar-Dark/index by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 May 2020 09:02:51 GMT -->
</html>
