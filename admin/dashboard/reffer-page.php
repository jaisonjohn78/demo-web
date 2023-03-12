<?php 
session_start();
include '../../html/includes/config.php';

$user_id = $_SESSION['user_id'];
$user_info = mysqli_query($conn, "SELECT * FROM `master_user_tb` WHERE id='$user_id'");
$row = mysqli_fetch_assoc($user_info);

// $link = "https://easyearn.in//html/account/sign-up.php?referral_code=".$row['referral_code'];
$link = "http://localhost/easyearn/html/account/sign-up.php?referral_code=".$row['referral_code'];




include 'includes/header.html'; 
?>


	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-8 col-sm-12 d-flex">
							<div class="title">
								<h4>My Referral Code</h4>
							</div>
						
								
						</div>
						<div class="col-md-4 col-sm-12 text-right">
							<div class="dropdown">
								
								<a id="btnn" class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									" C4S0P1 "
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" onclick="copy_code()">Copy to Clipboard</a>
									<a class="dropdown-item" href="#">Copy link</a>
									<a class="dropdown-item" href="#">Share</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row d-flex text-center" >
					<a class="text-center" href="<?php echo $link; ?>" target="_blank"><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo $link; ?>&choe=UTF-8" title="Link for your refferal" /></a>
						<h4 class="h4 text-center">Scan and share with everyone</h4>
						<div class="share-dialog">
							<style>
								.hidden {
  display: none;
}

svg {
  width: 20px;
  height: 20px;
  margin-right: 7px;
}

button, .button {
  display: flex;
  align-items: center;
  justify-content: center;
  height: auto;
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777;
  text-align: center;
  font-size: 14px;
  font-weight: 500;
  line-height: 1.1;
  letter-spacing: 2px;
  text-transform: capitalize;
  text-decoration: none;
  white-space: nowrap;
  border-radius: 4px;
  border: 1px solid #ddd;
  cursor: pointer;
}

button:hover, .button:hover {
  border-color: #cdd;
}

.share-button, .copy-link {
  padding-left: 30px;
  padding-right: 30px;
}

.share-button, .share-dialog {
    margin: 5px auto;
}

.share-dialog {
  display: none;
  width: 95%;
  max-width: 500px;
  box-shadow: 0 8px 16px rgba(0,0,0,.15);
  z-index: -1;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 4px;
  background-color: #fff;
}

.share-dialog.is-open {
  display: block;
  z-index: 2;
}

header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}

.targets {
  display: grid;
  grid-template-rows: 1fr 1fr;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
  margin-bottom: 20px;
}

.close-button {
  background-color: transparent;
  border: none;
  padding: 0;
}

.close-button svg {
  margin-right: 0;
}

.link {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  border-radius: 4px;
  background-color: #eee;
}

.pen-url {
  margin-right: 15px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
							</style>
							<br>
  <header>
    <h3 class="dialog-title">Share this pen</h3>
    <button class="close-button"><svg><use href="#close"></use></svg></button>
  </header>
  <div class="targets">
    <a class="button">
      <svg>
        <use href="#facebook"></use>
      </svg>
      <span>Facebook</span>
    </a>
    
    <a class="button">
      <svg>
        <use href="#twitter"></use>
      </svg>
      <span>Twitter</span>
    </a>
    
    <a class="button">
      <svg>
        <use href="#linkedin"></use>
      </svg>
      <span>LinkedIn</span>
    </a>
    
    <a class="button">
      <svg>
        <use href="#email"></use>
      </svg>
      <span>Email</span>
    </a>
  </div>
  <div class="link">
    <div class="pen-url">https://codepen.io/ayoisaiah/pen/YbNazJ</div>
    <button class="copy-link">Copy Link</button>
  </div>
</div>

<button class="share-button" type="button" title="Share this article">
  <svg>
    <use href="#share-icon"></use>
  </svg>
  <span>Share</span>
</button>

<svg class="hidden">
  <defs>
    <symbol id="share-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></symbol>
    
    <symbol id="facebook" viewBox="0 0 24 24" fill="#3b5998" stroke="#3b5998" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></symbol>
    
    <symbol id="twitter" viewBox="0 0 24 24" fill="#1da1f2" stroke="#1da1f2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></symbol>
    
    <symbol id="email" viewBox="0 0 24 24" fill="#777" stroke="#fafafa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></symbol>
    
    <symbol id="linkedin" viewBox="0 0 24 24" fill="#0077B5" stroke="#0077B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></symbol>
    
    <symbol id="close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="9" x2="15" y2="15"></line><line x1="15" y1="9" x2="9" y2="15"></line></symbol>
  </defs>
</svg>

					</div>
				</div>
			

				<!-- Striped table End -->
				<!-- Responsive tables Start -->
				<div class="pd-20 card-box mb-30">
					<div class="table-responsive">
					<div class="title text-center">
								<h4>My Referral</h4>
							</div>	
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">id</th>
									<th scope="col">Referred to</th>
                                    <th scope="col">Package</th>
                                    <th scope="col">Returns</th>
                                    <th scope="col">Timestamp</th>
                                    <th scope="col">Status</th>
								</tr>
							</thead>
							<tbody>


								<!-- <tr>
									<th scope="row">1</th>
									<td>Born a crime</td>
									<td>treverNoah</td>
									<td>Naveen</td>
									<td>300</td>
									<td>1</td>
									<td>29/1/2023</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td><span class="badge badge-success">Success</span></td>
									
								</tr> -->
								
								
							</tbody>
						</table>
						<h2 class="text-center">No Record Found</h2>
					</div>
					
				</div>
				<!-- Responsive tables End -->			<!-- Contextual classes End -->
			</div>




			<script>
				function copy_code() {
					navigator.clipboard.writeText("<?php echo $link;  ?>");
					alert("Code Copied To Clipboard");
				
				}
				const shareButton = document.querySelector('.share-button');
const shareDialog = document.querySelector('.share-dialog');
const closeButton = document.querySelector('.close-button');

shareButton.addEventListener('click', event => {
  if (navigator.share) { 
   navigator.share({
      title: '<?php echo $row['name'] ?> has invited you to join Easyearn Community',
      url: '<?php echo $link; ?>'
    }).then(() => {
      alert('After Successful Registration, You Will Get 40% Of Your Referral Amount for first users followed by 20% and 10% for next users');
    })
    .catch(console.error);
    } else {
        shareDialog.classList.add('is-open');
    }
});

closeButton.addEventListener('click', event => {
  shareDialog.classList.remove('is-open');
});
			</script>
<?php include 'includes/footer.html'; ?>
			