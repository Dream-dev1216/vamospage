<style>
	.meter {
		height: 25px;
		position: relative;
		background: lightgray;
		border-radius: 25px;
		padding: 10px;
	}

	.meter>span {
		display: block;
		height: 500%;
		border-radius: 25px;
		background-color: #009926;
		margin-top: -10px;
		margin-left: -10px;
	}

	.steps {
		font-size: 12px;
		font-weight: bolder;
		color: #009926;
		margin-right: 27px;
	}

	.dot {
		margin-top: 5px;
		margin-right: 9px;
		height: 15px;
		width: 15px;
		background-color: #f9e769;
		border-radius: 50%;
		display: inline-block;
	}

	.dur {
		margin-top: 3px;
		padding-left: 4%;
		padding-right: 2%;
		color: #f9e769;
		font-size: small;
		font-weight: bolder;
	}
</style>
<div class="container-fluid contentHeader">
	<div class="container pt-2 contentHeadLg">
		<div class="row d-flex align-items-center">
			<div class="col-5" style="height:fit-content;">
				<a href="#"><img class="logoTop" width="50px" height="50px" style=" border-right-style: solid;  border-right-color: #009926; margin-right:20px; float:left;" src="https://vamosrentacar.com/images/logo.svg"> </a>
				<p style="font-size:12px; color:#009926;">
					More Smiles,<br>Less Hassles<br><strong style="font-size:12px;">No Hidden Fees!</strong>
				</p>
			</div>
			<div class="col-7">
				<div class="meter">
					<span style="width: 33%">
						<span class="dot" style="float: right;"></span>
					</span>
				</div>
				<div style="display: flex; flex-direction:row; margin-left:10px;">
					<p class="steps">Search for a Car Rental</p>
					<p class="steps">Select a Car</p>
					<p class="steps">Select Insurance and Service</p>
					<p class="steps">Reserve</p>
					<p class="steps">Order Complete</p>
				</div>
			</div>
		</div>
		<div style="text-align:center; padding-left:15%; padding-right:15%; ">
			<div style="background-color:#009926; display:flex; flex-direction:row; height:25px; border-radius:10px;">
				<p class="dur">Pick Up At : <small style="color:white">Sar Jose Airpot / Feb 26,2019 1:00 pm</small></p>
				<p class="dur">Return At : <small style="color:white">Sar Jose Airpot / Feb 26,2019/ 11:00 pm</small></p>
				<p class="dur">Rental Period : <small style="color:white">2 days</small></p>
			</div>
		</div>
	</div>
</div>