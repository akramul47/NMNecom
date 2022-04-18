@extends('admin.dashboard')
@section('content')
    <!-- HEADER MOBILE-->

    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->

    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">

        <div class="section__content section__content--p30">
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">data table</h3>
            <div class="table-data__tool">
              
                <div class="table-data__tool-right">
                    <a href="catagory">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>add item</button></a>
                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        <select class="js-select2 select2-hidden-accessible" name="type" tabindex="-1" aria-hidden="true">
                            <option selected="selected">Export</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            style="width: 85px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                                    aria-expanded="false" tabindex="0" aria-labelledby="select2-type-xp-container"><span
                                        class="select2-selection__rendered" id="select2-type-xp-container"
                                        title="Export">Export</span><span class="select2-selection__arrow"
                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>Slug</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $list )
                            
                       
                        <tr class="tr-shadow">

                            <td>{{$list->name}}</td>
                            <td class="desc">{{$list->slug}}</td>
                            <td>
                                <div class="table-data-feature">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Send">
                                        <i class="zmdi zmdi-mail-send"></i>
                                    </button>
                                    <a href="catagory/{{$list->id}}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button></a>
                                    <a href="catagory/delete/{{$list->id}}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </a>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="More">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
    </div>





    <!-- Jquery JS-->



    <!-- end document-->
@endsection
