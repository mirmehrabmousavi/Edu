<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header" style="padding-bottom: 1.5rem;">
                <h4 class="card-title">افزودن پاسخ</h4>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <form action="{{ url('comment') }}" method="POST" class="form form-horizontal">
                        @csrf
                        <fieldset class="form-group">
                            <input type="hidden" class="form-control" name="ticket_id"
                                   value="{{$ticket->id}}" id="basicInput">
                        </fieldset>

                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }} row">
                            <div class="col-md-4">
                                <span>متن پیام</span>
                            </div>
                            <textarea name="comment"
                                      class="form-control char-textarea" rows="10"
                                      placeholder="متن پیام خود را وارد کنید" required></textarea>
                            @if ($errors->has('comment'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('comment') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <button type="submit"
                                    class="btn btn-primary mr-1 mb-1 waves-effect waves-light">ثبت
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
