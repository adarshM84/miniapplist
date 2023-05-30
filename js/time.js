let daysA=['SUNDAY','MONDAY','TUESDAY','WEDNESDAY','THURSDAY','FRIDAY','SATURDAY'];
// time 
function loadCurrentTimeInfo(){
    let today=new Date();
    let year=today.getFullYear();
    let month=today.getMonth()+1;
    let day=today.getDate();
    document.getElementById('currentDate').innerHTML="Today : "+day+"-"+month+"-"+year;

    let hour=today.getHours();
    let minute=today.getMinutes();
    let second=today.getSeconds();
    let suffix="AM";
    if(hour>12){
        suffix="PM";
        hour=hour-12;
    }
    if(hour==12){
        suffix="PM";
    }

    //add 0
    if(hour<10){
        hour="0"+hour;
    }
    if(minute<10){
        minute="0"+minute;
    }
    if(second<10){
        second="0"+second;
    }
    document.getElementById('currentTime').innerHTML=hour+":"+minute+":"+second+" "+suffix;
    document.getElementById('currentDay').innerHTML=daysA[today.getDay()];
    setInterval(loadCurrentTimeInfo,1000);
}
