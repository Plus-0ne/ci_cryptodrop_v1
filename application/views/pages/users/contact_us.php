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
					<i class="fas fa-align-justify"></i>&nbsp <strong> Contact us via links </strong>
				</h3>
			</div>
		</div>
		<div class="row m-5 animated fadeIn">
			<div class="col-sm-12 col-md-11 pl-5 pr-5">
				<h5>
					<a class="slinks" href="https://bitcointalk.org/index.php?topic=4640928.0">
						<i class="fab fa-bitcoin"></i>  &nbsp&nbsp  BitCoin Talk
					</a>
				</h5>
				<h5>
					<a class="slinks" href="https://discordapp.com/invite/NkBtY4X">
						<i class="fab fa-discord"></i>  &nbsp&nbsp  Discord
					</a>
				</h5>
				<h5>
					<a class="slinks" href="https://www.facebook.com/webnproject/">
						<i class="fab fa-facebook"></i> &nbsp&nbsp Facebook
					</a>
				</h5>
				<h5>
					<a class="slinks" href="https://github.com/Webinnovationph">
						<i class="fab fa-github"></i>  &nbsp&nbsp  GitHub
					</a>
				</h5>
				<h5>
					<a class="slinks" href="https://t.me/WEBN_EngOfficial_GroupChat">
						<i class="fab fa-telegram"></i>  &nbsp&nbsp  Telegram
					</a>
				</h5>
				<h5>
					<a class="slinks" href="https://twitter.com/WebnProject">
						<i class="fab fa-twitter"></i> &nbsp&nbsp Twitter
					</a>
				</h5>
			</div>
		</div>
		<div class="row"><div class="space_divide col-sm-11 m-auto"></div></div>
		<div class="row">
			<div class="col-sm-12 content-text-heading animated fadeIn pt-5 pl-5">
				<h3>
					<i class="fas fa-align-justify"></i>&nbsp <strong> Enquire for Airdrop Listing </strong>
				</h3>
			</div>
		</div>
		<div class="row m-5 animated fadeIn">
				<div class="col-sm-12 col-md-11 pl-5 pr-5">
					<h5>
						Do you want us to promote your Airdrop ? Communicate with us, use the details provided below.
					</h5>
					<p>
						<ul>
							<li>
								<h5>
									Email <-Example email->
								</h5>
							</li>
						</ul>
					</p>
				</div>
		</div>
		<div class="row"><div class="space_divide col-sm-11 m-auto"></div></div>
		<div class="row">
			<div class="col-sm-12 content-text-heading animated fadeIn pt-5 pl-5">
				<h3>
					<i class="fas fa-align-justify"></i>&nbsp <strong> Any Concerns ?  </strong>
				</h3>
			</div>
		</div>
		<div class="row m-5 animated fadeIn">
			<div class="col-sm-12 col-md-11 col-lg-8 col-xl-4 pl-5 pr-5">
				<form class="msg-form">
					<div class="input-contain">
						<h5>
							<label class="subs-title"> Your Name </label>
						</h5>
						<input class="subs-input" type="text" name="">
					</div>
					<div class="input-contain">
						<h5>
							<label class="subs-title"> Your Email Address </label>
						</h5>
						<input class="subs-input" type="email" name="">
					</div>
					<div class="input-contain">
						<h5>
							<label class="subs-title"> Your Subject </label>
						</h5>
						<input class="subs-input" type="text" name="">
					</div>
					<div class="input-contain">
						<h5>
							<label class="subs-title"> Your Message </label>
						</h5>
						<textarea class="subs-input"></textarea>
					</div>
					<button class="btn-concern">
							Send
						</button>

				</form>
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