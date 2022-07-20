@extends('admin.layout.app')

@section('content')
    <section id="page-account-settings">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-header">
                            <p class="card-title">
                                ویرایش فصل
                            </p>
                        </div>
                        <div class="card-body">
                            <form novalidate="" action="{{route('admin.updateSeason',['id' => $season->id])}}" method="POST"
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
                                                               value="{{$season->title}}"
                                                               required>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">انتخاب دوره</label>
                                                <select name="course" id="l_course" class="form-control">
                                                    @php $course = \App\Models\Course::all(); @endphp
                                                    @foreach($course as $courses)
                                                        <option value="{{$courses->title}}">{{$courses->title}}</option>
                                                    @endforeach
                                                </select>
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
