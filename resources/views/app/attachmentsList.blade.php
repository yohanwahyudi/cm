@extends('layouts.apphome')

@section('content')

<div class="masonry-item col-md-10">
    <div class="container">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link" href="{{url('createNewChange')}}">Properties</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Attachments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('attachmentsList')}}">History</a>
            </li>
        </ul>
        <br>
    </div>

    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Filename</th>
            <th>Created Date</th>
            <th>Last Update</th>
            <th>Version</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Fsd.docx</td>
            <td>30-May-2019</td>
            <td>30-May-2019</td>
            <td>0</td>
            <td><button type="button" class="btn btn-link"><font color="red">Delete</font></button>&nbsp;&nbsp;<button type="button" class="btn btn-link">Download</button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Tsd.docx</td>
            <td>30-May-2019</td>
            <td>30-May-2019</td>
            <td>1</td>
            <td><button type="button" class="btn btn-link"><font color="red">Delete</font></button>&nbsp;&nbsp;<button type="button" class="btn btn-link">Download</button></td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>


</div>

@endsection
