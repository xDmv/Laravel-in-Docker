@extends('admin.main2')
@section('content')
<div class="content-wrapper">
	<section class="content-header">
	<h1>
		Commands
		<small>Наша команда</small>
		<small>
			<a href="create.html">
				<span class="badge bg-green">
					Добавить
				</span>
			</a>
		</small>
	</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Commands</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="box-body">
				<table class="table table-bordered">
					<tr>
						<th style="width: 15px">Id</th>
						<th>Имя</th>
						<th style="width: 100px">Язык</th>
						<th style="width: 100px">Активация</th>
					</tr>
					<tr>
						<td>{{$commands->id}}</td>
						<td>{{$commands->title}}</td>
						<td>{{$commands->lang}}</td>
						<td>{{$commands->activate}}</td>
					</tr>
					<tr>
						<td>1.</td>
						<td>Имя члена команнды</td>
						<td>Русский</td>
						<td>
							<span class="badge bg-green">
								<a href="edit.html" style="color: #fff;">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
							</span>
							<span class="badge bg-yellow">
								<i class="fa fa-check-square-o" aria-hidden="true"></i>
							</span>
							<span class="badge bg-red">
								<i class="fa fa-trash" aria-hidden="true"></i>
							</span>
						</td>
					</tr>
					<tr>
						<td>нет записей</td>
						<td>нет записей</td>
						<td>нет записей</td>
						<td>нет записей</td>
					</tr>
				</table>
			</div>
		</div>
	</section>
</div>
@endsection
