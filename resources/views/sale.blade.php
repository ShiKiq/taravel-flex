
<form method="POST" action="/create">
  @csrf
  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>
    <input id="name" type="text" class="text{{ Auth::user()->name }}" name="name" value="{{ Auth::user()->name }}" required autofocus>
    <label for="sale" class="col-md-4 col-form-label text-md-right">{{ __('金額') }}</label>
    <input id="sale"  type="number" min="1" max="99999999999" class="form-control{{ $errors->has('sale') ? ' is-invalid' : '' }}" name="sale" value="{{ old('sale') }}" required autofocus>
    <button type="submit" class="btn btn-primary">
        {{ __('入金') }}
    </button>
</form>