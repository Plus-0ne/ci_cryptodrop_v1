<!-- Load template  -->
<?php $template_header;?>
<body id="anch-body">
<div class="wrapper">
	<div class="container-fluid">
		<div class="row header-container">
			<div class="col-lg-12 header">
				<?php $this->load->view('_template/users/navigation_bar');?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 content-text-heading animated fadeIn pt-5 pl-5">
				<h3>
					<i class="fas fa-align-justify"></i>&nbsp <strong> Frequently Asked Questions </strong>
				</h3>
			</div>
		</div>
		<style type="text/css">
			.card
			{
				border-radius: 1px;
				border-right: 1px solid #A9A9A9;
				border-left: 1px solid #A9A9A9;
				border-bottom:  1px solid #A9A9A9;
			}
			.faqs-title
			{
				background-color: #f1c40f;
				padding: 19px;
				color: white;
			}
		</style>
		<div class="row m-5 animated fadeIn">
			<div class="col-sm-12 col-md-11 m-auto">
				<a class="slinks" data-toggle="collapse" href="#q1" role="button" aria-expanded="false" aria-controls="collapseExample">
					<div class="faqs-title">
						<h5>
							What is CryptoCurrency ?
						</h5>
					</div>
				 </a>
				<div class="collapse card-container" id="q1">
				  <div class="card card-body">
				    is a digital asset designed to work as a medium of exchange that uses strong cryptography to secure financial transactions, control the creation of additional units, and verify the transfer of assets. Cryptocurrencies use decentralized control as opposed to centralized digital currency and central banking systems.
				  </div>
				</div>
				<br>
				<a class="slinks" data-toggle="collapse" href="#q2" role="button" aria-expanded="false" aria-controls="collapseExample">
					<div class="faqs-title">
						<h5>
							What is Airdrops ?
						</h5>
					</div>
				 </a>
				<div class="collapse card-container" id="q2">
				  <div class="card card-body">
				    Airdrop refers to the free distribution of small amounts of a certain virtual currency tokens to its community members either for free or for performing small tasks.
				  </div>
				</div>
			</div>
		</div>
		
		
	</div>
</div>

<!-- Load template  -->
<?php $this->load->view('_template/users/footer');?>
</body>

<!-- Load template  -->
<?php $this->load->view('_template/users/jsscripts');?>
</html>