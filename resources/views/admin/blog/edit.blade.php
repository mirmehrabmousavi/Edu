@extends('admin.layout.app')

@section('content')
    <section id="page-account-settings">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-header">
                            <p class="card-title">
                                ویرایش بلاگ
                            </p>
                        </div>
                        <div class="card-body">
                            <form novalidate="" action="{{route('admin.updateBlog',['id' => $blog->id])}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">عنوان</label>
                                                        <input type="text" class="form-control" name="title"
                                                               id="account-username" placeholder="عنوان"
                                                               value="{{$blog->title}}"
                                                               required="" data-validation-required-message="">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">پوستر</label>
                                                        <input type="file" class="form-control" name="image"
                                                               id="account-username" placeholder="پوستر">
                                                        <img src="{{'/upload/admin/blog/'.$blog->image}}" alt="" height="70" width="70">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">توضیحات</label>
                                                <textarea class="form-control ckeditor" id="editor" name="desc">
                                                    {{$blog->desc}}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">بر چسب ها</label>
                                                <textarea class="form-control" name="tags">{{$blog->tags}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                        <button type="submit"
                                                class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                            بروزرسانی
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

    <script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('.ckeditor', {
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
