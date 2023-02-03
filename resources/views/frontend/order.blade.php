@extends('layouts.app')
@section('content')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<style>
    .progress-bar {
        width: 33.3%;
    }

    /* .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    } */
    /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}


</style>
@yield("wrip")
<div class="row">
<div class="col-md-12 bg-image"  >
        @include('layouts.navbar')
        <div class="col-md-12 mt-5 head-part text-white">
            <h2 class="h1_tag_style">Welcome to Essay Sages</h2>
            <p class="w-50 text-center">where our acclaimed client’s assignments and tasks are meticulously done We have a great deal to offer so please take your time to browse our website to discover more about us and what we offer</p>
            <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
                <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/convenient.png') }}" /> Easy Process</div>
                <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/24-hours.png') }}" />24/7 on Demand</div>
                <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/saving.png') }}" />Timesaver</div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 my-3">
        <div class="w-50 mx-auto" >
            <h2 class="text-center mt-3 p-3">
                Publish Order
            </h2>
        </div>
    </div>
    <div class="col-md-12 my-3">
        <div class="row">
            <div class="col-md-2 offset-1" id="tab_panel">
                <div class="tab d-flex flex-column">
                    <button class="tablinks" onclick="changeTab(event, 'Writing')">Writing</button>
                    <button class="tablinks mt-2" onclick="changeTab(event, 'Editing')">Editing</button>
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <!-- create form of writing with field of subject,topic,pages,deadline,Detailed Instructions and attach file -->
                    <div id="Writing" class="tabcontent">
                        <form id="publish_post" action="/publish/writterpost" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12 row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="writterSubject" name="writterSubject" placeholder="Subject" required>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="topic">Topic</label>
                                    <input type="text" class="form-control" id="writterTopic" name="writterTopic" placeholder="Topic" required>
                                </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label for="pages">Pages</label>
                                        <input type="text" class="form-control" id="writterPages" name="writterPages" placeholder="Pages" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label for="deadline">Deadline</label>
                                        <input type="date" class="form-control" id="writterDeadline" name="writterDeadline" placeholder="Deadline" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label for="Budget">Budget</label>
                                        <input type="text" class="form-control" id="writterBudget" name="writterBudget" placeholder="Budget" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label for="file">File</label>
                                        <input type="file" class="form-control" id="writterFile" name="writterFile" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group my-3">
                                <label for="instructions">Instructions</label>
                                <textarea class="form-control" id="writterInstructions" name="writterInstructions" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn-sm btn-primary submit">Submit</button>
                        </form>
                    </div>
                    <!-- create form of editing with field of subject,topic,pages,deadline,Detailed Instructions and attach file -->
                    <div id="Editing" style="display: none;" class="tabcontent">
                        <form action="/publish/editpost" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12 row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="editSubject" name="editSubject" placeholder="Subject">
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="topic">Topic</label>
                                    <input type="text" class="form-control" id="editTopic" name="editTopic" placeholder="Topic">
                                </div>
                                </div>
                                {{-- <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label for="pages">Pages</label>
                                        <input type="text" class="form-control" id="editPages" name="editPages" placeholder="Pages">
                                    </div>
                                </div> --}}
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label for="deadline">Deadline</label>
                                        <input type="date" class="form-control" id="editDeadline" name="editDeadline" placeholder="Deadline">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label for="Budget">Budget</label>
                                        <input type="text" class="form-control" id="editBudget" name="editBudget" placeholder="Budget">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label for="file">File</label>
                                        <input type="file" class="form-control" id="editFile" name="editFile">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group my-3">
                                <label for="instructions">Instructions</label>
                                <textarea class="form-control" id="editInstructions" name="editInstructions" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn-sm btn-primary submit">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
        <script>

            function changeTab(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            
        </script>
        @endsection