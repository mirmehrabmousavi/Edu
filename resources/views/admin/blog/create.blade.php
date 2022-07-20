@extends('admin.layout.app')

@section('style')

@endsection

@section('content')
    <section id="page-account-settings">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-header">
                            <p class="card-title">
                                افزودن بلاگ جدید
                            </p>
                        </div>
                        <div class="card-body">
                            <form novalidate="" action="{{route('admin.storeBlog')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">عنوان</label>
                                                        <input type="text" class="form-control" name="title"
                                                               id="account-username" placeholder="عنوان"
                                                               value=""
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
                                                        <input type="text" class="form-control" name="image"
                                                               id="account-username" placeholder="پوستر"
                                                               value="" required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">توضیحات</label>
                                                <textarea class="form-control ckeditor" id="editor" name="desc" required="" data-validation-required-message=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">برچسب (با , برچسب های خود را وارد کنید)</label>
                                                <textarea class="form-control" name="tags" required="" data-validation-required-message=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                        <button type="submit"
                                                class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                            ذخیره
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
