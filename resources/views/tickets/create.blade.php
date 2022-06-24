@extends('layout.app')

@section('content')
  <div class="container">
      <section id="basic-horizontal-layouts">
          <div class="row">
              <div class="col-md-12 col-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">ارسال تیکت جدید</h4>
                      </div>
                      <div class="card-content">
                          <div class="card-body">
                              @if (session('status'))
                                  <div class="alert alert-success">
                                      {{ session('status') }}
                                  </div>
                              @endif
                              <form action="{{route('ticket.store')}}" class="form form-horizontal" method="POST">
                                  @csrf
                                  <div class="form-body">
                                      <div class="row">
                                          <div class="col-12">
                                              <fieldset class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                                  <label for="basicInput">عنوان</label>
                                                  <input type="text" class="form-control" name="title"
                                                         value="{{ old('title') }}" id="basicInput"
                                                         placeholder="عنوان را وارد کنید">
                                                  @if ($errors->has('title'))
                                                      <span class="help-block">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                                  @endif
                                              </fieldset>
                                          </div>
                                          <div class="col-12">
                                              <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                                  <label for="type">
                                                      دسته بندی
                                                  </label>
                                                  <select class="custom-select form-control" id="type" name="category"
                                                          required>
                                                      <option value="">دسته بندی را انتخاب کنید</option>
                                                      <option value="ضعیف">ضعیف</option>
                                                      <option value="متوسط">متوسط</option>
                                                      <option value="قوی">قوی</option>
                                                      {{--     @foreach ($categories as $category)
                                                               <option
                                                                   value="{{ $category->id }}">{{ $category->name }}</option>
                                                           @endforeach--}}
                                                  </select>
                                                  @if ($errors->has('category'))
                                                      <span class="help-block">
                                                        <strong>{{ $errors->first('category') }}</strong>
                                                    </span>
                                                  @endif
                                              </div>
                                          </div>
                                          <div class="col-12">
                                              <div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
                                                  <label for="type">
                                                      اولویت
                                                  </label>
                                                  <select class="custom-select form-control" id="type" name="priority"
                                                          required>
                                                      <option value="">اولویت را انتخاب کنید</option>
                                                      <option value="ضعیف">ضعیف</option>
                                                      <option value="متوسط">متوسط</option>
                                                      <option value="قوی">قوی</option>
                                                  </select>
                                                  @if ($errors->has('priority'))
                                                      <span class="help-block">
                                                        <strong>{{ $errors->first('priority') }}</strong>
                                                    </span>
                                                  @endif
                                              </div>
                                          </div>
                                          <div class="col-12">
                                              <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }} row">
                                                  <div class="col-md-4">
                                                      <span>متن پیام</span>
                                                  </div>
                                                  <textarea name="message"
                                                            class="form-control char-textarea" rows="10"
                                                            placeholder="پیام" required></textarea>
                                                  @if ($errors->has('message'))
                                                      <span class="help-block">
                                                        <strong>{{ $errors->first('message') }}</strong>
                                                    </span>
                                                  @endif
                                              </div>
                                          </div>
                                          <div class="col-md-8">
                                              <button type="submit"
                                                      class="btn btn-primary mr-1 mb-1 waves-effect waves-light">ثبت
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
@endsection
