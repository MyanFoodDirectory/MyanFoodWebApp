
function Countdown(){
	this.start_time = "00:60:00";
	this.target_id = "#timer";
	this.name = "tt";
}

Countdown.prototype.init = function(){
	this.reset();
	setInterval(this.name + '.tick()' , 1000);
}

Countdown.prototype.reset = function(){
	time = this.start_time.split(":");
	this.hours   = parseInt(time[0]);
	this.minutes = parseInt(time[1]);
	this.seconds = parseInt(time[2]);
	this.update_target();
}

Countdown.prototype.tick = function(){
	if(this.hours > 0 || this.seconds > 0 || this.minutes > 0)
	{
		
		if(this.seconds == 0)
		{
			if(this.minutes > 0){
				this.minutes = this.minutes - 1;
				this.seconds = 59;
			}
			else if(this.minutes == 0)
			{
				if(this.hours > 0){
				this.hours = this.hours - 1;
				this.minutes = 59;
				this.seconds = 59;
				}
				
			}
			
		}else {
			this.seconds = this.seconds - 1;
		}
		this.update_target();
	}
	else if(this.hours == 0 && this.seconds == 0 && this.minutes == 0)
 	{
 		alert("You did not answer the question in the allowed time. It will be marked as incorrect.");
 		history.back();
 	}
}

Countdown.prototype.update_target = function(){
	seconds = this.seconds;
	minutes = this.minutes;
	hours = this.hours;
	if (hours < 10) hours = "0" + hours;
	if(minutes < 10) minutes = "0" + minutes;
	if(seconds < 10) seconds = "0" + seconds;
	document.getElementById('timer').innerHTML = hours + "&nbsp;" + ":" + "&nbsp;" + minutes + "&nbsp;"  + ":" + "&nbsp;" + seconds;
}
