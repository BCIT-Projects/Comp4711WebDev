<div class="jumbotron shadow">
	<div class="container">
	    <h1>NFL Predictor</h1>
    </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6 text-center">
			<h4>Your Team: Steelers</h4>
		</div>
	    <form class="col-sm-6 text-center" onsubmit="return false;" name="predictionForm" id="predictionForm" method="post">
			<select id="codeSelect" name="codeSelect" style="width: 15em; margin-right: 20px;">
				{Codes}
					<option value="{Code}">{Code} - {TeamName}</option>
				{/Codes}
			</select>
			<button class="btn btn-primary btn btn-default" id="predictButton">Predict</button>
	    </form>

	</div> <!-- end row -->
	<h3 class="text-center">VS</h3>

    <div class="row">
		<div class="col-sm-6" id="yourResults">
	    </div>
	    <div class="col-sm-6" id="opponentResults">
	    </div>
	</div>
</div>

<script src="/assets/js/predict.js"></script>
