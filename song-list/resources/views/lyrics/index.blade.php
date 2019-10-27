@extends('theme.sb-admin.default')
@section('content')
	
	<div class="container-fluid">
		
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Album Lineup
				</h1>
				<ol class="breadcrumb">
					<li>
						<i class="fa fa-dashboard"></i>  <a href="/dashboard">Dashboard</a>
					</li>
					<li class="active">
						<i class="fa fa-edit"></i> Album Lineup
					</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="col-sm-12">
				  @if(session()->get('success'))
				    <div class="alert alert-success">
				      {{ session()->get('success') }}  
				    </div>
				  @endif
				</div>
				<div>
				    <a style="margin: 19px;" href="{{ route('lyrics.create')}}" class="btn btn-primary">New Song</a>
				</div>  
				<h2>List of Songs</h2>
				<div class="table-responsive">
					<table id="dtSongList" class="display" style="width:100%">
						<thead>
							<tr>
								<th>Title</th>
								<th>Artist</th>
								<th>Song Lyrics</th>
								<th>Date Created</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($lyrics as $lyric)
								<tr>
									<td>{{$lyric->title}}</td>
									<td>{{$lyric->artist}}</td>
									<td>{{$lyric->song_lyrics}}</td>
									<td>{{$lyric->created_at}}</td>
									<td align="right">
										<a href="{{ route('lyrics.edit',$lyric->id)}}" class="btn btn-primary">Edit</a>
									</td>
									<td>
										<form action="{{ route('lyrics.destroy', $lyric->id)}}" method="post">
										  @csrf
										  @method('DELETE')
										  <button class="btn btn-danger" type="submit">Delete</button>
										</form>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			</div>
		</div>
	</div>
@endsection

