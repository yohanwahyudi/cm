@extends('layouts.apphome')

@section('css')

<!-- <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}"> -->

<!-- <script src="{{ url('/js/jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ url('/js/popper.min.js') }}"></script>
<script src="{{ url('/js/bootstrap.min.js') }}"></script> -->

<!-- <link href="{{ url('/css/summernote-bs4.css') }}" rel="stylesheet">
<script src="{{ url('/js/summernote-bs4.js') }}"></script>
<script src="{{ url('/js/summernote-bs4.min.js') }}"></script> -->

@endsection

@section('content')

<div class="masonry-item col-md-10">
    <div class="container">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" href="#">Properties</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('attachmentsList')}}">Attachments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('attachmentsList')}}">History</a>
            </li>
        </ul>
        <br>
    </div>

    <div class="bgc-white p-20 bd">
        <!-- <h4 class="c-grey-900">Properties</h4> -->
        <div class="mT-30">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputChangeFor">Change For</label>
                        <select id="inputChangeFor" class="form-control" name="inputChangeFor">
                            <option selected="selected" value="">Application</option>
                            <option value="infrastructure">Infrastructure</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputChangeType">Change Type</label>
                        <select id="inputChangeType" class="form-control" name="inputChangeType">
                            <option value="">Normal</option>
                            <option value="">Emergency</option>
                            <option selected="selected" value="other">Routine</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputChangeCategory">Change Category</label>
                        <select id="inputChangeCategory" class="form-control" name="inputChangeCategory">
                            <option selected="selected" value="">Enhancement</option>
                            <option value="">Defect/ Correction</option>
                            <option value="other">Project</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputChangePriority">Change Priority</label>
                        <select id="inputChangePriority" class="form-control" name="inputChangePriority">
                            <option value="">High</option>
                            <option value="">Medium</option>
                            <option selected="selected" value="other">Low</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputChangeCaller">Caller</label>
                        <br />
                        <label id="inputChangePriority" class="form-control" name="inputChangePriority">Caller Name</label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputChangeOrganization">Organization</label>
                        <br />
                        <label id="inputChangeOrganization" class="form-control" name="inputChangeOrganization">Caller Name</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input type="text" class="form-control" id="inputTitle" name="inputTitle" />
                </div>

                <div class="form-group">
                    <label for="inputDescription">Description</label>
                    <textarea class="form-control" rows="10" id="inputDescription" name="inputDescription"></textarea>
                    <!-- <div id="summernote"></div> -->
                </div>

                <div class="form-group">

                  <div class="dropzone"><center>Drop your attachments here</center></div>


                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputProblem">Related Problem</label>
                        <input type="text" class="form-control" id="inputProblem" name="inputProblem" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputRequest">Related Request</label>
                        <input type="text" class="form-control" id="inputRequest" name="inputRequest" />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="fw-500">Scheduled Start Date:</label>
                        <div class="timepicker-input input-icon form-group">
                            <div class="input-group">
                                <div class="input-group-addon bgc-white bd bdwR-0"><i class="ti-calendar"></i></div>
                                <input type="text" class="form-control bdc-grey-200 start-date" placeholder="start date" data-provide="datepicker">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="fw-500">Scheduled Finish Date:</label>
                        <div class="timepicker-input input-icon form-group">
                            <div class="input-group">
                                <div class="input-group-addon bgc-white bd bdwR-0"><i class="ti-calendar"></i></div>
                                <input type="text" class="form-control bdc-grey-200 start-date" placeholder="start date" data-provide="datepicker">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

<!-- <script>
  $('#summernote').summernote({
    placeholder: 'Change Description:<br>1. Affected service/ impact<br>2. Current condition<br>3. Modified',
    tabsize: 2,
    height: 200
  });
</script> -->
<script src="js/dropzone.js"></script>
<link rel="stylesheet" href="css/dropzone.css">

@endsection
