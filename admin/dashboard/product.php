<?php include 'includes/header.html'; ?>


	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Product</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			

				<!-- Striped table End -->
				<!-- Responsive tables Start -->
				<div class="pd-20 card-box mb-30">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">Product id</th>
									<th scope="col">Book Name</th>
									<th scope="col">Username</th>
									<th scope="col">Book Type</th>
									<th scope="col">MRP</th>
                                             <th scope="col">Price</th>
                                             <th scope="col">Quntity</th>
                                             <th scope="col">Action</th>
											 <th scope="col">status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Born a Crime</td>
									<td>Heisenberg</td>
									<td>Humor</td>
									<td>500</td>
									<td>450</td>
									<td>5</td>
									<td id="icon-td"><a href="product-edit.php"><i class="micon dw dw-pencil" id="edit-btn"></i></a>
									<i class="micon dw dw-trash" id="delete-btn"></i></td>
									<td><span class="badge badge-primary">Primary</span></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Theory Of Everything</td>
									<td>stevenHawking</td>
									<td>Scintific</td>
									<td>700</td>
									<td>600</td>
									<td>2</td>
									<td id="icon-td"><a href="product-edit.php"><i class="micon dw dw-pencil" id="edit-btn"></i></a>
									<i class="micon dw dw-trash" id="delete-btn"></i></td>
									<td><span class="badge badge-secondary">Secondary</span></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Harry Potter</td>
									<td>jkROwling</td>
									<td>Fiction</td>
									<td>600</td>
									<td>550</td>
									<td>9</td>
									<td id="icon-td"><a href="product-edit.php"><i class="micon dw dw-pencil" id="edit-btn"></i></a>
									<i class="micon dw dw-trash" id="delete-btn"></i></td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
								
							</tbody>
						</table>
					</div>
					<div class="collapse collapse-box" id="responsive-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#responsive-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#responsive-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="responsive-table-code">
<div class="table-responsive">
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	    </tr>
	  </tbody>
	</table>
</div>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Responsive tables End -->			<!-- Contextual classes End -->
			</div>
<?php include 'includes/footer.html'; ?>
			