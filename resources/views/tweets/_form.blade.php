@csrf
<div class="form-group">
    <textarea class="form-control" name="body" rows="8" cols="80" placeholder="Put Your Tweety Tweet Here">{{ old('body',$tweet->body) }}</textarea>
</div>
<div class="form-group">
    @if($errors->any())
    <ul class="alert alert-secondary">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    </ul>
    @endforeach
</div>
    @endif
<div class="form-group">
        <button type="submit" class="btn btn-dark">Submit</button>

</div>
