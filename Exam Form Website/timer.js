


const timer=document.getElementById("stopwatch");
hr=0;
min=0;
sec=0;
stoptimer=true;

function StartExamTimer() {
		if(stoptimer==true){
			stoptimer=false;
			timercycle();
		}
	}

function StopTimer(){
	if(stoptimer=false){
		stoptimer=true;
	}
}




function timercycle(){
	if(stoptimer==false){
	sec=parseInt(sec);
	min=parseInt(min);
	hr=parseInt(hr);

	sec=sec+1;

	if(sec==60){
		min=min+1;
		sec=0;
	}
	if(min==60){
		hr=hr+1;
		sec=0;
		min=0;
	}

	if(sec<10){
		sec="0"+sec;
	}
	if(min<10){
		min="0"+min;
	}
	if(hr<10){
		hr="0"+hr;
	}

	

	timer.innerHTML=hr+":"+min+":"+sec;
	setTimeout("timercycle()",1000);
}
}





function ResetTimer(){
	timer.innerHTML="00:00:00";
	hr=0;
	min=0;
	sec=0;
	stoptimer=true;
}
StartExamTimer()


