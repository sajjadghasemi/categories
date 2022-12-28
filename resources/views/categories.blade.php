<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row" id="app">
        <form class="row g-3" action="/store-category" id="categoryForm" name="categoryForm" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="id">
            <category-component></category-component>
            <div class="col-md-4">
                <label class="form-label">نام</label>
                <input id="name" name="name" type="text" class="form-control">
            </div>
            <div id="hide" class="col-md-2">
                <label class="form-label">جایگاه قرارگیری</label>
                <input id="number" name="number" type="number" class="form-control">
            </div>
            <div class="col-md-2">
                <label class="form-label">ثبت دسته بندی</label>
                <button name="addCat" type="submit" id="saveCat" class="btn btn-primary form-control">ثبت</button>
            </div>
        </form>
        <div class="col-md-12 mt-2">
            <div id="success" class="d-none alert alert-success">
                ثبت شد.
            </div>
        </div>
    </div>
    <div class="row mt-4">
        @include('error')
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <h3>
                لیست دسته بندی ها
            </h3>
        </div>
        <div class="col-12">
            <div id="app1">
                @foreach($categoriesshow as $category)
                <ul class="list-inline">
                    <h4><li class="rounded list-inline-item bg-dark text-white p-3">{{$category->number}}</li>
                        <li class="list-inline-item">{{$category->name}}</li></h4>
                    @if(count($category->childrenRecursive)>0)
                        <ul id="subCatName" class="col-3">
                            @foreach($category->childrenRecursive as $subCategory)
                               <li id="{{$subCategory->id}}" class="text-secondary"><a href="javascript:void(0)" id="{{ $subCategory->id }}" class="text-secondary">{{$subCategory->name}}</a></li>
                            @endforeach
                        </ul>
                    @endif
                    <hr/>
                </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="{{asset('js/app.js')}}"></script>

{{--<script>--}}
{{--    new Vue({--}}
{{--        el: '#app1',--}}
{{--        methods: {--}}
{{--            okey(event) {--}}
{{--                event.target.className += ' disabled'--}}
{{--            }--}}
{{--        }--}}
{{--    })--}}
{{--</script>--}}

<script>
    $(document).ready( function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    $(document).ready(function (){
        $("#saveCat").click(function (e){
            e.preventDefault();
            var formData={
                name:$("#name").val(),
                number:$("#number").val(),
                parent_id:$("#parent_id").val(),
            }
            $.ajax({
                type:"post",
                url:"/store-category",
                data:formData,
                dataType:"json",

                success:function (data){
                    $("#success").removeClass("d-none");
                    $(document).ajaxStop(function (){
                        setTimeout(function(){
                            location.reload();
                        }, 1800);
                    })
                },
                error:function (data){
                    console.log("error:",data)
                }
            })
        })
    });

    $("#subCatName li a").dblclick(function (e) {
        e.preventDefault();
        var id = $(this).attr("id");
        var subName = $(this).html();
        $(this).replaceWith("<form id='jsform' action='/update-category' method='post'>"+  "<input type='hidden' name='id' value=\"" + id + "\">"  + "<input name='subName' class='form-control' type=\"text\" value=\"" + subName + "\" id=\"" + id + "\">" + "<input type='submit' style='visibility: hidden'/>" + "</form>");
        $.ajax({
            type: "post",
            url: "/edit-category",
            data: {
                'id':id,
                'name':subName
            },
            dataType: "json",
            success: function (data) {
                $("input.form-control").val(id);
                $("input.form-control").val(subName);
            },
            error: function (data) {
                console.log("error:", data)
            }
        })
    });


        $(document).on('keypress', function (e) {
            if (e.which === 13) {
                $("#jsform").submit();
            }
        });







            // $.ajax({
            //     type:"get",
            //     url:"/edit-category/id",
            //     data:formData,
            //     dataType:"json",
            //     success:function (data){
            //     },
            //     error:function (data){
            //         console.log("error:",data)
            //     }
            // })


</script>

</body>
</html>
