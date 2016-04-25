<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Viderent Admin</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route("doadminlogout") }}">Log Out</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Dashboard</h1>
        </div>
    </div>
    @if (Session::has("message"))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{{ Session::get("message") }}}
            </div>
        </div>
    </div>
    @endif
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-3">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a data-toggle="tab" href="#partners">Partners</a></li>
                <li class=""><a data-toggle="tab" href="#clients">Clients</a></li>
            </ul>
        </div>
        <div class="col-lg-9">
            <div class="tab-content">
                <div class="tab-pane active well" id="partners">
                    <form action="{{ route("adminsavepartners") }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <label>SubHeader</label>
                        <input name="inputSubHeader" value="{{{ $data["partnerSubHeader"]  }}}" type="text" class="form-control" placeholder="SubHeader text" />
                        <br />
                        <label>Company Formation Text</label>
                        <input name="inputCompanyFormationText" value="{{{ $data["companyFormationText"] }}}" type="text" class="form-control" placeholder="Company Formation text" />
                        <br />
                        <label>Program Satisfaction Text</label>
                        <input name="inputProgramSatText" value="{{{ $data["programSatText"] }}}" type="text" class="form-control" placeholder="Program Satisfaction text" />
                        <br />
                        <label>Ecosystem Growth</label>
                        <input name="inputEcosystemGrowthText" value="{{{ $data["ecoSystemGrowthText"] }}}" type="text" class="form-control" placeholder="Ecosystem Growth text" />
                        <br />
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
                <div class="tab-pane well" id="clients">
                    <form action="{{ route("adminsaveclients") }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <label>Team Text</label>
                        <textarea class="form-control" placeholder="Teams text" name="inputTeamText">{{{ $data["clientsTeamText"] }}}</textarea>
                        <br />
                        <label>Organizations Text</label>
                        <textarea class="form-control" placeholder="Organizations text" name="inputOrganizationsText">{{{ $data["clientsOrgText"] }}}</textarea>
                        <br />
                        <label>Ecosystems Text</label>
                        <textarea class="form-control" placeholder="Ecosystems text" name="inputEcosystemsText">{{{ $data["clientEcosystemsText"] }}}</textarea>
                        <br />
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
</body>
</html>
