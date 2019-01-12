@extends('admin.main')
@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Dashboard
			<small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>
	<section class="content">
		<ul class="sidebar-menu" data-widget="tree">
			<li>
				<span class="badge bg-blue">
					<a href="pages/services/index.html" style="color: #fff;">
						<i class="fa fa-cog" aria-hidden="true"> Services</i>
					</a>
				</span>
			</li>
			<li>
				<span class="badge bg-blue">
					<a href="pages/command/index.html" style="color: #fff;">
						<i class="fa fa-users" aria-hidden="true"> Commands</i>
					</a>
				</span>
			</li>
			<li>
				<span class="badge bg-blue">
					<a href="pages/exclusive/index.html" style="color: #fff;">
						<i class="fa fa-star" aria-hidden="true"> Exclusive</i>
					</a>
				</span>
			</li>
			<li>
				<span class="badge bg-blue">
					<a href="pages/gallery/index.html" style="color: #fff;">
						<i class="fa fa-picture-o" aria-hidden="true"> Gallery</i>
					</a>
				</span>
			</li>
		</ul>
	</section>
</div>
@endsection
