@extends('layouts.app')
@section('content')
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
<div class="row">
    <div class="col-md-12" style=" background-size:cover; background-image: url(https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v4/intro-bg@2x.webp);">
        @include('layouts.navbar')
        <div class="col-md-12 mt-5 head-part text-white">
            <h2>Welcome to Technical Writers</h2>
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
        <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
            <h2 class="text-center mt-3 p-3">
                Testimonials
            </h2>
            <div class="progress" style="height: 25px;">
                <div class="progress-bar" style="background-color: green" role="progressbar" style="width:40%">
                    1)Your Order
                </div>
                <div class="progress-bar" style="background-color: orange" role="progressbar" style="width:10%">
                    2)Find Writer
                </div>
                <div class="progress-bar" style="background-color: danger" role="progressbar" style="width:20%">
                    3)Make Payment
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 my-3">
        <div class="row">
            <div class="col-md-2 offset-1">
                <div class="tab d-flex flex-column">
                    <button class="tablinks" onclick="changeTab(event, 'Writing')">Writing</button>
                    <button class="tablinks mt-2" onclick="changeTab(event, 'Editing')">Editing</button>
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <!-- create form of writing with field of subject,topic,pages,deadline,Detailed Instructions and attach file -->
                    <div id="Writing" class="tabcontent">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">Subject1</label>
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="topic">Topic</label>
                                        <input type="text" class="form-control" id="topic" name="topic" placeholder="Topic">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pages">Pages</label>
                                <input type="text" class="form-control" id="pages" name="pages" placeholder="Pages">
                            </div>
                            <div class="form-group">
                                <label for="deadline">Deadline</label>
                                <input type="date" class="form-control" id="deadline" name="deadline" placeholder="Deadline">
                            </div>
                            <div class="form-group">
                                <label for="instructions">Instructions</label>
                                <textarea class="form-control" id="instructions" name="instructions" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="file">File</label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <!-- create form of editing with field of subject,topic,pages,deadline,Detailed Instructions and attach file -->
                    <div id="Editing" style="display: none;" class="tabcontent">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <label for="topic">Topic</label>
                                <input type="text" class="form-control" id="topic" name="topic" placeholder="Topic">
                            </div>
                            <div class="form-group">
                                <label for="pages">Pages</label>
                                <input type="text" class="form-control" id="pages" name="pages" placeholder="Pages">
                            </div>
                            <div class="form-group">
                                <label for="deadline">Deadline</label>
                                <input type="date" class="form-control" id="deadline" name="deadline" placeholder="Deadline">
                            </div>
                            <div class="form-group">
                                <label for="instructions">Instructions</label>
                                <textarea class="form-control" id="instructions" name="instructions" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="file">File</label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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