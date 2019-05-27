<form action="{{ url('/ed') }}" method="post">

    {{ csrf_field() }}

    <div class="form-group">
        <label class="text-normal text-dark">Plain Text</label>
        <input type="text" name="plain" class="form-control" placeholder="plain"
          value= "{{(isset($input)?$input:'')}}"
        />

        <br /><br />

        <label class="text-normal text-dark">Encrypt</label>
        <label class="text-normal text-dark">
            @isset($encrypt)
              {{$encrypt}}
            @endisset
        </label>

        <br />

        @if(\Session::has('resp'))
            <div class="alert alert-danger">
                <label class="text-normal text-dark">Plain</label>
                <div>{{Session::get('resp')}}</div>
            </div>
        @endif

    </div>
    <div class="form-group">
        <div class="peers ai-c jc-sb fxw-nw">
            <div class="peer">
                <br />
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>
