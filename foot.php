<script type="text/javascript" src="js/jqueryv2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script type="text/javascript" src="js/Chart.bundle.min.js"></script>
<script type="text/javascript" src="js/utils.js"></script>
<link rel="stylesheet" href="css/select2.min.css" /> 
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript" src="js/wizard.js"></script>
<script type="text/javascript" src="js/common.js"></script>

<script>
	$('.cl_tabs').click(function(){
	    $('.tab-pane').removeClass('active in');
	    $('.tb-link').removeClass('active');
	    $('#tab5').addClass('active in');
	    $('.tb-link:nth-child(5)').addClass('active');
	});
</script>
<script>
	
	/* Charts */
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var doughnutData = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                    '5',
                    '45',
                    '10',
                    '10',
                    '25',
                    '5'
                ],
                backgroundColor: [
                    "#fde46d",
                    "#e7cd51",
	                "#dbbc4e",
	                "#C8AC46",
	                "#906f32",
	                "#5a3e1d"
                ],
                borderWidth: '1',
                label: 'Dataset 1'
            }],
            labels: [
                "Marketing and Promos	",
                "System Development and Maintenance",
                "Board and Administration	",
                "International Expansion & Facility",
                "Legal Team",
                "Listing in Exchange / Community Building"
            ]
        },
        options: {
            responsive: true,
            legend: {
                display: false,
            },
            title: {
                display: true,
                text: 'Use of Proceeds'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };
	
	var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    '50',
                    '25',
                    '10',
                    '5',
                    '10'
                ],
                backgroundColor: [
                    "#fde46d",
                    "#e7cd51",
	                "#dbbc4e",
	                "#C8AC46",
	                "#906f32"
                ],
                borderWidth: '1',
                label: 'Dataset 1',
            }],
            labels: [
                "ICO Sale",
                "Bonus and Bounty",
                "Founders and Team",
                "Advisors",
                "Reserve"
            ]
        },
        options: {
            responsive: true,
            legend: {
				display: false,
				labels: {
	                fontColor: 'black',
	                boxWidth: 15
	            }
				
			},
			title: {
                display: true,
                text: 'Token Allocation',
            }
        }
    };
    
    /* Countdown */
   	function CountdownTimer(elm,tl,mes){
	 	this.initialize.apply(this,arguments);
	}
	CountdownTimer.prototype={
	 initialize:function(elm,tl,mes) {
	  this.elem = document.getElementById(elm);
	  this.tl = tl;
	  this.mes = mes;
	 },countDown:function(){
	  var timer='';
	  var today=new Date();
	  var day=Math.floor((this.tl-today)/(24*60*60*1000));
	  var hour=Math.floor(((this.tl-today)%(24*60*60*1000))/(60*60*1000));
	  var min=Math.floor(((this.tl-today)%(24*60*60*1000))/(60*1000))%60;
	  var sec=Math.floor(((this.tl-today)%(24*60*60*1000))/1000)%60%60;
	  var me=this;

	  if( ( this.tl - today ) > 0 ){
	   timer += '<span class="number-wrapper"><div class="line"></div><div class="caption">days</div><span class="number day">'+day+'</span></span>';
	   timer += '<span class="number-wrapper"><div class="line"></div><div class="caption">hours</div><span class="number hour">'+this.addZero(hour)+'</span></span>';
	   timer += '<span class="number-wrapper"><div class="line"></div><div class="caption">minutes</div><span class="number min">'+this.addZero(min)+'</span></span><span class="number-wrapper"><div class="line"></div><div class="caption">seconds</div><span class="number sec">'+this.addZero(sec)+'</span></span>';
	   this.elem.innerHTML = timer;
	   tid = setTimeout( function(){me.countDown();},10 );
	  }else{
	   this.elem.innerHTML = this.mes;
	   return;
	  }
	 },addZero:function(num){ return ('0'+num).slice(-2); }
	}
     function timer(){

	 // Set countdown limit
	 var tl = new Date('2018/05/01 00:00:00');

	 // You can add time's up message here
	 var timer = new CountdownTimer('timer',tl,'<span class="number-wrapper"><div class="line"></div><span class="number end">Expired!</span></span>');
	 timer.countDown();
	}
     
     window.onload=function(){
 		timer();
 		
 		var ctx = document.getElementById("chart-area").getContext("2d");
        window.myDoughnut = new Chart(ctx, doughnutData);
        var ctx = document.getElementById("chart-area1").getContext("2d");
        window.myPie = new Chart(ctx, config);
	}
</script>

