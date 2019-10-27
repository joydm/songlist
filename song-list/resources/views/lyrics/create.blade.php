@extends('theme.sb-admin.default')
@section('content')

	<div class="container-fluid">
		
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Write a Song
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="/dashboard">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Write a Song
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
                    <div class="col-lg-6">
                    	@if ($errors->any())
					      <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					              <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					      </div><br />
					    @endif
                        <form role="form" method="post" action="{{ route('lyrics.store') }}">
                        	@csrf
                            <div class="form-group">
                                <label>Song Title</label>
                                <input class="form-control" type="text" name="title">
                            </div>

                            <div class="form-group">
                            	<label>Artist</label>
                                <input class="form-control" type="text" name="artist">
                            </div>

                            <div class="form-group">
                               <label>Song Lyrics</label>
                                <input class="form-control" type="text" name="song_lyrics">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>

                        </form>

                    </div>
                    <div class="col-lg-6"></div>

	</div>

@endsection