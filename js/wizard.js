$(document).ready(function(){
	var noOfSteps = $('#stepsUl').children().length;
	//alert(noOfSteps);
	var percentage = 100/noOfSteps;
	$('#progressBar').css('width',percentage+'%');
	function steps(currentStep) {
		//Appy only if validated
		/*for(j=1;j<=currentStep;j++) {
			if(!validateThisForm(j)) {
				return false;
			}
		}*/
		var nextStep = parseInt(currentStep)+1;
		var currentPercentage = currentStep * percentage;
		for(var i=1; i<=noOfSteps; i++) {
			if(i<currentStep) {
				
				$('#0'+i+'_00').addClass('done');
				$('#0'+i+'_00').removeClass('selected');
				$('#step-0'+i+'_00').addClass('hide');
			}
			else if(i>currentStep) {
				$('#0'+i+'_00').removeClass('done');
				$('#0'+i+'_00').removeClass('selected');
				$('#step-0'+i+'_00').addClass('hide');
			}
			else if(i==currentStep) {
				$('#0'+i+'_00').removeClass('done');
				$('#0'+i+'_00').addClass('selected');
				$('#step-0'+i+'_00').removeClass('hide');
			}
		}
		$('#progressBar').css('width',currentPercentage+'%');
	}

	$(document).on('click', '.step', function() {
		var paramArr = this.id.split('_');
		steps(parseInt(parseInt(paramArr[0])));
	});

	$(document).on('click', '.BackBtn', function() {
		steps(this.id);
	});

	$(document).on('click', '.NextBtn', function() {
		steps(this.id);
	});
});
